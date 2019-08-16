
<div class="modal fade" id="editar_cliente">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">ACTUALIZAR</h4>
        </div>
        <div class="modal-body">



<form class="" action="{{route('Clientes.update', 'id' )}}"   method="post" id="reg_form3">

{{method_field('patch')}}
{{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">


<div class="form-group">
    <label for="id">Nit</label>
    {!! Form::text('nit', null,['class' => 'form-control', 'placeholder' => 'Nit','id' => 'nit','name'=>'nit']) !!}
</div>

<div class="form-group">
    <label for="id">Nombre</label>
    {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','id' => 'nombre','name'=>'nombre']) !!}
</div>
<div class="form-group">
        <label for="id">Solicitante</label>
        {!! Form::text('solicitante', null,['class' => 'form-control', 'placeholder' => 'Solicitante','id' => 'solicitante','name'=>'solicitante']) !!}
    </div>
    <div class="form-group">
            <label for="id">Teléfono</label>
            {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','id' => 'telefono','name'=>'telefono']) !!}

        </div>
  <div class="form-group">
                <label for="id">Email</label>
                {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','id' => 'email','name'=>'email']) !!}

 </div>
  <div class="form-group">
                    <label for="id">Notas</label>
                    {!! Form::text('notas', null,['class' => 'form-control', 'placeholder' => 'Notas' ,'id' => 'notas','name'=>'notas']) !!}
                </div>
  <div class="form-group">
                        <label for="id">Activo</label>
                        {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo'] )!!}
            </div>
  <div class="form-group">
                            <label for="id">Coordinador</label>
                            {!! Form::text('coordinador', null,['class' => 'form-control', 'placeholder' => 'Coordinador','id' => 'coordinador','name'=>'coordinador']) !!}
                        </div>

<center><button type="submit" class="btn btn-primary" >Enviar</button>
<button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>


</div>
</div>

</div>
</div>
