<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

use App\Http\Controllers\MainController;
use App\Http\Controllers\peminjaman_bukuController;
use App\Http\Controllers\SessionController;
use App\Models\ulasan_buku;

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
})->name('/dashboard');


Route::resource('buku', bukuController::class)->middleware('login');
Route::resource('peminjaman_buku', peminjaman_bukuController::class);
Route::resource('ulasan_buku', \App\Http\Controllers\ulasan_bukuController::class);
Route::resource('kategori_buku', \App\Http\Controllers\kategori_bukuController::class);



Route::get('/register', [SessionController::class, 'register'])->name('sesi.register');
Route::get('/login', [SessionController::class,'index'])->middleware('guest');
Route::get('sesi', [SessionController::class,'index'])->middleware('guest');
Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/save_register', [SessionController::class, 'save_register'])->name('save_register');


Route::post('/sesi/login',[SessionController::class,'login'])->middleware('guest');
Route::get('/sesi/logout', [SessionController::class,'logout']);


Route::group(['middleware' => ['auth','CekLevel:admin']],function(){
    route::get('/buku', 'BukuController@index')->name('buku');
    route::get('/peminjaman_buku', 'peminjaman_buku@index')->name('peminjaman_buku');
    route::get('/kategori_buku', 'kategori_bukuController@index')->name('kategori_buku');
});

