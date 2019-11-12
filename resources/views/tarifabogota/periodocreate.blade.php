<div class="modal fade" id="create_periodo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Período  Bogotá</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'tarifasbogota.store', 'method'=>'POST', 'id'=>'periodobogota']) !!}

                   
                     <div class="form-group">
                        <label for="id"> Seleccione Item</label>
                        {!! Form::select('item',$bogota,null,['class'=> 'form-control items','placeholder' => 'Seleccione el Item','name'=>'item','id'=>'item'] )!!}
                      </div>
                
                    <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('descripcion', null,['class' => 'form-control descripcions', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion','disabled']) !!}
                       <input type="hidden" name="descripcion"  class="form-control descripcions">
                    </div>
                     <div class="form-group">
                        <label for="id">Unidad</label>
                        {!! Form::text('unidad', null,['class' => 'form-control unidad', 'placeholder' => 'unidad','name'=>'unidad','id'=>'unidad','disabled']) !!}
                        <input type="hidden" name="unidad"  class="form-control unidad" >
                    </div>
                     <div class="form-group">
                        <label for="id">Valor mes con aiu</label>
                        {!! Form::text('valor_con_aui', null,['class' => 'form-control', 'placeholder' => 'valor mes con aiu','name'=>'valor_con_aui','id'=>'valor_con_aui']) !!}
                     </div>
                     {!! Form::hidden('periodo', null,['class' => 'form-control','name'=>'periodo','id'=>'periodo']) !!}

                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>