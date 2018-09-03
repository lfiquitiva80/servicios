@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


{!! Form::open(['route' => ['Vehiculo.update', $Vehiculo->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true,'id'=>'reg_form6']) !!}

  <legend>EDITAR   VEHICULO</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">

@if($Vehiculo->foto == null)

<div class="form-group">
  <div class="col-xs-4">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">

    <img src="{{ asset('img/car.png')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>
<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@if($Vehiculo->foto == 'car.png')

<div class="form-group">
  <div class="col-xs-5">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">

    <img src="{{ asset('img/car.png')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@if($Vehiculo->foto != 'car.png' )
@if($Vehiculo->foto != null)

<div class="form-group">
  <div class="col-xs-5">
    <img src="{{asset($Vehiculo->foto)}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@endif
<div class="col-xs-5">
  <div class="form-group">
    <label for="id">Placa</label>
    {!! Form::text('placa', $Vehiculo->placa,['class' => 'form-control', 'placeholder' => 'Placa','name'=>'placa']) !!}
  </div>


    <div class="form-group">
            <label for="id">Rentadora</label>
            {!! Form::text('rentadora', $Vehiculo->rentadora,['class' => 'form-control', 'placeholder' => 'Rentadora','name'=>'rentadora']) !!}

        </div>
  <div class="form-group">
                <label for="id">Tipo de renta</label>
                {!! Form::text('tipo_de_renta',$Vehiculo->tipo_de_renta ,['class' => 'form-control', 'placeholder' => 'Tipo_de_renta','name'=>'tipo_de_renta']) !!}

            </div>
            <div class="form-group">
                          <label for="id">Descripción</label>
                          {!! Form::text('descripcion',$Vehiculo->descripcion,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion']) !!}

                      </div>
          <div class="form-group">
                    <label for="id">Armadura</label>
                     {!! Form::text('armadura',$Vehiculo->armadura,['class' => 'form-control', 'placeholder' => 'Armadura','name'=>'armadura']) !!}
                      </div>
        <div class="form-group">
                  <label for="id">Color</label>
                     {!! Form::text('color',$Vehiculo->color,['class' => 'form-control', 'placeholder' => 'Color','name'=>'color']) !!}
                    </div>
  <div class="form-group">
                        <label for="id">Activo</label>
                        {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],$Vehiculo->activo,['class'=> 'form-control','name'=>'activo'] )!!}
            </div>

            <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>

  </center><p>
      </div>
        </div>
      {!! Form::close() !!}


      @endsection
