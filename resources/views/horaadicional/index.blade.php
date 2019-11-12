@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('horaadicional.create')
        @include('horaadicional.edit') 
        @include('horaadicional.boost')

   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTROS DE LAS HORAS ADICIONALES  </h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_horaadicional'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Hora</a>
<a class="btn btn-primary" data-toggle="modal" href='#aumentar_horasadicional'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Aumentar</a>

<a class="btn btn-success"  href="{{ url('Exporthoraadicional') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>


<br><br>
  

<table id="hora" class="table table-striped table-hover table-responsive "  >
    
  <thead>
    <tr>
      <td><input   id="checkbox" type="checkbox" /></td>
      <td>  ID  </td>
      <td> N° Propuesta económica  </td>
      <td>  Tipo de tarifa </td>
      <td>  Descripción </td>
      <td>  Año </td>
      <td>Valor</td>
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
   var table = $('#hora').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('horaadicionalall') }}",
           
           "columns":[
             {data: 'checkbox'},
             {data: 'id',name:'hora_adicional.id'},
             {data: 'numero_propuesta',name:'propuesta_economica.numero_propuesta'},
             {data: 'name',name:'tipo_de_tarifa.nombre'},
             {data: 'nombre',name:'descripcion_hora_adicional.nombre'},
             {data:'year',name:'hora_adicional.year'},
             {data:'valor',name:'hora_adicional.valor'},
             {data: 'botones'},
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
            "order": [[ 1, "desc" ]],
            columnDefs: [
               { orderable: true, className: 'nit', targets: [  1,2,3,4 ] },
               { orderable: false, targets: '_all' },
               { targets : [0],
               'searchable':false,
               'orderable':false
                }   
            ] 
        });

     $(document).on('click', '#checkbox', function(){
        var rows = table.rows({ 'search': 'applied' }).nodes();
        $('input[type="checkbox"]', rows).prop('checked', this.checked);
    });

    $(document).on('click', '.btn-primary', function(){
      var id = [];

      $('.horas_checkbox:checked').each(function(){
                id.push($(this).val());
       
        }); 
        var dts = JSON.stringify(id);
        $('.id_horaadicional').val(dts);
        //console.log(dts);
     }); 


});





    </script>
@endsection

<br style="display: none">