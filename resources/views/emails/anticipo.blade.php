<?php
use App\estadoservicio;
use App\cliente;
use App\vehiculo;
use App\escolta;
use Carbon\Carbon;


$estadoservicio = estadoservicio::find($Estado);
$escolta = escolta::find($Escolta);
$vehiculo =vehiculo::find($Vehiculo);
$cliente = cliente::find($Cliente);

$Fechaincioservicio =  Carbon::createFromFormat('Y-m-d\TH:i',$fechaincio);
$Fechasolicitud = Carbon::createFromFormat('Y-m-d\TH:i',$fecha_solicitud);

?>

@component('mail::message')
# Nueva solicitud de Anticipo <br>

## INFORMACIÓN DE LA ORDEN DE SERVICIÓ:

<div>
   
    No de orden de servicio : <b>{{ $numero }}</b><br>
    Estado de servicio: {{ $estadoservicio->estadoservicio }}<br>
    Fecha incio servicio : {{$Fechaincioservicio}}<br>
    Fecha solicitud : {{$Fechasolicitud}} <br>
    Escolta : {{$escolta->nombre}} <br>
    Vehiculo: {{$vehiculo->placa}} <br>
    Cliente:  {{$escolta->nombre}} <br>
    Solicitante: {{$solicitante}}  <br>
    Detalle del servicio {{$detalle_del_servicio}} <br>
</div>


<?php $url = route('ordenesdeservicio.edit',$id) ?>

@component('mail::button', ['url' => $url])
MÁS INFORMACIÓN       
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent