@extends('adminlte::layouts.app')
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
   <div class="panel panel-default">
        <div class="modal fade" id="create_prefacturaoxydos">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Crear Prefactura Oxy</h4>
                        </div>
                        <div class="modal-body">
                                {!! Form::open(['route' => 'prefacturaoxy.store', 'method'=>'POST', 'id'=>'prefacturaoxyCreate']) !!}
                                <div class="col-xs-4">
                                 <div class="form-group">
                                    <label for="id">NIT</label>
                                    {!! Form::select('',$clienteoxy,null,['class'=> 'form-control id_cliente','name'=>'','id'=>'id_cliente','disabled'] )!!}
                                   </div>
                                </div>
                                <div class="col-xs-4">
                                      <div class="form-group">
                                         <label for="id">CLIENTE</label>
                                           <input type="text" class="form-control clientename" disabled>
                                        </div>
                                     </div>
                                
                                       
                                <div class="col-xs-2">
                                     <div class="form-group">
                                      <label for="id">item de contrato </label>
                                      {!! Form::select('item_de_contrato',$bogota,null,['class'=> 'form-control id_bogota','placeholder' => 'Seleccione','name'=>'item_de_contrato','id'=>'item_de_contrato','disabled'] )!!}
                                      {!! Form::select('item_de_contrato',$barranca,null,['class'=> 'form-control id_barranca','placeholder' => 'Seleccione','name'=>'item_de_contrato','id'=>'item_de_contrato'] )!!}  
                     
                                    </div>
                                </div>
                               
                                <div class="col-xs-2">
                                     <div class="form-group">
                                       <label for="id">PERIODO</label>
                                       {!! Form::select('periodo',[ ''=>'SELECCIONE'],null,['class'=> 'form-control periodobogota','name'=>'periodo','id'=>'periodo','disabled'] )!!}
                                       {!! Form::select('periodo',[ ''=>'SELECCIONE'],null,['class'=> 'form-control periodobarranca','name'=>'periodo','id'=>'periodo'] )!!}  
                                     </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                       <label for="id">LINEA DE NEGOCIO </label>
                                       {!! Form::text('linea_de_negocio',null,['class' => 'form-control','placeholder' => 'LINEA DE NEGOCIO','name'=>'linea_de_negocio','id'=>'linea_de_negocio']) !!}    
                                        
                                    </div>
                                 </div>
                                 {{-- <br><br><br><br><br> --}}
                                 <div class="col-xs-3">
                                   <div class="form-group">
                                      
                                      <label for="id">ORDEN DE SERVICIO </label>
                                      {!! Form::select('id_ordendeservicio',$ordendeservicio,null,['class'=> 'form-control id_ordendeservicio','name'=>'id_ordendeservicio','id'=>'id_ordendeservicio'] )!!}
                                       
                                   </div>
                                </div>
                                
                               
                                    
                                 <div class="col-xs-5">
                                            <div class="form-group">
                                               <label for="id">DETALLE</label>
                                               {!! Form::text('',null,['class' => 'form-control detalle','placeholder' => 'DETALLE','id'=>'detalle','disabled']) !!}    
                                               {!! Form::hidden('detalle',null,['class' => 'form-control detalle','placeholder' => 'DETALLE','id'=>'detalle']) !!}    

                                            </div>
                                         </div>
                                <div class="col-xs-4">
                                      <div class="form-group">
                                         <label for="id">CIUDAD </label>
                                         {!! Form::text('ciudad',$ciudad,['class' => 'form-control', 'placeholder' => 'CIUDAD','id'=>'cuidad']) !!}
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
                                           {!! Form::text('numero_factura',null,['class' => 'form-control numero_factura','placeholder' => 'Nº PREFACTURA','name'=>'numero_factura','id'=>'numero_factura']) !!}    
                                            
                                        </div>
                                     </div>
                                     
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                           <label for="id">FECHA PREFACTURA </label>
                                           {!! Form::text('fecha_prefactura',null,['class' => 'form-control fecha_prefactura','placeholder' => 'FECHA PREFACTURA','name'=>'fecha_prefactura','id'=>'fecha_prefactura']) !!}    
                                          
                                        </div>
                                     </div> 
                                     <br>
                                     
                                     <div class="col-xs-2">
                                            <div class="form-group">
                                               <label for="id">HORA  INICIO  </label>
                                               {!! Form::text('hora_inicio',null,['class' => 'form-control','placeholder' => 'HORA DE INICIO','id'=>'createiniciohoraoxy']) !!}    
                                             </div>
                                         </div>  

                                    <div class="col-xs-2">
                                          <div class="form-group">
                                             <label for="id">HORA FINAL</label>
                                             {!! Form::text('hora_final',null,['class' => 'form-control','placeholder' => 'HORA DE FINALIZACIÓN','id'=>'createfinalhoraoxy']) !!}    
                                           </div>
                                       </div>      
                                    
                                    <div class="col-xs-4">
                                          <div class="form-group">
                                               <label for="id">CANTIDAD </label>
                                               {!! Form::text('cantidad',null,['class' => 'form-control cantidad','placeholder' => 'CANTIDAD','name'=>'cantidad','id'=>'cantidad']) !!}    
                                          </div>
                                    </div>   

                                     <div class="col-xs-4">
                                        <div class="form-group">
                                           <label for="id">FECHA DE SERVICIO </label>
                                           {!! Form::text('fecha_servicio',null,['class' => 'form-control fecha_servicio','placeholder' => 'FECHA SERVICIO','name'=>'fecha_servicio','id'=>'fecha_servicio']) !!}    
        
                                          </div>
                                     </div>
                                     
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                           <label for="id">VALOR UNITARIO</label>
                                           {!! Form::text('valor_unitario',null,['class' => 'form-control valor_unitario','placeholder' => 'CANTIDAD','name'=>'valor_unitario','id'=>'valor_unitario','disabled']) !!}    
                                           {!! Form::text('valor_unitario',null,['class' => 'form-control valor_unitario','placeholder' => 'CANTIDAD','name'=>'valor_unitario','id'=>'valor_unitario','style'=>'display:none']) !!}  
                                   
                                          </div>
                                     </div>
                                     
                                     <br><br>
                                     <div class="col-xs-4">
                                        <div class="form-group">
                                           <label for="id">VALOR TOTAL SERVICIO </label>
                                           {!! Form::text('valor_total',null,['class' => 'form-control valortotla','placeholder' => 'VALOR TOTAL SERVICIO','name'=>'valor_total','id'=>'valor_total','disabled']) !!}    
                                           {!! Form::text('valor_total',null,['class' => 'form-control valortotla','placeholder' => 'VALOR TOTAL SERVICIO','name'=>'valor_total','id'=>'valor_total','style'=>'display:none']) !!}    
        
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
                                               {!! Form::select('id_estado_facturacion',$estadofacturacion,null,['class'=> 'form-control','name'=>'id_estado_facturacion','id'=>'id_estado_facturacion'] )!!}
                 
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
                                       <a type="button" class="btn btn-default " href="{{route('prefacturaoxy.index')}}" >Salir</a>
                                       </center>
                                {!! Form::close() !!}            
                            </div>
                        </div>
      
       </div>
    </div>
    
