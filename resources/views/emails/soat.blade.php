@component('mail::message')
# <div style="color: red">[¡Alerta!]  El Soat Se Vence Dentro De Veinte Días</div>



<div>
   
    Placa de vehiculo: {{ $placa }}<br>
    Fecha SOAT : <b>{{ $fecha_soat }}</b><br>
    Fecha licencia: {{ $fecha_licencia }}<br>
    Fecha poliza : {{ $fecha_poliza }}<br>
    Fecha tecnomecanica: {{ $fecha_tecnomecanica }}<br>
    Rentadora :{{$rentadora}} <br>
    Tipo de rentadora : {{$tipo_de_rentadora}} <br>
    Armadura : {{$aramadura}} <br>
    Color: {{ $color}} <br>


</div>


{{-- @component('mail::button', ['url' => $url, 'color' => 'blue'])
Vehiculo
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}

<small>Sistema Command Center </small>
@endcomponent