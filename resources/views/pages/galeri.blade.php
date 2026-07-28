@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Dokumentasi & Galeri',
  'title'    => 'Galeri Kegiatan & Pembangunan Desa',
  'subtitle' => 'Dokumentasi transparansi pelaksanaan program kerja, kegiatan kemasyarakatan, dan hasil pembangunan Desa Kedungdowo.',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-10">

        <!-- ========================================================================= -->
        <!-- QUICK STATS COUNTER -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up">
            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--sawah)]/10 text-[var(--sawah-dark)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">photo_library</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--sawah-dark)] leading-none">150+</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Total Dokumentasi</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--panen)]/20 text-[var(--teks)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">construction</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--sawah-dark)] leading-none">45+</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Fasilitas & Jalan</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--tanah)]/15 text-[var(--tanah)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">diversity_3</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--tanah)] leading-none">60+</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Pemberdayaan</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">health_and_safety</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-teal-800 leading-none">35+</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Posyandu & Kesehatan</p>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- FEATURED SHOWCASE (SOROTAN KEGIATAN UTAMA) -->
        <!-- ========================================================================= -->
        <div class="relative bg-gradient-to-r from-[var(--sawah-dark)] to-[var(--sawah)] rounded-3xl overflow-hidden shadow-lg border border-[var(--sawah)]/20 text-white" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                <!-- Media / Cover Gambar Sorotan -->
                <div class="lg:col-span-7 h-64 sm:h-80 lg:h-96 relative overflow-hidden group cursor-pointer" onclick="openGalleryModal(0)">
                    <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186a5b3?q=80&w=1200&auto=format&fit=crop" alt="Pembangunan Jalan Tani" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4 flex items-center gap-2">
                        <span class="bg-[var(--panen)] text-[var(--sawah-dark)] font-bold text-[10px] uppercase tracking-widest px-3 py-1 rounded-full shadow-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">star</span> Sorotan Utama
                        </span>
                        <span class="bg-black/50 backdrop-blur-xs text-white text-[10px] font-semibold px-2.5 py-1 rounded-full">
                            Pembangunan
                        </span>
                    </div>
                </div>

                <!-- Detail Teks Sorotan -->
                <div class="lg:col-span-5 p-6 md:p-8 space-y-4">
                    <div class="flex items-center gap-3 text-xs text-white/80">
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm text-[var(--panen)]">calendar_today</span> 18 Juli 2026
                        </span>
                        <span>•</span>
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm text-[var(--panen)]">location_on</span> Dusun Kedungdowo
                        </span>
                    </div>

                    <h2 class="font-display font-bold text-xl md:text-2xl leading-tight hover:text-[var(--panen)] transition-colors cursor-pointer" onclick="openGalleryModal(0)">
                        Pembangunan & Pengaspalan Jalan Usaha Tani Dusun Kedungdowo
                    </h2>

                    <p class="text-xs text-white/80 leading-relaxed line-clamp-3">
                        Pelaksanaan perbaikan dan pengaspalan akses jalan pertanian guna meningkatkan kelancaran pengangkutan hasil panen padi warga serta mobilitas perekonomian desa.
                    </p>

                    <div class="pt-2">
                        <button onclick="openGalleryModal(0)" class="inline-flex items-center gap-2 bg-[var(--panen)] text-[var(--sawah-dark)] hover:bg-yellow-400 font-bold text-xs px-4 py-2.5 rounded-xl transition-all shadow-xs cursor-pointer">
                            <span class="material-symbols-outlined text-sm">fullscreen</span> Lihat Foto Resolusi Tinggi
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- FILTER KATEGORI & LIVE SEARCH BAR -->
        <!-- ========================================================================= -->
        <div class="bg-white p-4 md:p-5 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-4" data-aos="fade-up" data-aos-delay="150">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                
                <!-- Live Search Bar -->
                <div class="relative w-full md:w-80">
                    <span class="material-symbols-outlined absolute left-3.5 top-2.5 text-[var(--teks)]/40 text-lg pointer-events-none">search</span>
                    <input type="text" id="gallerySearchInput" oninput="filterGalleryLive()" placeholder="Cari kegiatan atau lokasi..." class="w-full pl-10 pr-4 py-2.5 text-xs bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all">
                </div>

                <!-- Category Pill Tabs -->
                <div class="flex flex-wrap items-center gap-1.5 w-full md:w-auto justify-start md:justify-end" id="categoryPillTabs">
                    <button onclick="filterGallery('semua')" id="btn-semua" class="gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-[var(--sawah-dark)] text-white shadow-xs flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">grid_view</span> Semua
                    </button>
                    <button onclick="filterGallery('pembangunan')" id="btn-pembangunan" class="gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">construction</span> Pembangunan
                    </button>
                    <button onclick="filterGallery('pemberdayaan')" id="btn-pemberdayaan" class="gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">diversity_3</span> Pemberdayaan
                    </button>
                    <button onclick="filterGallery('kesehatan')" id="btn-kesehatan" class="gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">health_and_safety</span> Kesehatan
                    </button>
                    <button onclick="filterGallery('pemerintahan')" id="btn-pemerintahan" class="gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer">
                        <span class="material-symbols-outlined text-sm">account_balance</span> Pemerintahan
                    </button>
                </div>

            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- GRID GALERI FOTO (MODERN CARDS) -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="galleryGrid">
            
            <!-- Item 1 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pembangunan"
                 data-title="Pembangunan & Pengaspalan Jalan Usaha Tani Dusun Kedungdowo"
                 data-location="Dusun Kedungdowo"
                 data-index="0"
                 data-aos="fade-up" data-aos-delay="0"
                 onclick="openGalleryModal(0)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1541888946425-d0fbb186a5b3?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Pembangunan Jalan Tani" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--sawah-dark)] text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pembangunan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--sawah-dark)]">calendar_today</span> 18 Juli 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Dusun Kedungdowo
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Pembangunan Jalan Usaha Tani Dusun Kedungdowo
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Pengaspalan akses jalan pertanian demi mempermudah transportasi panen warga.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pemberdayaan"
                 data-title="Pelatihan Keterampilan UMKM Produk Olahan Pangan Lokal"
                 data-location="Balai Desa Kedungdowo"
                 data-index="1"
                 data-aos="fade-up" data-aos-delay="50"
                 onclick="openGalleryModal(1)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Pelatihan UMKM" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--tanah)] text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pemberdayaan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--tanah)]">calendar_today</span> 15 Juli 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Balai Desa
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Pelatihan Keterampilan UMKM Olahan Pangan
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Kegiatan pelatihan kemasan dan pemasaran digital bagi ibu-ibu PKK dan pelaku usaha desa.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="kesehatan"
                 data-title="Pemeriksaan Kesehatan Rutin Balita & Cegah Stunting"
                 data-location="Posyandu Melati Dusun 2"
                 data-index="2"
                 data-aos="fade-up" data-aos-delay="100"
                 onclick="openGalleryModal(2)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Posyandu" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-teal-700 text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Kesehatan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-teal-700">calendar_today</span> 10 Juli 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Posyandu Melati
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Pemeriksaan Kesehatan Balita & Cegah Stunting
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Penimbangan balita, pemberian makanan tambahan (PMT), dan edukasi gizi dari Puskesmas.
                    </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pemerintahan"
                 data-title="Musrenbangdes Rencana Kerja Pemerintah Desa (RKPDes)"
                 data-location="Pendopo Balai Desa"
                 data-index="3"
                 data-aos="fade-up" data-aos-delay="150"
                 onclick="openGalleryModal(3)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Musrenbangdes" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pemerintahan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--sawah-dark)]">calendar_today</span> 05 Juli 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Pendopo Desa
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Musrenbangdes Rencana Kerja RKPDes
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Musyawarah desa bersama tokoh masyarakat untuk menetapkan prioritas pembangunan.
                    </p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pembangunan"
                 data-title="Rehabilitasi Saluran Irigasi Pertanian Sawah Kedungdowo"
                 data-location="Area Persawahan Blok B"
                 data-index="4"
                 data-aos="fade-up" data-aos-delay="200"
                 onclick="openGalleryModal(4)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Irigasi" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--sawah-dark)] text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pembangunan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--sawah-dark)]">calendar_today</span> 28 Juni 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Area Persawahan
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Rehabilitasi Saluran Irigasi Pertanian
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Perbaikan talud irigasi tersier untuk mengoptimalkan pembagian air ke lahan sawah warga.
                    </p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pemberdayaan"
                 data-title="Kerja Bakti Gotong Royong Pembersihan Lingkungan Desa"
                 data-location="Lingkungan RT 01 - RT 05"
                 data-index="5"
                 data-aos="fade-up" data-aos-delay="250"
                 onclick="openGalleryModal(5)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Kerja Bakti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--tanah)] text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pemberdayaan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--tanah)]">calendar_today</span> 20 Juni 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Seluruh RT Desa
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Kerja Bakti Gotong Royong Pembersihan Saluran
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Aksi kebersamaan pembersihan selokan dan perapihan vegetasi menjelang musim penghujan.
                    </p>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="kesehatan"
                 data-title="Sosialisasi Perilaku Hidup Bersih & Sehat (PHBS) Warga"
                 data-location="Balai Pertemuan Warga"
                 data-index="6"
                 data-aos="fade-up" data-aos-delay="300"
                 onclick="openGalleryModal(6)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Sosialisasi Kesehatan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-teal-700 text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Kesehatan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-teal-700">calendar_today</span> 12 Juni 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Balai Pertemuan
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Sosialisasi Perilaku Hidup Bersih & Sehat
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Edukasi rutin menjaga kebersihan air bersih dan penanganan sampah rumah tangga.
                    </p>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md flex flex-col justify-between" 
                 data-category="pemerintahan"
                 data-title="Penyaluran Bantuan Langsung Tunai Dana Desa (BLT-DD)"
                 data-location="Balai Desa Kedungdowo"
                 data-index="7"
                 data-aos="fade-up" data-aos-delay="350"
                 onclick="openGalleryModal(7)">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="https://images.unsplash.com/photo-1556742049-0a67daf4005a?q=80&w=800&auto=format&fit=crop" alt="Dokumentasi Penyaluran BLT" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs">
                        Pemerintahan
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--sawah-dark)]">calendar_today</span> 01 Juni 2026
                            </span>
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> Balai Desa
                            </span>
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            Penyaluran Bantuan Langsung Tunai (BLT-DD)
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        Penyerahan bantuan sosial bagi Keluarga Penerima Manfaat (KPM) Desa Kedungdowo.
                    </p>
                </div>
            </div>

        </div>

        <!-- ========================================================================= -->
        <!-- EMPTY STATE (JIKA HASIL CARI KOSONG) -->
        <!-- ========================================================================= -->
        <div id="noResultsState" class="hidden text-center py-16 bg-white rounded-3xl border border-[var(--sawah)]/10 space-y-3">
            <div class="w-14 h-14 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-full flex items-center justify-center mx-auto">
                <span class="material-symbols-outlined text-3xl">search_off</span>
            </div>
            <h4 class="font-display font-bold text-base text-[var(--teks)]">Tidak Ada Dokumentasi Ditemukan</h4>
            <p class="text-xs text-[var(--teks)]/50 max-w-sm mx-auto">Coba gunakan kata kunci pencarian lain atau klik tombol filter kategori "Semua".</p>
            <button onclick="resetGalleryFilters()" class="inline-flex items-center gap-1 text-xs font-bold text-[var(--sawah-dark)] bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/20 px-3.5 py-2 rounded-xl transition-colors cursor-pointer">
                Reset Filter
            </button>
        </div>

        <!-- ========================================================================= -->
        <!-- MODERN PAGINATION COMPONENT -->
        <!-- ========================================================================= -->
        <div class="flex items-center justify-center pt-6 border-t border-[var(--sawah)]/10" data-aos="fade-up">
            <nav class="inline-flex -space-x-px rounded-xl bg-white shadow-xs border border-[var(--sawah)]/15 overflow-hidden" aria-label="Pagination">
                <a href="#" class="inline-flex items-center px-3 py-2 text-[var(--teks)]/50 hover:bg-[var(--sawah)]/5 transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                </a>
                <a href="#" aria-current="page" class="inline-flex items-center px-4 py-2 text-xs font-bold bg-[var(--sawah-dark)] text-white">1</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">2</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">3</a>
                <span class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/50 border-l bg-[var(--krem)]">...</span>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">8</a>
                <a href="#" class="inline-flex items-center px-3 py-2 text-[var(--teks)]/50 hover:bg-[var(--sawah)]/5 border-l transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </nav>
        </div>

    </div>
