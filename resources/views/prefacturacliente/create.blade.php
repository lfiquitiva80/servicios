@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')

  <legend>CREAR PREFACTURA OTROS CLIENTE</legend>

<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
            {!! Form::open(['route' => 'prefacturacliente.store', 'method'=>'POST', 'id'=>'CreatePrefacturaCliente']) !!}
                    
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
         if ($ordendeservicios->tipo_de_servicio == null) {
            if ($ordendeservicios->tipo == null) {
               $angenda = $ordendeservicios->vehiculos->placa;
            }else{
               $angenda = $ordendeservicios->vehiculos->placa.''.$ordendeservicios->tipovehiculos->descripcion_tipo_vehiculo;
            }

         }else{
            $angenda = $ordendeservicios->vehiculos->placa.','.$ordendeservicios->tipovehiculos->descripcion_tipo_vehiculo.','.$ordendeservicios->tiposdeservicios->desc_tipo_serv;
         }


          $escolta = $ordendeservicios->escoltas->nombre;
           
         
         
      @endphp
            <div class="col-xs-4">
                  <div class="form-group">
                   <label for="id">AGENDA</label>
                   {!! Form::text('',$angenda,['class'=> 'form-control','disabled'] )!!} 
                   
                  </div>
              </div>

              <div class="col-xs-1">
               <div class="form-group">
                <label for="id">PLACA </label>
              {!! Form::text('',$ordendeservicios->vehiculos->placa,['class'=> 'form-control','placeholder' => 'PLACA','disabled'] )!!}
               </div>
           </div>

           <div class="col-xs-3">
            <div class="form-group">
             <label for="id"> <small> CENTRO DE COSTOS OXY </small> </label>
           {!! Form::text('centrodecostos',null,['class'=> 'form-control','placeholder' => 'CENTRO DE COSTOS'] )!!}
            </div>
        </div>

           <div class="col-xs-2">
                <div class="form-group">
                 <label for="id">LINEA DE NEGOCIO </label>
               {!! Form::select('id_fs',$fs,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_fs'] )!!}
                </div>
            </div>
            
            <div class="col-xs-2">
                <div class="form-group">
                   <label for="id"> CIUDAD </label>
                   {!! Form::select('id_ciudad',$codigociudad,null,['class'=> 'form-control','placeholder' => 'Seleccione','id'=>'id_codigociudad'] )!!}
                    
                </div>
             </div>
         
            <div class="col-xs-4">       
            <div class="form-group">
               <label for="id">PROPUESTA ECONÓMICA</label>
               {!! Form::select('id_propuesta_economica',$propuestaeconomica,null,['class'=> 'form-control id_propuesta_economica','placeholder' => 'Seleccione'] )!!}

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
                   {!! Form::text('numero_prefactura',null,['class' => 'form-control numero_prefactura', 'placeholder' => 'Nº PREFACTURA','id'=>'numero_prefactura']) !!}
                
                   <small> @if ($ultima_prefactura !='[]')
                        <p class="text-danger"> Última prefactura : {{$ultima_prefactura->numero_prefactura ?? 0}}</small></p> @endif
                  </div>
             </div> 
              @php
                $diaactual = date("Y-m-d");
              @endphp

             <div class="col-xs-2">
                <div class="form-group">
                   <label for="id">FECHA PREFACTURA </label>

                   {!! Form::text('',$diaactual,['class' => 'form-control ', 'placeholder' => 'FECHA PREFACTURA','disabled']) !!}
                   {!! Form::hidden('fecha_prefactura',$diaactual,['class' => 'form-control fecha_prefactura']) !!}

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
                  <label for="id">HORARIO </label>
                  {!! Form::text('horario',null,['class' => 'form-control ', 'placeholder' => 'HORARIO']) !!}

                 </div>
            </div> --}}

             
             
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
             &nbsp;&nbsp;
             <center>
               <button  type="submit" class="btn btn-info" >Guardar</button>
               {!! Form::close() !!}         
            </center>
                
    </div>
  </div>
