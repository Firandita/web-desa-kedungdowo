@extends('layouts.app') {{-- Sesuaikan dengan nama file layout utama projekmu --}}

@section('title', 'Galeri')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Dokumentasi',
  'title'    => 'Galeri Kegiatan Desa',
  'subtitle' => 'Dokumentasi transparansi pelaksanaan program kerja dan aktivitas masyarakat Desa Kedungdowo.',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-10">

        <!-- ========================================================================= -->
        <!-- FILTER KATEGORI (TAB SYSTEM) -->
        <!-- ========================================================================= -->
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 border-b pb-4">
            <button onclick="filterGallery('semua')" id="btn-semua" class="gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-[var(--sawah-dark)] text-white shadow-sm">
                Semua Kegiatan
            </button>
            <button onclick="filterGallery('pembangunan')" id="btn-pembangunan" class="gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border">
                Infrastruktur & Pembangunan
            </button>
            <button onclick="filterGallery('pemberdayaan')" id="btn-pemberdayaan" class="gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border">
                Pemberdayaan Masyarakat
            </button>
            <button onclick="filterGallery('kesehatan')" id="btn-kesehatan" class="gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border">
                Kesehatan & Stunting
            </button>
            <button onclick="filterGallery('pemerintahan')" id="btn-pemerintahan" class="gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border">
                Pemerintahan Desa
            </button>
        </div>

        <!-- ========================================================================= -->
        <!-- GRID GALERI TEMPLATE FOTO (PLACEHOLDER) -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="galleryGrid">
            
            <!-- Template Item 1 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pembangunan"
                 onclick="openGalleryModal('Judul Kegiatan Pembangunan 1', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan infrastruktur pembangunan desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-1.jpg') }}', '18 Juli 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-1.jpg --}}
                    <img src="{{ asset('img/galeri-1.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--sawah-dark)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pembangunan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 18 Juli 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pembangunan 1</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pembangunan...</p>
                </div>
            </div>

            <!-- Template Item 2 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pemberdayaan"
                 onclick="openGalleryModal('Judul Kegiatan Pemberdayaan 1', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan pemberdayaan masyarakat desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-2.jpg') }}', '15 Juli 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-2.jpg --}}
                    <img src="{{ asset('img/galeri-2.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--tanah)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pemberdayaan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 15 Juli 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pemberdayaan 1</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pemberdayaan...</p>
                </div>
            </div>

            <!-- Template Item 3 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="kesehatan"
                 onclick="openGalleryModal('Judul Kegiatan Kesehatan 1', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan kesehatan masyarakat desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-3.jpg') }}', '10 Juli 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-3.jpg --}}
                    <img src="{{ asset('img/galeri-3.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--sawah)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Kesehatan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 10 Juli 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Kesehatan 1</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan kesehatan...</p>
                </div>
            </div>

            <!-- Template Item 4 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pemerintahan"
                 onclick="openGalleryModal('Judul Kegiatan Pemerintahan 1', 'Deskripsi lengkap atau laporan perihal jalannya rapat internal atau pelayanan pemerintahan desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-4.jpg') }}', '05 Juli 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-4.jpg --}}
                    <img src="{{ asset('img/galeri-4.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pemerintahan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 05 Juli 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pemerintahan 1</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pemerintahan...</p>
                </div>
            </div>

            <!-- Template Item 5 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pembangunan"
                 onclick="openGalleryModal('Judul Kegiatan Pembangunan 2', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan infrastruktur pembangunan desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-5.jpg') }}', '28 Juni 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-5.jpg --}}
                    <img src="{{ asset('img/galeri-5.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--sawah-dark)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pembangunan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 28 Juni 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pembangunan 2</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pembangunan...</p>
                </div>
            </div>

            <!-- Template Item 6 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pemberdayaan"
                 onclick="openGalleryModal('Judul Kegiatan Pemberdayaan 2', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan pemberdayaan masyarakat desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-6.jpg') }}', '20 Juni 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-6.jpg --}}
                    <img src="{{ asset('img/galeri-6.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--tanah)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pemberdayaan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 20 Juni 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pemberdayaan 2</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pemberdayaan...</p>
                </div>
            </div>

            <!-- Template Item 7 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="kesehatan"
                 onclick="openGalleryModal('Judul Kegiatan Kesehatan 2', 'Deskripsi lengkap atau laporan perihal jalannya kegiatan kesehatan masyarakat desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-7.jpg') }}', '12 Juni 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-7.jpg --}}
                    <img src="{{ asset('img/galeri-7.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--sawah)] text-white font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Kesehatan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 12 Juni 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Kesehatan 2</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan kesehatan...</p>
                </div>
            </div>

            <!-- Template Item 8 -->
            <div class="gallery-item group relative bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:shadow-md" 
                 data-category="pemerintahan"
                 onclick="openGalleryModal('Judul Kegiatan Pemerintahan 2', 'Deskripsi lengkap atau laporan perihal jalannya rapat internal atau pelayanan pemerintahan desa akan tampil di sini secara rinci.', '{{ asset('img/galeri-8.jpg') }}', '01 Juni 2026')">
                <div class="aspect-video w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    {{-- GANTI: dokumentasi kegiatan -> public/img/galeri-8.jpg --}}
                    <img src="{{ asset('img/galeri-8.jpg') }}" alt="Dokumentasi kegiatan desa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot" onerror="this.classList.add('img-slot')">
                    <span class="absolute top-3 left-3 bg-[var(--panen)] text-[var(--sawah-dark)] font-semibold text-[10px] px-2 py-1 rounded-md uppercase tracking-wider">Pemerintahan</span>
                </div>
                <div class="p-4 space-y-1">
                    <span class="text-[11px] text-[var(--teks)]/50 font-medium flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">calendar_today</span> 01 Juni 2026
                    </span>
                    <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-1 transition-colors">Judul Kegiatan Pemerintahan 2</h3>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2">Deskripsi pendek perihal jalannya dokumentasi kegiatan pemerintahan...</p>
                </div>
            </div>

        </div>

        <!-- ========================================================================= -->
        <!-- INOVASI: MODERN PAGINATION COMPONENT -->
        <!-- ========================================================================= -->
        <div class="flex items-center justify-center pt-6 border-t border-[var(--sawah)]/10">
            <nav class="inline-flex -space-x-px rounded-xl bg-white shadow-sm border border-[var(--sawah)]/15 overflow-hidden" aria-label="Pagination">
                <!-- Tombol Prev -->
                <a href="#" class="inline-flex items-center px-3 py-2 text-[var(--teks)]/50 hover:bg-[var(--sawah)]/5 transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                </a>
                
                <!-- Nomor Halaman -->
                <a href="#" aria-current="page" class="inline-flex items-center px-4 py-2 text-xs font-bold bg-[var(--sawah-dark)] text-white">1</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">2</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">3</a>
                <span class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/50 border-l bg-[var(--krem)]">...</span>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">8</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-xs font-medium text-[var(--teks)]/70 hover:bg-[var(--sawah)]/5 border-l transition-colors">9</a>
                
                <!-- Tombol Next -->
                <a href="#" class="inline-flex items-center px-3 py-2 text-[var(--teks)]/50 hover:bg-[var(--sawah)]/5 border-l transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </a>
            </nav>
        </div>

    </div>
