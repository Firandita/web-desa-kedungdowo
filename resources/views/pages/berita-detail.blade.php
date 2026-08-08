@extends('layouts.app')

@section('title', $berita->judul . ' - Berita Desa')

@section('content')

@php
    // Kalau $fromDb = false, foto pakai konvensi asset('img/...') + img-slot.
    // Kalau $fromDb = true, foto asli hasil upload Filament -> asset('storage/...').
    $buildFotoUrl = function ($item) use ($fromDb) {
        return $fromDb
            ? asset('storage/' . $item->foto)
            : asset('img/' . $item->foto);
    };
    $fotoUrl = $buildFotoUrl($berita);

    // Pecah deskripsi jadi paragraf berdasarkan baris kosong ganda.
    $paragraf = array_filter(array_map('trim', explode("\n\n", $berita->deskripsi ?? '')));
    if (empty($paragraf)) {
        $paragraf = [$berita->deskripsi ?? ''];
    }

    // Estimasi waktu baca (asumsi ~200 kata/menit, dibulatkan ke atas, minimal 1 menit).
    $jumlahKata = str_word_count(strip_tags($berita->deskripsi ?? ''));
    $estimasiMenit = max(1, (int) ceil($jumlahKata / 200));

    $tanggalTampil = \Illuminate\Support\Carbon::parse($berita->tanggal)->translatedFormat('d F Y');
    $shareText = rawurlencode($berita->judul . ' - Website Resmi Desa Kedungdowo');
@endphp

{{-- Progress bar baca --}}
<div class="fixed top-0 left-0 w-full h-[3px] bg-black/5 z-40">
  <div id="readingProgress" class="h-full bg-[var(--panen)] transition-[width] duration-150 ease-out" style="width:0%"></div>
</div>

{{-- Header halaman pakai foto & judul berita sebagai latar --}}
<section class="relative w-full h-[380px] md:h-[520px] overflow-hidden bg-[var(--sawah-dark)]">
  {{-- GANTI: Foto header berita "{{ $berita->judul }}" -> public/img/{{ $berita->foto }} --}}
  <img src="{{ $fotoUrl }}"
       alt="{{ $berita->judul }}"
       class="w-full h-full object-cover opacity-70 scale-105"
       onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden'); this.nextElementSibling.classList.add('flex');">
  {{-- Fallback kalau foto belum ada -- full-bleed, tanpa teks judul yang bisa numpuk breadcrumb/judul --}}
  <div class="hidden absolute inset-0 foto-fallback flex-col items-center justify-center gap-2 text-[var(--sawah-dark)]/40 opacity-70">
    <span class="material-symbols-outlined text-5xl">image</span>
    <span class="text-xs font-bold uppercase tracking-wide">Foto Segera Hadir</span>
  </div>
  <div class="absolute inset-0 bg-gradient-to-t from-[var(--sawah-dark)] via-[var(--sawah-dark)]/50 to-black/10"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-transparent"></div>

  {{-- Breadcrumb --}}
  <div class="absolute top-24 md:top-28 inset-x-0">
    <div class="max-w-4xl mx-auto px-5 md:px-8">
      <nav class="flex items-center gap-1.5 text-[11px] text-white/70 font-medium flex-wrap">
        <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <a href="{{ route('berita') }}" class="hover:text-white transition-colors">Berita</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <span class="text-white/90 line-clamp-1">{{ $berita->judul }}</span>
      </nav>
    </div>
  </div>

  <div class="absolute inset-0 flex items-end">
    <div class="max-w-4xl mx-auto px-5 md:px-8 pb-10 w-full">
      <a href="{{ route('berita') }}" class="inline-flex items-center gap-1 text-white/80 hover:text-white text-xs font-medium mb-4 transition-colors">
        <span class="material-symbols-outlined text-sm">arrow_back</span>
        Kembali ke Berita
      </a>
      <span class="inline-block bg-[var(--panen)] text-[var(--sawah-dark)] text-[10px] font-bold uppercase tracking-wide px-3 py-1 rounded-full shadow-sm mb-3">
        {{ $berita->kategori }}
      </span>
      <h1 class="font-display font-bold text-2xl md:text-4xl lg:text-[2.75rem] text-white leading-snug max-w-3xl drop-shadow-sm">
        {{ $berita->judul }}
      </h1>

      <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs text-white/85 font-medium mt-5">
        <span class="flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">calendar_today</span>
          {{ $tanggalTampil }}
        </span>
        <span class="flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">person</span>
          {{ $berita->penulis }}
        </span>
        <span class="flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">visibility</span>
          {{ $berita->dilihat }} kali dibaca
        </span>
        <span class="flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">schedule</span>
          {{ $estimasiMenit }} menit baca
        </span>
      </div>
    </div>
  </div>
