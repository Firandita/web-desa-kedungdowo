<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';

    protected $fillable = [
        'nomor_tiket',
        'tipe_laporan',
        'nama_pelapor',
        'is_anonim',
        'no_whatsapp',
        'kategori',
        'isi_laporan',
        'file_lampiran',
        'status',
        'tanggapan',
    ];

    protected $casts = [
        'is_anonim' => 'boolean',
    ];
}
