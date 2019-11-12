<div class="modal fade" id="editar_lnegocio">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar Linea de negocio</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('linea_de_negocio.update', 'id' )}}"  id="update_lnegocio" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="">
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
                    
                    </form>             
                </div>
            </div>
        </div>
    </div>