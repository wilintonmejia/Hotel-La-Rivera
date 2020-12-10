<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;

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
// Ruta /
Route::get('/', [HotelController::class, 'getIndex']);

// Ruta hotel/historia
Route::get('hotel/historia', [HotelController::class, 'showHistoria']);

// Ruta hotel/mision-vision
Route::get('hotel/mision-vision', [HotelController::class, 'showMision']);

// Ruta hotel/ubicación
Route::get('hotel/ubicación', [HotelController::class, 'showUbicacion']);

// Ruta servicios/habitaciones
Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);

// Ruta servicios/eventos => Parametros 
Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id'=>$id));
});

// Ruta clientes/visualizar
Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']);

// Ruta reservas
Route::get('reservas', [ReservasController::class, 'getReservas']);

// Ruta facturacion
Route::get('facturacion', [FacturacionController::class, 'getFactura']);

// Ruta contáctos
Route::get('contáctenos', [HotelController::class, 'showContactos']);

