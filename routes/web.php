<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [ClientsController::class, 'index']);

Auth::routes();

Route::resource('clients', ClientsController::class);
// Route::resource('products', ClientsController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Vue Routes
|--------------------------------------------------------------------------
|
*/
// Route::get('{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');
Route::get('/products{any}', function() {
    return view('layouts.app-vue');
})->where('any', '.*');