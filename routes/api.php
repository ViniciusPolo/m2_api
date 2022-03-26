<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CampanhasController;
use App\Http\Controllers\DescontosController;
use App\Http\Controllers\GrupoCidadesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cidades', [CidadesController::class, 'index']);
Route::post('cidades/store', [CidadesController::class, 'store']);
Route::get('cidades/{id}', [CidadesController::class, 'show']);
Route::get('cidadesdetalhes/{id}', [CidadesController::class, 'showdetails']);
Route::put('cidades/update/{id}', [CidadesController::class, 'update']);
Route::delete('cidades/delete/{id}', [CidadesController::class, 'destroy']);

Route::get('grupocidades', [GrupoCidadesController::class, 'index']);
Route::post('grupocidades/store', [GrupoCidadesController::class, 'store']);
Route::get('grupocidades/{id}', [GrupoCidadesController::class, 'show']);
Route::put('grupocidades/update/{id}', [GrupoCidadesController::class, 'update']);
Route::delete('grupocidades/delete/{id}', [GrupoCidadesController::class, 'destroy']);

Route::get('campanhas', [CampanhasController::class, 'index']);
Route::post('campanhas/store', [CampanhasController::class, 'store']);
Route::get('campanhas/{id}', [CampanhasController::class, 'show']);
Route::put('campanhas/update/{id}', [CampanhasController::class, 'update']);
Route::delete('campanhas/delete/{id}', [CampanhasController::class, 'destroy']);

Route::get('produtos', [ProdutosController::class, 'index']);
Route::post('produtos/store', [ProdutosController::class, 'store']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);
Route::put('produtos/update/{id}', [ProdutosController::class, 'update']);
Route::delete('produtos/delete/{id}', [ProdutosController::class, 'destroy']);

Route::get('descontos', [DescontosController::class, 'index']);
Route::post('descontos/store', [DescontosController::class, 'store']);
Route::get('descontos/{id}', [DescontosController::class, 'show']);
Route::put('descontos/update/{id}', [DescontosController::class, 'update']);
Route::delete('descontos/delete/{id}', [DescontosController::class, 'destroy']);

