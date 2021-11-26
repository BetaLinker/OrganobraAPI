<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObrasController;
use App\Http\Controllers\VistoriasController;
use App\Http\Controllers\ProprietariosController;

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

//Rotas de Obras
Route::get('/obras', [ObrasController::class, 'index']);
Route::post('/addObras', [ObrasController::class, 'store']);
Route::put('/updateObras', [ObrasController::class, 'update']);
Route::delete('/deleteObras/{idObras}', [ObrasController::class, 'destroy']);

//Rotas de Vistorias
Route::get('/vistorias', [VistoriasController::class, 'index']);
Route::post('/addVistorias', [VistoriasController::class, 'store']);
Route::put('/updateVistorias', [VistoriasController::class, 'update']);
Route::delete('/deleteVistorias/{idVistorias}', [VistoriasController::class, 'destroy']);


//Rotas de Proprietários
Route::get('/proprietarios', [ProprietariosController::class, 'index']);
Route::post('/addProprietarios', [ProprietariosController::class, 'store']);
Route::put('/updateProprietarios', [ProprietariosController::class, 'update']);
Route::delete('/deleteProprietarios/{idProprietario}', [ProprietariosController::class, 'destroy']);

