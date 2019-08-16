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
    {!! Form::select('No_de_orden_de_servicio', $wo, $edit->No_de_orden_de_servicio, ['class'=>'form-control', 'disabled']) !!}
  </div>
</div>
<div class="col-xs-3">

    <label>Estado de Servicio</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, $edit->estadoservicio_id, ['class' => 'form-control']) !!}
</div>



<div class="col-xs-4">
  <div class="form-group">
    <label for="id">fecha_inicio_servicio</label>
    <input type="datetime-local" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios" value="<?php $date = new DateTime($edit->fecha_inicio_servicio);
echo $date->format('Y-m-d\TH:i'); ?>">
  <span style="display: none; color: red" id="fechacontrol">La fecha es menor a la fecha de solicitud</span>
  </div>
</div>

<div class="col-xs-1">
</div>
<div class="col-xs-4">
<div class="form-group">
		<label for="id">propuesta económica</label>
		<input type="text" class="form-control" name="propuesta_economica"  id="propuesta_economica" placeholder="propuesta económica." value="{{$edit->propuesta_economica}}">
	</div>
</div>
<div class="col-xs-3">
<div class="form-group">
		<label for="id">Color agenda </label>
		<input class="form-control" type="color" value="{{$edit->color_agenda}}" id="color_agenda" name="color_agenda">
	</div>
</div>
El servicio se debe ejecutar <b>{{ \Carbon\Carbon::parse($edit->fecha_inicio_servicio)->diffForHumans() }} </b>
<div class="col-xs-3">
<div class="form-group">
<br>
    	<a  href="{{route('pdf', $edit->id )}}" class="btn btn-info" target="_blank">PDF Presentación de Escoltas y Vehículos</a>

      <br><br>

      <a  href="{{route('horarios', $edit->id )}}" class="btn btn-default" target="_blank"><i class="fa fa-clock-o" aria-hidden="true"></i> Horarios de Escoltas</a>


	</div>
</div>

</div>
</div>
<button type="button" class="btn btn-link" id="showhide2">Mostrar/Ocultar</button>
<div class="hora" >


<div class="panel panel-default">
  <div class="panel-body">

 <div class="container">
   <div class="row">


<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="time" class="form-control" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT" value="{{$edit->Hora_inicio_en_OT}}">
  </div>
</div>

 <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="time" class="form-control" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_inicio_en_OT" value="{{$edit->Hora_Final_en_OT}}">
  </div>
   </div>
 <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id">Hora_Programada</label>
    <input type="time" class="form-control" name="Hora_Programada"  id="Hora_Programada" placeholder="Hora_Programada" value="{{$edit->Hora_Programada}}">
  </div>
   </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id"><small>Hora_de_inicio_Servicio_cliente</small></label>
    <input type="time" class="form-control horas" name="Hora_de_inicio_Servicio_cliente"  id="Hora_de_inicio_Servicio_cliente" placeholder="Hora_de_inicio_Servicio_cliente" value="{{$edit->Hora_de_inicio_Servicio_cliente}}">
  </div>
   </div>

  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id"><small>Hora_Final_del_Servicio_Cliente</small></label>
    <input type="time" class="form-control horas" name="Hora_Final_del_Servicio_Cliente"  id="Hora_Final_del_Servicio_Cliente" placeholder="Hora_Final_del_Servicio_Cliente" value="{{$edit->Hora_Final_del_Servicio_Cliente}}">
  </div>
   </div>

  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
    <label for="id">Total_Horas_del_Servicio</label>
    <input type="time" class="form-control" name="Total_Horas_del_Servicio"  id="Total_Horas_del_Servicio" placeholder="Total_Horas_del_Servicio" value="{{$edit->Total_Horas_del_Servicio}}" readonly>

  </div>
   </div>

   </div>
</div>

 </div>
 </div>
</div>
  <div class="panel panel-default">
    <div class="panel-body">



  <div class="col-xs-4">
   <div class="form-group">
    <label for="id">Escolta Asignado</label>
    {!! Form::select('Escolta_asignado',$escolta, $edit->Escolta_asignado, ['class' => 'form-control escoltas','id'=>'escoltas2']) !!}
  </div>
  </div>

<div class="col-xs-4">
 <div class="form-group">
    <label for="id">Cédula</label>
    <input type="number" class="form-control" name="cedula"  id="cedula" placeholder="cedula" value="{{$edit->cedula}}" readonly>
  </div>
</div>


  <div class="col-xs-2">
   <div class="form-group">
    <label for="id">Escolta Externo</label>
      <input type="text" class="form-control" name="escolta_externo" id="escolta_externo" value="{{$edit->escolta_externo}}" readonly>
  </div>
