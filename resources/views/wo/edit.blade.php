@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 


{!! Form::open(['route' => ['wo.update', $edit->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

  <legend>EDITAR ORDENES DE SERVICIO</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      
    


 

<div class="row">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    


  
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ckecklist</h3>
  </div>
  <div class="panel-body">

 <div class="col-xs-2">
  <div class="form-group">
    <label for="id">W.O</label>
    <input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$edit->id}}">
  </div>
</div>

  <div class="col-xs-10">
  <div class="form-group">
    <label for="id">descripcion_wo</label>
    <input type="text" class="form-control" name="descripcion_wo"  id="descripcion_wo" placeholder="descripcion_wo" value="{{$edit->descripcion_wo}}">
  </div>
</div>
   
  
<div class="col-xs-4">
  <div class="form-group">
    <label for="id">Estado</label>
   
  {!! Form::select('ingresar_solicitud',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->ingresar_solicitud, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">fecha</label>
    <input type="text" class="form-control" name="fecha_ingresar_solicitud"  id="fecha_ingresar_solicitud" placeholder="fecha_ingresar_solicitud" value="{{$edit->fecha_ingresar_solicitud}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">usuario</label>
    <input type="text" class="form-control" name="usuario_ingresar_solicitud"  id="usuario_ingresar_solicitud" placeholder="usuario_ingresar_solicitud" value="{{$edit->usuario_ingresar_solicitud}}">
  </div>
</div>


<div class="col-xs-4">
  <div class="form-group">
  
    
    {!! Form::select('programacion',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->programacion, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_programacion"  id="fecha_programacion" placeholder="fecha_programacion" value="{{$edit->fecha_programacion}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_programacion"  id="usuario_programacion" placeholder="usuario_programacion" value="{{$edit->usuario_programacion}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
  
  {!! Form::select('respuesta_cliente',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->respuesta_cliente, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_respuesta_cliente"  id="fecha_respuesta_cliente" placeholder="fecha_respuesta_cliente" value="{{$edit->fecha_respuesta_cliente}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_respuesta_cliente"  id="usuario_respuesta_cliente" placeholder="usuario_respuesta_cliente" value="{{$edit->usuario_respuesta_cliente}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
   
      {!! Form::select('contratacion_personal',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->contratacion_personal, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_contratacion_personal"  id="fecha_contratacion_personal" placeholder="fecha_contratacion_personal" value="{{$edit->fecha_contratacion_personal}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_contratacion_personal"  id="usuario_contratacion_personal" placeholder="usuario_contratacion_personal" value="{{$edit->usuario_contratacion_personal}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">

        {!! Form::select('contratacion_vehiculo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->contratacion_vehiculo, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_contratacion_vehiculo"  id="fecha_contratacion_vehiculo" placeholder="fecha_contratacion_vehiculo" value="{{$edit->fecha_contratacion_vehiculo}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_contratacion_vehiculo"  id="usuario_contratacion_vehiculo" placeholder="usuario_contratacion_vehiculo" value="{{$edit->usuario_contratacion_vehiculo}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
  
    {!! Form::select('giro_anticipo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->giro_anticipo, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_giro_anticipo"  id="fecha_giro_anticipo" placeholder="fecha_giro_anticipo" value="{{$edit->fecha_giro_anticipo}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_giro_anticipo"  id="usuario_giro_anticipo" placeholder="usuario_giro_anticipo" value="{{$edit->usuario_giro_anticipo}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
  
   {!! Form::select('noticificacion_agencia',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->noticificacion_agencia, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_notificacion_agencia"  id="fecha_notificacion_agencia" placeholder="fecha_notificacion_agencia" value="{{$edit->fecha_notificacion_agencia}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_notificacion_agenda"  id="usuario_notificacion_agenda" placeholder="usuario_notificacion_agenda" value="{{$edit->usuario_notificacion_agenda}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
  
  {!! Form::select('impresion_orden',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->impresion_orden, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_impresion_orden"  id="fecha_impresion_orden" placeholder="fecha_impresion_orden" value="{{$edit->fecha_impresion_orden}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_impresion_orden"  id="usuario_impresion_orden" placeholder="usuario_impresion_orden" value="{{$edit->usuario_impresion_orden}}">
  </div>
</div>


<div class="col-xs-4">
  <div class="form-group">

    {!! Form::select('instructivo_escolta',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->instructivo_escolta, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_instructivo_escolta"  id="fecha_instructivo_escolta" placeholder="fecha_instructivo_escolta" value="{{$edit->fecha_instructivo_escolta}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_instructivo_escolta"  id="usuario_instructivo_escolta" placeholder="usuario_instructivo_escolta" value="{{$edit->usuario_instructivo_escolta}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
  
    {!! Form::select('aviso_terminacion_personal',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->aviso_terminacion_personal, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_aviso_terminacion_personal"  id="fecha_aviso_terminacion_personal" placeholder="fecha_aviso_terminacion_personal" value="{{$edit->fecha_aviso_terminacion_personal}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_aviso_terminacion_personal"  id="usuario_aviso_terminacion_personal" placeholder="usuario_aviso_terminacion_personal" value="{{$edit->usuario_aviso_terminacion_personal}}">
  </div>
</div>


<div class="col-xs-4">
  <div class="form-group">
  
   {!! Form::select('entrega_vehiculo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->entrega_vehiculo, ['class' => 'form-control']) !!}    
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_entrega_vehiculo"  id="fecha_entrega_vehiculo" placeholder="fecha_entrega_vehiculo" value="{{$edit->fecha_entrega_vehiculo}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    
    <input type="text" class="form-control" name="usuario_entrega_vehiculo"  id="usuario_entrega_vehiculo" placeholder="usuario_entrega_vehiculo" value="{{$edit->usuario_entrega_vehiculo}}">
  </div>
</div>

<div class="col-xs-6">
  <div class="form-group">
  
    {!! Form::select('finalizado',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->finalizado, ['class' => 'form-control']) !!}    
  </div>
</div>

<div class="col-xs-6">
  <div class="form-group">
    
    <input type="text"class="form-control" name="fecha_finalizado"  id="fecha_finalizado" placeholder="fecha_finalizado" value="{{$edit->fecha_finalizado}}">
  </div>
</div>




  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
  </center><p>



{!! Form::close() !!}


</div><!-- Cierre panel --> 
</div><!-- Cierre panel -->
</div>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>

</div>



@endsection
