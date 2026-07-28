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
            <h2 class="font-display font-bold text-2xl text-[var(--sawah-dark)] border-l-4 border-[var(--panen)] pl-3">
                Alur Pengajuan Surat
            </h2>
            
            <div class="grid md:grid-cols-4 gap-6 relative">
                <!-- Langkah 1 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-3 relative">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        1
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">Siapkan Berkas</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Unduh template surat yang dibutuhkan, isi data secara lengkap, dan siapkan dokumen persyaratan (KK/KTP).
                    </p>
                </div>

                <!-- Langkah 2 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-3 relative">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        2
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">Persetujuan RT/RW</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Bawa dokumen ke Ketua RT dan RW setempat untuk mendapatkan tanda tangan serta cap pengantar lingkungan.
                    </p>
                </div>

                <!-- Langkah 3 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-3 relative">
                    <div class="w-12 h-12 bg-[var(--sawah)]/10 text-[var(--sawah-dark)] rounded-xl flex items-center justify-center font-black text-xl">
                        3
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">Datang ke Balai Desa</h3>
                    <p class="text-sm text-[var(--teks)]/70 leading-relaxed">
                        Serahkan seluruh berkas ke petugas pelayanan di Balai Desa Kedungdowo pada jam kerja operasional.
                    </p>
                </div>

                <!-- Langkah 4 -->
                <div class="bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-3 relative">
                    <div class="w-12 h-12 bg-[var(--panen)]/20 text-[var(--panen)] rounded-xl flex items-center justify-center font-black text-xl">
                        4
                    </div>
                    <h3 class="font-bold text-[var(--teks)] text-lg">Verifikasi & Selesai</h3>
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
            <div class="lg:col-span-7 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm space-y-4">
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
            <div class="lg:col-span-5 bg-white p-6 rounded-2xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between">
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
                <!-- Surat 1 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Keterangan Tidak Mampu (SKTM)</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('SKTM', 'Digunakan untuk pengajuan beasiswa, jaminan kesehatan nasional (KIS/PBI), keringanan biaya sekolah, atau bantuan sosial dari pemerintah.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
                </div>

                <!-- Surat 2 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Keterangan Usaha (SKU)</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('SKU', 'Digunakan sebagai bukti legalitas kepemilikan usaha mikro/kecil untuk keperluan syarat pengajuan modal atau KUR di Bank.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
                </div>

                <!-- Surat 3 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Keterangan Domisili Warga</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('Surat Keterangan Domisili', 'Surat resmi pembuktian keberadaan tempat tinggal bagi warga pendatang baru ataupun warga asli untuk keperluan pembukaan rekening bank atau lamaran kerja.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
                </div>

                <!-- Surat 4 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Pengantar Pengurusan KTP/KK</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('Surat Pengantar KTP/KK', 'Surat pengantar wajib dari desa guna melakukan penerbitan KK baru, pembaruan data KK, atau pembuatan KTP-el baru di Kantor Kecamatan.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
                </div>

                <!-- Surat 5 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Keterangan Kelahiran / Kematian</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('Surat Kelahiran/Kematian', 'Berfungsi sebagai bukti otentik pelaporan peristiwa hukum guna dasar penerbitan Akta Kelahiran atau Akta Kematian resmi dari Dispendukcapil.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
                </div>

                <!-- Surat 6 -->
                <div class="bg-white p-5 rounded-xl border border-[var(--sawah)]/10 shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-3xl text-[var(--sawah-dark)] p-2 bg-[var(--sawah)]/10 rounded-lg">description</span>
                        <div>
                            <h4 class="font-bold text-[var(--teks)] text-sm leading-tight">Surat Pengantar Izin Keramaian / Acara</h4>
                            <p class="text-xs text-[var(--teks)]/50 mt-1">Format: Word (.doc)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button onclick="openModal('Surat Izin Keramaian', 'Diperlukan bagi warga yang ingin mengadakan hajatan besar, hiburan panggung, atau event publik demi keamanan bersama koordinasi dengan Babinkamtibmas.', '#')" class="flex items-center justify-center gap-1 bg-[var(--sawah)]/10 hover:bg-[var(--sawah)]/15 text-[var(--teks)]/85 font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">visibility</span> Detail
                        </button>
                        <a href="#" class="flex items-center justify-center gap-1 bg-[var(--sawah-dark)] text-white hover:bg-[var(--sawah)] font-medium text-xs py-2.5 rounded-lg transition-all duration-200">
                            <span class="material-symbols-outlined text-sm">download</span> Unduh
                        </a>
                    </div>
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