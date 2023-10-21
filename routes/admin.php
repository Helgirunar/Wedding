<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/dashboard', '\App\Http\Controllers\Backend\Admin\DashboardController@index');
    Route::get('/','\App\Http\Controllers\Backend\Admin\DashboardController@index');
    Route::resource('/weddings','\App\Http\Controllers\Backend\Admin\WeddingController');
    Route::resource('/users','\App\Http\Controllers\Backend\Admin\UserController');
?>