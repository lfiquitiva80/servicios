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


});
