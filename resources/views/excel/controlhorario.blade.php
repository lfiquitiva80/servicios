
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
      
<th>ID</th>
<th>Cod_escolta</th>
<th>cc</th>
<th>Escolta</th>

<th>Estado</th>


<th>Fecha_Registro</th>
<th>Año</th>
<th>Mes</th>
<th>Dia</th>
<th>Orden de Trabajo</th>
<th>Hora_inicio_en_OT</th>
<th>Hora_Inicio_Cliente</th>
<th>Hora_Final_Cliente</th>
<th>Hora_Final_en_OT</th>

<th>Hora_Total_en_OT</th>
<th>Hora_Total_Cliente</th>
<th>ciudad</th>
<th>escolta_externo</th>
<th>Cedula Escolta Relevo</th>
<th>Escolta Relevo</th>
<th>Observacion</th>
<th>H.OT</th>
<th>H.Cliente</th>
<th>Nombre Cliente</th>
<th>Centro de Costos</th>
<th>Descripcion Centro de Costos</th>
<th>Servicio Fijo</th>
<th>Registro Usuario</th>
<th>Fecha de Creación</th>









    </tr>
  </thead>
  
    @foreach($index as $row)

    <tbody>
    <tr>


  <td>{{$row->id}}</td>
  <td>{{$row->escolta_id}}</td>
  <td>{{$row->cc}}</td>
  <td>{{$row->nombre}}</td>
   <td><?php $var = App\estadocontrolhorario::find($row->estadocontrol); echo $var->estadocontrol; ?></td>
   
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
  <td>{{$row->No_de_orden_de_servicio}}</td>
  <td>{{$row->Hora_inicio_en_OT}}</td>
  <td>{{$row->Hora_de_inicio_Servicio_cliente}}</td>
  <td>{{$row->Hora_Final_del_Servicio_Cliente}}</td>
  <td>{{$row->Hora_Final_en_OT}}</td>
  <td>{{$row->Horas_Total_OT}}</td>
  <td>{{$row->Total_Horas_del_Servicio}}</td>
  
   
  <td>{{$row->ciudad}}</td>
  <td>{{$row->escolta_externo}}</td>
  <td> <?php  $var2 = App\escolta::findOrFail($row->EscRelevo_id); echo $var2->cc; ?> </td>
   <td> <?php  $var2 = App\escolta::findOrFail($row->EscRelevo_id); echo $var2->nombre; ?> </td>
  <td>{{$row->Observacion}}</td>
  <td><?php $hora = Carbon\Carbon::parse($row->Horas_Total_OT);

  $MinutosHora = $hora->hour * 60;
  $Minutos = $hora->minute;
  
  $TotalMinutos = $MinutosHora + $Minutos;
  
  echo $TotalMinutos / 60  ?></td>

  <td><?php $horas = Carbon\Carbon::parse($row->Total_Horas_del_Servicio);

    $Minutos = $horas->minute;
  
  $TotalMinutos = $MinutosHora + $Minutos;
  
  echo $TotalMinutos / 60  ?></td>
  <td>{{$row->NombreCliente}}</td>
  <td>{{$row->centro_de_costos ?? '5511'}}</td>
  <td>{{$row->DescripcionCentro ?? 'ESCOLTAS DISPONIBLES'}}</td>
  <td>{{$row->servicioFijo == 1 ? 'Es un servicio Fijo' : 'Es un servicio Adicional'}}</td>
  <td> <?php  $var = App\user::findOrFail($row->id_usuario); echo $var->name; ?> </td>
  <td>{{$row->created_at}}</td>
  
  
  
 











  

  </tr>
</tbody>

@endforeach


</table>