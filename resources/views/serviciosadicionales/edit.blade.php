@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 


{!! Form::open(['route' => ['servicios_adicionales.update', $edit->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

  <legend>EDITAR ORDENES DE SERVICIO</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      
  <div class="col-xs-1">
  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control input-lg" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$edit->id}}">
  </div>  
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">nit</label>
    <input type="text" class="form-control input-lg" name="nit"  id="nit" placeholder="nit" value="{{$edit->nit}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">cliente</label>
    <input type="text" class="form-control input-lg" name="cliente"  id="cliente" placeholder="cliente" value="{{$edit->cliente}}">
  </div>
</div>
  

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">lineadenegocios</label>
    <input type="text" class="form-control input-lg" name="lineadenegocios"  id="lineadenegocios" placeholder="lineadenegocios" value="{{$edit->lineadenegocios}}">
  </div>
</div>



<div class="col-xs-3">
  <div class="form-group">
    <label for="id">ciudad</label>
    <input type="text" class="form-control input-lg" name="ciudad"  id="ciudad" placeholder="ciudad" value="{{$edit->ciudad}}">
  </div>
</div>

<div class="col-xs-6">
  <div class="form-group">
    <label for="id">detalle</label>
    <input type="text" class="form-control input-lg" name="detalle"  id="detalle" placeholder="detalle" value="{{$edit->detalle}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">datos_escolta</label>
    <input type="text" class="form-control input-lg" name="datos_escolta"  id="datos_escolta" placeholder="datos_escolta" value="{{$edit->datos_escolta}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">propuesta</label>
    <input type="text" class="form-control input-lg" name="propuesta"  id="propuesta" placeholder="propuesta" value="{{$edit->propuesta}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">prefactura</label>
    <input type="text" class="form-control input-lg" name="prefactura"  id="prefactura" placeholder="prefactura" value="{{$edit->prefactura}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">fecha_prefactura</label>
    <input type="date" class="form-control input-lg" name="fecha_prefactura"  id="fecha_prefactura" placeholder="fecha_prefactura" value="{{$edit->fecha_prefactura}}">
  </div>
</div>
<div class="col-xs-3">
  <div class="form-group">
    <label for="id">horario</label>
    <input type="text" class="form-control input-lg" name="horario"  id="horario" placeholder="horario" value="{{$edit->horario}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">fecha_de_servicio</label>
    <input type="text" class="form-control input-lg" name="fecha_de_servicio"  id="fecha_de_servicio" placeholder="fecha_de_servicio" value="{{$edit->fecha_de_servicio}}">
  </div>
</div>


<div class="col-xs-3">
  <div class="form-group">
    <label for="id">cantidad</label>
    <input type="number" class="form-control input-lg" name="cantidad"  id="cantidad" placeholder="cantidad" value="{{$edit->cantidad}}">
  </div>
</div>


<div class="col-xs-3">
  <div class="form-group">
    <label for="id">valor_total_servicio</label>
    <input type="number" class="form-control input-lg" name="valor_total_servicio"  id="valor_total_servicio" placeholder="valor_total_servicio" value="{{$edit->valor_total_servicio}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">valor_unitario</label>
    <input type="number" class="form-control input-lg" name="valor_unitario"  id="valor_unitario" placeholder="valor_unitario" value="{{$edit->valor_unitario}}">
  </div>
</div>

<div class="col-xs-3">

    <label>orden_de_servicio</label>
    {!! Form::select('orden_de_servicio_id',$ordenesdeservicio, $edit->orden_de_servicio_id, ['class' => 'form-control input-lg']) !!}
</div>


<div class="col-xs-3">
  <div class="form-group">
    <label for="id">fecha_factura</label>
    <input type="date" class="form-control input-lg" name="fecha_factura"  id="fecha_factura" placeholder="fecha_factura" value="{{$edit->fecha_factura}}">
  </div>
</div>


<div class="col-xs-3">
  <div class="form-group">
    <label for="id">Factura</label>
    <input type="text" class="form-control input-lg" name="factura"  id="factura" placeholder="factura" value="{{$edit->factura}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">Estado_de_facturación</label>
   <input type="text" class="form-control input-lg" name="estado_de_facturacion"  id="estado_de_facturacion" placeholder="estado_de_facturacion" value="{{$edit->estado_de_facturacion}}">
  </div>
</div>

<div class="col-xs-3">
  <div class="form-group">
    <label for="id">responsable</label>
    <input type="text" class="form-control input-lg" name="responsable"  id="responsable" placeholder="responsable" value="{{$edit->responsable}}">
  </div>
</div>



<div class="col-xs-3">
  <div class="form-group">
    <label for="id">Estado_final</label>
      <input type="text" class="form-control input-lg" name="estado_final"  id="estado_final" placeholder="estado_final" value="{{$edit->estado_final}}">
  </div>
</div>


<div class="col-xs-12">
  <div class="form-group">
    <label for="id">observaciones</label>
    <textarea name="observaciones" id="observaciones" class="ckeditor" >v{{$edit->observaciones}}</textarea>
  </div>
</div>


<input type="hidden" class="form-control input-lg" name="usuario"  id="usuario" placeholder=""
value="{{Auth::user()->id}}">    


  



  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
  </center><p>

{!! Form::close() !!}





@endsection
