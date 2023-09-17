<?php

namespace App\Http\Controllers;

use App\Models\TipeDokumen;
use GuzzleHttp\Psr7\Request;

class tipedokumenController extends Controller
{
    public function index()
    {

        $tipedokumen = TipeDokumen::with('relasi_id_tipe')->get();
        return view('menu.produkhukum', compact('tipedokumen'));
    }
}
