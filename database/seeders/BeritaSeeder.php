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
            $item = (array) $item;
            $konten = $item['konten'] ?? null;
            $deskripsi = is_array($konten) 
                ? implode("\n\n", $konten) 
                : ($item['deskripsi'] ?? $item['ringkasan'] ?? '');

            // Convert Indonesian month names for strtotime
            $tglStr = strtr($item['tanggal'] ?? '', [
                'Mei' => 'May',
                'Agu' => 'Aug',
                'Okt' => 'Oct',
                'Des' => 'Dec',
            ]);
            $tanggalParsed = date('Y-m-d', strtotime($tglStr));

            Berita::updateOrCreate(
                ['judul' => $item['judul']],
                [
                    'slug'      => $item['slug'] ?? \Illuminate\Support\Str::slug($item['judul']),
                    'tanggal'   => $tanggalParsed,
                    'penulis'   => $item['penulis'] ?? 'Humas Pemdes',
                    'dilihat'   => (int) filter_var($item['dilihat'] ?? '0', FILTER_SANITIZE_NUMBER_INT),
                    'ringkasan' => $item['ringkasan'] ?? $item['ringkasan_singkat'] ?? '',
                    'deskripsi' => $deskripsi,
                    'foto'      => $item['foto'] ?? null,
                    'kategori'  => $item['kategori'] ?? 'Kegiatan',
                ]
            );
        }
    }
}
