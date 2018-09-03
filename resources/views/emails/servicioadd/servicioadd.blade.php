@component('mail::message')
# Ingreso de una nueva solicitud

##Ingreso el siguiente servicio a Command Center:

<div>
    cliente: <?php $cliente = \App\cliente::find($cliente); echo $cliente->nombre; ?><br>
    Orden de Trabajo : {{ $wo }}<br>
    ciudad_destino: {{ $ciudad_destino }}<br>
    fecha_solicitud: {{ $fecha_solicitud }}<br>
    fecha_inicio_servicio: {{ $fecha_inicio_servicio }}<br>
    detalle_del_servicio: {{ $detalle_del_servicio }}<br>
    Usuario: <?php $usuario = \App\User::find($users_id); echo $usuario->name; ?><br>
   

</div>

<?php $url = route('ordenesdeservicio.edit',$id) ?>

@component('mail::button', ['url' => $url])
Programar
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
