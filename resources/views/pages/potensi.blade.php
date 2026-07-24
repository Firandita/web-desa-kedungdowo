@extends('layouts.app')

@section('title', 'Potensi Desa')

@section('content')

{{-- HEADER HALAMAN --}}
<section class="bg-[var(--sawah)] text-white py-14">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--panen)] mb-2">Potensi Desa</p>
    <h1 class="font-display text-3xl md:text-4xl font-extrabold">Potensi & UMKM Desa Kedungdowo</h1>
    <p class="text-white/80 text-sm md:text-base mt-2 max-w-2xl">Ekonomi warga berbasis pertanian, peternakan, dan pengolahan limbah organik</p>
  </div>
</section>

<div class="terasering"></div>

{{-- POTENSI UTAMA (3 unggulan) --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Unggulan Desa</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Potensi Ekonomi Utama</h2>

  <div class="space-y-10">
    {{-- Pupuk Organik --}}
    <div class="grid md:grid-cols-2 gap-8 items-center" data-aos="fade-right">
      {{-- GANTI: foto pupuk organik -> public/img/pupuk-griyorojokoyo.jpg --}}
      <img src="{{ asset('img/pupuk-griyorojokoyo.jpg') }}" alt="Pupuk Organik Griyorojokoyo"
           class="aspect-[4/3] w-full object-cover rounded-2xl img-slot" onerror="this.classList.add('img-slot')">
      <div>
        <p class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-2">Pupuk Organik "Griyorojokoyo"</p>
        <p class="text-sm text-[var(--teks)]/75 leading-relaxed">
          Usaha pengolahan limbah kotoran ternak sapi menjadi pupuk organik, dikelola oleh
          warga Dusun Kedungdowo. Produk ini membantu petani sekitar mendapatkan pupuk berkualitas
          dengan harga lebih terjangkau, sekaligus mengurangi limbah peternakan yang mencemari lingkungan.
        </p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="text-xs bg-[var(--sawah)]/10 text-[var(--sawah-dark)] px-3 py-1 rounded-full font-medium">Pertanian</span>
          <span class="text-xs bg-[var(--sawah)]/10 text-[var(--sawah-dark)] px-3 py-1 rounded-full font-medium">Ramah Lingkungan</span>
        </div>
      </div>
    </div>

    {{-- Bank Sampah --}}
    <div class="grid md:grid-cols-2 gap-8 items-center" data-aos="fade-left">
      <div class="md:order-2">
        {{-- GANTI: foto bank sampah -> public/img/bank-sampah-mawar.jpg --}}
        <img src="{{ asset('img/bank-sampah-mawar.jpg') }}" alt="Bank Sampah Mawar"
             class="aspect-[4/3] w-full object-cover rounded-2xl img-slot" onerror="this.classList.add('img-slot')">
      </div>
      <div class="md:order-1">
        <p class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-2">Bank Sampah Mawar</p>
        <p class="text-sm text-[var(--teks)]/75 leading-relaxed">
          Mengelola sampah rumah tangga dan bahan organik warga menjadi pupuk kompos dan media
          tanam yang bernilai jual. Selain mengurangi volume sampah desa, program ini juga
          mengedukasi warga soal pemilahan sampah dari sumbernya.
        </p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="text-xs bg-[var(--sawah)]/10 text-[var(--sawah-dark)] px-3 py-1 rounded-full font-medium">Lingkungan</span>
          <span class="text-xs bg-[var(--sawah)]/10 text-[var(--sawah-dark)] px-3 py-1 rounded-full font-medium">Ekonomi Sirkular</span>
        </div>
      </div>
    </div>

    {{-- Peternakan --}}
    <div class="grid md:grid-cols-2 gap-8 items-center" data-aos="fade-right">
      {{-- GANTI: foto peternakan sapi -> public/img/peternakan-sapi.jpg --}}
      <img src="{{ asset('img/peternakan-sapi.jpg') }}" alt="Peternakan Sapi Warga"
           class="aspect-[4/3] w-full object-cover rounded-2xl img-slot" onerror="this.classList.add('img-slot')">
      <div>
        <p class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-2">Peternakan Sapi Rakyat</p>
        <p class="text-sm text-[var(--teks)]/75 leading-relaxed">
          Sentra peternakan sapi rakyat yang menjadi penopang ekonomi warga sekaligus penyedia
          bahan baku utama untuk usaha pupuk organik desa — menciptakan siklus ekonomi yang saling
          menopang antar sektor.
        </p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="text-xs bg-[var(--sawah)]/10 text-[var(--sawah-dark)] px-3 py-1 rounded-full font-medium">Peternakan</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="terasering-flip"></div>

{{-- DIREKTORI UMKM --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Direktori</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-3 text-center">UMKM Warga Kedungdowo</h2>
    <p class="text-center text-sm text-[var(--teks)]/70 max-w-2xl mx-auto mb-10">
      Daftar usaha kecil-menengah milik warga. Data ini contoh — nanti diisi lewat panel admin
      sehingga tiap pemilik usaha bisa didaftarkan dengan mudah.
    </p>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      {{-- Ulangi blok card ini untuk tiap UMKM --}}
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="0">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [Kuliner / Kerajinan / Pertanian]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="60">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [___]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="120">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [___]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="180">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [___]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="240">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [___]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
      <div class="rounded-xl border border-[var(--sawah)]/15 p-5 card-hover" data-aos="fade-up" data-aos-delay="300">
        <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">[Nama Usaha]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Kategori: [___]</p>
        <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: [Nama Pemilik] · Dusun [___]</p>
        <p class="text-xs text-[var(--teks)]/60">Kontak: [No. WA]</p>
      </div>
    </div>
    <p class="text-xs text-[var(--teks)]/50 mt-6 text-center">
      *6 kartu ini contoh kosong. Isi nama & jumlah UMKM sebenarnya dari hasil pendataan warga.
    </p>
  </div>
</section>

@endsection
