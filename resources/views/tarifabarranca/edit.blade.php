<div class="modal fade" id="update_barranca">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar Tarifa de Barranca</h4>
            </div>
            <div class="modal-body">
                    <form class="" action="{{route('tarifasbarranca.update', 'id' )}}"  id="tarifasbarrancaUpdate" method="post"  >
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
                        <label for="id">Valor mes con aiu</label>
                        {!! Form::text('valor_con_aui', null,['class' => 'form-control', 'placeholder' => 'valor mes con aiu','name'=>'valor_con_aui','id'=>'valor_mes_con_aiu']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>          
                </div>
            </div>
        </div>
    </div>

    
        
   