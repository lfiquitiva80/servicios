@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Reportes en Excel Generales</h3>
    </div>
    <div class="panel-body">






<a  class="btn btn-large btn-block btn-info"  href="{{url('clientesGenerales')}}">Clientes</a>
<a  class="btn btn-large btn-block btn-info"  href="{{url('escoltasGenerales')}}">Escoltas</a>
<a  class="btn btn-large btn-block btn-info"  href="{{url('vehiculosGenerales')}}">Vehículos</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('rentadorasGenerales')}}">Rentadoras</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('ordenesgenerales')}}">Ordenes de Servicio</a>
<a  class="btn btn-large btn-block btn-info" href="{{url('excelwogenerales')}}">Ordenes de Trabajo W.O</a>



</div>
</div>





<div class="btn-toolbar">
          <div class="btn-group"></div>
          <div class="btn-group"></div>
          <div class="btn-group"></div>
        </div>

 <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Reportes Detallados</h3>
                  </div>
                  <div class="panel-body">

                </div>





@endsection
