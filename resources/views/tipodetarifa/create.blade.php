<div class="modal fade" id="create_tipodetarifa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear  tipo de tarifa</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'tipodetarifa.store', 'method'=>'POST','id'=>'tipodetarifaCreate']) !!}
                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Descripción','id'=>'nombre']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
  