<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/berita', function () {
    return view('pembaca.berita');
});

Route::get('/kategori', function () {
    return view('pembaca.kategori');
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