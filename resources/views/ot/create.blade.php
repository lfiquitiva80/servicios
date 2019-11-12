<div class="modal fade" id="create_ot">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear OT</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'ot.store', 'method'=>'POST', 'id'=>'otCreate']) !!}
                <div class="form-group">
                    <label for="id">Nombre</label>

                    {!! Form::text('nombre',null,['class'=> 'form-control ','id' => 'nombre','name'=>'nombre'] )!!}                    
                </div>
            
                 
                 <div class="form-group">
                    <label for="id">CC</label>
                    {!! Form::text('cc',null,['class'=> 'form-control','placeholder' => 'CC', 'name'=>'cc','id'=>'cc'] )!!}

                  </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
</div>
    