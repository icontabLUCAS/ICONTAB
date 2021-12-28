<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\AsientoLCVController;
use App\Http\Controllers\FormatoDocController;
use App\Http\Controllers\FirmaReporteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TiponivelController;

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
   echo view('header');
   echo view('home');
   echo view('footer');
});



Route::resource('moneda', MonedaController::class);
Route::get('moneda',[ MonedaController::class , 'index']);
Route::post('moneda/update/{moneda}',[ MonedaController::class , 'update']);

Route::resource('formatoDocumento', FormatoDocController::class);
Route::get('formatoDocumento',[ FormatoDocController::class , 'index']);
Route::post('formatoDocumento/update/{formato_doc}',[ FormatoDocController::class , 'update']);

Route::resource('firmaReporte', FirmaReporteController::class);
Route::get('firmaReporte',[ FirmaReporteController::class , 'index']);
Route::post('firmaReporte/update/{firma_reporte}',[ FirmaReporteController::class , 'update']);

Route::resource('proyecto', ProyectoController::class);
Route::get('proyecto',[ ProyectoController::class , 'index']);
Route::post('proyecto/update/{proyecto}',[ ProyectoController::class , 'update']);

Route::resource('asientoLCV', AsientoLCVController::class);
Route::get('asientoLCV',[ AsientoLCVController::class , 'index']);
Route::post('asientoLCV/update/{asiento_LCV}',[ AsientoLCVController::class , 'update']);

Route::resource('tipoNivel', TiponivelController::class);
Route::get('tipoNivel',[ TiponivelController::class , 'index']);
Route::post('tipoNivel/update/{tiponivel}',[ TiponivelController::class , 'update']);