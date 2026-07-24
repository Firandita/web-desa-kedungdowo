<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';

    protected $fillable = [
        'nama_usaha',
        'kategori',
        'nama_pemilik',
        'dusun',
        'kontak',
        'foto',
    ];
}
