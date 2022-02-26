<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KategoriController;

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

// Dashboard
Route::get('/', function () {
    return view('admin.index');
});

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Kategori
Route::resource('kategori', KategoriController::class);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/contoh', [ContohController::class, 'index']);


// Route::get('/', function () { 
//     return view('welcome');
// });
