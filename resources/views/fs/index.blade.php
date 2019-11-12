@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('fs.create') 
        @include('fs.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS  LÍNEAS DE NEGOCIO </h4></b></center>
<div class="col-xs-9">
<a class="btn btn-info" data-toggle="modal" href='#create_fs'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Línea de negocio</a>
 <a class="btn btn-success"  href="{{ url('Exportfs') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>
</div>
  
<br><br>

<table id="fs" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Descripcion</td>
      <td>  Acción </td>  
     </tr>
     </thead>
 </table>


</div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#fs').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('fsall') }}",
           
           "columns":[
              {data: 'id'},
              {data: 'descripcion'},
              {data: 'botones'},
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
               { orderable: true, className: 'nit', targets: [ 0,1 ] },
               { orderable: false, targets: '_all' }
            ] 
     });

});
</script>
@endsection

<br style="display: none">