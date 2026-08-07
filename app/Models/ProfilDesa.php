<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $table = 'profil_desa';

    protected $fillable = [
        'jumlah_penduduk',
        'jumlah_kk',
        'jumlah_laki_laki',
        'jumlah_perempuan',
        'jumlah_dusun',
        'jumlah_ternak_sapi',
    ];

    /**
     * Tabel ini sengaja dirancang cuma diisi SATU baris data
     * (data ringkasan desa terkini), bukan banyak baris kayak Berita/UMKM.
     * Dipakai bareng oleh Beranda dan halaman Transparansi supaya
     * angkanya selalu sama persis di kedua tempat.
     */
}
