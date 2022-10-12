<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\MascotasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/landingpage', [SitioController::class, 'landingpage']);

Route::get('/Contacto/{codigo?}', [SitioController::class, 'Crush']);

Route::post('/recibe-form-Contacto/{codigo?}', [SitioController::class, 'recibeFormContacto']);

Route::resource('mascotas', MascotasController::class);