</section>

{{-- Isi Artikel --}}
<section class="max-w-6xl mx-auto px-5 md:px-8 py-12 md:py-16">
  <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">

    {{-- Kolom Utama: Artikel --}}
    <article class="lg:col-span-8">

      {{-- Lead / ringkasan singkat --}}
      @if (!empty($berita->ringkasan))
      <p class="font-display italic text-lg md:text-xl text-[var(--sawah-dark)] leading-relaxed border-l-4 border-[var(--panen)] pl-5 mb-8">
        {{ $berita->ringkasan }}
      </p>
      @endif

      {{-- Paragraf isi berita — deskripsi di database itu 1 teks panjang,
           dipisah jadi beberapa paragraf berdasarkan baris kosong (\n\n).
           Paragraf pertama diberi efek drop-cap huruf besar. --}}
      <div class="text-[var(--teks)]/85 leading-relaxed space-y-5 text-[15px] md:text-base
                  first-of-type:first-letter:font-display first-of-type:first-letter:font-bold
                  first-of-type:first-letter:text-[var(--sawah)] first-of-type:first-letter:text-6xl
                  first-of-type:first-letter:mr-3 first-of-type:first-letter:float-left first-of-type:first-letter:leading-[0.85]">
        @foreach ($paragraf as $p)
          <p>{{ $p }}</p>
        @endforeach
      </div>

      {{-- Tag kategori --}}
      <div class="flex items-center gap-2 mt-10">
        <span class="material-symbols-outlined text-base text-[var(--teks)]/40">sell</span>
        <a href="{{ route('berita') }}"
           class="text-xs font-semibold text-[var(--sawah-dark)] bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/20 px-3 py-1.5 rounded-full transition-colors">
          {{ $berita->kategori }}
        </a>
      </div>

      {{-- Bagikan artikel --}}
      <div class="flex flex-wrap items-center gap-3 mt-8 pt-8 border-t border-[var(--sawah)]/10">
        <span class="text-xs font-bold text-[var(--teks)]/60 uppercase tracking-wide mr-1">Bagikan:</span>

        <a href="https://wa.me/?text={{ $shareText }}%20{{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer"
           class="w-9 h-9 rounded-full bg-[var(--krem)] hover:bg-green-500 hover:text-white text-[var(--sawah-dark)] flex items-center justify-center transition-colors border border-[var(--sawah)]/10"
           aria-label="Bagikan lewat WhatsApp">
          <span class="material-symbols-outlined text-lg">chat</span>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer"
           class="w-9 h-9 rounded-full bg-[var(--krem)] hover:bg-blue-600 hover:text-white text-[var(--sawah-dark)] flex items-center justify-center transition-colors border border-[var(--sawah)]/10"
           aria-label="Bagikan lewat Facebook">
          <span class="material-symbols-outlined text-lg">thumb_up</span>
        </a>
        <button type="button" onclick="salinTautanBerita(this)"
                class="inline-flex items-center gap-1.5 h-9 px-3.5 rounded-full bg-[var(--krem)] hover:bg-[var(--sawah)] hover:text-white text-[var(--sawah-dark)] text-xs font-semibold transition-colors border border-[var(--sawah)]/10 cursor-pointer">
          <span class="material-symbols-outlined text-base">link</span>
          <span>Salin Tautan</span>
        </button>
      </div>

    </article>

    {{-- Sidebar --}}
    <aside class="lg:col-span-4 space-y-5 lg:sticky lg:top-24">

      {{-- Kartu Kontak / Pengaduan --}}
      <div class="bg-[var(--sawah-dark)] rounded-2xl shadow-sm p-5 text-white">
        <div class="w-11 h-11 rounded-xl bg-white/10 text-[var(--panen)] flex items-center justify-center mb-3">
          <span class="material-symbols-outlined text-2xl">support_agent</span>
        </div>
        <h4 class="font-section font-bold text-sm mb-1.5">Ada Pertanyaan atau Masukan?</h4>
        <p class="text-xs text-white/70 leading-relaxed mb-4">
          Hubungi perangkat Desa Kedungdowo lewat WhatsApp, telepon, atau kunjungi kantor desa.
        </p>
        <a href="{{ route('kontak') }}"
           class="inline-flex items-center gap-1.5 text-xs font-bold text-[var(--panen)] hover:text-white transition-colors">
          Lihat Info Kontak
          <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
      </div>

      {{-- Info tanggal terbit --}}
      <div class="bg-[var(--krem)] rounded-2xl border border-[var(--sawah)]/10 p-5">
        <h4 class="text-[10px] font-bold text-[var(--teks)]/50 uppercase tracking-wider mb-3">Info Artikel</h4>
        <dl class="space-y-2.5 text-xs">
          <div class="flex items-center justify-between">
            <dt class="text-[var(--teks)]/60">Diterbitkan</dt>
            <dd class="font-semibold text-[var(--teks)]">{{ $tanggalTampil }}</dd>
          </div>
          <div class="flex items-center justify-between">
            <dt class="text-[var(--teks)]/60">Penulis</dt>
            <dd class="font-semibold text-[var(--teks)]">{{ $berita->penulis }}</dd>
          </div>
          <div class="flex items-center justify-between">
            <dt class="text-[var(--teks)]/60">Kategori</dt>
            <dd class="font-semibold text-[var(--teks)]">{{ $berita->kategori }}</dd>
          </div>
        </dl>
      </div>

    </aside>

  </div>

  {{-- Pembatas --}}
  <div class="terasering mt-16 mb-4"></div>

  {{-- Berita Lainnya --}}
  @if (isset($lainnya) && $lainnya->count() > 0)
  <div class="pt-8">
    <div class="flex items-end justify-between mb-6">
      <div>
        <span class="text-[11px] font-bold text-[var(--panen)] uppercase tracking-widest">Terus Ikuti Kabar Desa</span>
        <h3 class="font-display font-bold text-xl md:text-2xl text-[var(--sawah-dark)] mt-1">Berita Lainnya</h3>
      </div>
      <a href="{{ route('berita') }}" class="hidden sm:inline-flex items-center gap-1 text-xs font-semibold text-[var(--sawah-dark)] hover:text-[var(--sawah)] transition-colors">
        Semua Berita
        <span class="material-symbols-outlined text-sm">arrow_forward</span>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
      @foreach ($lainnya as $item)
      <a href="{{ route('berita.detail', $item->id) }}"
         class="bg-white rounded-2xl border border-[var(--sawah)]/15 overflow-hidden shadow-sm card-hover flex flex-col h-full group">
        <div class="relative w-full aspect-video overflow-hidden bg-slate-100 shrink-0">
          {{-- GANTI: Foto berita "{{ $item->judul }}" -> public/img/{{ $item->foto }} --}}
          <img src="{{ $buildFotoUrl($item) }}"
               alt="{{ $item->judul }}"
               class="w-full h-full object-cover ring-1 ring-inset ring-black/5 group-hover:scale-105 transition-transform duration-300"
               onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden'); this.nextElementSibling.classList.add('flex');">
          {{-- Fallback kalau foto belum ada -- full-bleed, tanpa teks judul yang bisa numpuk badge --}}
          <div class="hidden absolute inset-0 foto-fallback flex-col items-center justify-center gap-1.5 text-[var(--sawah-dark)]/40">
            <span class="material-symbols-outlined text-3xl">image</span>
            <span class="text-[10px] font-bold uppercase tracking-wide">Foto Segera Hadir</span>
          </div>
          <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] text-[10px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full shadow-sm">
            {{ $item->kategori }}
          </span>
        </div>
        <div class="p-5 flex flex-col flex-1 justify-between">
          <div>
            <h4 class="font-display font-bold text-base text-[var(--sawah-dark)] line-clamp-2 mb-2 group-hover:text-[var(--sawah)] transition-colors">
              {{ $item->judul }}
            </h4>
            <p class="text-xs text-[var(--teks)]/70 line-clamp-2 mb-4 leading-relaxed">
              {{ $item->ringkasan_singkat }}
            </p>
          </div>
          <div class="pt-3 border-t border-[var(--sawah)]/10 flex items-center justify-between">
            <div class="flex items-center gap-1 text-[11px] text-[var(--teks)]/60">
              <span class="material-symbols-outlined text-sm">visibility</span>
              {{ $item->dilihat }} kali
            </div>
            <div class="bg-[var(--sawah)] text-white text-[11px] font-bold px-2.5 py-1 rounded-lg flex items-center gap-1 shadow-sm shrink-0">
              <span class="material-symbols-outlined text-xs">calendar_today</span>
              {{ \Illuminate\Support\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  @endif

  {{-- Navigasi kembali --}}
  <div class="flex justify-center mt-14">
    <a href="{{ route('berita') }}"
       class="inline-flex items-center gap-2 bg-[var(--sawah)] hover:bg-[var(--sawah-dark)] text-white text-sm font-semibold px-6 py-3 rounded-xl shadow-sm transition-colors">
      <span class="material-symbols-outlined text-base">grid_view</span>
      Lihat Semua Berita
    </a>
  </div>

</section>

{{-- ========================================================================= --}}
{{-- JAVASCRIPT: PROGRESS BAR & SALIN TAUTAN --}}
{{-- ========================================================================= --}}
<script>
  // Progress bar baca — mengikuti posisi scroll halaman.
  function updateReadingProgress() {
    const doc = document.documentElement;
    const scrollTop = window.scrollY || doc.scrollTop;
    const scrollHeight = doc.scrollHeight - doc.clientHeight;
    const progress = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
    const bar = document.getElementById('readingProgress');
    if (bar) bar.style.width = Math.min(100, Math.max(0, progress)) + '%';
  }
  window.addEventListener('scroll', updateReadingProgress, { passive: true });
  window.addEventListener('resize', updateReadingProgress);
  document.addEventListener('DOMContentLoaded', updateReadingProgress);

  // Salin tautan artikel ke clipboard, dengan fallback kalau API tidak tersedia.
  function salinTautanBerita(btn) {
    const url = window.location.href;
    const label = btn.querySelector('span:last-child');
    const originalText = label ? label.innerText : null;

    const showCopied = () => {
      if (label) {
        label.innerText = 'Tersalin!';
        setTimeout(() => { label.innerText = originalText; }, 2000);
      }
    };

    if (navigator.clipboard && window.isSecureContext) {
      navigator.clipboard.writeText(url).then(showCopied).catch(() => {
        alert('Gagal menyalin tautan, silakan salin manual dari address bar.');
      });
    } else {
      const temp = document.createElement('textarea');
      temp.value = url;
      temp.style.position = 'fixed';
      temp.style.opacity = '0';
      document.body.appendChild(temp);
      temp.select();
      try {
        document.execCommand('copy');
        showCopied();
      } catch (err) {
        alert('Gagal menyalin tautan, silakan salin manual dari address bar.');
      }
      document.body.removeChild(temp);
    }
  }
</script>

@endsection