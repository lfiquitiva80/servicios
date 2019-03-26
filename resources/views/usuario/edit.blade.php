<div class="modal fade" id="editar_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">



<form class="" action="{{route('usuario.update', 'id' )}}"   method="post" id="reg_form8">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">

<div class="form-group">
        <label for="id">Nombre</label>
        {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name','id'=>'name']) !!}
    </div>

    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="id">Email</label>
                  <input type="email" class="form-control" name="email"value="{{ old('email') }}" required placeholder="Email" autofocus  id="email">

                 @if ($errors->has('email'))
                  <span  id="email"class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true">  </span>
                  <span class="help-block">
                      <strong> el email ya existe. </strong>
                  </span>
                  @else
                  @endif

              </div>
      <div class="form-group">
                        <label for="id">Contraseña </label>
                        <input  type="password" class="form-control" name="password" placeholder="Contraseña">
</div>

      <div class="form-group">
                            <label for="id">Activo</label>
                            {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo','name'=>'activo'] )!!}
                </div>
                <div class="form-group">
                                      <label for="id">Tipo de usuario</label>
                                      {!! Form::select('type',[ ''=>'SELECCIONE','0'=>'usuario', '1' =>'administrator', '2' =>'Supra-administrator', '3' =>'Consulta'],null,['class'=> 'form-control','id' => 'type','name'=>'type'] )!!}
                          </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>


  </div>
</div>

</div>
</div>
