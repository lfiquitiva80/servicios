@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        {{-- @include('codigociudad.create')  --}}
        @include('codigociudad.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LOS CÓDIGOS </h4></b></center>
<div class="col-xs-9">
{{-- <a class="btn btn-info" data-toggle="modal" href='#create_codigociudad'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Código</a> --}}
<a class="btn btn-success"  href="{{ url('Exportcodigociudad') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>
</div>
  
<br><br>

<table id="codigociudad" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Código</td>
      <td>  Ciudad </td>  
      <td>  Departamento</td>
      <td>  Acción</td>
      <td></td>
     </tr>
     </thead>
 </table>


</div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('#codigociudad').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('codigociudadall') }}",
           
           "columns":[
              {data: 'id',name:'id'},
              {data: 'codigo',name:'codigo'},
              {data: 'ciudad',name:'ciudad'},
              {data: 'departamento',name:'departamento'},
              {data: 'edicion'},
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
            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0,1,2 ] },
               { orderable: false, targets: '_all' }
            ] 
     });
     $('.ciudad').selectpicker();


     $('body').on('click','.Editar', function (event) {
        var ciudad = $(this).data('id_ciudad');
        $('.ciudadedit').selectpicker('val',ciudad);
       
     });
});
</script>
@endsection

<br style="display: none">