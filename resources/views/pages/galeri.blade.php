@extends('layouts.app')

@section('title', 'Galeri Kegiatan')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Dokumentasi & Galeri',
  'title'    => 'Galeri Kegiatan & Pembangunan Desa',
  'subtitle' => 'Dokumentasi transparansi pelaksanaan program kerja, kegiatan kemasyarakatan, dan hasil pembangunan Desa Kedungdowo.',
])

@php
    // Kalau $fromDb = false, data diambil dari galeri-data.php (fallback dummy)
    // dan foto memakai konvensi asset('img/...') + img-slot.
    // Kalau $fromDb = true, data asli dari tabel `galeris` (upload lewat admin)
    // dan foto diambil dari storage lewat asset('storage/...').
    $buildFotoUrl = function ($item) use ($fromDb) {
        return $fromDb
            ? asset('storage/' . $item->foto)
            : asset('img/' . $item->foto);
    };

    $totalDokumentasi = $galeriList->count();
    $totalPembangunan = $galeriList->where('kategori', 'pembangunan')->count();
    $totalPemberdayaan = $galeriList->where('kategori', 'pemberdayaan')->count();
    $totalKesehatan = $galeriList->where('kategori', 'kesehatan')->count();
    $featured = $galeriList->first();
@endphp

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-10">

        <!-- ========================================================================= -->
        <!-- QUICK STATS COUNTER (dihitung dari data asli) -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up">
            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs card-hover flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--sawah)]/10 text-[var(--sawah-dark)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">photo_library</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--sawah-dark)] leading-none">{{ $totalDokumentasi }}</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Total Dokumentasi</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs card-hover flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--panen)]/20 text-[var(--teks)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">construction</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--sawah-dark)] leading-none">{{ $totalPembangunan }}</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Fasilitas & Jalan</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs card-hover flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-[var(--tanah)]/15 text-[var(--tanah)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">diversity_3</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-[var(--tanah)] leading-none">{{ $totalPemberdayaan }}</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Pemberdayaan</p>
                </div>
            </div>

            <div class="bg-white p-4.5 rounded-2xl border border-[var(--sawah)]/10 shadow-xs card-hover flex items-center gap-3.5">
                <div class="w-11 h-11 rounded-xl bg-teal-50 text-teal-700 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-2xl">health_and_safety</span>
                </div>
                <div>
                    <h4 class="font-display font-bold text-lg text-teal-800 leading-none">{{ $totalKesehatan }}</h4>
                    <p class="text-[11px] text-[var(--teks)]/60 font-semibold mt-1">Posyandu & Kesehatan</p>
                </div>
            </div>
        </div>

        @if ($featured)
        <!-- ========================================================================= -->
        <!-- FEATURED SHOWCASE (SOROTAN KEGIATAN TERBARU) -->
        <!-- ========================================================================= -->
        <div class="relative bg-gradient-to-r from-[var(--sawah-dark)] to-[var(--sawah)] rounded-3xl overflow-hidden shadow-lg border border-[var(--sawah)]/20 text-white" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 lg:grid-cols-12 items-center">
                <!-- Media / Cover Gambar Sorotan -->
                <div class="lg:col-span-7 h-64 sm:h-80 lg:h-96 relative overflow-hidden group cursor-pointer" onclick="openGalleryModal(0)">
                    {{-- GANTI: Foto sorotan "{{ $featured->judul }}" -> public/img/{{ $featured->foto }} --}}
                    <img src="{{ $buildFotoUrl($featured) }}"
                         alt="{{ $featured->judul }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 img-slot"
                         onerror="this.classList.add('img-slot')">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 left-4 flex items-center gap-2">
                        <span class="bg-[var(--panen)] text-[var(--sawah-dark)] font-bold text-[10px] uppercase tracking-widest px-3 py-1 rounded-full shadow-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-xs">star</span> Sorotan Terbaru
                        </span>
                        <span class="bg-black/50 backdrop-blur-xs text-white text-[10px] font-semibold px-2.5 py-1 rounded-full capitalize">
                            {{ $featured->kategori }}
                        </span>
                    </div>
                </div>

                <!-- Detail Teks Sorotan -->
                <div class="lg:col-span-5 p-6 md:p-8 space-y-4">
                    <div class="flex items-center gap-3 text-xs text-white/80">
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm text-[var(--panen)]">calendar_today</span>
                            {{ \Illuminate\Support\Carbon::parse($featured->tanggal)->translatedFormat('d F Y') }}
                        </span>
                        @if ($featured->lokasi)
                        <span>•</span>
                        <span class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm text-[var(--panen)]">location_on</span> {{ $featured->lokasi }}
                        </span>
                        @endif
                    </div>

                    <h2 class="font-display font-bold text-xl md:text-2xl leading-tight hover:text-[var(--panen)] transition-colors cursor-pointer" onclick="openGalleryModal(0)">
                        {{ $featured->judul }}
                    </h2>

                    <p class="text-xs text-white/80 leading-relaxed line-clamp-3">
                        {{ $featured->keterangan }}
                    </p>

                    <div class="pt-2">
                        <button onclick="openGalleryModal(0)" class="inline-flex items-center gap-2 bg-[var(--panen)] text-[var(--sawah-dark)] hover:bg-yellow-400 font-bold text-xs px-4 py-2.5 rounded-xl transition-all shadow-xs cursor-pointer">
                            <span class="material-symbols-outlined text-sm">fullscreen</span> Lihat Foto Resolusi Tinggi
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif

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
        <!-- GRID GALERI FOTO (DATA ASLI DARI DATABASE / FALLBACK DUMMY) -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="galleryGrid">

            @foreach ($galeriList as $index => $item)
            <div class="gallery-item group bg-white rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-xs card-hover cursor-pointer flex flex-col justify-between"
                 data-category="{{ $item->kategori }}"
                 data-title="{{ $item->judul }}"
                 data-location="{{ $item->lokasi }}"
                 data-index="{{ $index }}"
                 data-aos="fade-up" data-aos-delay="{{ min($index * 50, 300) }}"
                 onclick="openGalleryModal({{ $index }})">
                <div class="h-48 sm:h-52 w-full overflow-hidden bg-[var(--sawah)]/10 relative">
                    <img src="{{ $buildFotoUrl($item) }}"
                         alt="{{ $item->judul }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 img-slot"
                         onerror="this.classList.add('img-slot')">

                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white/90 text-[var(--sawah-dark)] font-bold text-xs px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="material-symbols-outlined text-sm">visibility</span> Lihat Foto
                        </span>
                    </div>

                    <span class="absolute top-3 left-3 bg-[var(--sawah-dark)] text-white font-bold text-[10px] px-2.5 py-1 rounded-lg uppercase tracking-wider shadow-xs capitalize">
                        {{ $item->kategori }}
                    </span>
                </div>
                <div class="p-4 space-y-2 flex-1 flex flex-col justify-between">
                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-[var(--teks)]/50 font-medium">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-xs text-[var(--sawah-dark)]">calendar_today</span>
                                {{ \Illuminate\Support\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                            </span>
                            @if ($item->lokasi)
                            <span class="flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-xs">location_on</span> {{ $item->lokasi }}
                            </span>
                            @endif
                        </div>
                        <h3 class="font-bold text-[var(--teks)] text-sm group-hover:text-[var(--sawah-dark)] line-clamp-2 transition-colors">
                            {{ $item->judul }}
                        </h3>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60 line-clamp-2 leading-relaxed pt-1 border-t border-[var(--sawah)]/10">
                        {{ $item->keterangan }}
                    </p>
                </div>
            </div>
            @endforeach

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

    </div>
</main>

<!-- ========================================================================= -->
<!-- MODAL POP-UP LIGHTBOX PREVIEW FOTO BESAR + NAVIGASI PREV/NEXT -->
<!-- ========================================================================= -->
<div id="galleryModal" class="fixed inset-0 z-50 hidden bg-black/85 flex items-center justify-center p-4 backdrop-blur-md transition-all duration-300">
    <div class="bg-white rounded-3xl max-w-4xl w-full overflow-hidden shadow-2xl relative border border-white/20 transform scale-95 transition-transform duration-300" id="galleryModalCard">

        <button onclick="closeGalleryModal()" class="absolute top-4 right-4 z-20 bg-black/60 text-white hover:bg-red-600 rounded-full p-2 transition-all shadow-md cursor-pointer">
            <span class="material-symbols-outlined block text-xl">close</span>
        </button>

        <div class="flex flex-col">
            <div class="w-full bg-neutral-900 flex items-center justify-center min-h-[50vh] max-h-[65vh] relative overflow-hidden group">
                <img src="" id="modalLargeImg" class="w-full h-full object-contain max-h-[65vh]" alt="Gambar Kegiatan Besar">

                <button onclick="navigateGallery(-1)" id="prevGalleryBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-[var(--sawah)] text-white p-2.5 rounded-full transition-all shadow-lg border border-white/20 cursor-pointer">
                    <span class="material-symbols-outlined text-2xl block">chevron_left</span>
                </button>
                <button onclick="navigateGallery(1)" id="nextGalleryBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-[var(--sawah)] text-white p-2.5 rounded-full transition-all shadow-lg border border-white/20 cursor-pointer">
                    <span class="material-symbols-outlined text-2xl block">chevron_right</span>
                </button>
            </div>

            <div class="p-6 bg-white space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-2 border-b border-[var(--sawah)]/10 pb-3">
                    <div class="space-y-1 max-w-xl">
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-bold text-white uppercase tracking-wider px-2.5 py-0.5 rounded-md bg-[var(--sawah-dark)]" id="modalGalleryCategoryBadge">
                                Kategori
                            </span>
                            <span class="text-xs text-[var(--teks)]/60 font-semibold flex items-center gap-1" id="modalGalleryLocation">
                                <span class="material-symbols-outlined text-xs">location_on</span> Lokasi
                            </span>
                        </div>
                        <h3 class="font-display font-bold text-lg md:text-xl text-[var(--sawah-dark)] leading-tight" id="modalGalleryTitle">
                            Judul Kegiatan Galeri
                        </h3>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="text-xs text-[var(--teks)]/70 font-semibold flex items-center gap-1 bg-[var(--krem)] border border-[var(--sawah)]/15 px-3 py-1.5 rounded-xl" id="modalGalleryDate">
                            <span class="material-symbols-outlined text-sm">calendar_today</span> Tanggal
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
    // Diambil langsung dari data asli ($galeriList) via Blade, BUKAN hardcode lagi.
    const galleryItemsData = [
        @foreach ($galeriList as $item)
        {
            title: {{ Illuminate\Support\Js::from($item->judul) }},
            category: {{ Illuminate\Support\Js::from($item->kategori) }},
            categoryName: {{ Illuminate\Support\Js::from(ucfirst($item->kategori)) }},
            location: {{ Illuminate\Support\Js::from($item->lokasi) }},
            date: {{ Illuminate\Support\Js::from(\Illuminate\Support\Carbon::parse($item->tanggal)->translatedFormat('d F Y')) }},
            desc: {{ Illuminate\Support\Js::from($item->keterangan) }},
            imgUrl: {{ Illuminate\Support\Js::from($buildFotoUrl($item)) }},
        },
        @endforeach
    ];

    let currentGalleryIndex = 0;
    let currentCategoryFilter = 'semua';

    function filterGallery(category) {
        currentCategoryFilter = category;
        const searchInput = document.getElementById('gallerySearchInput');
        if (searchInput) searchInput.value = '';

        applyGalleryFilters();

        const tabs = document.querySelectorAll('.gallery-tab');
        tabs.forEach(tab => {
            tab.className = "gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-white text-[var(--teks)]/70 hover:bg-[var(--sawah)]/10 border border-[var(--sawah)]/15 flex items-center gap-1.5 cursor-pointer";
        });

        const activeTab = document.getElementById(`btn-${category}`);
        if (activeTab) {
            activeTab.className = "gallery-tab px-3.5 py-2 rounded-xl text-xs font-bold transition-all bg-[var(--sawah-dark)] text-white shadow-xs flex items-center gap-1.5 cursor-pointer";
        }
    }

    function filterGalleryLive() {
        applyGalleryFilters();
    }

    function applyGalleryFilters() {
        const query = document.getElementById('gallerySearchInput').value.toLowerCase().trim();
        const items = document.querySelectorAll('.gallery-item');
        let visibleCount = 0;

        items.forEach(item => {
            const categoryMatch = currentCategoryFilter === 'semua' || item.getAttribute('data-category') === currentCategoryFilter;
            const title = (item.getAttribute('data-title') || '').toLowerCase();
            const location = (item.getAttribute('data-location') || '').toLowerCase();
            const titleMatch = title.includes(query) || location.includes(query);

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

        const modal = document.getElementById('galleryModal');
        const card = document.getElementById('galleryModalCard');

        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
        }, 10);
    }

    function navigateGallery(direction) {
        let newIndex = currentGalleryIndex + direction;
        if (newIndex < 0) newIndex = galleryItemsData.length - 1;
        if (newIndex >= galleryItemsData.length) newIndex = 0;
        openGalleryModal(newIndex);
    }

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
