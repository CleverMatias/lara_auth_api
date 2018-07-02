<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Retorna todos os artigos paginados
Route::get('articles', 'ArticlesController@index');

//Retorna um único artigo pelo id 
Route::get('article/{id}', 'ArticlesController@show');

//Recebe article_id, title e body
Route::put('articles', 'ArticlesController@store');

//Recebe title e body
Route::post('articles', 'ArticlesController@store');

//Retorna 203 se deletar
Route::delete('article/{id}', 'ArticlesController@destroy');

