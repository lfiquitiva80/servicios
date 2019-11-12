@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('tarifario.create')
        @include('tarifario.edit') 
        @include('tarifario.boost') 

   <div class="panel-body" >

    <div class="container">


   <div class="panel panel-default"  >
      
<h4><b><center>REGISTROS DE LAS TARIFAS DE ESTÁNDAR DE SERVICIOS ADICIONALES </h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_tarifario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear tarifa</a>
<a class="btn btn-primary" data-toggle="modal" href='#aumentar_tarifario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Aumentar tarifa</a>

<a class="btn btn-success"  href="{{ url('Exporttarifa') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>
<br><br>
<table >

    <tbody>
        <tr id="filter_col" data-column="4">
           
            <td>Año: </td>
            <td align="lelft"><input type="text" class="form-control input-sm column_filter" id="col4_filter" placeholder="Buscar" ></td>
            
          </tr>
      </tr>
     </tbody>
    </table>
<br><br>
<table id="tarifario" class="table table-striped table-hover table-responsive" >
  
  <thead>
    <tr>
      <td><input name="select_all"  id="checkbox-all" type="checkbox" /></td>
      <td>  ID  </td>
      <td> N° Propuesta económica </td>
      <td>  Tipo de tarifa </td>
      <td>  Descripción </td>
      <td>  Año </td>
      <td>  Cuidad</td>
      <td>  Valor</td>
      <td>  Acción </td>  
      <td></td>
     </tr>
     </thead>
    

 </table>
</div>
</div>
</div>
<script>
 function filterColumn ( i ) {
    $('#tarifario').DataTable().column( i ).search(
        $('#col'+i+'_filter').val(),
    ).draw();
}

$(document).ready(function() {
   var table = $('#tarifario').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('tarifasall') }}",
           
           "columns":[
             {data: 'checkbox'},
             {data: 'id',name:'tarifa_estandar.id'},
             {data: 'numero_propuesta',name:'propuesta_economica.numero_propuesta'},
             {data: 'nombre', name:'tipo_de_tarifa.nombre'},
             {data: 'descripcion',name:'descripcion_tarifa.descripcion'},
             {data:'year',name:'descripcion_tarifa.year'},
             {data: 'ciudad',name:'descripcion_tarifa.ciudad'},
             {data: 'valor_ciudad',name:'descripcion_tarifa.valor_ciudad'},
             {data: 'botones'},
            {data: 'destroy'}
             
             ],
           "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           },
           "scrollX": true,
           "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "info":false,  
            "order": [[ 1, "desc" ]],
            columnDefs: [
               { orderable: true, className: 'nit', targets: [  1,2,3,4,5,6 ] },
               { orderable: false, targets: '_all' },
               { targets : [0],
               'searchable':false,
               'orderable':false
                }
            ]
                
        });
       

      $('.my-select').selectpicker();


      $(document).on('click', '#checkbox-all', function(){

      var rows = table.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
      
     });

     $(document).on('click', '.btn-primary', function(){
      var id = [];

      $('.tarifa_checkbox:checked').each(function(){
                id.push($(this).val());
       
        }); 
        //var  dts = JSON.stringify(id);
        var dts = JSON.stringify(id);
        $('.id_tarifas').val(dts);
      //  console.log(data);
     }); 
     $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );


    $('body').on('click','.Editar', function (event) {
     var ciudad = $(this).data('ciudad').replace(/,/g, '').toUpperCase().split(" ");
   // var dts =newdata.toUpperCase();
    // var data = dts.split(",");
     
     console.log(ciudad);
     
     $('.my-select').selectpicker('val',ciudad);
    });
});




    </script>
@endsection

<br style="display: none">