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





#Foto_escolta{
  margin-left: 90px;
}
#Foto_vehiculo{
    margin-left: 480px;
    margin-top: -230px
}
.#vehiculos_informacion{
	margin-left: 480px;
	  margin-top: -130px
}
#Datos_Escolta{
	margin-left: 90px;

}

</style>



  </head>
  <body background="{{ asset('img/fondopdf.jpg')}}" style="background: no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

  <p>
  <br>  
  <br>
  <br>
  <br>

<div class="row">
  
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div id="Foto_escolta">
          @if($edit->escoltas->foto == 'default.jpg')
          <br><br><br><br>
                <img src="{{ asset('img/default.jpg')}}"style="width:300px;height: 225px;border:5px solid #e26b0d">
                @else
<br><br><br><br>
          <img src="{{asset($edit->escoltas->foto)}}" style="width:300px; height: 225px;border:5px solid #e26b0d">
          @endif
          </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
   <div id="Foto_vehiculo">
@if ($edit->vehiculos->foto == 'car.png')
<img  src="{{ asset('img/car.png')}}"  style="width:300px;  height: 225px ;border:3px solid #d48542">
@else
<img src="{{asset($edit->vehiculos->foto)}}"  style="width:300px; height: 225px ;border:3px solid #d48542">
@endif

          </div> 
  </div>
  
</div>

<div class="row">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    
  </div>
  <br><br>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <div id="Datos_Escolta">
            <font color="#00F"  face="Verdana" size=12>&nbsp;NAME</font>
            <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$edit->escoltas->nombre}}</b></font>

            <br>
              <font color="#00F"  face="Verdana" size=12>&nbsp;CITY</font>
              <!-- Descripcion  Vehiculo-->
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$edit->escoltas->ciudad}}</font>

              <br>
              <font color="#00F"  face="Verdana" size=12>&nbsp;OCCUPATION</font>
              <font  color="black"  face="Verdana" size=12 >{{$edit->escoltas->cargo}}</font>
              <br>
              <font color="#00F"  face="Verdana" size=12>&nbsp;MOBILE</font>
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href="tel://+57{{$edit->escoltas->telefono}}"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>{{$edit->escoltas->telefono}}</a></b></font>
              <br>
              <font color="#00F"  face="Verdana" size=12>&nbsp;ID </font>
              <font  color="black"  face="Verdana" size=12 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$edit->escoltas->cc}}</font>
              <br><br><br>
            </div> 
  </div>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
   <div id="vehiculos_informacion">


               <font  color="#00F"  face="Tahoma" size=12 >LICENSE PLATE :
            <font  color="black"  face="Tahoma" size=12 ><b>{{$edit->vehiculos->placa}}</b>
           <br>
            <font  color="#00F"  face="Tahoma" size=12 >VEHICLE :
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font  color="black"  face="Tahoma" size=12 >{{$edit->vehiculos->descripcion}}

           <br>
                  <font  color="#00F"  face="Tahoma" size=12 >ARMOR :
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <font  color="black"  face="Tahoma" size=12 >{{$edit->vehiculos->armadura}}
           <br>
                     <font  color="#00F"  face="Tahoma" size=12 >COLOR  :
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <font  color="black"  face="Tahoma" size=12 >{{$edit->vehiculos->color}}


</div> 
  </div>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    
  </div>
</div>
    



<br>
<br>
<br>
<br>





  


  </body>
</html>
