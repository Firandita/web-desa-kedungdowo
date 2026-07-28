@extends('layouts.app')

@section('title', 'Profil Desa')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Profil Desa',
  'title'    => 'Mengenal Desa Kedungdowo',
  'subtitle' => 'Kecamatan Balen, Kabupaten Bojonegoro, Provinsi Jawa Timur',
])

{{-- SAMBUTAN KADES --}}
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

  {{-- FOTO KEPALA DESA FLEKSIBEL & PROPORSIOANL --}}
  <div class="flex justify-center md:justify-end" data-aos="fade-left">
    <div class="w-full max-w-xs md:max-w-sm bg-white p-3 rounded-3xl border border-[var(--sawah)]/20 shadow-md">
      <div class="overflow-hidden rounded-2xl aspect-[3/4] relative bg-gray-100">
        <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa Kedungdowo"
             class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500"
             onerror="this.classList.add('img-slot')">
      </div>
      <div class="text-center pt-3 pb-1">
        <p class="font-display font-bold text-xs text-[var(--sawah-dark)] uppercase tracking-wider">Yuyus Adi Setiawan, S.Pd.</p>
        <p class="text-[11px] text-[var(--tanah)]">Kepala Desa Kedungdowo</p>
      </div>
    </div>
  </div>
</section>

{{-- SEJARAH SINGKAT --}}
<section class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-5 md:px-8 grid md:grid-cols-2 gap-10 items-center">
    <img src="{{ asset('img/sejarah-desa.jpg') }}" alt="Sejarah Desa Kedungdowo"
         class="aspect-[4/3] w-full object-cover rounded-2xl border border-[var(--sawah)]/20 img-slot order-2 md:order-1 shadow-sm"
         onerror="this.classList.add('img-slot')" data-aos="fade-right">
    
    <div class="order-1 md:order-2 space-y-3" data-aos="fade-left">
      <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)]">Sejarah</p>
      <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)]">Sejarah Singkat Desa</h2>
      
      <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/80">
        Nama <strong>Kedungdowo</strong> diambil dari dua kata bahasa Jawa, yaitu <em>"Kedung"</em> yang berarti kubangan/genangan air yang dalam di aliran sungai, dan <em>"Dowo"</em> yang berarti panjang. Menurut cerita tutur para sesepuh desa, nama ini merujuk pada kondisi geografis wilayah di masa lampau yang berada di dekat kawasan aliran sungai Bengawan Solo dengan cerukan air yang memanjang.
      </p>
      
      <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/80">
        Sejak zaman dahulu, kawasan ini dikenal sebagai wilayah agraris yang subur. Keberadaan aliran air tersebut dimanfaatkan oleh para perintis desa dan pemukim awal untuk membuka lahan pertanian dan tempat tinggal. Seiring berjalannya waktu, kedung tersebut menjadi simbol kehidupan dan sumber penghidupan utama bagi masyarakat setempat.
      </p>

      <p class="text-sm md:text-base leading-relaxed text-[var(--teks)]/80">
        Kini, Desa Kedungdowo tumbuh menjadi desa yang mandiri dan memelihara kebudayaan leluhur. Tradisi gotong royong serta kearifan lokal seperti <em>Sedekah Bumi</em> terus dijaga sebagai wujud rasa syukur atas melimpahnya hasil bumi di Kecamatan Balen, Kabupaten Bojonegoro.
      </p>
    </div>
  </div>
</section>

