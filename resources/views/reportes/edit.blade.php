@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


{!! Form::open(['route' => ['Escolta.update', $Escolta->id],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

  <legend>EDITAR   ESCOLTA</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">

@if($Escolta->foto === null)

<div class="form-group">
  <div class="col-xs-4">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">

    <img src="{{ asset('img/default.jpg')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>
<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@if($Escolta->foto == 'default.jpg')

<div class="form-group">
  <div class="col-xs-5">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">

    <img src="{{ asset('img/default.jpg')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@if($Escolta->foto != 'default.jpg' )
@if($Escolta->foto != null)

<div class="form-group">
  <div class="col-xs-5">

<img src="{{asset($Escolta->foto)}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">
<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>


@endif
@endif
<div class="col-xs-5">
<div class="form-group">

  <label for="id">Nombre</label>
  {!! Form::text('nombre', $Escolta->nombre,['class' => 'form-control', 'placeholder' => 'Nombre completo']) !!}
</div>
<div class="form-group">
      <label for="id">Cédula de Ciudadanía</label>
      {!! Form::number('cc', $Escolta->cc,['class' => 'form-control', 'placeholder' => 'Cédula de Ciudadanía']) !!}
  </div>

<div class="form-group">
        <label for="id">Teléfono</label>
        {!! Form::text('telefono', $Escolta->telefono,['class' => 'form-control', 'placeholder' => 'Teléfono']) !!}

    </div>
    <div class="form-group">
                  <label for="id">Cargo</label>
                  {!! Form::text('cargo', $Escolta->cargo,['class' => 'form-control', 'placeholder' => 'Cargo']) !!}

              </div>
              <div class="form-group">
                                    <label for="id">Activo</label>
                                    {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],$Escolta->activo,['class'=> 'form-control '] )!!}
                        </div>
              <div class="form-group">
                                        <label for="id">Ciudad</label>
                                        {!! Form::text('ciudad', $Escolta->ciudad,['class' => 'form-control', 'placeholder' => 'ciudad']) !!}
                                    </div>
                <div class="form-group">
                                        <label for="id">Bilingüe</label>
                                                      {!! Form::select('bilingue',[ ''=>'SELECCIONE','si'=>'SI', 'no' =>'NO'],$Escolta->bilingue,['class'=> 'form-control '] )!!}
                                                  </div>

                                                  <div class="form-group">
                                                        <label for="id">Escolta Externo</label>
                                                                     {!! Form::select('escolta_externo',[ ''=>'SELECCIONE','si'=>'SI', 'no' =>'NO'],$Escolta->escolta_externo,['class'=> 'form-control '] )!!}
                                                          </div>
  <center><button type="submit" class="btn btn-info pull-right">Actualizar</button>

  </center><p>
</div>
{!! Form::close() !!}




@endsection
