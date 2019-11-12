@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
        @include('horario.create')
        @include('horario.edit') 
        


   <div class="panel-body">

    <div class="container">


   <div class="panel panel-default">
<h4><b><center>REGISTRO DE HORARIO</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#create_horario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear HORARIO</a>
{{-- <a class="btn btn-success"  href="{{ url('Exportanticipo') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a> --}}

<br><br>
  

<table id="horario" class="table table-striped table-hover table-responsive "  >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  Escolta</td>
      <td>  Fecha </td>
      <td>  Acción</td>  
      <td >  </td>
     </tr>
     </thead>
 </table>
       
</div>
</div>
</div>
<script>
  

$(document).ready(function() {
    $('#horario').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('horarioall') }}",
           
           "columns":[
             {data: 'id', name:'id'},
             {data: 'nombre' ,name:'escolta.id'},
             {data: 'fecha', name:'fecha'},
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
            columnDefs: [
               { orderable: true, className: 'nit', targets: [ 0, 1,2 ] },
               { orderable: false, targets: '_all' },
               { "width": "30%", "targets": 1 },
            ] ,
             
             

     });
});

    </script>
    

    
@endsection

<br style="display: none">