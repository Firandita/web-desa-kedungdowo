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

        $beritaList = $query->latest('tanggal')->get();

        // Fallback jika database masih kosong
        if ($beritaList->isEmpty()) {
            $daftarBerita = include resource_path('views/pages/berita-data.php');
            return view('pages.berita', ['daftarBerita' => $daftarBerita]);
        }

        return view('pages.berita', ['daftarBerita' => $beritaList]);
    }

    public function show($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            $daftarBerita = include resource_path('views/pages/berita-data.php');
            if (isset($daftarBerita[$id])) {
                $berita = $daftarBerita[$id];
            } else {
                abort(404);
            }
        } else {
            // Increment jumlah pembaca
            $berita->increment('dilihat');
        }

        return view('pages.berita-detail', ['berita' => $berita]);
    }
}
