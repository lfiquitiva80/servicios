<div class="modal fade" id="create_periodo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Período  Barranca</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'tarifasbarranca.store', 'method'=>'POST', 'id'=>'periodobarranca']) !!}

                   
                     <div class="form-group">
                        <label for="id"> Seleccione Item</label>
                        {!! Form::select('item',$barranca,null,['class'=> 'form-control item','placeholder' => 'Seleccione el Item','name'=>'item','id'=>'item'] )!!}
                      </div>
                
                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('descripcion', null,['class' => 'form-control descripcion', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion','disabled']) !!}
                     <input type="hidden" name="descripcion" class="form-control descripcion" >
                    </div>
                     <div class="form-group">
                        <label for="id">Valor mes con aiu</label>
                        {!! Form::text('valor_con_aui', null,['class' => 'form-control', 'placeholder' => 'valor mes con aiu','name'=>'valor_con_aui','id'=>'valor_mes_con_aiu']) !!}
                     </div>
                     <input type="hidden" name="periodo" id="periodo" class="form-control">
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>