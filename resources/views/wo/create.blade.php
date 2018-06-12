
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

{!! Form::open(['route' => 'wo.store', 'method'=>'POST']) !!}
	<legend>CREAR ORDEN DE TRABAJO (W.O)</legend>

	<div class="col-xs-1">
	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>
</div>

	<div class="col-xs-11">
	<div class="form-group">
		<label for="id">descripcion_wo</label>
		<input type="text" class="form-control" name="descripcion_wo"  id="descripcion_wo" placeholder="descripcion_wo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">Estado</label>
		<select name="ingresar_solicitud" id="ingresar_solicitud" class="form-control" required="required">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">fecha</label>
		<input type="date" class="form-control" name="fecha_ingresar_solicitud"  id="fecha_ingresar_solicitud" placeholder="fecha_ingresar_solicitud">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">usuario</label>
		<input type="text" class="form-control" name="usuario_ingresar_solicitud"  id="usuario_ingresar_solicitud" placeholder="usuario_ingresar_solicitud">
	</div>
</div>


<div class="col-xs-4">
	<div class="form-group">
	
		<select name="programacion" id="programacion" class="form-control" required="required">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_programacion"  id="fecha_programacion" placeholder="fecha_programacion">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_programacion"  id="usuario_programacion" placeholder="usuario_programacion">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="respuesta_cliente" id="respuesta_cliente" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_respuesta_cliente"  id="fecha_respuesta_cliente" placeholder="fecha_respuesta_cliente">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_respuesta_cliente"  id="usuario_respuesta_cliente" placeholder="usuario_respuesta_cliente">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="contratacion_personal" id="contratacion_personal" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_contratacion_personal"  id="fecha_contratacion_personal" placeholder="fecha_contratacion_personal">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_contratacion_personal"  id="usuario_contratacion_personal" placeholder="usuario_contratacion_personal">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="contratacion_vehiculo" id="contratacion_vehiculo" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_contratacion_vehiculo"  id="fecha_contratacion_vehiculo" placeholder="fecha_contratacion_vehiculo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_contratacion_vehiculo"  id="usuario_contratacion_vehiculo" placeholder="usuario_contratacion_vehiculo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="giro_anticipo" id="giro_anticipo" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_giro_anticipo"  id="fecha_giro_anticipo" placeholder="fecha_giro_anticipo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_giro_anticipo"  id="usuario_giro_anticipo" placeholder="usuario_giro_anticipo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="noticificacion_agencia" id="noticificacion_agencia" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_notificacion_agencia"  id="fecha_notificacion_agencia" placeholder="fecha_notificacion_agencia">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_notificacion_agenda"  id="usuario_notificacion_agenda" placeholder="usuario_notificacion_agenda">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="impresion_orden" id="impresion_orden" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_impresion_orden"  id="fecha_impresion_orden" placeholder="fecha_impresion_orden">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_impresion_orden"  id="usuario_impresion_orden" placeholder="usuario_impresion_orden">
	</div>
</div>


<div class="col-xs-4">
	<div class="form-group">
	
		<select name="instructivo_escolta" id="instructivo_escolta" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_instructivo_escolta"  id="fecha_instructivo_escolta" placeholder="fecha_instructivo_escolta">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_instructivo_escolta"  id="usuario_instructivo_escolta" placeholder="usuario_instructivo_escolta">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="aviso_terminacion_personal" id="aviso_terminacion_personal" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_aviso_terminacion_personal"  id="fecha_aviso_terminacion_personal" placeholder="fecha_aviso_terminacion_personal">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_aviso_terminacion_personal"  id="usuario_aviso_terminacion_personal" placeholder="usuario_aviso_terminacion_personal">
	</div>
</div>


<div class="col-xs-4">
	<div class="form-group">
	
		<select name="entrega_vehiculo" id="entrega_vehiculo" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_entrega_vehiculo"  id="fecha_entrega_vehiculo" placeholder="fecha_entrega_vehiculo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="text" class="form-control" name="usuario_entrega_vehiculo"  id="usuario_entrega_vehiculo" placeholder="usuario_entrega_vehiculo">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
	
		<select name="finalizado" id="finalizado" class="form-control">
			<option value="NO">NO</option>
			<option value="SI">SI</option>
			<option value="N/A">N/A</option>
		</select>
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		
		<input type="date" class="form-control" name="fecha_finalizado"  id="fecha_finalizado" placeholder="fecha_finalizado">
	</div>
</div>



	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

