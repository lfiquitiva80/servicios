<div class="modal fade" id="create_horaadicional">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Hora Adicional </h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'horaadicionales.store', 'method'=>'POST', 'id'=>'horaadicionalCreate']) !!}
                
                    <div class="form-group">
                           <label for="id">Propuesta económica </label>
                           {!! Form::select('id_propuesta_economica',$propuesta_economica,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_propuesta_economica'] )!!}
                        
                          </div>
                          
                     <div class="form-group">
                        <label for="id">Tipo de tarifa</label>
                        {!! Form::select('id_tipodetarifa',$tipodetarifa,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_tipodetarifa'] )!!}
                     
                       </div>
                
                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::select('id_descripcionhoraadicional',$descripcion,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_descripciontarifa'] )!!}

                     </div>
                     
                     <div class="form-group">
                        <label for="id">Año</label>
                        {!! Form::text('year', null,['class' => 'form-control año', 'placeholder' => 'Año','name'=>'year','id'=>'añohora']) !!}
                     </div>

                     <div class="form-group">
                        <label for="id">Valor </label>
                        {!! Form::text('valor', null,['class' => 'form-control', 'placeholder' => ' Valor Hora adicional diurna ordinaria','id'=>'hora_adicional_diurna_ordinaria']) !!}
                    </div> 

                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>