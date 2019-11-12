@component('mail::message')
# <div style="color: red">[¡Alerta!]  La Poliza Se Vence Dentro De Veinte Días</div>



<div>
   
    Placa de vehiculo: {{ $placa }}<br>
    Fecha SOAT : {{ $fecha_soat }}<br>
    Fecha licencia: {{ $fecha_licencia }}<br>
    Fecha poliza : <b>{{ $fecha_poliza }}</b><br>
    Fecha tecnomecanica: {{ $fecha_tecnomecanica }}<br>
    Rentadora :{{$rentadora}} <br>
    Tipo de rentadora : {{$tipo_de_rentadora}} <br>
    Armadura : {{$aramadura}} <br>
    Color: {{ $color}} <br>


</div>



{{-- @component('mail::button', ['url' => $url, 'color' => 'blue'])
Vehiculo 
@endcomponent
--}}
Thanks,<br>
{{ config('app.name') }}

<small>Sistema Command Center </small>
@endcomponent