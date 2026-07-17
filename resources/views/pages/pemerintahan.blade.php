@extends('layouts.app')

@section('title', 'Pemerintahan Desa')

@section('content')

{{-- HEADER HALAMAN --}}
<section class="bg-[var(--sawah)] text-white py-14">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--panen)] mb-2">Pemerintahan</p>
    <h1 class="font-display text-3xl md:text-4xl font-extrabold">Pemerintahan Desa Kedungdowo</h1>
    <p class="text-white/80 text-sm md:text-base mt-2 max-w-2xl">Struktur organisasi, BPD, dan informasi pelayanan kantor desa</p>
  </div>
</section>

<div class="terasering"></div>

{{-- STRUKTUR PERANGKAT DESA --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Struktur Organisasi</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Perangkat Desa Kedungdowo</h2>

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
    {{-- GANTI: foto tiap perangkat -> public/img/perangkat-1.jpg dst --}}
    <div class="text-center">
      <img src="{{ asset('img/perangkat-1.jpg') }}" alt="Kepala Desa"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Yuyus Adi Setiawan, S.Pd.</p>
      <p class="text-xs text-[var(--tanah)]">Kepala Desa</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-2.jpg') }}" alt="Sekretaris Desa"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Sekdes]</p>
      <p class="text-xs text-[var(--tanah)]">Sekretaris Desa</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-3.jpg') }}" alt="Kaur Keuangan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kaur Keuangan]</p>
      <p class="text-xs text-[var(--tanah)]">Kaur Keuangan</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-4.jpg') }}" alt="Kasi Pemerintahan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kasi Pemerintahan]</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Pemerintahan</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-5.jpg') }}" alt="Kasi Kesejahteraan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kasi Kesra]</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Kesejahteraan</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-6.jpg') }}" alt="Kasi Pelayanan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kasi Pelayanan]</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Pelayanan</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-7.jpg') }}" alt="Kaur Perencanaan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kaur Perencanaan]</p>
      <p class="text-xs text-[var(--tanah)]">Kaur Perencanaan</p>
    </div>
    <div class="text-center">
      <img src="{{ asset('img/perangkat-8.jpg') }}" alt="Kaur TU dan Umum"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot" onerror="this.classList.add('img-slot')">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Kaur TU & Umum]</p>
      <p class="text-xs text-[var(--tanah)]">Kaur TU & Umum</p>
    </div>
  </div>
  <p class="text-xs text-[var(--teks)]/50 mt-6 text-center">
    *Nama & jabatan di atas contoh — sesuaikan dengan struktur resmi terbaru dari kantor desa.
  </p>
</section>

{{-- BPD --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Lembaga Desa</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-3 text-center">Badan Permusyawaratan Desa (BPD)</h2>
    <p class="text-center text-sm text-[var(--teks)]/70 max-w-2xl mx-auto mb-10">
      BPD adalah lembaga yang menjalankan fungsi pemerintahan bersama Kepala Desa, termasuk
      membahas dan menyepakati Peraturan Desa (Perdes) serta APBDes.
    </p>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Ketua BPD]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Ketua BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Wakil Ketua]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Wakil Ketua BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Sekretaris]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Sekretaris BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">[Nama Anggota]</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Anggota BPD</p>
      </div>
    </div>
  </div>
</section>

<div class="terasering-flip"></div>

{{-- REGULASI / PRODUK HUKUM DESA --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Dokumen Resmi</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Regulasi & Produk Hukum Desa</h2>
  <div class="rounded-xl border border-[var(--sawah)]/15 divide-y divide-[var(--sawah)]/10 bg-white overflow-hidden">
    <div class="flex items-center justify-between px-5 py-4">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">Peraturan Desa No. 1 Tahun 2026 tentang APBDes</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah [tanggal] — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] underline underline-offset-4 shrink-0 ml-4">Unduh</a>
    </div>
    <div class="flex items-center justify-between px-5 py-4">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">SK Kepala Desa tentang Susunan Perangkat Desa</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah [tanggal] — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] underline underline-offset-4 shrink-0 ml-4">Unduh</a>
    </div>
    <div class="flex items-center justify-between px-5 py-4">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">RPJMDes Desa Kedungdowo</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah [tanggal] — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] underline underline-offset-4 shrink-0 ml-4">Unduh</a>
    </div>
  </div>
  <p class="text-xs text-[var(--teks)]/50 mt-4">
    *Daftar ini contoh — nanti file PDF asli diunggah lewat panel admin (Filament), bukan ditulis manual di kode.
  </p>
</section>

{{-- JAM PELAYANAN --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Informasi Layanan</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Jam Pelayanan Kantor Desa</h2>
    <div class="grid sm:grid-cols-3 gap-5 max-w-3xl mx-auto">
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Senin – Kamis</p>
        <p class="text-sm text-[var(--tanah)] mt-1">07.30 – 15.30 WIB</p>
      </div>
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Jumat</p>
        <p class="text-sm text-[var(--tanah)] mt-1">07.30 – 11.00 WIB</p>
      </div>
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Sabtu – Minggu</p>
        <p class="text-sm text-[var(--tanah)] mt-1">Tutup / Libur</p>
      </div>
    </div>
  </div>
</section>

@endsection
