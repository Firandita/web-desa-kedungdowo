@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- HERO — 2 KOLOM: TEKS KIRI, FOTO CARD SLIDER KANAN =====================
   Ada 3 slot foto: hero-sawah-1.jpg, hero-sawah-2.jpg, hero-sawah-3.jpg
   Gambar otomatis geser sendiri tiap 5 detik, atau klik titik di bawah.
   Kalau foto cuma punya 1, boleh isi ketiganya dengan file yang sama dulu. --}}
<section class="relative overflow-hidden bg-[var(--krem)] pt-10 pb-20 md:pt-16 md:pb-28">

  {{-- aksen bulat samar di background, biar gak polos --}}
  <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[var(--panen)]/15 blur-3xl pointer-events-none"></div>
  <div class="absolute -bottom-24 -left-24 w-96 h-96 rounded-full bg-[var(--sawah)]/10 blur-3xl pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-5 md:px-8 grid md:grid-cols-2 gap-12 md:gap-10 items-center">

    {{-- KOLOM TEKS --}}
    <div>
      <p class="uppercase tracking-widest text-xs md:text-sm text-[var(--tanah)] font-semibold mb-3" data-aos="fade-up">Website Resmi Pemerintah Desa</p>
      <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-[var(--sawah-dark)] leading-tight" data-aos="fade-up" data-aos-delay="100">Desa Kedungdowo</h1>
      <p class="text-[var(--tanah)] text-sm md:text-base mt-2 mb-3" data-aos="fade-up" data-aos-delay="150">Kecamatan Balen, Kabupaten Bojonegoro</p>
      <p class="mt-3 max-w-xl text-[var(--teks)]/80 text-sm md:text-base leading-relaxed" data-aos="fade-up" data-aos-delay="200">Desa agraris yang dikenal lewat olahan pupuk organik warga, gerakan bank sampah, dan tradisi Sedekah Bumi yang masih lestari hingga kini.</p>
      <div class="mt-7 flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="300">
        <a href="{{ route('profil') }}" class="bg-[var(--panen)] text-[var(--sawah-dark)] font-semibold px-6 py-3 rounded-full text-sm shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all">Jelajahi Desa</a>
        <a href="{{ route('layanan') }}" class="border border-[var(--sawah-dark)]/30 text-[var(--sawah-dark)] px-6 py-3 rounded-full text-sm font-medium hover:bg-[var(--sawah-dark)] hover:text-white transition-all">Layanan Surat</a>
      </div>
    </div>

    {{-- KOLOM FOTO: CARD SLIDER --}}
    <div class="relative" data-aos="fade-left" data-aos-delay="150">
      {{-- blok warna dekoratif di belakang foto, sedikit offset biar berlapis --}}
      <div class="absolute -top-5 -right-5 w-full h-full bg-[var(--panen)] rounded-[2rem] hidden sm:block"></div>
      <div class="absolute -bottom-5 -left-5 w-24 h-24 rounded-2xl bg-[var(--sawah)]/20 hidden sm:block"></div>

      <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white h-[300px] sm:h-[360px] md:h-[420px]">
        {{-- GANTI: 3 foto slider -> public/img/hero-sawah-1.jpg, hero-sawah-2.jpg, hero-sawah-3.jpg --}}
        <div class="hero-slide hero-zoom absolute -top-3 -bottom-3 inset-x-0 bg-cover bg-center transition-opacity duration-1000 opacity-100 img-slot">
             <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa Kedungdowo" onerror="this.classList.add('img-slot')" data-aos="fade-left"></div>
        <div class="hero-slide hero-zoom absolute -top-3 -bottom-3 inset-x-0 bg-cover bg-center transition-opacity duration-1000 opacity-0 img-slot"
           ><img src="{{ asset('img/header2.jpg') }}" alt="Kepala Desa Kedungdowo" onerror="this.classList.add('img-slot')" data-aos="fade-left"></div>
        <div class="hero-slide hero-zoom absolute -top-3 -bottom-3 inset-x-0 bg-cover bg-center transition-opacity duration-1000 opacity-0 img-slot"
             ><img src="{{ asset('img/header1.jpg') }}" alt="Kepala Desa Kedungdowo" onerror="this.classList.add('img-slot')" data-aos="fade-left"></div>

        {{-- gradasi tipis di bawah foto biar dots kebaca --}}
        <div class="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-black/40 to-transparent z-[6] pointer-events-none"></div>

        {{-- Titik indikator slider --}}
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-20" id="heroDots">
          <button class="w-2.5 h-2.5 rounded-full bg-white/90 transition" data-slide="0" aria-label="Slide 1"></button>
          <button class="w-2.5 h-2.5 rounded-full bg-white/40 transition" data-slide="1" aria-label="Slide 2"></button>
          <button class="w-2.5 h-2.5 rounded-full bg-white/40 transition" data-slide="2" aria-label="Slide 3"></button>
        </div>
      </div>

      {{-- badge kecil melayang di pojok card, hiasan tambahan --}}
      <div class="absolute -bottom-6 -right-3 sm:right-4 bg-white rounded-2xl shadow-xl px-4 py-3 flex items-center gap-2 z-20" data-aos="zoom-in" data-aos-delay="400">
        <span class="w-9 h-9 rounded-full bg-[var(--sawah)]/10 flex items-center justify-center">
          <span class="material-symbols-outlined text-[var(--sawah-dark)]" style="font-size:20px;">eco</span>
        </span>
        <div class="leading-tight">
          <p class="text-xs font-bold text-[var(--sawah-dark)]">Desa Agraris</p>
          <p class="text-[10px] text-[var(--teks)]/60">Bojonegoro, Jawa Timur</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="relative z-10 -mt-1">
  <svg viewBox="0 0 1440 110" preserveAspectRatio="none" class="w-full h-[32px] md:h-[52px]">
    <path d="M0,60 C240,130 480,0 720,35 C960,70 1200,15 1440,55 L1440,110 L0,110 Z" fill="#E3A72E"></path>
  </svg>
