<?php

namespace App\Http\Controllers;

use App\Models\InformasiHukum;

class informasihukumController extends Controller
{
    public function index()
    {
        $informasihukum = InformasiHukum::all();
        return view('menu.informasihukum', compact('informasihukum'));
    }
}
