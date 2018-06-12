@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert') 



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'wo.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE ORDENES DE TRABAJO</h4></b></center>




<a href="{{ $url = route('wo.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Ordenes de Servicios</a>

<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}"><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>



      </div>

   </div> 
</center>

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
<td>id</td>
<td>descripcion_wo</td>
<td>ingresar_solicitud</td>
<td>fecha_ingresar_solicitud</td>
<td>usuario_ingresar_solicitud</td>
<td>programacion</td>
<td>fecha_programacion</td>
<td>usuario_programacion</td>
<td>respuesta_cliente</td>
<td>fecha_respuesta_cliente</td>
<td>usuario_respuesta_cliente</td>
<td>contratacion_personal</td>
<td>fecha_contratacion_personal</td>
<td>usuario_contratacion_personal</td>
<td>contratacion_vehiculo</td>
<td>fecha_contratacion_vehiculo</td>
<td>usuario_contratacion_vehiculo</td>
<td>giro_anticipo</td>
<td>fecha_giro_anticipo</td>
<td>usuario_giro_anticipo</td>
<td>noticificacion_agencia</td>
<td>fecha_notificacion_agencia</td>
<td>usuario_notificacion_agenda</td>
<td>impresion_orden</td>
<td>fecha_impresion_orden</td>
<td>usuario_impresion_orden</td>
<td>instructivo_escolta</td>
<td>fecha_instructivo_escolta</td>
<td>usuario_instructivo_escolta</td>
<td>aviso_terminacion_personal</td>
<td>fecha_aviso_terminacion_personal</td>
<td>usuario_aviso_terminacion_personal</td>
<td>entrega_vehiculo</td>
<td>fecha_entrega_vehiculo</td>
<td>usuario_entrega_vehiculo</td>
<td>finalizado</td>
<td>fecha_finalizado</td>
<td>_method</td>
<td>_token</td>
<td>created_at</td>
<td>updated_at</td>

      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr>

                     <td>{{$row->id}}</td>
                     <td>{{$row->descripcion_wo}}</td>
                     <td>{{$row->ingresar_solicitud}}</td>
                     <td>{{$row->fecha_ingresar_solicitud}}</td>
                     <td>{{$row->usuario_ingresar_solicitud}}</td>
                     <td>{{$row->programacion}}</td>
                     <td>{{$row->fecha_programacion}}</td>
                     <td>{{$row->usuario_programacion}}</td>
                     <td>{{$row->respuesta_cliente}}</td>
                     <td>{{$row->fecha_respuesta_cliente}}</td>
                     <td>{{$row->usuario_respuesta_cliente}}</td>
                     <td>{{$row->contratacion_personal}}</td>
                     <td>{{$row->fecha_contratacion_personal}}</td>
                     <td>{{$row->usuario_contratacion_personal}}</td>
                     <td>{{$row->contratacion_vehiculo}}</td>
                     <td>{{$row->fecha_contratacion_vehiculo}}</td>
                     <td>{{$row->usuario_contratacion_vehiculo}}</td>
                     <td>{{$row->giro_anticipo}}</td>
                     <td>{{$row->fecha_giro_anticipo}}</td>
                     <td>{{$row->usuario_giro_anticipo}}</td>
                     <td>{{$row->noticificacion_agencia}}</td>
                     <td>{{$row->fecha_notificacion_agencia}}</td>
                     <td>{{$row->usuario_notificacion_agenda}}</td>
                     <td>{{$row->impresion_orden}}</td>
                     <td>{{$row->fecha_impresion_orden}}</td>
                     <td>{{$row->usuario_impresion_orden}}</td>
                     <td>{{$row->instructivo_escolta}}</td>
                     <td>{{$row->fecha_instructivo_escolta}}</td>
                     <td>{{$row->usuario_instructivo_escolta}}</td>
                     <td>{{$row->aviso_terminacion_personal}}</td>
                     <td>{{$row->fecha_aviso_terminacion_personal}}</td>
                     <td>{{$row->usuario_aviso_terminacion_personal}}</td>
                     <td>{{$row->entrega_vehiculo}}</td>
                     <td>{{$row->fecha_entrega_vehiculo}}</td>
                     <td>{{$row->usuario_entrega_vehiculo}}</td>
                     <td>{{$row->finalizado}}</td>
                     <td>{{$row->fecha_finalizado}}</td>
                     <td>{{$row->_method}}</td>
                     <td>{{$row->_token}}</td>
                     <td>{{$row->created_at}}</td>
                     <td>{{$row->updated_at}}</td>

          
          
          <td><a href="{{ $url = route('wo.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('wo.destroy')</td>

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
