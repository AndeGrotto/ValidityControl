<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('caminhoes', [\App\Http\Controllers\CaminhoesController::class, 'index']);
Route::get('clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
Route::get('enderecos', [\App\Http\Controllers\EnderecosController::class, 'index']);
Route::get('entregas', [\App\Http\Controllers\EntregasController::class, 'index']);
Route::get('itensPedidos', [\App\Http\Controllers\ItensPedidosController::class, 'index']);
Route::get('lotes', [\App\Http\Controllers\LotesController::class, 'index']);
Route::get('motoristas', [\App\Http\Controllers\MotoristasController::class, 'index']);
Route::get('pedidos', [\App\Http\Controllers\PedidosController::class, 'index']);
Route::get('produtos', [\App\Http\Controllers\ProdutosController::class, 'index']);
Route::get('usuarios', [\App\Http\Controllers\UsuariosController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
