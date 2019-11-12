<div class="modal fade" id="create_anticipo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Anticipo</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'anticipo.store', 'method'=>'POST', 'id'=>'AnticipoCreate']) !!}
                
                     <div class="form-group">
                        <label for="id"> N° de Orden de servicio</label>
                        {!! Form::select('id_ordendeservicio',$ordendeservicio,null,['class'=> 'form-control','placeholder' => 'Seleccione','name'=>'id_ordendeservicio','id'=>'id_ordendeservicio'] )!!}

                      </div>
                
                     <div class="form-group">
                        <label for="id">Valor</label>
                        {!! Form::text('valor', null,['class' => 'form-control', 'placeholder' => 'VALOR','name'=>'valor','id'=>'valor']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>