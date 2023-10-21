<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

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

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register',[RegistrationController::class, 'register']);

Route::get('/login', [LoginController::class, 'linginindex']);
Route::post('/login', [LoginController::class, 'login']);