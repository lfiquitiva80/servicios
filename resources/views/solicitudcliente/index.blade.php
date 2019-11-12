@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'solicitudcliente.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>SERVICIOS SOLICITADOS POR EL CLIENTE PROTECCION EJECUTIVA</h4></b></center>


<a class="btn btn-info" data-toggle="modal" href="{{route('solicitudserviciocliente')}}"> <i class="fa fa-plus" aria-hidden="true"></i> Nueva Solicitud</a>
<div class="modal fade" id="modal-solicitud">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'solicitudcliente.store', 'method'=>'POST','id'=>'reg_form19']) !!}
    <legend>SOLICITUD SERVICIO ADICIONAL</legend>


    <div class="form-group">
      
        <input type="hidden" class="form-control" name="id"  id="id" placeholder="Id" readonly="readonly">
        <input type="hidden" class="form-control" name="estadoservicio_id"  id="id" placeholder="Id" readonly="readonly" value="1">
    </div>




<div class="form-group">
        <label for="id">Seleccione su empresa (*)</label>
        {!! Form::select('cliente',$cliente, null, ['class' => 'form-control','name'=>'cliente','required','placeholder' => 'Seleccione su Empresa']) !!}
    </div>

    <div class="form-group">
        <label for="id">Digite el Nombre y Apellidos que realiza la solicitud (*)</label>
        <input type="text" class="form-control" name="solicitante_interno2"  id="solicitante_interno2" placeholder="Digite el Nombre y Apellidos que realiza la solicitud" required>
</div>

    {{-- <div class="form-group">
        <label for="id">fecha_inicio_servicio</label>
        <input type="date" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="Número orden de sercivios">
    </div> --}}


<div class="form-group">
        <label for="id">Digite la Ciudad de Destino (*)</label>
        <input type="text" class="form-control" name="ciudad_destino"  id="ciudad_destino3" placeholder="ciudad_destino" value="BOGOTA, D.C." required>
    </div>

 @php

        $hoy = date("Y-m-d H:i:s");
    //echo $hoy;

 @endphp


<div class="form-group">
        
        <input type="hidden" class="form-control" name="fecha_solicitud"  id="fecha_solicitud" placeholder="fecha_solicitud" value="<?php $date = new DateTime();
echo $date->format('Y-m-d\TH:i'); ?>" >
    </div>



<div class="form-group">
        <label for="id">Seleccione la Fecha y Hora que necesita el servicio</label>
        <input type="datetime-local" class="form-control" name="fecha_inicio_servicio"  id="fecha_inicio_servicio" placeholder="fecha_inicio_servicio" value="<?php $date = new DateTime();
echo $date->format('Y-m-d\TH:i'); ?>">
    </div>

<div class="form-group">

     <label for="id">Detalle solicitud del servicio</label>
        <textarea cols="75" rows="3" id="detalle_del_servicio" name="detalle_del_servicio" placeholder="Colocar el detalle que necesita, para su servicio" required class="form-control"></textarea>
    </div>

<input type="hidden" class="form-control" name="users_id"  id="users_id" placeholder=""
value="{{Auth::user()->id}}">


 
    <button type="submit" class="btn btn-large btn-block btn-primary">Enviar Solicitud a Omnitempus</button>  
    

    {!! Form::close() !!}
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


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
<table class="table table-condensed" >
  <thead>
    <tr>
   <!--  <td>  id  </td>
      <td>  fecha_solicitud</td>
      <td>  Estado del Servicio</td>
      <td>  Orden de Trabajo</td>
      <td>  Fecha Inicio del Servicio</td>
      <td>  Cliente </td>
      <td>  Ciudad destino</td>
      <td>  Detalle del Servicio</td>
      <td colspan="2">  Acción </td> -->



    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
   

    <tr >

          <td>{{$row->id}} 
          
        
           <p>
            

             
         
          <td >



            @if ($row->estadoservicio_id==1 )
            <span class="label label-success"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span> 

            @elseif ($row->estadoservicio_id==6 )
            <span class="label label-danger"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> <i class="fa fa-check" aria-hidden="true"></i></span> <tr></tr>
            @elseif ($row->estadoservicio_id==7 )
            <span class="label label-warning"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> <i class="fa fa-ban" aria-hidden="true"></i></span>  
            @else
            <span class="label label-primary"><?php $var = App\estadoservicio::find($row->estadoservicio_id); echo $var->estadoservicio; ?> </span> 
            
            @endif

            &nbsp;&nbsp;
            @if ($row->No_de_orden_de_servicio==1)
              Falta asignar W.O
            @else
            <span class="label label-primary"><strong>Orden de trabajo: </strong>
              {{$row->No_de_orden_de_servicio}}</span>
            @endif

            <span class="label label-success pull-right"> <i class="fa fa-calendar" aria-hidden="true"></i> Fecha de Solicitud:  {{$row->fecha_solicitud}} </span>

            <br>
            <strong> <i class="fa fa-calendar" aria-hidden="true"></i> Fecha de Servicio:</strong>{{$row->fecha_inicio_servicio}}

       
              

           <strong><i class="fa fa-industry" aria-hidden="true"></i> Cliente: </strong><?php $clientes= App\cliente::find($row->cliente); echo $clientes->nombre;  ?> 
          <!-- <td>{{$row->cliente}}</td> -->
           <i class="fa fa-map-marker" aria-hidden="true"></i> {{$row->ciudad_destino}} 
           <div>
           <strong>Detalle del Servicio:</strong><br> 
           <textarea cols="150" rows="5" >{{$row->detalle_del_servicio}} </textarea></p>
            </div>

              @if ($row->fecha_inicio_servicio < \Carbon\Carbon::now())
         <font color="blue">Servicio {{ \Carbon\Carbon::parse($row->fecha_inicio_servicio)->diffForHumans() }} </font>
         @else

         <font color="red"><b>Servicio {{ \Carbon\Carbon::parse($row->fecha_inicio_servicio)->diffForHumans() }} </b></font>

         @endif

             @if(Auth::user()->type == 1 || Auth::user()->type == 2)
           @include('solicitudcliente.destroy') 
          @endif

          &nbsp;&nbsp;
           @if ($row->estadoservicio_id==2 )

           <a href="{{ $url = route('solicitudcliente.edit',$row->id) }}" class="btn btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>
           @elseif(Auth::user()->type == 1) 

            <a href="{{ $url = route('solicitudcliente.edit',$row->id) }}" class="btn btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>

           @endif


          
         

   
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $index->links() }}</center>

</div>

</div>
</div>



@endsection
