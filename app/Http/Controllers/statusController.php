<?php

namespace App\Http\Controllers;

use App\Models\Status;
use GuzzleHttp\Psr7\Request;

class statusController extends Controller
{
    public function index()
    {

        $status = Status::with('relasi_id_status')->get();
        return view('menu.produkhukum', compact('status'));
    }
}

