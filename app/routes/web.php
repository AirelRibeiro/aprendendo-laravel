<?php

use App\Http\Controllers\WordsController;
use Illuminate\Support\Facades\Route;

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
    return view('app');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login.form');
Route::post('/login', [AuthenticationController::class, 'logar'])->name('login');

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
