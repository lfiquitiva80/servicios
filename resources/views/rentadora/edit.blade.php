<div class="modal fade" id="editar_rentadora">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">



<form class="" action="{{route('Rentadora.update', 'id' )}}"   method="post" id="reg_form5">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">
<div class="form-group">
        <label for="id">Nombre</label>
        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','id' => 'nombre','name'=>'nombre']) !!}
    </div>
    <div class="form-group">
            <label for="id">Contacto	</label>
            {!! Form::text('contacto', null,['class' => 'form-control', 'placeholder' => 'Contacto','id'=>'contacto','name'=>'contacto']) !!}
        </div>
        <div class="form-group">
                <label for="id">Teléfono</label>
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','id' => 'telefono','name'=>'telefono']) !!}

            </div>
      <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','id' => 'email','name'=>'email']) !!}

                </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>


  </div>
</div>

</div>
</div>
