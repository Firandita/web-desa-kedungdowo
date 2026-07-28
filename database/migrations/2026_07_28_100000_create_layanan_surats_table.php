<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('layanan_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat');
            $table->string('kode_surat')->nullable();
            $table->string('kategori')->default('Umum');
            $table->text('deskripsi')->nullable();
            $table->json('persyaratan')->nullable();
            $table->string('estimasi_waktu')->default('1-2 Hari Kerja');
            $table->string('file_template')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanan_surats');
    }
};
