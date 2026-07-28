@extends('layouts.app')

@section('title', 'Kontak & Pengaduan')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Hubungi Kami',
  'title'    => 'Layanan Kontak & Pengaduan Warga',
  'subtitle' => 'Silakan hubungi Pemerintah Desa Kedungdowo, sampaikan aspirasi, atau kirimkan pengaduan publik secara aman dan terintegrasi demi kemajuan bersama.',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-10">

        <!-- ========================================================================= -->
        <!-- BANNER BADGES INFORMASI LAYANAN -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4" data-aos="fade-up">
            <div class="bg-white p-4 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-[var(--sawah)]/10 text-[var(--sawah-dark)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-xl">bolt</span>
                </div>
                <div>
                    <h4 class="font-bold text-xs text-[var(--teks)]">Respon Cepat 1x24 Jam</h4>
                    <p class="text-[11px] text-[var(--teks)]/60">Verifikasi pengaduan di jam kerja</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-[var(--panen)]/20 text-[var(--teks)] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-xl">encrypted</span>
                </div>
                <div>
                    <h4 class="font-bold text-xs text-[var(--teks)]">Kerahasiaan Terjamin</h4>
                    <p class="text-[11px] text-[var(--teks)]/60">Opsi laporan Anonim & Rahasia</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-2xl border border-[var(--sawah)]/10 shadow-xs flex items-center gap-3.5">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-xl">emergency</span>
                </div>
                <div>
                    <h4 class="font-bold text-xs text-[var(--teks)]">Siaga Darurat 24/7</h4>
                    <p class="text-[11px] text-[var(--teks)]/60">Layanan Ambulans & Kebencanaan</p>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- GRID UTAMA: INFO UTAMA & FORM PENGADUAN -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- KOLOM KIRI (INFO ALAMAT, WA PAMONG & KONTAK DARURAT) - SPAN 5 -->
            <div class="lg:col-span-5 space-y-6" data-aos="fade-up" data-aos-delay="100">
                
                <!-- Card Alamat & Jam Kerja -->
                <div class="bg-white p-6 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-5">
                    <div class="flex items-center justify-between border-b border-[var(--sawah)]/10 pb-4">
                        <h3 class="font-display font-bold text-base text-[var(--sawah-dark)] uppercase tracking-tight flex items-center gap-2">
                            <span class="material-symbols-outlined text-xl text-[var(--panen)]">domain</span>
                            Balai Desa Kedungdowo
                        </h3>
                        <span class="inline-flex items-center gap-1.5 text-[10px] font-bold text-[var(--sawah-dark)] bg-[var(--sawah)]/10 px-2.5 py-1 rounded-full">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Buka Jam Kerja
                        </span>
                    </div>

                    <!-- Alamat Kantor -->
                    <div class="flex gap-3.5 items-start">
                        <div class="bg-[var(--sawah)]/10 text-[var(--sawah-dark)] p-2.5 rounded-xl h-10 w-10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-lg">place</span>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="font-bold text-[var(--teks)] text-xs">Alamat Kantor Desa</h4>
                            <p class="text-xs text-[var(--teks)]/70 leading-relaxed">Jl. Raya Kedungdowo No. 01, Kecamatan Balen, Kabupaten Bojonegoro, Jawa Timur (62182)</p>
                        </div>
                    </div>

                    <!-- Email & Jam Kerja -->
                    <div class="flex gap-3.5 items-start">
                        <div class="bg-[var(--tanah)]/10 text-[var(--tanah)] p-2.5 rounded-xl h-10 w-10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-lg">mail</span>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="font-bold text-[var(--teks)] text-xs">Email & Jam Pelayanan</h4>
                            <p class="text-xs text-[var(--teks)]/70">pemdes@kedungdowo.desa.id</p>
                            <p class="text-[11px] text-[var(--teks)]/60 mt-1">Senin - Jumat: 08:00 - 15:00 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- PUSAT HUBUNGAN WHATSAPP PAMONG -->
                <div class="bg-white p-6 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-4">
                    <div>
                        <h3 class="font-display font-bold text-base text-[var(--sawah-dark)] uppercase tracking-tight flex items-center gap-2">
                            <span class="material-symbols-outlined text-xl text-emerald-600">chat</span>
                            Kontak Langsung WhatsApp
                        </h3>
                        <p class="text-xs text-[var(--teks)]/60 mt-0.5">Klik untuk tersambung ke perangkat desa terkait.</p>
                    </div>

                    <div class="space-y-3">
                        <!-- Pak Kades -->
                        <a href="https://wa.me/6282150208664?text=Halo%20Kepala%20Desa%20Kedungdowo,%20saya%20warga%20ingin%20berkonsultasi" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/60 hover:bg-[var(--sawah)]/10 hover:border-[var(--sawah)]/30 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--sawah)] text-white flex items-center justify-center font-bold text-xs shadow-xs">
                                    KD
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--sawah-dark)] transition-colors">Kepala Desa</h5>
                                        <span class="text-[9px] bg-emerald-100 text-emerald-700 font-semibold px-1.5 py-0.5 rounded">Online</span>
                                    </div>
                                    <p class="text-[10px] text-[var(--teks)]/60">Kebijakan & Aspirasi Utama Warga</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/40 group-hover:text-[var(--sawah-dark)] text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>

                        <!-- Bu Sekdes -->
                        <a href="https://wa.me/6282150208664?text=Halo%20Sekretaris%20Desa%20Kedungdowo,%20saya%20ingin%20menanyakan%20administrasi%20surat" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/60 hover:bg-[var(--tanah)]/10 hover:border-[var(--tanah)]/30 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--sawah-dark)] text-white flex items-center justify-center font-bold text-xs shadow-xs">
                                    SD
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--tanah)] transition-colors">Sekretaris Desa</h5>
                                        <span class="text-[9px] bg-emerald-100 text-emerald-700 font-semibold px-1.5 py-0.5 rounded">Online</span>
                                    </div>
                                    <p class="text-[10px] text-[var(--teks)]/60">Administrasi Surat & Pelayanan Umum</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/40 group-hover:text-[var(--tanah)] text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>

                        <!-- Kasie Pelayanan -->
                        <a href="https://wa.me/6282150208664?text=Halo%20Kasie%20Pelayanan%20Kedungdowo,%20saya%20butuh%20informasi%20bantuan%20sosial" target="_blank" rel="noopener noreferrer" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/60 hover:bg-[var(--panen)]/20 hover:border-[var(--panen)]/40 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--panen)] text-[var(--sawah-dark)] flex items-center justify-center font-bold text-xs shadow-xs">
                                    KP
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--sawah-dark)] transition-colors">Kasie Pelayanan</h5>
                                        <span class="text-[9px] bg-slate-100 text-slate-600 font-semibold px-1.5 py-0.5 rounded">Jam Kerja</span>
                                    </div>
                                    <p class="text-[10px] text-[var(--teks)]/60">Informasi Bansos & Kesejahteraan</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/40 group-hover:text-[var(--sawah-dark)] text-sm transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- KARTU KONTAK DARURAT 24 JAM -->
                <div class="bg-gradient-to-br from-red-600 to-rose-700 p-6 rounded-3xl text-white shadow-md space-y-4 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-2xl text-yellow-300">e911_emergency</span>
                            <h3 class="font-display font-bold text-base uppercase tracking-tight">Pusat Darurat 24 Jam</h3>
                        </div>
                        <span class="bg-white/20 text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Siaga</span>
                    </div>
                    
                    <p class="text-xs text-white/90 leading-relaxed">
                        Jika Anda atau keluarga membutuhkan pertolongan medis mendesak atau situasi bencana, segera hubungi kontak di bawah ini:
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-1">
                        <!-- Ambulans Desa -->
                        <a href="https://wa.me/6282150208664?text=DARURAT%3A%20Saya%20membutuhkan%20Ambulans%20Desa" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2.5 bg-white/10 hover:bg-white/20 p-2.5 rounded-xl border border-white/20 transition-all text-xs font-semibold">
                            <span class="material-symbols-outlined text-yellow-300 text-lg">medical_services</span>
                            <div>
                                <div class="text-[11px] font-bold">Ambulans Desa</div>
                                <div class="text-[9px] text-white/80">0821-5020-8664</div>
                            </div>
                        </a>

                        <!-- Puskesmas Balen -->
                        <a href="tel:08123456789" class="flex items-center gap-2.5 bg-white/10 hover:bg-white/20 p-2.5 rounded-xl border border-white/20 transition-all text-xs font-semibold">
                            <span class="material-symbols-outlined text-yellow-300 text-lg">local_hospital</span>
                            <div>
                                <div class="text-[11px] font-bold">Puskesmas Balen</div>
                                <div class="text-[9px] text-white/80">Call (0353) 881xxx</div>
                            </div>
                        </a>

                        <!-- Polsek Balen -->
                        <a href="tel:110" class="flex items-center gap-2.5 bg-white/10 hover:bg-white/20 p-2.5 rounded-xl border border-white/20 transition-all text-xs font-semibold">
                            <span class="material-symbols-outlined text-yellow-300 text-lg">local_police</span>
                            <div>
                                <div class="text-[11px] font-bold">Polsek Balen</div>
                                <div class="text-[9px] text-white/80">Call 110 / Polsek</div>
                            </div>
                        </a>

                        <!-- Pemadam Kebakaran -->
                        <a href="tel:113" class="flex items-center gap-2.5 bg-white/10 hover:bg-white/20 p-2.5 rounded-xl border border-white/20 transition-all text-xs font-semibold">
                            <span class="material-symbols-outlined text-yellow-300 text-lg">fire_truck</span>
                            <div>
                                <div class="text-[11px] font-bold">Damkar Bojonegoro</div>
                                <div class="text-[9px] text-white/80">Call 113 / Damkar</div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <!-- KOLOM KANAN (FORM ASPIRASI & PENGADUAN WARGA) - SPAN 7 -->
            <div class="lg:col-span-7 bg-white p-6 md:p-8 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-6 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="flex items-center justify-between flex-wrap gap-2 mb-2">
                        <h3 class="font-display font-bold text-lg text-[var(--sawah-dark)] uppercase tracking-tight flex items-center gap-2">
                            <span class="material-symbols-outlined text-xl text-[var(--panen)]">rate_review</span>
                            Formulir Layanan Pengaduan & Aspirasi
                        </h3>
                        <span class="text-[10px] bg-[var(--sawah)]/10 text-[var(--sawah-dark)] font-bold px-2.5 py-1 rounded-full uppercase">Sistem Resmi Desa</span>
                    </div>
                    <p class="text-xs text-[var(--teks)]/60">Tuliskan laporan, keluhan, atau aspirasi Anda. Pengaduan akan dicatat dan ditindaklanjuti secara resmi oleh Pemerintah Desa Kedungdowo.</p>
                </div>

                <!-- TABS TIPE LAPORAN -->
                <div class="flex bg-[var(--krem)] p-1 rounded-xl border border-[var(--sawah)]/10 gap-1" id="reportTypeTabs">
                    <button type="button" onclick="setReportType('pengaduan')" id="tab-pengaduan" class="flex-1 text-center py-2 px-3 rounded-lg text-xs font-bold transition-all bg-[var(--sawah-dark)] text-white shadow-xs">
                        🚨 Pengaduan Resmi
                    </button>
                    <button type="button" onclick="setReportType('aspirasi')" id="tab-aspirasi" class="flex-1 text-center py-2 px-3 rounded-lg text-xs font-bold transition-all text-[var(--teks)]/70 hover:bg-white/60">
                        📣 Aspirasi & Saran
                    </button>
                    <button type="button" onclick="setReportType('pertanyaan')" id="tab-pertanyaan" class="flex-1 text-center py-2 px-3 rounded-lg text-xs font-bold transition-all text-[var(--teks)]/70 hover:bg-white/60">
                        ❓ Pertanyaan Umum
                    </button>
                </div>

                <form onsubmit="handleContactSubmit(event)" class="space-y-4 flex-1 flex flex-col justify-between pt-1">
                    <input type="hidden" id="reportTypeInput" value="pengaduan">

                    <div class="space-y-4">
                        
                        <!-- BARIS 1: NAMA & TOGGLE ANONIM -->
                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between">
                                <label class="text-[11px] font-bold text-[var(--teks)]/70 uppercase tracking-wider">Nama Pelapor / Warga</label>
                                <label class="inline-flex items-center gap-1.5 cursor-pointer text-[11px] font-semibold text-[var(--sawah-dark)]">
                                    <input type="checkbox" id="anonymousCheckbox" onchange="toggleAnonymous(this)" class="rounded border-slate-300 text-[var(--sawah)] focus:ring-0 cursor-pointer">
                                    <span>Kirim Secara Anonim (Rahasia)</span>
                                </label>
                            </div>
                            <input type="text" id="inputNama" required placeholder="Masukkan nama lengkap Anda..." class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-xs">
                        </div>

                        <!-- BARIS 2: WHATSAPP & KATEGORI LAPORAN -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-[var(--teks)]/70 uppercase tracking-wider">Nomor WhatsApp / HP</label>
                                <input type="tel" required placeholder="Contoh: 08123456789" class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-xs">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-[var(--teks)]/70 uppercase tracking-wider">Kategori Topik</label>
                                <div class="relative">
                                    <select required class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-xs appearance-none cursor-pointer">
                                        <option value="infrastruktur">Infrastruktur & Jalan Rusak</option>
                                        <option value="layanan">Pelayanan Publik & Administrasi</option>
                                        <option value="bansos">Bantuan Sosial (Bansos)</option>
                                        <option value="keamanan">Keamanan & Ketertiban Desa</option>
                                        <option value="lingkungan">Kebersihan & Lingkungan</option>
                                        <option value="aspirasi">Saran / Aspirasi Pembangunan</option>
                                        <option value="lainnya">Lain-lain</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-4 top-3.5 text-[var(--teks)]/50 pointer-events-none text-sm">expand_more</span>
                                </div>
                            </div>
                        </div>

                        <!-- BARIS 3: DETAIL LAPORAN & CHARACTER COUNTER -->
                        <div class="space-y-1.5">
                            <div class="flex items-center justify-between">
                                <label class="text-[11px] font-bold text-[var(--teks)]/70 uppercase tracking-wider">Rincian Laporan / Pesan</label>
                                <span class="text-[10px] text-[var(--teks)]/50 font-semibold" id="charCounter">0 / 1000 Karakter</span>
                            </div>
                            <textarea id="inputDetail" rows="4" maxlength="1000" oninput="updateCharCount(this)" required placeholder="Jelaskan secara detail lokasi, permasalahan, kronologi, atau saran yang ingin disampaikan..." class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all resize-none shadow-xs leading-relaxed"></textarea>
                        </div>

                        <!-- BARIS 4: LAMPIRAN FOTO / BERKAS (MOCK FILE UPLOAD) -->
                        <div class="space-y-1.5">
                            <label class="text-[11px] font-bold text-[var(--teks)]/70 uppercase tracking-wider">Lampiran Foto Bukti / Berkas (Opsional)</label>
                            <div class="relative border-2 border-dashed border-[var(--sawah)]/20 hover:border-[var(--sawah)]/50 rounded-xl p-3.5 bg-[var(--krem)]/40 transition-colors text-center cursor-pointer" onclick="document.getElementById('fileUploadInput').click()">
                                <input type="file" id="fileUploadInput" accept="image/*,.pdf" class="hidden" onchange="handleFileSelect(this)">
                                <div class="flex items-center justify-center gap-2 text-xs text-[var(--teks)]/70" id="fileUploadText">
                                    <span class="material-symbols-outlined text-lg text-[var(--sawah-dark)]">cloud_upload</span>
                                    <span>Klik untuk milih foto bukti/dokumen (JPG, PNG, PDF maks. 5MB)</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pt-4">
                        <button type="submit" id="submitBtn" class="w-full bg-[var(--sawah-dark)] hover:bg-[var(--sawah)] text-white font-bold text-xs uppercase tracking-wider py-4 px-4 rounded-xl shadow-xs hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <span class="material-symbols-outlined text-base" id="submitBtnIcon">send</span> 
                            <span id="submitBtnText">Kirim Pengaduan Sekarang</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- ========================================================================= -->
        <!-- SECTION FAQ PERTANYAAN SERING DIAJUKAN (ACCORDION) -->
        <!-- ========================================================================= -->
        <div class="bg-white p-6 md:p-8 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-6" data-aos="fade-up">
            <div class="text-center max-w-2xl mx-auto space-y-1">
                <span class="text-[10px] font-bold uppercase tracking-widest text-[var(--panen)] bg-[var(--sawah-dark)] px-3 py-1 rounded-full">Tanya Jawab</span>
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Pertanyaan Sering Diajukan (FAQ)</h3>
                <p class="text-xs text-[var(--teks)]/60">Temukan jawaban cepat mengenai prosedur pengaduan dan pelayanan informasi publik di Desa Kedungdowo.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-3 pt-2">
                
                <!-- FAQ 1 -->
                <div class="border border-[var(--sawah)]/15 rounded-2xl overflow-hidden bg-[var(--krem)]/40 transition-colors">
                    <button onclick="toggleFaq(0)" class="w-full p-4 text-left font-bold text-xs md:text-sm text-[var(--teks)] flex items-center justify-between gap-4 cursor-pointer hover:text-[var(--sawah-dark)] transition-colors">
                        <span>Berapa lama laporan atau pengaduan warga diproses?</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-300" id="faq-icon-0">expand_more</span>
                    </button>
                    <div id="faq-content-0" class="hidden px-4 pb-4 text-xs text-[var(--teks)]/70 leading-relaxed border-t border-[var(--sawah)]/10 pt-3">
                        Setiap laporan yang masuk melalui formulir resmi ini akan diverifikasi oleh Sekretariat Desa dalam waktu 1x24 jam kerja. Selanjutnya laporan akan diteruskan ke Tim / Kasie terkait untuk penanganan di lapangan.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-[var(--sawah)]/15 rounded-2xl overflow-hidden bg-[var(--krem)]/40 transition-colors">
                    <button onclick="toggleFaq(1)" class="w-full p-4 text-left font-bold text-xs md:text-sm text-[var(--teks)] flex items-center justify-between gap-4 cursor-pointer hover:text-[var(--sawah-dark)] transition-colors">
                        <span>Apakah identitas pelapor terjamin kerahasiaannya?</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-300" id="faq-icon-1">expand_more</span>
                    </button>
                    <div id="faq-content-1" class="hidden px-4 pb-4 text-xs text-[var(--teks)]/70 leading-relaxed border-t border-[var(--sawah)]/10 pt-3">
                        Ya. Anda dapat mengaktifkan opsi "Kirim Secara Anonim" pada formulir pengaduan. Identitas Anda tidak akan ditampilkan atau diberikan kepada pihak ketiga demi rasa aman pelapor.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-[var(--sawah)]/15 rounded-2xl overflow-hidden bg-[var(--krem)]/40 transition-colors">
                    <button onclick="toggleFaq(2)" class="w-full p-4 text-left font-bold text-xs md:text-sm text-[var(--teks)] flex items-center justify-between gap-4 cursor-pointer hover:text-[var(--sawah-dark)] transition-colors">
                        <span>Apakah ada biaya untuk pengaduan atau pengurusan surat?</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-300" id="faq-icon-2">expand_more</span>
                    </button>
                    <div id="faq-content-2" class="hidden px-4 pb-4 text-xs text-[var(--teks)]/70 leading-relaxed border-t border-[var(--sawah)]/10 pt-3">
                        Seluruh layanan pengaduan, pengurusan administrasi surat-menyurat, serta konsultasi di Balai Desa Kedungdowo adalah 100% Bebas Biaya (Gratis).
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-[var(--sawah)]/15 rounded-2xl overflow-hidden bg-[var(--krem)]/40 transition-colors">
                    <button onclick="toggleFaq(3)" class="w-full p-4 text-left font-bold text-xs md:text-sm text-[var(--teks)] flex items-center justify-between gap-4 cursor-pointer hover:text-[var(--sawah-dark)] transition-colors">
                        <span>Bagaimana jika terjadi keadaan darurat di luar jam kerja?</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-300" id="faq-icon-3">expand_more</span>
                    </button>
                    <div id="faq-content-3" class="hidden px-4 pb-4 text-xs text-[var(--teks)]/70 leading-relaxed border-t border-[var(--sawah)]/10 pt-3">
                        Untuk keadaan gawat darurat (seperti kebutuhan Ambulans Desa atau bencana), warga dapat langsung menghubungi hotline WhatsApp Ambulans Desa (0821-5020-8664) atau kontak darurat Polsek/Puskesmas Balen yang selalu aktif 24 jam.
                    </div>
                </div>

            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- INTERAKTIF: PETA LOKASI DESA FULL WIDTH (RESPONSIVE) -->
        <!-- ========================================================================= -->
        <div class="bg-white p-4 rounded-3xl border border-[var(--sawah)]/10 shadow-xs space-y-4" data-aos="fade-up">
            <div class="flex items-center justify-between px-2 pt-1 flex-wrap gap-2">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[var(--sawah-dark)] text-xl">map</span>
                    <div>
                        <h3 class="font-display font-bold text-sm text-[var(--teks)] uppercase tracking-wider">Peta Lokasi Wilayah Desa Kedungdowo</h3>
                        <p class="text-[11px] text-[var(--teks)]/60">Kecamatan Balen, Kabupaten Bojonegoro, Jawa Timur</p>
                    </div>
                </div>
                <a href="https://maps.app.goo.gl/9yGv4w8i67mZ9v9W6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-[11px] font-bold text-[var(--sawah-dark)] bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/20 px-3.5 py-2 rounded-xl transition-colors">
                    <span>Buka Petunjuk Google Maps</span>
                    <span class="material-symbols-outlined text-xs">open_in_new</span>
                </a>
            </div>
            
            <!-- Container Iframe Google Maps Full Width -->
            <div class="w-full h-80 sm:h-96 rounded-2xl overflow-hidden relative border border-[var(--sawah)]/10 shadow-xs group">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.15814562095!2d112.0125816!3d-7.1791242!2m3!1f0!2f0!3f0!3m2!1i1020!2i768!4f13.1!3m3!1m2!1s0x2e779bce3d4ec775%3A0x6e9f16d860e34b97!2sKedungdowo%2C%20Kec.%20Balen%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
                    class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700 ease-in-out" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>

    </div>
