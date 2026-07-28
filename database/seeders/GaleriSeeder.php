<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'judul'      => 'Pembangunan & Pengaspalan Jalan Usaha Tani Dusun Kedungdowo',
                'kategori'   => 'pembangunan',
                'lokasi'     => 'Dusun Kedungdowo RT 04 / RW 02',
                'foto'       => 'https://images.unsplash.com/photo-1541888946425-d0fbb186a5b3?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Pelaksanaan perbaikan dan pengaspalan akses jalan pertanian guna meningkatkan kelancaran pengangkutan hasil panen padi warga.',
                'tanggal'    => '2026-07-18',
            ],
            [
                'judul'      => 'Pelatihan Keterampilan UMKM Produk Olahan Pangan Lokal',
                'kategori'   => 'pemberdayaan',
                'lokasi'     => 'Pendopo Balai Desa Kedungdowo',
                'foto'       => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Pelatihan pembuatan kemasan produk UMKM makanan olahan bagi anggota PKK dan kelompok wanita tani (KWT).',
                'tanggal'    => '2026-07-15',
            ],
            [
                'judul'      => 'Pemeriksaan Kesehatan Rutin Balita & Cegah Stunting',
                'kategori'   => 'kesehatan',
                'lokasi'     => 'Posyandu Melati Dusun 2',
                'foto'       => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Kegiatan penimbangan berat badan balita, pengurusan imunisasi, dan pembagian paket nutrisi makanan tambahan (PMT).',
                'tanggal'    => '2026-07-10',
            ],
            [
                'judul'      => 'Musrenbangdes Rencana Kerja Pemerintah Desa (RKPDes)',
                'kategori'   => 'pemerintahan',
                'lokasi'     => 'Balai Desa Kedungdowo',
                'foto'       => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Forum musyawarah tahunan penyusunan rencana kerja dan alokasi anggaran pembangunan desa bersama BPD dan tokoh masyarakat.',
                'tanggal'    => '2026-07-05',
            ],
            [
                'judul'      => 'Rehabilitasi Saluran Irigasi Pertanian Sawah Kedungdowo',
                'kategori'   => 'pembangunan',
                'lokasi'     => 'Persawahan Blok B Kedungdowo',
                'foto'       => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Pembangunan tembok penahan tanah dan perbaikan saluran irigasi tersier untuk memastikan pasokan air lancar.',
                'tanggal'    => '2026-06-28',
            ],
            [
                'judul'      => 'Kerja Bakti Gotong Royong Pembersihan Lingkungan Desa',
                'kategori'   => 'pemberdayaan',
                'lokasi'     => 'Seluruh Wilayah RT Desa Kedungdowo',
                'foto'       => 'https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=1200&auto=format&fit=crop',
                'keterangan' => 'Kegiatan kerja bakti rutin warga dalam merapikan fasilitas umum, selokan, dan drainase lingkungan pemukiman desa.',
                'tanggal'    => '2026-06-20',
            ],
        ];

        foreach ($items as $item) {
            Galeri::updateOrCreate(
                ['judul' => $item['judul']],
                $item
            );
        }
    }
}
