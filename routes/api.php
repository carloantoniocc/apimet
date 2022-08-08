<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\RegistroController;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::apiResource('v1/clientes', App\Http\Controllers\Api\V1\ClienteController::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class,
    'login']);

Route::post('v1/registro', [RegistroController::class,
    'store']);
