<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipe_laporan' => 'required|string|in:pengaduan,aspirasi,pertanyaan',
            'nama_pelapor' => 'required|string|max:255',
            'is_anonim'    => 'nullable|boolean',
            'no_whatsapp'  => 'required|string|max:30',
            'kategori'     => 'required|string|max:100',
            'isi_laporan'  => 'required|string|max:2000',
            'file_lampiran'=> 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120',
        ]);

        $isAnonim = $request->has('is_anonim') || $request->input('nama_pelapor') === 'Hamba Allah / Anonim';

        // Generate Nomor Tiket Unik KDD-YYYYMMDD-XXXX
        $nomorTiket = 'KDD-' . date('Ymd') . '-' . rand(1000, 9999);

        // Upload lampiran file jika ada
        $filePath = null;
        if ($request->hasFile('file_lampiran')) {
            $filePath = $request->file('file_lampiran')->store('lampiran_pengaduan', 'public');
        }

        $pengaduan = Pengaduan::create([
            'nomor_tiket'  => $nomorTiket,
            'tipe_laporan' => $validated['tipe_laporan'],
            'nama_pelapor' => $isAnonim ? 'Hamba Allah / Anonim' : $validated['nama_pelapor'],
            'is_anonim'    => $isAnonim,
            'no_whatsapp'  => $validated['no_whatsapp'],
            'kategori'     => $validated['kategori'],
            'isi_laporan'  => $validated['isi_laporan'],
            'file_lampiran'=> $filePath,
            'status'       => 'pending',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Laporan pengaduan berhasil dikirim!',
                'nomor_tiket' => $nomorTiket,
                'data' => $pengaduan,
            ]);
        }

        return redirect()->back()->with('success', 'Laporan berhasil terkirim dengan Nomor Tiket: ' . $nomorTiket);
    }
}
