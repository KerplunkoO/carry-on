<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

// Produtos
Route::group(['prefix'=>'produtos','where'=>['id'=>'[0-9]+']], function(){

	Route::get('',['as'=>'produtos','uses'=>'ProdutosController@index']);

	Route::get('create',['as'=>'produtos.create', 'uses'=>'ProdutosController@create']);

	Route::post('store',['as'=>'produtos.store', 'uses'=>'ProdutosController@store']);

	Route::get('{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutosController@destroy']);

	Route::get('{id}/edit',['as'=>'produtos.edit', 'uses'=>'ProdutosController@edit']);

	Route::put('{id}/update',['as'=>'produtos.update', 'uses'=>'ProdutosController@update']);

	Route::get('{id}/view',['as'=>'produtos.view', 'uses'=>'ProdutosController@view']);
});

Route::put('{id}/view/novaAvaliacao',['as'=>'avaliacao.create', 'uses'=>'AvaliacaoProdutoController@create']);


Route::get('/home', 'HomeController@index');

