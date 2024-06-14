<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ShopController::class, 'index']);
// ログイン状態
Route::group(['middleware' => 'auth'], function() {
    Route::get('/mycart', [App\Http\Controllers\ShopController::class, 'myCart']);
    Route::post('/mycart', [App\Http\Controllers\ShopController::class, 'addmyCart']);
});
Auth::routes();
