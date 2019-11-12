@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        

   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LA PREFACTURA OTROS CLIENTES</h4></b></center>
<a class="btn btn-success"  href="{{ url('Exportprefacturacliente') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="prefacturacion" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Estado de facturacion </td>
      <td>  Nº Prefactura </td>
      <td>  W.O y Ckecklist </td>
      <td>  Cliente </td>
      <td>  Ciudad</td>
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
  $('#prefacturacion').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('revisionprefacturaclienteall') }}",
           
           "columns":[
             {data: 'id'},
             {data:'idestado_facturacion',name: 'estado_facturacion.id'},
             {data: 'numero_prefactura'},
             {data:'No_de_orden_de_servicio'},
             {data: 'nombre'},
             {data: 'ciudad'},
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
               { orderable: true, className: 'nit', targets: [ 0, 1,2,3,4,5 ] },
               { orderable: false, targets: '_all' },
               { targets : [1],
                 render : function (data, type, row) {
                          switch(data) {
                            case '2' : return '<span class="label label-danger">DEVOLUCIÓN </span>'; break;
                            case '3' : return '<span class="label label-info">PREFACTURACIÓN </span>'; break;                          
                            case '4' : return '<span class="label label-danger">DEVOLUCIÓN PREFACTURACIÓN </span>'; break;  
                            case '5' : return '<span class="label label-success">FACTURADO <i class="fa fa-check" aria-hidden="true"></span>'; break;  
                            case '6' : return '<span class="label label-default">NO FACTURADO</span>'; break;
                            default  : return '<span class="label label-default">NO FACTURADO</span>';  
                          }
                     }
                  },
                { targets : [3],
                  render : function (data, type, row) {
                    return '<a href="wo/'+data+'/edit"  class="btn btn-warning" title="Lista de Chequeo">'+data+'</a>';
                      }
                },    
            ]
        });
    });
  </script>
@endsection
    <br style="display: none">