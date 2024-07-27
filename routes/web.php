<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BobotController;








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

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::get('login', [DashboardController::class, 'index'])->name('index');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    //Dashboard
    Route::get('dashboard-penulis', [DashboardController::class, 'penulis'])->name('dashboard.penulis');
    Route::get('dashboard-admins', [DashboardController::class, 'admins'])->name('dashboard.admin');

    Route::middleware('isAdmin')->group(function () {

        //Admin
        Route::get('pengguna', [UserController::class, 'index'])->name('pengguna');
        Route::post('pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
        Route::delete('pengguna/delete/{id}', [UserController::class, 'delete'])->name('pengguna.destroy');
        Route::put('pengguna/update/{id}', [UserController::class, 'update'])->name('pengguna.update');

        Route::get('kategori/index', [KategoriController::class, 'index'])->name('kategori.index');
        Route::post('kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
        Route::delete('kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.destroy');
        Route::put('kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

        Route::get('iklan', [IklanController::class, 'index'])->name('iklan.index');
        Route::post('iklan/store', [IklanController::class, 'store'])->name('iklan.store');
        Route::put('iklan/update/{id}', [IklanController::class, 'update'])->name('iklan.update');
        Route::delete('iklan/delete/{id}', [IklanController::class, 'delete'])->name('iklan.destroy');
        Route::get('/iklan/view/{id}', [IklanController::class, 'view'])->name('iklan.view');

        Route::get('bobot', [BobotController::class, 'index'])->name('bobot.index');
        Route::post('bobot/update/{id}', [BobotController::class, 'update'])->name('bobot.update');
        Route::get('/search-articles', [BobotController::class, 'search'])->name('articles.search');

    });

    Route::middleware('isPenulis')->group(function () {

        //Penulis 
        Route::get('tambah-artikel', [ArtikelController::class, 'tambah'])->name('tambah.artikel');
        Route::post('tambah-artikel', [ArtikelController::class, 'store'])->name('artikel.store');
        Route::get('edit-artikel/{id}', [ArtikelController::class, 'tampil'])->name('tampil.artikel');
        Route::get('show-artikel/{id}', [ArtikelController::class, 'show'])->name('show.artikel');
        Route::put('edit-artikel/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
        Route::delete('artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('artikel.destroy');
    });


});


Route::middleware('guest')->group(function () {

    //Berita

    Route::get('view-artikel/{id}/{judul}', [BeritaController::class, 'viewberita'])->name('view.artikel');
    Route::get('/search/tag/{nama}', [BeritaController::class, 'Tagnama'])->name('search.tag');
    Route::get('/search-berita', [BeritaController::class, 'search'])->name('berita.search');
    Route::post('add-komen/{id}', [BeritaController::class, 'komentar'])->name('add.komen');
    Route::post('add-balasan/{id}/{komen}', [BeritaController::class, 'balasan'])->name('add.balasan');
    Route::get('berita', [BeritaController::class, 'allberita'])->name('all.berita');
    Route::get('kategori', [BeritaController::class, 'allkategori'])->name('all.kategori');
    Route::get('subkategori/{id}', [BeritaController::class, 'subkategori'])->name('sub.kategori');


});








