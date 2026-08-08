<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('q')) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }

        $daftarBerita = $query->latest('tanggal')->get();

        // Fallback ke data dummy kalau database masih kosong.
        // Item dummy berupa object supaya cara akses ($item->judul) sama
        // persis dengan model Eloquent Berita, jadi blade tidak perlu tahu
        // datanya dari database atau dummy.
        if ($daftarBerita->isEmpty()) {
            $daftarBerita = collect(include resource_path('views/pages/berita-data.php'));
            $fromDb = false;
        } else {
            $fromDb = true;
        }

        return view('pages.berita', [
            'daftarBerita' => $daftarBerita,
            'fromDb' => $fromDb,
        ]);
    }

    public function show($id)
    {
        $berita = Berita::find($id);

        if ($berita) {
            $this->recordView($berita);
            $fromDb = true;
        } else {
            $daftarBerita = include resource_path('views/pages/berita-data.php');

            if (!isset($daftarBerita[$id])) {
                abort(404);
            }

            $berita = $daftarBerita[$id];
            $fromDb = false;
        }

        return view('pages.berita-detail', [
            'berita' => $berita,
            'fromDb' => $fromDb,
        ]);
    }

    public function incrementView($id)
    {
        $berita = Berita::find($id);
        if ($berita) {
            $incremented = $this->recordView($berita);
            return response()->json([
                'success'     => true,
                'dilihat'     => $berita->dilihat,
                'incremented' => $incremented,
            ]);
        }
        return response()->json(['success' => false], 404);
    }

    /**
     * Merekam jumlah pembaca (views) hanya 1x per sesi pengguna
     * untuk mencegah pencatatan ganda saat klik pop-up & baca selengkapnya.
     */
    private function recordView(Berita $berita): bool
    {
        $sessionKey = 'viewed_berita_' . $berita->id;

        if (!session()->has($sessionKey)) {
            $berita->increment('dilihat');
            session()->put($sessionKey, true);
            return true; // Berhasil ditambah 1 view baru
        }

        return false; // Sudah pernah dihitung pada sesi ini (tidak dihitung ulang)
    }
}
