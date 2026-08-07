<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "=== ISI TABEL BERITAS DATABASE ===\n";
foreach (\App\Models\Berita::all() as $b) {
    echo "ID: {$b->id}\n";
    echo "Judul   : {$b->judul}\n";
    echo "Tanggal : " . ($b->tanggal ? $b->tanggal->format('d M Y') : 'NULL') . "\n";
    echo "Dilihat : {$b->dilihat} kali\n";
    echo "----------------------------------------\n";
}
