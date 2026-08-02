@extends('layouts.app')

@section('title', 'Potensi Desa')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Potensi Desa',
  'title'    => 'Potensi & UMKM Desa Kedungdowo',
  'subtitle' => 'Ekonomi warga berbasis pertanian, peternakan, dan pengolahan limbah organik',
])

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

    @if ($umkmList->isEmpty())
      {{-- Belum ada UMKM yang didaftarkan lewat admin panel --}}
      <div class="rounded-2xl border border-dashed border-[var(--sawah)]/25 py-14 px-6 text-center">
        <span class="material-symbols-outlined text-5xl text-[var(--sawah)]/30">storefront</span>
        <p class="font-section font-bold text-[var(--sawah-dark)] mt-3">Belum ada UMKM terdaftar</p>
        <p class="text-sm text-[var(--teks)]/60 mt-1 max-w-md mx-auto">Data akan muncul di sini begitu perangkat desa mendaftarkan usaha warga lewat panel admin.</p>
      </div>
    @else
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($umkmList as $umkm)
        <div class="rounded-xl overflow-hidden border border-[var(--sawah)]/15 card-hover" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 6) * 60 }}">
          {{-- Foto UMKM: hasil upload admin (storage) atau img-slot kalau belum ada foto --}}
          @if ($umkm->foto)
            <img src="{{ asset('storage/' . $umkm->foto) }}" alt="{{ $umkm->nama_usaha }}" class="h-32 w-full object-cover">
          @else
            <div class="h-32 w-full img-slot"></div>
          @endif
          <div class="p-5">
            <p class="font-display font-bold text-[var(--sawah-dark)] text-sm">{{ $umkm->nama_usaha }}</p>
            <p class="text-xs text-[var(--tanah)] mt-1">Kategori: {{ $umkm->kategori ?? '-' }}</p>
            <p class="text-xs text-[var(--teks)]/60 mt-2">Pemilik: {{ $umkm->nama_pemilik }} @if($umkm->dusun) · Dusun {{ $umkm->dusun }} @endif</p>
            @if ($umkm->kontak)
              <p class="text-xs text-[var(--teks)]/60">Kontak: {{ $umkm->kontak }}</p>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>

@endsection