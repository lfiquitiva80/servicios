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
        <div class="form-group telefono">
                <label for="id">Teléfono</label>
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','id' => 'telefono','name'=>'telefono']) !!}
            </div>
            <div class="form-group telefon_1" style="display:none">
                    <label for="id">Teléfono 2</label>
                    {!! Form::text('telefono_2', null,['class' => 'form-control', 'placeholder' => 'Teléfono','id' => 'telefono_2','name'=>'telefono_2']) !!}
                </div>
                <div class="form-group telefon_1"  style="display:none">
                        <label for="id">Teléfono 3</label>
                        {!! Form::text('telefono_3', null,['class' => 'form-control', 'placeholder' => 'Teléfono','id' => 'telefono_3','name'=>'telefono_3']) !!}
                    </div>
      <div class="form-group email">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','id' => 'email','name'=>'email']) !!}

                </div>
                <div class="form-group email_1" style="display:none">
                              <label for="id">Email 2</label>
                              {!! Form::text('email_1', null,['class' => 'form-control', 'placeholder' => 'Email','id' => 'email_2','name'=>'email_2']) !!}

                          </div>
                          <div class="form-group email_1" style="display:none">
                                        <label for="id">Email 3 </label>
                                        {!! Form::text('email_2', null,['class' => 'form-control', 'placeholder' => 'Email','id' => 'email_3','name'=>'email_3']) !!}

                                    </div>

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>


  </div>
</div>

</div>
</div>
