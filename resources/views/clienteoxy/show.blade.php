<div class="modal fade" id="editar_provision">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Ver Provision</h4>
            </div>
            <div class="modal-body">
                  <form class="" action="{{route('provision.update', 'id' )}}"   method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id">
                    <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">NIT/CC</label>
                        {!! Form::select('id_proveedor',$proveedor,null,['class'=> 'form-control id_proveedoredit','placeholder' => 'Seleccione el nit del proveedor','name'=>'id_proveedor','id'=>'id_proveedor','disabled'] )!!}
                      </div>
                    </div>
                    <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">Nombre Proveedor</label>
                        <input type="text" class="form-control nombreproveedor" disabled placeholder="Nombre ">
                        {{-- {!! Form::text('descripcion', null,['class' => 'form-control', 'placeholder' => 'Descripción','name'=>'descripcion','id'=>'descripcion']) !!} --}}
                     </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                           <label for="id">Nit Cliente </label>
                           {!! Form::select('id_centro_de_costos',$costo,null,['class'=> 'form-control idcostosedit','placeholder' => 'Seleccione el nit del centro de costos','name'=>'id_centro_de_costos','id'=>'id_centro_de_costos','disabled'] )!!}
                            
                        </div>
                     </div>
                     <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Nombre cliente </label>
                               <input type="text" class="form-control nombre_costosedit" disabled placeholder="Nombre clinete">
                                
                            </div>
                         </div>
                         <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">Centro de costo </label>
                                   <input type="text" class="form-control centrocostosedit" disabled placeholder="Centro de costos">
                                    
                                </div>
                             </div>

                        <div class="col-xs-4">
                                 <div class="form-group">
                                       <label for="id">Listado CC </label>
                                       {!! Form::select('id_ot',$ot,null,['class'=> 'form-control otedit','placeholder' => 'Seleccione','name'=>'id_ot','id'=>'id_ot','disabled'] )!!}

                                    </div>
                                 </div>
                       <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Centro de costos </label>
                               <input type="text" class="form-control otnameedit" disabled placeholder="Centro de costos">
                                
                            </div>
                         </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Concepto de la provision </label>
                               {!! Form::select('id_puc',$puc,null,['class'=> 'form-control idpucedit','name'=>'id_puc','id'=>'id_puc','disabled'] )!!}
                                
                            </div>
                         </div> 
                         <div class="col-xs-2">
                                <div class="form-group">
                                   <label for="id">A1 </label>
                                    <input type="text" class="form-control aunoedit" disabled placeholder="A1">
                                    <input type="hidden" class="form-control aunoedit"  name="auno"  id="auno">
                                </div>
                             </div>  
                         <div class="col-xs-2">
                            <div class="form-group">
                               <label for="id">A2 </label>
                               <input type="text"  class="form-control adosedit"  placeholder="A2" disabled >
                                <input type="hidden" name="ados" id="ados"  class="form-control adosedit">
                            </div>
                         </div>
                         <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Clave </label>
                                <input type="text" class="form-control claveunoedit" disabled placeholder="Clave">
                                <input type="hidden" class="form-control claveunoedit"  name="clave" id="clave">
                              </div>
                         </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Clave 2</label>
                                <input type="text" class="form-control clavedosedit" disabled placeholder="Clave 2">
                                <input type="hidden" class="form-control clavedosedit"  placeholder="Clave 2" name="clavedos" id="clavedos">
                              </div>
                         </div>
                        <div class="col-xs-4">
                           <div class="form-group">
                              <label for="id">Estado facturación</label>
                              {{-- {!! Form::select('id_estadofacturacion',$estadofacturacion,null,['class'=> 'form-control','name'=>'id_estadofacturacion','id'=>'id_estadofacturacion']  + ['2' => 'DEVOLUCIÓN'] )!!} --}}
                              {!! Form::select('id_estadofacturacion',[ ''=>'SELECCIONE','1'=>'REVISIÓN', '2' =>'DEVOLUCIÓN'],null,['class'=> 'form-control','name'=>'id_estadofacturacion','id'=>'id_estadofacturacion'] )!!}
                                
                             </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                               <label for="id">Cuenta </label>
                                <input type="text" class="form-control cuentaedit" disabled placeholder="Cuenta" disabled>
                            </div>
                         </div> 
                         <div class="col-xs-2">
                              <div class="form-group">
                                 <label for="id">Fecha </label>
                                 {!! Form::text('mes',null,['class' => 'form-control mes','placeholder' => 'FECHA','name'=>'mes','id'=>'mes','disabled']) !!}    
                                </div>
                           </div>
                        <div class="col-xs-4">
                                <div class="form-group">
                                   <label for="id">Detalle </label>
                                   {!! Form::text('detalle',null,['class'=> 'form-control','placeholder' => 'DETALLE', 'name'=>'detalle','id'=>'detalle','disabled'] )!!}   
                                </div>
                             </div>   
                        <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">Valor </label>
                               {!! Form::text('valor',null,['class'=> 'form-control','placeholder' => 'VALOR', 'name'=>'valor','id'=>'valor','disabled'] )!!}  
                            </div>
                         </div>                    
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                       
                     </form>          
                </div>
            </div>
     </div>
</div>
