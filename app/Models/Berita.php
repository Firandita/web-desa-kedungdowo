<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'tanggal',
        'deskripsi',
        'foto',
        'kategori',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
