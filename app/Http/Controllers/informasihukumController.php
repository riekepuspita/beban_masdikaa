<?php

namespace App\Http\Controllers;

use App\Models\InformasiHukum;
use App\Models\StatusInformasi;
use App\Models\TipeInformasi;
use Illuminate\Http\Request;

class informasihukumController extends Controller
{
     public function index(Request $filter)
{
    // dd($filter->query('peraturandaerah'));
    // dd($filter);
    // $filter = $request->input('filter');

    $filterinformasihukum = InformasiHukum::where('id_tipe_info', $filter)->get();
    $filterih = TipeInformasi::all();
    $informasihukum = InformasiHukum::all();
    return view('menu.informasihukum', ['informasihukum' => $informasihukum, 'filterih' => $filterih, 'filterinformasihukum' => $filterinformasihukum]);
}


public function pilihaninformasihukum()
{
    $tipe_informasi = TipeInformasi::all();
    $status_informasi = StatusInformasi::all();

    // dd($tipe_dokumen);
    return view('menu.tambahinformasihukum', ['tipe_informasi' => $tipe_informasi, 'status_informasi' => $status_informasi]);
}



}
