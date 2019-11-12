<div class="modal fade" id="crear_controlhorario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">REGISTRAR CONTROL DE USUARIO</h4>
            </div>
            <div class="modal-body">




{!! Form::open(['route' => 'controlhorario.store', 'method'=>'POST','id'=>'#FormCreateControl']) !!}

<div class="form-group">
    <label for="id">Escolta Asignado</label>
    {!! Form::select('escolta_id',$escolta, null , ['class' => 'form-control', 'name' =>'escolta_id' ,'id'=>'escolta_id', 'placeholder' => 'Selecione un escolta...', 'required']) !!}
  </div>

  <div class="form-group">
    <label for="id">Estado Control Horario</label>
    {!! Form::select('estadocontrol',$estadocontrolhorario, null , ['class' => 'form-control', 'name' =>'estadocontrol' ,'id'=>'estadocontrol', 'placeholder' => 'Selecione un estado...', 'required']) !!}
  </div>

  <div class="form-group relevo" >
    <label for="id">Escolta Relevo</label>
    {!! Form::select('EscRelevo_id',$escolta, 1 , ['class' => 'form-control', 'name' =>'EscRelevo_id' ,'id'=>'EscRelevo_id', 'placeholder' => 'Selecione un escolta Relevo...', 'required']) !!}
  </div>

<div class="form-group">
    <label for="id">Fecha Registro</label>
   <input type="date" class="form-control" name="Fecha_Registro"  id="Fecha_Registro" placeholder="Fecha_Registro" max="<?php $date = new DateTime();
echo $date->format('Y-m-d'); ?>" value="<?php $date = new DateTime();
echo $date->format('Y-m-d'); ?>" required>
  </div>

<!--   <div class="form-group">
    <label for="id">No_de_orden_de_servicio</label>
    {!! Form::select('wo_id', $wo, 1, ['class'=>'form-control']) !!}
  </div> -->

   <div class="form-group">
    <label for="id">No_de_orden_de_servicio</label>
    {!! Form::select('ordenesdeservicio_id', $ordenesdeservicio, null, ['class'=>'form-control', 'placeholder' => 'Seleccione la Orden de Trabajo...']) !!}
  </div>

   <div class="form-group">
<label for="id">Es un servicio fijo?</label>
{!! Form::select('servicioFijo',[ '1'=>'Es un Servicio Fijo', '0' =>'Es un Servicio Adicional'],null,['class'=> 'form-control','id' => 'serviciofijo','name'=>'servicioFijo','placeholder' => 'Seleccione...','required'] )!!}
</div>       
  
<div class="row">

    <div class="panel panel-primary">
  <div class="panel-heading">Horas en Omnitempus</div>
  <div class="panel-body">
    

    
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="time" class="form-control horas1" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT" value="00:00">
  </div>
</div>

 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="time" class="form-control horas1" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_inicio_en_OT" value="00:00">
      </div>
   </div>

 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">Horas Total OT</label>
    <input type="time" class="form-control" name="Horas_Total_OT"  id="Horas_Total_OT" placeholder="" readonly value="00:00">
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
    <input type="time" class="form-control horas" name="Hora_de_inicio_Servicio_cliente"  id="Hora_de_inicio_Servicio_cliente" placeholder="Hora_inicio_en_OT" value="00:00">
      </div>
   </div>

     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">H. Final. Cliente</label>
    <input type="time" class="form-control horas " name="Hora_Final_del_Servicio_Cliente"  id="Hora_Final_del_Servicio_Cliente" placeholder="Hora_inicio_en_OT" value="00:00">
      </div>
   </div>

     <div class="col-xs-4col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
    <label for="id">H.Total Cliente</label>
    <input type="time" class="form-control" name="Total_Horas_del_Servicio"  id="Total_Horas_del_Servicio" placeholder="Total_Horas_del_Servicio" readonly value="00:00">
      </div>
   </div>

     <div class="form-group" >
      <center><b>Registro de Usuario: </b> {{Auth::user()->name}} </center>
   
        <input type="hidden" class="form-control" name="id_usuario"  id="id_usuario" value="{{Auth::user()->id}}"> 
    </div>

    </div>
</div>
   


   
</div>

{!! Form::textarea('Observacion', null, ['class' => 'form-control', 'name' =>'Observacion' ,'id'=>'Observacion', 'placeholder' => 'Digite una observación..']) !!}

    <center><button type="submit" class="btn btn-primary" >Enviar</button>
    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

{!! Form::close() !!}


  </div>
</div>

</div>
</div>


<script type="text/javascript">
  
  $(function() {


   //calculo total de horas

    $('.horas').change(function(event) {
      /* Act on the event */



      var horainicial = $('#Hora_de_inicio_Servicio_cliente').val();
      console.log(horainicial);
      var horafinal = $('#Hora_Final_del_Servicio_Cliente').val();
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


  $('#Total_Horas_del_Servicio').val(result);





    });


    $('.horas1').change(function(event) {
      /* Act on the event */



      var horainicial = $('#Hora_inicio_en_OT').val();
      console.log(horainicial);
      var horafinal = $('#Hora_Final_en_OT').val();
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


  $('#Horas_Total_OT').val(result);





    });

      $('.relevo').hide();

  $('#estadocontrol').change(function(event) {
    
    
   var estado= $('#estadocontrol').val();

   if (estado==3) {
      confirm('Por favor seleccionar el Escolta Relevo');

      $('.relevo').show();
      $('#EscRelevo_id option:selected').remove();
   }else {
    
    
    $('.relevo').hide();
   }

  });      

    });

  </script>