</main>

<!-- ========================================================================= -->
<!-- MODAL POP-UP: NOTIFIKASI SUKSES KIRIM PESAN -->
<!-- ========================================================================= -->
<div id="successModal" class="fixed inset-0 z-50 hidden bg-black/70 flex items-center justify-center p-4 backdrop-blur-xs transition-all duration-300">
    <div class="bg-white rounded-3xl max-w-sm w-full p-6 text-center shadow-2xl transform scale-95 transition-transform duration-300 space-y-4" id="successModalCard">
        
        <div class="w-14 h-14 bg-[var(--sawah)]/15 text-[var(--sawah-dark)] rounded-full flex items-center justify-center mx-auto shadow-xs">
            <span class="material-symbols-outlined text-3xl">verified</span>
        </div>

        <div class="space-y-1">
            <h3 class="font-display font-bold text-lg text-[var(--teks)] uppercase tracking-tight">Laporan Berhasil Terkirim!</h3>
            <p class="text-xs text-[var(--teks)]/60 leading-relaxed">
                Terima kasih. Pengaduan Anda telah tercatat secara resmi dalam sistem pangkalan data desa dengan No. Tiket:
            </p>
            <div class="bg-[var(--krem)] border border-[var(--sawah)]/20 py-1.5 px-3 rounded-lg font-mono text-xs font-bold text-[var(--sawah-dark)] my-2" id="ticketNumber">
                KDD-20260728-8921
            </div>
            <p class="text-[11px] text-[var(--teks)]/50">Tim Pemdes Kedungdowo akan melakukan tindakan lanjut dan verifikasi.</p>
        </div>

        <button onclick="closeSuccessModal()" class="w-full bg-[var(--sawah-dark)] hover:bg-[var(--sawah)] text-white font-bold text-xs py-3 rounded-xl transition-colors shadow-xs cursor-pointer">
            Selesai & Kembali
        </button>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT HANDLER -->
