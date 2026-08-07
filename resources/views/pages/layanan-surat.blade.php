@extends('layouts.app') {{-- Sesuaikan dengan nama file layout utama projekmu --}}

@section('title', 'Layanan Surat')

@section('content')

@include('partials.page-header', [
  'eyebrow'  => 'Layanan Surat',
  'title'    => 'Pelayanan Surat Pengantar & Keterangan',
  'subtitle' => 'Kecamatan Balen, Kabupaten Bojonegoro — Berikan kemudahan pengurusan administrasi warga secara transparan.',
])

<main class="bg-[var(--krem)] min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 space-y-12">

        <!-- ========================================================================= -->
        <!-- ALUR PENGAJUAN SURAT -->
        <!-- ========================================================================= -->
        <div class="space-y-6">
            <h2 class="font-display font-bold text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3" data-aos="fade-up">
                Alur Pengajuan Surat
            </h2>

            <div class="grid md:grid-cols-4 gap-6 relative">

                <!-- Panah penghubung antar step (desktop saja) -->
                <div class="hidden md:flex absolute top-6 left-0 w-full items-center justify-between px-[12.5%] pointer-events-none z-0">
                    <span class="material-symbols-outlined text-[var(--sawah)]/25 text-2xl">arrow_forward</span>
                    <span class="material-symbols-outlined text-[var(--sawah)]/25 text-2xl">arrow_forward</span>
                    <span class="material-symbols-outlined text-[var(--sawah)]/25 text-2xl">arrow_forward</span>
                </div>

                <!-- Langkah 1 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover space-y-3 relative z-10" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        <span class="material-symbols-outlined text-2xl">draft</span>
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">1. Siapkan Berkas</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Unduh template surat yang dibutuhkan, isi data secara lengkap, dan siapkan dokumen persyaratan (KK/KTP).
                    </p>
                </div>

                <!-- Langkah 2 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover space-y-3 relative z-10" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        <span class="material-symbols-outlined text-2xl">how_to_reg</span>
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">2. Persetujuan RT/RW</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Bawa dokumen ke Ketua RT dan RW setempat untuk mendapatkan tanda tangan serta cap pengantar lingkungan.
                    </p>
                </div>

                <!-- Langkah 3 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover space-y-3 relative z-10" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        <span class="material-symbols-outlined text-2xl">domain</span>
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">3. Datang ke Balai Desa</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Serahkan seluruh berkas ke petugas pelayanan di Balai Desa Kedungdowo pada jam kerja operasional.
                    </p>
                </div>

                <!-- Langkah 4 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover space-y-3 relative z-10" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-[var(--panen)]/20 text-[var(--panen)] rounded-xl flex items-center justify-center font-black text-xl">
                        <span class="material-symbols-outlined text-2xl">task_alt</span>
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">4. Verifikasi & Selesai</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Petugas memverifikasi data dan mencetak surat resmi. Surat siap ditandatangani Kepala Desa/Perangkat Desa.
                    </p>
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- BERKAS YANG HARUS DIBAWA & INFO JAM KERJA -->
        <!-- ========================================================================= -->
        <div class="grid lg:grid-cols-12 gap-8">
            
            <!-- Dokumen Wajib -->
            <div class="lg:col-span-7 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover space-y-4" data-aos="fade-up">
                <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)] flex items-center gap-2">
                    <span class="material-symbols-outlined text-[var(--panen)]">work</span> Berkas Persyaratan Utama
                </h3>
                <p class="text-sm text-[var(--teks)]/60">Warga wajib membawa dokumen asli beserta fotokopi (1 rangkap) saat mengajukan permohonan ke Balai Desa:</p>
                
                <ul class="space-y-3 pt-2">
                    <li class="flex items-start gap-3 text-sm text-[var(--teks)]/85">
                        <span class="material-symbols-outlined text-[var(--sawah)] shrink-0">check_circle</span>
                        <div>
                            <strong>Kartu Tanda Penduduk (KTP)</strong> Pemohon / KTP El asli & fotokopi.
                        </div>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-[var(--teks)]/85">
                        <span class="material-symbols-outlined text-[var(--sawah)] shrink-0">check_circle</span>
                        <div>
                            <strong>Kartu Keluarga (KK)</strong> terbaru yang diterbitkan oleh Dispendukcapil.
                        </div>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-[var(--teks)]/85">
                        <span class="material-symbols-outlined text-[var(--sawah)] shrink-0">check_circle</span>
                        <div>
                            <strong>Surat Pengantar RT/RW</strong> yang telah ditandatangani dan diberi stempel basah.
                        </div>
                    </li>
                    <li class="flex items-start gap-3 text-sm text-[var(--teks)]/85">
                        <span class="material-symbols-outlined text-[var(--sawah)] shrink-0">check_circle</span>
                        <div>
                            <strong>Dokumen Pendukung Tambahan</strong> (Sesuai kebutuhan surat, misal: Surat Nikah untuk Akta Kelahiran, Surat Kematian dari RS, dll).
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Jam Operasional Kerja -->
            <div class="lg:col-span-5 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm card-hover flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)] mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[var(--sawah-dark)]">schedule</span> Jam Pelayanan Balai Desa
                    </h3>
                    <p class="text-sm text-[var(--teks)]/70 mb-4">Pastikan Anda datang pada waktu operasional berikut demi kelancaran proses verifikasi:</p>
                    
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between border-b pb-1.5 text-[var(--teks)]/85">
                            <span class="font-medium">Senin - Kamis</span>
                            <span class="font-bold text-[var(--sawah-dark)]">08:00 - 15:00 WIB</span>
                        </div>
                        <div class="flex justify-between border-b pb-1.5 text-[var(--teks)]/85">
                            <span class="font-medium">Jumat</span>
                            <span class="font-bold text-[var(--sawah-dark)]">08:00 - 11:00 WIB</span>
                        </div>
                        <div class="flex justify-between text-[var(--tanah)]">
                            <span class="font-medium">Sabtu, Minggu & Hari Libur</span>
                            <span class="font-bold">Tutup</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[var(--sawah)]/5 p-3 rounded-xl border border-[var(--sawah)]/10 text-xs text-[var(--teks)]/60 mt-4">
                    <strong>Catatan:</strong> Proses pencetakan surat umumnya memakan waktu 10-15 menit apabila berkas lengkap dan pejabat yang berwenang berada di tempat.
                </div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- UNDUH TEMPLATE SURAT -->
        <!-- ========================================================================= -->
        <div class="space-y-4">
            <h3 class="font-display font-bold text-xl text-[var(--sawah-dark)]">Unduh Dokumen & Template Surat</h3>
            <p class="text-sm text-[var(--teks)]/70 max-w-2xl">
                Silakan pilih dan unduh format file master surat (.doc / Word) di bawah ini sebelum mengurusnya ke pengurus lingkungan.
            </p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-2">
                @if(isset($suratList) && count($suratList) > 0)
                    @foreach($suratList as $index => $surat)
                        <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm card-hover flex flex-col justify-between gap-4" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                                <div>
                                    <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">{{ $surat->nama_surat }}</h4>
                                    <p class="text-xs text-[var(--teks)]/50 mt-1">Estimasi: {{ $surat->estimasi_waktu ?? '1-2 Hari Kerja' }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <button onclick="openModal('{{ addslashes($surat->nama_surat) }}', '{{ addslashes($surat->deskripsi) }}', '{{ $surat->file_template ? asset('storage/' . $surat->file_template) : '#' }}')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200 cursor-pointer">
                                    <span class="material-symbols-outlined text-sm">visibility</span> Detail
                                </button>
                                <a href="{{ $surat->file_template ? asset('storage/' . $surat->file_template) : '#' }}" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                                    <span class="material-symbols-outlined text-sm">download</span> Unduh
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback Static Items jika belum ada data -->
                    <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm card-hover flex flex-col justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                            <div>
                                <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Keterangan Usaha (SKU)</h4>
                                <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <button onclick="openModal('SKU', 'Digunakan sebagai bukti legalitas kepemilikan usaha mikro/kecil untuk keperluan syarat pengajuan modal di Bank.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                                <span class="material-symbols-outlined text-sm">visibility</span> Detail
                            </button>
                            <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                                <span class="material-symbols-outlined text-sm">download</span> Unduh
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Pembatas section -->
        <div class="terasering"></div>

        <!-- ========================================================================= -->
        <!-- PENGADUAN MASYARAKAT -->
        <!-- ========================================================================= -->
        <div class="relative overflow-hidden bg-[var(--sawah-dark)] rounded-3xl px-6 py-10 md:px-12 md:py-12" data-aos="fade-up">

            {{-- aksen bulat samar, senada dengan hero/page-header --}}
            <div class="absolute -top-16 -right-10 w-56 h-56 rounded-full bg-[var(--panen)]/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 -left-10 w-56 h-56 rounded-full bg-[var(--sawah)]/30 blur-3xl pointer-events-none"></div>

            <div class="relative grid md:grid-cols-12 gap-8 items-center">

                <div class="md:col-span-7 space-y-3">
                    <span class="inline-flex items-center gap-1.5 text-[var(--panen)] text-xs font-bold uppercase tracking-widest">
                        <span class="material-symbols-outlined text-sm">support_agent</span>
                        Pengaduan Masyarakat
                    </span>
                    <h3 class="font-display font-bold text-xl md:text-2xl text-white leading-snug">
                        Ada kendala pelayanan atau ingin menyampaikan aduan?
                    </h3>
                    <p class="text-sm text-white/70 leading-relaxed max-w-lg">
                        Warga dapat langsung menghubungi petugas pelayanan Desa Kedungdowo melalui WhatsApp atau telepon di jam kerja. Pengaduan akan ditindaklanjuti oleh perangkat desa yang berwenang.
                    </p>
                </div>

                <div class="md:col-span-5 flex flex-col sm:flex-row md:flex-col gap-3">
                    <a href="https://wa.me/6281234567890?text=Assalamualaikum%2C%20saya%20ingin%20menyampaikan%20pengaduan%20terkait%20pelayanan%20Desa%20Kedungdowo."
                       target="_blank" rel="noopener"
                       class="flex items-center gap-3 bg-[var(--panen)] hover:bg-[var(--panen-soft)] text-[var(--sawah-dark)] font-bold text-sm px-5 py-3.5 rounded-xl shadow-sm transition-colors">
                        <span class="material-symbols-outlined">chat</span>
                        <div class="text-left leading-tight">
                            <span class="block">WhatsApp Pengaduan</span>
                            <span class="block text-xs font-medium opacity-80">0812-3456-7890</span>
                        </div>
                    </a>
                    <a href="tel:+622612345678"
                       class="flex items-center gap-3 bg-white/10 hover:bg-white/15 text-white font-bold text-sm px-5 py-3.5 rounded-xl border border-white/15 transition-colors">
                        <span class="material-symbols-outlined">call</span>
                        <div class="text-left leading-tight">
                            <span class="block">Telepon Kantor Desa</span>
                            <span class="block text-xs font-medium opacity-70">(0261) 234-5678</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- ========================================================================= -->
<!-- MODAL POP-UP (PREVIEW DETAIL SURAT) -->
<!-- ========================================================================= -->
<div id="suratModal" class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center p-4 backdrop-blur-xs transition-all duration-300">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-xl space-y-4 relative border border-[var(--sawah)]/10 transform scale-95 transition-transform duration-300" id="modalCard">
        
        <!-- Header Pop Up -->
        <div class="flex items-center justify-between border-b pb-3">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[var(--sawah-dark)]">info</span>
                <h3 class="font-display font-bold text-lg text-[var(--sawah-dark)]" id="modalTitle">Detail Dokumen</h3>
            </div>
            <button onclick="closeModal()" class="text-[var(--teks)]/50 hover:text-[var(--teks)]/70 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Deskripsi Konten -->
        <div class="space-y-2">
            <h4 class="text-xs font-bold text-[var(--teks)]/50 uppercase tracking-wider">Kegunaan & Deskripsi:</h4>
            <p class="text-sm text-[var(--teks)]/70 leading-relaxed" id="modalDescription">
                Deskripsi perihal fungsi berkas surat terkait akan terisi otomatis di sini.
            </p>
        </div>

        <!-- Alert Notice -->
        <div class="bg-[var(--krem)] p-3 rounded-xl border border-[var(--sawah)]/10 text-xs text-[var(--teks)]/60 flex items-start gap-2">
            <span class="material-symbols-outlined text-sm text-[var(--panen)] shrink-0">workspace_premium</span>
            <span>Pastikan data diisi sebenar-benarnya sebelum diserahkan ke perangkat lingkungan RT/RW.</span>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 pt-2">
            <button onclick="closeModal()" class="w-1/3 py-2.5 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs rounded-lg transition-all">
                Kembali
            </button>
            <a href="#" id="modalDownloadBtn" class="w-2/3 py-2.5 bg-[var(--sawah-dark)] hover:bg-[var(--sawah)] text-white font-medium text-xs rounded-lg flex items-center justify-center gap-2 shadow-sm transition-all">
                <span class="material-symbols-outlined text-sm">download</span> Unduh Master Word
            </a>
        </div>
    </div>
</div>

<!-- ========================================================================= -->
<!-- JAVASCRIPT MODAL HANDLER -->
<!-- ========================================================================= -->
<script>
    function openModal(title, description, downloadUrl) {
        const modal = document.getElementById('suratModal');
        const card = document.getElementById('modalCard');
        
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalDescription').innerText = description;
        document.getElementById('modalDownloadBtn').setAttribute('href', downloadUrl);

        document.body.style.overflow = 'hidden';

        // Tampilkan modal dengan animasi soft fade-in
        modal.classList.remove('hidden');
        setTimeout(() => {
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('suratModal');
        const card = document.getElementById('modalCard');
        
        card.classList.remove('scale-100');
        card.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 150);
    }

    // Menutup modal otomatis jika area luar box diklik
    window.onclick = function(event) {
        const modal = document.getElementById('suratModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
@endsection