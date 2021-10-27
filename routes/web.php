<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


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


Route::get('/', function() {
    return view('home');
})->middleware('auth');

Route::get('/register',[RegisterController::class,'create'])->name('register.index'); 
Route::post('/register',[RegisterController::class,'cargar'])->name('register.cargar'); 
Route::get('/login',[SessionController::class,'create'])->name('login.index'); 
Route::post('/login',[SessionController::class,'cargar'])->name('login.cargar'); 

