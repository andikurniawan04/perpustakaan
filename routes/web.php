<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
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
        return view('admin.index');
    });

Route::get('/konten', function () {
        return view('admin.konten');
    });

Route::get('/login', function () {
        return view('auth.login');
    });

// Kategori
Route::resource('kategori', KategoriController::class);
//Register
Route::resource('register', RegisterController::class);


// Route::get('/', function () { 
//     return view('welcome');
// });
