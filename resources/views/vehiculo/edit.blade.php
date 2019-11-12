@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


{!! Form::open(['route' => ['Vehiculo.update', $Vehiculo->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true,'id'=>'reg_form6']) !!}

  <legend>EDITAR   VEHICULO</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">



      
        
          
              <div class="col-xs-5">
                  <div class="form-group">

@if($Vehiculo->foto == 'car.png')



    <img src="{{ asset('img/car.png')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">
<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}

@endif
@if($Vehiculo->foto != 'car.png' )
@if($Vehiculo->foto != null)
    <img src="{{asset($Vehiculo->foto)}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}




@endif
@endif
        

                  </div>
                  <br><br>
<div class="form-group">
  <label  class="col-xs-2 control-label" for="id">FECHA SOAT</label>
  <div class="col-xs-4">
  {!! Form::text('fecha_soat', $Vehiculo->fecha_soat,['class' => 'form-control', 'placeholder' => 'FECHA SOAT','name'=>'fecha_soat', 'id' => 'datepicker-me10']) !!}
</div> 
 
<div class="col-xs-5">
    <input type="file" class="filestyle" multiple name="documento_soat" id="documento_soat" data-iconName="glyphicon glyphicon-folder-open" data-buttonName="btn-primary" data-placeholder="SOAT" data-buttonText=""  >

    </div>
    @if ($Vehiculo->documento_soat != null)
    <a href="{{url('soat',$Vehiculo->id)}}" class="btn btn-success "><i class="fa fa-arrow-circle-down" ></i></a>
    
    @endif
</div>


<br><br>
<div class="form-group">
    <label  class="col-xs-2 control-label" for="id">FECHA LICENCIA DE TRANSITO </label>
    <div class="col-xs-4">
    {!! Form::text('fecha_licencia', $Vehiculo->fecha_licencia,['class' => 'form-control', 'placeholder' => 'FECHA LICENCIA','name'=>'fecha_licencia','id'=> 'datepicker-me4']) !!}
  </div> 
   
  <div class="col-xs-5">
          
      <input type="file" class="filestyle" data-iconName="glyphicon glyphicon-folder-open" data-buttonName="btn-primary" data-buttonText=""  data-placeholder="LICENCIA" name="documento_licencia" id="documento_licencia">
    </div>
    @if ($Vehiculo->documento_licencia != null)
    <a href="{{url('licencia',$Vehiculo->id)}}" class="btn btn-success "><i class="fa fa-arrow-circle-down" ></i></a>
    @else
  <br> <br>
    @endif
</div>
    

<br><br>
  <div class="form-group">
      <label  class="col-xs-2 control-label" for="id">FECHA POLIZA </label>
      <div class="col-xs-4">
      {!! Form::text('fecha_poliza', $Vehiculo->fecha_poliza,['class' => 'form-control', 'placeholder' => ' FECHA POLIZA','name'=>'fecha_poliza', 'id' => 'datepicker-me7']) !!}
    </div> 
     
    <div class="col-xs-5">
        <input type="file" class="filestyle" data-iconName="glyphicon glyphicon-folder-open" data-buttonName="btn-primary" data-buttonText="" data-placeholder="POLIZA" name="documento_poliza" id= "documento_poliza">
      </div>

      @if ($Vehiculo->documento_poliza != null )
      <a href="{{url('poliza',$Vehiculo->id)}}" class="btn btn-success "><i class="fa fa-arrow-circle-down" ></i></a>
      @endif
  </div>
  
  <br><br>
  <div class="form-group">
      <label  class="col-xs-2 control-label" for="id">FECHA REVISIÓN TÉCNICO MECÁNICA </label>
      <div class="col-xs-4">
          {!! Form::text('fecha_tecnomecanica', $Vehiculo->fecha_tecnomecanica,['class' => 'form-control', 'placeholder' => ' FECHA TÉCNICO MECÁNICA','name'=>'fecha_tecnomecanica', 'id' => 'datepicker-me8']) !!}
    </div> 

    <div class="col-xs-5">
        <input type="file" class="filestyle" data-iconName="glyphicon glyphicon-folder-open" data-buttonName="btn-primary" data-buttonText="" data-placeholder="TÉCNICO MECÁNICA" name="documento_tecnomecanica" id= "documento_tecnomecanica">
      </div>
    
    @if ($Vehiculo->documento_tecnomecanica != null)
    <a href="{{url('tecnomecanica',$Vehiculo->id)}}" class="btn btn-success "><i class="fa fa-arrow-circle-down" ></i></a>
  
    @endif
  </div> 
  
   
  <br><br><br><br>
  <div class="form-group">
      <label  class="col-xs-3 control-label" for="id">RESOLUCION DE BLINDAJE</label>
      <div class="col-sm-8">
          <input type="file" class="filestyle" data-iconName="glyphicon glyphicon-folder-open" data-buttonName="btn-primary" data-buttonText="" data-placeholder="RESOLUCION DE BLINDAJE" name="documento_blindaje" id= "documento_blindaje">
        </div>
        @if ($Vehiculo->documento_blindaje != null)
        <a href="{{url('blindaje',$Vehiculo->id)}}" class="btn btn-success "><i class="fa fa-arrow-circle-down" ></i></a>
    
        @endif
    </div>
 </div>
    
<div class="col-xs-5">
  <div class="form-group">
    <label for="id">Placa</label>
    {!! Form::text('placa', $Vehiculo->placa,['class' => 'form-control', 'placeholder' => 'Placa','name'=>'placa']) !!}
  </div>

  <div class="form-group">
          <label for="id">Rentadora</label>
          {!! Form::text('rentadora', $Vehiculo->rentadora,['class' => 'form-control', 'placeholder' => 'Rentadora','name'=>'rentadora']) !!}

      </div>


<!--   <div class="form-group">
    <label for="id">Proveedor</label>
    {!! Form::select('id_proveedor',$proveedor, $Vehiculo->id_proveedor, ['class' => 'form-control','placeholder'=>'Seleccione el proveedor' ,'name'=>'id_proveedor']) !!}

</div> -->
  <div class="form-group">
                <label for="id">Tipo de renta</label>
                {!! Form::text('tipo_de_renta',$Vehiculo->tipo_de_renta ,['class' => 'form-control', 'placeholder' => 'Tipo_de_renta','name'=>'tipo_de_renta']) !!}

            </div>
            <div class="form-group">
                          <label for="id">Descripción</label>
                          {!! Form::text('descripcion',$Vehiculo->descripcion,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion']) !!}

                      </div>
          <div class="form-group">
                    <label for="id">Armadura</label>
                     {!! Form::text('armadura',$Vehiculo->armadura,['class' => 'form-control', 'placeholder' => 'Armadura','name'=>'armadura']) !!}
                      </div>
        <div class="form-group">
                  <label for="id">Color</label>
                     {!! Form::text('color',$Vehiculo->color,['class' => 'form-control', 'placeholder' => 'Color','name'=>'color']) !!}
                    </div>
  <div class="form-group">
                        <label for="id">Activo</label>
                        {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],$Vehiculo->activo,['class'=> 'form-control','name'=>'activo'] )!!}
            </div>

            <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>

  </center><p>
      </div>
        </div>
      {!! Form::close() !!}


      @endsection
