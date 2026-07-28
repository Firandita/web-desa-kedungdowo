@extends('layouts.app')

@section('title', $berita['judul'] . ' - Berita Desa')

@section('content')

@php
  // NANTI ganti jadi: $berita = \App\Models\Berita::findOrFail($id);
  // (variabel $berita sudah dikirim dari route, lihat routes/web.php)
@endphp

{{-- Header halaman pakai foto & judul berita sebagai latar --}}
<section class="relative w-full h-[320px] md:h-[420px] overflow-hidden bg-[var(--sawah-dark)]">
  {{-- GANTI: Foto header berita "{{ $berita['judul'] }}" -> public/img/{{ $berita['foto'] }} --}}
  <img src="{{ asset('img/' . $berita['foto']) }}"
       alt="{{ $berita['judul'] }}"
       class="w-full h-full object-cover opacity-60 img-slot"
       onerror="this.classList.add('img-slot')">
  <div class="absolute inset-0 bg-gradient-to-t from-[var(--sawah-dark)] via-[var(--sawah-dark)]/40 to-transparent"></div>

  <div class="absolute inset-0 flex items-end">
    <div class="max-w-4xl mx-auto px-5 md:px-8 pb-10 w-full">
      <a href="{{ route('berita') }}" class="inline-flex items-center gap-1 text-white/80 hover:text-white text-xs font-medium mb-4 transition-colors">
        <span class="material-symbols-outlined text-sm">arrow_back</span>
        Kembali ke Berita
      </a>
      <span class="inline-block bg-[var(--panen)] text-[var(--sawah-dark)] text-[10px] font-bold uppercase tracking-wide px-3 py-1 rounded-full shadow-sm mb-3">
        {{ $berita['kategori'] }}
      </span>
      <h1 class="font-display font-bold text-2xl md:text-4xl text-white leading-snug max-w-3xl">
        {{ $berita['judul'] }}
      </h1>
    </div>
  </div>
</section>

{{-- Isi Artikel --}}
<section class="max-w-3xl mx-auto px-5 md:px-8 py-12">

  {{-- Meta info --}}
  <div class="flex flex-wrap items-center gap-4 text-xs text-[var(--teks)]/60 font-medium pb-6 mb-8 border-b border-[var(--sawah)]/10">
    <span class="flex items-center gap-1.5">
      <span class="material-symbols-outlined text-sm">calendar_today</span>
      {{ $berita['tanggal'] }}
    </span>
    <span class="flex items-center gap-1.5">
      <span class="material-symbols-outlined text-sm">person</span>
      {{ $berita['penulis'] }}
    </span>
    <span class="flex items-center gap-1.5">
      <span class="material-symbols-outlined text-sm">visibility</span>
      {{ $berita['dilihat'] }}
    </span>
  </div>

  {{-- Paragraf isi berita --}}
  <div class="prose max-w-none text-[var(--teks)]/85 leading-relaxed space-y-5 text-[15px]">
    @foreach ($berita['konten'] as $paragraf)
      <p>{{ $paragraf }}</p>
    @endforeach
  </div>

  {{-- Pembatas --}}
  <div class="terasering mt-16 mb-10"></div>

  {{-- Navigasi kembali --}}
  <div class="flex justify-center">
    <a href="{{ route('berita') }}"
       class="inline-flex items-center gap-2 bg-[var(--sawah)] hover:bg-[var(--sawah-dark)] text-white text-sm font-semibold px-6 py-3 rounded-xl shadow-sm transition-colors">
      <span class="material-symbols-outlined text-base">arrow_back</span>
      Lihat Berita Lainnya
    </a>
  </div>

</section>

@endsection