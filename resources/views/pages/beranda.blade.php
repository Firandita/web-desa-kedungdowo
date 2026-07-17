@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden">
  {{-- GANTI: foto hero (sawah/gapura desa) -> public/img/hero-sawah.jpg --}}
  <div class="h-[72vh] min-h-[420px] border-b-4 border-[var(--panen)] bg-cover bg-center img-slot"
       style="background-image:url('{{ asset('img/header.png') }}')">
  </div>
  <div class="absolute inset-0 bg-gradient-to-t from-[var(--sawah-dark)]/85 via-[var(--sawah-dark)]/25 to-transparent flex items-end">
    <div class="max-w-7xl mx-auto px-5 md:px-8 pb-10 md:pb-14 text-white w-full">
      <p class="uppercase tracking-widest text-xs md:text-sm text-[var(--panen)] font-semibold mb-3">Website Resmi Pemerintah Desa</p>
      <h1 class="font-display text-3xl md:text-5xl font-extrabold max-w-3xl leading-tight">Desa Kedungdowo, Kecamatan Balen</h1>
      <p class="mt-3 max-w-xl text-white/85 text-sm md:text-base">Desa agraris di Kabupaten Bojonegoro — dikenal lewat olahan pupuk organik warga, gerakan bank sampah, dan tradisi Sedekah Bumi yang masih lestari hingga kini.</p>
      <div class="mt-6 flex flex-wrap gap-3">
        <a href="{{ route('profil') }}" class="bg-[var(--panen)] text-[var(--sawah-dark)] font-semibold px-5 py-2.5 rounded-lg text-sm hover:brightness-105">Jelajahi Desa</a>
        <a href="{{ route('layanan') }}" class="border border-white/60 px-5 py-2.5 rounded-lg text-sm font-medium hover:bg-white/10">Layanan Surat</a>
      </div>
    </div>
  </div>
</section>

<div class="terasering"></div>

{{-- STATISTIK RINGKAS --}}
<section class="bg-[var(--sawah)] text-white py-8">
  <div class="max-w-7xl mx-auto px-5 md:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
    <div>
      <p class="font-display text-3xl font-extrabold text-[var(--panen)]">3.214</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Jumlah Penduduk</p>
    </div>
    <div>
      <p class="font-display text-3xl font-extrabold text-[var(--panen)]">982</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Kepala Keluarga</p>
    </div>
    <div>
      <p class="font-display text-3xl font-extrabold text-[var(--panen)]">4</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Dusun</p>
    </div>
    <div>
      <p class="font-display text-3xl font-extrabold text-[var(--panen)]">300+</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Ekor Sapi Ternak Warga</p>
    </div>
  </div>
  <p class="text-center text-white/50 text-xs mt-4">*Data contoh (dummy) — akan diganti data resmi dari perangkat desa</p>
</section>

{{-- SAMBUTAN KADES (ringkas, versi lengkap di halaman Profil) --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16 grid md:grid-cols-2 gap-10 items-center">
  <div>
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2">Sambutan</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-4">Kepala Desa Kedungdowo</h2>
    <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/90">
      "Selamat datang di website resmi Desa Kedungdowo. Melalui platform ini, kami ingin membuka akses informasi seluas-luasnya bagi warga maupun masyarakat luar."
    </p>
    <p class="mt-5 font-display font-bold text-[var(--sawah-dark)]">Yuyus Adi Setiawan, S.Pd.</p>
    <p class="text-sm text-[var(--tanah)]">Kepala Desa Kedungdowo</p>
    <a href="{{ route('profil') }}" class="inline-block mt-4 text-sm font-semibold text-[var(--sawah-dark)] underline underline-offset-4">Baca profil lengkap desa →</a>
  </div>
  {{-- GANTI: foto kepala desa -> public/img/kepala-desa.jpg --}}
  <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa Kedungdowo"
       class="aspect-[4/5] w-full object-cover rounded-2xl border border-[var(--sawah)]/20 img-slot"
       onerror="this.classList.add('img-slot')">
</section>

<div class="terasering-flip"></div>

{{-- RINGKASAN POTENSI (link ke halaman Potensi) --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Ekonomi Warga</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Potensi & UMKM Desa</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover">
        {{-- GANTI: foto pupuk organik -> public/img/pupuk-griyorojokoyo.jpg --}}
        <img src="{{ asset('img/pupuk-griyorojokoyo.jpg') }}" alt="Pupuk Organik Griyorojokoyo" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-display font-bold text-[var(--sawah-dark)]">Pupuk Organik Griyorojokoyo</p>
          <p class="text-sm text-[var(--teks)]/70 mt-2">Usaha pengolahan limbah kotoran ternak sapi menjadi pupuk organik.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover">
        {{-- GANTI: foto bank sampah -> public/img/bank-sampah-mawar.jpg --}}
        <img src="{{ asset('img/bank-sampah-mawar.jpg') }}" alt="Bank Sampah Mawar" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-display font-bold text-[var(--sawah-dark)]">Bank Sampah Mawar</p>
          <p class="text-sm text-[var(--teks)]/70 mt-2">Mengelola sampah rumah tangga menjadi pupuk dan media tanam.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover">
        {{-- GANTI: foto peternakan sapi -> public/img/peternakan-sapi.jpg --}}
        <img src="{{ asset('img/peternakan-sapi.jpg') }}" alt="Peternakan Sapi Warga" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-display font-bold text-[var(--sawah-dark)]">Peternakan Sapi Warga</p>
          <p class="text-sm text-[var(--teks)]/70 mt-2">Sentra peternakan sapi rakyat, penopang ekonomi desa.</p>
        </div>
      </div>
    </div>
    <div class="text-center mt-8">
      <a href="{{ route('potensi') }}" class="text-sm font-semibold text-[var(--sawah-dark)] underline underline-offset-4">Lihat semua potensi desa →</a>
    </div>
  </div>
</section>

@endsection
