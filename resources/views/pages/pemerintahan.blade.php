@extends('layouts.app')

@section('title', 'Pemerintahan Desa')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Pemerintahan',
  'title'    => 'Pemerintahan Desa Kedungdowo',
  'subtitle' => 'Struktur organisasi, BPD, dan informasi pelayanan kantor desa',
])

{{-- STRUKTUR PERANGKAT DESA --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Struktur Organisasi</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Perangkat Desa Kedungdowo</h2>

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
    
    {{-- Kepala Desa --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="0">
      <img src="{{ asset('img/perangkat-1.jpg') }}" alt="Kepala Desa"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Yuyus Adi Setiawan, S.Pd.</p>
      <p class="text-xs text-[var(--tanah)]">Kepala Desa</p>
    </div>

    {{-- Sekretaris Desa --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="60">
      <img src="{{ asset('img/perangkat-2.jpg') }}" alt="Sekretaris Desa"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Ahmad Nur Fauzi, S.E.</p>
      <p class="text-xs text-[var(--tanah)]">Sekretaris Desa</p>
    </div>

    {{-- Kaur Keuangan --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="120">
      <img src="{{ asset('img/perangkat-3.jpg') }}" alt="Kaur Keuangan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Siti Rahmawati, A.Md.</p>
      <p class="text-xs text-[var(--tanah)]">Kaur Keuangan</p>
    </div>

    {{-- Kasi Pemerintahan --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="180">
      <img src="{{ asset('img/perangkat-4.jpg') }}" alt="Kasi Pemerintahan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Budi Santoso, S.IP.</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Pemerintahan</p>
    </div>

    {{-- Kasi Kesejahteraan --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="240">
      <img src="{{ asset('img/perangkat-5.jpg') }}" alt="Kasi Kesejahteraan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Eko Prasetyo</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Kesejahteraan</p>
    </div>

    {{-- Kasi Pelayanan --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
      <img src="{{ asset('img/perangkat-6.jpg') }}" alt="Kasi Pelayanan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Dewi Lestari, S.Pd.</p>
      <p class="text-xs text-[var(--tanah)]">Kasi Pelayanan</p>
    </div>

    {{-- Kaur Perencanaan --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="360">
      <img src="{{ asset('img/perangkat-7.jpg') }}" alt="Kaur Perencanaan"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Hendra Kurniawan</p>
      <p class="text-xs text-[var(--tanah)]">Kaur Perencanaan</p>
    </div>

    {{-- Kaur TU dan Umum --}}
    <div class="text-center" data-aos="fade-up" data-aos-delay="420">
      <img src="{{ asset('img/perangkat-8.jpg') }}" alt="Kaur TU dan Umum"
           class="aspect-square w-full object-cover rounded-xl mb-3 img-slot shadow-sm border border-[var(--sawah)]/10" 
           onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop';">
      <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Anisa Putri, S.Sos.</p>
      <p class="text-xs text-[var(--tanah)]">Kaur TU & Umum</p>
    </div>

  </div>

  <p class="text-xs text-[var(--teks)]/50 mt-6 text-center">
    *Nama & jabatan di atas dapat disesuaikan kembali dengan struktur resmi terbaru dari kantor desa.
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
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center shadow-sm" data-aos="zoom-in" data-aos-delay="0">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Drs. H. Mulyono</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Ketua BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center shadow-sm" data-aos="zoom-in" data-aos-delay="80">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Sukamto, S.T.</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Wakil Ketua BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center shadow-sm" data-aos="zoom-in" data-aos-delay="160">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Nur Hidayah, S.Pd.</p>
        <p class="text-xs text-[var(--tanah)] mt-1">Sekretaris BPD</p>
      </div>
      <div class="p-5 rounded-xl border border-[var(--sawah)]/15 bg-[var(--krem)] text-center shadow-sm" data-aos="zoom-in" data-aos-delay="240">
        <p class="font-display font-semibold text-[var(--sawah-dark)] text-sm">Bambang Wijaya</p>
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
  <div class="rounded-xl border border-[var(--sawah)]/15 divide-y divide-[var(--sawah)]/10 bg-white overflow-hidden shadow-sm">
    <div class="flex items-center justify-between px-5 py-4" data-aos="fade-up" data-aos-delay="0">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">Peraturan Desa No. 1 Tahun 2026 tentang APBDes</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah 12 Januari 2026 — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] hover:text-[var(--sawah)] underline underline-offset-4 shrink-0 ml-4 transition-colors">Unduh</a>
    </div>
    <div class="flex items-center justify-between px-5 py-4" data-aos="fade-up" data-aos-delay="80">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">SK Kepala Desa tentang Susunan Perangkat Desa</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah 05 Februari 2026 — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] hover:text-[var(--sawah)] underline underline-offset-4 shrink-0 ml-4 transition-colors">Unduh</a>
    </div>
    <div class="flex items-center justify-between px-5 py-4" data-aos="fade-up" data-aos-delay="160">
      <div>
        <p class="font-medium text-sm text-[var(--sawah-dark)]">RPJMDes Desa Kedungdowo</p>
        <p class="text-xs text-[var(--teks)]/50">Diunggah 20 Februari 2026 — format PDF</p>
      </div>
      <a href="#" class="text-xs font-semibold text-[var(--sawah-dark)] hover:text-[var(--sawah)] underline underline-offset-4 shrink-0 ml-4 transition-colors">Unduh</a>
    </div>
  </div>
  <p class="text-xs text-[var(--teks)]/50 mt-4 text-center">
    *Daftar dokumen di atas merupakan sampel — dokumen resmi dapat dikelola melalui panel admin.
  </p>
</section>

{{-- JAM PELAYANAN --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Informasi Layanan</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Jam Pelayanan Kantor Desa</h2>
    <div class="grid sm:grid-cols-3 gap-5 max-w-3xl mx-auto">
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center shadow-sm" data-aos="fade-up" data-aos-delay="0">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Senin – Kamis</p>
        <p class="text-sm text-[var(--tanah)] mt-1">07.30 – 15.30 WIB</p>
      </div>
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center shadow-sm" data-aos="fade-up" data-aos-delay="100">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Jumat</p>
        <p class="text-sm text-[var(--tanah)] mt-1">07.30 – 11.00 WIB</p>
      </div>
      <div class="p-6 rounded-xl bg-[var(--krem)] border border-[var(--sawah)]/15 text-center shadow-sm" data-aos="fade-up" data-aos-delay="200">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Sabtu – Minggu</p>
        <p class="text-sm text-[var(--tanah)] mt-1">Tutup / Libur</p>
      </div>
    </div>
  </div>
</section>

@endsection