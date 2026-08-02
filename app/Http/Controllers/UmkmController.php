<?php

namespace App\Http\Controllers;

use App\Models\Umkm;

class UmkmController extends Controller
{
    /**
     * Halaman Potensi Desa butuh daftar UMKM. Kalau tabel `umkms` masih
     * kosong (belum ada admin yang input), tetep tampilin 6 kartu contoh
     * kosong biar halamannya gak keliatan "bolong" pas pertama kali dibuka.
     */
    public function index()
    {
        $umkmList = Umkm::latest()->get();

        return view('pages.potensi', ['umkmList' => $umkmList]);
    }
}
