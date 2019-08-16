<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
      
<th>ID</th>
<th>Cod_escolta</th>
<th>Nombre</th>
<th>Estado</th>
<th>cc</th>
<!-- <th>escolta_id</th> -->
<th>Fecha_Registro</th>
<th>Año</th>
<th>Mes</th>
<th>Dia</th>
<th>Orden de Trabajo</th>
<th>Hora_inicio_en_OT</th>
<th>Hora_Final_en_OT</th>
<th>Hora_Total_en_OT</th>
<th>Hora_Inicio_Cliente</th>
<th>Hora_Final_Cliente</th>
<th>Hora_Total_Cliente</th>

<!--<th>created_at</th>
<th>updated_at</th>
<th>_token</th>
<th>_method</th>-->


<!--<th>foto</th>
<th>telefono</th>
<th>cargo</th>
<th>activo</th>-->
<th>ciudad</th>
<!--<th>bilingue</th>-->
<th>escolta_externo</th>
<th>Observacion</th>
<th>H.OT</th>
<th>H.Cliente</th>










    </tr>
  </thead>
  <tbody>

    @foreach($index as $row)
    <tr>


  <td>{{$row->id}}</td>
  <td>{{$row->escolta_id}}</td>
   <td>{{$row->nombre}}</td>
   <td><?php $var = App\estadocontrolhorario::find($row->estadocontrol); echo $var->estadocontrol; ?></td>
   <td>{{$row->cc}}</td>
  <td>
  <?php  $date = Carbon\Carbon::parse($row->Fecha_Registro);
  echo $date->format('Y-m-d'); 

  ?>
  </td>
  <td><?php  $date = Carbon\Carbon::parse($row->Fecha_Registro);
  echo $date->format('Y');?></td>
  <td><?php  $date = Carbon\Carbon::parse($row->Fecha_Registro);
  echo $date->format('m'); ?></td>
   <td><?php  $date = Carbon\Carbon::parse($row->Fecha_Registro);
  echo $date->format('d'); ?></td>
  <td>{{$row->wo_id}}</td>
  <td>{{$row->Hora_inicio_en_OT}}</td>
  <td>{{$row->Hora_Final_en_OT}}</td>
  <td>{{$row->Horas_Total_OT}}</td>
  <td>{{$row->Hora_de_inicio_Servicio_cliente}}</td>
  <td>{{$row->Hora_Final_del_Servicio_Cliente}}</td>
  <td>{{$row->Total_Horas_del_Servicio}}</td>
  
   
  <td>{{$row->ciudad}}</td>
  <td>{{$row->escolta_externo}}</td>
  <td>{{$row->Observacion}}</td>
  <td><?php $hora = Carbon\Carbon::parse($row->Horas_Total_OT);

  $MinutosHora = $hora->hour * 60;
  $Minutos = $hora->minute;
  
  $TotalMinutos = $MinutosHora + $Minutos;
  
  echo $TotalMinutos / 60  ?></td>

  <td><?php $horas = Carbon\Carbon::parse($row->Total_Horas_del_Servicio);

  $MinutosHora = $horas->hour * 60;
  $Minutos = $horas->minute;
  
  $TotalMinutos = $MinutosHora + $Minutos;
  
  echo $TotalMinutos / 60  ?></td>

 











    </td></td>

  </tr>
</tbody>

@endforeach


</table>