@component('mail::message')
# <div style="color: red">[¡Alerta!]  La Licencia Se Vence Dentro De Veinte Días</div>



<div>
   
    Placa de vehiculo: {{ $placa }}<br>
    Fecha SOAT : {{ $fecha_soat }}<br>
    Fecha licencia: <b>{{ $fecha_licencia }}</b><br>
    Fecha poliza : {{ $fecha_poliza }}<br>
    Fecha tecnomecanica: {{ $fecha_tecnomecanica }}<br>
    Rentadora :{{$rentadora}} <br>
    Tipo de rentadora : {{$tipo_de_rentadora}} <br>
    Armadura : {{$aramadura}} <br>
    Color: {{ $color}} <br>


</div>



{{-- @component('mail::button', ['url' => route('Vehiculo.edit', $id),'color' => 'blue'])

@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}

<small>Sistema Command Center </small>
@endcomponent