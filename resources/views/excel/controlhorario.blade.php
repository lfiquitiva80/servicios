<table class="table table-hover" border="1" id="Eventos">
  <thead>
    <tr>
<th>Nombre</th>
<th>Estado</th>
<th>cc</th>
<!-- <th>escolta_id</th> -->
<th>Fecha_Registro</th>
<th>Hora_inicio_en_OT</th>
<th>Hora_Final_en_OT</th>

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









    </tr>
  </thead>
  <tbody>

    @foreach($index as $row)
    <tr>


 
  <!--<td>{{$row->escolta_id}}</td>-->
   <td>{{$row->nombre}}</td>
   <td>{{$row->estadocontrol}}</td>
   <td>{{$row->cc}}</td>
  <td>
  <?php  $date = Carbon\Carbon::parse($row->Fecha_Registro);
  echo $date->format('Y-m-d'); 

  ?>
  </td>
  <td>{{$row->Hora_inicio_en_OT}}</td>
  <td>{{$row->Hora_Final_en_OT}}</td>
  
   
  <td>{{$row->ciudad}}</td>
  <td>{{$row->escolta_externo}}</td>
  <td>{{$row->Observacion}}</td>











    </td></td>

  </tr>
</tbody>

@endforeach


</table>