
<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
<th>id</th>
<th>No_de_orden_de_servicio</th>
<th>estadoservicio_id</th>
<th>fecha_inicio_servicio</th>
<th>Hora_inicio_en_OT</th>
<th>Hora_Final_en_OT</th>
<th>Hora_Programada</th>
<th>Hora_de_inicio_Servicio_cliente</th>
<th>Hora_Final_del_Servicio_Cliente</th>
<th>Total_Horas_del_Servicio</th>
<th>Escolta_asignado</th>
<th>cedula</th>
<th>escolta_externo</th>
<th>bilingue</th>
<th>ID2</th>
<th>placa</th>
<th>tipo</th>
<th>cliente</th>
<th>vip</th>
<th>solicitante_cliente</th>
<th>solicitante_interno</th>
<th>ciudad_origen</th>
<th>ciudad_destino</th>
<th>fecha_solicitud</th>
<th>Fecha_de_respuesta_al_cliente</th>
<th>tipo_de_servicio</th>
<th>detalle_del_servicio</th>
<th>novedades</th>
<th>px</th>
<th>armado</th>
<th>tipo_renta</th>
<th>Proveedor_vehiculo</th>
<th>prefactura</th>
<th>fecha_prefactura</th>
<th>observaciones</th>
<th>tiempo_rta_cliente</th>
<th>tiempo_prefactura</th>
<th>created_at</th>
<th>updated_at</th>
<th>_method</th>
<th>_token</th>
<th>users_id</th>
<th>nit</th>
<th>nombre</th>
<th>solicitante</th>
<th>telefono</th>
<th>email</th>
<th>notas</th>
<th>activo</th>
<th>coordinador</th>
<th>foto</th>
<th>rentadora</th>
<th>tipo_de_renta</th>
<th>estadoservicio</th>
<th>name</th>
<th>password</th>
<th>remember_token</th>


    </tr>
  </thead>
  <tbody>

  @foreach($agenda as $row)
    <tr>

<td>{{$row->id}}</td>
<td>{{$row->No_de_orden_de_servicio}}</td>
<td>{{$row->estadoservicio_id}}</td>
<td>{{$row->fecha_inicio_servicio}}</td>
<td>{{$row->Hora_inicio_en_OT}}</td>
<td>{{$row->Hora_Final_en_OT}}</td>
<td>{{$row->Hora_Programada}}</td>
<td>{{$row->Hora_de_inicio_Servicio_cliente}}</td>
<td>{{$row->Hora_Final_del_Servicio_Cliente}}</td>
<td>{{$row->Total_Horas_del_Servicio}}</td>
<td>{{$row->Escolta_asignado}}</td>
<td>{{$row->cedula}}</td>
<td>{{$row->escolta_externo}}</td>
<td>{{$row->bilingue}}</td>
<td>{{$row->ID2}}</td>
<td>{{$row->placa}}</td>
<td>{{$row->tipo}}</td>
<td>{{$row->cliente}}</td>
<td>{{$row->vip}}</td>
<td>{{$row->solicitante_cliente}}</td>
<td>{{$row->solicitante_interno}}</td>
<td>{{$row->ciudad_origen}}</td>
<td>{{$row->ciudad_destino}}</td>
<td>{{$row->fecha_solicitud}}</td>
<td>{{$row->Fecha_de_respuesta_al_cliente}}</td>
<td>{{$row->tipo_de_servicio}}</td>
<td>{{$row->detalle_del_servicio}}</td>
<td>{{$row->novedades}}</td>
<td>{{$row->px}}</td>
<td>{{$row->armado}}</td>
<td>{{$row->tipo_renta}}</td>
<td>{{$row->Proveedor_vehiculo}}</td>
<td>{{$row->prefactura}}</td>
<td>{{$row->fecha_prefactura}}</td>
<td>{{$row->observaciones}}</td>
<td>{{$row->tiempo_rta_cliente}}</td>
<td>{{$row->tiempo_prefactura}}</td>
<td>{{$row->created_at}}</td>
<td>{{$row->updated_at}}</td>
<td>{{$row->_method}}</td>
<td>{{$row->_token}}</td>
<td>{{$row->users_id}}</td>
<td>{{$row->nit}}</td>
<td>{{$row->nombre}}</td>
<td>{{$row->solicitante}}</td>
<td>{{$row->telefono}}</td>
<td>{{$row->email}}</td>
<td>{{$row->notas}}</td>
<td>{{$row->activo}}</td>
<td>{{$row->coordinador}}</td>
<td>{{$row->foto}}</td>
<td>{{$row->rentadora}}</td>
<td>{{$row->tipo_de_renta}}</td>
<td>{{$row->estadoservicio}}</td>
<td>{{$row->name}}</td>
<td>{{$row->password}}</td>
<td>{{$row->remember_token}}</td>

      </tr>

  @endforeach     
  </tbody>




</table>