</div>

<script>
(function(){
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('#heroDots button');
  let current = 0;
  function showSlide(i){
    slides.forEach((s, idx) => s.classList.toggle('opacity-100', idx === i));
    slides.forEach((s, idx) => s.classList.toggle('opacity-0', idx !== i));
    dots.forEach((d, idx) => {
      d.classList.toggle('bg-white/90', idx === i);
      d.classList.toggle('bg-white/40', idx !== i);
    });
    current = i;
  }
  dots.forEach(d => d.addEventListener('click', () => showSlide(parseInt(d.dataset.slide))));
  setInterval(() => showSlide((current + 1) % slides.length), 5000);
})();
</script>

{{-- STATISTIK RINGKAS --}}
<section class="bg-[var(--sawah)] text-white py-8">
  <div class="max-w-7xl mx-auto px-5 md:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
    <div data-aos="fade-up" data-aos-delay="0">
      <p class="font-section text-3xl font-extrabold text-[var(--panen)]">3.214</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Jumlah Penduduk</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="75">
      <p class="font-section text-3xl font-extrabold text-[var(--panen)]">982</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Kepala Keluarga</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="150">
      <p class="font-section text-3xl font-extrabold text-[var(--panen)]">4</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Dusun</p>
    </div>
    <div data-aos="fade-up" data-aos-delay="225">
      <p class="font-section text-3xl font-extrabold text-[var(--panen)]">300+</p>
      <p class="text-xs md:text-sm text-white/80 mt-1">Ekor Sapi Ternak Warga</p>
    </div>
  </div>
  <p class="text-center text-white/50 text-xs mt-4">*Data contoh (dummy) — akan diganti data resmi dari perangkat desa</p>
</section>

{{-- SAMBUTAN KADES (ringkas, versi lengkap di halaman Profil) --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16 grid md:grid-cols-2 gap-10 items-center">
  {{-- GANTI: foto kepala desa -> public/img/kepala-desa.jpg --}}
  <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa Kedungdowo"
       class="w-full h-[320px] md:h-[400px] object-cover rounded-2xl border border-[var(--sawah)]/20 img-slot"
       onerror="this.classList.add('img-slot')" data-aos="fade-right">
  <div data-aos="fade-left">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2">Sambutan</p>
    <h2 class="font-display text-3xl md:text-4xl text-[var(--sawah-dark)] mb-4">Kepala Desa Kedungdowo</h2>
    <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/90">
      "Selamat datang di website resmi Desa Kedungdowo. Melalui platform ini, kami ingin membuka akses informasi seluas-luasnya bagi warga maupun masyarakat luar."
    </p>
    <p class="mt-5 font-section font-bold text-[var(--sawah-dark)]">Yuyus Adi Setiawan, S.Pd.</p>
    <p class="text-sm text-[var(--tanah)]">Kepala Desa Kedungdowo</p>
    <a href="{{ route('profil') }}" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-[var(--sawah-dark)] border border-[var(--sawah-dark)]/30 hover:bg-[var(--sawah-dark)] hover:text-white px-5 py-2.5 rounded-full transition-all duration-200">Baca profil lengkap desa <span class="material-symbols-outlined text-base">arrow_forward</span></a>
  </div>
</section>

<div class="terasering-flip"></div>

{{-- RINGKASAN POTENSI (link ke halaman Potensi) --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Ekonomi Warga</p>
    <h2 class="font-display text-3xl md:text-4xl text-[var(--sawah-dark)] mb-10 text-center">Potensi & UMKM Desa</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover" data-aos="fade-up" data-aos-delay="0">
        {{-- GANTI: foto pupuk organik -> public/img/pupuk-griyorojokoyo.jpg --}}
        <img src="{{ asset('img/pupuk-griyorojokoyo.jpg') }}" alt="Pupuk Organik Griyorojokoyo" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-section font-bold text-[var(--sawah-dark)]">Pupuk Organik Griyorojokoyo</p>
          <p class="text-sm text-[var(--teks)]/70 mt-2">Usaha pengolahan limbah kotoran ternak sapi menjadi pupuk organik.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover" data-aos="fade-up" data-aos-delay="120">
        {{-- GANTI: foto bank sampah -> public/img/bank-sampah-mawar.jpg --}}
        <img src="{{ asset('img/bank-sampah-mawar.jpg') }}" alt="Bank Sampah Mawar" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-section font-bold text-[var(--sawah-dark)]">Bank Sampah Mawar</p>
          <p class="text-sm text-[var(--teks)]/70 mt-2">Mengelola sampah rumah tangga menjadi pupuk dan media tanam.</p>
        </div>
      </div>
      <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 card-hover" data-aos="fade-up" data-aos-delay="240">
        {{-- GANTI: foto peternakan sapi -> public/img/peternakan-sapi.jpg --}}
        <img src="{{ asset('img/peternakan-sapi.jpg') }}" alt="Peternakan Sapi Warga" class="h-44 w-full object-cover img-slot">
        <div class="p-5">
          <p class="font-section font-bold text-[var(--sawah-dark)]">Peternakan Sapi Warga</p>
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