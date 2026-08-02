@extends('layouts.app') {{-- Sesuaikan dengan nama file layout utama projekmu --}}

@section('title', 'Transparansi')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Transparansi',
  'title'    => 'Infografis Desa Kedungdowo',
  'subtitle' => 'Kecamatan Balen, Kabupaten Bojonegoro',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-12">

        <!-- ========================================================================= -->
        <!-- TABS NAVIGATION -->
        <!-- ========================================================================= -->
        <div class="flex justify-end -mt-4">
            <!-- Tab Menu Sub-Infografis -->
            <div class="flex flex-wrap gap-2 bg-[var(--sawah)]/10 p-1.5 rounded-xl" id="infografisTabs">
                <button type="button" onclick="showInfografisTab('penduduk')" data-tab="penduduk" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium bg-[var(--sawah-dark)] text-white shadow-sm transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">groups</span> Penduduk
                </button>
                <button type="button" onclick="showInfografisTab('apbddes')" data-tab="apbddes" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">payments</span> APBDDes
                </button>
                <button type="button" onclick="showInfografisTab('stunting')" data-tab="stunting" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">trending_up</span> Stunting
                </button>
                <button type="button" onclick="showInfografisTab('bansos')" data-tab="bansos" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">inventory_2</span> Bansos
                </button>
                <button type="button" onclick="showInfografisTab('idm')" data-tab="idm" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">emoji_events</span> IDM
                </button>
                <button type="button" onclick="showInfografisTab('sdgs')" data-tab="sdgs" class="infografis-tab flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-symbols-outlined text-sm">pin</span> SDGs
                </button>
            </div>
        </div>

        <div id="tab-penduduk" class="infografis-panel space-y-12">

        <!-- ========================================================================= -->
        <!-- SECTION 1: JUMLAH PENDUDUK & KEPALA KELUARGA (KARTU STATISTIK) -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h2 class="font-display font-bold text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3">
                Jumlah Penduduk dan Kepala Keluarga
            </h2>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Penduduk -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)]">diversity_3</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Total Penduduk</p>
                        <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">1.157 <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                    </div>
                </div>
                <!-- Kepala Keluarga -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-3xl text-[var(--panen)]">home</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Kepala Keluarga</p>
                        <p class="text-2xl font-black text-[var(--panen)] mt-0.5">307 <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                    </div>
                </div>
                <!-- Perempuan -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-3xl text-[var(--tanah)]">woman</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Perempuan</p>
                        <p class="text-2xl font-black text-[var(--panen)] mt-0.5">552 <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                    </div>
                </div>
                <!-- Laki-Laki -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4 card-hover">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)]">man</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider">Laki-Laki</p>
                        <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">605 <span class="text-sm font-normal text-[var(--teks)]/55">Jiwa</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 2: BERDASARKAN KELOMPOK UMUR (PIRAMIDA) & DUSUN (PIE CHART COMPONENT) -->
        <!-- ========================================================================= -->
        <div class="grid lg:grid-cols-12 gap-8">
            <!-- Kelompok Umur (Piramida Bar) -->
            <div class="lg:col-span-7 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-4">
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Kelompok Umur</h3>
                
                <div class="space-y-3 pt-2 text-xs">
                    <!-- Label Header -->
                    <div class="grid grid-cols-12 text-center font-bold text-[var(--teks)]/55 border-b pb-2">
                        <div class="col-span-5 text-right pr-4">Laki-Laki</div>
                        <div class="col-span-2 text-center text-[var(--teks)]/40">Umur</div>
                        <div class="col-span-5 text-left pl-4">Perempuan</div>
                    </div>
                    
                    <!-- Row 60+ -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-[var(--teks)]/55 font-medium">24</span>
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 24%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">60+</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-r-full">
                                <div class="bg-[var(--panen)] h-3 rounded-r-full" style="width: 17%"></div>
                            </div>
                            <span class="text-[var(--teks)]/55 font-medium">17</span>
                        </div>
                    </div>

                    <!-- Row 45-59 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-[var(--teks)]/55 font-medium">57</span>
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 57%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">45-59</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-r-full">
                                <div class="bg-[var(--panen)] h-3 rounded-r-full" style="width: 62%"></div>
                            </div>
                            <span class="text-[var(--teks)]/55 font-medium">62</span>
                        </div>
                    </div>

                    <!-- Row 30-44 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-[var(--teks)]/55 font-medium">80</span>
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">30-44</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-r-full">
                                <div class="bg-[var(--panen)] h-3 rounded-r-full" style="width: 75%"></div>
                            </div>
                            <span class="text-[var(--teks)]/55 font-medium">75</span>
                        </div>
                    </div>

                    <!-- Row 15-29 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-[var(--teks)]/55 font-medium">94</span>
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 94%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">15-29</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-r-full">
                                <div class="bg-[var(--panen)] h-3 rounded-r-full" style="width: 91%"></div>
                            </div>
                            <span class="text-[var(--teks)]/55 font-medium">91</span>
                        </div>
                    </div>

                    <!-- Row 0-14 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-[var(--teks)]/55 font-medium">44</span>
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 44%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">0-14</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-[var(--sawah)]/10 h-3 rounded-r-full">
                                <div class="bg-[var(--panen)] h-3 rounded-r-full" style="width: 47%"></div>
                            </div>
                            <span class="text-[var(--teks)]/55 font-medium">47</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Distribusi Dusun (Sistem Pie Chart Murni Tailwind) -->
            <div class="lg:col-span-5 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between">
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-4">Berdasarkan Wilayah Dusun</h3>
                
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 h-full">
                    <!-- Representasi Pie Chart Lingkaran Semi Conic -->
                    <div class="w-36 h-36 rounded-full shadow-inner border relative shrink-0" 
                         style="background: conic-gradient(var(--sawah-dark) 0% 70%, var(--panen) 70% 100%);">
                        <div class="absolute inset-8 bg-white rounded-full flex items-center justify-center text-xs font-black text-[var(--teks)]/40">DUSUN</div>
                    </div>

                    <!-- Keterangan Data Legend -->
                    <div class="space-y-3 w-full">
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase tracking-wider border-b pb-1">Keterangan:</p>
                        <div class="flex items-center justify-between border-b border-[var(--sawah)]/10 pb-1">
                            <div class="flex items-center gap-2 text-sm">
                                <span class="w-3 h-3 rounded bg-[var(--sawah-dark)]"></span>
                                <span class="font-medium text-[var(--teks)]/85">Dusun Kedungrejo</span>
                            </div>
                            <span class="text-sm font-bold text-[var(--sawah-dark)]">812 Jiwa <span class="text-xs text-[var(--teks)]/40 font-normal">(70.2%)</span></span>
                        </div>
                        <div class="flex items-center justify-between border-b border-[var(--sawah)]/10 pb-1">
                            <div class="flex items-center gap-2 text-sm">
                                <span class="w-3 h-3 rounded bg-[var(--panen)]"></span>
                                <span class="font-medium text-[var(--teks)]/85">Dusun Dlowo</span>
                            </div>
                            <span class="text-sm font-bold text-[var(--panen)]">345 Jiwa <span class="text-xs text-[var(--teks)]/40 font-normal">(29.8%)</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 3: BERDASARKAN PENDIDIKAN (GRAFIK BATANG) -->
        <!-- ========================================================================= -->
        <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Tingkat Pendidikan</h3>
            
            <!-- Komponen Bar Chart Sederhana -->
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-4 pt-4 items-end text-center">
                <!-- SD -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">177</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 60%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">SD / Sederajat</p>
                </div>
                <!-- SMP -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">204</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 70%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">SMP / Sederajat</p>
                </div>
                <!-- SMA -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">288</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah-dark)] w-full rounded-lg transition-all duration-500" style="height: 95%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">SMA / Sederajat</p>
                </div>
                <!-- D1-D3 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">39</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 15%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">Diploma (D1-D3)</p>
                </div>
                <!-- S1 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">139</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 48%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">Sarjana (S1)</p>
                </div>
                <!-- S2-S3 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">14</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 5%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">Pascasarjana</p>
                </div>
                <!-- Tidak Sekolah -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">96</span>
                    <div class="bg-[var(--sawah)]/10 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 35%"></div>
                    </div>
                    <p class="text-xs font-bold text-[var(--teks)]/70">Belum Sekolah</p>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 4: BERDASARKAN PEKERJAAN (CARD FOTO + INFO) -->
        <!-- ========================================================================= -->
        <div class="space-y-4" data-aos="fade-up">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Mata Pencaharian</h3>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ([
                    ['file' => 'pekerjaan-petani.jpg', 'label' => 'Petani / Pekebun', 'jumlah' => 425],
                    ['file' => 'pekerjaan-pelajar.jpg', 'label' => 'Pelajar / Mahasiswa', 'jumlah' => 324],
                    ['file' => 'pekerjaan-belum-bekerja.jpg', 'label' => 'Belum / Tidak Bekerja', 'jumlah' => 275],
                    ['file' => 'pekerjaan-rumah-tangga.jpg', 'label' => 'Mengurus Rumah Tangga', 'jumlah' => 272],
                    ['file' => 'pekerjaan-karyawan.jpg', 'label' => 'Karyawan Swasta', 'jumlah' => 116],
                    ['file' => 'pekerjaan-pedagang.jpg', 'label' => 'Pedagang / Jasa', 'jumlah' => 85],
                ] as $pekerjaan)
                <div class="rounded-2xl overflow-hidden border border-[var(--sawah)]/10 shadow-sm bg-white card-hover">
                    {{-- GANTI: foto {{ $pekerjaan['label'] }} -> public/img/{{ $pekerjaan['file'] }} --}}
                    <img src="{{ asset('img/'.$pekerjaan['file']) }}" alt="{{ $pekerjaan['label'] }}"
                         class="h-28 w-full object-cover img-slot" onerror="this.classList.add('img-slot')">
                    <div class="p-4 flex items-center justify-between">
                        <p class="text-sm font-bold text-[var(--teks)]/80 leading-tight">{{ $pekerjaan['label'] }}</p>
                        <p class="text-2xl font-black text-[var(--sawah-dark)] shrink-0 ml-3">{{ $pekerjaan['jumlah'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 5: BERDASARKAN AGAMA (KARTU MINI DENGAN ICON) -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Ragam Agama</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <!-- Islam -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover">
                    <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)]">mosque</span>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Islam</p>
                        <p class="text-lg font-black text-[var(--sawah-dark)]">1.157</p>
                    </div>
                </div>
                <!-- Kristen -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover opacity-60">
                    <span class="material-symbols-outlined text-3xl text-[var(--teks)]/40">church</span>
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Kristen</p>
                        <p class="text-lg font-black text-[var(--teks)]/70">0</p>
                    </div>
                </div>
                <!-- Katolik -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover opacity-60">
                    <span class="material-symbols-outlined text-3xl text-[var(--teks)]/40">gavel</span> {{-- Pengganti ikon Rosario/Salib generik --}}
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Katolik</p>
                        <p class="text-lg font-black text-[var(--teks)]/70">0</p>
                    </div>
                </div>
                <!-- Hindu -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover opacity-60">
                    <span class="material-symbols-outlined text-3xl text-[var(--teks)]/40">brightness_7</span> {{-- Simbol matahari sebagai representasi transisi Hindu --}}
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Hindu</p>
                        <p class="text-lg font-black text-[var(--teks)]/70">0</p>
                    </div>
                </div>
                <!-- Buddha -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover opacity-60">
                    <span class="material-symbols-outlined text-3xl text-[var(--teks)]/40">spa</span> {{-- Teratai sering dipakai untuk representasi Buddha --}}
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Buddha</p>
                        <p class="text-lg font-black text-[var(--teks)]/70">0</p>
                    </div>
                </div>
                <!-- Konghucu -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 card-hover opacity-60">
                    <span class="material-symbols-outlined text-3xl text-[var(--teks)]/40">temple_hindu</span> {{-- Gerbang Kelenteng mirip bentuk struktural arsitektur timur --}}
                    <div>
                        <p class="text-xs font-bold text-[var(--teks)]/40 uppercase">Konghucu</p>
                        <p class="text-lg font-black text-[var(--teks)]/70">0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 6: BERDASARKAN STATUS PERKAWINAN -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Status Perkawinan</h3>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Belum Kawin -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between card-hover">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-[var(--panen)]">person</span>
                        <p class="text-sm font-bold text-[var(--teks)]/70">Belum Kawin</p>
                    </div>
                    <span class="text-2xl font-black text-[var(--panen)]">620</span>
                </div>
                <!-- Kawin -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between card-hover">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-[var(--sawah-dark)]">favorite</span>
                        <p class="text-sm font-bold text-[var(--teks)]/70">Kawin Tercatat</p>
                    </div>
                    <span class="text-2xl font-black text-[var(--sawah-dark)]">459</span>
                </div>
                <!-- Cerai Mati -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between card-hover">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-[var(--teks)]/40">heart_broken</span>
                        <p class="text-sm font-bold text-[var(--teks)]/70">Cerai Mati</p>
                    </div>
                    <span class="text-2xl font-black text-[var(--teks)]/40">68</span>
                </div>
            </div>
        </div>

        </div>
        {{-- /tab-penduduk --}}

        {{-- ========================================================================= --}}
        {{-- TAB APBDDES — data asli dari database (Model Apbdes + RealisasiBidang) --}}
        {{-- ========================================================================= --}}
        <div id="tab-apbddes" class="infografis-panel hidden space-y-8">
          @if (!$apbdes)
            <div class="bg-white rounded-2xl border border-[var(--sawah)]/10 shadow-sm py-16 px-6 text-center">
                <span class="material-symbols-outlined text-5xl text-[var(--sawah)]/30">payments</span>
                <p class="font-section font-bold text-[var(--sawah-dark)] mt-3">APBDDes</p>
                <p class="text-sm text-[var(--teks)]/60 mt-1 max-w-md mx-auto">Data belum tersedia — akan ditampilkan begitu perangkat desa menginput data resminya lewat admin panel.</p>
            </div>
          @else
            <div>
              <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Anggaran Pendapatan & Belanja Desa {{ $apbdes->tahun }}</h3>
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
                <a href="{{ asset('storage/' . $apbdes->dokumen_pdf) }}" target="_blank" class="btn-outline mt-4 inline-flex">
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

        {{-- Panel buat tab yang datanya belum disiapkan Bendahara/Kaur — bukan error,
             cuma nunggu data resmi. Ganti isi @foreach section ini kapan pun datanya
             udah ada, pola card-nya bisa dicontek dari tab-penduduk di atas. --}}
        @foreach ([
            'stunting' => ['icon' => 'trending_up', 'label' => 'Data Stunting'],
            'bansos' => ['icon' => 'inventory_2', 'label' => 'Penyaluran Bansos'],
            'idm' => ['icon' => 'emoji_events', 'label' => 'Indeks Desa Membangun (IDM)'],
            'sdgs' => ['icon' => 'pin', 'label' => 'Capaian SDGs Desa'],
        ] as $tabKey => $tabInfo)
        <div id="tab-{{ $tabKey }}" class="infografis-panel hidden">
            <div class="bg-white rounded-2xl border border-[var(--sawah)]/10 shadow-sm py-16 px-6 text-center">
                <span class="material-symbols-outlined text-5xl text-[var(--sawah)]/30">{{ $tabInfo['icon'] }}</span>
                <p class="font-section font-bold text-[var(--sawah-dark)] mt-3">{{ $tabInfo['label'] }}</p>
                <p class="text-sm text-[var(--teks)]/60 mt-1 max-w-md mx-auto">Data belum tersedia — akan ditampilkan begitu perangkat desa menyediakan data resminya.</p>
            </div>
        </div>
        @endforeach

    </div>
</main>

<script>
function showInfografisTab(key){
  document.querySelectorAll('.infografis-panel').forEach(p => p.classList.toggle('hidden', p.id !== 'tab-' + key));
  document.querySelectorAll('.infografis-tab').forEach(btn => {
    const active = btn.dataset.tab === key;
    btn.classList.toggle('bg-[var(--sawah-dark)]', active);
    btn.classList.toggle('text-white', active);
    btn.classList.toggle('shadow-sm', active);
    btn.classList.toggle('text-[var(--sawah-dark)]', !active);
  });
}
</script>
@endsection