</div>

  @php

    $sino= array ("SI","NO");

  @endphp

   <div class="col-xs-2">
   <div class="form-group">

    <label for="id">Bilingue?</label>


   {!! Form::select('bilingue', $sino, $edit->bilingue, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">AVANTEL</label>
    <input type="text" class="form-control" name="ID2"  id="ID2" placeholder="AVANTEL" value="{{$edit->ID2}}">
  </div>
</div>


<div class="col-xs-4">
<div class="form-group">
    <label for="id">placa</label>

     {!! Form::select('placa',$vehiculo, $edit->placa, ['class' => 'form-control']) !!}
  </div>
</div>

@php


   $tipovehiculo= array ("BLINDADO",
"MOTOCICLETA",
"CONVENCIONAL",
"N/A",
"VAN",
"SEDAN",
"AMBULANCIA",
"BUS",
"VAN BLINDADA"
);
@endphp

<div class="col-xs-4">
<div class="form-group">
    <label for="id">tipo</label>
    <!-- <input type="text" class="form-control" name="tipo"  id="tipo" placeholder="tipo" value="{{$edit->tipo}}">
 -->
   {!! Form::select('tipo', $tipodevehiculo, $edit->tipo, ['class' => 'form-control']) !!}
   <!--   <select name="tipo" id="tipo" class="form-control">
       <option value="BLINDADO">BLINDADO</option>
       <option value="MOTOCICLETA">MOTOCICLETA</option>
       <option value="CONVENCIONAL">CONVENCIONAL</option>
       <option value="N/A">N/A</option>
       <option value="VAN">VAN</option>
       <option value="SEDAN">SEDAN</option>
       <option value="AMBULANCIA">AMBULANCIA</option>
       <option value="BUS">BUS</option>
       <option value="VAN BLINDADA">VAN BLINDADA</option>

     </select> -->
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">cliente</label>
    <!-- <input type="text" class="form-control" name="cliente"  id="cliente" placeholder="cliente" value="{{$edit->cliente}}"> -->

    {!! Form::select('cliente',$cliente, $edit->cliente, ['class' => 'form-control']) !!}
  </div>
</div>

@php

$solicitante_interno = array("N/A",
"G. OPERACIONES",
"G. FINANCIERA",
"G. GENERAL",
"G. GESTION HUMANA",
"G. OXY",
"SEG ELECTRONICA"
);


@endphp
<div class="col-xs-4">
<div class="form-group">
    <label for="id">solicitante_interno</label>
    <!-- <input type="text" class="form-control" name="solicitante_interno"  id="solicitante_interno" placeholder="solicitante_interno" value="{{$edit->solicitante_interno}}"> -->

    {!! Form::select('solicitante_interno', $solicitanteinterno, $edit->solicitante_interno, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">Solicitante</label>
    <input type="text" class="form-control" name="solicitante_interno2"  id="solicitante_interno2" placeholder="ciudad_origen" value="{{$edit->solicitante_interno2}}">
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
    <input type="datetime-local" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="<?php $date = new DateTime($edit->fecha_solicitud);
echo $date->format('Y-m-d\TH:i'); ?>">
  </div>
</div>
<div class="col-xs-4">
<div class="form-group">
    <label for="id">Fecha_de_respuesta_al_cliente</label>
    <input type="datetime-local" class="form-control" name="Fecha_de_respuesta_al_cliente"  id="Fecha_de_respuesta_al_cliente" placeholder="Fecha_de_respuesta_al_cliente" value="<?php $date = new DateTime($edit->Fecha_de_respuesta_al_cliente);
echo $date->format('Y-m-d\TH:i'); ?>">
    <span id="fechacontrol2" style="display: none; color: red">La Fecha_de_respuesta_al_cliente es inferior a la fecha de solicitud</span>
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">tipo_de_servicio</label>


  

    {!! Form::select('tipo_de_servicio', $tiposervicio, $edit->tipo_de_servicio, ['class' => 'form-control']) !!}



  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">detalle_del_servicio</label>
    <br><textarea cols="53" rows="2" name="detalle_del_servicio" id="detalle_del_servicio">{{$edit->detalle_del_servicio}}</textarea>
  </div>
</div>

<div class="col-xs-4">
<div class="form-group">
    <label for="id">Novedades</label>
    <br><textarea  cols="53" rows="2" name="novedades" id="novedades">{{$edit->novedades}}</textarea>
  </div>
</div>


@if(Auth::user()->type != 3)
<center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
@endif  

  <small><b>Usuario que modífico la solicitud</b>:<?php $usuario= App\User::find($edit->users_id); echo $usuario->name; ?><br>  <b>Fecha de Creación</b>: {{$edit->created_at}}
  <br><b>Fecha de la Ultima Actualización:</b> {{$edit->updated_at}}
  </small>
  </center><p>

 </div>
  </div>

<button type="button" class="btn btn-link" id="showhide">Mostrar/Ocultar</button>

<div class="panel panel-default" id="prefactura">
      <div class="panel-body">


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
    <input type="datetime-local" class="form-control" name="fecha_prefactura"  id="fecha_prefactura" placeholder="fecha_prefactura" value="<?php $date = new DateTime($edit->fecha_prefactura);
echo $date->format('Y-m-d\TH:i'); ?>">
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



@if(Auth::user()->type != 3)
  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>
  </center><p>
@endif    

{!! Form::close() !!}



<script type="text/javascript">

//ajax para traerme los escoltas para la vista /ordenesdeservicio/edit

$(document).ready(function() {

    $('#escoltas2').change(function(event) {
      /* Act on the event */

      let leonidas = $('#escoltas2').val();
      console.log(leonidas);


      $.ajax({
        url: '{!!URL::to('allescolta')!!}',
        type: 'get',
        data: {id: leonidas},
      })
      .done(function(result) {

        //console.log(result);



        $.each(result, function(index, val) {
           /* iterate through array or object */
            if (val.id == leonidas) {

              $('#cedula').val(val.cc);
              $('#bilingue').val(val.bilingue);
              $('#escolta_externo').val(val.escolta_externo);

            }
        });



      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });



    });
  });

  $(function() {


   //calculo total de horas

    $('.horas').change(function(event) {
      /* Act on the event */

      var horainicial = $('#Hora_de_inicio_Servicio_cliente').val();
      var horafinal = $('#Hora_Final_del_Servicio_Cliente').val();

      // creamos una fecha genérica con tu tiempo
var d = new Date("0001-01-01T"+horainicial);
var e = new Date("0001-01-01T"+horafinal);

// calculamos los minutos a partir de las horas y minutos de la fecha creada
var minutosinicial = d.getHours() * 60 + d.getMinutes();
var minutosfinal= e.getHours() * 60 + e.getMinutes();

if (minutosfinal<minutosinicial) {
    var resultado = (1440-minutosinicial)+minutosfinal;
    console.log(resultado);
} else {
  var resultado = minutosfinal-minutosinicial;
}


var minutes = Math.floor( resultado / 60 );
var seconds = resultado % 60;

//Anteponiendo un 0 a los minutos si son menos de 10
minutes = minutes < 10 ? '0' + minutes : minutes;

//Anteponiendo un 0 a los segundos si son menos de 10
seconds = seconds < 10 ? '0' + seconds : seconds;

var result = minutes + ":" + seconds;  // 161:30


  $('#Total_Horas_del_Servicio').val(result);





    });










  });

//oculta la parte de prefactura
  $(document).ready(function() {

    $('#prefactura').hide();
    $('#showhide').click(function(event) {
      $('#prefactura').toggle();
    });
  });



  $(function() {
      
    
      
    $('#fecha_inicio_servicio').change(function(event) {
      var fecha_solicitud = Date.parse($('#fecha_solicitud').val());
      var fecha_inicio_servicio =Date.parse($('#fecha_inicio_servicio').val());
      var Fecha_de_respuesta_al_cliente =Date.parse($('#Fecha_de_respuesta_al_cliente').val());

      if (fecha_inicio_servicio < fecha_solicitud || Fecha_de_respuesta_al_cliente < fecha_solicitud) {
          confirm('La fecha es inferior a la fecha de solicitud *');
          $(this).css('background-color','yellow');
          $('#fechacontrol').css('display','block');
       } else {
        $('#fechacontrol').css('display','none');
        $('#fecha_inicio_servicio').removeAttr("style")

       }

    });
   
    $('#Fecha_de_respuesta_al_cliente').change(function(event) {
      var fecha_solicitud = Date.parse($('#fecha_solicitud').val());
      var fecha_inicio_servicio =Date.parse($('#fecha_inicio_servicio').val());
      var Fecha_de_respuesta_al_cliente =Date.parse($('#Fecha_de_respuesta_al_cliente').val());

      if (Fecha_de_respuesta_al_cliente < fecha_solicitud) {
          confirm('La fecha es inferior a la fecha de solicitud *');
          $(this).css('background-color','yellow');
          $('#fechacontrol2').css('display','block');
       } else {
        $('#fechacontrol2').css('display','none');
        $('#Fecha_de_respuesta_al_cliente').removeAttr("style")

       }

    });
   
    



  });


</script>


@endsection
