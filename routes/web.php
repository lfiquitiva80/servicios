<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//COMANDOS ESPECIALES DE ARTISAN

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/limpiar', function(){

Artisan::call('cache:clear');
Artisan::call('config:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');

return "Cleared!";

});

Route::get('/', function () {
    
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    #
    #
Route::get('/home','HomeController@index')->name('home-principal');
Route::resource('ordenesdeservicio','ordenesdeservicioController');
Route::resource('servicios_adicionales','servicios_adicionalesController');
Route::resource('occidental','servicios_adicionales_occidentalController');
Route::resource('controlhorario','controlhorarioController');
Route::resource('wo','woesController');
Route::get('excelordenes','excelController@excelordenes')->name('excelordenes');
Route::get('excelcontrolhorario','excelController@controlhorario')->name('controlhorario');
Route::get('import-export-view', 'excelController@excelordenes')->name('import.export.view');
Route::post('import-file', 'excelController@excelordenes')->name('import.file');
Route::get('export-file/{type}', 'excelController@excelordenes')->name('export.file');
Route::get('export-file-servicios-adicionales/{type}', 'excelController@excelordenesservicios')->name('export.servicios');
Route::get('export-file-servicios-adicionales-accidental/{type}', 'excelController@excelordenesoccidental')->name('export.occidental');
Route::get('consultacliente','excelController@consultacliente')->name('consultacliente');
Route::get('clientesGenerales','excelController@clientegeneral')->name('clientes');
Route::get('escoltasGenerales','excelController@escoltasgeneral')->name('escoltas');
Route::get('vehiculosGenerales','excelController@vehiculosgeneral')->name('vehiculos');
Route::get('rentadorasGenerales','excelController@rentadorasgeneral')->name('rentadoras');
Route::get('rango','excelController@rango')->name('rango');

Route::get('continuar/{id}','ordenesdeservicioController@continuar')->name('continuar');
Route::resource('Clientes','clienteController');
Route::resource('dashboard','dashboardController');
//Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('logs');
Route::resource('Escolta','escoltaController');
Route::resource('Vehiculo','vehiculoController');

Route::get('soat/{id}','vehiculoController@soat');
Route::get('licencia/{id}','vehiculoController@licencia');
Route::get('poliza/{id}','vehiculoController@poliza');
Route::get('tecnomecanica/{id}','vehiculoController@tecnomecanica');
Route::get('blindaje/{id}','vehiculoController@blindaje');


Route::resource('Rentadora','rentadoraController');
Route::resource('Agenda','agendaController');
Route::get('events','agendaController@get_events');
Route::get('Vehiculosevents','agendaController@Vehiculos_events');
Route::resource('reportes','excelController');
Route::get('resourcesColumns','agendaController@resourcesColumns');
Route::get('VehiculosColumns','agendaController@VehiculosColumns');
Route::get('fecha','HomeController@fecha')->name('fecha');
Route::resource('documento','documentoController');
Route::get('/allescolta','escoltaController@allescoltas')->name('allescolta');//ajax para leonidas
Route::get('ordenesgenerales','excelController@escoltas_ordenes')->name('ordenesgenerales');
Route::get('excelwogenerales','excelController@wodos')->name('excelwogenerales');
Route::get('pdf/{id}','ordenesdeservicioController@pdf')->name('pdf');
Route::get('escoltapdf/{id}','escoltaController@pdf')->name('escoltapdf');
Route::get('vehiculopdf/{id}','vehiculoController@pdf')->name('vehiculopdf');
Route::get('ocupacion','controlhorarioController@ocupacion')->name('ocupacion');
Route::get('horarios/{id}','controlhorarioController@horarios')->name('horarios');
Route::get('solicitudserviciocliente','clienteController@solicitudserviciocliente')->name('solicitudserviciocliente');
Route::resource('usuario','usuarioController');


  //Rutas para solicitud de cliente por Datatables// Ing. Leonidas
 Route::resource('solicitudcliente','solicitudClienteController');
 Route::post('solicitudcliente/store', 'solicitudCliente@store');
 Route::get('solicitudcliente/delete/{id}', 'solicitudCliente@destroy');


//Ruta de los proveedores para provision costos y gastos
Route::get('proveedor','proveedorController@tabla');
Route::resource('proveedores','proveedorController');
Route::get('Exportproveedor','excelController@proveedor');

//Ruta del puc para provision costos y gastos
Route::resource('puc','pucController');
Route::get('pucs','pucController@tablaindex');
Route::get('Exportpuc','excelController@puc');


//Ruta del el centro de costos para provision costos y gastos
Route::resource('centro_de_costos','centro_de_costoController');
Route::get('cdecostos','centro_de_costoController@tablaindex');
Route::get('cdcostos_cliente','centro_de_costoController@idclientes');
Route::get('Exportcentrodecostos','excelController@centrodecostos');

//Ruta OT para provision costos y gastos
Route::resource('ot','otController');
Route::get('otall','otController@tablaindex');
Route::get('Exportot','excelController@ot');


//Ruta del el centro de costos para provision costos y gastos
Route::resource('linea_de_negocio','lnegocioController');
Route::get('lnegocio','lnegocioController@tablaindex');
Route::get('Exportlineadenegocio','excelController@lineadenegocio');
Route::get('duplicarprovision/{id}','provisionController@duplicar');


//Ruta del  la vista llamada provison para provision costos y gastos
Route::resource('provision','provisionController');
Route::get('provisionesall','provisionController@tablaindex');
Route::get('id_proveedores','provisionController@proveedores');
Route::get('id_cosotos','provisionController@costos');
Route::get('id_ots','provisionController@ots');
Route::get('id_pucs','provisionController@pucs');
Route::get('exportprovision','excelController@provision');
Route::get('mesexportprovision','excelController@mesprovision')->name('mesexportprovision');
Route::get('id_lnegocio','provisionController@lineadenegocio');


//Ruta de anticipo 
Route::resource('anticipo','anticipoController');
Route::get('anticipoall','anticipoController@tablaindex');
Route::get('Exportanticipo','excelController@anticipo');

//ruta de Horarrio
Route::resource('horario','horarioController');
Route::get('horarioall','horarioController@tablaindex');
Route::get('chorarios','horarioController@controlhorario');

//Prefactura Oxy

Route::resource('ordenesdeserviciooxy', 'ordenesoxyController')->only([
    'index'
]);
Route::get('ordenesdeserviciooxyall','ordenesoxyController@tablaindex');
Route::get('ordenesdeserviciooxyfecha','ordenesoxyController@fechabuscar')->name('ordenesdeserviciooxyfecha');

Route::get('correcciones','ordenesoxyController@correciones');
Route::get('enviarcorreciones','ordenesoxyController@enviar')->name('enviarcorreciones');


Route::resource('tarifasbarranca', 'barrancaController');
Route::get('tarifasbarrancaall','barrancaController@tablaindex');
Route::get('periodobarrancaall','barrancaController@periodoall');
Route::get('Exportbarranca','excelController@tarifabarranca');


Route::resource('tarifasbogota', 'bogotaController');
Route::get('tarifasbogotaall','bogotaController@tablaindex');
Route::get('periodobogotaall','bogotaController@periodoall');
Route::get('Exportbogota','excelController@tarifabogota');

Route::resource('prefacturaoxy', 'prefacturaoxyController');
Route::get('prefacturaoxyall','prefacturaoxyController@tablaindex');
Route::get('id_ordendeservicio','prefacturaoxyController@ordenesprefactura');
Route::get('id_barranca','prefacturaoxyController@barranca');
Route::get('id_bogota','prefacturaoxyController@bogota');
Route::get('Exportprefacturaoxy','excelController@prefacturaoxy');
Route::get('duplicarprefacturaoxy/{id}','prefacturaoxyController@duplicar');

Route::resource('revisionprefacturaoxy', 'revisionoxyController');
Route::get('revisionprefacturaoxyall','revisionoxyController@tablaindex');

//PROPUESTA ECONOMICA

Route::resource('horaadicionales','horaadicionalController');
Route::get('horaadicionalall','horaadicionalController@tablaindex');
Route::get('aumentarhorasadicional','horaadicionalController@aumentar')->name('aumentarhorasadicional');
Route::get('Exporthoraadicional','excelController@horaadicional');
Route::get('id_horasadicionales','tarifarioController@horasadicionales');


Route::resource('tarifas', 'tarifarioController');
Route::get('tarifasall','tarifarioController@tablaindex');

Route::get('aumentartarifas','tarifarioController@aumentar')->name('aumentartarifas');
Route::get('Exporttarifa','excelController@tarifario');

Route::resource('tipodetarifa','tipodetarifaController');
Route::get('tipodetarifaall','tipodetarifaController@tablaindex');
Route::get('Exporttipoddetarifa','excelController@tipodetarifa');


Route::resource('propuestaeconomica','propuestaeconomicaController');
Route::get('propuestaeconomicaall','propuestaeconomicaController@tablaindex');
Route::get('Exportpropuestaeconomica','excelController@propuestaeconomica');



//Prefactura Otros Clientes
Route::resource('revision','revisionordendeservicioController');
Route::get('revisionall','revisionordendeservicioController@tablaindex');

Route::resource('fs','fsController');
Route::get('fsall','fsController@tablaindex');
Route::get('Exportfs','excelController@fs');


Route::resource('codigociudad','codigociudadController');
Route::get('codigociudadall','codigociudadController@tablaindex');
Route::get('Exportcodigociudad','excelController@codigociudad');


Route::get('creardocumento/{id}','documentoController@crear')->name('creardocumento');

Route::resource('escaner','escanerController');
Route::get('escanerall','escanerController@tablaindex');


Route::resource('prefacturacliente','prefacturaclienteController');
Route::get('prefacturaclienteall','prefacturaclienteController@tablaindex');
Route::get('woprefacturacliente','prefacturaclienteController@wo');

Route::get('Exportprefacturacliente','excelController@prefacturacliente');
Route::get('id_tarifaestandar','prefacturaclienteController@tarifasestandar');
Route::get('id_hora_adicional','prefacturaclienteController@horaadicional');

Route::get('id_tarifasestandar','prefacturaclienteController@tarifasetandar');
Route::get('id_horas_adicionales','prefacturaclienteController@horaadicionales');



Route::resource('revisionprefactura','revisionprefacturaclienteController');
Route::get('revisionprefacturaclienteall','revisionprefacturaclienteController@tablaindex');

Route::resource('calendarioprefactura','calendarioController');
Route::get('calendarioprefacturaall','calendarioController@create');
Route::get('Exportcalendario','excelController@calendario');

Route::get('documentoexcel','excelController@documentoexcel');//Se agrego esta linea para el excel del documento.php

Route::resource('horasprefacturacliente','horaprefacturaController');

Route::get('woprefacturacion','woesController@wo')->name('woprefacturacion');
Route::get('actulizarwo','ordenesdeservicioController@estadodeservicio')->name('actulizarwo');

});

// Route::group(['middleware' => [ 'admin', 'auth']], function (){
// Route::resource('usuario','usuarioController');
// });
