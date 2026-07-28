<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $beritaData = include resource_path('views/pages/berita-data.php');

        foreach ($beritaData as $item) {
            $deskripsi = is_array($item['konten'] ?? null) 
                ? implode("\n\n", $item['konten']) 
                : ($item['deskripsi'] ?? $item['ringkasan'] ?? '');

            Berita::updateOrCreate(
                ['judul' => $item['judul']],
                [
                    'slug'      => $item['slug'] ?? \Illuminate\Support\Str::slug($item['judul']),
                    'tanggal'   => date('Y-m-d', strtotime($item['tanggal'])),
                    'penulis'   => $item['penulis'] ?? 'Humas Pemdes',
                    'dilihat'   => (int) filter_var($item['dilihat'] ?? '100', FILTER_SANITIZE_NUMBER_INT),
                    'ringkasan' => $item['ringkasan'] ?? $item['ringkasan_singkat'] ?? '',
                    'deskripsi' => $deskripsi,
                    'foto'      => $item['foto'] ?? null,
                    'kategori'  => $item['kategori'] ?? 'Kegiatan',
                ]
            );
        }
    }
}
