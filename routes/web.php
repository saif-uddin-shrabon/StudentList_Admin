<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Models\Studentlist;

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
Route::post('/register',[RegistrationController::class, 'view']);

Route::get('/', [LoginController::class, 'linginindex']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/studentlist', function(){
    $Studentlist = Studentlist::all();
    echo "<pre>";
    print_r($Studentlist->toArray());
   });