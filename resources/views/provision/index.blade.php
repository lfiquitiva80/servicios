@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('provision.create')
        @include('provision.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS PROVISIONES</h4></b></center>
<div class="col-xs-9">
<a class="btn btn-info" data-toggle="modal" href='#create_provision'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Provision</a>
<a class="btn btn-success"  href="{{ url('exportprovision') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>
</div>
{!! Form::open(['route' => 'mesexportprovision', 'method'=>'GET','id'=>'mesprovision' ]) !!}

<div class="col-xs-2">
    <div class="form-group">
           {!! Form::text('mes',null,['class' => 'form-control buscarmes','placeholder' => 'Descargar Reporte','name'=>'mes','id'=>'mes']) !!}    
     </div>
</div>   
<button type="submit" class="btn btn-primary btn-sm" >Descargar</button>
  

{!! Form::close() !!}   
<br><br>

<table id="provision" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Estado</td>
      <td>  Concepto de la provision</td>
      <td>  Detalle</td>
      <td>  Acción </td>  
      <td> Duplicar?</td>
      <td> </td>
     </tr>
     </thead>
 </table>


</div>
</div>
</div>
<script>

$(document).ready(function() {
     $('.id_proveedor').change(function(event) {
         var  proveedor = $('.id_proveedor').val();
         // console.log(proveedor);
              $.ajax({
              url: '{!!URL::to('id_proveedores')!!}',
              type: 'get',
              data: {id:proveedor },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == proveedor) {

                 $('.nombre_proveedor').val(val.nombre);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.id_proveedoredit').change(function(event) {
         var  proveedoredit = $('.id_proveedoredit').val();
         // console.log(proveedoredit);
              $.ajax({
              url: '{!!URL::to('id_proveedores')!!}',
              type: 'get',
              data: {id:proveedoredit },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
              
             /* iterate through array or object */
                 if (val.id == proveedoredit) {
                  // console.log(val.id)
                 $('.nombreproveedor').val(val.nombre);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.idcostos').change(function(event) {
         var  costos = $('.idcostos').val();
         console.log(costos);
              $.ajax({
              url: '{!!URL::to('id_cosotos')!!}',
              type: 'get',
              data: {id:costos },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
               
                 if (val.id == costos) {
                 $('.nombre_costos').val(val.nombre);
                 $('.centrocostos').val(val.centro_de_costos);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.idcostosedit').change(function(event) {
         var  costosedit = $('.idcostosedit').val();
         // console.log(costosedit);
              $.ajax({
              url: '{!!URL::to('id_cosotos')!!}',
              type: 'get',
              data: {id:costosedit },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
               
                 if (val.id == costosedit) {
                 $('.nombre_costosedit').val(val.nombre);
                 $('.centrocostosedit').val(val.centro_de_costos);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.ot').change(function(event) {
         var  ot = $('.ot').val();
         console.log(ot);
              $.ajax({
              url: '{!!URL::to('id_ots')!!}',
              type: 'get',
              data: {id:ot },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == ot) {
                 $('.otname').val(val.cc);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.otedit').change(function(event) {
         var  otedit = $('.otedit').val();
         // console.log(otedit);
              $.ajax({
              url: '{!!URL::to('id_ots')!!}',
              type: 'get',
              data: {id:otedit },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == otedit) {
                 $('.otnameedit').val(val.cc);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.idpuc').change(function(event) {
         var  puc = $('.idpuc').val();
        //  console.log(puc);
              $.ajax({
              url: '{!!URL::to('id_pucs')!!}',
              type: 'get',
              data: {id:puc },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == puc) {
                    var descripcion= val.descripcion;
                    var cuenta = val.cuenta;
                    var numero = cuenta.substr(0,2);
                    $('.cuenta').val(cuenta); 
                 if ( numero == 74) {
                  $('.A2').val('');
                  $('.clave2').val('');
                  $('.A1').val(numero);
                  $('.clave1').val(descripcion+"-"+numero);
                  //  $('clave1').val(val.descripcion); 
                 }else{
                  $('.A1').val('');
                  $('.clave1').val('');
                  $('.A2').val(numero); 
                  $('.clave2').val(descripcion+"-"+numero);
                 }  
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.idpucedit').change(function(event) {
         var  editpuc = $('.idpucedit').val();
        // console.log(editpuc);
              $.ajax({
              url: '{!!URL::to('id_pucs')!!}',
              type: 'get',
              data: {id:editpuc },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == editpuc) {
                    var editdescripcion= val.descripcion;
                    var editcuenta = val.cuenta;
                    var editnumero = editcuenta.substr(0,2);
                    $('.cuentaedit').val(editcuenta); 
                 if (editnumero == 74) {
                  $('.adosedit').val('');
                  $('.clavedosedit').val('');
                  $('.aunoedit').val(editnumero);
                  $('.claveunoedit').val(editdescripcion+"-"+editnumero);
                  //  $('clave1').val(val.descripcion); 
                 }else{
                  $('.aunoedit').val('');
                  $('.claveunoedit').val('');
                  $('.adosedit').val(editnumero); 
                  $('.clavedosedit').val(editdescripcion+"-"+editnumero);
                 }  
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.lnegocioedit').change(function(event) {
         var  lnegocioedit = $('.lnegocioedit').val();
         var  detalle =  $('.detalleedit').val();
              $.ajax({
              url: '{!!URL::to('id_lnegocio')!!}',
              type: 'get',
              data: {id:lnegocioedit },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             
               
                 if (val.id == lnegocioedit) {
     
                 $('.detalleedit').val(val.prefijo+'-'+detalle); 
                 $(".lnegocioedit").prop('disabled', true);
                 $('.lnegocios').val(val.id); 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {

    $('#id_lineadenegocio').change(function(event) {
        var  lnegocio = $('#id_lineadenegocio').val();
        //console.log(lnegocio);
        $.ajax({
              url: '{!!URL::to('id_lnegocio')!!}',
              type: 'get',
              data: {id:lnegocio },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == lnegocio) {
                 $('#detalle').val(val.prefijo +"-");
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });
    });
   
    $('.lnegocios').change(function(event) {
        var  lnegocios = $('.lnegocios').val();
        var  detalle = $('#detalle').val();
        $.ajax({
              url: '{!!URL::to('id_lnegocio')!!}',
              type: 'get',
              data: {id:lnegocios },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == lnegocios) {
                 $('#detalle').val(val.prefijo +"- "+detalle);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });
    });

    $('#provision').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('provisionesall') }}",
           
           "columns":[
              {data: 'id', name:'provision.id'},
              {data: 'estadofacturacion',name:'estado_facturacion.id'},
              {data: 'descripcion', name:'puc.descripcion' },
              {data: 'detalle', name:'provision.detalle'},
              {data: "botones"},
              {data: "duplicar"},
              {data: "destroy"},
             
             ],
           "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           },
           "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "info":false,  
            "order": [[ 0, "desc" ]],

            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0, 1,2,3,4 ] },
               { orderable: false, targets: '_all' },
               { "width": "30%", "targets": 2 },
               { targets : [1],
                render : function (data, type, row) {
                         switch(data) {
                         case '1' : return '<span class="label label-success"> REVISIÓN <i class="fa fa-check" aria-hidden="true">'; break;
                         case '2' : return '<span class="label label-danger">DEVOLUCIÓN</span>'; break; 
                         case '3' : return '<span class="label label-info">PREFACTURACIÓN</span>'; break; 
                         case '4' : return '<span class="label label-warning">DEVOLUCIÓN PREFACTURACIÓN</span>'; break; 
                         case '5' : return '<span class="label label-success">FACTURADO  <i class="fa fa-check" aria-hidden="true"></span>'; break; 
                         case '6' : return '<span class="label label-default"> NO FACTURADO </span>'; break;
                          }
                    }
                } 
            ] ,

     });
 });

     $(document).ready(function() {

     $('body').on('click','.Edit', function (event) {
      var facturacion = $(this).data('estadofacturacion');
        if ( facturacion  != 1 && facturacion  != 2) {
            $('.estado').hide();
            $('.estadofacturacion').show();
            $('.estadofacturacion').prop('disabled', true);

            if (facturacion == 3) {
                $('.estadofacturacion').val('PREFACTURACIÓN');
            }
            if (facturacion == 4) {
                $('.estadofacturacion').val('DEVOLUCIÓN PREFACTURACIÓN<');
            }
            if (facturacion == 5) {
                $('.estadofacturacion').val('FACTURADO');
            }
            if (facturacion == 6) {
                $('.estadofacturacion').val('NO FACTURADO');
            }
        }
        


     });
});



    </script>
@endsection

<br style="display: none">
