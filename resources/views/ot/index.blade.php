@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('ot.create')
        @include('ot.edit')


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DEL CENTRO DE COSTOS INTERNO </h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_ot'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear OT</a>
<a class="btn btn-success"  href="{{ url('Exportot') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
    

<table id="ot" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Nombre </td>
      <td>  CC </td>
      <td>  Acción </td>  
     </tr>
     </thead>
 </table>


</div>
</div>
</div>
<script>

$(document).ready(function() {
    $('#ot').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('otall') }}",
           
           "columns":[
             {data: "id"},
             {data: "nombre"},
             {data:"cc"},
             {data: "botones"},
             
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
             
            ] ,

     });
});
    </script>
    

@endsection
<br style="display: none">
