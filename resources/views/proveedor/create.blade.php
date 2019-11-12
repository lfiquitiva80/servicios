<div class="modal fade" id="crear_proveedor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Proveedor</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'proveedores.store', 'method'=>'POST', 'id'=>'form_proveedor']) !!}
                
                     <div class="form-group">
                        <label for="id">Nit</label>
                        {!! Form::text('nit', null,['class' => 'form-control', 'placeholder' => 'nit','name'=>'nit','id'=>'nit']) !!}
                      </div>
                
                     <div class="form-group">
                        <label for="id">Nombre</label>
                        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre','name'=>'nombre','id'=>'nombre']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
  