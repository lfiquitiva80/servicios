<div class="modal fade" id="JornadaUpdate">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Actualizar  Jornada</h4>
                </div>
                <div class="modal-body">
                        <form class="" action="{{route('horario.update', 'id' )}}"  id="update_jornada" method="post"  >
                            {{method_field('patch')}}
                             {{csrf_field()}}
                        <input type="hidden" name="id" id="id">

                         <div class="form-group">
                            <label for="id"> Escolta</label>
                            {!! Form::select('id_escolta',$escolta,null,['class'=> 'form-control','placeholder' => 'Seleccione','name'=>'id_escolta','id'=>'id_escolta'] )!!}
    
                          </div>
                    
                         <div class="form-group">
                            <label for="id">Hora Inicial</label>
                            {!! Form::text('hora_inicial', null,['class' => 'form-control hora_inicial', 'placeholder' => 'Hora Inicial','name'=>'hora_inicial','id'=>'hora_inicial']) !!}
                         </div>
                         <div class="form-group">
                                <label for="id">Hora Final</label>
                                {!! Form::text('hora_final', null,['class' => 'form-control hora_final', 'placeholder' => 'Hora Final','name'=>'hora_final','id'=>'hora_final']) !!}
                             </div>
                         <div class="form-group">
                                <label for="id">Fecha</label>
                                {!! Form::text('fecha', null,['class' => 'form-control Fecha', 'placeholder' => 'Fecha','name'=>'fecha','id'=>'fecha']) !!}
                             </div>    
                         <center><button type="submit" class="btn btn-primary" >Guardar</button>
                            <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                        
                            </form>          
                    </div>
                </div>
            </div>
        </div>