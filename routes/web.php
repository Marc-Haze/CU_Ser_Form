<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PosicionController;
use App\Http\Controllers\EstampadoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\TrabajoController;

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

Route::get('/clientes',[ClienteController::class, 'findAll']);
Route::get('/clientes/{id}',[ClienteController::class, 'findById']);
Route::post('/clientes/{id}',[ClienteController::class, 'updateById']);
Route::post('/clientes',[ClienteController::class, 'addCliente']);
Route::delete('/clientes/{id}',[ClienteController::class, 'deleteById']);