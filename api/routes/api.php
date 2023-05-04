<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios', 'App\Http\Controllers\UserController@index');
Route::get('/usuarios/{id}', 'App\Http\Controllers\UserController@show');
Route::post('/usuarios', 'App\Http\Controllers\UserController@store');
Route::put('/usuarios/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UserController@destroy');

Route::get('/productos', 'App\Http\Controllers\ProductoController@index');



