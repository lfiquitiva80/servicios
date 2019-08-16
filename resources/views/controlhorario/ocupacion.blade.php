@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection



@section('main-content')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<section class="content">

<iframe width="100%" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOTcxOWIxYmYtNzFlMy00OTFhLThhZjQtYThlYzJjOTM3NDg4IiwidCI6IjIwNTk5MzcyLTgzM2ItNGIxYy1iY2QxLTZmN2Y1YjE1ZDhmYSIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
             <!-- Small boxes (Stat box) -->
        <h1>Ocupación de Escoltas por Mes </h1>  {!! Form::open(['route' => 'ocupacion', 'method'=>'GET']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
       <select name="mes" class="form-control">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
  </div>
  <button type="submit" class="btn btn-default">Consultar</button>
{!! Form::close() !!}


                 {!! $chartjs2->render() !!}
                 {!! $chartjs3->render() !!}
                 {!! $chartjs4->render() !!}




            
@endsection
