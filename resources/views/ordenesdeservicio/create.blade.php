
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

{!! Form::open(['route' => 'ordenesdeservicio.store', 'method'=>'POST']) !!}
	<legend>CREAR ORDEN DE SERVICIOS</legend>

	<div class="col-xs-1">
	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control input-lg" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">No_de_orden_de_servicio</label>
		<input type="text" class="form-control input-lg" name="No_de_orden_de_servicio"  id="No_de_orden_de_servicio" placeholder="Número orden de sercivios">
	</div>
</div>	
<div class="col-xs-3">

    <label>Estado de Servicio</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, null, ['class' => 'form-control input-lg']) !!}
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">fecha_inicio_servicio</label>
		<input type="date" class="form-control input-lg" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
	</div>
</div>
	
	<div class="col-xs-2">
    <div class="form-group">
		<label for="id">Hora_inicio_en_OT</label>
		<input type="time" class="form-control input-lg" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT">
	</div>
	 </div>

	 	<div class="col-xs-2">
    <div class="form-group">
		<label for="id">Hora_Final_en_OT</label>
		<input type="time" class="form-control input-lg" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_Final_en_OT">
	</div>
	 </div>
	 <div class="col-xs-2">
    <div class="form-group">
		<label for="id">Hora_Programada</label>
		<input type="time" class="form-control input-lg" name="Hora_Programada"  id="Hora_Programada" placeholder="Hora_Programada">
	</div>
	 </div>
	 <div class="col-xs-2">
    <div class="form-group">
		<label for="id"><small>Hora_de_inicio_Servicio_cliente</small></label>
		<input type="time" class="form-control input-lg" name="Hora_de_inicio_Servicio_cliente"  id="Hora_de_inicio_Servicio_cliente" placeholder="Hora_de_inicio_Servicio_cliente">
	</div>
	 </div>

	 <div class="col-xs-2">
    <div class="form-group">
		<label for="id"><small>Hora_Final_del_Servicio_Cliente</small></label>
		<input type="time" class="form-control input-lg" name="Hora_Final_del_Servicio_Cliente"  id="Hora_Final_del_Servicio_Cliente" placeholder="Hora_Final_del_Servicio_Cliente">
	</div>
	 </div>

	  <div class="col-xs-2">
    <div class="form-group">
		<label for="id">Total_Horas_del_Servicio</label>
		<input type="time" class="form-control input-lg" name="Total_Horas_del_Servicio"  id="Total_Horas_del_Servicio" placeholder="Total_Horas_del_Servicio">
	</div>
	 </div>

	<div class="col-xs-4">
	 <div class="form-group">
		<label for="id">Escolta Asignado</label>
		<input type="text" class="form-control input-lg" name="Escolta_asignado"  id="Escolta_asignado" placeholder="Escolta_asignado">
	</div>
	</div>

<div class="col-xs-4">	
 <div class="form-group">
		<label for="id">Cédula</label>
		<input type="number" class="form-control input-lg" name="cedula"  id="cedula" placeholder="cedula">
	</div>
</div>	

	<div class="col-xs-2">
	 <div class="form-group">
		<label for="id">Escolta Externo</label>
		<select name="escolta_externo" id="escolta_externo" class="form-control input-lg" >
			<option value="NO">NO</option>
			<option value="SI">SI</option>
		</select>
	</div>
</div>

	 <div class="col-xs-2">
	 <div class="form-group">
		<label for="id">Bilingue?</label>
		<select name="bilingue" id="bilingue" class="form-control input-lg" >
			<option value="NO">NO</option>
			<option value="SI">SI</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">	
		<label for="id">ID2</label>
		<input type="text" class="form-control input-lg" name="ID2"  id="ID2" placeholder="ID2">
	</div>
</div>


<div class="col-xs-4">
<div class="form-group">
		<label for="id">placa</label>
		<input type="text" class="form-control input-lg" name="placa"  id="placa" placeholder="placa">
	</div>
