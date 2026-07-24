<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RealisasiBidang extends Model
{
    protected $table = 'realisasi_bidang';

    protected $fillable = [
        'apbdes_id',
        'bidang',
        'alokasi',
        'realisasi_persen',
    ];

    public function apbdes(): BelongsTo
    {
        return $this->belongsTo(Apbdes::class);
    }
}
