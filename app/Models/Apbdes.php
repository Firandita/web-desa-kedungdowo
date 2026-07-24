<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apbdes extends Model
{
    protected $table = 'apbdes';

    protected $fillable = [
        'tahun',
        'pendapatan',
        'belanja',
        'dokumen_pdf',
    ];

    public function realisasiBidang(): HasMany
    {
        return $this->hasMany(RealisasiBidang::class);
    }
}
