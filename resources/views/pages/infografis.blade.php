@extends('layouts.app')

@section('title', 'Transparansi')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Transparansi',
  'title'    => 'Transparansi Desa Kedungdowo',
  'subtitle' => 'Kecamatan Balen, Kabupaten Bojonegoro',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-14">

        {{-- ============================================================ --}}
        {{-- STATISTIK PENDUDUK — ringkas, sumber data SAMA dengan Beranda --}}
        {{-- (tabel profil_desa, diisi lewat admin panel) --}}
        {{-- ============================================================ --}}
        <div class="space-y-4" data-aos="fade-up">
            <h2 class="font-display text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3">
                Statistik Penduduk
            </h2>

            @if (!$profil)
              <div class="bg-white rounded-2xl border border-[var(--sawah)]/10 shadow-sm py-14 px-6 text-center">
                  <span class="material-symbols-outlined text-5xl text-[var(--sawah)]/30">groups</span>
                  <p class="font-section font-bold text-[var(--sawah-dark)] mt-3">Data belum tersedia</p>
                  <p class="text-sm text-[var(--teks)]/60 mt-1 max-w-md mx-auto">Akan tampil begitu perangkat desa menginput data resminya lewat admin panel.</p>
              </div>
            @else
              <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                      <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                          <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)]">diversity_3</span>
                      </div>
                      <div>
                          <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Total Penduduk</p>
                          <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">{{ number_format($profil->jumlah_penduduk, 0, ',', '.') }} <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                      </div>
                  </div>
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                      <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                          <span class="material-symbols-outlined text-3xl text-[var(--panen)]">home</span>
                      </div>
                      <div>
                          <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Kepala Keluarga</p>
                          <p class="text-2xl font-black text-[var(--panen)] mt-0.5">{{ number_format($profil->jumlah_kk, 0, ',', '.') }}</p>
                      </div>
                  </div>
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                      <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                          <span class="material-symbols-outlined text-3xl text-[var(--tanah)]">woman</span>
                      </div>
                      <div>
                          <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Perempuan</p>
                          <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">{{ number_format($profil->jumlah_perempuan, 0, ',', '.') }} <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                      </div>
                  </div>
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                      <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                          <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)]">man</span>
                      </div>
                      <div>
                          <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Laki-Laki</p>
                          <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">{{ number_format($profil->jumlah_laki_laki, 0, ',', '.') }} <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                      </div>
                  </div>
              </div>
              <p class="text-xs text-[var(--teks)]/45">*Data diperbarui terakhir: {{ $profil->updated_at->translatedFormat('d F Y') }}</p>
            @endif
        </div>

        {{-- ============================================================ --}}
        {{-- APBDDES — data asli dari database (Model Apbdes + RealisasiBidang) --}}
        {{-- ============================================================ --}}
        <div class="space-y-4" data-aos="fade-up">
            <h2 class="font-display text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3">
                Anggaran Pendapatan & Belanja Desa (APBDes)
            </h2>

            @if (!$apbdes)
              <div class="bg-white rounded-2xl border border-[var(--sawah)]/10 shadow-sm py-16 px-6 text-center">
                  <span class="material-symbols-outlined text-5xl text-[var(--sawah)]/30">payments</span>
                  <p class="font-section font-bold text-[var(--sawah-dark)] mt-3">APBDes</p>
                  <p class="text-sm text-[var(--teks)]/60 mt-1 max-w-md mx-auto">Data belum tersedia — akan ditampilkan begitu perangkat desa menginput data resminya lewat admin panel.</p>
              </div>
            @else
              <div>
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Ringkasan Tahun {{ $apbdes->tahun }}</h3>
                <div class="grid sm:grid-cols-2 gap-5 mt-4">
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm card-hover">
                    <p class="text-sm font-bold text-[var(--teks)]/55">Total Pendapatan</p>
                    <p class="text-2xl font-black text-[var(--sawah-dark)] mt-1">Rp {{ number_format($apbdes->pendapatan, 0, ',', '.') }}</p>
                  </div>
                  <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm card-hover">
                    <p class="text-sm font-bold text-[var(--teks)]/55">Total Belanja</p>
                    <p class="text-2xl font-black text-[var(--tanah)] mt-1">Rp {{ number_format($apbdes->belanja, 0, ',', '.') }}</p>
                  </div>
                </div>
                @if ($apbdes->dokumen_pdf)
                  <a href="{{ asset('storage/' . $apbdes->dokumen_pdf) }}" target="_blank" class="btn-outline mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[var(--sawah-dark)] underline underline-offset-4">
                    <span class="material-symbols-outlined text-base">description</span> Unduh Dokumen Resmi (PDF)
                  </a>
                @endif
              </div>

              @if ($apbdes->realisasiBidang->isNotEmpty())
              <div>
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-4">Realisasi Anggaran per Bidang</h3>
                <div class="space-y-4">
                  @foreach ($apbdes->realisasiBidang as $bidang)
                  <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm">
                    <div class="flex items-center justify-between text-sm mb-1.5">
                      <p class="font-bold text-[var(--teks)]/85">{{ $bidang->bidang }}</p>
                      <p class="text-[var(--teks)]/60">Rp {{ number_format($bidang->alokasi, 0, ',', '.') }}</p>
                    </div>
                    <div class="h-2.5 w-full bg-[var(--sawah)]/10 rounded-full overflow-hidden">
                      <div class="h-full bg-[var(--panen)] rounded-full" style="width: {{ min(100, $bidang->realisasi_persen) }}%"></div>
                    </div>
                    <p class="text-xs text-[var(--teks)]/55 mt-1">Realisasi {{ $bidang->realisasi_persen }}%</p>
                  </div>
                  @endforeach
                </div>
              </div>
              @endif
            @endif
        </div>

        {{-- ============================================================ --}}
        {{-- INDIKATOR LAINNYA — dirangkum jadi 1 catatan ringkas, bukan   --}}
        {{-- 4 blok kosong terpisah (Stunting/Bansos/IDM/SDGs). Bisa      --}}
        {{-- dikembangkan lagi nanti kalau sudah ada waktu & data.        --}}
        {{-- ============================================================ --}}
        <div class="bg-white rounded-2xl border border-[var(--sawah)]/10 shadow-sm p-6 md:p-8 flex flex-col md:flex-row items-center gap-5 text-center md:text-left" data-aos="fade-up">
            <span class="material-symbols-outlined text-4xl text-[var(--panen)] shrink-0">insights</span>
            <div>
                <p class="font-section font-bold text-[var(--sawah-dark)]">Indikator Desa Lainnya</p>
                <p class="text-sm text-[var(--teks)]/60 mt-1">Data Stunting, Penyaluran Bansos, Indeks Desa Membangun (IDM), dan capaian SDGs Desa akan ditambahkan secara bertahap setelah data resminya tersedia dari perangkat desa.</p>
            </div>
        </div>

    </div>
</main>

@endsection
