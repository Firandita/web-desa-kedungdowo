<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananSuratController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ApbdesController;
use App\Models\ProfilDesa;

Route::get('/', function () {
    // Statistik ringkas (jumlah penduduk, KK, dll) diambil dari tabel
    // profil_desa -- SUMBER YANG SAMA dengan yang dipakai halaman
    // Transparansi, supaya angkanya selalu konsisten di kedua halaman.
    $profil = ProfilDesa::first();

    return view('pages.beranda', ['profil' => $profil]);
})->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/pemerintahan', function () {
    return view('pages.pemerintahan');
})->name('pemerintahan');

Route::get('/potensi', [UmkmController::class, 'index'])->name('potensi');

Route::get('/transparansi', [ApbdesController::class, 'index'])->name('transparansi');

// Modul Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.detail');
Route::post('/berita/{id}/baca', [BeritaController::class, 'incrementView'])->name('berita.incrementView');

// Modul Layanan Surat (Fahmi)
Route::get('/layanan', [LayananSuratController::class, 'index'])->name('layanan');

// Modul Galeri (Fahmi)
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Modul Kontak & Pengaduan Warga (Fahmi)
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/pengaduan', [KontakController::class, 'store'])->name('kontak.store');
