
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}

@endsection


@section('main-content')


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

<div class="container">
<div class="panel panel-default">
  <div class="panel-body">

  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'solicitudcliente.store', 'method'=>'POST','id'=>'reg_form19']) !!}
    <legend>SOLICITUD SERVICIO ADICIONAL PROTECCION EJECUTIVA</legend>


    <div class="form-group">
      
        <input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
        <input type="hidden" class="form-control" name="estadoservicio_id"  id="id" placeholder="Id" readonly="readonly" value="1">
    </div>




<div class="form-group">
        <label for="id">Seleccione su empresa (*)</label>
        {!! Form::select('cliente',$cliente, null, ['class' => 'form-control','name'=>'cliente','required','placeholder' => 'Seleccione su Empresa']) !!}
    </div>


<div class="form-group">
        <label for="id">Digite el Nombre y Apellidos que realiza la solicitud (*)</label>
        <input type="text" class="form-control" name="solicitante_interno2"  id="solicitante_interno2" placeholder="Digite el Nombre y Apellidos que realiza la solicitud", required>
</div>

    {{-- <div class="form-group">
        <label for="id">fecha_inicio_servicio</label>
        <input type="date" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
    </div> --}}


<div class="form-group">
        <label for="id">Digite la Ciudad de Destino (*)</label>
        <input type="text" class="form-control" name="ciudad_destino"  id="ciudad_destino3" placeholder="ciudad_destino" value="BOGOTA, D.C." required>
    </div>

 @php

        $hoy = date("Y-m-d H:i:s");
    //echo $hoy;

 @endphp


<div class="form-group">
        
        <input type="hidden" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="<?php $date = new DateTime();
echo $date->format('Y-m-d\TH:i'); ?>" >
    </div>



<div class="form-group">
        <label for="id">Seleccione la Fecha y Hora que necesita el servicio</label>
        <input type="datetime-local" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="fecha_inicio_servicio">
    </div>

<div class="form-group">
        <label for="id">Detalle solicitud del servicio</label>
        <textarea cols="75" rows="3" id="detalle_del_servicio" name="detalle_del_servicio" placeholder="Colocar el detalle que necesita, para su servicio" required class="form-control"></textarea>
    </div>

<input type="hidden" class="form-control" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">


 
    <button type="submit" class="btn btn-large btn-block btn-primary">Enviar Solicitud a Omnitempus</button>  
  

{!! Form::close() !!}

  </div>
</div>


@endsection
