
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


        {!! Form::open(['route' => 'Escolta.store', 'method'=>'POST','files'  => true ,'enctype'=>'multipart/form-data','id'=>'reg_form']) !!}

  <legend>CREAR   ESCOLTA</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">





<div class="form-group">
  <div class="col-xs-5">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">

    <img src="{{ asset('img/default.jpg')}}" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('foto')!!}
</div>
</div>

<div class="col-xs-5">
<div class="form-group" >
  <label  for="id">Nombre</label>
  {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'nombre']) !!}
</div>


<div class="form-group">
      <label  for="id">Cédula de Ciudadanía</label>
      {!! Form::number('cc', null,['class' => 'form-control', 'placeholder' => 'Cédula de Ciudadanía','name'=>'cc']) !!}
  </div>


  <div class="form-group">
      <label  for="id">Teléfono</label>
          {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono']) !!}
      </div>
<div class="form-group">
              <label  for="id">Cargo</label>
              {!! Form::text('cargo', null,['class' => 'form-control', 'placeholder' => 'Cargo','name'=>'Cargo','name'=>'cargo']) !!}

          </div>
<div class="form-group">
                      <label for="id">Activo</label>
                      {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],null,['class'=> 'form-control','name'=>'activo'] )!!}
          </div>
<div class="form-group">
                          <label for="id">Ciudad</label>
                          {!! Form::text('ciudad', null,['class' => 'form-control', 'placeholder' => 'ciudad','name'=>'ciudad','name'=>'ciudad']) !!}
                      </div>
  <div class="form-group">
                          <label for="id">Bilingüe</label>
                                        {!! Form::select('bilingue',[ ''=>'SELECCIONE','si'=>'SI', 'no' =>'NO'],null,['class'=> 'form-control','name'=>'bilingue'])!!}
                                    </div>
                                    <div class="form-group">
                                          <label for="id">Escolta Externo</label>
                                                       {!! Form::select('escolta_externo',[ ''=>'SELECCIONE','si'=>'SI', 'no' =>'NO'],null,['class'=> 'form-control','name'=>'escolta_externo'] )!!}
                                            </div>

          <center><button type="submit" class="btn btn-info pull-right" >CREAR</button>

</center><p>
    </div>
      </div>
    {!! Form::close() !!}
    @endsection
