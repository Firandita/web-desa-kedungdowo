<header class="fixed top-0 inset-x-0 z-50 bg-[var(--krem)] border-b border-[var(--sawah)]/15 shadow-sm">
  <div class="max-w-7xl mx-auto px-5 md:px-8 py-3 flex items-center justify-between">
    <a href="{{ route('beranda') }}" class="flex items-center gap-3">
      {{-- GANTI: logo desa -> public/img/logo-desa.png --}}
      <img src="{{ asset('img/logo-desa.png') }}" alt="Logo Desa Kedungdowo"
           class="w-11 h-11 rounded-full object-cover border border-[var(--sawah)]/30"
           onerror="this.style.display='none'">
      <div>
        <p class="font-section font-bold text-[var(--sawah-dark)] leading-tight">Desa Kedungdowo</p>
        <p class="text-xs text-[var(--tanah)]">Kec. Balen, Kab. Bojonegoro</p>
      </div>
    </a>

    <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-[var(--sawah-dark)]">
      <a href="{{ route('beranda') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('beranda') ? 'text-[var(--panen)] nav-active' : '' }}">Beranda</a>
      <a href="{{ route('profil') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('profil') ? 'text-[var(--panen)] nav-active' : '' }}">Profil Desa</a>
      <a href="{{ route('pemerintahan') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('pemerintahan') ? 'text-[var(--panen)] nav-active' : '' }}">Pemerintahan</a>
      <a href="{{ route('potensi') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('potensi') ? 'text-[var(--panen)] nav-active' : '' }}">Potensi Desa</a>
      <a href="{{ route('transparansi') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('transparansi') ? 'text-[var(--panen)] nav-active' : '' }}">Transparansi</a>
      <a href="{{ route('berita') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('berita') ? 'text-[var(--panen)] nav-active' : '' }}">Berita</a>
      <a href="{{ route('layanan') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('layanan') ? 'text-[var(--panen)] nav-active' : '' }}">Layanan Surat</a>
      <a href="{{ route('galeri') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('galeri') ? 'text-[var(--panen)] nav-active' : '' }}">Galeri</a>
      <a href="{{ route('kontak') }}" class="nav-link relative py-1 hover:text-[var(--panen)] {{ request()->routeIs('kontak') ? 'text-[var(--panen)] nav-active' : '' }}">Kontak</a>
    </nav>

    {{-- Tombol menu mobile pakai Google Material Symbols --}}
    <button id="menuBtn" aria-label="Buka menu"
            class="lg:hidden text-[var(--sawah-dark)] border border-[var(--sawah-dark)]/30 rounded-lg w-10 h-10 flex items-center justify-center">
      <span id="iconHamburger" class="material-symbols-outlined" style="font-size:24px;">menu</span>
      <span id="iconClose" class="material-symbols-outlined hidden" style="font-size:24px;">close</span>
    </button>
  </div>

  <div id="mobileMenu" class="hidden lg:hidden border-t border-[var(--sawah)]/15 bg-[var(--krem)] px-5 py-4 flex flex-col gap-3 text-sm font-medium text-[var(--sawah-dark)]">
    <a href="{{ route('beranda') }}">Beranda</a>
    <a href="{{ route('profil') }}">Profil Desa</a>
    <a href="{{ route('pemerintahan') }}">Pemerintahan</a>
    <a href="{{ route('potensi') }}">Potensi Desa</a>
    <a href="{{ route('transparansi') }}">Transparansi</a>
    <a href="{{ route('berita') }}">Berita</a>
    <a href="{{ route('layanan') }}">Layanan Surat</a>
    <a href="{{ route('galeri') }}">Galeri</a>
    <a href="{{ route('kontak') }}">Kontak</a>
  </div>
</header>

{{-- Spacer: header sekarang "fixed" (lepas dari alur normal), jadi konten
     di bawahnya butuh jarak kosong seukuran tinggi navbar biar gak ketutupan --}}
<div class="h-[68px] md:h-[76px]"></div>

<script>
  document.getElementById('menuBtn')?.addEventListener('click', () => {
    document.getElementById('mobileMenu')?.classList.toggle('hidden');
    document.getElementById('iconHamburger')?.classList.toggle('hidden');
    document.getElementById('iconClose')?.classList.toggle('hidden');
  });
</script>