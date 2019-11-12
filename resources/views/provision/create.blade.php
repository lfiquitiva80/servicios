<div class="modal fade" id="create_provision">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Provision</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'provision.store', 'method'=>'POST', 'id'=>'provisionCreate']) !!}
                    
                    <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">NIT/CC</label>
                        {!! Form::select('id_proveedor',$proveedor,null,['class'=> 'form-control id_proveedor','placeholder' => 'Seleccione el nit del proveedor','name'=>'id_proveedor','id'=>'id_proveedor'] )!!}
                      
                     </div>
                    </div>
                    <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">Nombre Proveedor</label>
                        <input type="text" class="form-control nombre_proveedor" disabled placeholder="Nombre cliente">
                        {{-- {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!} --}}
                     </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                           <label for="id">Nit Cliente </label>
                           {!! Form::select('id_centro_de_costos',$costo,null,['class'=> 'form-control idcostos','placeholder' => 'Seleccione el nit del cliente','name'=>'id_centro_de_costos','id'=>'id_centro_de_costos'] )!!}
                            
                        </div>
                     </div>
                     <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Nombre cliente </label>
                               <input type="text" class="form-control nombre_costos" disabled placeholder="Nombre clinete">
                                
                            </div>
                         </div>
                         <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">Centro de costo </label>
                                   <input type="text" class="form-control centrocostos" disabled placeholder="Centro de costos">
                                    
                                </div>
                             </div>

                        <div class="col-xs-4">
                                 <div class="form-group">
                                       <label for="id">Listado CC </label>
                                       {!! Form::select('id_ot',$ot,null,['class'=> 'form-control ot','placeholder' => 'Seleccione','name'=>'id_ot','id'=>'id_ot'] )!!}

                                    </div>
                                 </div>
                               
                       <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Centro de costos </label>
                               <input type="text" class="form-control otname" disabled placeholder="Centro de costos">
                                
                            </div>
                         </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Concepto de la provision </label>
                               {!! Form::select('id_puc',$puc,null,['class'=> 'form-control idpuc','name'=>'id_puc','id'=>'id_puc'] )!!}
                              
                            </div>
                         </div> 
                         
                         <div class="col-xs-2">
                                <div class="form-group">
                                   <label for="id">A1 </label>
                                    <input type="text" class="form-control A1" disabled placeholder="A1">
                                    <input type="hidden" class="form-control A1"  name="auno"  id="auno">
                                
                                 </div>
                             </div>  
                         <div class="col-xs-2">
                            <div class="form-group">
                               <label for="id">A2 </label>
                                <input type="text" class="form-control A2" disabled placeholder="A2" name="ados" >
                                <input type="hidden" name="ados" id="ados"  class="form-control A2">
                              
                              </div>
                         </div>
                          
                         <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Clave </label>
                                <input type="text" class="form-control clave1" disabled placeholder="Clave" name="clave">
                                <input type="hidden" class="form-control clave1"  name="clave" id="clave">
                              </div>
                         </div>
                         
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Clave 2</label>
                                <input type="text" class="form-control clave2" disabled placeholder="Clave 2" name="clavedos">
                                <input type="hidden" class="form-control clave2"  placeholder="Clave 2" name="clavedos" id="clavedos">
                              </div>
                         </div>
                         <div class="col-xs-4">
                           <div class="form-group">
                              <label for="id">Estado facturación</label>
                              {!! Form::select('id_estadofacturacion',$estadofacturacion,null,['class'=> 'form-control','name'=>'id_estadofacturacion','id'=>'id_estadofacturacion'] )!!}

                             </div>
                        </div>
                         
                         <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Cuenta </label>
                                <input type="text" class="form-control cuenta" disabled placeholder="Cuenta">
                            
                              </div>
                         </div> 
                         <div class="col-xs-2">
                              <div class="form-group">
                                 <label for="id">Fecha </label>
                                 {!! Form::text('mes',null,['class' => 'form-control','placeholder' => 'FECHA','name'=>'mes','id'=>'mes']) !!}    
                                        
                              </div>
                           </div>
                           
                        <div class="col-xs-2"> 
                              <div class="form-group">
                                    <label for="id">Linea de negocio</label>
                                    {!! Form::select('id_lineadenegocio',$lnegocio,null,['class'=> 'form-control lnegocio','placeholder' => 'Seleccione','name'=>'id_lineadenegocio','id'=>'id_lineadenegocio'] )!!}
                                   
                                 </div>
                              </div>    
                        <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">Detalle </label>
                                   {!! Form::text('detalle',null,['class'=> 'form-control','placeholder' => 'DETALLE', 'name'=>'detalle','id'=>'detalle'] )!!}   
                           
                                 </div>
                             </div>   
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Valor </label>
                               {!! Form::text('valor',null,['class'=> 'form-control','placeholder' => 'VALOR', 'name'=>'valor','id'=>'valor'] )!!}  
                            </div>
                           
                         </div>      
                            
                         
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <button style="margin-top: 3%;" type="submit" class="btn btn-primary" >Guardar</button>
                           <button style="margin-top: 3%;" type="button" class="btn btn-default "data-dismiss="modal" >Close</button>
                        
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
