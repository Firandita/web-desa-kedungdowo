<?php

namespace Database\Seeders;

use App\Models\LayananSurat;
use Illuminate\Database\Seeder;

class LayananSuratSeeder extends Seeder
{
    public function run(): void
    {
        $suratData = [
            [
                'nama_surat'     => 'Surat Keterangan Usaha (SKU)',
                'kode_surat'     => 'SKU',
                'kategori'       => 'Usaha & Ekonomi',
                'deskripsi'      => 'Surat keterangan resmi dari desa untuk verifikasi kegiatan usaha warga dalam rangka pengajuan perizinan, kredit perbankan, atau bantuan UMKM.',
                'persyaratan'    => ['Fotokopi KTP Pemohon', 'Fotokopi Kartu Keluarga (KK)', 'Surat Pengantar RT/RW', 'Foto Tempat Usaha / Bukti Usaha'],
                'estimasi_waktu' => '1 Hari Kerja',
            ],
            [
                'nama_surat'     => 'Surat Keterangan Tidak Mampu (SKTM)',
                'kode_surat'     => 'SKTM',
                'kategori'       => 'Kesejahteraan Sosial',
                'deskripsi'      => 'Surat persetujuan kriteria ekonomi warga kurang mampu untuk keperluan beasiswa sekolah/kuliah, bantuan kesehatan BPJS PBI, atau keringanan biaya.',
                'persyaratan'    => ['Fotokopi KTP Pemohon / Orang Tua', 'Fotokopi Kartu Keluarga (KK)', 'Surat Pengantar RT/RW', 'Surat Pernyataan Tidak Mampu Bermaterai'],
                'estimasi_waktu' => '1 Hari Kerja',
            ],
            [
                'nama_surat'     => 'Surat Pengantar Pembuatan KTP-el / KK Baru',
                'kode_surat'     => 'SP-KTP',
                'kategori'       => 'Kependudukan',
                'deskripsi'      => 'Surat pengantar desa untuk pengurusan penerbitan KTP elektronik pertama kali, pembaruan data KK, atau penggantian dokumen rusak/hilang.',
                'persyaratan'    => ['Surat Pengantar RT/RW', 'Fotokopi Akta Kelahiran', 'Kartu Keluarga Lama (jika ada)', 'Surat Kehilangan dari Kepolisian (jika hilang)'],
                'estimasi_waktu' => '1 Hari Kerja',
            ],
            [
                'nama_surat'     => 'Surat Keterangan Dominasi Tempat Tinggal',
                'kode_surat'     => 'SKD',
                'kategori'       => 'Kependudukan',
                'deskripsi'      => 'Surat penerangan keberadaan dan tempat tinggal seseorang atau badan usaha yang berada sementara di wilayah Desa Kedungdowo.',
                'persyaratan'    => ['Fotokopi KTP & KK Pemohon', 'Surat Pengantar RT/RW Tempat Tinggal Baru', 'Pas Foto 3x4 (2 Lembar)'],
                'estimasi_waktu' => '1 Hari Kerja',
            ],
            [
                'nama_surat'     => 'Surat Keterangan Beda Nama / Data Dokumen',
                'kode_surat'     => 'SKBN',
                'kategori'       => 'Kependudukan',
                'deskripsi'      => 'Surat keterangan penyesuaian ejaan nama atau identitas yang berbeda antara KTP, KK, Ijazah, atau Sertifikat Tanah.',
                'persyaratan'    => ['Fotokopi KTP & KK', 'Fotokopi Dokumen yang Berbeda (Ijazah/Buku Nikah)', 'Surat Pengantar RT/RW'],
                'estimasi_waktu' => '1 Hari Kerja',
            ],
            [
                'nama_surat'     => 'Surat Pengantar Nikah (N1 - N4)',
                'kode_surat'     => 'SPN',
                'kategori'       => 'Pernikahan',
                'deskripsi'      => 'Berkas kelengkapan pengantar pernikahan dari desa untuk didaftarkan ke Kantor Urusan Agama (KUA) Kecamatan Balen.',
                'persyaratan'    => ['Fotokopi KTP & KK Calon Mempelai', 'Fotokopi KTP Orang Tua', 'Pas Foto Background Biru 2x3 & 3x4', 'Fotokopi Akta Kelahiran & Imunisasi TT'],
                'estimasi_waktu' => '2 Hari Kerja',
            ],
        ];

        foreach ($suratData as $surat) {
            LayananSurat::updateOrCreate(
                ['kode_surat' => $surat['kode_surat']],
                $surat
            );
        }
    }
}
