@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'usuario.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="name" id="nombre">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE USUARIOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_usuario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Usuario</a>

  @include('usuario.create')

   @include('usuario.edit')


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
      <td>  Nombre</td>
      <td>  email</td>
      <td>  Activo</td>
      <td>  Rol</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($usuario as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>{{$row->activo}}</td>
          <td>@switch($row->type)
    @case(0)
        Usuario Estándar
        @break

    @case(1)
        Administrador
        @break
    @case(2)
        Supra-Administrador
        @break    
    @default
        Usuario Consulta
@endswitch</td>


          <td><a    data-toggle="modal" data-target="#editar_usuario"   data-name="{{$row->name}}"   data-activo ="{{$row->activo}}" data-email="{{$row->email}}"  data-id="{{$row->id}}" data-type="{{$row->type}}"data-password="{{$row->password}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> 
          @if(Auth::user()->id == 4 || Auth::user()->id == 1)
          <td>@include('usuario.destroy')</td>
          @endif

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $usuario->links() }}</center>

</div>

</div>
</div>



@endsection
