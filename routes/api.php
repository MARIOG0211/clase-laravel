<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('usuario', UserController::class);
Route::resource('entrada', GatewayController::class);
Route::resource('metodopago', PaymentController::class);
Route::resource('rol', RolController::class);
Route::resource('perfil', ProfileController::class);
Route::resource('registro', RegisterController::class);
