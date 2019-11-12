
<div class="modal fade" id="editarcontrolhorario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR CONTROL DE HORARIO</h4>
            </div>
            <div class="modal-body">



<form class="" action="{{route('controlhorario.update', 'id' )}}"   method="post" id="reg_form3">

  {{method_field('patch')}}
  {{csrf_field()}}

<input type="hidden" id="id"  name="id" value="">


<div class="form-group">
    <label for="id">Escolta Asignado</label>
    {!! Form::select('escolta_id',$escolta, null , ['class' => 'form-control', 'name' =>'escolta_id' ,'id'=>'escolta_id', 'placeholder' => 'Selecione un escolta...','required']) !!}
  </div>

 <div class="form-group">
    <label for="id">Estado Control Horario</label>
    {!! Form::select('estadocontrol',$estadocontrolhorario, null , ['class' => 'form-control', 'name' =>'estadocontrol' ,'id'=>'estadocontrol', 'placeholder' => 'Selecione un estado...', 'required']) !!}
  </div>

<div class="form-group">
    <label for="id">Escolta Relevo</label>
    {!! Form::select('EscRelevo_id',$escolta, null , ['class' => 'form-control', 'name' =>'EscRelevo_id' ,'id'=>'EscRelevo_id', 'placeholder' => 'Selecione un escolta Relevo...', 'required']) !!}
  </div>   

<div class="form-group">
    <label for="id">Fecha Registro</label>
   <input type="text" class="form-control" name="Fecha_Registro"  id="Fecha_Registro2" placeholder="Fecha_Registro" readonly>
  </div>

<!-- <div class="form-group">
    <label for="id">No_de_orden_de_servicio</label>
    {!! Form::select('wo_id', $wo, null, ['class'=>'form-control', 'id' => 'wo']) !!}
  </div> -->

     <div class="form-group">
    <label for="id">No_de_orden_de_servicio</label>
    {!! Form::select('ordenesdeservicio_id', $ordenesdeservicio, null, ['class'=>'form-control', 'placeholder' => 'Seleccione la Orden de Trabajo...','id'=>'ordenesdeservicio_id']) !!}
  </div>

     <div class="form-group">
<label for="id">Es un servicio fijo?</label>
{!! Form::select('servicioFijo',[ '1'=>'Si es un Servicio Fijo', '0' =>'No es un Servicio Fijo'],null,['class'=> 'form-control','id' => 'serviciofijo','name'=>'servicioFijo','placeholder' => 'Seleccione...'] )!!}
</div>     
  
<div class="row">

    <div class="panel panel-primary">
  <div class="panel-heading">Horas en Omnitempus</div>
  <div class="panel-body">
    

    
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="time" class="form-control horas3" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OTa" placeholder="Hora_inicio_en_OT" >
  </div>
</div>

 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="time" class="form-control horas3" name="Hora_Final_en_OT"  id="Hora_Final_en_OTa" placeholder="Hora_inicio_en_OT">
      </div>
   </div>

 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Horas Total OT</label>
    <input type="time" class="form-control" name="Horas_Total_OT"  id="Horas_Total_OTa" placeholder="" readonly>
      </div>
   </div> 
     </div>  

       </div>



  <div class="panel panel-primary">
  <div class="panel-heading">Horas Cliente</div>
  <div class="panel-body">
 
 

  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">H. Inicio Cliente</label>
    <input type="time" class="form-control horas2" name="Hora_de_inicio_Servicio_cliente"  id="Hora_de_inicio_Servicio_clientea" placeholder="Hora_inicio_en_OT">
      </div>
   </div>

     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">H. Final. Cliente</label>
    <input type="time" class="form-control horas2 " name="Hora_Final_del_Servicio_Cliente"  id="Hora_Final_del_Servicio_Clientea" placeholder="Hora_inicio_en_OT">
      </div>
   </div>

     <div class="col-xs-4col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">H.Total Cliente</label>
    <input type="time" class="form-control" name="Total_Horas_del_Servicio"  id="Total_Horas_del_Servicioa" placeholder="Total_Horas_del_Servicio" readonly>
      </div>
   </div>

  <div class="form-group" >
    <label for="id">Registro de Usuario</label>
    {!! Form::select('id_usuario',$usuario, null , ['class' => 'form-control', 'name' =>'id_usuario' ,'id'=>'id_usuario','disabled']) !!}
  </div>


    </div>
</div>
   


   
</div>
{!! Form::textarea('Observacion', null, ['class' => 'form-control', 'name' =>'Observacion' ,'id'=>'Observacion', 'placeholder' => 'Digite una observación..', 'required']) !!}

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>

</form>


  </div>
</div>



</div>
</div>



<script type="text/javascript">
  
  $(function() {


   //calculo total de horas

    $('.horas2').change(function(event) {
      /* Act on the event */

      

      var horainicial = $('#Hora_de_inicio_Servicio_clientea').val();
      console.log(horainicial);
      var horafinal = $('#Hora_Final_del_Servicio_Clientea').val();
      console.log(horafinal);

      // creamos una fecha genérica con tu tiempo
var d = new Date("0001-01-01T"+horainicial);
var e = new Date("0001-01-01T"+horafinal);

// calculamos los minutos a partir de las horas y minutos de la fecha creada
var minutosinicial = d.getHours() * 60 + d.getMinutes();
var minutosfinal= e.getHours() * 60 + e.getMinutes();

if (minutosfinal<minutosinicial) {
    var resultado = (1440-minutosinicial)+minutosfinal;
    console.log(resultado);
} else {
  var resultado = minutosfinal-minutosinicial;
}


var minutes = Math.floor( resultado / 60 );
var seconds = resultado % 60;

//Anteponiendo un 0 a los minutos si son menos de 10
minutes = minutes < 10 ? '0' + minutes : minutes;

//Anteponiendo un 0 a los segundos si son menos de 10
seconds = seconds < 10 ? '0' + seconds : seconds;

var result = minutes + ":" + seconds;  // 161:30


  $('#Total_Horas_del_Servicioa').val(result);


    });


$('.horas3').change(function(event) {
      /* Act on the event */



      var horainicial = $('#Hora_inicio_en_OTa').val();
      console.log(horainicial);
      var horafinal = $('#Hora_Final_en_OTa').val();
      console.log(horafinal);

      // creamos una fecha genérica con tu tiempo
var d = new Date("0001-01-01T"+horainicial);
var e = new Date("0001-01-01T"+horafinal);

// calculamos los minutos a partir de las horas y minutos de la fecha creada
var minutosinicial = d.getHours() * 60 + d.getMinutes();
var minutosfinal= e.getHours() * 60 + e.getMinutes();

if (minutosfinal<minutosinicial) {
    var resultado = (1440-minutosinicial)+minutosfinal;
    console.log(resultado);
} else {
  var resultado = minutosfinal-minutosinicial;
}


var minutes = Math.floor( resultado / 60 );
var seconds = resultado % 60;

//Anteponiendo un 0 a los minutos si son menos de 10
minutes = minutes < 10 ? '0' + minutes : minutes;

//Anteponiendo un 0 a los segundos si son menos de 10
seconds = seconds < 10 ? '0' + seconds : seconds;

var result = minutes + ":" + seconds;  // 161:30


  $('#Horas_Total_OTa').val(result);





    });    


    });

</script>