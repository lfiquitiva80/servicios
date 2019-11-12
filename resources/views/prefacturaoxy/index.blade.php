@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        {{-- @include('prefacturaoxy.create') --}}
        @include('prefacturaoxy.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LA PREFACTURACION OXY</h4></b></center>
<a class="btn btn-success"  href="{{ url('Exportprefacturaoxy') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>


<br><br>
  

<table id="oxy" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Estado </td>
      <td>  Cliente </td>
      <td>  Detalle </td>
      <td>  No.prefactura</td>
      <td>  Acción </td>  
      <td></td>
      <td></td>
     </tr>
     </thead>
 </table>
   
</div>
</div>
</div>
<script>

$(document).ready(function() {
  $('#oxy').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('prefacturaoxyall') }}",
           
           "columns":[
             {data: 'id', name:'prefacturacion_oxy.id'},
             {data: 'idestado_facturacion', name:'estado_facturacion.id'},
             {data: 'clientenombre',name:'cliente.nombre'},
             {data:'detalle',name:'prefacturacion_oxy.detalle'},
             {data:'numero_factura',name:'prefacturacion_oxy.numero_factura'},
             {data: 'editar'},
             {data:'duplicar'},
             {data: 'destroy'}            
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
               { targets : [1],
                render : function (data, type, row) {
                         switch(data) {
                           case '3' : return '<span class="label label-info">PREFACTURACIÓN </span>'; break;                          
                           case '4' : return '<span class="label label-danger">DEVOLUCIÓN PREFACTURACIÓN </span>'; break;  
                           case '5' : return '<span class="label label-success">FACTURADO <i class="fa fa-check" aria-hidden="true"></i></span>'; break;  
                           case '6' : return '<span class="label label-default">NO FACTURADO</span>'; break;  
                         }
                    }
                  }  
                
            ]
        });
     
    });


    /////
    
    $(document).ready(function() {

      $('body').on('click','.Editar', function (event) {
         
         var clientesedit = $(this).data('idcliente'); 
         var estadofacturacion = $(this).data('estado');
         var edititme= $(this).data('item');
         var editperiodo =  $(this).data('periodo'); 
         var id =$(this).data('id'); 
         var idordenesdeservicio =  $(this).data('orden'); 
         
        
      
           if (clientesedit == 68) {
           
            $('.editarbarranca').hide();
            $('.editarperidobarranca').hide();
            $('.editarbarranca').prop('disabled', true);
            $('.editarperidobarranca').prop('disabled', true);

            $('.editarperidobogota').show();
            $('.editarbogota').show();
            $('.editarperidobogota').prop('disabled', false);
            $('.editarbogota').prop('disabled', false);
            $('.editarcliente').prop('disabled', true);
            
            $('.editclientename').val('OCCIDENTAL DE COLOMBIA LLC');

            $.ajax({
               url: '{!!URL::to('id_bogota')!!}',
               type: 'get',
               data: {item:edititme},
               success:function(data){
                var html_select='<option value=""  >SELECCIONE </option>';
                  for (let i = 0; i < data.length; i++) {
                     if (data[i].periodo == editperiodo) {
                        html_select+='<option value="'+data[i].periodo+'" selected >'+data[i].periodo+'</option>';
                     }
                     if (data[i].periodo != editperiodo) {
                        html_select+='<option value="'+data[i].periodo+'" >'+data[i].periodo+'</option>'
                     }
                     $('.editarperidobogota').html(html_select);

                  }
              }
            })
         }  
           if (clientesedit == 52) {
            $('.editarcliente').prop('disabled', true);
            $('.editclientename').val('OCCIDENTAL ANDINA LLC')
              $('.editarperidobogota').hide();
              $('.editarbogota').hide();
              $('.editarperidobogota').prop('disabled', true);
              $('.editarbogota').prop('disabled', true);

              $('.editarperidobarranca').show();
              $('.editarbarranca').show();
              $('.editarperidobarranca').prop('disabled', false);
              $('.editarbarranca').prop('disabled', false);

               $.ajax({
               url: '{!!URL::to('id_barranca')!!}',
               type: 'get',
               data: {item:edititme},
               success:function(data){
                var html_select='<option value=""  >SELECCIONE </option>';
                  for (let i = 0; i < data.length; i++) {
                     if (data[i].periodo == editperiodo) {
                        html_select+='<option value="'+data[i].periodo+'" selected >'+data[i].periodo+'</option>';
                     }
                     if (data[i].periodo != editperiodo) {
                        html_select+='<option value="'+data[i].periodo+'" >'+data[i].periodo+'</option>'
                     }
                     $('.editarperidobarranca').html(html_select);

                  }
              }
              
           })
         }

        

   });
      
      
   

///// EDITAR TARIFA BARRANCA
        $('.editarbarranca').change(function(event) {
         var  editbarranca = $(this).val();
         $('.editvalorunitario').val('');
         $('.editvalortotal').val('');
              $.ajax({
              url: '{!!URL::to('id_barranca')!!}',
              type: 'get',
              data: {item:editbarranca },
              success:function(data){
                var html_select='<option value=""  >SELECCIONE </option>';
                     for(var i=0;i<data.length;i++){
                     html_select+='<option value="'+data[i].periodo+'">'+data[i].periodo+'</option>';
                     $('.editarperidobarranca').html(html_select);
                    
                   }     
              }
            })
         });

      //});
    

      $('.editarperidobarranca').change(function(event) {
         var  editbarranca = $('.editarbarranca').val();
         var  editperiodo = $(this).val();
         var  consolidado = $('.consolidado').val();
              $.ajax({
              url: '{!!URL::to('id_barranca')!!}',
              type: 'get',
              data: {item:editbarranca },
              success:function(data){
                 for (let i = 0; i < data.length; i++) {
                   if (data[i].periodo == editperiodo) {
                     $('.editvalorunitario').val(data[i].valor_con_aui);
                     $('.editdetalle').val(data[i].descripcion)

                     var valor = data[i].valor_con_aui
                   }
                   var cantidad = $('.editcantidad').val();
                   var Total = cantidad*valor 
                   var valores = $('.editvalortotal').val(Total);
                   
                 }
                 
            }
         });

    });
    ///TARIFA BOGOTA 
    
    $('.editarbogota').change(function(event) {
         var  editbogota = $(this).val();
         $('.editvalorunitario').val('')
         $('.editvalortotal').val('');

         var valores = $('.editvalortotal').val('');

              $.ajax({
              url: '{!!URL::to('id_bogota')!!}',
              type: 'get',
              data: {item:editbogota },
              success:function(data){
                var html_select='<option value=""  >SELECCIONE </option>';
                 for (let i = 0; i < data.length; i++) {
                  html_select+='<option value="'+data[i].periodo+'">'+data[i].periodo+'</option>'; 
                  $('.editarperidobogota').html(html_select);
                 }
            }
            
         });

      });
    
      $('.editarperidobogota').change(function(event) {
         var  editbogota = $('.editarbogota').val();
         var  editperiodo = $(this).val();
        
              $.ajax({
              url: '{!!URL::to('id_bogota')!!}',
              type: 'get',
              data: {item:editbogota },
              success:function(data){
               var unitr= $('.editvalorunitario').val();
                 for (let i = 0; i < data.length; i++) {
                    if (data[i].periodo == editperiodo) {
                      $('.editvalorunitario').val(data[i].valor_con_aui);
                      $('.editdetalle').val(data[i].descripcion);

                      var valor = data[i].valor_con_aui
                      
                    }
                 }
                 var cantidad = $('.editcantidad').val();
                 var Total = cantidad*valor
                 var valores = $('.editvalortotal').val(Total);
            }
           
         });

      });
     
        

      $('.editcantidad').change(function(event) {
       var cantidad = $(this).val();
       var valor = $('.editvalorunitario').val();
       var  consolidado = $('.consolidado').val();

       
      // var  newvalor = valor.replace(/[. ]+/g,'').trim();
       var Total = cantidad*valor;
       //var total = new Intl.NumberFormat('es-ES').format(subTotal);
        $('.editvalortotal').val(Total);
         $('.consolidadototal').val(parseInt(Total) + parseInt(consolidado));

        

    });


      
   });   


     

    </script>
@endsection

<br style="display: none">
