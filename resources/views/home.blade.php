@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')



 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'home-principal', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="buscar" id="buscar">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE ORDENES DE SERVICIOS</h4></b></center>

<div class="panel panel-default">
    <div class="panel-body">


<a href="{{ $url = route('ordenesdeservicio.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Ordenes de Servicios</a>

<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}" title="Bajar excel en versión 2010 "><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 "> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}" title="archivo separado por comas "><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>




</center>



</div>

<center>

<a class="btn btn-info" data-toggle="modal" href='#modal-id'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Solicitud del Servicio</a>
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
        <input type="hidden" class="form-control input-lg" name="id"  id="id" placeholder="Id" readonly="readonly">
    </div>


    <label>Estado de Servicio</label>
    {!! Form::select('estadoservicio_id',$estadoservicio, null, ['class' => 'form-control input-lg']) !!}



<div class="form-group">
        <label for="id">cliente</label>
        <input type="text" class="form-control input-lg" name="cliente"  id="cliente" placeholder="cliente" required>
    </div>


    {{-- <div class="form-group">
        <label for="id">fecha_inicio_servicio</label>
        <input type="date" class="form-control input-lg" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
    </div> --}}




{{-- <div class="form-group">
        <label for="id">ciudad_origen</label>
        <input type="text" class="form-control input-lg" name="ciudad_origen"  id="ciudad_origen" placeholder="ciudad_origen">
    </div> --}}


<div class="form-group">
        <label for="id">ciudad_destino</label>
        <input type="text" class="form-control input-lg" name="ciudad_destino"  id="ciudad_destino2" placeholder="ciudad_destino">
    </div>

 @php

        $hoy = date("Y-m-d H:i:s");
    //echo $hoy;

 @endphp


<div class="form-group">
        <label for="id">fecha_solicitud</label>
        <input type="datetime-local" class="form-control input-lg" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud">
    </div>

<div class="form-group">
        <label for="id">detalle_del_servicio</label>
        <textarea cols="80" rows="3" id="detalle_del_servicio" name="detalle_del_servicio"></textarea>
    </div>

<input type="hidden" class="form-control input-lg" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
</center>


<p>
<div class="table-responsive ">
<table class="table table-bordered">
  <thead>
    <tr>
      <td>  id  </td>
      <td>  fecha_solicitud</td>
      <td>  Estado del Servicio</td>
      <td>  Ckecklist </td>  
      <td>  Fecha Inicio del Servicio</td>
      <td>  cliente</td>
      <td>  ciudad_destino</td>
      <td>  detalle_del_servicio</td>
      <td colspan="2">  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->fecha_solicitud}}</td>
        <td>
            @if ($row->estadoservicio_id==1 )
            <span class="label label-success"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span></td>
            @else
            <span class="label label-primary"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span></td>

            @endif

          <td><a href="{{ $url = route('wo.edit',$row->No_de_orden_de_servicio) }}" class="btn btn-warning" title="Lista de Chequeo"><i class="fa fa-list-ol" aria-hidden="true"></i></i></a><small> W.O. {{$row->No_de_orden_de_servicio}}</small>

       
            </td> 
  
          <td>{{$row->fecha_inicio_servicio}}</td>
          <td>{{$row->cliente}}</td>
          <td>{{$row->ciudad_destino}}</td>
          <td>{{$row->detalle_del_servicio}}</td>



          <td><a href="{{ $url = route('ordenesdeservicio.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Programar</i></a></td> <td>@include('ordenesdeservicio.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $index->links() }}</center>

</div>

</div>
</div>

<script type="text/javascript">
  
  jQuery(document).ready(function($) {
            $("#ckeck").click(function(event) {
              alert("Aqui va un modal");
            });   
     
  });




</script>


@endsection
