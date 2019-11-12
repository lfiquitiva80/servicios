<div class="modal fade" id="editar_tarifasestandar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Actualizar Tarifas Estándar </h4>
                </div>
                <div class="modal-body">
                        <form class="" action="{{route('tarifas.update', 'id' )}}"  id="tarifasestandarUpdate" method="post"  >
                                {{method_field('patch')}}
                                {{csrf_field()}}
        
                        {!! Form::hidden('id',null,['class' => 'form-control','name'=>'id','id'=>'id']) !!}
                       
                        <div class="form-group">
                        <label for="id">Propuesta económica </label>
                            {!! Form::select('id_propuesta_economica',$propuesta_economica, null,['class' => 'form-control','placeholder' => 'Seleccione','id'=>'id_propuesta_economica']) !!}

                         </div>

                         <div class="form-group">
                            <label for="id">Tipo de tarifa</label>
                            {!! Form::select('id_tipodetarifa',$tipodetarifa, null,['class' => 'form-control','placeholder' => 'Seleccione','id'=>'tipo_de_tarifa']) !!}
                          </div>
                    
                         <div class="form-group">
                            <label for="id">Descripción del servicio</label>
                            {!! Form::select('id_descripciontarifa',$descripcion, null,['class' => 'form-control','id'=>'descripcion']) !!}
                         </div>

                         <div class="form-group">
                            <label for="id">Ciudad</label>
                            {!! Form::select('ciudad',$codigociudad,null,['class'=> 'form-control my-select','multiple','data-live-search'=>'true','title'=>'CUIDAD','name'=>'ciudad[]'] )!!}           

                         </div>

                         <div class="form-group">
                            <label for="id">Año</label>
                            {!! Form::text('year', null,['class' => 'form-control año', 'placeholder' => 'Año','id'=>'año']) !!}
                         </div>

                         <div class="form-group">
                            <label for="id">Valor Ciudad </label>
                            {!! Form::text('valor_ciudad', null,['class' => 'form-control', 'placeholder' => 'Valor Ciudad','name'=>'valor_ciudad','id'=>'valor_ciudad']) !!}
                         </div>

                         <div class="form-group">
                           <label for="id">Item para OXY </label>
                           {!! Form::text('item_oxy', null,['class' => 'form-control', 'placeholder' => 'Item para OXY','id'=>'item_oxy']) !!}
                        </div>

                         <center><button type="submit" class="btn btn-primary" >Guardar</button>
                            <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                        
                        </form>         
                    </div>
                </div>
            </div>
        </div>