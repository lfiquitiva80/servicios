<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Command Center-</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Command Center">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Command Center" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />
    	<style type="text/css">
*{



}
.centro{
  
position: absolute;
height: 900px;
top: 64px;
left: -44px;
width:860px;
}

#Foto_vehiculo{
    margin-left: 300px
}
.#vehiculos_informacion{
		margin-left: 300px;
}

/* .fondo{


  background-image:url("{{ asset('img/FormatoPdf.jpg') }}");
  background-repeat:no-repeat;
            position:absolute;
            width: 140px;
            height: 180px;
            top: -50px;
            left: -50px;
} */
    </style>
  </head>
  <body background="{{ asset('img/fondopdf.jpg')}}" style="background: no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

   <!--  <img src="{{ asset('img/EncabezadoPdf.jpg') }}"style="width:860px; position:absolute; top: -50px;
      left: -50px;"> -->



      <div class="centro">
        <br><br><br>
         <br><br><br>
        


<!--  Foto Vehiculo -->

          <div id="Foto_vehiculo">
@if ($Vehiculo->foto == 'car.png')
<img  src="{{ asset('img/car.png')}}"  style="width:300px;height: 300px ;border:3px solid #d48542">
@else
<img src="{{asset($Vehiculo->foto)}}"  style="width:300px; height: 300px ;border:3px solid #d48542">
@endif
          </div>
          <br><br>

<div id="vehiculos_informacion">

						   <font  color="#e26c0c"  face="Tahoma" size=12 >LICENSE PLATE :
						<font  color="black"  face="Tahoma" size=12 >{{$Vehiculo->placa}}
					 <br>
						<font  color="#e26c0c"  face="Tahoma" size=12 >VEHICLE :
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font  color="black"  face="Tahoma" size=12 >{{$Vehiculo->descripcion}}

					 <br>
									<font  color="e26c0c"  face="Tahoma" size=12 >ARMOR :
									 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <font  color="black"  face="Tahoma" size=12 >{{$Vehiculo->armadura}}
					 <br>
										 <font  color="e26c0c"  face="Tahoma" size=12 >COLOR  :
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <font  color="black"  face="Tahoma" size=12 >{{$Vehiculo->color}}

</div>
          </div>













<!-- <img src="{{ asset('img/pie_de_pagina_pdf.jpg') }}"style="width:860px; position:absolute; top: 960px;
  left: -50px;"> -->
  </body>
</html>
