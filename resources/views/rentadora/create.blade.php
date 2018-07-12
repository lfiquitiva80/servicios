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
        <div class="form-group">
                <label for="id">Teléfono</label>
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono']) !!}

            </div>
      <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>


    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
