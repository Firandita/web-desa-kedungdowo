@extends('layouts.app') {{-- Sesuaikan dengan nama file layout utama projekmu --}}

@section('content')
<!-- Google Material Icons CDN -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-12">
        
        <!-- ========================================================================= -->
        <!-- HEADER & TABS NAVIGATION -->
        <!-- ========================================================================= -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-[var(--sawah)]/20 pb-6">
            <div>
                <h1 class="font-display font-extrabold text-3xl md:text-4xl text-[var(--sawah-dark)] tracking-tight">
                    INFOGRAFIS DESA KEDUNGDOWO
                </h1>
                <p class="text-[var(--tanah)] mt-1 text-sm md:text-base">
                    Kecamatan Balen, Kabupaten Bojonegoro
                </p>
            </div>

            <!-- Tab Menu Sub-Infografis -->
            <div class="flex flex-wrap gap-2 bg-[var(--sawah)]/10 p-1.5 rounded-xl self-start lg:self-center">
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium bg-[var(--sawah-dark)] text-white shadow-sm transition-all duration-200">
                    <span class="material-icons-outlined text-sm">groups</span> Penduduk
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-icons-outlined text-sm">payments</span> APBDDes
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-icons-outlined text-sm">trending_up</span> Stunting
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-icons-outlined text-sm">inventory_2</span> Bansos
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-icons-outlined text-sm">emoji_events</span> IDM
                </button>
                <button class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-[var(--sawah-dark)] hover:bg-[var(--sawah)]/15 transition-all duration-200">
                    <span class="material-icons-outlined text-sm">pin</span> SDGs
                </button>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 1: JUMLAH PENDUDUK & KEPALA KELUARGA (KARTU STATISTIK) -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h2 class="font-display font-bold text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3">
                Jumlah Penduduk dan Kepala Keluarga
            </h2>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Penduduk -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-icons-outlined text-3xl text-[var(--sawah-dark)]">diversity_3</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Penduduk</p>
                        <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">1.157 <span class="text-sm font-normal text-gray-500">Jiwa</span></p>
                    </div>
                </div>
                <!-- Kepala Keluarga -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-icons-outlined text-3xl text-[var(--panen)]">home</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kepala Keluarga</p>
                        <p class="text-2xl font-black text-[var(--panen)] mt-0.5">307 <span class="text-sm font-normal text-gray-500">Jiwa</span></p>
                    </div>
                </div>
                <!-- Perempuan -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-icons-outlined text-3xl text-pink-500">woman</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Perempuan</p>
                        <p class="text-2xl font-black text-[var(--panen)] mt-0.5">552 <span class="text-sm font-normal text-gray-500">Jiwa</span></p>
                    </div>
                </div>
                <!-- Laki-Laki -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-4">
                    <div class="w-16 h-16 bg-[var(--sawah)]/10 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-icons-outlined text-3xl text-blue-500">man</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Laki-Laki</p>
                        <p class="text-2xl font-black text-[var(--sawah-dark)] mt-0.5">605 <span class="text-sm font-normal text-gray-500">Jiwa</span></p>
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
                    <div class="grid grid-cols-12 text-center font-bold text-gray-500 border-b pb-2">
                        <div class="col-span-5 text-right pr-4">Laki-Laki</div>
                        <div class="col-span-2 text-center text-gray-400">Umur</div>
                        <div class="col-span-5 text-left pl-4">Perempuan</div>
                    </div>
                    
                    <!-- Row 60+ -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-gray-500 font-medium">24</span>
                            <div class="w-full bg-gray-100 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 24%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">60+</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-gray-100 h-3 rounded-r-full">
                                <div class="bg-orange-300 h-3 rounded-r-full" style="width: 17%"></div>
                            </div>
                            <span class="text-gray-500 font-medium">17</span>
                        </div>
                    </div>

                    <!-- Row 45-59 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-gray-500 font-medium">57</span>
                            <div class="w-full bg-gray-100 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 57%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">45-59</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-gray-100 h-3 rounded-r-full">
                                <div class="bg-orange-300 h-3 rounded-r-full" style="width: 62%"></div>
                            </div>
                            <span class="text-gray-500 font-medium">62</span>
                        </div>
                    </div>

                    <!-- Row 30-44 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-gray-500 font-medium">80</span>
                            <div class="w-full bg-gray-100 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">30-44</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-gray-100 h-3 rounded-r-full">
                                <div class="bg-orange-300 h-3 rounded-r-full" style="width: 75%"></div>
                            </div>
                            <span class="text-gray-500 font-medium">75</span>
                        </div>
                    </div>

                    <!-- Row 15-29 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-gray-500 font-medium">94</span>
                            <div class="w-full bg-gray-100 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 94%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">15-29</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-gray-100 h-3 rounded-r-full">
                                <div class="bg-orange-300 h-3 rounded-r-full" style="width: 91%"></div>
                            </div>
                            <span class="text-gray-500 font-medium">91</span>
                        </div>
                    </div>

                    <!-- Row 0-14 -->
                    <div class="grid grid-cols-12 items-center text-center">
                        <div class="col-span-5 flex items-center justify-end gap-2 pr-4">
                            <span class="text-gray-500 font-medium">44</span>
                            <div class="w-full bg-gray-100 h-3 rounded-l-full flex justify-end">
                                <div class="bg-[var(--sawah)] h-3 rounded-l-full" style="width: 44%"></div>
                            </div>
                        </div>
                        <div class="col-span-2 font-bold bg-[var(--krem)] py-0.5 rounded text-[var(--sawah-dark)]">0-14</div>
                        <div class="col-span-5 flex items-center justify-start gap-2 pl-4">
                            <div class="w-full bg-gray-100 h-3 rounded-r-full">
                                <div class="bg-orange-300 h-3 rounded-r-full" style="width: 47%"></div>
                            </div>
                            <span class="text-gray-500 font-medium">47</span>
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
                        <div class="absolute inset-8 bg-white rounded-full flex items-center justify-center text-xs font-black text-gray-400">DUSUN</div>
                    </div>

                    <!-- Keterangan Data Legend -->
                    <div class="space-y-3 w-full">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider border-b pb-1">Keterangan:</p>
                        <div class="flex items-center justify-between border-b border-gray-50 pb-1">
                            <div class="flex items-center gap-2 text-sm">
                                <span class="w-3 h-3 rounded bg-[var(--sawah-dark)]"></span>
                                <span class="font-medium text-gray-700">Dusun Kedungrejo</span>
                            </div>
                            <span class="text-sm font-bold text-[var(--sawah-dark)]">812 Jiwa <span class="text-xs text-gray-400 font-normal">(70.2%)</span></span>
                        </div>
                        <div class="flex items-center justify-between border-b border-gray-50 pb-1">
                            <div class="flex items-center gap-2 text-sm">
                                <span class="w-3 h-3 rounded bg-[var(--panen)]"></span>
                                <span class="font-medium text-gray-700">Dusun Dlowo</span>
                            </div>
                            <span class="text-sm font-bold text-[var(--panen)]">345 Jiwa <span class="text-xs text-gray-400 font-normal">(29.8%)</span></span>
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
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 60%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">SD / Sederajat</p>
                </div>
                <!-- SMP -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">204</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 70%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">SMP / Sederajat</p>
                </div>
                <!-- SMA -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">288</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah-dark)] w-full rounded-lg transition-all duration-500" style="height: 95%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">SMA / Sederajat</p>
                </div>
                <!-- D1-D3 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">39</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 15%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">Diploma (D1-D3)</p>
                </div>
                <!-- S1 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">139</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 48%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">Sarjana (S1)</p>
                </div>
                <!-- S2-S3 -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">14</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 5%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">Pascasarjana</p>
                </div>
                <!-- Tidak Sekolah -->
                <div class="space-y-2">
                    <span class="text-xs font-bold text-[var(--sawah-dark)]">96</span>
                    <div class="bg-gray-100 h-32 w-full rounded-lg relative flex items-end">
                        <div class="bg-[var(--sawah)] w-full rounded-lg transition-all duration-500" style="height: 35%"></div>
                    </div>
                    <p class="text-xs font-bold text-gray-600">Belum Sekolah</p>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 4: BERDASARKAN PEKERJAAN (TABEL & SUMMARY CARDS) -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Mata Pencaharian</h3>
            
            <div class="grid lg:grid-cols-12 gap-6 items-start">
                <!-- Tabel List Data Pekerjaan -->
                <div class="lg:col-span-5 bg-white rounded-xl border border-[var(--sawah)]/10 shadow-sm overflow-hidden">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-[var(--sawah)]/10 text-[var(--sawah-dark)] font-bold text-xs uppercase tracking-wider">
                            <tr>
                                <th class="px-4 py-3">Jenis Pekerjaan</th>
                                <th class="px-4 py-3 text-right">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-gray-600">
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Petani / Pekebun</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">425</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Pelajar / Mahasiswa</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">324</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Belum / Tidak Bekerja</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">275</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Mengurus Rumah Tangga</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">272</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Karyawan Swasta</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">116</td></tr>
                            <tr class="hover:bg-gray-50"><td class="px-4 py-2.5 font-medium">Pedagang / Jasa</td><td class="px-4 py-2.5 text-right font-bold text-[var(--sawah-dark)]">85</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Highlight Cards Pekerjaan Utama -->
                <div class="lg:col-span-7 grid sm:grid-cols-3 gap-4">
                    <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between h-32 relative overflow-hidden">
                        <p class="text-sm font-bold text-gray-500 leading-tight">Petani / Pekebun</p>
                        <p class="text-4xl font-black text-[var(--sawah-dark)] text-right z-10">425</p>
                        <div class="absolute -bottom-4 -left-2 z-0">
                            <span class="material-icons-outlined text-7xl opacity-10 text-[var(--sawah-dark)]">agriculture</span>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between h-32 relative overflow-hidden">
                        <p class="text-sm font-bold text-gray-500 leading-tight">Pelajar / Mahasiswa</p>
                        <p class="text-4xl font-black text-gray-400 text-right z-10">324</p>
                        <div class="absolute -bottom-4 -left-2 z-0">
                            <span class="material-icons-outlined text-7xl opacity-10 text-gray-600">school</span>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between h-32 relative overflow-hidden">
                        <p class="text-sm font-bold text-gray-500 leading-tight">Mengurus Rumah Tangga</p>
                        <p class="text-4xl font-black text-gray-400 text-right z-10">272</p>
                        <div class="absolute -bottom-4 -left-2 z-0">
                            <span class="material-icons-outlined text-7xl opacity-10 text-gray-600">countertops</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- SECTION 5: BERDASARKAN AGAMA (KARTU MINI DENGAN ICON) -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Berdasarkan Ragam Agama</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <!-- Islam -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3">
                    <span class="material-icons-outlined text-3xl text-emerald-600">mosque</span>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Islam</p>
                        <p class="text-lg font-black text-[var(--sawah-dark)]">1.157</p>
                    </div>
                </div>
                <!-- Kristen -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 opacity-60">
                    <span class="material-icons-outlined text-3xl text-gray-400">church</span>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Kristen</p>
                        <p class="text-lg font-black text-gray-600">0</p>
                    </div>
                </div>
                <!-- Katolik -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 opacity-60">
                    <span class="material-icons-outlined text-3xl text-gray-400">gavel</span> {{-- Pengganti ikon Rosario/Salib generik --}}
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Katolik</p>
                        <p class="text-lg font-black text-gray-600">0</p>
                    </div>
                </div>
                <!-- Hindu -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 opacity-60">
                    <span class="material-icons-outlined text-3xl text-gray-400">brightness_7</span> {{-- Simbol matahari sebagai representasi transisi Hindu --}}
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Hindu</p>
                        <p class="text-lg font-black text-gray-600">0</p>
                    </div>
                </div>
                <!-- Buddha -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 opacity-60">
                    <span class="material-icons-outlined text-3xl text-gray-400">spa</span> {{-- Teratai sering dipakai untuk representasi Buddha --}}
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Buddha</p>
                        <p class="text-lg font-black text-gray-600">0</p>
                    </div>
                </div>
                <!-- Konghucu -->
                <div class="bg-white p-4 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center gap-3 opacity-60">
                    <span class="material-icons-outlined text-3xl text-gray-400">temple_hindu</span> {{-- Gerbang Kelenteng mirip bentuk struktural arsitektur timur --}}
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">Konghucu</p>
                        <p class="text-lg font-black text-gray-600">0</p>
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
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-[var(--panen)]">person</span>
                        <p class="text-sm font-bold text-gray-600">Belum Kawin</p>
                    </div>
                    <span class="text-2xl font-black text-[var(--panen)]">620</span>
                </div>
                <!-- Kawin -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-[var(--sawah-dark)]">favorite</span>
                        <p class="text-sm font-bold text-gray-600">Kawin Tercatat</p>
                    </div>
                    <span class="text-2xl font-black text-[var(--sawah-dark)]">459</span>
                </div>
                <!-- Cerai Mati -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="material-icons-outlined text-2xl bg-[var(--krem)] p-2 rounded-lg text-gray-400">heart_broken</span>
                        <p class="text-sm font-bold text-gray-600">Cerai Mati</p>
                    </div>
                    <span class="text-2xl font-black text-gray-400">68</span>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection