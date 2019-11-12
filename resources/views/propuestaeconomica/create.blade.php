<div class="modal fade" id="create_propuestaeconomica">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Propuesta Economica</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'propuestaeconomica.store', 'method'=>'POST', 'id'=>'propuestaeconomicaCreate']) !!}
                    
                    <div class="form-group has-feedback {{ $errors->has('numero_propuesta') ? ' has-error' : '' }}">

                    <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">N° PROPUESTA ECONOMICA</label>
                               {!! Form::text('numero_propuesta',null,['class'=> 'form-control','placeholder' => 'N° PROPUESTA ECONOMICA','id'=>'numero_propuestas'] )!!}
                             
                       
                        @if ($errors->has('numero_propuesta'))
                        <div class="errornumero_propuesta" >
                         <span  id="numero_propuesta"class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true">  </span>
                         <span class="help-block">
                         <strong> El numero de la propuesta economica ya esta registrada. </strong>
                         </span>
                        </div>
                       @else
                       @endif
                </div>
            </div>
        </div>
                    
                    <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">CLIENTE</label>
                        {!! Form::select('id_cliente',$cliente,null,['class'=> 'form-control','placeholder' => 'SELECCIONE','id'=>'id_cliente'] )!!}
                      
                       </div>
                    </div>

                    <div class="col-xs-4">
                       <div class="form-group">
                        <label for="id">ATENCIÓN</label>
                          {!! Form::text('antencion',null,['class'=> 'form-control','placeholder' => 'ATENCIÓN','id'=>'antencion'] )!!}  
                     
                         </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                         <label for="id">EMAIL</label>
                           {!! Form::text('email',null,['class'=> 'form-control','placeholder' => 'EMAIL','id'=>'email'] )!!}  
                      
                          </div>
                     </div>

                     <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">CONTACTO OT </label>
                                 {!! Form::text('contacto_ot',null,['class'=> 'form-control','placeholder' => 'CONTACTO OT','id'=>'contacto_ot'] )!!}  
                            
                             </div>
                     </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                             <label for="id">CARGO </label>
                              {!! Form::text('cargo',null,['class'=> 'form-control','placeholder' => 'CARGO','id'=>'cargo'] )!!}           
                             
                            </div>
                     </div>

                     <div class="col-xs-4">
                            <div class="form-group">
                               <label for="id">FECHA </label>
                               {!! Form::text('fecha',null,['class'=> 'form-control','placeholder' => 'FECHA','id'=>'fecha'] )!!}           

                            </div>
                         </div>
                          
                    {{-- <div class="col-xs-2">
                         <div class="form-group">
                               <label for="id">Nº DE DÍAS </label>
                               {!! Form::text('numero_dia',null,['class'=> 'form-control dias','placeholder' => 'Nº DE DÍAS','id'=>'numero_dia'] )!!}           
                              
                         </div>
                    </div> --}}
                          
                    {{-- <div class="col-xs-2">
                        <div class="form-group">
                               <label for="id">Nº DE PUESTOS </label>
                               {!! Form::text('numero_puesto',null,['class'=> 'form-control','placeholder' => 'Nº DE PUESTOS','id'=>'numero_puesto'] )!!}           

                         </div>
                     </div> --}}

                     <div class="col-xs-4">
                        <div class="form-group">
                                  <label for="id">DESCRIPCIÓN DEL SERVICIO</label>
                                  {!! Form::text('descripcion',null,['class'=> 'form-control','placeholder' => 'DESCRIPCIÓN DEL SERVICIO','id'=>'descripcion'] )!!}           
   
                         </div>
                    </div>

                     <div class="col-xs-4">
                            <div class="form-group">
                                   <label for="id"> CIUDAD</label>
                                   {!! Form::select('id_ciudad',$codigociudad,null,['class'=> 'form-control','placeholder'=>'SELECCIONE','id'=>'ciudad'] )!!}           
    
                             </div>
                         </div>

                    {{-- <div class="col-xs-4">
                            <div class="form-group">
                                   <label for="id"> CONDICIONES SALARIALES</label>
                                   {!! Form::text('condicion_salarial',null,['class'=> 'form-control','placeholder' => 'CONDICIONES SALARIALES','id'=>'condicion_salarial'] )!!}           
    
                             </div>
                     </div>      --}}
                         

                    {{-- <div class="col-xs-4">
                        <div class="form-group">
                               <label for="id">DOTACIÓN DEL SERVICIO</label>
                               {!! Form::text('dotacion',null,['class'=> 'form-control','placeholder' => 'DOTACIÓN DEL SERVICIO', 'name'=>'dotacion','id'=>'dotacion'] )!!}           
 
                        </div>
                    </div>  --}}

                    {{-- <div class="col-xs-4">
                        <div class="form-group">
                                 <label for="id">UND </label>
                                 {!! Form::text('und',null,['class' => 'form-control','placeholder' => 'UND','id'=>'und']) !!}              
                       
                         </div>
                    </div>

                    <div class="col-xs-4">
                            <div class="form-group">
                                  <label for="id">VALOR UNITARIO</label>
                                  {!! Form::text('valor_unitario',null,['class'=> 'form-control vr_unitario','placeholder' => 'VALOR UNITARIO','id'=>'valor_unitario' ] )!!}  
                           </div>      
                    </div>   

                    <div class="col-xs-4">
                         <div class="form-group">
                               <label for="id">VALOR TOTAL </label>
                               {!! Form::text('',null,['class'=> 'form-control vr_total','placeholder' => 'VALOR TOTAL','id'=>'valor_total','disabled' ] )!!}  
                               {!! Form::hidden('valor_total',null,['class'=> 'form-control vr_total','id'=>'valor_total' ] )!!}  
                        </div>
                    </div>    --}}

                     <center>  
                        <button  type="submit" class="btn btn-primary" >Guardar</button>
                         <button  type="button" class="btn btn-default "data-dismiss="modal" >Close</button>
                    </center> 

                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