</main>

<!-- ========================================================================= -->
<!-- MODAL POP-UP LIGHTBOX PREVIEW FOTO BESAR + NAVIGASI PREV/NEXT -->
<!-- ========================================================================= -->
<div id="galleryModal" class="fixed inset-0 z-50 hidden bg-black/85 flex items-center justify-center p-4 backdrop-blur-md transition-all duration-300">
    <div class="bg-white rounded-3xl max-w-4xl w-full overflow-hidden shadow-2xl relative border border-white/20 transform scale-95 transition-transform duration-300" id="galleryModalCard">
        
        <!-- Tombol Close Melayang -->
        <button onclick="closeGalleryModal()" class="absolute top-4 right-4 z-20 bg-black/60 text-white hover:bg-red-600 rounded-full p-2 transition-all shadow-md cursor-pointer">
            <span class="material-symbols-outlined block text-xl">close</span>
        </button>

        <!-- Container Konten Pop-up -->
        <div class="flex flex-col">
            
            <!-- Area Gambar Resolusi Tinggi + Tombol Navigasi Prev/Next -->
            <div class="w-full bg-neutral-900 flex items-center justify-center min-h-[50vh] max-h-[65vh] relative overflow-hidden group">
                <img src="" id="modalLargeImg" class="w-full h-full object-contain max-h-[65vh]" alt="Gambar Kegiatan Besar">
                
                <!-- Navigasi Prev -->
                <button onclick="navigateGallery(-1)" id="prevGalleryBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-[var(--sawah)] text-white p-2.5 rounded-full transition-all shadow-lg border border-white/20 cursor-pointer">
                    <span class="material-symbols-outlined text-2xl block">chevron_left</span>
                </button>

                <!-- Navigasi Next -->
                <button onclick="navigateGallery(1)" id="nextGalleryBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-[var(--sawah)] text-white p-2.5 rounded-full transition-all shadow-lg border border-white/20 cursor-pointer">
                    <span class="material-symbols-outlined text-2xl block">chevron_right</span>
                </button>
            </div>

            <!-- Detail Informasi Foto & Aksi -->
            <div class="p-6 bg-white space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-2 border-b border-[var(--sawah)]/10 pb-3">
                    <div class="space-y-1 max-w-xl">
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-bold text-white uppercase tracking-wider px-2.5 py-0.5 rounded-md" id="modalGalleryCategoryBadge">
                                Pembangunan
                            </span>
                            <span class="text-xs text-[var(--teks)]/60 font-semibold flex items-center gap-1" id="modalGalleryLocation">
                                <span class="material-symbols-outlined text-xs">location_on</span> Dusun Kedungdowo
                            </span>
                        </div>
                        <h3 class="font-display font-bold text-lg md:text-xl text-[var(--sawah-dark)] leading-tight" id="modalGalleryTitle">
                            Judul Kegiatan Galeri
                        </h3>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="text-xs text-[var(--teks)]/70 font-semibold flex items-center gap-1 bg-[var(--krem)] border border-[var(--sawah)]/15 px-3 py-1.5 rounded-xl" id="modalGalleryDate">
                            <span class="material-symbols-outlined text-sm">calendar_today</span> 18 Juli 2026
                        </span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="space-y-1 flex-1">
                        <h4 class="text-[10px] font-bold text-[var(--teks)]/50 uppercase tracking-wider">Deskripsi Kegiatan:</h4>
                        <p class="text-xs text-[var(--teks)]/75 leading-relaxed" id="modalGalleryDesc">
                            Deskripsi lengkap perihal jalannya kegiatan dokumentasi akan tampil di sini.
                        </p>
                    </div>

                    <div class="flex items-center gap-2 shrink-0">
                        <button onclick="shareGalleryItem()" class="inline-flex items-center gap-1.5 text-xs font-bold text-[var(--teks)] bg-[var(--krem)] hover:bg-slate-200 border border-[var(--sawah)]/15 px-3 py-2 rounded-xl transition-all cursor-pointer">
                            <span class="material-symbols-outlined text-sm">share</span> Bagikan
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT LOGIC HANDLER -->
<!-- ========================================================================= -->
<script>
    // DATASET DOKUMENTASI UNTUK PREVIEW MODAL LIGHTBOX
    const galleryItemsData = [
        {
            title: "Pembangunan & Pengaspalan Jalan Usaha Tani Dusun Kedungdowo",
            category: "pembangunan",
            categoryName: "Pembangunan",
            categoryBg: "bg-[var(--sawah-dark)]",
            location: "Dusun Kedungdowo RT 04 / RW 02",
            date: "18 Juli 2026",
            desc: "Pelaksanaan perbaikan dan pengaspalan akses jalan pertanian guna meningkatkan kelancaran pengangkutan hasil panen padi warga serta mobilitas perekonomian desa.",
            imgUrl: "https://images.unsplash.com/photo-1541888946425-d0fbb186a5b3?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Pelatihan Keterampilan UMKM Produk Olahan Pangan Lokal",
            category: "pemberdayaan",
            categoryName: "Pemberdayaan",
            categoryBg: "bg-[var(--tanah)]",
            location: "Pendopo Balai Desa Kedungdowo",
            date: "15 Juli 2026",
            desc: "Pelatihan pembuatan kemasan produk UMKM makanan olahan bagi anggota PKK dan kelompok wanita tani (KWT) guna menggenjot nilai jual produk desa.",
            imgUrl: "https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Pemeriksaan Kesehatan Rutin Balita & Cegah Stunting",
            category: "kesehatan",
            categoryName: "Kesehatan",
            categoryBg: "bg-teal-700",
            location: "Posyandu Melati Dusun 2",
            date: "10 Juli 2026",
            desc: "Kegiatan penimbangan berat badan balita, pengurusan imunisasi, dan pembagian paket nutrisi makanan tambahan (PMT) cegah stunting.",
            imgUrl: "https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Musrenbangdes Rencana Kerja Pemerintah Desa (RKPDes)",
            category: "pemerintahan",
            categoryName: "Pemerintahan",
            categoryBg: "bg-[var(--panen)] text-[var(--sawah-dark)]",
            location: "Balai Desa Kedungdowo",
            date: "05 Juli 2026",
            desc: "Forum musyawarah tahunan penyusunan rencana kerja dan alokasi anggaran pembangunan desa bersama BPD, ketua RT/RW, dan tokoh masyarakat.",
            imgUrl: "https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Rehabilitasi Saluran Irigasi Pertanian Sawah Kedungdowo",
            category: "pembangunan",
            categoryName: "Pembangunan",
            categoryBg: "bg-[var(--sawah-dark)]",
            location: "Persawahan Blok B Kedungdowo",
            date: "28 Juni 2026",
            desc: "Pembangunan tembok penahan tanah dan perbaikan saluran irigasi tersier untuk memastikan pasokan air lancar selama musim tanam.",
            imgUrl: "https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Kerja Bakti Gotong Royong Pembersihan Lingkungan Desa",
            category: "pemberdayaan",
            categoryName: "Pemberdayaan",
            categoryBg: "bg-[var(--tanah)]",
            location: "Seluruh Wilayah RT Desa Kedungdowo",
            date: "20 Juni 2026",
            desc: "Kegiatan kerja bakti rutin warga dalam merapikan fasilitas umum, selokan, dan drainase lingkungan pemukiman desa.",
            imgUrl: "https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Sosialisasi Perilaku Hidup Bersih & Sehat (PHBS) Warga",
            category: "kesehatan",
            categoryName: "Kesehatan",
            categoryBg: "bg-teal-700",
            location: "Balai Pertemuan Warga RT 03",
            date: "12 Juni 2026",
            desc: "Edukasi kesehatan masyarakat mengenai pentingnya kebersihan sanitasi lingkungan dan pengolahan limbah sampah rumah tangga.",
            imgUrl: "https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=1200&auto=format&fit=crop"
        },
        {
            title: "Penyaluran Bantuan Langsung Tunai Dana Desa (BLT-DD)",
            category: "pemerintahan",
            categoryName: "Pemerintahan",
            categoryBg: "bg-[var(--panen)] text-[var(--sawah-dark)]",
            location: "Balai Desa Kedungdowo",
            date: "01 Juni 2026",
            desc: "Penyerahan secara resmi dana bantuan sosial BLT Dana Desa tahap II kepada 45 Keluarga Penerima Manfaat (KPM) berhak.",
            imgUrl: "https://images.unsplash.com/photo-1556742049-0a67daf4005a?q=80&w=1200&auto=format&fit=crop"
        }
    ];

    let currentGalleryIndex = 0;
    let currentCategoryFilter = 'semua';

    // FUNGSI 1: FILTER KATEGORI VIA TOMBOL TAB
    function filterGallery(category) {
        currentCategoryFilter = category;
        const searchInput = document.getElementById('gallerySearchInput');
        if (searchInput) searchInput.value = '';
        
        applyGalleryFilters();

        // Update Class Tombol Tab
        const tabs = document.querySelectorAll('.gallery-tab');
        tabs.forEach(tab => {
            tab.className = "gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer";
        });

        const activeTab = document.getElementById(`btn-${category}`);
        if (activeTab) {
            activeTab.className = "gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-[var(--sawah-dark)] text-white shadow-xs flex items-center gap-1.5 cursor-pointer";
        }
    }

    // FUNGSI 2: LIVE SEARCH INPUT
    function filterGalleryLive() {
        applyGalleryFilters();
    }

    function applyGalleryFilters() {
        const query = document.getElementById('gallerySearchInput').value.toLowerCase().trim();
        const items = document.querySelectorAll('.gallery-item');
        let visibleCount = 0;

        items.forEach(item => {
            const categoryMatch = currentCategoryFilter === 'semua' || item.getAttribute('data-category') === currentCategoryFilter;
            const titleMatch = item.getAttribute('data-title').toLowerCase().includes(query) || item.getAttribute('data-location').toLowerCase().includes(query);

            if (categoryMatch && titleMatch) {
                item.style.display = 'flex';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        const emptyState = document.getElementById('noResultsState');
        if (visibleCount === 0) {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
        }
    }

    function resetGalleryFilters() {
        document.getElementById('gallerySearchInput').value = '';
        filterGallery('semua');
    }

    // FUNGSI 3: OPEN LIGHTBOX MODAL PREVIEW FOTO
    function openGalleryModal(index) {
        if (index < 0 || index >= galleryItemsData.length) return;
        
        currentGalleryIndex = index;
        const data = galleryItemsData[index];

        document.getElementById('modalGalleryTitle').innerText = data.title;
        document.getElementById('modalGalleryDesc').innerText = data.desc;
        document.getElementById('modalGalleryDate').innerHTML = `<span class="material-symbols-outlined text-sm">calendar_today</span> ${data.date}`;
        document.getElementById('modalGalleryLocation').innerHTML = `<span class="material-symbols-outlined text-xs">location_on</span> ${data.location}`;
        document.getElementById('modalLargeImg').setAttribute('src', data.imgUrl);

        const badge = document.getElementById('modalGalleryCategoryBadge');
        badge.innerText = data.categoryName;
        badge.className = `text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-md ${data.categoryBg}`;

        const modal = document.getElementById('galleryModal');
        const card = document.getElementById('galleryModalCard');

        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
        }, 10);
    }

    // FUNGSI 4: NAVIGASI PREV / NEXT FOTO DI MODAL
    function navigateGallery(direction) {
        let newIndex = currentGalleryIndex + direction;
        if (newIndex < 0) newIndex = galleryItemsData.length - 1;
        if (newIndex >= galleryItemsData.length) newIndex = 0;
        openGalleryModal(newIndex);
    }

    // FUNGSI 5: CLOSE MODAL
    function closeGalleryModal() {
        const modal = document.getElementById('galleryModal');
        const card = document.getElementById('galleryModalCard');
        
        card.classList.remove('scale-100');
        card.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 150);
    }

    function shareGalleryItem() {
        if (navigator.share) {
            navigator.share({
                title: galleryItemsData[currentGalleryIndex].title,
                text: galleryItemsData[currentGalleryIndex].desc,
                url: window.location.href,
            }).catch(() => {});
        } else {
            alert('Tautan dokumentasi kegiatan berhasil disalin ke clipboard!');
        }
    }

    // Keyboard Shortcuts (Arrow Left, Arrow Right, Escape)
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('galleryModal');
        if (!modal.classList.contains('hidden')) {
            if (e.key === 'ArrowLeft') navigateGallery(-1);
            if (e.key === 'ArrowRight') navigateGallery(1);
            if (e.key === 'Escape') closeGalleryModal();
        }
    });

    window.onclick = function(event) {
        const modal = document.getElementById('galleryModal');
        if (event.target == modal) {
            closeGalleryModal();
        }
    }
</script>
@endsection