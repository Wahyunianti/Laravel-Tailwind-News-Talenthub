<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\ArtikelController;






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


    //Admin
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
    Route::put('iklan/update/{id}', [IklanController::class, 'update'])->name('iklan.update');
    Route::delete('iklan/delete/{id}', [IklanController::class, 'delete'])->name('iklan.destroy');
    Route::get('/iklan/view/{id}', [IklanController::class, 'view'])->name('iklan.view');


    //Penulis 
    Route::get('tambah-artikel', [ArtikelController::class, 'tambah'])->name('tambah.artikel');
    Route::post('tambah-artikel', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('edit-artikel/{id}', [ArtikelController::class, 'tampil'])->name('tampil.artikel');
    Route::get('show-artikel/{id}', [ArtikelController::class, 'show'])->name('show.artikel');
    Route::put('edit-artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('artikel.destroy');

    // Route::prefix('kategori')->group(function () {
    // });
});


