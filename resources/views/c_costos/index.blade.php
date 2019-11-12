@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('c_costos.create')
        @include('c_costos.edit')
     <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE CENTRO DE COSTOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#centro_costos'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Centro de costos</a>
<a class="btn btn-success"  href="{{ url('Exportcentrodecostos') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
  

<table id="c_costos" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Nit cliente  </td>
      <td>  Nombre </td>
      <td>  Centro de costos </td>
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
    $('#c_costos').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('cdecostos') }}",

           "columns":[
             {data: 'id', name: 'centro_de_costos.id'},
             {data: 'nit',name:'cliente.nit'},
             {data :'nombre',name: 'cliente.nombre' },
             {data:'centro_de_costos', name:'centro_de_costos.centro_de_costos'},
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
               { orderable: true, className: 'nit', targets: [ 0, 1,2,3 ] },
               { orderable: false, targets: '_all' },
               
            ] ,
             
            
     });
});

$(document).ready(function() {
     $('.id_cliente').change(function(event) {
         let  cliente = $('.id_cliente').val();
         //console.log(cliente);
              $.ajax({
              url: '{!!URL::to('cdcostos_cliente')!!}',
              type: 'get',
              data: {id:cliente },
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == cliente) {

                 $('.nombre').val(val.nombre);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});

$(document).ready(function() {
     $('.id_clientes').change(function(event) {
         let  clientes = $('.id_clientes').val();
          //console.log(clientes);
              $.ajax({
              url: '{!!URL::to('cdcostos_cliente')!!}',
              type: 'get',
              data: {id:clientes },

            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.id == clientes) {
                
                 $('.names').val(val.nombre);
                 
                }
             });
            })
         .fail(function() {
          //console.log("error");
         })
         .always(function() {
        // console.log("complete");
         });

    });
});


    </script>
@endsection

<br style="display: none">
