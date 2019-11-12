@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

  <legend>ACTUALIZAR PREFACTURA OTROS CLIENTE</legend>

  <a href="{{ route('prefacturacliente.index') }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <a class="btn btn-info" data-toggle="modal" href='#create_horaprefactura'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear hora adiciona / tarifa estandar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      {!! Form::open(['route' => ['prefacturacliente.update', $data->id],'method'=>'PATCH','id'=>'CreatePrefacturaCliente']) !!}
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
                    {!! Form::text('',$ordendeservicios->id,['class' => 'form-control','disabled']) !!}    
                    {!! Form::hidden('id_ordendeservicio',$ordendeservicios->id,['class' => 'form-control id_ordendeservicio','id'=>'id_ordendeservicio']) !!}    
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
                    {!! Form::text('vip',$ordendeservicios->vip,['class' => 'form-control vip','placeholder'=>'VIP']) !!}    
                 </div>
         </div> 
         {!! Form::hidden('',$ordendeservicios->tipo_de_servicio,['class'=> 'form-control tipodeservicio'] )!!}

         <div class="col-xs-2">
              <div class="form-group">
                 <label for="id">FECHA DE SERVICIO</label>
                 {!! Form::text('',$ordendeservicios->fecha_inicio_servicio,['class' => 'form-control', 'placeholder' => 'FECHA DE SERVICIO','id'=>'createfecha_de_servicio','disabled']) !!}
                 {!! Form::hidden('fecha_de_servicio',$ordendeservicios->fecha_inicio_servicio,['class' => 'form-control', 'placeholder' => 'FECHA DE SERVICIO','id'=>'fecha_de_servicio']) !!}

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
                   <a href="{{route('escaner.edit',$item->id_wo) }}" class="btn btn-primary " title="VER ARCHIVO" target="_blank">VER ARCHIVO</a>
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
              {!! Form::text('',$ordendeservicios->vehiculos->placa,['class'=> 'form-control','placeholder' => 'PLACA','disabled'] )!!}
               </div>
           </div>

           <div class="col-xs-2">
            <div class="form-group">
             <label for="id"><small> CENTRO DE COSTOS OXY </small></label>
           {!! Form::text('centrodecostos',$data->centrodecostos,['class'=> 'form-control','placeholder' => 'CENTRO DE COSTOS','id'=>'centrodecostos'] )!!}
            </div>
        </div>

       <div class="col-xs-2">
            <div class="form-group">
             <label for="id">LINEA DE NEGOCIO </label>
           {!! Form::select('id_fs',$fs,$data->id_fs,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_fs'] )!!}
            </div>
        </div>
        
        <div class="col-xs-2">
            <div class="form-group">
               <label for="id"> CIUDAD </label>
               {!! Form::select('id_ciudad',$codigociudad,$data->id_ciudad,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_codigociudad'] )!!}
                
            </div>
         </div>
     
        <div class="col-xs-4">       
        <div class="form-group">
           <label for="id">PROPUESTA ECONÓMICA</label>
           {!! Form::select('id_propuesta_economica',$propuestaeconomica,$data->id_propuesta_economica,['class'=> 'form-control id_propuesta_economica','placeholder' => 'Seleccione'] )!!}

          </div>
       </div>

       {{-- <div class="col-xs-4" >
        <div class="form-group">
          <label for="id">TARIFA ESTÁNDAR</label>
          {!! Form::select('id_tarifa_estandar',$tarifa_estandar,null,['class'=> 'form-control id_tarifa_estandar','placeholder' => 'Seleccione'] )!!}
        
            </div>
        </div> --}}

        <div class="col-xs-2">
              <div class="form-group">
                 <label for="id">TIPO DE DÍA  </label>
                 
                 {!! Form::text('',null,['class' => 'form-control dia','disabled']) !!}    
              </div>
        </div>
        {{-- <div class="col-xs-2" >
           <div class="form-group">
             <label for="id">HORA ADICIONAL </label>
             {!! Form::select('id_hora_adicional',[ ''=>'SELECCIONE'],null,['class'=> 'form-control hora_adicional'] )!!}
           
               </div>
           </div> --}}

        {{-- <div class="col-xs-4" >
           <div class="form-group">
             <label for="id"> N° HORA ADICIONAL </label>
             {!! Form::text('numero_hora',null,['class'=> 'form-control numero_adicional','disabled'] )!!}
               </div>
           </div> --}}

        {{-- <div class="col-xs-4" >
           <div class="form-group">
             <label for="id"> VALOR TOTAL HORA ADICIONAL </label>
             {!! Form::text('',null,['class'=> 'form-control valor_total_hora','disabled'] )!!}
             {!! Form::hidden('valor_total_hora',null,['class'=> 'form-control valor_total_hora'] )!!}

               </div>
           </div> --}}



           {{-- <div class="col-xs-4">
                 <div class="form-group">
                    <label for="id">DETALLE </label>
                    {!! Form::text('',null,['class' => 'form-control detalle', 'placeholder' => 'DETALLE','disabled']) !!}
                    {!! Form::hidden('detalle',null,['class' => 'form-control detalle']) !!}

                 </div>
              </div> --}}

        <div class="col-xs-2">
            <div class="form-group">
            <label for="id ">Nº PREFACTURA </label>
               {!! Form::text('numero_prefactura',$data->numero_prefactura,['class' => 'form-control numero_prefactura', 'placeholder' => 'Nº PREFACTURA','id'=>'numero_prefactura']) !!}
            
               {{-- <small> @if ($ultima_prefactura !='[]')
                    <p class="text-danger"> Última prefactura : {{$ultima_prefactura->numero_prefactura}}</small></p> @endif --}}
              </div>
         </div> 

          @php
            $diaactual = date("Y-m-d");
          @endphp

         <div class="col-xs-2">
            <div class="form-group">
               <label for="id">FECHA PREFACTURA </label>

               {!! Form::text('',$data->fecha_prefactura,['class' => 'form-control ', 'placeholder' => 'FECHA PREFACTURA','disabled']) !!}
               {!! Form::hidden('fecha_prefactura',$data->fecha_prefactura,['class' => 'form-control fecha_prefactura']) !!}

              </div>
         </div>
         
         <div class="col-xs-2">
              <div class="form-group">
                 <label for="id">ESTADO FACTURACIÓN</label>
                 {!! Form::select('id_estado_facturacion',$estadofacturacion,null,['class'=> 'form-control estado','id'=>'id_estado_facturacion'] )!!}
                </div>
           </div>

         

         
         
         {{-- <div class="col-xs-4">
            <div class="form-group">
               <label for="id">CANTIDAD </label>
               {!! Form::text('cantidad',null,['class' => 'form-control cantidad', 'placeholder' => 'CANTIDAD']) !!}

              </div>
         </div> 

         <div class="col-xs-4">
              <div class="form-group">
                 <label for="id"> VALOR UNITARIO  </label>
                 {!! Form::text('valor_unitario',null,['class' => 'form-control valor_unitario','placeholder' => 'VALOR UNITARIO']) !!}    

              </div>
           </div>
           
        <div class="col-xs-4"> 
              <div class="form-group">
                    <label for="id"> VALOR TOTAL SERVICIO </label>
                    {!! Form::text('',null,['class' => 'form-control valor_total','placeholder' => 'VALOR TOTAL SERVICIO','disabled']) !!}    
                    {!! Form::hidden('valor_total',null,['class' => 'form-control valor_total','id'=>'id_ordendeservicio']) !!}    

                 </div>
         </div>    --}}
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
    
        var fecha_prefactura = $('.fecha_prefactura').val();

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
           
           $('.form-control').prop('disabled', true);
        $('.estado').hide();
        $('#estadoedit').show();
        $('#estadoedit').val('FACTURADO');
     }
       
      

   });
</script>

    @endsection
    
        
            
       