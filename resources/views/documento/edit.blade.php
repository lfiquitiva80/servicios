<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >
<title>Command Center- Home </title>
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

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@acachawiki" />
<meta name="twitter:creator" content="@acacha1" />
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }

/* The container */
.container {
    display: block;
    position: absolute;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
		margin-top: -35px;

}

input[type="checkbox"]{
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    border: 1px;
    background-color: black;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.horizontal{
	-webkit-transform: rotate(90deg);  /* safari - Chrome*/

-moz-transform: rotate(90deg);     /* Firefox */

-o-transform: rotate(90deg);       /* Opera */

transform: rotate(90deg);
margin-top: 90px;
margin-bottom: 0px;


}
 .centrar{
	position: relative;
  left: 10%;
}

#imagen{
	 margin-top: 120px;
}

.checkboxtext
{
  /* Checkbox text */
  font-size: 110%;
  display: inline;
}

	</style>

</head>

<body>
	@include('sweet::alert')
<div class="centrar">

<table align="left" cellspacing="0" border="0">
	<colgroup width="17"></colgroup>
	<colgroup width="316"></colgroup>
	<colgroup width="23"></colgroup>
	<colgroup width="94"></colgroup>
	<colgroup width="169"></colgroup>
	<colgroup width="23"></colgroup>
	<colgroup width="107"></colgroup>
	<colgroup width="20"></colgroup>
	<colgroup width="195"></colgroup>
	<colgroup width="25"></colgroup>
	<colgroup width="66"></colgroup>
	<colgroup width="20"></colgroup>
	<colgroup width="261"></colgroup>
	<colgroup width="20"></colgroup>
	<colgroup width="287"></colgroup>
	<colgroup width="18"></colgroup>
	<colgroup width="111"></colgroup>
	<tr>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="10" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333">|</font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 0px solid #000000; border-left: 2px solid #000000; border-right: 0px solid #000000" colspan=3 height="66" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">CODIGO: M1-P3-F4</font></b></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=11 align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333">Formato</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 0px solid #000000; border-right: 2px solid #000000" colspan=2 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br><img src="{{ asset('img/doc2.png')}}" width=283 height=63 hspace=11 vspace=35>
		</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom:0px solid #000000; border-left: 2px solid #000000; border-right: 0px solid #000000" colspan=3 height="66" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">VERSIÓN: 01</font></b></td>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=11 align="left" valign=middle bgcolor="#FFFFFF"><b><font size=6 color="#333333">ORDEN DE SERVICIO</font><span style="mso-ignore:vglayout;position:absolute;z-index:3;margin-left:220px;margin-top:-60px;width:166px;
		height:164px"><img src="{{ asset('img/doc1.png')}}" v:shapes="Picture_x0020_17" width="166" height="164"></span></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 0px solid #000000" colspan=3 height="66" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">PAGINA: 1 de 1</font></b></td>
		<td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=11 align="left" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Objetivo: Registrar de manera detallada los datos<br> del servicio a prestar.</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>

	</tr>
	<tr>

		<td height="9" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">CONSECUTIVO</font></b></td>
		<td style="border-top: 2px solid #000000; border-right: 2px solid #000000" colspan=14 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="32" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="47" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">{{$edit->No_de_orden_de_servicio}}</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" colspan=2 rowspan=2 height="32" align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">CIUDAD</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-bottom: 2px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">CLIENTE</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">PERSONA SOLICITANTE</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">FECHA INICIO DEL SERVICIO</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA INICIO SERVICIO</font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" height="56" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 4px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">{{$edit->ciudad_destino}}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">{{$edit->clientes->nombre}}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">{{$edit->solicitante_interno2}}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font size=4 color="#333333">
		<?php $date = date_create($edit->fecha_inicio_servicio);
echo date_format($date, 'Y-m-d'); ?></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000" align="center" valign=middle  sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><input type="time" style="width:100%;height:50px;color:#333333; font-weight: bold #000000; font-size: 19PX;" value="<?php $date = date_create($edit->fecha_inicio_servicio);
echo date_format($date, 'H:i:s'); ?>"></font></b></td>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=middle sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><font color="#333333"></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="12" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000; border-right: 2px solid #000000" colspan=6 rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=4 color="#333333">VIP</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" colspan=5 height="26" align="center" valign=bottom bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=4 color="#333333">COORDINADOR SALA DE OPERACIONES</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">FECHA RECIBO SOLICITUD</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" height="67" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">{{ Auth::user()->name }}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 4px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font size=4 color="#333333">{{$edit->fecha_solicitud}}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;D-MMM"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 0px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><b><font size=4 color="#333333"><input type="text"  style="width:100%;height:70px;color:#333333; font-weight: bold #000000; text-align: center; font-size: 19PX"></font></b></td>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" colspan=15 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5>TIPO DE SERVICIO</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="28" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 0px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=14 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="30" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">INICIO</font></b></td>
		<td style="border-top: 2px solid #000000" colspan=5 rowspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=5 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">DESTINO</font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="26" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="46" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=4 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="24" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=2 rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">AEROLINEA</font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" colspan=3 rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">DESTINO</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000" rowspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA</font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="26" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">VUELO</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td colspan=5 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">PROCEDENCIA</font></b></td>
		<td align="left" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000" align="center" valign=middle><b><font size=4 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" align="left" valign=middle><b><font size=5 color="#333333"><br></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 0px solid #000000; border-right: 2px solid #000000" colspan=2 align="center" valign=middle><b><font size=5 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td align="center" valign=middle><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td align="center" valign=middle><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td align="left" valign=middle sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><br></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"><font size=5 color="#333333"></font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="38" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=14 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333"><br></font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="34" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=7 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">PERSONAL ASIGNADO PARA EL SERVICIO</font></b></td>
		<td rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" colspan=7 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">PERSONA ACOMPAÑANTE</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="26" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="48" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=7 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">{{$edit->escoltas->nombre}}</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 0px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#C0C0C0" sdnum="1033;1033;H:MM"><b><i><font size=5><input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></i></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle sdnum="1033;1033;H:MM"><b><i><font size=5 color="#333333"><br></font></i></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="24" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" colspan=7 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"> </font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="30" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">VEHICULO TIPO </font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">PLACA</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-bottom: 2px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">KM. INICIO</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">KM. FINAL</font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="40" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Camioneta</font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br>&nbsp; &nbsp; &nbsp;
				<span class="checkboxtext">
			<input type="checkbox" value="">

			</span>




