<?php

namespace App\Http\Controllers;

use App\Models\KegiatanHukum;

class kegiatanhukumController extends Controller
{
    public function index()
    {
        $kegiatanhukum = KegiatanHukum::all();
        return view('menu.kegiatanhukum', compact('kegiatanhukum'));
    }
}
