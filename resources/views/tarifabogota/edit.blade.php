<div class="modal fade" id="update_bogota">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar Tarifa de Bogotá</h4>
            </div>
            <div class="modal-body">
                    <form class="" action="{{route('tarifasbogota.update', 'id' )}}"  id="tarifasbogotaUpdate" method="post"  >
                        {{method_field('patch')}}
                        {{csrf_field()}}

                     <input type="hidden" id="id" name="id">  
                     <div class="form-group">
                        <label for="id">Item</label>
                        {!! Form::text('item', null,['class' => 'form-control', 'placeholder' => 'Item','name'=>'item','id'=>'item']) !!}
                      </div>
                
                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!}
                     </div>
                     <div class="form-group">
                        <label for="id">Unidad</label>
                        {!! Form::text('unidad', null,['class' => 'form-control', 'placeholder' => 'unidad','name'=>'unidad','id'=>'unidad']) !!}
                     </div>
                     <div class="form-group">
                        <label for="id">Valor mes con aiu</label>
                        {!! Form::text('valor_con_aui', null,['class' => 'form-control', 'placeholder' => 'valor mes con aiu','name'=>'valor_con_aui','id'=>'valor_con_aui']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>          
                </div>
            </div>
        </div>
    </div>

    
        
   