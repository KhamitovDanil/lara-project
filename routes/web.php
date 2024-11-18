<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/signup', [GuestController::class, 'signup'])->name('signup');
Route::get('/login', [GuestController::class, 'login'])->name('login');

Route::post('/register', [GuestController::class, 'register'])->name('register');
Route::post('/login', [GuestController::class, 'auth'])->name('login');

