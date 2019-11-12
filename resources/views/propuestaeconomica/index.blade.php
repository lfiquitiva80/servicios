@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('propuestaeconomica.create')
        @include('propuestaeconomica.edit')
        @include('errors.errors')


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS PROPUESTAS ECONOMICAS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_propuestaeconomica'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Propuesta Economica </a>
<a class="btn btn-success"  href="{{ url('Exportpropuestaeconomica') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

<br><br>
    

<table id="propuesta" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  CLIENTE </td>
      <td>  N° PROPUESTA ECONOMICA </td>
      <td>  DESCRIPCIÓN DEL SERVICIO </td>
      <td>  ACCIÓN </td>  
      <td> </td>
     </tr>
     </thead>
 </table>


</div>
</div>
</div>
<script>

$(document).ready(function() {
    $('#propuesta').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('propuestaeconomicaall') }}",
           
           "columns":[
             {data: 'id', name:'propuesta_economica.id'},
             {data: 'nombre', name:'cliente.nombre'},
             {data:'numero_propuesta', name:'propuesta_economica.numero_propuesta'},
             {data:'descripcion',name:'propuesta_economica.descripcion'},
             {data: 'botones'},
             {data:'destroy'}
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
            ] 
     });

     var numeropropuesta = $("numero_propuestas").val();
      $("#numero_propuestas").change(function(){
       if ( $("#numero_propuestas").val() != numeropropuesta ) {
         $('.errornumero_propuesta').hide();
       }
      });
     var  numero_propuesta =  $("numero_propuesta").val();
     $("#numero_propuesta").change(function(){
       if ( $("#numero_propuesta").val() != numero_propuesta ) {
         $('.numeropropuesta').hide();
       }
      });

  //  $('.vr_unitario').change(function (e) { 
  //    var dias =$('.dias').val();
  //    var vr_unitario = $(this).val()
  //    $('.vr_total').val(dias*vr_unitario);

  //  });

  //  $('body').on('click','.Editar', function (event) {
  //    var ciudad = $(this).data('ciudad'); 
    // var valoruni = $(this).data('valoruni'); 
    //   var diahoy = $(this).data('dias'); 

    //  $('.vr_unitarios').change(function (e) { 
    //  var vr_unitarios = $(this).val();
    //  var dia =  $('.dia').val();
    //    if(dia == ''){
    //     $('.vr_totals').val(diahoy*vr_unitarios);
    //    }else{
    //     $('.vr_totals').val(dia*vr_unitarios);
    //    }
    //   });

    //   $('.dia').change(function (e) { 
    //    var dia =$(this).val();
    //    $('.vr_totals').val(dia*valoruni);
    //   });

    //});
});

         
   
    </script>
    

@endsection
<br style="display: none">