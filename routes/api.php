<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/



use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ClientsController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('clients', ClientsController::class)->middleware('auth:api');

/*
Api for Vue
*/

use App\Http\Controllers\ProductController;

Route::middleware('api')->group(function () {
    Route::resource('products', ProductController::class);
});