</label>
		</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4><input type="text" style="width:100%;height:100PX;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center"></font></b></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=2 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">
<input type="text" style="width:100%;height:100PX;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:100PX;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="39" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Sedán</font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"> </font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=3 color="#333333"><br>&nbsp; &nbsp; &nbsp;
			<input type="checkbox" value="">

</label>
		</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="40" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Motocicleta</font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br>&nbsp; &nbsp; &nbsp;
		<input type="checkbox" value="">

</label>
		</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Blindado</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br>&nbsp; &nbsp; &nbsp;
		<input type="checkbox" value="">

</label>
		</font></b></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><b><font size=4 color="#333333">KILOMETROS RECORRIDOS</font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="37" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="right" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Otro:</font></td>
		<td colspan=3 align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br><img src="f3_html_df8e45f63cb42756.png" width=222 height=1 hspace=33 vspace=18>
		</font><input type="text" style="width:100%;height:30PX;color:#333333; font-weight: bold #000000; font-size: 19PX;"></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333">Convencional</font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br>&nbsp; &nbsp; &nbsp;
			<input type="checkbox" value="">

</label>
		</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333">
<input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="20" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=14 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">INSTRUCCIONES ESPECIALES</font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="31" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="22" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="35" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=14 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4>
<input type="text" style="width:100%;height:100px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="35" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=16 rowspan=3 height="76" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333"><br>
		</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="37" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">AVANTEL</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">OTRO</font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-bottom: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">CELULAR</font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;" value="{{$edit->ID2}}"></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td  style="border-top: 0px solid #000000; border-bottom: 2.5px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=5 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">
<input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">
<input type="text" style="width:100%;height:70px;color:#333333; font-weight: bold #000000; font-size: 19PX; text-align: center;"></font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="30" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000" colspan=4 rowspan=5 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="37" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA INICIO EMPRESA</font></b></td>
		<td style="border-bottom: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA FINAL EMPRESA</font></b></td>
		<td colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA INICIO CLIENTE</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">HORA FINAL CLIENTE</font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="36" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><br></font></b></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:30PX;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle  sdnum="1033;1033;H:MM"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign=middle  sdnum="1033;1033;H:MM"><b><font size=5 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM"><b><font size=5 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=5 rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="40" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"> </font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="25" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">SERVICIO CANCELADO POR</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">FECHA HORA</font></b></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">CANCELACION RECIBIDA POR</font></b></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="39" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY H:MM"><font size=4 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></td>
		<td align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td style="border-top: 0px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333">
<input type="text" style="width:100%;height:30px;color:#333333; font-weight: bold #000000; font-size: 19PX;"></font></td>
		<td style="border-right: 2px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font size=4 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=16 rowspan=4 height="211" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="38" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=7 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">FIRMA DEL CLIENTE</font></b></td>
		<td style="border-bottom: 2px solid #000000" rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333">JEFE DE SALA OPERACIONES</font></b></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 2px solid #000000" height="18" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=7 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=6 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-right: 2px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" colspan=8 height="17" align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td style="border-bottom: 2px solid #000000; border-right: 2px solid #000000" colspan=7 align="center" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="17" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font size=5 color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="58" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;M/D/YYYY"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#333333"><br></font></b></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF" sdnum="1033;1033;H:MM AM/PM"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
		<td align="left" valign=middle bgcolor="#FFFFFF"><font color="#333333"><br></font></td>
	</tr>
</table>

</div>

<div id="imagen">
<img src="{{ asset('img/con_servicio.jpg')}}"class="horizontal"  width ="2050px" >
</div>
</body>
<script src="//code.jquery.com/jquery-2.2.1.min.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/sweetalert2@7.1.2/dist/sweetalert2.all.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
     <script>
       $(document).foundation();

   </script>
<script >
swal({
  title: 'Importante',
  type: 'question',
html: "<strong>1.</strong> se recomienda imprimir en google chrome <br>  <strong>2 .</strong> Ctlr + P para imprimir<br> <strong>3.</strong> se  recomienda imprimir en orientación vertical <br> <strong>4.</strong>se  recomienda imprimir con una ESCALA de 40 ",

})


</script>

</html>