</div>
<script>
 $(document).ready(function() {
   $('#create_prefacturaoxydos').modal({
      backdrop: 'static', 
       keyboard: false
   });
   var  cliente = $('.id_cliente').val();
         
        
         if (cliente == 68) {
          
          $('.periodobarranca').prop('disabled', true);
          $('.id_barranca').prop('disabled', true);
          //$('.cuidad').val('');
          $('.id_barranca').hide();
          $('.periodobarranca').hide();
          $('.periodobogota').show();
          $('.id_bogota').show();
          $('.periodobogota').prop('disabled', false);
          $('.id_bogota').prop('disabled', false);
          //$('.cuidad').val('BOGOTA, D.C.')
          $('.clientename').val('OCCIDENTAL DE COLOMBIA LLC')
         }
         if (cliente == 52) {
          
           // $('.periodobogota').val('');
           // $('.id_bogota').val('');
         //   $('.cuidad').val('');
            $('.periodobogota').hide();
            $('.id_bogota').hide();
            $('.periodobarranca').show();
            $('.id_barranca').show();
            // $(".periodobogota").prop('disabled', true);
            // $(".id_bogota").prop('disabled', true);
            $('.clientename').val('OCCIDENTAL ANDINA LLC')
           //  $('.cuidad').val('BARRANCABERMEJA')
         
        }
        $('.id_barranca').change(function(event) {
         var  barranca =$(this).val();
         $('.valor_unitario').val('');
         $('.valortotla').val('')
         $.ajax({
          type:'get',
          url:'{!!URL::to('id_barranca')!!}',
          data:{'item':barranca},
          success:function(data){
             var html_select='<option value=""  >SELECCIONE </option>';
                     for(var i=0;i<data.length;i++){
                     html_select+='<option value="'+data[i].periodo+'">'+data[i].periodo+'</option>';
                     $('.periodobarranca').html(html_select);
                   }     

          }
       })
            

      });

      $('.periodobarranca').change(function(event) {
         var  barranca = $('.id_barranca').val();
         var  periodo = $('.periodobarranca').val();
         
              $.ajax({
              url: '{!!URL::to('id_barranca')!!}',
              type: 'get',
              data: {'item':barranca },
              success:function(data){
                 
                 for (let i = 0; i < data.length; i++) {
                  if (data[i].periodo == periodo) {
                     $('.valor_unitario').val(data[i].valor_con_aui);
                     $('.valortotla').val(data[i].valor_con_aui)
                     $('.detalle').val(data[i].descripcion)

                  }
               }
            }
         })
    });
    $('.id_bogota').change(function(event) {
         var  bogota = $(this).val();
       //  var periodo = $('.periodobogota').val('');
        var valores =  $('.valor_unitario').val('');
        $('.valortotla').val('')

              $.ajax({
              url: '{!!URL::to('id_bogota')!!}',
              type: 'get',
              data: {'item':bogota }, 
                 success:function(data){
                  var html_select='<option value=""  >SELECCIONE </option>';
                  for (var i = 0; i < data.length; i++) {
                     html_select+='<option value="'+data[i].periodo+'">'+data[i].periodo+'</option>';
                     //$('.periodobarranca').html(html_select);
                   $('.periodobogota').html(html_select);
                  }
                }
               
            })
    });
    $('.periodobogota').change(function(event) {
         var  bogota = $('.id_bogota').val();
         var periodo = $('.periodobogota').val();
              $.ajax({
              url: '{!!URL::to('id_bogota')!!}',
              type: 'get',
              data: {'item':bogota }, 
                 success:function(data){
                    
                  for (let i = 0; i < data.length; i++) {
                  if (data[i].periodo == periodo) {
                     
                     $('.valor_unitario').val(data[i].valor_con_aui);
                     $('.detalle').val(data[i].descripcion)

                   }
                  }
                }
               
            })
    });
   
    $('.cantidad').change(function(event) {
       var cantidad = $('.cantidad').val();
       var valor = $('.valor_unitario').val();
      // var  newvalor = valor.replace(/[. ]+/g,'').trim();
       var Total = cantidad*valor;
      // var total = new Intl.NumberFormat('es-ES').format(subTotal);
       var valores = $('.valortotla').val(Total);

    });
    var  ordendeservicio = $('.id_ordendeservicio').val();
        
        $.ajax({
        url: '{!!URL::to('id_ordendeservicio')!!}',
        type: 'get',
        data: {id:ordendeservicio },
      })
      .done(function(result) {

      $.each(result, function(index, val) {
      
        
          if (val.id == ordendeservicio) {

           $('.detalle').val(val.desc_tipo_serv+' '+val.nombre+' '+val.placa); 
          
          }
      });             })
   .fail(function() {
    //console.log("error");
   })
   .always(function() {
  // console.log("complete");
   });

 });
    </script>
@endsection
<br style="display: none">

