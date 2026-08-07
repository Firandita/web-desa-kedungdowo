<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "=== TEST FILAMENT RESOURCE LABELS & BADGES ===\n";
echo "1. Berita        : " . \App\Filament\Resources\Beritas\BeritaResource::getNavigationLabel() . "\n";
echo "2. Galeri        : " . \App\Filament\Resources\Galeris\GaleriResource::getNavigationLabel() . "\n";
echo "3. Layanan Surat : " . \App\Filament\Resources\LayananSurats\LayananSuratResource::getNavigationLabel() . "\n";
echo "4. Pengaduan     : " . \App\Filament\Resources\Pengaduans\PengaduanResource::getNavigationLabel() . "\n";
echo "   Badge Pending : " . (\App\Filament\Resources\Pengaduans\PengaduanResource::getNavigationBadge() ?? '0') . "\n";
echo "=============================================\n";
