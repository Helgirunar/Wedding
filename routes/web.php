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

//Index
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
// Account
Route::get('/login', '\App\Http\Controllers\Frontend\AccountController@loginForm');
Route::post('/login', '\App\Http\Controllers\Frontend\AccountController@login');


Route::get('/register', '\App\Http\Controllers\Frontend\AccountController@registerForm');
Route::post('/register', '\App\Http\Controllers\Frontend\AccountController@register');


//All registered users.
Route::middleware(['web', 'auth'])->prefix('user')->group(function () {
    Route::get('/dashboard', '\App\Http\Controllers\Frontend\AccountController@loginForm')->name('user.dashboard');
});

//Guests
Route::get('/wedding/{weddings}', '\App\Http\Controllers\Frontend\WeddingController@index');

?>