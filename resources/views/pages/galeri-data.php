<?php

/**
 * DATA DUMMY GALERI DESA KEDUNGDOWO
 * ------------------------------------------------------------------
 * Dipakai HANYA sebagai fallback kalau tabel `galeris` masih kosong
 * (misal sebelum admin sempat upload foto lewat panel admin).
 * Begitu ada data asli di database, ini otomatis tidak dipakai lagi
 * (lihat logika di GaleriController::index()).
 *
 * Foto memakai konvensi img-slot: taruh file aslinya di
 * public/img/galeri-1.jpg sampai galeri-8.jpg, kalau belum ada,
 * otomatis muncul placeholder kotak-kotak diagonal.
 */

return [
    (object) [
        'id' => null,
        'judul' => 'Pembangunan & Pengaspalan Jalan Usaha Tani',
        'kategori' => 'pembangunan',
        'lokasi' => 'Dusun Kedungdowo',
        'tanggal' => '2026-07-18',
        'keterangan' => 'Pelaksanaan perbaikan dan pengaspalan akses jalan pertanian guna meningkatkan kelancaran pengangkutan hasil panen warga.',
        'foto' => 'galeri-1.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Pelatihan Keterampilan UMKM Olahan Pangan',
        'kategori' => 'pemberdayaan',
        'lokasi' => 'Balai Desa Kedungdowo',
        'tanggal' => '2026-07-15',
        'keterangan' => 'Kegiatan pelatihan kemasan dan pemasaran digital bagi ibu-ibu PKK dan pelaku usaha desa.',
        'foto' => 'galeri-2.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Pemeriksaan Kesehatan Balita & Cegah Stunting',
        'kategori' => 'kesehatan',
        'lokasi' => 'Posyandu Melati Dusun 2',
        'tanggal' => '2026-07-10',
        'keterangan' => 'Penimbangan balita, pemberian makanan tambahan (PMT), dan edukasi gizi dari Puskesmas.',
        'foto' => 'galeri-3.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Musrenbangdes Rencana Kerja Pemerintah Desa',
        'kategori' => 'pemerintahan',
        'lokasi' => 'Balai Desa Kedungdowo',
        'tanggal' => '2026-07-05',
        'keterangan' => 'Forum musyawarah tahunan penyusunan rencana kerja dan alokasi anggaran pembangunan desa.',
        'foto' => 'galeri-4.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Rehabilitasi Saluran Irigasi Pertanian',
        'kategori' => 'pembangunan',
        'lokasi' => 'Area Persawahan Blok B',
        'tanggal' => '2026-06-28',
        'keterangan' => 'Perbaikan talud irigasi tersier untuk mengoptimalkan pembagian air ke lahan sawah warga.',
        'foto' => 'galeri-5.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Kerja Bakti Gotong Royong Pembersihan Lingkungan',
        'kategori' => 'pemberdayaan',
        'lokasi' => 'Seluruh RT Desa Kedungdowo',
        'tanggal' => '2026-06-20',
        'keterangan' => 'Aksi kebersamaan pembersihan selokan dan perapihan vegetasi menjelang musim penghujan.',
        'foto' => 'galeri-6.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Sosialisasi Perilaku Hidup Bersih & Sehat',
        'kategori' => 'kesehatan',
        'lokasi' => 'Balai Pertemuan Warga',
        'tanggal' => '2026-06-12',
        'keterangan' => 'Edukasi kebersihan sanitasi lingkungan dan pengolahan limbah sampah rumah tangga.',
        'foto' => 'galeri-7.jpg',
    ],
    (object) [
        'id' => null,
        'judul' => 'Penyaluran Bantuan Langsung Tunai Dana Desa',
        'kategori' => 'pemerintahan',
        'lokasi' => 'Balai Desa Kedungdowo',
        'tanggal' => '2026-06-01',
        'keterangan' => 'Penyerahan bantuan sosial BLT Dana Desa tahap II kepada Keluarga Penerima Manfaat (KPM).',
        'foto' => 'galeri-8.jpg',
    ],
];
