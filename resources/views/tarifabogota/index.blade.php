@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('tarifabogota.create')
        @include('tarifabogota.edit') 
        @include('tarifabogota.periodocreate') 


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS TARIFAS DE BOGOTÁ </h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_bogota'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear tarifa de Bogotá</a>
<a class="btn btn-default" data-toggle="modal" href='#create_periodo'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Periodo de Bogotá</a>
<a class="btn btn-success"  href="{{ url('Exportbogota') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="bogota" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Item </td>
      <td>  Descripción </td>
      <td>  Valor </td>
      <td>  Periodo</td>
      <td>  Acción </td>  
      <td> </td>
     </tr>
     </thead>
 </table>


</div>
</div>
</div>
<script>

$(document).ready(function() {
  $('.items').change(function(event) {
         var  items = $('.items').val();
              $.ajax({
              url: '{!!URL::to('periodobogotaall')!!}',
              type: 'get',
              data: {item:items},
              success:function(data){
               for (let i = 0; i < data.length; i++) {
                if(data.length){
                   $('.descripcions').val(data[i].descripcion);                   
                   $('.unidad').val(data[i].unidad);
                   $('#periodo').val( parseInt(data[i].periodo) + parseInt(1));
                 }
               }
                
             }
         })

  });

 
///////////////////////////////////////////////////  
    $('#bogota').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('tarifasbogotaall') }}",
           
           "columns":[
             {data: 'id'},
             {data: 'item'},
             {data: 'descripcion'},
             {data:'valor_con_aui'},
             {data: 'periodo'},
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
            "order": [[ 0, "desc" ]],

            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0, 1,2 ] },
               { orderable: false, targets: '_all' },
               { "width": "50%", "targets": 2 }
            ] ,

     });
});
    </script>
@endsection

<br style="display: none">