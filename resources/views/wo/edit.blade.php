@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')




{!! Form::open(['route' => ['wo.update', $edit->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

  <legend>EDITAR ORDENES DE SERVICIO</legend>

<a href="{{ $url = route('home-principal')}}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">






<div class="row">





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
    <input type="text" class="form-control" name="descripcion_wo"  id="descripcion_wo" placeholder="descripcion_wo" value="{{$edit->descripcion_wo}}" disabled>
  </div>
</div>


<div class="col-xs-2">
  <div class="form-group">
    <label for="id">Estado</label>

  {!! Form::select('ingresar_solicitud',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->ingresar_solicitud, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">Actividad</label>
    <br><li>Ingreso de Solicitud</li>
  </div>
</div>


<div class="col-xs-3">
  <div class="form-group">
    <label for="id">fecha</label>

    @if(!empty($edit->fecha_ingresar_solicitud) && Auth::user()->User())
    <input type="text" class="form-control" name="fecha_ingresar_solicitud"  id="fecha_ingresar_solicitud" placeholder="fecha_ingresar_solicitud" value="{{$edit->fecha_ingresar_solicitud}}" title="{{$edit->fecha_ingresar_solicitud}}" disabled>

    @else
    <input type="datetime-local"class="form-control" name="fecha_ingresar_solicitud"  id="fecha_ingresar_solicitud" placeholder="fecha_ingresar_solicitud" value="<?php $date = new DateTime($edit->fecha_ingresar_solicitud);
    echo $date->format('Y-m-d\TH:i'); ?>" >
    @endif


  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">usuario</label>

    @if(!empty($edit->usuario_ingresar_solicitud))
    <input type="text" class="form-control" name="usuario_ingresar_solicitud"  id="usuario_ingresar_solicitud" placeholder="usuario_ingresar_solicitud" value="{{$edit->usuario_ingresar_solicitud}}" disabled>
    @else
    <input type="text" class="form-control" name="usuario_ingresar_solicitud"  id="usuario_ingresar_solicitud" placeholder="usuario_ingresar_solicitud" value="{{$edit->usuario_ingresar_solicitud}}" >

    @endif
  </div>
</div>


<div class="col-xs-2">
  <div class="form-group">


    {!! Form::select('programacion',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->programacion, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Programación</li>

  </div>
</div>




<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_programacion) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_programacion"  id="fecha_programacion" placeholder="fecha_programacion" value="<?php $date = new DateTime($edit->fecha_programacion);
echo $date->format('Y-m-d\TH:i'); ?>" disabled>
    @else
<input type="datetime-local"class="form-control" name="fecha_programacion"  id="fecha_programacion" placeholder="fecha_programacion" value="<?php $date = new DateTime($edit->fecha_programacion);
echo $date->format('Y-m-d\TH:i'); ?>" >


    @endif
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
  @if(!empty($edit->usuario_programacion))
    <input type="text" class="form-control" name="usuario_programacion"  id="usuario_programacion" placeholder="usuario_programacion" value="{{$edit->usuario_programacion}}" disabled>
  @else
  <input type="text" class="form-control" name="usuario_programacion"  id="usuario_programacion" placeholder="usuario_programacion" value="{{$edit->usuario_programacion}}" >

  @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

  {!! Form::select('respuesta_cliente',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->respuesta_cliente, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Respuesta Cliente</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_respuesta_cliente) && Auth::user()->User())
    <input type="datetime-local"class="form-control" name="fecha_respuesta_cliente"  id="fecha_respuesta_cliente" placeholder="fecha_respuesta_cliente" value="<?php $date = new DateTime($edit->fecha_respuesta_cliente);
echo $date->format('Y-m-d\TH:i'); ?>" disabled>

@else

 <input type="datetime-local"class="form-control" name="fecha_respuesta_cliente"  id="fecha_respuesta_cliente" placeholder="fecha_respuesta_cliente"  value="<?php $date = new DateTime($edit->fecha_respuesta_cliente);
echo $date->format('Y-m-d\TH:i'); ?>" >

@endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    @if(!empty($edit->usuario_respuesta_cliente))
    <input type="text" class="form-control" name="usuario_respuesta_cliente"  id="usuario_respuesta_cliente" placeholder="usuario_respuesta_cliente" value="{{$edit->usuario_respuesta_cliente}}" disabled>

    @else

    <input type="text" class="form-control" name="usuario_respuesta_cliente"  id="usuario_respuesta_cliente" placeholder="usuario_respuesta_cliente">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

      {!! Form::select('contratacion_personal',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->contratacion_personal, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Contratación Personal</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_contratacion_personal) && Auth::user()->User())
    <input type="datetime-local"class="form-control" name="fecha_contratacion_personal"  id="fecha_contratacion_personal" placeholder="fecha_contratacion_personal" value="<?php $date = new DateTime($edit->fecha_contratacion_personal);
echo $date->format('Y-m-d\TH:i'); ?>" disabled>
    @else

   <input type="datetime-local"class="form-control" name="fecha_contratacion_personal"  id="fecha_contratacion_personal" placeholder="fecha_contratacion_personal" value="<?php $date = new DateTime($edit->fecha_contratacion_personal);
echo $date->format('Y-m-d\TH:i'); ?>">

    @endif

  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
     @if(!empty($edit->usuario_contratacion_personal))
    <input type="text" class="form-control" name="usuario_contratacion_personal"  id="usuario_contratacion_personal" placeholder="usuario_contratacion_personal" value="{{$edit->usuario_contratacion_personal}}" disabled>

    @else

   <input type="text" class="form-control" name="usuario_contratacion_personal"  id="usuario_contratacion_personal" placeholder="usuario_contratacion_personal" value="{{$edit->usuario_contratacion_personal}}" >

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

        {!! Form::select('contratacion_vehiculo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->contratacion_vehiculo, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Contratación Vehículo</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_contratacion_vehiculo) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_contratacion_vehiculo"  id="fecha_contratacion_vehiculo" placeholder="fecha_contratacion_vehiculo" value="{{$edit->fecha_contratacion_vehiculo}}" disabled>
    @else
    <input type="datetime-local"class="form-control" name="fecha_contratacion_vehiculo"  id="fecha_contratacion_vehiculo" placeholder="fecha_contratacion_vehiculo"  value="{{$edit->fecha_contratacion_vehiculo}}">

    @endif

  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
     @if(!empty($edit->usuario_contratacion_vehiculo) )
    <input type="text" class="form-control" name="usuario_contratacion_vehiculo"  id="usuario_contratacion_vehiculo" placeholder="usuario_contratacion_vehiculo" value="{{$edit->usuario_contratacion_vehiculo}}" disabled>

    @else

    <input type="text" class="form-control" name="usuario_contratacion_vehiculo"  id="usuario_contratacion_vehiculo" placeholder="usuario_contratacion_vehiculo" value="">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

    {!! Form::select('giro_anticipo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->giro_anticipo, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Giro Anticipo</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
     @if(!empty($edit->fecha_giro_anticipo) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_giro_anticipo"  id="fecha_giro_anticipo" placeholder="fecha_giro_anticipo" value="{{$edit->fecha_giro_anticipo}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_giro_anticipo"  id="fecha_giro_anticipo" placeholder="fecha_giro_anticipo" value="{{$edit->fecha_giro_anticipo}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
     @if(!empty($edit->usuario_giro_anticipo))
    <input type="text" class="form-control" name="usuario_giro_anticipo"  id="usuario_giro_anticipo" placeholder="usuario_giro_anticipo" value="{{$edit->usuario_giro_anticipo}}" disabled>
    @else
    <input type="text" class="form-control" name="usuario_giro_anticipo"  id="usuario_giro_anticipo" placeholder="usuario_giro_anticipo">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

   {!! Form::select('noticificacion_agencia',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->noticificacion_agencia, ['class' => 'form-control']) !!}
  </div>
</div>


<div class="col-xs-3">
  <div class="form-group">

  <li>Notificación Agencia</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

    @if(!empty($edit->fecha_notificacion_agencia) && Auth::user()->User())

    <input type="text"class="form-control" name="fecha_notificacion_agencia"  id="fecha_notificacion_agencia" placeholder="fecha_notificacion_agencia" value="{{$edit->fecha_notificacion_agencia}}" disabled>

    @else

    <input type="datetime-local"class="form-control" name="fecha_notificacion_agencia"  id="fecha_notificacion_agencia" placeholder="fecha_notificacion_agencia"  value="{{$edit->fecha_notificacion_agencia}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">


    @if(!empty($edit->usuario_notificacion_agenda))
    <input type="text" class="form-control" name="usuario_notificacion_agenda"  id="usuario_notificacion_agenda" placeholder="usuario_notificacion_agenda" value="{{$edit->usuario_notificacion_agenda}}" disabled>
    @else

    <input type="text" class="form-control" name="usuario_notificacion_agenda"  id="usuario_notificacion_agenda" placeholder="usuario_notificacion_agenda">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

  {!! Form::select('impresion_orden',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->impresion_orden, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Impresión Orden</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_impresion_orden) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_impresion_orden"  id="fecha_impresion_orden" placeholder="fecha_impresion_orden" value="{{$edit->fecha_impresion_orden}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_impresion_orden"  id="fecha_impresion_orden" placeholder="fecha_impresion_orden" value="{{$edit->fecha_impresion_orden}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">

    @if(!empty($edit->usuario_impresion_orden))

    <input type="text" class="form-control" name="usuario_impresion_orden"  id="usuario_impresion_orden" placeholder="usuario_impresion_orden" value="{{$edit->usuario_impresion_orden}}" disabled>

    @else

    <input type="text" class="form-control" name="usuario_impresion_orden"  id="usuario_impresion_orden" placeholder="usuario_impresion_orden">

    @endif
  </div>
</div>


<div class="col-xs-2">
  <div class="form-group">

    {!! Form::select('instructivo_escolta',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->instructivo_escolta, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Instructivo Escolta</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_instructivo_escolta) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_instructivo_escolta"  id="fecha_instructivo_escolta" placeholder="fecha_instructivo_escolta" value="{{$edit->fecha_instructivo_escolta}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_instructivo_escolta"  id="fecha_instructivo_escolta" placeholder="fecha_instructivo_escolta" value="{{$edit->fecha_instructivo_escolta}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    @if(!empty($edit->usuario_instructivo_escolta))
    <input type="text" class="form-control" name="usuario_instructivo_escolta"  id="usuario_instructivo_escolta" placeholder="usuario_instructivo_escolta" value="{{$edit->usuario_instructivo_escolta}}" disabled>
    @else

    <input type="text" class="form-control" name="usuario_instructivo_escolta"  id="usuario_instructivo_escolta" placeholder="usuario_instructivo_escolta">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

    {!! Form::select('aviso_terminacion_personal',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->aviso_terminacion_personal, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Aviso Terminacón Personal</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_aviso_terminacion_personal) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_aviso_terminacion_personal"  id="fecha_aviso_terminacion_personal" placeholder="fecha_aviso_terminacion_personal" value="{{$edit->fecha_aviso_terminacion_personal}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_aviso_terminacion_personal"  id="fecha_aviso_terminacion_personal" placeholder="fecha_aviso_terminacion_personal" value="{{$edit->fecha_aviso_terminacion_personal}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    @if(!empty($edit->usuario_aviso_terminacion_personal))
    <input type="text" class="form-control" name="usuario_aviso_terminacion_personal"  id="usuario_aviso_terminacion_personal" placeholder="usuario_aviso_terminacion_personal" value="{{$edit->usuario_aviso_terminacion_personal}}" disabled>
    @else

    <input type="text" class="form-control" name="usuario_aviso_terminacion_personal"  id="usuario_aviso_terminacion_personal" placeholder="usuario_aviso_terminacion_personal" >

    @endif
  </div>
</div>


<div class="col-xs-2">
  <div class="form-group">

   {!! Form::select('entrega_vehiculo',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->entrega_vehiculo, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Entrega Vehículo</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    @if(!empty($edit->fecha_entrega_vehiculo) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_entrega_vehiculo"  id="fecha_entrega_vehiculo" placeholder="fecha_entrega_vehiculo" value="{{$edit->fecha_entrega_vehiculo}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_entrega_vehiculo"  id="fecha_entrega_vehiculo" placeholder="fecha_entrega_vehiculo"  value="{{$edit->fecha_entrega_vehiculo}}">

    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    @if(!empty($edit->usuario_entrega_vehiculo))
    <input type="text" class="form-control" name="usuario_entrega_vehiculo"  id="usuario_entrega_vehiculo" placeholder="usuario_entrega_vehiculo" value="{{$edit->usuario_entrega_vehiculo}}" disabled>
    @else

    <input type="text" class="form-control" name="usuario_entrega_vehiculo"  id="usuario_entrega_vehiculo" placeholder="usuario_entrega_vehiculo">

    @endif
  </div>
</div>

<div class="col-xs-2">
  <div class="form-group">

    {!! Form::select('finalizado',array('NO' => 'NO', 'SI' => 'SI', 'N/A' => 'N/A'), $edit->finalizado, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">

  <li>Finalización</li>

  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
     @if(!empty($edit->fecha_finalizado) && Auth::user()->User())
    <input type="text"class="form-control" name="fecha_finalizado"  id="fecha_finalizado" placeholder="fecha_finalizado" value="{{$edit->fecha_finalizado}}" disabled>
    @else

    <input type="datetime-local"class="form-control" name="fecha_finalizado"  id="fecha_finalizado" placeholder="fecha_finalizado"  value="{{$edit->fecha_finalizado}}">


    @endif
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">

    <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>

  </div>
</div>





  </center><p>



{!! Form::close() !!}


</div><!-- Cierre panel -->
</div><!-- Cierre panel -->
</div>


</div>



@endsection
