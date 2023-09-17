<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use GuzzleHttp\Psr7\Request;

class tahunController extends Controller
{
    public function index()
    {

        $tahun = Tahun::with('relasi_id_tahun')->get();
        return view('menu.produkhukum', compact('tahun'));
    }
}

