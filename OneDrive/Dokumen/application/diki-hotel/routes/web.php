<?php

use App\Models\User;
use Illuminate\Support\Carbon;
use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\TranksaksiController;




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

Route::get('/', function () {
    return view('login.index', [
        
        'title' => 'login',
        
    ]);
});

// Route::get('/pelayanan', function () {
//     return view('pelayanan.pelayanan', [
//         'title' => 'Beranda Hotel',
//         'users' => User::get()
//     ]);
// })->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Menggunakan GET untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Menggunakan POST untuk mengotentikasi pengguna
Route::post('/login', [LoginController::class, 'authenticate']);

// Menggunakan POST untuk logout
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pelayanan', [PelayananController::class, 'index'])->name('pelayanan.index')->middleware('auth');
Route::get('/about', [AboutController::class, 'index'])->name('about')->middleware('auth');

Route::get('/tranksaksi', [TranksaksiController::class, 'index'])->name('riwayat')->middleware('auth');