</main>

<!-- ========================================================================= -->
<!-- MODAL POP-UP LIGHTBOX (PREVIEW DETAIL FOTO BESAR) -->
<!-- ========================================================================= -->
<div id="galleryModal" class="fixed inset-0 z-50 hidden bg-black/80 flex items-center justify-center p-4 backdrop-blur-sm transition-all duration-300">
    <div class="bg-white rounded-3xl max-w-3xl w-full overflow-hidden shadow-2xl relative border border-[var(--sawah)]/10 transform scale-95 transition-transform duration-300" id="galleryModalCard">
        
        <!-- Tombol Close Melayang -->
        <button onclick="closeGalleryModal()" class="absolute top-4 right-4 z-10 bg-black/60 text-white hover:bg-[var(--sawah)] rounded-full p-2 transition-all shadow-md">
            <span class="material-symbols-outlined block text-xl">close</span>
        </button>

        <!-- Container Konten Pop-up -->
        <div class="flex flex-col">
            <!-- Tempat Foto Ukuran Besar -->
            <div class="w-full bg-[var(--sawah-dark)] flex items-center justify-center max-h-[60vh] overflow-hidden">
                <img src="" id="modalLargeImg" class="w-full h-full object-contain max-h-[60vh]" alt="Gambar Kegiatan Besar">
            </div>

            <!-- Detail Informasi Foto -->
            <div class="p-6 bg-white space-y-3">
                <div class="flex flex-wrap items-center justify-between gap-2 border-b pb-3">
                    <h3 class="font-display font-extrabold text-xl text-[var(--sawah-dark)]" id="modalGalleryTitle">
                        Judul Kegiatan Galeri
                    </h3>
                    <span class="text-xs text-[var(--teks)]/60 font-medium flex items-center gap-1 bg-[var(--sawah)]/10 px-3 py-1 rounded-full" id="modalGalleryDate">
                        <span class="material-symbols-outlined text-sm">calendar_today</span> 00 Bulan 2026
                    </span>
                </div>
                <div>
                    <h4 class="text-xs font-bold text-[var(--teks)]/50 uppercase tracking-wider mb-1">Rincian Acara / Kegiatan:</h4>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed" id="modalGalleryDesc">
                        Rincian lengkap dari dokumentasi kegiatan terkait akan muncul di sini.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT LOGIC HANDLER -->
