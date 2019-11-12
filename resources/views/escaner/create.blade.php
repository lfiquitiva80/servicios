@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="panel panel-default">
   <div class="modal fade" id="create_escaner">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Subir Documento</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'escaner.store', 'method'=>'POST','files' => true ,'enctype'=>'multipart/form-data','id'=>'CreateEscaner']) !!}

                   {{ csrf_field() }}
                     <div class="form-group">
                        <label for="id">W.O</label>
                        {!! Form::text('',$id,['class'=> 'form-control','disabled'] )!!}
                        {!! Form::hidden('id_wo',$id,['class'=> 'form-control'] )!!}

                    </div>
      
                     <div class="form-group">
                        <label  class="control-label" for="id"></label>
                        <input type="file" class="filestyle" data-buttonName="btn-primary" data-buttonText=" ARCHIVO" data-placeholder="SUBIR PDF" name="ubicacion_archivo">


                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
</div>
  <script>
  $(document).ready(function() {
       $('#create_escaner').modal({
        backdrop: 'static', 
       keyboard: false
       });
    });
  </script>
  @endsection
<br style="display: none">