<?php

use App\Http\Controllers\EletroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/cadastrar/eletro', [EletroController::class, 'criandoEletro']);

Route::get('/eletrodomesticos', [EletroController::class, 'recuperarEletros']);

Route::get('/eletrodomestico/{id}', [EletroController::class, 'recuperarEletro']);

Route::put('/editar/eletrodomestico/{id}', [EletroController::class,'editandoEletro']);

Route::delete('/apagar/eletrodomestico/{id}', [EletroController::class, 'deletarEletro']);



