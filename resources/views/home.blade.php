@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}

@endsection

<style>

  ul.ui-autocomplete {
    z-index: 1100;
}

</style>


@section('main-content')



 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">


<div class="container">

<div class="panel panel-default">
<h4><b><center>REGISTROS DE ORDENES DE SERVICIOS</h4></b></center>

<div class="panel panel-default">
    <div class="panel-body">




<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}" title="Bajar excel en versión 2010 "><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 "> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}" title="archivo separado por comas "><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>




</center>

{!! Form::open(['route' => 'home-principal', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Buscar Orden de Trabajo" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
{!! Form::open(['route' => 'fecha', 'method'=>'GET', 'Class'=>'navbar-form navbar-left']) !!}

  <div class="form-group">
<input type="text"  value="<?php echo date("Y-m-d");?>" class="form-control buscador"  name="fecha_inicio_servicio" />
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}


</div>

<center>
<div>
<a class="btn btn-info" data-toggle="modal" href='#modal-id' ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Solicitud del Servicio</a>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Nueva solicitud de servicio</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'ordenesdeservicio.store', 'method'=>'POST']) !!}
    <legend>CREAR ORDEN DE SERVICIOS</legend>


    <div class="form-group">
        <label for="id">id</label>
        <input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
    </div>


    <label>Estado de Servicio</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, null, ['class' => 'form-control']) !!}



<div class="form-group">
        <label for="id">cliente</label>
        {!! Form::select('cliente',$cliente, null, ['class' => 'form-control']) !!}
    </div>


    {{-- <div class="form-group">
        <label for="id">fecha_inicio_servicio</label>
        <input type="date" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
    </div> --}}




{{-- <div class="form-group">
        <label for="id">ciudad_origen</label>
        <input type="text" class="form-control" name="ciudad_origen"  id="ciudad_origen" placeholder="ciudad_origen">
    </div> --}}


<div class="form-group">
        <label for="id">ciudad_destino</label>
        <input type="text" class="form-control" name="ciudad_destino"  id="ciudad_destino2" placeholder="ciudad_destino" value="BOGOTA, D.C.">
    </div>

 @php

        $hoy = date("Y-m-d H:i:s");
    //echo $hoy;

 @endphp


<div class="form-group">
        <label for="id">fecha_solicitud</label>
        <input type="datetime-local" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="<?php $date = new DateTime();
echo $date->format('Y-m-d\TH:i'); ?>" >
    </div>



<div class="form-group">
        <label for="id">Fecha Inicio del servicio</label>
        <input type="datetime-local" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="fecha_inicio_servicio">
    </div>

<div class="form-group">
        <label for="id">detalle_del_servicio</label>
        <textarea cols="80" rows="3" id="detalle_del_servicio" name="detalle_del_servicio"></textarea>
    </div>

<input type="hidden" class="form-control" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>

            </div>

        </div>
    </div>
</div>
<br/>
<br/>
</center>
</div>


  <br>

  <a href="{{ $url = route('ordenesdeservicio.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Ordenes de Servicios</a>



  <a class="btn bg-maroon btn-flat margin pull-right" data-toggle="modal" href='#modal-2'><i class="fa fa-inbox"></i> Crear W.O</a>
  <div class="modal fade" id="modal-2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Crear WO new</h4>
        </div>
        <div class="modal-body">

          {!! Form::open(['route' => 'wo.store', 'method'=>'POST']) !!}


  La ultima W.O creada es la: (<strong><?php $wo =\DB::table('wo')->orderBy('id', 'desc')->first(); echo $wo->id; ?></strong>), <mark>Se va a crear una orden de trabajo Nueva .</mark>

  <div class="col-xs-1">
  <div class="form-group">

    <input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
  </div>
</div>






          <button type="submit" class="btn btn-primary pull-right" >Enviar</button>
          {!! Form::close() !!}

        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

<p>

<div class="table-responsive">
<table class="table table-bordered" id="table2" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  fecha_solicitud</td>
      <td>  Estado del Servicio</td>
      <td>  W.O y Ckecklist </td>
      <td>  Fecha Inicio del Servicio</td>
      <td>  cliente </td>
      <td>  ciudad_destino</td>
      <td>  detalle_del_servicio</td>
      <td colspan="3">  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr id="controllinea" style="color:#456789;font-size:80%;">

          <td>{{$row->id}}</td>
          <td>{{$row->fecha_solicitud}}</td>
        <td>
            @if ($row->estadoservicio_id==1 )
            <span class="label label-success"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span></td>
            @else
            <span class="label label-primary"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span></td>

            @endif

          <td>
            @if ($row->No_de_orden_de_servicio==1)
              Falta asignar W.O
            @else
            <a href="{{ $url = route('wo.edit',$row->No_de_orden_de_servicio) }}" class="btn btn-warning" title="Lista de Chequeo">{{$row->No_de_orden_de_servicio}}</small>
            @endif

            </td>

          <td>{{$row->fecha_inicio_servicio}}</td>
          <td><?php $clientes= App\cliente::find($row->cliente); echo $clientes->nombre;  ?></td>
          <!-- <td>{{$row->cliente}}</td> -->
          <td>{{$row->ciudad_destino}}</td>
          <td>{{str_limit($row->detalle_del_servicio,10)}}</td>





          <td ><a href="{{ $url = route('ordenesdeservicio.edit',$row->id) }}" class="btn btn-success" title="Programar" onclick="return confirm('Va a ingresar a programar.');"><i class="fa fa-pencil" aria-hidden="true"> Programar</i></a></td>
          <td><a href="{{ $url = route('continuar',$row->id) }}" class="btn btn-info" title="Continuar" onclick="return confirm('Desea duplicar el registro actual?')"><i class="fa fa-clipboard" aria-hidden="true"></i> Continuar</a></td>
          <td id="eliminarhome">@include('ordenesdeservicio.destroy')</td>
          <td ><a href="{{ $url = route('documento.edit',$row->id) }}" class=" btn btn-default" title="Imprimir"  ><i class="fa fa- fa-print" aria-hidden="true"> Imprimir  </i></a></td>

    </tr>

  </tbody>

  @endforeach


</table>
</div>

<center>{{ $index->links() }}</center>

</div>

</div>
</div>


@endsection
