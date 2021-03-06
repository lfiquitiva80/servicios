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




<!-- <center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}" title="Bajar excel en versión 2010 "><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 "> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}" title="archivo separado por comas "><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>




</center> -->

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
<a class="btn btn-info" data-toggle="modal" href='#modal-id' ><i class="fa fa-check" aria-hidden="true"></i> Crear Solicitud del Servicio</a>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'ordenesdeservicio.store', 'method'=>'POST','id'=>'reg_form9']) !!}
    <legend>CREAR ORDEN DE SERVICIOS</legend>


    <div class="form-group">
        <label for="id"></label>
        <input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
    </div>


    <label>ESTADO DEL SERVICIO</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, null, ['class' => 'form-control','name'=>'estadoservicio_id']) !!}



<div class="form-group">
        <label for="id">CLIENTE</label>
        {!! Form::select('cliente',$cliente, null, ['class' => 'form-control','name'=>'cliente']) !!}
    </div>


<div class="form-group">
        <label for="id">SOLICITANTE</label>
        <input type="text" class="form-control" name="solicitante_interno2"  id="solicitante_interno2" placeholder="Digite el solicitante">
</div>

    {{-- <div class="form-group">
        <label for="id">FECHA INICIO DEL SERVICIO</label>
        <input type="date" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
    </div> --}}







<div class="form-group">
        <label for="id">CIUDAD DE DESTINO</label>
        <input type="text" class="form-control" name="ciudad_destino"  id="ciudad_destino2" placeholder="ciudad_destino" value="BOGOTA, D.C.">
    </div>

 @php

        $hoy = date("Y-m-d H:i:s");
    //echo $hoy;

 @endphp


<div class="form-group">
        <label for="id">FECHA DE SOLICITUD</label>
        <input type="datetime-local" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="<?php $date = new DateTime();
echo $date->format('Y-m-d\TH:i'); ?>" >
    </div>



<div class="form-group">
        <label for="id">FECHA INICIO DEL SERVICIO</label>
        <input type="datetime-local" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="fecha_inicio_servicio">
    </div>

<div class="form-group">
        <label for="id">DETALLE DEL SERVICIO</label>
        <textarea cols="71" rows="3" id="detalle_del_servicio" name="detalle_del_servicio"></textarea>
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



  <div class="panel panel-primary">
    <div class="panel-body">

      <!--<a href="{{ $url = route('ordenesdeservicio.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Ordenes de Servicios</a>-->

<?php 

$lastWeek = \Carbon\Carbon::now()->subWeek();  

$ordenesdeservicio2= App\ordenesdeservicio::where('fecha_inicio_servicio','>',$lastWeek)->get();

?>

@foreach($ordenesdeservicio2 as $value)


@if($value->fecha_inicio_servicio > \Carbon\Carbon::now())
    @if (\Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInMinutes() > 0 && \Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffInMinutes() <= 120)

    <div class="alert alert-danger"> 
      <marquee><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alerta!</strong> La siguiente Orden de Trabajo esta a menos DOS HORAS {{$value->No_de_orden_de_servicio}} Servicio {{ \Carbon\Carbon::parse($value->fecha_inicio_servicio)->diffForHumans() }} !Alerta!</marquee>
    </div>
 

    @endif
@endif

@endforeach


  <!--<a class="btn bg-maroon btn-flat margin pull-right" data-toggle="modal" href='#modal-2'><i class="fa fa-inbox" ></i> Crear W.O</a>-->
  <div class="modal fade" id="modal-2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Crear WO new</h4>
        </div>
        <div class="modal-body">

          <marquee>hola</marquee>

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

    </div>
  </div>



<p>

