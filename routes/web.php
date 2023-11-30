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
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix'=>'caminhoes', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'caminhoes',             'uses'=>'\App\Http\Controllers\CaminhoesController@list'     ]);
        Route::get('create',        [   'as'=>'caminhoes.create',      'uses'=>'\App\Http\Controllers\CaminhoesController@create'   ]);
        Route::post('store',        [   'as'=>'caminhoes.store',       'uses'=>'\App\Http\Controllers\CaminhoesController@store'    ]);
        Route::get('{id}/destroy',  [   'as'=>'caminhoes.destroy',     'uses'=>'\App\Http\Controllers\CaminhoesController@destroy'  ]);
        Route::get('{id}/edit',     [   'as'=>'caminhoes.edit',        'uses'=>'\App\Http\Controllers\CaminhoesController@edit'     ]);
        Route::put('{id}/update',   [   'as'=>'caminhoes.update',      'uses'=>'\App\Http\Controllers\CaminhoesController@update'   ]);
    });

    Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'clientes',              'uses'=>'\App\Http\Controllers\ClientesController@list'      ]);
        Route::get('create',        [   'as'=>'clientes.create',       'uses'=>'\App\Http\Controllers\ClientesController@create'    ]);
        Route::post('store',        [   'as'=>'clientes.store',        'uses'=>'\App\Http\Controllers\ClientesController@store'     ]);
        Route::get('{id}/destroy',  [   'as'=>'clientes.destroy',      'uses'=>'\App\Http\Controllers\ClientesController@destroy'   ]);
        Route::get('{id}/edit',     [   'as'=>'clientes.edit',         'uses'=>'\App\Http\Controllers\ClientesController@edit'      ]);
        Route::put('{id}/update',   [   'as'=>'clientes.update',       'uses'=>'\App\Http\Controllers\ClientesController@update'    ]);
    });

    Route::group(['prefix'=>'enderecos', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'enderecos',             'uses'=>'\App\Http\Controllers\EnderecosController@list'     ]);
        Route::get('search',        [   'as'=>'enderecos.search',      'uses'=>'\App\Http\Controllers\EnderecosController@search'   ]);
        Route::get('search_cep',        [   'as'=>'enderecos.search_cep',      'uses'=>'\App\Http\Controllers\EnderecosController@search_cep'   ]);*/
        Route::get('create',        [   'as'=>'enderecos.create',      'uses'=>'\App\Http\Controllers\EnderecosController@create'   ]);
        Route::post('store',        [   'as'=>'enderecos.store',       'uses'=>'\App\Http\Controllers\EnderecosController@store'    ]);
        Route::get('{id}/destroy',  [   'as'=>'enderecos.destroy',     'uses'=>'\App\Http\Controllers\EnderecosController@destroy'  ]);
        Route::get('{id}/edit',     [   'as'=>'enderecos.edit',        'uses'=>'\App\Http\Controllers\EnderecosController@edit'     ]);
        Route::put('{id}/update',   [   'as'=>'enderecos.update',      'uses'=>'\App\Http\Controllers\EnderecosController@update'   ]);
    });

    Route::group(['prefix'=>'entregas', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'entregas',              'uses'=>'\App\Http\Controllers\EntregasController@list'      ]);
        Route::get('create',        [   'as'=>'entregas.create',       'uses'=>'\App\Http\Controllers\EntregasController@create'    ]);
        Route::post('store',        [   'as'=>'entregas.store',        'uses'=>'\App\Http\Controllers\EntregasController@store'     ]);
        Route::get('{id}/destroy',  [   'as'=>'entregas.destroy',      'uses'=>'\App\Http\Controllers\EntregasController@destroy'   ]);
        Route::get('{id}/edit',     [   'as'=>'entregas.edit',         'uses'=>'\App\Http\Controllers\EntregasController@edit'      ]);
        Route::put('{id}/update',   [   'as'=>'entregas.update',       'uses'=>'\App\Http\Controllers\EntregasController@update'    ]);
    });

    Route::group(['prefix'=>'itensPedidos', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'itensPedidos',          'uses'=>'\App\Http\Controllers\ItensPedidosController@list'      ]);
        Route::get('create',        [   'as'=>'itensPedidos.create',   'uses'=>'\App\Http\Controllers\ItensPedidosController@create'    ]);
        Route::post('store',        [   'as'=>'itensPedidos.store',    'uses'=>'\App\Http\Controllers\ItensPedidosController@store'     ]);
        Route::get('{id}/destroy',  [   'as'=>'itensPedidos.destroy',  'uses'=>'\App\Http\Controllers\ItensPedidosController@destroy'   ]);
        Route::get('{id}/edit',     [   'as'=>'itensPedidos.edit',     'uses'=>'\App\Http\Controllers\ItensPedidosController@edit'      ]);
        Route::put('{id}/update',   [   'as'=>'itensPedidos.update',   'uses'=>'\App\Http\Controllers\ItensPedidosController@update'    ]);
    });

    Route::group(['prefix'=>'lotes', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'lotes',                 'uses'=>'\App\Http\Controllers\LotesController@list'     ]);
        Route::get('create',        [   'as'=>'lotes.create',          'uses'=>'\App\Http\Controllers\LotesController@create'   ]);
        Route::post('store',        [   'as'=>'lotes.store',           'uses'=>'\App\Http\Controllers\LotesController@store'    ]);
        Route::get('{id}/destroy',  [   'as'=>'lotes.destroy',         'uses'=>'\App\Http\Controllers\LotesController@destroy'  ]);
        Route::get('{id}/edit',     [   'as'=>'lotes.edit',            'uses'=>'\App\Http\Controllers\LotesController@edit'     ]);
        Route::put('{id}/update',   [   'as'=>'lotes.update',          'uses'=>'\App\Http\Controllers\LotesController@update'   ]);
    });

    Route::group(['prefix'=>'motoristas', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'motoristas',            'uses'=>'\App\Http\Controllers\MotoristasController@list'      ]);
        Route::get('create',        [   'as'=>'motoristas.create',     'uses'=>'\App\Http\Controllers\MotoristasController@create'    ]);
        Route::post('store',        [   'as'=>'motoristas.store',      'uses'=>'\App\Http\Controllers\MotoristasController@store'     ]);
        Route::get('{id}/destroy',  [   'as'=>'motoristas.destroy',    'uses'=>'\App\Http\Controllers\MotoristasController@destroy'   ]);
        Route::get('{id}/edit',     [   'as'=>'motoristas.edit',       'uses'=>'\App\Http\Controllers\MotoristasController@edit'      ]);
        Route::put('{id}/update',   [   'as'=>'motoristas.update',     'uses'=>'\App\Http\Controllers\MotoristasController@update'    ]);
    });

    Route::group(['prefix'=>'pedidos', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'pedidos',               'uses'=>'\App\Http\Controllers\PedidosController@list'       ]);
        Route::get('create',        [   'as'=>'pedidos.create',        'uses'=>'\App\Http\Controllers\PedidosController@create'     ]);
        Route::post('store',        [   'as'=>'pedidos.store',         'uses'=>'\App\Http\Controllers\PedidosController@store'      ]);
        Route::get('{id}/destroy',  [   'as'=>'pedidos.destroy',       'uses'=>'\App\Http\Controllers\PedidosController@destroy'    ]);
        Route::get('{id}/edit',     [   'as'=>'pedidos.edit',          'uses'=>'\App\Http\Controllers\PedidosController@edit'       ]);
        Route::put('{id}/update',   [   'as'=>'pedidos.update',        'uses'=>'\App\Http\Controllers\PedidosController@update'     ]);
    });

    Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'produtos',              'uses'=>'\App\Http\Controllers\ProdutosController@list'      ]);
        Route::get('create',        [   'as'=>'produtos.create',       'uses'=>'\App\Http\Controllers\ProdutosController@create'    ]);
        Route::post('store',        [   'as'=>'produtos.store',        'uses'=>'\App\Http\Controllers\ProdutosController@store'     ]);
        Route::get('{id}/destroy',  [   'as'=>'produtos.destroy',      'uses'=>'\App\Http\Controllers\ProdutosController@destroy'   ]);
        Route::get('{id}/edit',     [   'as'=>'produtos.edit',         'uses'=>'\App\Http\Controllers\ProdutosController@edit'      ]);
        Route::put('{id}/update',   [   'as'=>'produtos.update',       'uses'=>'\App\Http\Controllers\ProdutosController@update'    ]);
    });

    Route::group(['prefix'=>'users', 'where'=>['id'=>'[0-9]+']], function() {
        Route::any('',              [   'as'=>'users',                 'uses'=>'\App\Http\Controllers\UsersController@list'     ]);
        Route::get('create',        [   'as'=>'users.create',          'uses'=>'\App\Http\Controllers\UsersController@create'   ]);
        Route::post('store',        [   'as'=>'users.store',           'uses'=>'\App\Http\Controllers\UsersController@store'    ]);
        Route::get('{id}/destroy',  [   'as'=>'users.destroy',         'uses'=>'\App\Http\Controllers\UsersController@destroy'  ]);
        Route::get('{id}/edit',     [   'as'=>'users.edit',            'uses'=>'\App\Http\Controllers\UsersController@edit'     ]);
        Route::put('{id}/update',   [   'as'=>'users.update',          'uses'=>'\App\Http\Controllers\UsersController@update'   ]);
    });
}); 



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