<!-- ========================================================================= -->
<script>
    function setReportType(type) {
        document.getElementById('reportTypeInput').value = type;
        const btnPengaduan = document.getElementById('tab-pengaduan');
        const btnAspirasi = document.getElementById('tab-aspirasi');
        const btnPertanyaan = document.getElementById('tab-pertanyaan');
        
        const activeClass = ['bg-[var(--sawah-dark)]', 'text-white', 'shadow-xs'];
        const inactiveClass = ['text-[var(--teks)]/70', 'hover:bg-white/60'];

        [btnPengaduan, btnAspirasi, btnPertanyaan].forEach(btn => {
            btn.classList.remove(...activeClass);
            btn.classList.add(...inactiveClass);
        });

        const activeBtn = document.getElementById('tab-' + type);
        if (activeBtn) {
            activeBtn.classList.remove(...inactiveClass);
            activeBtn.classList.add(...activeClass);
        }
    }

    function toggleAnonymous(checkbox) {
        const inputNama = document.getElementById('inputNama');
        if (checkbox.checked) {
            inputNama.value = "Hamba Allah / Anonim";
            inputNama.readOnly = true;
            inputNama.classList.add('opacity-60', 'bg-slate-100');
        } else {
            inputNama.value = "";
            inputNama.readOnly = false;
            inputNama.classList.remove('opacity-60', 'bg-slate-100');
        }
    }

    function updateCharCount(textarea) {
        const length = textarea.value.length;
        document.getElementById('charCounter').innerText = `${length} / 1000 Karakter`;
    }

    function handleFileSelect(input) {
        const fileText = document.getElementById('fileUploadText');
        if (input.files && input.files[0]) {
            fileText.innerHTML = `<span class="material-symbols-outlined text-lg text-emerald-600">check_circle</span> <span class="font-bold text-emerald-700">${input.files[0].name}</span> (Terpilih)`;
        }
    }

    function handleContactSubmit(event) {
        event.preventDefault();
        
        const submitBtn = document.getElementById('submitBtn');
        const submitBtnIcon = document.getElementById('submitBtnIcon');
        const submitBtnText = document.getElementById('submitBtnText');

        // State Loading
        submitBtn.disabled = true;
        submitBtnIcon.innerText = "sync";
        submitBtnIcon.classList.add('animate-spin');
        submitBtnText.innerText = "Mengirim Laporan...";

        setTimeout(() => {
            // Generate Random Ticket
            const randomNum = Math.floor(1000 + Math.random() * 9000);
            document.getElementById('ticketNumber').innerText = `KDD-2026-${randomNum}`;

            // Show Modal
            const modal = document.getElementById('successModal');
            const card = document.getElementById('successModalCard');

            modal.classList.remove('hidden');
            setTimeout(() => {
                card.classList.remove('scale-95');
                card.classList.add('scale-100');
            }, 10);

            // Reset Button
            submitBtn.disabled = false;
            submitBtnIcon.innerText = "send";
            submitBtnIcon.classList.remove('animate-spin');
            submitBtnText.innerText = "Kirim Pengaduan Sekarang";

            // Reset Form
            event.target.reset();
            document.getElementById('charCounter').innerText = "0 / 1000 Karakter";
            document.getElementById('fileUploadText').innerHTML = `<span class="material-symbols-outlined text-lg text-[var(--sawah-dark)]">cloud_upload</span> <span>Klik untuk memilih foto bukti/dokumen (JPG, PNG, PDF maks. 5MB)</span>`;
            
            const inputNama = document.getElementById('inputNama');
            inputNama.readOnly = false;
            inputNama.classList.remove('opacity-60', 'bg-slate-100');
        }, 800);
    }

    function closeSuccessModal() {
        const modal = document.getElementById('successModal');
        const card = document.getElementById('successModalCard');

        card.classList.remove('scale-100');
        card.classList.add('scale-95');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 150);
    }

    function toggleFaq(index) {
        const content = document.getElementById(`faq-content-${index}`);
        const icon = document.getElementById(`faq-icon-${index}`);

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>
@endsection