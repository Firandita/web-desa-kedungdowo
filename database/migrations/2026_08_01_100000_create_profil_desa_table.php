<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_desa', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('jumlah_penduduk')->default(0);
            $table->unsignedInteger('jumlah_kk')->default(0);
            $table->unsignedInteger('jumlah_laki_laki')->default(0);
            $table->unsignedInteger('jumlah_perempuan')->default(0);
            $table->unsignedInteger('jumlah_dusun')->default(4);
            $table->unsignedInteger('jumlah_ternak_sapi')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_desa');
    }
};
