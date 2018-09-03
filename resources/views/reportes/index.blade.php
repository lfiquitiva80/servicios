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






<a  class="btn btn-large btn-block btn-info"  href="{{url('clientesGenerales')}}">Clientes</a>
<a  class="btn btn-large btn-block btn-info"  href="{{url('escoltasGenerales')}}">Escoltas</a>
<a  class="btn btn-large btn-block btn-info"  href="{{url('vehiculosGenerales')}}">Vehículos</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('rentadorasGenerales')}}">Rentadoras</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('ordenesgenerales')}}">Ordenes de Servicio</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('excelwogenerales')}}">Ordenes de Trabajo W.O</a>



</div>
</div>





<div class="btn-toolbar">
          <div class="btn-group"></div>
          <div class="btn-group"></div>
          <div class="btn-group"></div>
        </div>

 <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Reportes Detallados</h3>
                  </div>
                  <div class="panel-body">
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
                    </div>
                  </div>

                    <!-- <div class="col-xs-4">
                    	<div class="form-group">
                    		<label for="id">fecha inicio  </label>
                    		<input type="date"  class="form-control" name="fecha1" id="fecha" >
                    	</div>
                    </div> -->
                    <!-- <div class="col-xs-4">
                    	<div class="form-group">
                    		<label for="id"> fecha finalizacion  </label>
                    		<input type="date"  class="form-control " name="fecha2" >
                    	</div>
                    </div> -->
                    <br>


                 </div>
               </div>




               {!! Form::close() !!}
                 </div>
                </div>








@endsection
