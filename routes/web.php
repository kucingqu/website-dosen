<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('dosen',DosenController::class);

Route::get('/login',[SessionController::class,'index']);
Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'Login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);


