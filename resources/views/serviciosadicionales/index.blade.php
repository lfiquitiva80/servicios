@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert') 



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'servicios_adicionales.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE ORDENES DE SERVICIOS</h4></b></center>


<a href="{{ $url = route('servicios_adicionales.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Ordenes de Servicios</a>


<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

        <a href="{{ route('export.servicios',['type'=>'xls']) }}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xls</a> |

        <a href="{{ route('export.servicios',['type'=>'xlsx']) }}"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> |

        <a href="{{ route('export.servicios',['type'=>'csv']) }}"><i class="fa fa-table" aria-hidden="true"></i> Download CSV</a>



      </div>

   </div> 
</center>

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>id</td>
      <td>nit</td>
      <td>cliente</td>
      <td>lineadenegocios</td>
      <td>ciudad</td>
      <td>detalle</td>
      <td>datos_escolta</td>
      <td>propuesta</td>
      <td>prefactura</td>
      <td>fecha_prefactura</td>
      <td>horario</td>
      <td>fecha_de_servicio</td>
      <td>cantidad</td>
      <td>valor_unitario</td>
      <td>valor_total_servicio</td>
      <td>orden_de_servicio_id</td>
      <td>fecha_factura</td>
      <td>factura</td>
      <td>estado_de_facturacion</td>
      <td>valor_facturado</td>
      <td>responsable</td>
      <td>observaciones</td>
      <td>estado_final</td>
      <td>usuario</td>

      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->nit}}</td>
          <td>{{$row->cliente}}</td>
          <td>{{$row->lineadenegocios}}</td>
          <td>{{$row->ciudad}}</td>
          <td>{{$row->detalle}}</td>
          <td>{{$row->datos_escolta}}</td>
          <td>{{$row->propuesta}}</td>
          <td>{{$row->prefactura}}</td>
          <td>{{$row->fecha_prefactura}}</td>
          <td>{{$row->horario}}</td>
          <td>{{$row->fecha_de_servicio}}</td>
          <td>{{$row->cantidad}}</td>
          <td>{{$row->valor_unitario}}</td>
          <td>{{$row->valor_total_servicio}}</td>
          <td>{{$row->orden_de_servicio_id}}</td>
          <td>{{$row->fecha_factura}}</td>
          <td>{{$row->factura}}</td>
          <td>{{$row->estado_de_facturacion}}</td>
          <td>{{$row->valor_facturado}}</td>
          <td>{{$row->responsable}}</td>
          <td>{{$row->observaciones}}</td>
          <td>{{$row->estado_final}}</td>
          <td>{{$row->usuario}}</td>

        
          
          
          <td><a href="{{ $url = route('servicios_adicionales.edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('serviciosadicionales.destroy')</td>

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
