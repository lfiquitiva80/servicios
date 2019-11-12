@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('revisionoxy.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LA PREFACTURACION OXY</h4></b></center>
{{-- <a class="btn btn-info" data-toggle="modal" href='#create_prefacturaoxy'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Prefacturacion Oxy</a> --}}
<a class="btn btn-success"  href="{{ url('Exportprefacturaoxy') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="oxy" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Estado </td>
      <td>  Cliente </td>
      <td>  Detalle </td>
      <td>  Acción </td>  
      <th></th>
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
           "ajax" : "{{ url('revisionprefacturaoxyall') }}",
           
           "columns":[
             {data: 'id', name:'prefacturacion_oxy.id'},
             {data: 'idestado_facturacion', name:'estado_facturacion.id'},
             {data: 'clientenombre',name:'cliente.nombre'},
             {data:'detalle',name:'prefacturacion_oxy.detalle'},
             {data: 'botones'},
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
               { orderable: true, className: 'nit', targets: [ 0, 1,2,3 ] },
               { orderable: false, targets: '_all' },
               { targets : [1],
                render : function (data, type, row) {
                         switch(data) {
                           case '3' : return '<span class="label label-info">PREFACTURACIÓN </span>'; break;                          
                           case '4' : return '<span class="label label-danger">DEVOLUCIÓN PREFACTURACIÓN </span>'; break;  
                           case '5' : return '<span class="label label-success">FACTURADO <i class="fa fa-check" aria-hidden="true"></span>'; break;  
                           case '6' : return '<span class="label label-warning">NO FACTURADO</span>'; break;  

                          }
                    }
                  }   
            ]
        });
    });


    ///editar prefactura oxy
    $(document).ready(function() {
      $('body').on('click','.Editar', function (event) {
         
         var clientesedit = $(this).data('idcliente'); 
         var estadofacturacion = $(this).data('estado');
         if (estadofacturacion == 5) {
          $('.form-control').prop('disabled', true);


         }else{
          $('.form-control').prop('disabled', false);

         }
      
           if (clientesedit == 68) {
            $('.editarcliente').prop('disabled', true);
             $('.editarbarranca').hide();
             $('.editarperidobarranca').hide();
             $('.editarperidobogota').show();
             $('.editarbogota').show();
            $('.editarperidobogota').prop('disabled', true);
            $('.editarbogota').prop('disabled', true);
            $('.editarbarranca').val('');
            $('.editarperidobarranca').val('')
            $('.editclientename').val('OCCIDENTAL DE COLOMBIA LLC')

           }
           if (clientesedit == 52) {
            $('.editclientename').val('OCCIDENTAL ANDINA LLC')
            $('.editarcliente').prop('disabled', true);
              $('.editarperidobarranca').prop('disabled', true);
            $('.editarbarranca').prop('disabled', true);
               $('.editarperidobogota').hide();
               $('.editarbogota').hide();
               $('.editarperidobarranca').show();
               $('.editarbarranca').show();
               $('.editarperidobogota').val('');
               $('.editarbogota').val('');
               //$('.cuidad').val('Barrancabermeja')
           }
          });
       $('.editarcliente').change(function(event) {
      
      if (clientesedit == 68) {
       
      
       $('.editarbarranca').hide();
       $('.editarperidobarranca').hide();
       $('.editarperidobogota').show();
       $('.editarbogota').show();
       $('.editarperidobogota').prop('disabled', false);
       $('.editarbogota').prop('disabled', false);
       $('.editvalorunitario').val('');
       $('.editvalortotal').val('');
      }
      if (clientesedit == 52) {
        
         $('.editarperidobogota').hide();
         $('.editarbogota').hide();
         $('.editarperidobarranca').show();
         $('.editarbarranca').show();
         $('.editvalorunitario').val('');
        $('.editvalortotal').val('');
          //$('.cuidad').val('Barrancabermeja')
      }

      if (clientesedit == ''){
         $('.editarperidobarranca').val('');
         $('.editarbarranca').val('');
         $('.editarperidobogota').val('');
         $('.editarbogota').val('');
         $('.editvalorunitario').val('');
         $('.editvalortotal').val('');
         $('.editarbarranca').hide();
         $('.editarperidobarranca').hide();
         $('.editarperidobogota').show();
         $('.editarbogota').show();
      
         $('.editarperidobogota').prop('disabled', true);
         $('.editarbogota').prop('disabled', true);
      }

      });

    
   });   


     

    </script>
    @endsection

    <br style="display: none">