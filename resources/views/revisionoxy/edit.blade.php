<div class="modal fade" id="revision_prefacturaoxy">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Actualizar Prefactura Oxy</h4>
                </div>
                <div class="modal-body">
                        <form class="" action="{{route('revisionprefacturaoxy.update', 'id' )}}"  id="prefacturaoxyrevision" method="post"  >
                                {{method_field('patch')}}
                                {{csrf_field()}}
                           {!! Form::hidden('id',null,['class'=> 'form-control','id'=>'id'] )!!}
                        <div class="col-xs-4">
                         <div class="form-group">
                            <label for="id">NIT</label>
                            {!! Form::text('',null,['class'=> 'form-control','id'=>'id_cliente','disabled'] )!!}
                          
                         </div>
                        </div>
                        <div class="col-xs-4">
                              <div class="form-group">
                                 <label for="id">CLIENTE</label>
                                 {!! Form::text('',null,['class'=> 'form-control editclientename','disabled'] )!!}
                             </div> 
                       </div>
                        
                        <div class="col-xs-2">
                         <div class="form-group">
                            <label for="id">item de contrato </label>
                            {!! Form::text('',null,['class'=> 'form-control','id'=>'item_de_contrato','disabled'] )!!}                         
                           </div>
                        </div>
                        <div class="col-xs-2">
                           <div class="form-group">
                              <label for="id">PERIODO</label>
                              {!! Form::text('',null,['class' => 'form-control','placeholder' => 'periodo','id'=>'periodo','disabled']) !!}    

                          </div>
                          </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">LINEA DE NEGOCIO </label>
                               {!! Form::text('',null,['class' => 'form-control','placeholder' => 'LINEA DE NEGOCIO','name'=>'linea_de_negocio','id'=>'linea_de_negocio','disabled']) !!}    
                                
                            </div>
                         </div>
                         <div class="col-xs-3">
                           <div class="form-group">
                              <label for="id">ORDEN DE SERVICIO </label>
                              {!! Form::text('',null,['class'=> 'form-control','id'=>'id_ordendeservicio','disabled'] )!!}
                               
                           </div>
                        </div>
                        
                           
                             <div class="col-xs-5">
                                    <div class="form-group">
                                       <label for="id">DETALLE</label>
                                       {!! Form::text('',null,['class' => 'form-control editdetalle','placeholder' => 'DETALLE','id'=>'detalle','disabled']) !!}    
                                        
                                    </div>
                                 </div>
                             <div class="col-xs-4">
                                 <div class="form-group">
                                    <label for="id">CIUDAD </label>
                                    {!! Form::text('',null,['class' => 'form-control cuidades','placeholder' => 'CIUDAD','id'=>'ciudad','disabled']) !!}    
                                     
                                 </div>
                              </div>
                            <div class="col-xs-4">
                                     <div class="form-group">
                                           <label for="id">PROPUESTA </label>
                                           {!! Form::text('',null,['class' => 'form-control','placeholder' => 'PROPUESTA','id'=>'propuesta','disabled']) !!}    
    
                                        </div>
                                     </div>
                                   
                           <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">Nº PREFACTURA </label>
                                   {!! Form::text('',null,['class' => 'form-control','placeholder' => 'Nº PREFACTURA','id'=>'numero_factura','disabled']) !!}    
                                    
                                </div>
                             </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">FECHA PREFACTURA </label>
                                   {!! Form::text('',null,['class' => 'form-control edit_fechaprefactura','placeholder' => 'FECHA PREFACTURA','id'=>'fecha_prefactura','disabled']) !!}    
                                  
                                </div>
                             </div> 
                             
                             <div class="col-xs-2">
                                    <div class="form-group">
                                       <label for="id">HORA  INICIO  </label>
                                       {!! Form::text('',null,['class' => 'form-control','id'=>'horainicio','disabled']) !!}    
                                     </div>
                                 </div>  

                              <div class="col-xs-2">
                                    <div class="form-group">
                                       <label for="id">HORA FINAL </label>
                                       {!! Form::text('',null,['class' => 'form-control','id'=>'horafinal','disabled']) !!}    
                                     </div>
                              </div>

                            <div class="col-xs-4">
                                    <div class="form-group">
                                       <label for="id">CANTIDAD </label>
                                       {!! Form::text('',null,['class' => 'form-control editcantidad','placeholder' => 'CANTIDAD','id'=>'cantidad','disabled']) !!}    
    
                                      </div>
                              </div>  

                             <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">FECHA DE SERVICIO </label>
                                   {!! Form::text('',null,['class' => 'form-control edit_fechaservicio ','placeholder' => 'FECHA SERVICIO','id'=>'fecha_servicio','disabled']) !!}    
    
                                  </div>
                             </div>
                              
                            <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">VALOR UNITARIO</label>
                                   {!! Form::text('',null,['class' => 'form-control','id'=>'valor_unitario','disabled']) !!}                               
                                  </div>
                             </div>
                             
                             
                             <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">VALOR TOTAL SERVICIO </label>
                                   {!! Form::text('',null,['class' => 'form-control','id'=>'valor_total','disabled']) !!}        
                                  </div>
                             </div> 
                             <div class="col-xs-4">
                                  <div class="form-group">
                                     <label for="id">CENTRO DE COSTOS OXY </label>
                                     {!! Form::text('',null,['class' => 'form-control','id'=>'centrodecostos','disabled']) !!}    
                                            
                                  </div>
                               </div>
                               <div class="col-xs-4">
                                 <div class="form-group">
                                    <label for="id">OBSERVACIONES FACTURACIÓN</label>
                                    {!! Form::text('',null,['class'=> 'form-control','id'=>'observacion_prefactura','disabled'] )!!}
                                   </div>
                            </div>  
                            <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id"> FECHA FACTURA  </label>
                                   {!! Form::text('fecha_factura',null,['class' => 'form-control edit_fechaservicio ','placeholder' => 'FECHA FACTURA','name'=>'fecha_factura','id'=>'fecha_factura']) !!}    
    
                                  </div>
                             </div>
                            <div class="col-xs-4">
                                  <div class="form-group">
                                     <label for="id"> VALOR FACTURADO </label>
                                     {!! Form::text('valor_facturado',null,['class' => 'form-control','placeholder' => 'VALOR FACTURADO','name'=>'valor_facturado','id'=>'valor_facturado']) !!}    
                                            
                                  </div>
                               </div> 
                            <div class="col-xs-4">
                                  <div class="form-group">
                                     <label for="id"> OBSERVACIONES</label>
                                     {!! Form::text('observaciones',null,['class' => 'form-control','placeholder' => 'OBSERVACIONES','name'=>'observaciones','id'=>'observaciones']) !!}    
                                            
                                  </div>
                               </div>         
                            <div class="col-xs-4">
                                  <div class="form-group">
                                     <label for="id"> FACTURA PROVEEDOR</label>
                                     {!! Form::text('factura_proveedor',null,['class' => 'form-control','placeholder' => 'FACTURA PROVEEDOR','name'=>'factura_proveedor','id'=>'factura_proveedor']) !!}    
                                            
                                  </div>
                               </div> 
                            <div class="col-xs-4">
                                 <div class="form-group">
                                       <label for="id">ESTADO FACTURACIÓN</label>
                                       {!! Form::select('id_estado_facturacion',$estadofacturacion2,null,['class'=> 'form-control','name'=>'id_estado_facturacion','id'=>'id_estado_facturacion'] )!!}
                                </div>
                            </div>  
                            <div class="col-xs-4">
                              <div class="form-group">
                                    <label for="id">RESPONSABLE</label>
                                    {!! Form::text('',null,['class'=> 'form-control','id'=>'responsable','disabled'] )!!}
                             </div>
                         </div>          
                             
                               <button  style="margin-top: 3%; margin-left: 3%" type="submit" class="btn btn-primary" >Guardar</button>
                               <button  style="margin-top: 3%;" type="button" class="btn btn-default "data-dismiss="modal" >Close</button>
                            
                        </form>       
                           
                    </div>
                </div>
            </div>
        </div>
    
        