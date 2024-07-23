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