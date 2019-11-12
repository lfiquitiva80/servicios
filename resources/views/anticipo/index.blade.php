@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('anticipo.create')
        @include('anticipo.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LOS ANTICIPOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_anticipo'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Anticipo</a>
<a class="btn btn-success"  href="{{ url('Exportanticipo') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="anticipo" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  N° de la orden de servicio </td>
      <td>  Valor </td>
      <td>  Acción</td>  
      <td >  </td>
     </tr>
     </thead>
 </table>
       
</div>
</div>
</div>
<script>
  

$(document).ready(function() {
    $('#anticipo').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('anticipoall') }}",
           
           "columns":[
             {data: 'id', name:'id'},
             {data: 'No_de_orden_de_servicio' ,name:'ordenesdeservicio.No_de_orden_de_servicio'},
             {data: 'valor', name:'valor'},
             {data: 'botones'},
             {data: 'destroy'},
             ],
           "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           },
           "loadingRecords": "Cargando...",
             "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "info":false,  
            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0, 1,2 ] },
               { orderable: false, targets: '_all' },
               { "width": "30%", "targets": 1 },
            ] ,
             
             

     });
});

    </script>
    

    
@endsection

<br style="display: none">


