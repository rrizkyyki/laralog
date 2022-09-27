<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

// register route
Route::get('register', [RegistrationController::class, 'create'])->name('register');
Route::post('register', [RegistrationController::class, 'store'])->name('register');

// login route
Route::get('/', [LoginController::class, 'create'])->name('login');
Route::post('/', [LoginController::class, 'store'])->name('login');
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', [PegawaiController::class, 'index'])->middleware('auth');