</div>
<div class="col-xs-4">
<div class="form-group">
		<label for="id">tipo</label>
		<input type="text" class="form-control input-lg" name="tipo"  id="tipo" placeholder="tipo">
	</div>
</div>
<div class="col-xs-4">
<div class="form-group">
		<label for="id">cliente</label>
		<input type="text" class="form-control input-lg" name="cliente"  id="cliente" placeholder="cliente">
	</div>
</div>	

<div class="col-xs-4">
<div class="form-group">
		<label for="id">solicitante_interno</label>
		<input type="text" class="form-control input-lg" name="solicitante_interno"  id="solicitante_interno" placeholder="cliente">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">ciudad_origen</label>
		<input type="text" class="form-control input-lg" name="ciudad_origen"  id="ciudad_origen" placeholder="ciudad_origen">
	</div>
</div>
<div class="col-xs-4">
<div class="form-group">
		<label for="id">ciudad_destino</label>
		<input type="text" class="form-control input-lg" name="ciudad_destino"  id="ciudad_destino" placeholder="ciudad_origen">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">fecha_solicitud</label>
		<input type="date" class="form-control input-lg" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud">
	</div>
</div>
<div class="col-xs-4">
<div class="form-group">
		<label for="id">Fecha_de_respuesta_al_cliente</label>
		<input type="date" class="form-control input-lg" name="Fecha_de_respuesta_al_cliente"  id="Fecha_de_respuesta_al_cliente" placeholder="Fecha_de_respuesta_al_cliente">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">tipo_de_servicio</label>
		<input type="text" class="form-control input-lg" name="tipo_de_servicio"  id="tipo_de_servicio" placeholder="tipo_de_servicio">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">detalle_del_servicio</label>
		<textarea  cols="53" rows="2" name="detalle_del_servicio" id="detalle_del_servicio"></textarea>
	</div>
</div>	

<div class="col-xs-4">
<div class="form-group">
		<label for="id">Novedades</label>
		<textarea cols="53" rows="2" name="novedades" id="novedades"></textarea>
	</div>
</div>	

<div class="col-xs-4">
<div class="form-group">
		<label for="id">px</label>
		<input type="text" class="form-control input-lg" name="px"  id="px" placeholder="px">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">armado</label>
		<input type="text" class="form-control input-lg" name="armado"  id="armado" placeholder="armado">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">tipo_renta</label>
		<input type="text" class="form-control input-lg" name="tipo_renta"  id="tipo_renta" placeholder="tipo_renta">
	</div>
</div>


<div class="col-xs-4">
<div class="form-group">
		<label for="id">Proveedor_vehiculo</label>
		<input type="text" class="form-control input-lg" name="Proveedor_vehiculo"  id="Proveedor_vehiculo" placeholder="Proveedor_vehiculo">
	</div>
</div>

<div class="col-xs-4">
<div class="form-group">
		<label for="id">fecha_prefactura</label>
		<input type="date" class="form-control input-lg" name="fecha_prefactura"  id="fecha_prefactura" placeholder="fecha_prefactura">
	</div>
</div>


<div class="col-xs-2">
<div class="form-group">
		<label for="id">tiempo_rta_cliente</label>
		<input type="text" class="form-control input-lg" name="tiempo_rta_cliente"  id="tiempo_rta_cliente" placeholder="tiempo_rta_cliente">
	</div>
</div>

<div class="col-xs-2">
<div class="form-group">
		<label for="id">tiempo_prefactura</label>
		<input type="text" class="form-control input-lg" name="tiempo_prefactura"  id="tiempo_prefactura" placeholder="tiempo_prefactura">
	</div>
</div>

<div class="col-xs-12">
<div class="form-group">
		<label for="id">observaciones</label>
		<textarea class="ckeditor" cols="53" rows="2" id="observaciones" name="observaciones"></textarea>
	</div>
</div>

<input type="hidden" class="form-control input-lg" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">	


	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

