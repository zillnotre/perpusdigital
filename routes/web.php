<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\peminjaman_bukuController;
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

Route::resource('buku', bukuController::class)->middleware('login');
Route::resource('peminjaman_buku', peminjaman_bukuController::class);

Route::get('/login', [SessionController::class,'index'])->middleware('guest');
Route::get('sesi', [SessionController::class,'index'])->middleware('guest');
Route::post('/sesi/login',[SessionController::class,'login'])->middleware('guest');
Route::get('/sesi/logout', [SessionController::class,'logout']);

