@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Reportes en Excel Generales</h3>
  </div>
  <div class="panel-body">

    <li><a   href="{{url('clientesGenerales')}}">Clientes</a><br></li>
    <li><a   href="{{url('escoltasGenerales')}}">Escoltas</a><br></li>
    <li><a   href="{{url('vehiculosGenerales')}}">Vehículos</a><br></li>
    <li><a  href="{{url('rentadorasGenerales')}}">Rentadoras</a><br></li>
    <li><a  href="{{url('ordenesgenerales')}}">Ordenes de Servicio</a><br></li>
    <li><a  href="{{url('excelwogenerales')}}">Ordenes de Trabajo W.O</a><br></li>
    <li><a  href="{{url('excelcontrolhorario')}}">Control de Horario</a><br></li>


  </div>
</div>





<div class="btn-toolbar">
  <div class="btn-group"></div>
  <div class="btn-group"></div>
  <div class="btn-group"></div>
</div>

<?php  $cliente = App\cliente::orderBy('Nombre','asc')->pluck('Nombre','id'); ?> 
<?php  $estadoservicio = App\estadoservicio::pluck('estadoservicio','id'); ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Reportes Detallados</h3>
  </div>
  <div class="panel-body">

    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Reporte por Cliente y Estado</h3>
      </div>
      <div class="panel-body">
        {!! Form::open(['route' => 'consultacliente', 'method'=>'GET', 'Class'=>'navbar-form navbar-left']) !!}


       {!! Form::select('cliente',$cliente, null, ['class' => 'form-control','name'=>'cliente','placeholder' => 'Seleccione el Cliente','required']) !!}


        {!! Form::select('estadoservicio',$estadoservicio, null, ['class' => 'form-control','placeholder' => 'Seleccione el Estado']) !!}

        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar</button>



        {!! Form::close() !!}

      </div>
    </div>            

    {!! Form::open(['route' => 'rango', 'method'=>'get','id'=>'reg_form10' ]) !!}

    <div class="container">
     <div class="row">
       <div class='col-xs-4'>
         <div class="form-group">
           <label for="id">fecha inicio  </label>
           <div class='input-group '   >
             <input type='text'  value="<?php echo date("Y-m-d-H");?>" class="form-control"  name="fecha1"   id="datepicker-me"   />

           </div>
         </div>
       </div>

       <div class='col-xs-4'>
         <div class="form-group">
           <label for="id">fecha finalizacion  </label>
           <div class='input-group'  >
             <input type='text'  value="<?php echo date("Y-m-d-H");?>"  class="form-control" name="fecha2"     id="datepicker-me2"/>

           </div>
         </div>
       </div>
       &nbsp; <br>
       <div class="col-xs-4">
         <div class="form-group">
           <button type="submit" class="btn btn-primary" >Descargar</button>
         </div>
       </div>




       

       <!-- <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 " class="btn btn-danger" target="_top"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> XLSX</a> -->

       <a href="{{ route('export.file',['type'=>'csv']) }}" title="Bajar excel en versión superior al 2016 " class="btn btn-danger"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV (Separado por Comas)</a>

       <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 " class="btn btn-primary"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> xlsx Excel 2016</a>

     </div>
   </div>






   <br>


 </div>
</div>




{!! Form::close() !!}



</div>



</div>











@endsection
