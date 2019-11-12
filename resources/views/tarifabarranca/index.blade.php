@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('tarifabarranca.create')
        @include('tarifabarranca.edit') 
        @include('tarifabarranca.periodocreate') 


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS TARIFAS DE BARRANCA </h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_barranca'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear tarifa de Barranca</a>
<a class="btn btn-default" data-toggle="modal" href='#create_periodo'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear periodo Barranca</a>
<a class="btn btn-success"  href="{{ url('Exportbarranca') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>


<br><br>
  

<table id="barranca" class="table table-striped table-hover table-responsive "  >
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
     $('.item').change(function(event) {
         var  item = $('.item').val();
        // console.log(item);
              $.ajax({
              url: '{!!URL::to('periodobarrancaall')!!}',
              type: 'get',
              data: {id: item},
            })
            .done(function(result) {

            $.each(result, function(index, val) {
             /* iterate through array or object */
                 if (val.item == item) {
                  
                    if (val.periodo  == 1) {
                      
                      $('.descripcion').val(val.descripcion);
                    }
                  //  var  resula = JSON.stringify(val.periodo).length;
                    
                  // var  resula =  Object.keys(val) 
                   var numero = val.periodo ;
                   // var b = numero.length;
                    var n = 1;
                    var dts = parseInt(n) + parseInt(numero);
                    //console.log(numero);
                    $('#periodo').val(dts);
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

/////////////////////////////////////////////////////////
    $('#barranca').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('tarifasbarrancaall') }}",
           
           "columns":[
             {data: 'id'},
             {data: 'item'},
             {data:'descripcion'},
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