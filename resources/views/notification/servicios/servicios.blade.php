@component('mail::message')
# Notificación de Alerta de Servicio

Notificar urgente al escolta, para el servicio xxxx

@component('mail::button', ['url' => ''])
Servicio Urgente
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
