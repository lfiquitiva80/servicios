<div class="modal fade" id="create_lnegocio">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Linea de negocio</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'linea_de_negocio.store', 'method'=>'POST', 'id'=>'lnegocioCreate']) !!}
                
                     <div class="form-group">
                        <label for="id">Prefijo</label>
                        {!! Form::text('prefijo', null,['class' => 'form-control', 'placeholder' => 'Prefijo','name'=>'prefijo','id'=>'prefijo']) !!}
                      </div>
                
                     <div class="form-group">
                        <label for="id">Descripcion</label>
                        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>