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

<div class="form-group">
    <label for="id">Fecha Registro</label>
   <input type="date" class="form-control" name="Fecha_Registro"  id="Fecha_Registro" placeholder="Fecha_Registro" value="<?php $date = new DateTime();
echo $date->format('Y-m-d'); ?>" required>
  </div>
  
<div class="row">
    

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="time" class="form-control" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT" >
  </div>
</div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="time" class="form-control" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_inicio_en_OT">
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
