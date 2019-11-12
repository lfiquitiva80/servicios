<div class="modal fade" id="editar_prefacturaoxy">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Actualizar Prefactura Oxy</h4>
            </div>
            <div class="modal-body">
                    <form class="" action="{{route('prefacturaoxy.update', 'id' )}}"  id="prefacturaoxyEdit" method="post"  >
                            {{method_field('patch')}}
                            {{csrf_field()}}
                    <input type="hidden" id="id" name="id"> 
                    <div class="col-xs-4">
                       <div class="form-group">
                        <label for="id">NIT</label>
                         {!! Form::select('id_cliente',$clienteoxy,null,['class'=> 'form-control editarcliente','placeholder' => 'Seleccione el nit del cliente','name'=>'id_cliente','id'=>'id_cliente'] )!!}
                        </div>
                     </div>
                     
                     <div class="col-xs-4">
                           <div class="form-group">
                              <label for="id">CLIENTE</label>
                                <input type="text" class="form-control editclientename" disabled>
                            
                          </div> 
                    </div>
                    
                    <div class="col-xs-2">
                         <div class="form-group">
                         <label for="id">item de contrato </label>
                         {!! Form::select('item_de_contrato',$bogota,null,['class'=> 'form-control editarbogota','placeholder' => 'Seleccione','name'=>'item_de_contrato','id'=>'item_de_contrato','disabled'] )!!}
                         {!! Form::select('item_de_contrato',$barranca,null,['class'=> 'form-control editarbarranca','placeholder' => 'Seleccione','name'=>'item_de_contrato','id'=>'item_de_contrato'] )!!} 
                         </div>
                    </div>
                    <div class="col-xs-2">
                         <div class="form-group">
                         <label for="id">PERIODO</label>
                         {!! Form::select('periodo',[ ''=>'SELECCIONE'],null,['class'=> 'form-control editarperidobogota','name'=>'periodo','id'=>'periodo','disabled'] )!!}
                         {!! Form::select('periodo',[ ''=>'SELECCIONE'],null,['class'=> 'form-control editarperidobarranca','name'=>'periodo','id'=>'periodo'] )!!}  
                         </div>
                     </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                           <label for="id">LINEA DE NEGOCIO </label>
                           {!! Form::text('linea_de_negocio',null,['class' => 'form-control','placeholder' => 'LINEA DE NEGOCIO','name'=>'linea_de_negocio','id'=>'linea_de_negocio']) !!}    
      
                        </div>
                     </div>
                     <div class="col-xs-3">
                       <div class="form-group">
                          <label for="id">ORDEN DE SERVICIO </label>
                          {!! Form::text('',null,['class' => 'form-control','id'=>'ordendeservicio','disabled']) !!}    
                       </div>
                    </div>
                     
                       
                         <div class="col-xs-5">
                                <div class="form-group">
                                   <label for="id">DETALLE</label>
                                   {!! Form::text('',null,['class' => 'form-control editdetalle','id'=>'detalle','disabled']) !!}    
                                   {!! Form::hidden('detalle',null,['class' => 'form-control editdetalle','id'=>'detalle']) !!}    

                                </div>
                             </div>
                        <div class="col-xs-4">
                              <div class="form-group">
                                 <label for="id">CIUDAD </label>
                                 {!! Form::text('ciudad',null,['class' => 'form-control ciudades','placeholder' => 'CIUDAD','id'=>'ciudad']) !!}    
                                  
                              </div>
                           </div>     

                        <div class="col-xs-4">
                                 <div class="form-group">
                                       <label for="id">PROPUESTA </label>
                                       {!! Form::text('propuesta',null,['class' => 'form-control','placeholder' => 'PROPUESTA','name'=>'propuesta','id'=>'propuesta']) !!}    

                                    </div>
                                 </div>
                               
                       <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Nº PREFACTURA </label>
                               {!! Form::text('numero_factura',null,['class' => 'form-control','placeholder' => 'Nº PREFACTURA','name'=>'numero_factura','id'=>'numero_factura']) !!}    
                                
                            </div>
                         </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">FECHA PREFACTURA </label>
                               {!! Form::text('fecha_prefactura',null,['class' => 'form-control edit_fechaprefactura','placeholder' => 'FECHA PREFACTURA','name'=>'fecha_prefactura','id'=>'fecha_prefactura']) !!}    
                              
                            </div>
                         </div> 
                         
                         <div class="col-xs-2">
                           <div class="form-group">
                              <label for="id">HORA INICIO </label>
                              {!! Form::text('hora_inicio',null,['class' => 'form-control','placeholder' => 'HORA DE INICIO','id'=>'editiniciohoraoxy']) !!}    
                            </div>
                        </div>  

                        <div class="col-xs-2">
                            <div class="form-group">
                               <label for="id">HORA FINAL</label>
                                {!! Form::text('hora_final',null,['class' => 'form-control','placeholder' => 'HORA DE FINALIZACIÓN','id'=>'editfinalhoraoxy']) !!}    
                            </div>
                         </div> 

                        <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">CANTIDAD </label>
                                   {!! Form::text('cantidad',null,['class' => 'form-control editcantidad','placeholder' => 'CANTIDAD','name'=>'cantidad','id'=>'cantidad']) !!}    

                                  </div>
                             </div>  

                          {{-- <div class="col-xs-2">
                                <div class="form-group">
                                   <label for="id">CONSOLIDADO  </label>
                                   {!! Form::text('',null,['class' => 'form-control consolidadototal','placeholder' => 'CONSOLIDADO','id'=>'consolidado','disabled']) !!}    
                                   {!! Form::hidden('consolidado',null,['class' => 'form-control consolidadototal','placeholder' => 'CONSOLIDADO','id'=>'consolidado']) !!}    


                                  </div>
                             </div>        --}}



                         <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">FECHA DE SERVICIO </label>
                               {!! Form::text('fecha_servicio',null,['class' => 'form-control edit_fechaservicio ','placeholder' => 'FECHA SERVICIO','name'=>'fecha_servicio','id'=>'fecha_servicio']) !!}    

                              </div>
                         </div>
                          
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">VALOR UNITARIO</label>
                               {!! Form::text('valor_unitario',null,['class' => 'form-control editvalorunitario','placeholder' => 'VALOR UNITARIO','name'=>'valor_unitario','id'=>'valor_unitario','disabled']) !!}    
                               {!! Form::text('valor_unitario',null,['class' => 'form-control editvalorunitario','placeholder' => 'VALOR UNITARIO','name'=>'valor_unitario','id'=>'valor_unitario','style'=>'display:none']) !!}  
                               {!! Form::hidden('',null,['class' => 'form-control consolidado']) !!}  

                              </div>
                         </div>
                         
                         
                         <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">VALOR TOTAL SERVICIO </label>
                               {!! Form::text('valor_total',null,['class' => 'form-control editvalortotal','placeholder' => 'VALOR TOTAL SERVICIO','name'=>'valor_total','id'=>'valor_total','disabled']) !!}    
                               {!! Form::text('valor_total',null,['class' => 'form-control editvalortotal','placeholder' => 'VALOR TOTAL SERVICIO','name'=>'valor_total','id'=>'valor_total','style'=>'display:none']) !!}    

                              </div>
                         </div> 
                         <div class="col-xs-4">
                              <div class="form-group">
                                 <label for="id">CENTRO DE COSTOS OXY </label>
                                 {!! Form::text('centrodecostos',null,['class' => 'form-control','placeholder' => 'CENTRO DE COSTOS','name'=>'centrodecostos','id'=>'centrodecostos']) !!}    
                                        
                              </div>
                           </div>
                           
                        <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">ESTADO FACTURACIÓN</label>
                                   {!! Form::select('id_estado_facturacion',$estadofacturacion,null,['class'=> 'form-control estado','name'=>'id_estado_facturacion','id'=>'id_estado_facturacion'] )!!}
                                     <input type="text" class="form-control editestado" style="display: none">
                                  </div>
                             </div>   

                       <div class="col-xs-4">
                              <div class="form-group">
                                 <label for="id">OBSERVACIONES</label>
                                 {!! Form::text('observacion_prefactura',null,['class'=> 'form-control','name'=>'observacion_prefactura','id'=>'observacion_prefactura','placeholder'=>'OBSERVACIONES'] )!!}
                                </div>
                         </div>     

                         <center>
                           <button  type="submit" class="btn btn-primary" >Guardar</button>
                           <button  type="button" class="btn btn-default "data-dismiss="modal" >Close</button>
                        </center>

                    </form>       
                       
                </div>
            </div>
        </div>
    </div>

    
        
   