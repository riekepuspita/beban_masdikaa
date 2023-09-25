<?php

namespace App\Http\Controllers;

use App\Models\KegiatanHukum;
use App\Models\TipeKegiatan;
use App\Models\StatusKegiatan;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;


class kegiatanhukumController extends Controller
{
    public function index(Request $filter)
    {
        
        $filterkegiatanhukum = KegiatanHukum::where('id_tipe_kegiatan', $filter)->get();
        $filterkh = TipeKegiatan::all();
        $kegiatanhukum = KegiatanHukum::all();

        // dd($filterkh);
        return view('menu.kegiatanhukum', ['kegiatanhukum' => $kegiatanhukum, 'filterkh' => $filterkh, 'filterkegiatanhukum' => $filterkegiatanhukum]);

    }

    public function pilihanstatuskeg()
    {
        $tipe_kegiatan = TipeKegiatan::all();
        $status_kegiatan = StatusKegiatan::all();

        // dd($tipe_dokumen);
        return view('menu.tambahkegiatanhukum', ['tipe_kegiatan' => $tipe_kegiatan, 'status_kegiatan' => $status_kegiatan]);
    }

}
