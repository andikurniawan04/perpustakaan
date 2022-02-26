<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
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

Route::group(['middleware' => ['auth', 'cekStatus:petugas']], function () {
    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.index');
    });
    // Kategori
    Route::resource('kategori', KategoriController::class);
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});



Route::get('/contoh', [ContohController::class, 'index']);


// Route::get('/', function () { 
//     return view('welcome');
// });
