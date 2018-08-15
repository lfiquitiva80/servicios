<div class="modal fade" id="crear_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR USUARIO</h4>
            </div>
            <div class="modal-body">

<!--  -->


{!! Form::open(['route' => 'usuario.store', 'method'=>'POST','id'=>'reg_form7']) !!}



<div class="form-group">
        <label for="id">Nombre</label>
        {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name']) !!}
    </div>

      <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>
      <div class="form-group">
                        <label for="id">Contraseña </label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
</div>

      <div class="form-group">
                                <label  for="password-confirm">Confirmar Contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">
                            </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
