<div class="modal fade" id="edit_horaadicional">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar  Hora Adicional </h4>
            </div>
            <div class="modal-body">
                    <form class="" action="{{route('horaadicionales.update', 'id' )}}"  id="horaadicionalUpdate" method="post"  >
                        {{method_field('patch')}}
                        {{csrf_field()}}

                     {!! Form::hidden('id',null,['class' => 'form-control','name'=>'id','id'=>'id']) !!}

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
                        {!! Form::select('id_descripcionhoraadicional',$descripcion,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_descripcionhoraadicional'] )!!}

                     </div>
                     
                     <div class="form-group">
                        <label for="id">Año</label>
                        {!! Form::text('year', null,['class' => 'form-control año', 'placeholder' => 'Año','name'=>'year','id'=>'añoedithora']) !!}
                     </div>

                     <div class="form-group">
                        <label for="id">Valor </label>
                        {!! Form::text('valor', null,['class' => 'form-control', 'placeholder' => 'Valor','id'=>'valor']) !!}
                    </div> 

                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>           
                </div>
            </div>
        </div>
    </div>