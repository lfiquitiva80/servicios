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
    <i class="fa fa-calendar-o" aria-hidden="true"></i> Fecha Inicial: <input type="text"  placeholder="Digite  Año-Mes-dia" class="form-control buscador"  name="fechahorario" required /><i class="fa fa-calendar-o" aria-hidden="true"></i>

    Fecha Final:  <input type="text"  placeholder="Digite  Año-Mes-dia" class="form-control buscador"  name="fechahorariofinal" required />


   
    {!! Form::select('nombre',$escolta, null , ['class' => 'form-control', 'name' =>'nombre' , 'placeholder' => 'Selecione un escolta...']) !!}
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS CONTROL DE HORARIOS</h4></b></center>


  @include('controlhorario.create')

  @include('controlhorario.edit')


<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

       
        <a class="btn btn-info" data-toggle="modal" href='#crear_controlhorario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro Horario Escoltas Disponibles</a>
        <!-- <a href="{{url('excelcontrolhorario')}}" class="btn btn-success"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a> -->
        <a href="{{ route('ocupacion') }}" class="btn btn-danger pull-right"><i class="fa fa-tachometer" aria-hidden="true"></i><span> Dashboard Ocupación</span></a>




      </div>

   </div>
</center>

<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Escolta  </td>
      <td>  Estado  </td>
      <td>  Fecha de Registro</td>
      <td>  W.O</td>
      <td style="color: blue">  H.I. OT</td>
      <td style="color: blue">  H.F. OT</td>
      <td style="color: blue">  H.Total. OT</td>
      <td style="color: red">  Hora Inicio Cliente</td>
      <td style="color: red">  Hora Final Cliente</td>
      <td style="color: red">  Hora Total Cliente</td>
      <td> Escolta Relevo</td>
      <td>  Observación</td>
      <td>  Usuario Registro</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($controlhorario as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td> <?php  $var = App\escolta::findOrFail($row->escolta_id); echo $var->nombre; ?> </td>
          <td>{{$row->estadoscontrolhorarios->estadocontrol}}</td>
          <td>{{$row->Fecha_Registro}}</td>
          @if( is_null($row->ordenesdeservicio_id))
          <td>Sin WO</td>
          @else
          <td><a href="{{route('home-principal').'?nombre='.$row->ordenes->No_de_orden_de_servicio}}">{{$row->ordenes->No_de_orden_de_servicio}}</a></td>
          @endif
          <td title="Hora Inicio">{{$row->Hora_inicio_en_OT}}</td>
          <td title="Hora Final OT">{{$row->Hora_Final_en_OT}}</td>
          <td style="color: blue" title="Total Horas OT">{{$row->Horas_Total_OT}}</td>
          <td title="Hora Inicio Cliente">{{$row->Hora_de_inicio_Servicio_cliente}}</td>
          <td title="Hora Final Cliente">{{$row->Hora_Final_del_Servicio_Cliente}}</td>
          <td style="color: red" title="Hora Total Cliente">{{$row->Total_Horas_del_Servicio}}</td>
         <td> <?php  $var2 = App\escolta::findOrFail($row->EscRelevo_id); echo $var2->nombre; ?> </td>
          <td>{{$row->Observacion}}</td>
          <td>{{$row->usuarios->name}} <strong>Creado: </strong> {{$row->created_at}}</td>
          


          <td><a    data-toggle="modal" data-target="#editarcontrolhorario"   data-escolta_id="{{$row->escolta_id}}"  data-Fecha_Registro="{{$row->Fecha_Registro}}" data-EscRelevo_id="{{$row->EscRelevo_id}}" data-Hora_inicio_en_OT ="{{$row->Hora_inicio_en_OT}}" data-Hora_Final_en_OT="{{$row->Hora_Final_en_OT}}" data-Horas_Total_OT="{{$row->Horas_Total_OT}}" data-Observacion ="{{$row->Observacion}}" data-id="{{$row->id}}"  data-estadocontrol="{{$row->estadocontrol}}" data-Hora_de_inicio_Servicio_cliente="{{$row->Hora_de_inicio_Servicio_cliente}}" data-Hora_Final_del_Servicio_Cliente="{{$row->Hora_Final_del_Servicio_Cliente}}"
          data-wo_id="{{$row->wo_id}}"  data-Total_Horas_del_Servicio="{{$row->Total_Horas_del_Servicio}}" data-ordenesdeservicio_id="{{$row->ordenesdeservicio_id}}" data-serviciofijo="{{$row->servicioFijo}}" data-id_usuario="{{$row->id_usuario}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('controlhorario.destroy')</td>


    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $controlhorario->appends($_GET)->links() }}</center>

</div>

</div>
</div>






@endsection
