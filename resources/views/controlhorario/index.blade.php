@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'controlhorario.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    {!! Form::select('nombre',$escolta, null , ['class' => 'form-control', 'name' =>'nombre' , 'placeholder' => 'Selecione un escolta...']) !!}
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS CONTROL DE HORARIOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_controlhorario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro Horario Escoltas Disponibles</a>

  @include('controlhorario.create')

  @include('controlhorario.edit')


<!-- <center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.file',['type'=>'xls']) }}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.file',['type'=>'xlsx']) }}"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.file',['type'=>'csv']) }}"><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>



      </div>

   </div>
</center> -->

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Escolta  </td>
      <td>  Estado  </td>
      <td>  Fecha de Registro</td>
      <td>  Hora Inicio</td>
      <td>  Hora Final</td>
      <td>  Observación</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($controlhorario as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->escoltas->nombre}}</td>
          <td>{{$row->estadoscontrolhorarios->estadocontrol}}</td>
          <td>{{$row->Fecha_Registro}}</td>
          <td>{{$row->Hora_inicio_en_OT}}</td>
          <td>{{$row->Hora_Final_en_OT}}</td>
          <td>{{$row->Observacion}}</td>
          


          <td><a    data-toggle="modal" data-target="#editarcontrolhorario"   data-escolta_id="{{$row->escolta_id}}"  data-Fecha_Registro="{{$row->Fecha_Registro}}"  data-Hora_inicio_en_OT ="{{$row->Hora_inicio_en_OT}}" data-Hora_Final_en_OT="{{$row->Hora_Final_en_OT}}" data-Observacion ="{{$row->Observacion}}" data-id="{{$row->id}}"  data-estadocontrol="{{$row->estadocontrol}}"  class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('controlhorario.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $controlhorario->links() }}</center>

</div>

</div>
</div>






@endsection
