@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('lnegocio.create')
        @include('lnegocio.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LINEA DE NEGOCIO</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_lnegocio'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Linea de negocio</a>
<a class="btn btn-success"  href="{{ url('Exportlineadenegocio') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="lnegocio" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Prefijo </td>
      <td>  Descripción </td>
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
    $('#lnegocio').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('lnegocio') }}",
           
           "columns":[
             {data: "id"},
             {data: "prefijo"},
             {data:"descripcion"},
             {data: "botones"},
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
            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0, 1,2 ] },
               { orderable: false, targets: '_all' },
             
            ] ,

     });
});
    </script>
@endsection

<br style="display: none">
