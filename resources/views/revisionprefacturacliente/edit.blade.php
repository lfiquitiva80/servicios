@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

  <legend>REVISIÓN PREFACTURA OTROS CLIENTE</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => ['revisionprefactura.update', $data->id],'method'=>'PATCH','id'=>'CreatePrefacturaCliente','id'=>'RevisionPrefacturaCliente']) !!}
      <div class="col-xs-4">
                <div class="form-group">
                  <label for="id">NIT</label>
                  {!! Form::text('', $ordendeservicios->clientes->nit,['class' => 'form-control','disabled']) !!}
          
                </div>
            </div>

            <div class="col-xs-4">
              <div class="form-group">
                <label for="id">CLIENTE </label>
                 {!! Form::text('', $ordendeservicios->clientes->nombre,['class' => 'form-control','disabled']) !!}
               </div>
            </div>
            <div class="col-xs-4"> 
                  <div class="form-group">
                        <label for="id"> ORDEN DE SERVICIO </label>
                        {!! Form::text('',$ordendeservicios->No_de_orden_de_servicio,['class' => 'form-control','disabled']) !!}    
                     </div>
             </div> 

             <div class="col-xs-4">
                  <div class="form-group">
                        <label for="id">DATOS DEL ESCOLTA </label>
                        {!! Form::text('',$ordendeservicios->escoltas->nombre.' cc: '.$ordendeservicios->escoltas->cc,['class' => 'form-control datos', 'placeholder' => 'DATOS DEL ESCOLTA','disabled']) !!}
                   </div>
              </div>

             <div class="col-xs-2"> 
                  <div class="form-group">
                        <label for="id"> VIP </label>
                        {!! Form::text('',$ordendeservicios->vip,['class' => 'form-control vip','disabled','placeholder'=>'VIP']) !!}    
                     </div>
             </div> 
             {!! Form::hidden('',$ordendeservicios->tipo_de_servicio,['class'=> 'form-control tipodeservicio'] )!!}

             <div class="col-xs-2">
                  <div class="form-group">
                     <label for="id">FECHA DE SERVICIO</label>
                     {!! Form::text('',$ordendeservicios->fecha_inicio_servicio,['class' => 'form-control', 'placeholder' => 'FECHA DE SERVICIO','id'=>'createfecha_de_servicio','disabled']) !!}
                  </div>
               </div>

               <div class="col-xs-2">
                     <div class="form-group">
                      <label for="id">HORA INCIO </label>
                      {!! Form::text('',$ordendeservicios->Hora_de_inicio_Servicio_cliente,['class' => 'form-control', 'placeholder' => 'HORA INCIO','id'=>'createfecha_de_servicio','disabled']) !!}
   
                     </div>
                 </div>

                 <div class="col-xs-2">
                  <div class="form-group">
                   <label for="id">HORA FINAL</label>
                   {!! Form::text('',$ordendeservicios->Hora_Final_del_Servicio_Cliente,['class' => 'form-control', 'placeholder' => 'HORA INCIO','id'=>'createfecha_de_servicio','disabled']) !!}

                  </div>
              </div>
                 <div class="col-xs-2 ">
                  <div class="form-group">
                     <label for="id"><small>Hora_de_inicio_Servicio_cliente</small></label>
                     {!! Form::text('',$ordendeservicios->Hora_de_inicio_Servicio_cliente,['class' => 'form-control', 'placeholder' => 'HORA INCIO','id'=>'createfecha_de_servicio','disabled']) !!}
    
                  </div>
              </div>
    
              <div class="col-xs-2">
               <div class="form-group">
                  <label for="id"><small>Hora_Final_del_Servicio_Cliente</small></label>
                  {!! Form::text('',$ordendeservicios->Hora_Final_del_Servicio_Cliente,['class' => 'form-control', 'placeholder' => 'HORA INCIO','id'=>'createfecha_de_servicio','disabled']) !!}
    
               </div>
           </div>
           
                 
                 <div class="col-xs-4">
                  <div class="form-group">
                     <label for="id">Ciudad destino</label>
                     {!! Form::text('',$ordendeservicios->ciudad_destino,['class' => 'form-control', 'placeholder' => 'ciudad destino','id'=>'createfecha_de_servicio','disabled']) !!}
       
                  </div>
              </div>
             <div class="col-xs-2">
                     <div class="form-group">
                        <label for="id">W.O</label>
                        <br>
                        <a href="{{route('wo.edit',$ordendeservicios->No_de_orden_de_servicio) }}" title="Lista de Chequeo" class="btn btn-warning">{{$ordendeservicios->No_de_orden_de_servicio}} </a>
                     </div>
                  </div>
             <div class="col-xs-2">
                  <div class="form-group">
                     <label for="id">PDF </label>
                     <br>
                     @if ($escaner == "[]")
                     <a href="#" class="btn btn-primary" disabled="disabled">VER ARCHIVO</a>                                         
                     @else
                       @foreach ($escaner as $item)
                       <a href="{{route('escaner.edit',$item->id_wo) }}" class="btn btn-primary "  target="_blank" title="VER ARCHIVO">VER ARCHIVO</a>
                       @endforeach
                     @endif
                    </div>
            </div>
      @php

          $escolta = $ordendeservicios->escoltas->nombre;
       
      if ($ordendeservicios->tipo_de_servicio == null) {
            if ($ordendeservicios->tipo == null) {
               $angenda = $ordendeservicios->vehiculos->placa;
            }else{
               $angenda = $ordendeservicios->vehiculos->placa.''.$ordendeservicios->tipovehiculos->descripcion_tipo_vehiculo;
            }

         }else{
            $angenda = $ordendeservicios->vehiculos->placa.','.$ordendeservicios->tipovehiculos->descripcion_tipo_vehiculo.','.$ordendeservicios->tiposdeservicios->desc_tipo_serv;
         }

           
      @endphp
            <div class="col-xs-4">
                  <div class="form-group">
                   <label for="id">AGENDA</label>
                   
                  {!! Form::text('',$angenda,['class'=> 'form-control','disabled'] )!!} 
                  </div>
              </div>
              <div class="col-xs-2">
                  <div class="form-group">
                     <label for="id">PLACA </label>
                     {!! Form::text('',$ordendeservicios->vehiculos->placa,['class' => 'form-control ','disabled']) !!}
   
                    </div>
               </div>
               <div class="col-xs-2">
                     <div class="form-group">
                      <label for="id"><small> CENTRO DE COSTOS OXY </small> </label>
                    {!! Form::text('',$data->centrodecostos,['class'=> 'form-control','placeholder' => 'CENTRO DE COSTOS','id'=>'centrodecostos','disabled'] )!!}
                     </div>
                 </div>
           <div class="col-xs-2">
                <div class="form-group">
                 <label for="id">LINEA DE NEGOCIO </label>
               {!! Form::select('',$fs,$data->id_fs,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_fs','disabled'] )!!}
                </div>
            </div>
            
            <div class="col-xs-2">
                <div class="form-group">
                   <label for="id"> CIUDAD </label>
                   {!! Form::select('',$codigociudad,$data->id_ciudad,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_codigociudad','disabled'] )!!}
                    
                </div>
             </div>
         
            <div class="col-xs-4">       
            <div class="form-group">
               <label for="id">PROPUESTA ECONÓMICA</label>
               {!! Form::select('',$propuestaeconomica,$data->id_propuesta_economica,['class'=> 'form-control id_propuesta_economica','disabled'] )!!}

              </div>
           </div>

           {{-- <div class="col-xs-4" >
            <div class="form-group">
              <label for="id">TARIFA ESTÁNDAR</label>
              {!! Form::select('',$tarifa_estandar,$data->id_tarifa_estandar,['class'=> 'form-control id_tarifa_estandar','disabled'] )!!}
            
                </div>
            </div> --}}

            <div class="col-xs-2">
                  <div class="form-group">
                     <label for="id">TIPO DE DÍA </label>
                     {!! Form::text('',null,['class' => 'form-control dia','disabled']) !!}    
                  </div>
            </div>
            {{-- <div class="col-xs-2" >
               <div class="form-group">
                 <label for="id">HORA ADICIONAL </label>
                 {!! Form::select('',[ ''=>'SELECCIONE'],null,['class'=> 'form-control hora_adicional','disabled'] )!!}
               
                   </div>
               </div>

            <div class="col-xs-4" >
               <div class="form-group">
                 <label for="id"> N° HORA ADICIONAL </label>
                 {!! Form::text('',$data->numero_hora,['class'=> 'form-control numero_adicional','disabled'] )!!}
                   </div>
               </div>

            <div class="col-xs-4" >
               <div class="form-group">
                 <label for="id"> VALOR TOTAL HORA ADICIONAL </label>
                 {!! Form::text('',$data->valor_total_hora,['class'=> 'form-control valor_total_hora','disabled'] )!!}

                   </div>
               </div> --}}


               {!! Form::hidden('',null,['class'=> 'form-control valor_tarifa_estandar'] )!!}
               {!! Form::hidden('',null,['class'=> 'form-control valor_horaadiconal'] )!!}

               {{-- <div class="col-xs-4">
                     <div class="form-group">
                        <label for="id">DETALLE </label>
                        {!! Form::text('',$data->detalle,['class' => 'form-control detalle', 'placeholder' => 'DETALLE','disabled']) !!}
                     </div>
                  </div> --}}

              
            <div class="col-xs-2">
                <div class="form-group">
                   <label for="id ">Nº PREFACTURA</label>
                   {!! Form::text('',$data->numero_prefactura,['class' => 'form-control numero_prefactura', 'placeholder' => 'Nº PREFACTURA','id'=>'numero_prefactura','disabled']) !!}
                </div>
             </div> 

              

             <div class="col-xs-2">
                <div class="form-group">
                   <label for="id">FECHA PREFACTURA </label>

                   {!! Form::text('',$data->fecha_prefactura,['class' => 'form-control ', 'placeholder' => 'FECHA PREFACTURA','disabled']) !!}

                  </div>
             </div>
             
             

             
             
             {{-- <div class="col-xs-4">
                <div class="form-group">
                   <label for="id">CANTIDAD </label>
                   {!! Form::text('',$data->cantidad,['class' => 'form-control cantidad', 'disabled']) !!}

                  </div>
             </div>  --}}

             {{-- <div class="col-xs-4">
                  <div class="form-group">
                     <label for="id"> VALOR UNITARIO  </label>
                     {!! Form::text('',$data->valor_unitario,['class' => 'form-control valor_unitario','disabled']) !!}    
 
                  </div>
               </div>
               
            <div class="col-xs-4"> 
                  <div class="form-group">
                        <label for="id"> VALOR TOTAL SERVICIO </label>
                        {!! Form::text('',$data->valor_total,['class' => 'form-control valor_total','placeholder' => 'VALOR TOTAL SERVICIO','disabled']) !!}    

                     </div>
             </div>    --}}
             <div class="col-xs-2">
               <div class="form-group">
                  <label for="id">FECHA FACTURA </label>
                  {!! Form::text('fecha_factura',$data->fecha_factura,['class' => 'form-control ', 'placeholder' => 'FECHA FACTURA','id'=>'edit_fecha_factura']) !!}

                 </div>
            </div>

            <div class="col-xs-4"> 
               <div class="form-group">
                     <label for="id"> FACTURA </label>
                     {!! Form::text('factura',$data->factura,['class' => 'form-control','placeholder' => 'FACTURA','id'=>'factura']) !!}    

                  </div>
          </div> 
            
             <div class="col-xs-4">
                  <div class="form-group">
                     <label for="id">ESTADO FACTURACIÓN</label>
                     {!! Form::select('id_estado_facturacion',$estadofacturacion,$data->id_estado_facturacion,['class'=> 'form-control estado','id'=>'id_estado_facturacion'] )!!}
                  </div>
               </div>
               {{-- <div class="col-xs-4"> 
                  <div class="form-group">
                        <label for="id"> VALOR </label>
                        {!! Form::text('valor',$data->valor,['class' => 'form-control','placeholder' => 'VALOR']) !!}    

                     </div>
             </div>  --}}

             <div class="col-xs-4"> 
               <div class="form-group">
                     <label for="id"> RESPONSABLE </label>
                     @if ($usuario != null)
                     {!! Form::text('',$usuario->name,['class' => 'form-control','disabled']) !!}    
                     @else
                     {!! Form::text('',null,['class' => 'form-control','disabled']) !!}    
                     @endif

                  </div>
             </div>

             <div class="col-xs-4"> 
               <div class="form-group">
                     <label for="id"> OBSERVACIÓN </label>
                     {!! Form::text('observacion',$data->observacion,['class' => 'form-control','placeholder' => 'OBSERVACION','id'=>'observacion']) !!}    

                  </div>
             </div>

             
             <div class="col-xs-4"> 
                 <div class="form-group">
                    <label for="id"> DESCRIPCIÓN FACTURA </label>
                    {!! Form::text('descripcion_factura',$data->descripcion_factura,['class' => 'form-control','placeholder' => 'OBSERVACION','id'=>'descripcion_factura']) !!}    

                  </div>
              </div>
             
             <div class="col-xs-4"> 
               <div class="form-group">
                     <label for="id"> PROVEEDOR </label>
                     {!! Form::text('proveedor',$data->proveedor,['class' => 'form-control proveedor','placeholder' => 'PROVEEDOR','id'=>'proveedor']) !!}    

                  </div>
             </div>
             
             <center>
                  <button  type="submit" class="btn btn-info" >Guardar</button>
                </center>
               {!! Form::close() !!}         
 
                
    </div>
  </div>
  @include('horaprefactura.index');
  @include('prefacturacliente.wo');


<script>
 $(document).ready(function() {
   // var idprefactura ='{{$data->id}}';
   var type = "{{ Auth::user()->type }}";
   var proveedor =$('.proveedor').val();
   var estadofacturacion = $('.estado').val();
   var fecha_prefactura = $('.fecha_prefactura').val();

   // $.ajax({
   //           url: '{!!URL::to('id_horas_adicionales')!!}',
   //           type: 'get',
   //           data: {id:idprefactura},
   //           success:function(data){  
   //           var html_select='<option value=""  >SELECCIONE </option>';
   //               for(var i=0;i<data.length;i++){ 
   //                     html_select+='<option value="'+data[i].id_hora_adicional+'" selected>'+data[i].descripcion+'</option>';
   //                   $('.hora_adicional').html(html_select);
   //                   $('.numero_adicional').val(data[i].numero_hora);
   //                   $('.valor_total_hora').val(data[i].valor_total_hora);       
   //               }

   //             } 
   //          }) 


   $.ajax({
           url: '{!!URL::to('calendarioprefacturaall')!!}',
           type: 'get',
           success:function(data){   
              var d = moment().weekday();
              if (d == 7 ) {
                 $('.dia').val('DOMINICAL') 
             
               }else{
                 for (let i = 0; i < data.length; i++) {   
                    
                  if ( fecha_prefactura == data[i].start) {
                     if (true) {
                        $('.dia').val('DOMINICAL')
                     }
                  }
                             
              }
              var inpunt =  $('.dia').val();
              if (inpunt == '') {
                 $('.dia').val('ORDINARIO')
              }
           }
           }   
       })
        if (estadofacturacion == 5 ) {
             if (proveedor == '') {
               $('.form-control').prop('disabled', true);
              $('.proveedor').prop('disabled', false);
            
                if (type ==1 || type== 2 ) {
                   $('.estado').prop('disabled', false);
                  }
             }else{
               $('.form-control').prop('disabled', true);
                if (type ==1 || type== 2) {
                  $('.estado').prop('disabled', false);
                  }
             }
            }
 

 });
</script>

    @endsection
    
        
            