<div class="modal fade" id="edit_escaner">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Editar Documento</h4>
                </div>
                <div class="modal-body">
                        {!! Form::open(['route' => ['escaner.update', 'id'],'method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true,'id'=>'UpdateEscaner']) !!}
                            {{method_field('patch')}}
                            {{ csrf_field() }}
                            {!! Form::hidden('id', null,['class' => 'form-control','id'=>'id']) !!}    
                         <div class="form-group">
                            <label for="id">W.O</label>
                            {!! Form::text('',null,['class'=> 'form-control','id'=>'wo','disabled'] )!!}
                            {!! Form::hidden('id_wo',null,['class'=> 'form-control','id'=>'wo'] )!!}
                         </div>
          
                         <div class="form-group">
                            <label  class="control-label" for="id"></label>
                            <input type="file" class="filestyle" data-buttonName="btn-primary" data-buttonText=" ARCHIVO" data-placeholder="SUBIR PDF" name="ubicacion_archivo" id="ubicacion_archivo">
    
    
                         </div>
                         <center><button type="submit" class="btn btn-primary" >Guardar</button>
                            <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                        
                          {!! Form::close() !!}            
 
                    </div>
                </div>
            </div>
        </div>
      