{{-- VISI MISI --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2 text-center">Arah Pembangunan</p>
  <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)] mb-10 text-center">Visi & Misi Desa</h2>
  <div class="grid md:grid-cols-2 gap-8">
    <div class="p-7 rounded-2xl bg-[var(--sawah)] text-white shadow-sm" data-aos="fade-up">
      <p class="font-display font-bold text-lg mb-3 text-[var(--panen)]">Visi</p>
      <p class="text-sm leading-relaxed text-white/90">
        [Placeholder — isi dengan visi resmi desa dari dokumen RPJMDes, contoh: "Terwujudnya
        Desa Kedungdowo yang mandiri, sejahtera, dan berbudaya berbasis potensi pertanian
        dan peternakan."]
      </p>
    </div>
    <div class="p-7 rounded-2xl bg-[var(--tanah)] text-white shadow-sm" data-aos="fade-up" data-aos-delay="120">
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
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Semampir</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Kawasan pertanian & peternakan</p>
      </div>
      <div class="p-6 rounded-xl border border-[var(--sawah)]/15 card-hover bg-[var(--krem)]" data-aos="zoom-in" data-aos-delay="225">
        <p class="font-display font-bold text-[var(--sawah-dark)]">Dusun Kuniran</p>
        <p class="text-sm text-[var(--teks)]/70 mt-1">Kawasan pemukiman warga</p>
      </div>
    </div>
  </div>
</section>

{{-- PETA LOKASI & DETAIL GEOGRAFIS DESA (LAYOUT SEPERTI CONTOH GAMBAR) --}}
<section class="max-w-7xl mx-auto px-5 md:px-8 py-16">
  <div class="text-center mb-10">
    <p class="uppercase tracking-widest text-xs font-semibold text-[var(--tanah)] mb-2">Letak Geografis</p>
    <h2 class="font-display text-2xl md:text-3xl font-bold text-[var(--sawah-dark)]">Peta Lokasi Desa</h2>
  </div>

  <div class="grid lg:grid-cols-12 gap-8 items-stretch" data-aos="fade-up">
    {{-- KOLOM KIRI: Informasi Batas Desa & Statistik --}}
    <div class="lg:col-span-5 bg-[var(--krem)] p-6 md:p-8 rounded-3xl border border-[var(--sawah)]/15 shadow-sm flex flex-col justify-between space-y-6">
      
      <div>
        <h3 class="font-display font-bold text-lg text-[var(--sawah-dark)] border-b border-[var(--sawah)]/15 pb-3 mb-4">
          Batas Desa:
        </h3>
        
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white p-3.5 rounded-2xl border border-[var(--sawah)]/10">
            <span class="block text-xs font-bold text-[var(--tanah)] uppercase tracking-wider mb-1">Utara</span>
            <p class="text-sm font-medium text-[var(--teks)]">Desa Mulyoagung</p>
          </div>

          <div class="bg-white p-3.5 rounded-2xl border border-[var(--sawah)]/10">
            <span class="block text-xs font-bold text-[var(--tanah)] uppercase tracking-wider mb-1">Timur</span>
            <p class="text-sm font-medium text-[var(--teks)]">Desa Balenrejo</p>
          </div>

          <div class="bg-white p-3.5 rounded-2xl border border-[var(--sawah)]/10">
            <span class="block text-xs font-bold text-[var(--tanah)] uppercase tracking-wider mb-1">Selatan</span>
            <p class="text-sm font-medium text-[var(--teks)]">Desa Suwaloh</p>
          </div>

          <div class="bg-white p-3.5 rounded-2xl border border-[var(--sawah)]/10">
            <span class="block text-xs font-bold text-[var(--tanah)] uppercase tracking-wider mb-1">Barat</span>
            <p class="text-sm font-medium text-[var(--teks)]">Desa Bulu</p>
          </div>
        </div>
      </div>

      <div class="space-y-4 pt-2 border-t border-[var(--sawah)]/15">
        <div class="flex items-center justify-between bg-white p-4 rounded-2xl border border-[var(--sawah)]/10">
          <span class="text-sm font-bold text-[var(--sawah-dark)]">Luas Desa:</span>
          <span class="text-base font-extrabold text-[var(--sawah)]">1.920.000 m² <span class="text-xs font-normal text-[var(--teks)]/70">(192 Ha)</span></span>
        </div>

        <div class="flex items-center justify-between bg-white p-4 rounded-2xl border border-[var(--sawah)]/10">
          <span class="text-sm font-bold text-[var(--sawah-dark)]">Jumlah Penduduk:</span>
          <span class="text-base font-extrabold text-[var(--sawah)]">2.845 Jiwa</span>
        </div>
      </div>

    </div>

    {{-- KOLOM KANAN: Peta Interactive Google Maps --}}
    <div class="lg:col-span-7 rounded-3xl overflow-hidden border border-[var(--sawah)]/15 shadow-sm min-h-[380px] lg:min-h-full">
      <iframe
        src="https://www.google.com/maps?q=Desa+Kedungdowo,+Balen,+Bojonegoro&output=embed"
        class="w-full h-full min-h-[380px] border-0"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <p class="text-xs text-[var(--teks)]/50 mt-4 text-center">
    *Peta ini otomatis memuat titik geografis Desa Kedungdowo, Kecamatan Balen, Kabupaten Bojonegoro.
  </p>
</section>

@endsection