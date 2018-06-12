@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert') 


{!! Form::open(['route' => ['ordenesdeservicio.update', $edit->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

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
    <input type="text" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly" value="{{$edit->id}}">
  </div>
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">No_de_orden_de_servicio</label>
   {{--  <input type="text" class="form-control" name="No_de_orden_de_servicio"  id="No_de_orden_de_servicio" placeholder="Número orden de sercivios" value="{{$edit->No_de_orden_de_servicio}}">
 --}}
    {!! Form::select('No_de_orden_de_servicio', $wo, $edit->No_de_orden_de_servicio, ['class'=>'form-control']) !!}
  </div>
</div>  
<div class="col-xs-3">

    <label>Estado de Servicio</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, $edit->estadoservicio_id, ['class' => 'form-control']) !!}
</div>

<div class="col-xs-4">
  <div class="form-group">
    <label for="id">fecha_inicio_servicio</label>
    <input type="text" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios" value="{{$edit->fecha_inicio_servicio}}">
  </div>
</div>
  
  <div class="col-xs-2">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="text" class="form-control" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT" value="{{$edit->Hora_inicio_en_OT}}">
  </div>
   </div>

    <div class="col-xs-2">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="text" class="form-control" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_inicio_en_OT" value="{{$edit->Hora_Final_en_OT}}">
  </div>
   </div>
   <div class="col-xs-2">
    <div class="form-group">
    <label for="id">Hora_Programada</label>
    <input type="text" class="form-control" name="Hora_Programada"  id="Hora_Programada" placeholder="Hora_Programada" value="{{$edit->Hora_Programada}}">
  </div>
   </div>
   <div class="col-xs-2">
    <div class="form-group">
    <label for="id"><small>Hora_de_inicio_Servicio_cliente</small></label>
    <input type="text" class="form-control" name="Hora_de_inicio_Servicio_cliente"  id="Hora_de_inicio_Servicio_cliente" placeholder="Hora_de_inicio_Servicio_cliente" value="{{$edit->Hora_de_inicio_Servicio_cliente}}">
  </div>
   </div>

   <div class="col-xs-2">
    <div class="form-group">
    <label for="id"><small>Hora_Final_del_Servicio_Cliente</small></label>
    <input type="text" class="form-control" name="Hora_Final_del_Servicio_Cliente"  id="Hora_Final_del_Servicio_Cliente" placeholder="Hora_Final_del_Servicio_Cliente" value="{{$edit->Hora_Final_del_Servicio_Cliente}}">
  </div>
   </div>

    <div class="col-xs-2">
    <div class="form-group">
    <label for="id">Total_Horas_del_Servicio</label>
    <input type="text" class="form-control" name="Total_Horas_del_Servicio"  id="Total_Horas_del_Servicio" placeholder="Total_Horas_del_Servicio" value="{{$edit->Total_Horas_del_Servicio}}">
  </div>
   </div>

  <div class="col-xs-4">
   <div class="form-group">
    <label for="id">Escolta Asignado</label>
    <input type="text" class="form-control" name="Escolta_asignado"  id="Escolta_asignado" placeholder="Escolta_asignado" value="{{$edit->Escolta_asignado}}" style="text-transform: uppercase;">
  </div>
  </div>

<div class="col-xs-4">  
 <div class="form-group">
    <label for="id">Cédula</label>
    <input type="number" class="form-control" name="cedula"  id="cedula" placeholder="cedula" value="{{$edit->cedula}}">
  </div>
</div>  

  <div class="col-xs-2">
   <div class="form-group">
    <label for="id">Escolta Externo</label>
      <input type="text" class="form-control" ame="escolta_externo" id="escolta_externo" value="{{$edit->escolta_externo}}">   
  </div>
</div>

   <div class="col-xs-2">
   <div class="form-group">
    <label for="id">Bilingue?</label>
    
    <input type="text" class="form-control" name="bilingue" id="bilingue" value="{{$edit->bilingue}}"> 
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">  
    <label for="id">ID2</label>
    <input type="text" class="form-control" name="ID2"  id="ID2" placeholder="ID2" value="{{$edit->ID2}}">
  </div>
</div>


<div class="col-xs-4">
<div class="form-group">
    <label for="id">placa</label>
    <input type="text" class="form-control" name="placa"  id="placa" placeholder="placa" value="{{$edit->placa}}">
  </div>
</div>
<div class="col-xs-4">
<div class="form-group">
    <label for="id">tipo</label>
    <input type="text" class="form-control" name="tipo"  id="tipo" placeholder="tipo" value="{{$edit->tipo}}">
  </div>
</div>
<div class="col-xs-4">
<div class="form-group">
    <label for="id">cliente</label>
    <input type="text" class="form-control" name="cliente"  id="cliente" placeholder="cliente" value="{{$edit->cliente}}">
  </div>
</div>  

<div class="col-xs-4">
<div class="form-group">
    <label for="id">solicitante_interno</label>
    <input type="text" class="form-control" name="solicitante_interno"  id="solicitante_interno" placeholder="solicitante_interno" value="{{$edit->solicitante_interno}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">ciudad_origen</label>
    <input type="text" class="form-control" name="ciudad_origen"  id="ciudad_origen" placeholder="ciudad_origen" value="{{$edit->ciudad_origen}}">
  </div>
</div>
<div class="col-xs-4">
<div class="form-group">
    <label for="id">ciudad_destino</label>
    <input type="text" class="form-control" name="ciudad_destino"  id="ciudad_destino" placeholder="ciudad_destino" value="{{$edit->ciudad_destino}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">fecha_solicitud</label>
    <input type="text" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="{{$edit->fecha_solicitud}}">
  </div>
</div>
<div class="col-xs-4">
<div class="form-group">
    <label for="id">Fecha_de_respuesta_al_cliente</label>
    <input type="text" class="form-control" name="Fecha_de_respuesta_al_cliente"  id="Fecha_de_respuesta_al_cliente" placeholder="Fecha_de_respuesta_al_cliente" value="{{$edit->Fecha_de_respuesta_al_cliente}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">tipo_de_servicio</label>
    <input type="text" class="form-control" name="tipo_de_servicio"  id="tipo_de_servicio" placeholder="tipo_de_servicio" value="{{$edit->tipo_de_servicio}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">detalle_del_servicio</label>
    <textarea cols="53" rows="2" name="detalle_del_servicio" id="detalle_del_servicio">{{$edit->detalle_del_servicio}}</textarea>
  </div>
</div>  

<div class="col-xs-4">
<div class="form-group">
    <label for="id">Novedades</label>
    <textarea  cols="53" rows="2" name="novedades" id="novedades">{{$edit->novedades}}</textarea>
  </div>
</div>  

<div class="col-xs-4">
<div class="form-group">
    <label for="id">px</label>
    <input type="text" class="form-control" name="px"  id="px" placeholder="px" value="{{$edit->px}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">armado</label>
    <input type="text" class="form-control" name="armado"  id="armado" placeholder="armado" value="{{$edit->armado}}">
  </div>  
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">tipo_renta</label>
    <input type="text" class="form-control" name="tipo_renta"  id="tipo_renta" placeholder="tipo_renta" value="{{$edit->tipo_renta}}">
  </div>
</div>


<div class="col-xs-4">
<div class="form-group">
    <label for="id">Proveedor_vehiculo</label>
    <input type="text" class="form-control" name="Proveedor_vehiculo"  id="Proveedor_vehiculo" placeholder="Proveedor_vehiculo" value="{{$edit->Proveedor_vehiculo}}">
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">fecha_prefactura</label>
    <input type="text" class="form-control" name="fecha_prefactura"  id="fecha_prefactura" placeholder="fecha_prefactura" value="{{$edit->fecha_prefactura}}">
  </div>
</div>


<div class="col-xs-2">
<div class="form-group">
    <label for="id">tiempo_rta_cliente</label>
    <input type="text" class="form-control" name="tiempo_rta_cliente"  id="tiempo_rta_cliente" placeholder="tiempo_rta_cliente" value="{{$edit->tiempo_rta_cliente}}">
  </div>
</div>

<div class="col-xs-2">
<div class="form-group">
    <label for="id">tiempo_prefactura</label>
    <input type="text" class="form-control" name="tiempo_prefactura"  id="tiempo_prefactura" placeholder="tiempo_prefactura" value="{{$edit->tiempo_prefactura}}">
  </div>
</div>

<div class="col-xs-12">
<div class="form-group">
    <label for="id">observaciones</label>
    <textarea class="ckeditor" cols="53" rows="2" id="observaciones" name="observaciones">{{$edit->observaciones}}</textarea>
  </div>
</div>

<input type="hidden" class="form-control" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">  





  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
  </center><p>

{!! Form::close() !!}





@endsection
