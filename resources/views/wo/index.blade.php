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


      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr>

                     <td>{{$row->id}}</td>
                     <td>{{$row->descripcion_wo}}</td>
                     
          
          
          <td><a href="{{ $url = route('wo.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td>
          @if(Auth::user()->id == 4 || Auth::user()->id == 1)
           <td>@include('wo.destroy')</td>
           @endif

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
