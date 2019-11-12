<div class="modal fade" id="crear_puc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Cuenta</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'puc.store', 'method'=>'POST', 'id'=>'form_puc']) !!}
                
                     <div class="form-group">
                        <label for="id">Cuenta</label>
                        {!! Form::text('cuenta', null,['class' => 'form-control', 'placeholder' => 'Cuenta','name'=>'cuenta','id'=>'cuenta']) !!}
                      </div>
                
                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
  