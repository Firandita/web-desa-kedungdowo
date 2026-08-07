@extends('layouts.app')

@section('title', 'Berita Desa')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Kabar Terkini',
  'title'    => 'Berita Desa Kedungdowo',
  'subtitle' => 'Menyajikan informasi terbaru tentang peristiwa, kegiatan desa, dan artikel jurnalistik dari Desa Kedungdowo',
])

{{--
  Data berita dikirim dari BeritaController ($daftarBerita) — kalau tabel
  `beritas` di database ada isinya, ini data ASLI dari database. Kalau
  masih kosong, controller otomatis fallback ke berita-data.php (dummy).
  JANGAN override $daftarBerita di sini, biar data asli kepakai begitu
  admin mulai nambah berita lewat panel /admin.
--}}
@php
  // Kalau $fromDb = false, foto pakai konvensi asset('img/...') + img-slot.
  // Kalau $fromDb = true, foto asli hasil upload Filament -> asset('storage/...').
  $buildFotoUrl = function ($item) use ($fromDb) {
      return $fromDb
          ? asset('storage/' . $item->foto)
          : asset('img/' . $item->foto);
  };
@endphp

{{--
  CATATAN: modal preview di bawah pakai VANILLA JS (bukan Alpine.js),
  karena Alpine.js belum di-load di layouts/app.blade.php. Pola ini
  mengikuti modal yang sudah jalan di layanan-surat.blade.php supaya
  konsisten dan tidak perlu ubah file layout bersama.
--}}
<section class="max-w-6xl mx-auto px-5 md:px-8 py-12">

  {{-- Grid 3 Kolom Berita --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">

    @foreach ($daftarBerita as $berita)
    {{-- Card Berita --}}
    <article class="bg-white rounded-2xl border border-[var(--sawah)]/15 overflow-hidden shadow-sm card-hover flex flex-col h-full group cursor-pointer"
             onclick="openBeritaModal({{ Illuminate\Support\Js::from([
               'id'       => $berita->id,
               'title'    => $berita->judul,
               'date'     => \Illuminate\Support\Carbon::parse($berita->tanggal)->translatedFormat('d M Y'),
               'author'   => $berita->penulis,
               'views'    => $berita->dilihat . ' kali',
               'kategori' => $berita->kategori,
               'image'    => $buildFotoUrl($berita),
               'excerpt'  => $berita->ringkasan,
               'link'     => route('berita.detail', $berita->id),
             ]) }})">

      {{-- Gambar Seragam (Aspect Video) --}}
      <div class="relative w-full aspect-video overflow-hidden bg-slate-100 shrink-0">
        <img src="{{ $buildFotoUrl($berita) }}"
             alt="{{ $berita->judul }}"
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 img-slot"
             onerror="this.classList.add('img-slot')">
        <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] text-[10px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full shadow-sm">
          {{ $berita->kategori }}
        </span>
      </div>

      <div class="p-5 flex flex-col flex-1 justify-between">
        <div>
          <h3 class="font-display font-bold text-base text-[var(--sawah-dark)] line-clamp-2 mb-2 group-hover:text-[var(--sawah)] transition-colors">
            {{ $berita->judul }}
          </h3>
          <p class="text-xs text-[var(--teks)]/70 line-clamp-3 mb-4 leading-relaxed">
            {{ $berita->ringkasan_singkat ?? $berita->ringkasan }}
          </p>
        </div>
        <div class="pt-3 border-t border-[var(--sawah)]/10 flex items-center justify-between">
          <div class="flex items-center gap-1 text-[11px] text-[var(--teks)]/60">
            <span class="material-symbols-outlined text-sm">visibility</span>
            <span id="card-views-{{ $berita->id }}">{{ $berita->dilihat }} kali</span>
          </div>
          <div class="bg-[var(--sawah)] text-white text-[11px] font-bold px-2.5 py-1 rounded-lg flex items-center gap-1 shadow-sm shrink-0">
            <span class="material-symbols-outlined text-xs">calendar_today</span>
            {{ \Illuminate\Support\Carbon::parse($berita->tanggal)->translatedFormat('d M Y') }}
          </div>
        </div>
      </div>
    </article>
    @endforeach

  </div>

  {{-- PAGINASI --}}
  <div class="mt-12 flex items-center justify-center gap-2">
    <a href="#" class="w-9 h-9 rounded-lg border border-[var(--sawah)]/20 bg-white text-[var(--sawah-dark)] flex items-center justify-center hover:bg-[var(--krem)] transition-colors">
      <span class="material-symbols-outlined text-base">chevron_left</span>
    </a>
    <a href="#" aria-current="page" class="w-9 h-9 rounded-lg bg-[var(--sawah)] text-white font-semibold flex items-center justify-center text-sm shadow-sm">1</a>
    <a href="#" class="w-9 h-9 rounded-lg border border-[var(--sawah)]/20 bg-white text-[var(--sawah-dark)] flex items-center justify-center hover:bg-[var(--krem)] transition-colors text-sm font-medium">2</a>
    <a href="#" class="w-9 h-9 rounded-lg border border-[var(--sawah)]/20 bg-white text-[var(--sawah-dark)] flex items-center justify-center hover:bg-[var(--krem)] transition-colors text-sm font-medium">3</a>
    <span class="px-1 text-[var(--teks)]/50 text-xs">...</span>
    <a href="#" class="w-9 h-9 rounded-lg border border-[var(--sawah)]/20 bg-white text-[var(--sawah-dark)] flex items-center justify-center hover:bg-[var(--krem)] transition-colors text-sm font-medium">10</a>
    <a href="#" class="w-9 h-9 rounded-lg border border-[var(--sawah)]/20 bg-white text-[var(--sawah-dark)] flex items-center justify-center hover:bg-[var(--krem)] transition-colors">
      <span class="material-symbols-outlined text-base">chevron_right</span>
    </a>
  </div>

  {{-- Pembatas section bergaya sawah --}}
  <div class="terasering-flip mt-16"></div>

</section>

{{-- ========================================================================= --}}
{{-- MODAL POP-UP (PREVIEW SINGKAT BERITA) --}}
{{-- ========================================================================= --}}
<div id="beritaModal" class="fixed inset-0 z-50 hidden bg-black/70 backdrop-blur-sm flex items-center justify-center p-4 md:p-6 overscroll-contain">
  <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[85vh] overflow-y-auto overscroll-contain shadow-2xl border border-[var(--sawah)]/20 relative transform scale-95 transition-all duration-300 custom-scrollbar" id="beritaModalCard">

    {{-- Tombol Close Melayang/Sticky --}}
    <div class="sticky top-3 z-30 flex justify-end px-3 pointer-events-none h-0">
      <button onclick="closeBeritaModal()"
              class="w-9 h-9 rounded-full bg-black/60 hover:bg-black/90 text-white flex items-center justify-center transition-all shadow-md cursor-pointer pointer-events-auto">
        <span class="material-symbols-outlined text-xl">close</span>
      </button>
    </div>

    {{-- Gambar Header Modal --}}
    <div class="relative w-full aspect-video bg-slate-100 shrink-0 overflow-hidden">
      <img id="beritaModalImage" src="" alt=""
           class="w-full h-full object-cover img-slot"
           onerror="this.classList.add('img-slot')">
      <span id="beritaModalKategori"
            class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] text-[10px] font-bold uppercase tracking-wide px-3 py-1 rounded-full shadow-sm"></span>
    </div>

    {{-- Konten Modal (Preview Singkat) --}}
    <div class="p-6 md:p-8 space-y-4">
      <div class="flex items-center gap-3 text-xs text-[var(--tanah)] font-medium flex-wrap">
        <span class="flex items-center gap-1">
          <span class="material-symbols-outlined text-sm">calendar_today</span>
          <span id="beritaModalDate"></span>
        </span>
        <span>•</span>
        <span id="beritaModalAuthor"></span>
        <span>•</span>
        <span class="flex items-center gap-1">
          <span class="material-symbols-outlined text-sm">visibility</span>
          <span id="beritaModalViews"></span>
        </span>
      </div>

      <h2 class="font-display font-bold text-xl md:text-2xl text-[var(--sawah-dark)] leading-snug" id="beritaModalTitle"></h2>

      <p class="text-sm text-[var(--teks)]/80 leading-relaxed" id="beritaModalExcerpt"></p>

      <div class="flex items-center justify-end gap-3 pt-5 border-t border-[var(--sawah)]/10 mt-6">
        <button onclick="closeBeritaModal()"
                class="px-4 py-2.5 rounded-xl text-xs font-semibold text-[var(--teks)]/70 hover:bg-slate-100 transition-colors cursor-pointer">
          Tutup
        </button>
        {{-- Diarahkan ke halaman detail penuh (view besar) --}}
        <a href="#" id="beritaModalLink"
           class="px-5 py-2.5 rounded-xl text-xs font-semibold bg-[var(--sawah)] hover:bg-[var(--sawah-dark)] text-white shadow-sm transition-all flex items-center gap-2 cursor-pointer">
          Baca Selengkapnya
          <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
      </div>
    </div>

  </div>
