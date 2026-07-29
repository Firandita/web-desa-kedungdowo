<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananSuratController;
use App\Http\Controllers\KontakController;

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

// Modul Berita (Fahmi)
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');

// Modul Layanan Surat (Fahmi)
Route::get('/layanan', [LayananSuratController::class, 'index'])->name('layanan');

// Modul Galeri (Fahmi)
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Modul Kontak & Pengaduan Warga (Fahmi)
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/pengaduan', [KontakController::class, 'store'])->name('kontak.store');