<div class="table-responsive">
<table class="table table-bordered" id="table2" >
  <thead>
    <tr>
      <td>  ID  </td>
      <td>  FECHA DE SOLICTUD</td>
      <td>  ESTADO DE SERVICIO</td>
      <td>  W.O</td>
      <td>  FECHA INICIO DE SERVICIO</td>
      <td>  CLIENTES</td>
      <td>  CIUDAD DESTINO</td>
      <td>  DETALLE DEL SERVICIO</td>
      <td>  ESTADO DE FACTURACIÓN </td>
      <td colspan="4">  ACCIONES </td>



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

            @elseif ($row->estadoservicio_id==6 )
            <span class="label label-danger"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> <i class="fa fa-check" aria-hidden="true"></i></span> </td>
            @elseif ($row->estadoservicio_id==7 )
            <span class="label label-warning"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> <i class="fa fa-ban" aria-hidden="true"></i></span> </td>
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
          <?php  ?>
          <td >{{$row->fecha_inicio_servicio}}

         @if ($row->fecha_inicio_servicio < \Carbon\Carbon::now())
         <font color="blue">Servicio {{ \Carbon\Carbon::parse($row->fecha_inicio_servicio)->diffForHumans() }} </font>
         @else

         <font color="red"><b>Servicio {{ \Carbon\Carbon::parse($row->fecha_inicio_servicio)->diffForHumans() }} </b></font>

         @endif
    
          </td>

          <td><?php $clientes= App\cliente::find($row->cliente); echo $clientes->nombre;  ?></td>
          <!-- <td>{{$row->cliente}}</td> -->
          <td>{{$row->ciudad_destino}}</td>
          <td>{{str_limit($row->detalle_del_servicio,10)}}</td>
          <td>
            @if ($row->estado_facturacion == null)
            <span class="label label-default">POR FACTURAR </span>
            @endif

            @if ($row->estado_facturacion == 1)
            <span class="label label-info">REVISIÓN </span>
            @endif

            @if ($row->estado_facturacion == 2)
            <span class="label label-danger">DEVOLUCIÓN </span>
            @endif

            @if ($row->estado_facturacion == 3)
            <span class="label label-primary">PREFACTURACIÓN </span>
            @endif

            @if ($row->estado_facturacion == 4)
            <span class="label label-danger">DEVOLUCIÓN PREFACTURACIÓN </span>
            @endif

            @if ($row->estado_facturacion == 5)
            <span class="label label-success">FACTURADO <i class="fa fa-check" aria-hidden="true"></i></span>
            @endif

            @if ($row->estado_facturacion == 6)
            <span class="label label-default">NO FACTURADO </span>
            @endif
    
          </td>
          @if(Auth::user()->type != 3)
        <td ><a href="{{ $url = route('ordenesdeservicio.edit',$row->id) }}" data-tarifaestandar ="{{$row->id_tarifa_estandar}}" data-horaadicional="{{$row->id_hora_adicional}}" class="btn btn-success programar" title="Programar" onclick="return confirm('Va a ingresar a programar.');" ><i class="fa fa-pencil" aria-hidden="true"> Programar</i></a><br><br>
          <a href="{{ $url = route('continuar',$row->id) }}" class="btn btn-info" title="Continuar" onclick="return confirm('Desea duplicar el registro actual?')"><i class="fa fa-clipboard" aria-hidden="true"></i> Continuar</a><br><br>
          @endif
         @if(Auth::user()->type == 1 || Auth::user()->type == 2)
          @include('ordenesdeservicio.destroy')
           @endif
           
        
          <a href="{{route('creardocumento',$row->id) }}" title="Imprimir" class=" btn btn-default"><i aria-hidden="true" class="fa fa- fa-print"> Imprimir  </i></a>

                    {{-- <a href="{{route('escaner.show',$row->id) }}" title="Escaneado" class=" btn btn-primary" target="_blank"><i aria-hidden="true" class="fa  fa-file-archive-o" > Escaneado </i></a>                  --}}
         
          @php
              $data = \App\escaner::where('id_wo',$row->No_de_orden_de_servicio)->get();
          @endphp
          <br><br>
             @if ($data == "[]")
                 <a href="{{route('escaner.show',$row->No_de_orden_de_servicio) }}" title="Escaneado" target="_blank" class=" btn btn-primary" ><i aria-hidden="true" class="fa  fa-file-archive-o" > Falta  Escanear </i></a>                 
             @else
              <a href="{{route('escaner.edit',$row->No_de_orden_de_servicio) }}" title="Escaneado" target="_blank" class=" btn btn-primary"><i aria-hidden="true" class="fa  fa-file-archive-o" > Escaneado <i class="fa fa-check"></i> </i></a>                 

             @endif   

        </td >

          
             
          

    </tr>

  </tbody>

  @endforeach


</table>
</div>

<center>{{$index->appends($_GET)->links() }}</center>

</div>

</div>
</div>


@endsection
