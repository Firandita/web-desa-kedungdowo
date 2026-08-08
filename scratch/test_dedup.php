<?php

require dirname(__DIR__) . '/vendor/autoload.php';
$app = require_once dirname(__DIR__) . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Start HTTP session simulation
$session = $app->make('session');
$session->start();

$berita = \App\Models\Berita::first();
$initialViews = $berita->dilihat;

echo "=== TEST DEDUPLIKASI SESSION VIEW ===\n";
echo "Views Awal di DB (Berita ID {$berita->id}) : {$initialViews}\n";

$controller = new \App\Http\Controllers\BeritaController();

// Simulate 1st view via AJAX (Pop-up click)
$res1 = json_decode($controller->incrementView($berita->id)->getContent(), true);
echo "1. Klik Pop-up Preview (First View)   : dilihat = {$res1['dilihat']} | incremented = " . ($res1['incremented'] ? 'true' : 'false') . "\n";

// Simulate 2nd view (Click 'Baca Selengkapnya' in same session)
$controller->show($berita->id);
$beritaRefresh1 = $berita->fresh();
echo "2. Klik 'Baca Selengkapnya' (2nd View)  : dilihat = {$beritaRefresh1->dilihat} (TIDAK bertambah ganda!)\n";

// Simulate 3rd view via AJAX again in same session
$res3 = json_decode($controller->incrementView($berita->id)->getContent(), true);
echo "3. Klik Pop-up lagi (Same Session)     : dilihat = {$res3['dilihat']} | incremented = " . ($res3['incremented'] ? 'true' : 'false') . "\n";

echo "=======================================\n";
if ($beritaRefresh1->dilihat === $initialViews + 1) {
    echo "SUCCESS! Hanya bertambah 1 kali per sesi pengguna.\n";
} else {
    echo "FAILED! Masih bertambah ganda.\n";
}
