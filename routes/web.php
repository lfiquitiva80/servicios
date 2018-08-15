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
Route::resource('wo','woesController');
Route::get('excelordenes','excelController@excelordenes')->name('excelordenes');
Route::get('import-export-view', 'excelController@excelordenes')->name('import.export.view');
Route::post('import-file', 'excelController@excelordenes')->name('import.file');
Route::get('export-file/{type}', 'excelController@excelordenes')->name('export.file');
Route::get('export-file-servicios-adicionales/{type}', 'excelController@excelordenesservicios')->name('export.servicios');
Route::get('export-file-servicios-adicionales-accidental/{type}', 'excelController@excelordenesoccidental')->name('export.occidental');
Route::get('clientesGenerales','excelController@clientegeneral')->name('clientes');
Route::get('escoltasGenerales','excelController@escoltasgeneral')->name('escoltas');
Route::get('vehiculosGenerales','excelController@vehiculosgeneral')->name('vehiculos');
Route::get('rentadorasGenerales','excelController@rentadorasgeneral')->name('rentadoras');
Route::get('rango','excelController@rango')->name('rango');

Route::get('continuar/{id}','ordenesdeservicioController@continuar')->name('continuar');
Route::resource('Clientes','clienteController');
Route::resource('dashboard','dashboardController');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('logs');
Route::resource('Escolta','escoltaController');
Route::resource('Vehiculo','vehiculoController');
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


});
Route::group(['middleware' => [ 'admin', 'auth']], function (){
Route::resource('usuario','usuarioController');
});
