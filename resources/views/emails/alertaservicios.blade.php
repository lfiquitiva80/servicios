@component('mail::message')
# <div style="color: red">[¡Alerta!] Servicio Dentro de Dos Horas</div>



<div>
    cliente: <?php $cliente = \App\cliente::find($cliente); echo $cliente->nombre; ?><br>
    Orden de Trabajo : <b>{{ $wo }}</b><br>
    ciudad_destino: {{ $ciudad_destino }}<br>
    fecha_solicitud: {{ $fecha_solicitud }}<br>
    fecha_inicio_servicio: {{ $fecha_inicio_servicio }}<br>
    detalle_del_servicio: {{ $detalle_del_servicio }}<br>
    Usuario: <?php $usuario = \App\User::find($users_id); echo $usuario->name; ?><br>
   

</div>

<?php $url = route('ordenesdeservicio.edit',$id) ?>

@component('mail::button', ['url' => $url, 'color' => 'red'])
Click para ir a la W.O.
@endcomponent

Thanks,<br>
{{ config('app.name') }}

<small>Desarrollado por el Ing. Leonidas Fiquitiva Castro</small>
@endcomponent