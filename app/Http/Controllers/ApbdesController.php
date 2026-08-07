<?php

namespace App\Http\Controllers;

use App\Models\Apbdes;
use App\Models\ProfilDesa;

class ApbdesController extends Controller
{
    /**
     * Halaman Transparansi butuh data APBDes (anggaran) DAN data
     * ringkasan penduduk. Keduanya dikirim ke satu halaman gabungan
     * (tidak pakai tab terpisah lagi) supaya lebih ringkas.
     *
     * $profil dan $apbdes bisa null kalau admin belum input data --
     * blade-nya sudah siap nampilin pesan "belum tersedia" buat itu,
     * bukan error.
     */
    public function index()
    {
        $apbdes = Apbdes::with('realisasiBidang')->latest('tahun')->first();
        $profil = ProfilDesa::first();

        return view('pages.infografis', [
            'apbdes' => $apbdes,
            'profil' => $profil,
        ]);
    }
}
