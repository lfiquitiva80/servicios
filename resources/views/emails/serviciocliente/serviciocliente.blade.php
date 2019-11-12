@component('mail::message')
# Solicitud Servicio Adicional por el Cliente

##Estimando(a) : <?php $usuario = \App\User::find($users_id); echo $usuario->name; ?><br>


A continuación relacionamos la información para el servicio adicional enviada a Omnitempus.


<div>

	  @component('mail::panel')
    <strong>Orden de Trabajo : </strong>{{ $wo }}<br>
      @endcomponent


    <strong>Cliente:</strong> <?php $cliente = \App\cliente::find($cliente); echo $cliente->nombre; ?><br>
    <strong>Ciudad Destino: </strong>{{ $ciudad_destino }}<br>
    <strong>Fecha Solicitud:</strong> {{ $fecha_solicitud }}<br>
    <strong>Fecha Inicio Servicio:</strong> {{ $fecha_inicio_servicio }}<br>
    <strong>Fecha Final Servicio:</strong> {{ $fecha_final_servicio }}<br>
    <strong>Bilingue:</strong> {{$bilingue}}<br>
    <strong>Arma:</strong> <?php $arma = \App\armas::find($arma_id); echo $arma->descripcion; ?><br>
    <strong>Tipo de Vehículo:</strong> <?php $vehiculo = \App\tipodevehiculo::find($tipo); echo $vehiculo->descripcion_tipo_vehiculo; ?><br>
    <strong>Tipo de Servicio:</strong> <?php $servicio = \App\tiposervicio::find($tipo_de_servicio); echo $servicio->desc_tipo_serv; ?><br>
    <strong>Detalle del servicio: </strong><br>{{ $detalle_del_servicio }}<br>

    
   

</div>



<br><br><br><br>


Thanks,<br>

<b>SECURITY PROFESSIONAL ASSIGNED TO YOUR SERVICE</b>
<b>EMERGENCY LINE 24 HOURS</b>
<b>+57 6110638</b>
<b>MOBILE 315-350-4895 </b>
@endcomponent