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

Auth::routes();

Route::get('caminhoes/list', [\App\Http\Controllers\CaminhoesController::class, 'list']);
Route::get('caminhoes/create', [\App\Http\Controllers\CaminhoesController::class, 'create']);
Route::post('caminhoes/store', [\App\Http\Controllers\CaminhoesController::class, 'store']);

Route::get('clientes/list', [\App\Http\Controllers\ClientesController::class, 'list']);
Route::get('clientes/create', [\App\Http\Controllers\ClientesController::class, 'create']);
Route::post('clientes/store', [\App\Http\Controllers\ClientesController::class, 'store']);

Route::get('enderecos/list', [\App\Http\Controllers\EnderecosController::class, 'list']);
Route::get('enderecos/create', [\App\Http\Controllers\EnderecosController::class, 'create']);
Route::post('enderecos/store', [\App\Http\Controllers\EnderecosController::class, 'store']);

Route::get('entregas/list', [\App\Http\Controllers\EntregasController::class, 'list']);
Route::get('entregas/create', [\App\Http\Controllers\EntregasController::class, 'create']);
Route::post('entregas/store', [\App\Http\Controllers\EntregasController::class, 'store']);

Route::get('itensPedidos/list', [\App\Http\Controllers\ItensPedidosController::class, 'list']);
Route::get('itensPedidos/create', [\App\Http\Controllers\ItensPedidosController::class, 'create']);
Route::post('itensPedidos/store', [\App\Http\Controllers\ItensPedidosController::class, 'store']);

Route::get('lotes/list', [\App\Http\Controllers\LotesController::class, 'list']);
Route::get('lotes/create', [\App\Http\Controllers\LotesController::class, 'create']);
Route::post('lotes/store', [\App\Http\Controllers\LotesController::class, 'store']);

Route::get('motoristas/list', [\App\Http\Controllers\MotoristasController::class, 'list']);
Route::get('motoristas/create', [\App\Http\Controllers\MotoristasController::class, 'create']);
Route::post('motoristas/store', [\App\Http\Controllers\MotoristasController::class, 'store']);


Route::get('pedidos/list', [\App\Http\Controllers\PedidosController::class, 'list']);
Route::get('pedidos/create', [\App\Http\Controllers\PedidosController::class, 'create']);
Route::post('pedidos/store', [\App\Http\Controllers\PedidosController::class, 'store']);

Route::get('produtos/list', [\App\Http\Controllers\ProdutosController::class, 'list']);
Route::get('produtos/create', [\App\Http\Controllers\ProdutosController::class, 'create']);
Route::post('produtos/store', [\App\Http\Controllers\ProdutosController::class, 'store']);

Route::get('usuarios/list', [\App\Http\Controllers\UsuariosController::class, 'list']);
Route::get('usuarios/create', [\App\Http\Controllers\UsuariosController::class, 'create']);
Route::post('usuarios/store', [\App\Http\Controllers\UsuariosController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
