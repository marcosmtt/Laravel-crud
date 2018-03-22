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

Route::get('ex', function() {
   return "<h1>Exemplo de Uso das Rotas</h1>";
});

Route::get('ex2', function() {
    return view('exemplo2');
});

Route::get('ex3', 'AulaController@mostra');

Route::get('revenda', 'AulaController@promocao');

Route::get('cadastro', 'AulaController@cadastro');

Route::post('recebeDados', 'AulaController@recebe');

Route::resource('produtos', 'ProdutoController');