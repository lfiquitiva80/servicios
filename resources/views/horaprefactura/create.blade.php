<div class="modal fade" id="create_horaprefactura">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Crear</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'horasprefacturacliente.store', 'method'=>'POST','id'=>'Createhoraprefacturacliente']) !!}

                    {{csrf_field()}}
                    {!! Form::hidden('id_prefacturacion', $data->id,['class' => 'form-control id_prefacturacion']) !!}

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
                               {!! Form::text('horario',null,['class' => 'form-control ', 'placeholder' => 'HORARIO']) !!}
                 
                              </div>
                   

                          <div class="form-group">
                          <label for="id">CANTIDAD </label>
                            {!! Form::text('cantidad',null,['class' => 'form-control cantidades', 'placeholder' => 'CANTIDAD']) !!}
                          </div>
                       
                          <div class="form-group">
                           <label for="id"> VALOR UNITARIO  </label>
                           {!! Form::text('',null,['class' => 'form-control valor_unitarios','placeholder' => 'VALOR UNITARIO','disabled']) !!}    
    
                            {!! Form::hidden('valor_unitario',null,['class' => 'form-control valor_unitarios','placeholder' => 'VALOR UNITARIO']) !!}    
                           </div>
               
                           <div class="form-group">
                            <label for="id"> VALOR TOTAL SERVICIO </label>
                            {!! Form::text('',null,['class' => 'form-control valor_totals','placeholder' => 'VALOR TOTAL SERVICIO','disabled']) !!}    
                            {!! Form::hidden('valor_total',null,['class' => 'form-control valor_totals','id'=>'id_ordendeservicio']) !!}    
                          </div>
    
                          
                           <center>
                             <button  type="submit" class="btn btn-primary" >Guardar</button>
                             <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                          </center>
                           {!! Form::close() !!}           
                    </div>
                </div>
            </div>
        </div>