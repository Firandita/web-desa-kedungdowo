<?php

namespace App\Http\Controllers;

use App\Models\LayananSurat;
use Illuminate\Http\Request;

class LayananSuratController extends Controller
{
    public function index()
    {
        $suratList = LayananSurat::all();

        return view('pages.layanan-surat', ['suratList' => $suratList]);
    }
}
