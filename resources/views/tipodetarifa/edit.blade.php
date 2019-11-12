<div class="modal fade" id="edit_tiposdetarifa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar tipo de tarifa</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('tipodetarifa.update', 'id' )}}"  id="tipodetarifaUpdate" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    {!! Form::hidden('id', null,['class' => 'form-control','id'=>'id']) !!}

                     <div class="form-group">
                        <label for="id">Descripción</label>
                        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Descripción','id'=>'nombre']) !!}
                     </div>
                        <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                 </form>            
                </div>
            </div>
        </div>
    </div>