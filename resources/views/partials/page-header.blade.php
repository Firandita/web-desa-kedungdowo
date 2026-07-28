{{-- PAGE HEADER — dipakai di semua halaman dalam (Profil, Pemerintahan, Potensi,
     Galeri, Layanan Surat, Kontak, Berita, Transparansi, dst).
     Satu file ini yang nentuin desain header di SEMUA halaman itu, jadi kalau
     mau ubah tampilannya, cukup edit di sini aja, otomatis ke-apply ke semuanya.

     Cara pakai di halaman lain (taruh SEBELUM tag <main>, bukan di dalamnya):
     @include('partials.page-header', [
       'eyebrow'  => 'Nama Kategori',
       'title'    => 'Judul Halaman',
       'subtitle' => 'Deskripsi singkat (opsional, boleh dihapus barisnya kalau gak perlu)',
     ])
--}}
<section class="relative overflow-hidden bg-[var(--sawah)] text-white pt-10 pb-14 md:pt-12 md:pb-16">

  {{-- aksen bulat samar, motif yang sama kayak hero Beranda biar nyambung --}}
  <div class="absolute -top-16 -right-16 w-64 h-64 rounded-full bg-[var(--panen)]/15 blur-3xl pointer-events-none"></div>

  {{-- wave dekoratif DI DALAM kotak hijau (bukan strip terpisah di bawahnya),
       arah lengkung ke bawah, warna gradasi hijau tua->hijau biar ada dimensi
       tapi tetap satu keluarga warna, gak nabrak kuning --}}
  <svg class="absolute inset-x-0 bottom-0 w-full h-[70px] md:h-[90px] pointer-events-none" viewBox="0 0 1440 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="pageHeaderWave" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0%" stop-color="var(--sawah)" stop-opacity="0"/>
        <stop offset="100%" stop-color="var(--sawah-dark)" stop-opacity="0.55"/>
      </linearGradient>
    </defs>
    <path d="M0,20 C240,-10 480,55 720,25 C960,-5 1200,45 1440,15 L1440,90 L0,90 Z" fill="url(#pageHeaderWave)"></path>
  </svg>

  <!-- {{-- foto padi, pojok kanan bawah --}}
  {{-- GANTI kalau mau foto lain -> public/img/padi-hero.png --}}
  <img src="{{ asset('img/padi-hero.png') }}" alt=""
       class="absolute right-0 md:right-6 bottom-0 h-[150%] max-h-[260px] md:max-h-[320px] w-auto object-contain opacity-90 pointer-events-none select-none"
       onerror="this.style.display='none'"> -->

  <div class="relative max-w-7xl mx-auto px-5 md:px-8" data-aos="fade-up">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--panen)] mb-1.5">{{ $eyebrow }}</p>
    <h1 class="font-display text-2xl md:text-3xl lg:text-4xl">{{ $title }}</h1>
    @isset($subtitle)
      <p class="text-white/80 text-sm mt-2 max-w-2xl">{{ $subtitle }}</p>
    @endisset
  </div>
</section>