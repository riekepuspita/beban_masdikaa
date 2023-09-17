<?php

namespace App\Http\Controllers;

use App\Models\ProdukHukum;
use App\Models\Status;
use App\Models\TipeDokumen;
use App\Models\Tahun;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class produkhukumController extends Controller
{
    public function index(Request $filter)
    {
        // dd($filter->query('peraturandaerah'));
        // dd($filter);
        // $filter = $request->input('filter');

        $filterprodukhukum = ProdukHukum::where('id_tipe', $filter)->get();
        $filterph = TipeDokumen::all();
        $produkhukum = ProdukHukum::all();
        return view('menu.produkhukum', ['produkhukum' => $produkhukum, 'filterph' => $filterph, 'filterprodukhukum' => $filterprodukhukum]);
    }


    public function pilihanprodukhukum()
    {
        $tipe_dokumen = TipeDokumen::all();
        $status = Status::all();
        $tahun = Tahun::all();

        // dd($tipe_dokumen);
        return view('menu.tambahprodukhukum', ['tipe_dokumen' => $tipe_dokumen, 'status' => $status, 'tahun' => $tahun]);
    }

    public function store_tambahprodukhukum(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_tahun' => 'required',
            'id_tipe' => 'required',
            'judul' => 'required',
            'badan_pengarang' => 'required',
            'no_peraturan' => 'required',
            'no_panggil' => 'required',
            'judul' => 'required',
            'jenis_bentuk_peraturan' => 'required',
            'cetakan_edisi' => 'required',
            'tempat_terbit' => 'required',
            'penerbit' => 'required',
            'tanggal_penetapan' => 'required',
            'deskripsi_fisik' => 'required',
            'sumber' => 'required',
            'subjek' => 'required',
            'isbn' => 'required',
            'id_status' => 'required',
            'bahasa' => 'required',
            'lokasi' => 'required',
            'abstraksi' => 'required',
            'catatan' => 'required',
            // 'file_peraturan' => 'required|file',
            // 'file_abstraksi' => 'required|file',


        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $produkhukum = new ProdukHukum();
            $produkhukum->id_tahun = $request->input('id_tahun');
            $produkhukum->id_tipe = $request->input('id_tipe');
            $produkhukum->judul = $request->input('judul');
            $produkhukum->badan_pengarang = $request->input('badan_pengarang');
            $produkhukum->no_peraturan = $request->input('no_peraturan');
            $produkhukum->no_panggil = $request->input('no_panggil');
            $produkhukum->jenis_bentuk_peraturan = $request->input('jenis_bentuk_peraturan');
            $produkhukum->singkatan_jenis = $request->input('singkatan_jenis');
            $produkhukum->cetakan_edisi = $request->input('cetakan_edisi');
            $produkhukum->tempat_terbit = $request->input('tempat_terbit');
            $produkhukum->penerbit = $request->input('penerbit');
            $produkhukum->tanggal_penetapan = $request->input('tanggal_penetapan');
            $produkhukum->deskripsi_fisik = $request->input('deskripsi_fisik');
            $produkhukum->sumber = $request->input('sumber');
            $produkhukum->subjek = $request->input('subjek');
            $produkhukum->isbn = $request->input('isbn');
            $produkhukum->id_status = $request->input('id_status');
            $produkhukum->bahasa = $request->input('bahasa');
            $produkhukum->lokasi = $request->input('lokasi');
            $produkhukum->abstraksi = $request->input('abstraksi');
            $produkhukum->catatan = $request->input('catatan');
            // $produkhukum->file_peraturan = $request->input('file_peraturan');
            // $produkhukum->file_abstraksi = $request->input('file_abstraksi');

            $produkhukum->save();
            return response()->json([
                'status' => 200,
                'message' => 'Produk Hukum ADDED Successfully',

            ]);
        }
    }
}
