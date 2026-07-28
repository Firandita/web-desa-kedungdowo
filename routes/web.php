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
    return view('pages.infografis');
})->name('transparansi');

Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

Route::get('/berita/{id}', function ($id) {
    $daftarBerita = include resource_path('views/pages/berita-data.php');

    if (!isset($daftarBerita[$id])) {
        abort(404);
    }

    return view('pages.berita-detail', ['berita' => $daftarBerita[$id]]);
})->name('berita.detail');

Route::get('/layanan', function () {
    return view('pages.layanan-surat');
})->name('layanan');

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');