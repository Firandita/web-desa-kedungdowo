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

Route::get('/transparansi', function () {
    return view('pages.beranda'); // sementara, belum dibuat halamannya
})->name('transparansi');

Route::get('/berita', function () {
    return view('pages.beranda'); // sementara
})->name('berita');

Route::get('/layanan', function () {
    return view('pages.layanan-surat');
})->name('layanan');

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');