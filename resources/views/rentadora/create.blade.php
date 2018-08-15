<div class="modal fade" id="crear_rentadora">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR RENTADORA</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'Rentadora.store', 'method'=>'POST','id'=>'reg_form4']) !!}



<div class="form-group">
        <label for="id">Nombre</label>
        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'nombre']) !!}
    </div>
    <div class="form-group">
            <label for="id">Contacto	</label>
            {!! Form::text('contacto', null,['class' => 'form-control', 'placeholder' => 'Contacto','name'=>'contacto']) !!}
        </div>
        <div class="form-group telefono">
                <label for="id">Teléfono</label>
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono']) !!}

            </div>
            <div class="form-group telefon_1" style="display:none">
                    <label for="id">Teléfono 2</label>
                    {!! Form::text('telefono_2', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono_2']) !!}
                </div>
                <div class="form-group telefon_1"  style="display:none">
                        <label for="id">Teléfono 3</label>
                        {!! Form::text('telefono_3', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono_3']) !!}
                    </div>
      <div class="form-group email">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>
                <div class="form-group email_1" style="display:none">
                              <label for="id">Email 2</label>
                              {!! Form::text('email_2', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email_2']) !!}

                          </div>
                          <div class="form-group email_1" style="display:none">
                                        <label for="id">Email 3 </label>
                                        {!! Form::text('email_3', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email_3']) !!}

                                    </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
