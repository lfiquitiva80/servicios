@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'Vehiculo.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="placa" id="placa">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">

<h4><b><center>REGISTROS DE VEHICULOS</h4></b></center>
<a class="btn btn-info"  href="{{ route('Vehiculo.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Vehiculo</a>


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
      <td>  Rentadora</td>
      <td>Foto</td>
      <td>  Placa</td>
      <td>  Activo</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($Vehiculo as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->rentadora}}</td>
          <td>@if ($row->foto == 'car.png')
            <img  src="{{ asset('img/car.png')}}"  style="width:50px; height:50px;  border-radius:50%">
            @else
            <img src="{{asset($row->foto)}}"  style="width:50px; height:50px;  border-radius:50%">
            @endif
          </td>
          <td>{{$row->placa}}</td>
          <td>{{$row->activo}}</td>



          <td><a  href="{{ route('Vehiculo.edit',$row->id) }}"   class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('vehiculo.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $Vehiculo->links() }}</center>

</div>

</div>
</div>



@endsection
