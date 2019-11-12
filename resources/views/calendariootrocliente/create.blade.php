<div class="modal fade" id="crear_calendario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Fecha</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'calendarioprefactura.store', 'method'=>'POST', 'id'=>'']) !!}
                       <div class="form-group">
                            <label for="id">Descripción </label>
                            {!! Form::text('evento', null,['class' => 'form-control', 'placeholder' => 'Descripción']) !!}

                      </div>
                    <div class="form-group">
                        <label for="id">Fecha </label>
                        {!! Form::text('', null,['class' => 'form-control', 'placeholder' => 'Fecha','id'=>'fecha','disabled']) !!}
                        {!! Form::hidden('date', null,['class' => 'form-control', 'placeholder' => 'Fecha','id'=>'fecha']) !!}

                      </div>

                      <center><button type="submit" class="btn btn-primary" >Guardar</button>
                    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
  