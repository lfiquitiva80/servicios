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
#Foto_escolta{
  margin-left: 300px;
}

#Datos_Escolta{
	margin-left: 200px;

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

    <!-- <img src="{{ asset('img/EncabezadoPdf.jpg') }}"style="width:860px; position:absolute; top: -50px;
      left: -50px;"> -->
    

      <div class="centro">
        <br><br><br>
        <!-- Foto del Escolta_asignado-->
        <div id="Foto_escolta">
          @if($Escolta->foto == 'default.jpg')
          <br><br><br><br><br><br>
                <img src="{{ asset('img/default.jpg')}}"style="width:230px;height: 225px;border:5px solid #e26b0d">
                @else
<br><br><br><br><br><br>
          <img src="{{asset($Escolta->foto)}}" style="width:230px; height: 225px;border:5px solid #e26b0d">
          @endif
          </div>

<!--  Foto Vehiculo -->
          <br><br>
          <div id="Datos_Escolta">
            <font color="#f3994b"  face="Verdana" size=12>&nbsp;NAME</font>
            <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Escolta->nombre}}</font>

            <br>
              <font color="#f3994b"  face="Verdana" size=12>&nbsp;CITY</font>
              <!-- Descripcion  Vehiculo-->
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Escolta->ciudad}}</font>

              <br>
              <font color="#f3994b"  face="Verdana" size=12>&nbsp;OCCUPATION</font>
              <font  color="black"  face="Verdana" size=12 >{{$Escolta->cargo}}</font>
              <br>
              <font color="#f3994b"  face="Verdana" size=12>&nbsp;MOBILE</font>
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Escolta->telefono}}</font>
              <br>
              <font color="#f3994b"  face="Verdana" size=12>&nbsp;ID </font>
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Escolta->cc}}</font>
              <br><br><br>
						</div>

          </div>
       <!--    <img src="{{ asset('img/pie_de_pagina_pdf.jpg') }}"style="width:860px; position:absolute; top: 960px;
            left: -50px;"> -->
            </body>
          </html>
