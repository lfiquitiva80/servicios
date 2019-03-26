
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
    <label for="id">Fecha Registro</label>
   <input type="text" class="form-control" name="Fecha_Registro"  id="Fecha_Registro2" placeholder="Fecha_Registro" readonly>
  </div>
  
<div class="row">
    

  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
    <label for="id">Hora_inicio_en_OT</label>
    <input type="time" class="form-control" name="Hora_inicio_en_OT"  id="Hora_inicio_en_OT" placeholder="Hora_inicio_en_OT" required>
  </div>
</div>

 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
    <label for="id">Hora_Final_en_OT</label>
    <input type="time" class="form-control" name="Hora_Final_en_OT"  id="Hora_Final_en_OT" placeholder="Hora_inicio_en_OT" required>
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
