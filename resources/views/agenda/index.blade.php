@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



  <div class="panel-body">
<center><h3>Escoltas Disponibles</h3> </center>
    <div class="box box-primary">
  <div class="box-body no-padding">
    <!-- THE CALENDAR -->
    <div id="calendar"></div>
  </div>
</div>
<center><h3>Vehiculos Disponibles</h3> </center>
<div class="box box-primary">
<div class="box-body no-padding">
<!-- THE CALENDAR -->
<div id="calendar2"></div>
</div>
</div>
          </div>




  @endsection
