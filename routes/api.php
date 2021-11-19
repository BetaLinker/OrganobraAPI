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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//TESTE

//Rotas de Obras
Route::get('/obras','ObrasController@getAll');

//Rotas de Vistorias
Route::get('/vistorias','VistoriasController@getAll');

//Rotas de Proprietários
Route::get('/proprietarios','ProprietariosController@getAll');