<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>

      <th>id</th>
      <th>Orden de Servicio</th>
      <th>Estado del Servicio</th>
      <th>fecha_inicio_servicio</th>
      <th>Fecha Inicio Servicio</th>
      <th>Hora Inicio Servicio</th>
      <th>Hora_inicio_en_OT</th>
      <th>Hora_Final_en_OT</th>
      <th>Hora_Programada</th>
      <th>Hora_de_inicio_Servicio_cliente</th>
      <th>Hora_Final_del_Servicio_Cliente</th>
      <th>Total_Horas_del_Servicio</th>
      <th>Nombre del Escolta</th>
      <th>Cédula</th>
      <th>cargo</th>
      <th>ciudad</th>
      <th>escolta_externo</th>
      <th>bilingue</th>
      <th>Avantel</th>
      <th>placa</th>
      <!-- <th>tipo Vehiculo</th> -->
      <!-- <th>descripcion_tipo_vehiculo</th>
      <th>cliente</th> -->
      <th>Nombre cliente</th>
      
      <th>desc_solic_interno</th>
      <th>solicitante_cliente</th>
      <th>ciudad_origen</th>
      <th>ciudad_destino</th>
      <th>fecha_solicitud</th>
      <th>Fecha_de_respuesta_al_cliente</th>
      <!-- <th>tipo_de_servicio</th> -->
      <th>desc_tipo_serv</th>
      <th>detalle_del_servicio</th>
      <th>novedades</th>
      <th>Propuesta Económica</th>
      <th>rentadora</th>
      <th>tipo_de_renta</th>
      <th>armadura</th>
      <th>descripcion</th>
      <th>color</th>
      <th>activo</th>
      <th>nit</th>
      <th>Solicitante_cliente</th>
      <th>telefono</th>
      <th>email</th>
      <th>notas</th>
      <th>coordinador</th>
      <!-- <th>users_id</th> -->
      <th>Usuario Registro</th>
      <th>created_at</th>
      <th>updated_at</th>










    </tr>
  </thead>
  <tbody>

    @foreach($index as $row)
    <tr>


      <td>{{$row->id}}</td>
      <td>{{$row->No_de_orden_de_servicio}}</td>
      <td>{{$row->estadoservicio}}</td>
      <td>{{$row->fecha_inicio_servicio}}</td>
            <td><?php  $date = Carbon\Carbon::parse($row->fecha_inicio_servicio);
  echo $date->toDateString();?></td>
      <td><?php  $date = Carbon\Carbon::parse($row->fecha_inicio_servicio);
      echo $date->toTimeString();?></td>
      <td>{{$row->Hora_inicio_en_OT}}</td>
      <td>{{$row->Hora_Final_en_OT}}</td>
      <td>{{$row->Hora_Programada}}</td>
      <td>{{$row->Hora_de_inicio_Servicio_cliente}}</td>
      <td>{{$row->Hora_Final_del_Servicio_Cliente}}</td>
      <td>{{$row->Total_Horas_del_Servicio}}</td>
      <!-- <td>{{$row->Escolta_asignado}}</td> -->
      <td>{{$row->nombre}}</td>
      <td>{{$row->cc}}</td>
      <td>{{$row->cargo}}</td>
      <td>{{$row->ciudad}}</td>
      <td>{{$row->escolta_externo}}</td>
      <td>{{$row->bilingue}}</td>
      <td>{{$row->ID2}}</td>
      <td>{{$row->placa}}</td>
      <td><?php $clientes = App\cliente::find($row->cliente); echo $clientes->nombre; ?></td>
      <td>{{$row->descripcion_solicitante}}</td>
      <td>{{$row->solicitante_interno2}}</td>
      <td>{{$row->ciudad_origen}}</td>
      <td>{{$row->ciudad_destino}}</td>
      <td>{{$row->fecha_solicitud}}</td>
      <td>{{$row->Fecha_de_respuesta_al_cliente}}</td>
     
      <td>{{$row->desc_tipo_serv}}</td>
      <td>{{$row->detalle_del_servicio}}</td>
      <td>{{$row->novedades}}</td>
      <td>{{$row->propuesta_economica}}</td>
     
      <td>{{$row->rentadora}}</td>
      <td>{{$row->tipo_de_renta}}</td>
      <td>{{$row->armadura}}</td>
      <td>{{$row->descripcion}}</td>
      <td>{{$row->color}}</td>
      <td>{{$row->activo}}</td>
      <td>{{$row->nit}}</td>
      <td>{{$row->solicitante}}</td>
      <td>{{$row->telefono}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->notas}}</td>
      <td>{{$row->coordinador}}</td>
      
      <td>{{$row->name}}</td>
      <td>{{$row->created_at}}</td>
      <td>{{$row->updated_at}}</td>











    </td></td>

  </tr>
</tbody>

@endforeach


</table>