<script>
    $(document).ready(function() {
        var valor_hora_adicional 
        var propuesta_economica
        var tipodetarifas   
        var descripción_tarifa    
        var tarifahoraadcional  
        var fecha_prefactura = $('.fecha_prefactura').val();
        var escolta= '{{$escolta}}';
        var tipodeservicio ='{{$tipodeservicio}}';
        var vip = $('.vip').val();

        $('.id_propuesta_economica').change(function(event) {
         propuesta_economica = $(this).val();
        });
       
       $('.hora_adicional').change(function(event) {
         var id_hora_adicional =$(this).val();

          if (id_hora_adicional == "") {
            $('.numero_adicional').prop('disabled', true);
            $('.valor_horaadiconal').val('0');
            $('.numero_adicional').val('');
            $('.valor_total_hora').val('0');
            $('.detalle').val(descripción_tarifa+" "+escolta+""+tipodeservicio+" "+vip);

          }else{
            $('.numero_adicional').prop('disabled', false);
            $('.valor_horaadiconal').val(valor_hora_adicional);
            $('.detalle').val(descripción_tarifa+" "+tarifahoraadcional+" "+escolta+" "+tipodeservicio+" "+vip);

          }
       });     


        $('.id_tarifa_estandar').change(function(event) {
         var tarifa_estandar = $(this).val();
          $.ajax({
          url: '{!!URL::to('id_tarifasestandar')!!}',
          type: 'get',
          data: {tarifa_estandar:tarifa_estandar},
          success:function(data){     
               for(var i=0;i<data.length;i++){
                $('.valor_tarifa_estandar').val(data[i].valor_ciudad);
                tipodetarifas = data[i].idtipo_de_tarifa;
                descripción_tarifa = data[i].descripcion;
                  }     
             }
          })

        $.ajax({
             url: '{!!URL::to('id_hora_adicional')!!}',
             type: 'get',
             data: {id_propuesta_economica:propuesta_economica},
             success:function(data){  
                                    
             var html_select='<option value=""  >SELECCIONE </option>';
                 for(var i=0;i<data.length;i++){   
                                 
                    if (tipodetarifas == data[i].tipo_de_tarifa) {
                       html_select+='<option value="'+data[i].id+'">'+data[i].descripcion+'</option>';
                           $('.hora_adicional').html(html_select);
                           valor_hora_adicional = data[i].valor;
                           tarifahoraadcional = data[i].descripcion;
                    }
                 }
               } 
            }) 

        });

        $('.numero_prefactura').change(function(event) {
         $('.detalle').val(descripción_tarifa+" "+escolta+""+tipodeservicio+" "+vip);

        })
        

        $('.numero_adicional').change(function(event) {
         var numero_adicional = $(this).val();
      
         $('.valor_total_hora').val(valor_hora_adicional*numero_adicional);
      });


        
      if ($('.valor_total_hora').val() == "") {
         $('.valor_total_hora').val('0');
      }
      
      
       $('.valor_unitario').change(function(event) {
         var cantidad = $('.cantidad').val();
         var valorunitario = $(this).val();
         var valor_tarifa_estandar=  $('.valor_tarifa_estandar').val();
         var valor_total_hora =  $('.valor_total_hora').val();
        
         var subtotal =parseInt(valor_tarifa_estandar)+parseInt(valor_total_hora);
         $('.valor_total').val(subtotal*valorunitario*cantidad);
      });

      $('.cantidad').change(function(event) {
         var valorunitario = $('.valor_unitario').val();
         var cantidad = $(this).val();
         var valor_tarifa_estandar=  $('.valor_tarifa_estandar').val();
         var valor_total_hora =  $('.valor_total_hora').val();
         var subtotal =parseInt(valor_tarifa_estandar)+parseInt(valor_total_hora);

         $('.valor_total').val(subtotal*valorunitario*cantidad);
      });
    

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
   });

</script>

    @endsection
