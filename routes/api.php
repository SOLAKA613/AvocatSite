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

Route::get('audiences','Api\ControllerApiAudience@listAudiences');
Route::get('dossiers','Api\ControllerApiKadaya@listDossiers');
Route::get('procedures','Api\ControllerApiProcedure@listProcedures');
Route::get('jugements','Api\ControllerApiJuge@listJuges');
Route::get('avocats','Api\ControllerApiAvocat@listAvocats');

