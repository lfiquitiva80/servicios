@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('tipodetarifa.create') 
        @include('tipodetarifa.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LOS TIPOS DE TARIFA </h4></b></center>
<div class="col-xs-9">
<a class="btn btn-info" data-toggle="modal" href='#create_tipodetarifa'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Tipo de tarifa</a>
 <a class="btn btn-success"  href="{{ url('Exporttipoddetarifa') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>
</div>
  
<br><br>

<table id="tipodetarifa" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Descripcion</td>
      <td>  Acción </td>  
      <td></td>
     </tr>
     </thead>
 </table>


</div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#tipodetarifa').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('tipodetarifaall') }}",
           
           "columns":[
              {data: 'id'},
              {data: 'nombre'},
              {data: 'edit'},
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
               { orderable: true, className: 'nit', targets: [ 0,1 ] },
               { orderable: false, targets: '_all' }
            ] 
     });

});
</script>
@endsection

<br style="display: none">