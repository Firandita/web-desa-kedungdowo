<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_tiket')->unique();
            $table->string('tipe_laporan')->default('pengaduan'); // pengaduan, aspirasi, pertanyaan
            $table->string('nama_pelapor');
            $table->boolean('is_anonim')->default(false);
            $table->string('no_whatsapp');
            $table->string('kategori');
            $table->text('isi_laporan');
            $table->string('file_lampiran')->nullable();
            $table->string('status')->default('pending'); // pending, proses, selesai, ditolak
            $table->text('tanggapan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
