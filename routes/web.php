<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PosicionController;
use App\Http\Controllers\EstampadoController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\PruebaController;

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

Route::get('/form', function () {
    return view('form.firstForm');
});

Route::get('/pruebita', function () {
    return view('pruebita.form');
});

// Rutas para la tabla Prueba
Route::get('/pruebas',[PruebaController::class, 'findAll']);
Route::get('/pruebas/{id}',[PruebaController::class, 'findById']);
Route::post('/pruebas/{id}',[PruebaController::class, 'updateById']);
Route::post('/pruebas',[PruebaController::class, 'addPrueba']);
Route::delete('/pruebas/{id}',[PruebaController::class, 'deleteById']);

// Rutas para la tabla Clientes
Route::get('/clientes',[ClienteController::class, 'findAll']);
Route::get('/clientes/{id}',[ClienteController::class, 'findById']);
Route::post('/clientes/{id}',[ClienteController::class, 'updateById']);
Route::post('/clientes',[ClienteController::class, 'addCliente']);
Route::delete('/clientes/{id}',[ClienteController::class, 'deleteById']);

// Rutas para la tabla Poscicion
Route::get('/posicions',[PosicionController::class, 'findAll']);
Route::get('/posicions/{id}',[PosicionController::class, 'findById']);
Route::post('/posicions/{id}',[PosicionController::class, 'updateById']);
Route::post('/posicions',[PosicionController::class, 'addPosicion']);
Route::delete('/posicions/{id}',[PosicionController::class, 'deleteById']);

// Rutas para la tabla Prenda
Route::get('/prendas',[PrendaController::class, 'findAll']);
Route::get('/prendas/{id}',[PrendaController::class, 'findById']);
Route::post('/prendas/{id}',[PrendaController::class, 'updateById']);
Route::post('/prendas',[PrendaController::class, 'addPrenda']);
Route::delete('/prendas/{id}',[PrendaController::class, 'deleteById']);

// Rutas para la tabla Articulo
Route::get('/articulos',[ArticuloController::class, 'findAll']);
Route::get('/articulos/{id}',[ArticuloController::class, 'findById']);
Route::post('/articulos/{id}',[ArticuloController::class, 'updateById']);
Route::post('/articulos',[ArticuloController::class, 'addArticulo']);
Route::delete('/articulos/{id}',[ArticuloController::class, 'deleteById']);

// Rutas para la tabla Estampado
Route::get('/estampados',[EstampadoController::class, 'findAll']);
Route::get('/estampados/{id}',[EstampadoController::class, 'findById']);
Route::post('/estampados/{id}',[EstampadoController::class, 'updateById']);
Route::post('/estampados',[EstampadoController::class, 'addEstampado']);
Route::delete('/estampados/{id}',[EstampadoController::class, 'deleteById']);

// Rutas para la tabla Pedido
Route::get('/pedidos',[PedidoController::class, 'findAll']);
Route::get('/pedidos/{id}',[PedidoController::class, 'findById']);
Route::post('/pedidos/{id}',[PedidoController::class, 'updateById']);
Route::post('/pedidos',[PedidoController::class, 'addPedido']);
Route::delete('/pedidos/{id}',[PedidoController::class, 'deleteById']);

// Rutas para la tabla Trabajo
Route::get('/trabajos',[TrabajoController::class, 'findAll']);
Route::get('/trabajos/{id}',[TrabajoController::class, 'findById']);
Route::post('/trabajos/{id}',[TrabajoController::class, 'updateById']);
Route::post('/trabajos',[TrabajoController::class, 'addTrabajo']);
Route::delete('/trabajos/{id}',[TrabajoController::class, 'deleteById']);