@extends('layouts.app')

@section('title', 'Profil Desa')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Profil Desa',
  'title'    => 'Mengenal Desa Kedungdowo',
  'subtitle' => 'Kecamatan Balen, Kabupaten Bojonegoro, Provinsi Jawa Timur',
])

{{-- SAMBUTAN KADES (LENGKAP) --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16 grid md:grid-cols-2 gap-10 items-center">
  <div data-aos="fade-right">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2">Sambutan</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-4">Kepala Desa Kedungdowo</h2>
    <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/90">
      "Assalamu'alaikum warahmatullahi wabarakatuh. Selamat datang di website resmi Desa Kedungdowo.
      Melalui platform ini, kami ingin membuka akses informasi seluas-luasnya bagi warga maupun
      masyarakat luar — mulai dari data pemerintahan, potensi usaha warga, hingga transparansi
      penggunaan anggaran desa.
    </p>
    <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/90 mt-3">
      Kami berharap semangat gotong royong yang selama ini menjadi ciri khas warga Kedungdowo —
      mulai dari pengelolaan pupuk organik, bank sampah, hingga tradisi Sedekah Bumi — dapat terus
      lestari dan menginspirasi desa-desa lain. Semoga website ini menjadi jembatan komunikasi yang
      lebih dekat antara pemerintah desa dan masyarakat."
    </p>
    <p class="mt-5 font-display font-bold text-[var(--sawah-dark)]">Yuyus Adi Setiawan, S.Pd.</p>
    <p class="text-sm text-[var(--tanah)]">Kepala Desa Kedungdowo</p>
  </div>
  {{-- GANTI: foto kepala desa -> public/img/kepala-desa.jpg --}}
  <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa Kedungdowo"
       class="aspect-[4/5] w-full object-cover rounded-2xl border border-[var(--sawah)]/20 img-slot"
       onerror="this.classList.add('img-slot')" data-aos="fade-left">
</section>

{{-- SEJARAH SINGKAT --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8 grid md:grid-cols-2 gap-10 items-center">
    {{-- GANTI: foto suasana desa lama/dokumentasi -> public/img/sejarah-desa.jpg --}}
    <img src="{{ asset('img/sejarah-desa.jpg') }}" alt="Sejarah Desa Kedungdowo"
         class="aspect-[4/3] w-full object-cover rounded-2xl border border-[var(--sawah)]/20 img-slot order-2 md:order-1"
         onerror="this.classList.add('img-slot')" data-aos="fade-right">
    <div class="order-1 md:order-2" data-aos="fade-left">
      <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2">Sejarah</p>
      <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-4">Sejarah Singkat Desa</h2>
      <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/80">
        [Placeholder — mohon dilengkapi dengan cerita asal-usul nama Desa Kedungdowo, tahun
        pembentukan, dan tokoh-tokoh yang berperan dalam sejarah desa. Data ini sebaiknya
        didapat langsung dari perangkat desa atau sesepuh desa saat wawancara.]
      </p>
    </div>
  </div>
</section>

{{-- VISI MISI --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Arah Pembangunan</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Visi & Misi Desa</h2>
  <div class="grid md:grid-cols-2 gap-8">
    <div class="p-7 rounded-2xl bg-[var(--sawah)] text-white" data-aos="fade-up">
      <p class="font-display font-bold text-lg mb-3 text-[var(--panen)]">Visi</p>
      <p class="text-sm leading-relaxed text-white/90">
        [Placeholder — isi dengan visi resmi desa dari dokumen RPJMDes, contoh: "Terwujudnya
        Desa Kedungdowo yang mandiri, sejahtera, dan berbudaya berbasis potensi pertanian
        dan peternakan."]
      </p>
    </div>
    <div class="p-7 rounded-2xl bg-[var(--tanah)] text-white" data-aos="fade-up" data-aos-delay="120">
      <p class="font-display font-bold text-lg mb-3 text-[var(--panen)]">Misi</p>
      <ul class="text-sm leading-relaxed text-white/90 space-y-2 list-disc list-inside">
        <li>[Placeholder — misi 1]</li>
        <li>[Placeholder — misi 2]</li>
        <li>[Placeholder — misi 3]</li>
        <li>[Placeholder — misi 4]</li>
      </ul>
    </div>
  </div>
  <p class="text-xs text-[var(--teks)]/50 mt-4 text-center">*Ambil teks visi-misi resmi dari dokumen RPJMDes desa, jangan dikarang sendiri.</p>
</section>

<div class="terasering-flip"></div>

{{-- 4 DUSUN --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Wilayah Administratif</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">4 Dusun di Desa Kedungdowo</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="p-6 rounded-xl border border-[var(--sawah)]/15 card-hover bg-[var(--krem)]" data-aos="zoom-in" data-aos-delay="0">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Kedungdowo</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Pusat pemerintahan desa</p>
      </div>
      <div class="p-6 rounded-xl border border-[var(--sawah)]/15 card-hover bg-[var(--krem)]" data-aos="zoom-in" data-aos-delay="75">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Tlumbung</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Pusat tradisi Sedekah Bumi</p>
      </div>
      <div class="p-6 rounded-xl border border-[var(--sawah)]/15 card-hover bg-[var(--krem)]" data-aos="zoom-in" data-aos-delay="150">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Krecak</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Kawasan pertanian & peternakan</p>
      </div>
      <div class="p-6 rounded-xl border border-[var(--sawah)]/15 card-hover bg-[var(--krem)]" data-aos="zoom-in" data-aos-delay="225">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Kuniran</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Kawasan pemukiman warga</p>
      </div>
    </div>
  </div>
</section>

{{-- PETA WILAYAH --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Letak Geografis</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-8 text-center">Peta Wilayah Desa</h2>
  <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/15 shadow-sm" data-aos="fade-up">
    <iframe
      src="https://www.google.com/maps?q=Desa+Kedungdowo,+Balen,+Bojonegoro&output=embed"
      class="w-full h-[420px] border-0"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
  <p class="text-xs text-[var(--teks)]/50 mt-3 text-center">
    *Peta ini otomatis mencari lokasi berdasarkan nama desa. Kalau titiknya kurang presisi,
    ganti query di atribut <code>src</code> dengan koordinat pasti kantor desa (minta ke perangkat desa / cek Google Maps manual).
  </p>
</section>

@endsection