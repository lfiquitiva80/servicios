@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">

<div class="panel panel-default">
<h4><b><center>REGISTROS CONTROL DE HORARIOS</h4></b></center>
<!-- <a class="btn btn-info" data-toggle="modal" href='#crear_controlhorario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro Horario Escoltas Disponibles</a> -->

  

<center> <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">

       
<!-- 
        <a href="{{url('excelcontrolhorario')}}" class="btn btn-success"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel xlsx</a>  -->




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
      <td>  Observación</td>
     <!--  <td>  Acción </td> -->



    </tr>
  </thead>
  <tbody>

  @foreach($controlhorario as $row)
    <tr>

          <td>{{$row->id}}</td>
          <td>{{$row->escoltas->nombre}}</td>
          <td>{{$row->estadoscontrolhorarios->estadocontrol}}</td>
          <td>{{$row->Fecha_Registro}}</td>
          <td>{{$row->wo_id}}</td>
          <td>{{$row->Hora_inicio_en_OT}}</td>
          <td>{{$row->Hora_Final_en_OT}}</td>
          <td style="color: blue">{{$row->Horas_Total_OT}}</td>
          <td>{{$row->Hora_de_inicio_Servicio_cliente}}</td>
          <td >{{$row->Hora_Final_del_Servicio_Cliente}}</td>
          <td style="color: red">{{$row->Total_Horas_del_Servicio}}</td>
          <td>{{$row->Observacion}}</td>
          


         <!--  <td><a    data-toggle="modal" data-target="#editarcontrolhorario"   data-escolta_id="{{$row->escolta_id}}"  data-Fecha_Registro="{{$row->Fecha_Registro}}"  data-Hora_inicio_en_OT ="{{$row->Hora_inicio_en_OT}}" data-Hora_Final_en_OT="{{$row->Hora_Final_en_OT}}" data-Horas_Total_OT="{{$row->Horas_Total_OT}}" data-Observacion ="{{$row->Observacion}}" data-id="{{$row->id}}"  data-estadocontrol="{{$row->estadocontrol}}" data-Hora_de_inicio_Servicio_cliente="{{$row->Hora_de_inicio_Servicio_cliente}}" data-Hora_Final_del_Servicio_Cliente="{{$row->Hora_Final_del_Servicio_Cliente}}"
          data-wo_id="{{$row->wo_id}}"  data-Total_Horas_del_Servicio="{{$row->Total_Horas_del_Servicio}}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('controlhorario.destroy')</td> -->

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
