@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'Clientes.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="nombre" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE CLIENTES</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_cliente'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Cliente</a>

  @include('cliente.create')

  @include('cliente.edit')


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
      <td>  Nit  </td>
      <td>  Nombre</td>
      <td>  Solicitante</td>
      <td>  Activo</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($Cliente as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->nit}}</td>
          <td>{{$row->nombre}}</td>
          <td>{{$row->solicitante}}</td>
          <td>{{$row->activo}}</td>


          <td><a    data-toggle="modal" data-target="#editar_cliente"   data-name="{{$row->nombre}}"  data-solicitante="{{$row->solicitante}}"  data-activo ="{{$row->activo}}" data-email="{{$row->email}}" data-notas ="{{$row->notas}}" data-telefono ="{{$row->telefono}}" data-coordinador="{{$row->coordinador}}" data-id="{{$row->id}}" data-nit="{{$row->nit}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('cliente.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $Cliente->links() }}</center>

</div>

</div>
</div>



@endsection
