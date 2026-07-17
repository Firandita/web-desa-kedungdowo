<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/pemerintahan', function () {
    return view('pages.pemerintahan');
})->name('pemerintahan');

Route::get('/potensi', function () {
    return view('pages.potensi');
})->name('potensi');

// Halaman di bawah ini masih placeholder -- akan diisi satu per satu
// di paket-paket berikutnya. Untuk sekarang diarahkan ke beranda dulu
// supaya link navbar tidak error 404.

Route::get('/transparansi', function () {
    return view('pages.beranda');
})->name('transparansi');

Route::get('/berita', function () {
    return view('pages.beranda');
})->name('berita');

Route::get('/layanan', function () {
    return view('pages.beranda');
})->name('layanan');

Route::get('/galeri', function () {
    return view('pages.beranda');
})->name('galeri');

Route::get('/kontak', function () {
    return view('pages.beranda');
})->name('kontak');
