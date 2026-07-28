<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananSurat extends Model
{
    protected $table = 'layanan_surats';

    protected $fillable = [
        'nama_surat',
        'kode_surat',
        'kategori',
        'deskripsi',
        'persyaratan',
        'estimasi_waktu',
        'file_template',
    ];

    protected $casts = [
        'persyaratan' => 'array',
    ];
}
