<div class="modal fade" id="AnticipoUpdate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"> Actualizar Anticipo</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('anticipo.update', 'id' )}}"  id="AnticiposUpdate" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}

                     <input type="hidden" id="id" name="id">

                      <div class="form-group">
                        <label for="id"> N° de Orden de servicio</label>
                        {!! Form::select('id_ordendeservicio',$ordendeservicio,null,['class'=> 'form-control ','id' => 'id_ordendeservicio','name'=>'id_ordendeservicio'] )!!}                    

                      </div> 
                
                     <div class="form-group">
                        <label for="id">Valor</label>
                        {!! Form::text('valor', null,['class' => 'form-control valor', 'placeholder' => 'VALOR','name'=>'valor','id'=>'valor']) !!}
                     </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    
                        
                    </form>       
                </div>
            </div>
        </div>
    </div>