<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MeminjamController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HistoryController;
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

Route::middleware(['auth', 'status:anggota'])->group(function () {
    // Dashboard Anggota
    Route::get('/home', [MeminjamController::class, 'indexAnggota']);

    Route::resource('pinjam', MeminjamController::class);

    Route::resource('history', HistoryController::class);
});

//Register
Route::resource('register', RegisterController::class);

// Cuma statusnya petugas doang yang bisa ngakses halaman berikut
Route::middleware(['auth', 'status:petugas'])->group(function () {
    // Dashboard Admin
    Route::get('/', [BukuController::class, 'indexAdmin']);

    // Kategori
    Route::resource('kategori', KategoriController::class);

    // Laporan
    Route::resource('laporan', LaporanController::class);

    // Admin.Buku
    Route::resource('buku', BukuController::class);
});

// Cuma statusnya yang belom login yang bisa ngakses halaman berikut
Route::middleware(['guest'])->group(function () {
    // Login
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    //Register
    Route::resource('register', RegisterController::class);
});


// Logout
Route::post('/logout', [LoginController::class, 'logout']);