<!-- ========================================================================= -->
<script>
    // FUNGSI 1: FILTERING DATA GALERI (TAB SYSTEM)
    function filterGallery(category) {
        const items = document.querySelectorAll('.gallery-item');
        
        items.forEach(item => {
            if (category === 'semua' || item.getAttribute('data-category') === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        // Kelola status keaktifan kelas css tombol filter
        const tabs = document.querySelectorAll('.gallery-tab');
        tabs.forEach(tab => {
            tab.className = "gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border";
        });

        const activeTab = document.getElementById(`btn-${category}`);
        if(activeTab) {
            activeTab.className = "gallery-tab px-4 py-2 rounded-xl text-xs font-bold transition-all duration-200 bg-[var(--sawah-dark)] text-white shadow-sm";
        }
    }

    // FUNGSI 2: OPEN LIGHTBOX MODAL PREVIEW FOTO BESAR
    function openGalleryModal(title, description, imgUrl, date) {
        const modal = document.getElementById('galleryModal');
        const card = document.getElementById('galleryModalCard');
        
        document.getElementById('modalGalleryTitle').innerText = title;
        document.getElementById('modalGalleryDesc').innerText = description;
        document.getElementById('modalGalleryDate').innerHTML = `<span class="material-symbols-outlined text-sm">calendar_today</span> ${date}`;
        document.getElementById('modalLargeImg').setAttribute('src', imgUrl);

        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
        }, 10);
    }

    // FUNGSI 3: CLOSE LIGHTBOX MODAL
    function closeGalleryModal() {
        const modal = document.getElementById('galleryModal');
        const card = document.getElementById('galleryModalCard');
        
        card.classList.remove('scale-100');
        card.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 150);
    }

    // Menutup modal otomatis jika area luar box diklik warga
    window.onclick = function(event) {
        const modal = document.getElementById('galleryModal');
        if (event.target == modal) {
            closeGalleryModal();
        }
    }
</script>
@endsection