</div>

{{-- ========================================================================= --}}
{{-- JAVASCRIPT MODAL HANDLER --}}
{{-- ========================================================================= --}}
<script>
  function openBeritaModal(data) {
    const modal = document.getElementById('beritaModal');
    const card  = document.getElementById('beritaModalCard');

    document.getElementById('beritaModalImage').src = data.image;
    document.getElementById('beritaModalImage').alt = data.title;
    document.getElementById('beritaModalKategori').innerText = data.kategori;
    document.getElementById('beritaModalDate').innerText = data.date;
    document.getElementById('beritaModalAuthor').innerText = 'Penulis: ' + data.author;
    document.getElementById('beritaModalViews').innerText = data.views;
    document.getElementById('beritaModalTitle').innerText = data.title;
    document.getElementById('beritaModalExcerpt').innerText = data.excerpt;
    document.getElementById('beritaModalLink').setAttribute('href', data.link);

    // Lock body scroll
    document.body.style.overflow = 'hidden';

    modal.classList.remove('hidden');
    setTimeout(() => {
      card.classList.remove('scale-95');
      card.classList.add('scale-100');
    }, 10);

    // Increment view count real-time di database via AJAX jika ID tersedia
    if (data.id) {
      fetch('/berita/' + data.id + '/baca', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        }
      })
      .then(res => res.json())
      .then(resData => {
        if (resData && resData.success && resData.dilihat !== undefined) {
          const viewText = resData.dilihat + ' kali';
          document.getElementById('beritaModalViews').innerText = viewText;
          const cardViewEl = document.getElementById('card-views-' + data.id);
          if (cardViewEl) cardViewEl.innerText = viewText;
        }
      })
      .catch(() => {});
    }
  }

  function closeBeritaModal() {
    const modal = document.getElementById('beritaModal');
    const card  = document.getElementById('beritaModalCard');

    card.classList.remove('scale-100');
    card.classList.add('scale-95');

    setTimeout(() => {
      modal.classList.add('hidden');
      // Unlock body scroll
      document.body.style.overflow = '';
    }, 150);
  }

  // Tutup modal jika tombol Esc ditekan atau klik di luar modal
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      const modal = document.getElementById('beritaModal');
      if (!modal.classList.contains('hidden')) {
        closeBeritaModal();
      }
    }
  });

  window.addEventListener('click', function (event) {
    const modal = document.getElementById('beritaModal');
    if (event.target === modal) {
      closeBeritaModal();
    }
  });
</script>

@endsection