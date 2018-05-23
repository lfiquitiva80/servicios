
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

{!! Form::open(['route' => 'servicios_adicionales.store', 'method'=>'POST']) !!}
	<legend>CREAR ORDENES ADICIONALES</legend>

	<div class="col-xs-1">
	<div class="form-group">
		<label for="id">id</label>
		<input type="text" class="form-control input-lg" name="id"  id="id" placeholder="Id" readonly="readonly">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">nit</label>
		<input type="text" class="form-control input-lg" name="nit"  id="nit" placeholder="nit">
	</div>
</div>

<div class="col-xs-4">
	<div class="form-group">
		<label for="id">cliente</label>
		<input type="text" class="form-control input-lg" name="cliente"  id="cliente" placeholder="cliente">
	</div>
</div>
	

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">lineadenegocios</label>
		<input type="text" class="form-control input-lg" name="lineadenegocios"  id="lineadenegocios" placeholder="lineadenegocios">
	</div>
</div>



<div class="col-xs-3">
	<div class="form-group">
		<label for="id">ciudad</label>
		<input type="text" class="form-control input-lg" name="ciudad"  id="ciudad" placeholder="ciudad">
	</div>
</div>

<div class="col-xs-6">
	<div class="form-group">
		<label for="id">detalle</label>
		<input type="text" class="form-control input-lg" name="detalle"  id="detalle" placeholder="detalle">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">datos_escolta</label>
		<input type="text" class="form-control input-lg" name="datos_escolta"  id="datos_escolta" placeholder="datos_escolta">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">propuesta</label>
		<input type="text" class="form-control input-lg" name="propuesta"  id="propuesta" placeholder="propuesta">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">prefactura</label>
		<input type="text" class="form-control input-lg" name="prefactura"  id="prefactura" placeholder="prefactura">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">fecha_prefactura</label>
		<input type="date" class="form-control input-lg" name="fecha_prefactura"  id="fecha_prefactura" placeholder="fecha_prefactura">
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group">
		<label for="id">horario</label>
		<input type="text" class="form-control input-lg" name="horario"  id="horario" placeholder="horario">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">fecha_de_servicio</label>
		<input type="text" class="form-control input-lg" name="fecha_de_servicio"  id="fecha_de_servicio" placeholder="fecha_de_servicio">
	</div>
</div>


<div class="col-xs-3">
	<div class="form-group">
		<label for="id">cantidad</label>
		<input type="number" class="form-control input-lg" name="cantidad"  id="cantidad" placeholder="cantidad">
	</div>
</div>


<div class="col-xs-3">
	<div class="form-group">
		<label for="id">valor_total_servicio</label>
		<input type="number" class="form-control input-lg" name="valor_total_servicio"  id="valor_total_servicio" placeholder="valor_total_servicio">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">valor_unitario</label>
		<input type="number" class="form-control input-lg" name="valor_unitario"  id="valor_unitario" placeholder="valor_unitario">
	</div>
</div>

<div class="col-xs-3">

    <label>orden_de_servicio</label>
    {!! Form::select('orden_de_servicio_id',$ordenesdeservicio, null, ['class' => 'form-control input-lg']) !!}
</div>


<div class="col-xs-3">
	<div class="form-group">
		<label for="id">fecha_factura</label>
		<input type="date" class="form-control input-lg" name="fecha_factura"  id="fecha_factura" placeholder="fecha_factura">
	</div>
</div>


<div class="col-xs-3">
	<div class="form-group">
		<label for="id">Factura</label>
		<input type="text" class="form-control input-lg" name="factura"  id="factura" placeholder="factura">
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">Estado_de_facturación</label>
		<select name="estado_de_facturacion" id="estado_de_facturacion" class="form-control input-lg">
			<option value="FACTURADO">FACTURADO</option>
			<option value="SIN FACTURAR" selected>SIN FACTURAR</option>
		</select>
	</div>
</div>

<div class="col-xs-3">
	<div class="form-group">
		<label for="id">responsable</label>
		<input type="text" class="form-control input-lg" name="responsable"  id="responsable" placeholder="responsable">
	</div>
</div>



<div class="col-xs-3">
	<div class="form-group">
		<label for="id">Estado_final</label>
		<select name="estado_final" id="estado_final" class="form-control input-lg">
			<option value="FACTURADO">FACTURADO</option>
			<option value="SIN FACTURAR" selected>SIN FACTURAR</option>
		</select>
	</div>
</div>


<div class="col-xs-12">
	<div class="form-group">
		<label for="id">observaciones</label>
		<textarea name="observaciones" id="observaciones" class="ckeditor" ></textarea>
	</div>
</div>


<input type="hidden" class="form-control input-lg" name="usuario"  id="usuario" placeholder=""
value="{{Auth::user()->id}}">	


	<center><button type="submit" class="btn btn-primary" >Enviar</button>
	<button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>


@endsection

