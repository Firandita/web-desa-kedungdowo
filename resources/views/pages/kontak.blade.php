@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Hubungi Kami',
  'title'    => 'Layanan Kontak & Pengaduan',
  'subtitle' => 'Silakan hubungi pemerintah Desa Kedungdowo atau kirimkan aspirasi serta pengaduan Anda secara langsung demi kemajuan desa.',
])

<main class="bg-[var(--krem)] min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-8">

        <!-- ========================================================================= -->
        <!-- GRID UTAMA: INFO UTAMA & FORM PENGADUAN -->
        <!-- ========================================================================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            
            <!-- KOLOM KIRI (INFO UTAMA & WHATSAPP) - SPAN 5 -->
            <div class="lg:col-span-5 flex flex-col justify-between gap-6">
                
                <!-- Card Alamat & Jam Kerja -->
                <div class="bg-white p-6 rounded-3xl border border-[var(--sawah)]/10 shadow-sm space-y-5 flex-1">
                    <!-- Alamat Kantor -->
                    <div class="flex gap-4 items-start">
                        <div class="bg-[var(--sawah)]/10 text-[var(--sawah-dark)] p-3 rounded-2xl h-11 w-11 flex items-center justify-center shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-xl">place</span>
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-bold text-[var(--teks)] text-sm">Alamat Kantor Desa</h4>
                            <p class="text-xs text-[var(--teks)]/60 leading-relaxed">Jl. Raya Kedungdowo No. 01, Kecamatan Balen, Kabupaten Bojonegoro, Jawa Timur</p>
                        </div>
                    </div>

                    <hr class="border-[var(--sawah)]/10">

                    <!-- Email & Jam Kerja -->
                    <div class="flex gap-4 items-start">
                        <div class="bg-[var(--tanah)]/10 text-[var(--tanah)] p-3 rounded-2xl h-11 w-11 flex items-center justify-center shrink-0 shadow-sm">
                            <span class="material-symbols-outlined text-xl">mail</span>
                        </div>
                        <div class="space-y-1">
                            <h4 class="font-bold text-[var(--teks)] text-sm">Surel & Jam Pelayanan</h4>
                            <p class="text-xs text-[var(--teks)]/60">pemdes@kedungdowo.desa.id</p>
                            <div class="inline-flex items-center gap-1.5 text-[11px] text-[var(--sawah)] font-semibold bg-[var(--sawah)]/10 px-2.5 py-0.5 rounded-md mt-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-[var(--sawah)] inline-block animate-pulse"></span>
                                Senin - Jumat (08:00 - 15:00)
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PUSAT HUBUNGAN WHATSAPP -->
                <div class="bg-white p-6 rounded-3xl border border-[var(--sawah)]/10 shadow-sm space-y-4 flex-1">
                    <div>
                        <h3 class="font-display font-bold text-base text-[var(--teks)] uppercase tracking-tight">Hubungi Lewat WhatsApp</h3>
                        <p class="text-xs text-[var(--teks)]/50">Klik tautan di bawah untuk tersambung langsung ke pamong desa.</p>
                    </div>

                    <div class="space-y-3">
                        <!-- Pak Kades -->
                        <a href="https://wa.me/6282150208664" target="_blank" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/50 hover:bg-[var(--sawah)]/10 hover:border-[var(--sawah)]/30 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--sawah)] text-white flex items-center justify-center font-bold text-xs shadow-sm">K</div>
                                <div>
                                    <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--sawah-dark)] transition-colors">Kepala Desa</h5>
                                    <p class="text-[10px] text-[var(--teks)]/50">Pelayanan & Aspirasi Utama</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/50 group-hover:text-[var(--sawah)] text-sm transition-colors transform group-hover:translate-x-0.5">arrow_forward</span>
                        </a>

                        <!-- Bu Sekdes -->
                        <a href="https://wa.me/6282150208664" target="_blank" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/50 hover:bg-[var(--tanah)]/10 hover:border-[var(--tanah)]/30 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--sawah-dark)] text-white flex items-center justify-center font-bold text-xs shadow-sm">S</div>
                                <div>
                                    <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--tanah)] transition-colors">Sekretaris Desa</h5>
                                    <p class="text-[10px] text-[var(--teks)]/50">Urusan Administrasi & Surat</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/50 group-hover:text-[var(--tanah)] text-sm transition-colors transform group-hover:translate-x-0.5">arrow_forward</span>
                        </a>

                        <!-- Ambulans Desa -->
                        <a href="https://wa.me/6282150208664" target="_blank" class="flex items-center justify-between p-3.5 rounded-2xl border border-[var(--sawah)]/10 bg-[var(--krem)]/50 hover:bg-[var(--panen)]/20 hover:border-[var(--panen)]/40 transition-all duration-200 group">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[var(--panen)] text-[var(--sawah-dark)] flex items-center justify-center shadow-sm">
                                    <span class="material-symbols-outlined text-xs">local_hospital</span>
                                </div>
                                <div>
                                    <h5 class="text-xs font-bold text-[var(--teks)] group-hover:text-[var(--tanah)] transition-colors">Ambulans Desa</h5>
                                    <p class="text-[10px] text-[var(--teks)]/50">Gawat Darurat Medis 24 Jam</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-[var(--teks)]/50 group-hover:text-[var(--tanah)] text-sm transition-colors transform group-hover:translate-x-0.5">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- KOLOM KANAN (FORM ASPIRASI & PENGADUAN WARGA) - SPAN 7 -->
            <div class="lg:col-span-7 bg-white p-6 md:p-8 rounded-3xl border border-[var(--sawah)]/10 shadow-sm space-y-6 flex flex-col justify-between">
                <div>
                    <h3 class="font-display font-extrabold text-lg text-[var(--teks)] uppercase tracking-tight">Formulir Aspirasi & Pengaduan</h3>
                    <p class="text-xs text-[var(--teks)]/50 mt-0.5">Punya saran, kritik, atau aduan mengenai fasilitas umum desa? Tuliskan langsung di bawah ini.</p>
                </div>

                <form onsubmit="handleContactSubmit(event)" class="space-y-4 flex-1 flex flex-col justify-between pt-2">
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-[var(--teks)]/60 uppercase tracking-wider">Nama Lengkap</label>
                                <input type="text" required placeholder="Contoh: Muhammad Fahmi" class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-sm">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[11px] font-bold text-[var(--teks)]/60 uppercase tracking-wider">Nomor HP / WhatsApp</label>
                                <input type="tel" required placeholder="Contoh: 08123xxxx" class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-sm">
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-[11px] font-bold text-[var(--teks)]/60 uppercase tracking-wider">Kategori Pengaduan / Laporan</label>
                            <div class="relative">
                                <select class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all shadow-sm appearance-none cursor-pointer">
                                    <option value="aspirasi">Saran / Aspirasi Umum</option>
                                    <option value="infrastruktur">Keluhan Infrastruktur & Jalan Rusak</option>
                                    <option value="layanan">Pelayanan Staff & Administrasi Desa</option>
                                    <option value="bansos">Bantuan Sosial & Bansos</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-4 top-3.5 text-[var(--teks)]/50 pointer-events-none text-sm">expand_more</span>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-[11px] font-bold text-[var(--teks)]/60 uppercase tracking-wider">Isi Laporan / Detail Aspirasi</label>
                            <textarea rows="4" required placeholder="Tuliskan secara jelas kronologi keluhan atau rincian saran Anda untuk desa..." class="w-full text-sm bg-[var(--krem)] border border-[var(--sawah)]/15 rounded-xl px-4 py-3 focus:outline-none focus:border-[var(--sawah-dark)] focus:bg-white transition-all resize-none shadow-sm leading-relaxed"></textarea>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-[var(--sawah-dark)] text-white font-bold text-xs uppercase tracking-wider py-3.5 px-4 rounded-xl shadow-sm hover:bg-[var(--sawah)] hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer">
                            <span class="material-symbols-outlined text-base">send</span> Kirim Pengaduan Sekarang
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- ========================================================================= -->
        <!-- INTERAKTIF: PETA LOKASI DESA FULL WIDTH (RESPONSIVE) -->
        <!-- ========================================================================= -->
        <div class="bg-white p-3 rounded-3xl border border-[var(--sawah)]/10 shadow-sm space-y-3">
            <div class="flex items-center justify-between px-2 pt-1">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[var(--teks)]/85 text-lg">map</span>
                    <h3 class="font-display font-bold text-sm text-[var(--teks)] uppercase tracking-wider">Peta Wilayah Desa Kedungdowo</h3>
                </div>
                <a href="https://maps.app.goo.gl/9yGv4w8i67mZ9v9W6" target="_blank" class="inline-flex items-center gap-1 text-[11px] font-bold text-[var(--sawah-dark)] bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 px-3 py-1.5 rounded-xl transition-colors">
                    Buka di Google Maps <span class="material-symbols-outlined text-xs">open_in_new</span>
                </a>
            </div>
            
            <!-- Container Iframe Google Maps Full Width -->
            <div class="w-full h-80 sm:h-96 rounded-2xl overflow-hidden relative border border-[var(--sawah)]/10 shadow-sm">
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
        
        <div class="w-14 h-14 bg-[var(--sawah)]/15 text-[var(--sawah-dark)] rounded-full flex items-center justify-center mx-auto shadow-sm">
            <span class="material-symbols-outlined text-3xl">check_circle</span>
        </div>

        <div class="space-y-1">
            <h3 class="font-display font-bold text-lg text-[var(--teks)] uppercase tracking-tight">Laporan Terkirim!</h3>
            <p class="text-xs text-[var(--teks)]/50 leading-relaxed">
                Terima kasih. Laporan atau aspirasi Anda telah berhasil kami rekam di dalam sistem pangkalan data desa untuk segera ditindaklanjuti.
            </p>
        </div>

        <button onclick="closeSuccessModal()" class="w-full bg-[var(--sawah-dark)] hover:bg-[var(--sawah)] text-white font-bold text-xs py-3 rounded-xl transition-colors shadow-sm cursor-pointer">
            Selesai & Kembali
        </button>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT HANDLER -->
<!-- ========================================================================= -->
<script>
    function handleContactSubmit(event) {
        event.preventDefault();
        
        const modal = document.getElementById('successModal');
        const card = document.getElementById('successModalCard');

        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
        }, 10);

        event.target.reset();
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
</script>
@endsection