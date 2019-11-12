
<?php

   $cuenta= substr($puc_cuenta,0,2);
   
  $conca = $descripcion.'-'.$cuenta;
  
  
?>
 
<a class="btn btn-success Edit" data-toggle="modal" data-target="#editar_provision"  data-id="{{$id}}" data-proveedor="{{$id_proveedor}}" data-nameproveedor ="{{$nombreproveedor}}"data-costos="{{$id_costos}}" data-namecliente ="{{$nombrecliente}}" data-centro="{{$centrocostos}}" data-ot="{{$id_ot}}" data-cc="{{$cc}}" data-puc="{{$id_puc}}" @if ($cuenta == 74 )  data-descripciondos="" data-ados="" data-auno ="{{$cuenta}}"  data-descripcionuno="{{$conca}}"  @else data-auno="" data-descripcionuno=""  data-ados="{{$cuenta}}" data-descripciondos="{{$conca}}"  @endif      
data-cuenta="{{$puc_cuenta}}"  data-detalle="{{$detalle}}" data-valor="{{$valor}}" data-fecha="{{$mes}}" data-estadofacturacion="{{$estadofacturacion}}" data-lnegocio="{{$linea_de_negocioid}}" ><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a>
     

{{-- @include('provision.destroy') --}}