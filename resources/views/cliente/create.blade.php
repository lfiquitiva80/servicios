<div class="modal fade" id="crear_cliente">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">CREAR CLIENTES</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'Clientes.store', 'method'=>'POST','id'=>'reg_form2']) !!}

<div class="form-group" >
        <label for="id">Nit</label>
        {!! Form::text('nit', null,['class' => 'form-control', 'placeholder' => 'Nit','name'=>'nit']) !!}
    </div>

<div class="form-group">
        <label for="id">Nombre</label>
        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'nombre']) !!}
    </div>
    <div class="form-group">
            <label for="id">Solicitante</label>
            {!! Form::text('solicitante', null,['class' => 'form-control', 'placeholder' => 'Solicitante','name'=>'solicitante']) !!}
        </div>
        <div class="form-group">
                <label for="id">Teléfono</label>
                {!! Form::text('telefono', null,['class' => 'form-control', 'placeholder' => 'Teléfono','name'=>'telefono']) !!}

            </div>
      <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>
      <div class="form-group">
                        <label for="id">Notas</label>
                        {!! Form::text('notas', null,['class' => 'form-control', 'placeholder' => 'Notas','name'=>'notas']) !!}
                    </div>
      <div class="form-group">
                            <label for="id">Activo</label>
                            {!! Form::select('activo',[ ''=>'SELECCIONE','si'=>'Activo', 'no' =>'Inactivo'],null,['class'=> 'form-control','name'=>'activo'] )!!}
                </div>
      <div class="form-group">
                                <label for="id">Coordinador</label>
                                {!! Form::text('coordinador', null,['class' => 'form-control', 'placeholder' => 'Coordinador','name'=>'coordinador']) !!}
                            </div>
     <div class="form-group">
        <label for="id">Asignación Email al Cliente</label>
        {!! Form::select('usuario',$usuario, null, ['class' => 'form-control','name'=>'usuario']) !!}
    </div>
 <!--    <div class="form-group">
    <label for="id">Centro de costos</label>
    {!! Form::select('id_centrodecostos',$costos, null, ['class' => 'form-control','placeholder'=>'Seleccione el centro de costos' ,'name'=>'id_centrodecostos']) !!}
    </div> -->
                                             

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>
