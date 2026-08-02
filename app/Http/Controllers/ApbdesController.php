<?php

namespace App\Http\Controllers;

use App\Models\Apbdes;

class ApbdesController extends Controller
{
    /**
     * Halaman Transparansi (tab APBDDes) butuh data tahun anggaran terbaru
     * beserta rincian realisasi per bidang. Kalau belum ada data yang
     * diinput admin, $apbdes bakal null — blade-nya udah siap nampilin
     * pesan "belum tersedia" buat kasus itu, bukan error.
     */
    public function index()
    {
        $apbdes = Apbdes::with('realisasiBidang')->latest('tahun')->first();

        return view('pages.infografis', ['apbdes' => $apbdes]);
    }
}
