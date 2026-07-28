<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->nullable();
            $table->date('tanggal');
            $table->string('penulis')->default('Humas Pemdes');
            $table->unsignedInteger('dilihat')->default(0);
            $table->text('ringkasan')->nullable();
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
