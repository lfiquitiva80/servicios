
$(document).ready(function() {
    $('#editar_provision').on('show.bs.modal', function (event) {
 
     var button = $(event.relatedTarget)
     var id = button.data('id')
     var proveedor = button.data('proveedor')
     var nameproveedor = button.data('nameproveedor')
     var costos = button.data('costos')
     var namecliente = button.data('namecliente')
     var centro = button.data('centro')
     var ot = button.data('ot')
     var cc = button.data('cc')
     var puc = button.data('puc')
     var auno =  button.data('auno')
     var ados =  button.data('ados')
     var descripcionuno = button.data('descripcionuno')
     var descripciondos = button.data('descripciondos')
     var cuenta = button.data('cuenta')
     var fecha = button.data('fecha')
     var detalle = button.data('detalle')
     var valor = button.data('valor') 
     var estado = button.data('estadofacturacion') 
     var lineadenegocio =  button.data('lnegocio') 
 
    var modal = $(this)
 
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #id_proveedor').val(proveedor);
    modal.find('.modal-body .nombreproveedor').val(nameproveedor);
    modal.find('.modal-body #id_centro_de_costos').val(costos);
    modal.find('.modal-body .nombre_costosedit').val(namecliente);
    modal.find('.modal-body .centrocostosedit').val(centro);
    modal.find('.modal-body #id_ot').val(ot);
    modal.find('.modal-body .otnameedit').val(cc);
    modal.find('.modal-body #id_puc').val(puc);
    modal.find('.modal-body .otnameedit').val(cc);
    modal.find('.modal-body .aunoedit').val(auno);
    modal.find('.modal-body .adosedit').val(ados);
    modal.find('.modal-body .claveunoedit').val(descripcionuno);
    modal.find('.modal-body .clavedosedit').val(descripciondos);
    modal.find('.modal-body .cuentaedit').val(cuenta);
    modal.find('.modal-body #mes').val(fecha);
    modal.find('.modal-body #detalle').val(detalle);
    modal.find('.modal-body #valor').val(valor); 
    modal.find('.modal-body #id_estadofacturacion').val(estado);
    modal.find('.modal-body #id_lineadenegocio').val(lineadenegocio);
   })
   });


  
    
   

   $(document).ready(function() {
    $('#provisionCreate').bootstrapValidator({
       message: 'Este valor no es válido',
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
      fields: {
             id_proveedor: {
                 validators: {
                  notEmpty: {
                    message: 'Seleccione NIT/CC '
                   }
                }
            },
            id_centro_de_costos: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione nit cliente '
                      }
                  }
              },
            id_ot: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione Listado CC '
                      }
                  }
              },
            id_puc: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione Concepto de la provision'
                      }
                  }
              },
              
            detalle: {
                validators: {
                         stringLength: {
                           min: 2,
                           message: 'el detalle de la provision debe tener más de 2 caracteres '
                           },
                       notEmpty: {
                         message: 'el detalle de la provision es necesaria'
                       }
                   }
               },  
            valor: {
                validators: {
                        numeric: {
                        min: 4,
                    },
                        notEmpty: {
                        message: 'ingrese el valor del la provision '
                    }
                }
            },
            mes: {
                validators: {
                   notEmpty: {
                    message: 'la fecha es necesaria'
                     }
                }
            },
            id_estadofacturacion: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione'
                      }
                  }
              },
            id_lineadenegocio: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione'
                      }
                  }
              },      
                  
      }})
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#provisionCreate').data('bootstrapValidator').resetForm();
               // Prevent form submission
               e.preventDefault();
               // Get the form instance
               var $form = $(e.target);
               // Get the BootstrapValidator instance
               var bv = $form.data('bootstrapValidator');
                // Use Ajax to submit form data
               $.post($form.attr('action'), $form.serialize(), function(result) {
                   console.log(result);
                  }, 'json');
       });
  });
  $(document).ready(function() {
    $('#provisionUpdate').bootstrapValidator({
       message: 'Este valor no es válido',
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
      fields: {
             id_proveedor: {
                 validators: {
                  notEmpty: {
                    message: 'Seleccione NIT/CC '
                   }
                }
            },
            id_centro_de_costos: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione nit cliente '
                      }
                  }
              },
            id_ot: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione Listado CC '
                      }
                  }
              },
            id_puc: {
                validators: {
                      notEmpty: {
                          message: 'Seleccione Concepto de la provision'
                      }
                  }
              },
            detalle: {
                validators: {
                         stringLength: {
                           min: 2,
                           message: 'el detalle de la provision debe tener más de 2 caracteres '
                           },
                       notEmpty: {
                         message: 'el detalle de la provision es necesaria'
                       }
                   }
               },  
            valor: {
                validators: {
                        numeric: {
                        min: 4,
                    },
                        notEmpty: {
                        message: 'ingrese el valor del la provision '
                    }
                }
            },
            mes: {
                validators: {
                   notEmpty: {
                    message: 'la fecha es necesaria'
                }
            }
         },  
         id_estadofacturacion: {
            validators: {
                  notEmpty: {
                      message: 'Seleccione'
                  }
              }
          },      
          id_lineadenegocio: {
            validators: {
                  notEmpty: {
                      message: 'Seleccione'
                  }
              }
          },        
      }})
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#provisionUpdate').data('bootstrapValidator').resetForm();
               // Prevent form submission
               e.preventDefault();
               // Get the form instance
               var $form = $(e.target);
               // Get the BootstrapValidator instance
               var bv = $form.data('bootstrapValidator');
                // Use Ajax to submit form data
               $.post($form.attr('action'), $form.serialize(), function(result) {
                   console.log(result);
                  }, 'json');
       });
  });  

  $(document).ready(function() {
    $('#mesprovision').bootstrapValidator({
       message: 'Este valor no es válido',
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
      fields: {
            mes: {
                validators: {
                   notEmpty: {
                    message: 'la fecha es necesaria'
                }
            }
         },        
                  
      }})
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#mesprovision').data('bootstrapValidator').resetForm();
               // Prevent form submission
               e.preventDefault();
               // Get the form instance
               var $form = $(e.target);
               // Get the BootstrapValidator instance
               var bv = $form.data('bootstrapValidator');
                // Use Ajax to submit form data
               $.post($form.attr('action'), $form.serialize(), function(result) {
                   console.log(result);
                  }, 'json');
       });
  });  








  