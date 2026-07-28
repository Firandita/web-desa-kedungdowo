<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "=== VERIFIKASI BACKEND DESA KEDUNGDOWO ===\n";
echo "1. Total Berita: " . \App\Models\Berita::count() . "\n";
echo "2. Total Galeri: " . \App\Models\Galeri::count() . "\n";
echo "3. Total Layanan Surat: " . \App\Models\LayananSurat::count() . "\n";

// Test Pengaduan Creation
$pengaduan = \App\Models\Pengaduan::create([
    'nomor_tiket' => 'KDD-TEST-' . rand(1000, 9999),
    'tipe_laporan' => 'pengaduan',
    'nama_pelapor' => 'Warga Test',
    'is_anonim' => false,
    'no_whatsapp' => '081234567890',
    'kategori' => 'infrastruktur',
    'isi_laporan' => 'Tes pengiriman pengaduan jalan berlubang.',
    'status' => 'pending'
]);

echo "4. Tes simpan pengaduan berhasil! Nomor tiket: " . $pengaduan->nomor_tiket . "\n";
echo "Total Pengaduan di DB: " . \App\Models\Pengaduan::count() . "\n";
