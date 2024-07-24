<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IklanController;





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
    return view('index');
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    //Dashboard
    Route::get('dashboard-penulis', [DashboardController::class, 'penulis'])->name('dashboard.penulis');
    Route::get('dashboard-admins', [DashboardController::class, 'admins'])->name('dashboard.admin');


    Route::get('pengguna', [UserController::class, 'index'])->name('pengguna');
    Route::post('pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
    Route::delete('pengguna/delete/{id}', [UserController::class, 'delete'])->name('pengguna.destroy');
    Route::put('pengguna/update/{id}', [UserController::class, 'update'])->name('pengguna.update');

    Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::post('kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::delete('kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.destroy');
    Route::put('kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

    Route::get('iklan', [IklanController::class, 'index'])->name('iklan.index');
    Route::post('iklan/store', [IklanController::class, 'store'])->name('iklan.store');
    Route::put('iklan/delete/{id}', [IklanController::class, 'update'])->name('iklan.update');
    Route::delete('iklan/update/{id}', [IklanController::class, 'delete'])->name('iklan.destroy');

    // Route::prefix('kategori')->group(function () {
    // });
});




Route::get('/berita', function () {
    return view('pembaca.berita');
});


Route::get('/subkategori', function () {
    return view('pembaca.sub-kategori');
});

Route::get('/swberita', function () {
    return view('pembaca.tampil-berita');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/user', function () {
    return view('admin.datauser');
});

Route::get('/penulis', function () {
    return view('penulis.dashboard');
});

Route::get('/tbartikel', function () {
    return view('penulis.tambah-artikel');
});

Route::get('/tpartikel', function () {
    return view('penulis.tampil-artikel');
});