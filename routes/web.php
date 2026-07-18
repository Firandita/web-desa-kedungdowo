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

// =========================================================================
// HALAMAN YANG SUDAH SELESAI DIKEMBANGKAN
// =========================================================================

// Halaman Infografis Desa Kedungdowo
Route::get('/infografis', function () {
    return view('pages.infografis'); 
})->name('infografis');

// Halaman Layanan Surat (Alur & Unduh Template)
Route::get('/layanan', function () {
    return view('pages.layanan-surat'); // Pastikan nama file-mu resources/views/pages/layanan-surat.blade.php
})->name('layanan');

// Halaman Galeri Kegiatan Desa (Inovasi Tab Filter + Lightbox Pop-up)
Route::get('/galeri', function () {
    return view('pages.galeri'); // Pastikan nama file-mu resources/views/pages/galeri.blade.php
})->name('galeri');


// =========================================================================
// HALAMAN PLACEHOLDER (AKAN DIKERJAKAN PADA PAKET BERIKUTNYA)
// Diarahkan sementara ke beranda agar tidak error 404 / Controller Missing
// =========================================================================

Route::get('/berita', function () {
    return view('pages.beranda');
})->name('berita');

// Cari bagian placeholder ini di routes/web.php dan ubah menjadi:
Route::get('/kontak', function () {
    return view('pages.kontak'); 
})->name('kontak');