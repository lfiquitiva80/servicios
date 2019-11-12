@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
  
@endsection


@section('main-content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')



<div class="panel-body">

     <div class="container">

          <div class="panel panel-default">
               <div class="modal fade" id="Correcciones">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title"> Enviar Correcciones</h4>
                            </div>
                            <div class="modal-body">
                                
                                    {!! Form::open(['route' => 'enviarcorreciones', 'method'=>'GET', 'id'=>'correcciones']) !!}
                                
                                    {{method_field('patch')}}
                                    {{csrf_field()}}
                                     <div class="form-group">
                                        <label for="id">Para</label>
                                        {!! Form::text('email', $email,['class' => 'form-control','disabled','name'=>'email','id'=>'email']) !!}
                                        <input type="hidden"  value="{{$email}}" id="email" name="email">
                                      </div>
                                
                                      <div class="form-group">
                                            <label for="id">TITULO</label>
                                            {!! Form::text('asunto', null,['class' => 'form-control', 'placeholder' => 'Asunto','name'=>'asunto','id'=>'asunto']) !!}
                                         </div>
                                     <div class="form-group">
                                        <label for="id">DESCRIPCIÓN</label>
                                        {!! Form::textarea('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!}
                                     </div>
                                    
                                        <center>
                                        <a href="{{ URL::previous() }}" type="button" class="btn btn-default "data-dismiss="modal" >Salir</a>
                                        <button type="submit" class="btn btn-primary" >Enviar </button>
                                        </center><p>
                                    
                                    {!! Form::close() !!}            
                                </div>
                            </div>
                        </div>
                    </div>
                

          </div>

    </div>
    
 </div>
 
  <script>
      

   $(window).on('load',function(){
        $('#Correcciones').modal({
            backdrop: 'static', 
            keyboard: false
        });
    });
  </script>


@endsection
<br style="display: none">