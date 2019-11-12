<div class="modal fade" id="edit_horaprefactura">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => ['horasprefacturacliente.update', 'id'],'method'=>'PATCH','id'=>'Edithoraprefacturacliente']) !!}
                        {{csrf_field()}}
                        
                     {!! Form::hidden('id', null,['class' => 'form-control','id'=>'id']) !!}

                      <div class="form-group">
                       <label for="id">TARIFA ESTÁNDAR</label>
                         {!! Form::select('id_tarifa_estandar',$tarifa_estandar,null,['class'=> 'form-control id_tarifa_estandar','placeholder' => 'Seleccione'] )!!}
                        </div>

                       <div class="form-group">
                       <label for="id">HORA ADICIONAL </label>
                       {!! Form::select('id_hora_adicional',$horadicional,null,['class'=> 'form-control hora_adicional','placeholder' => 'Seleccione'] )!!}
                         </div>

                       <div class="form-group">
                       <label for="id">DETALLE </label>
                      {!! Form::text('',null,['class' => 'form-control detalle', 'placeholder' => 'DETALLE','disabled']) !!}
                      {!! Form::hidden('detalle',null,['class' => 'form-control detalle']) !!}
                       </div>

                       <div class="form-group">
                          <label for="id">HORARIO </label>
                          {!! Form::text('horario',null,['class' => 'form-control horario', 'placeholder' => 'HORARIO']) !!}
            
                         </div>
                     
                      <div class="form-group">
                      <label for="id">CANTIDAD </label>
                        {!! Form::text('cantidad',null,['class' => 'form-control cantidad', 'placeholder' => 'CANTIDAD']) !!}
                      </div>
                   
                      <div class="form-group">
                       <label for="id"> VALOR UNITARIO  </label>
                       {!! Form::text('',null,['class' => 'form-control valor_unitario','placeholder' => 'VALOR UNITARIO','disabled']) !!}    


                        {!! Form::hidden('valor_unitario',null,['class' => 'form-control valor_unitario']) !!}    
                       </div>
           
                       <div class="form-group">
                        <label for="id"> VALOR TOTAL SERVICIO </label>
                        {!! Form::text('',null,['class' => 'form-control valor_total','placeholder' => 'VALOR TOTAL SERVICIO','disabled']) !!}    
                        {!! Form::hidden('valor_total',null,['class' => 'form-control valor_total']) !!}    
                      </div>


                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                     <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                      {!! Form::close() !!}           
                </div>
            </div>
        </div>
    </div>