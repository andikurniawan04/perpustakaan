<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
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
    Route::get('/home', function () {
        return view('anggota.index');
    });
    Route::get('/artikel', function () {
        return view('anggota.artikel');
    });
});

// Cuma statusnya petugas doang yang bisa ngakses halaman berikut
Route::middleware(['auth', 'status:petugas'])->group(function () {
    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/konten', function () {
        return view('admin.konten');
    });
    // Kategori
    Route::resource('kategori', KategoriController::class);

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
