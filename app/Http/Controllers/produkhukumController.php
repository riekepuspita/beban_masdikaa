<?php

namespace App\Http\Controllers;

use App\Models\ProdukHukum;
use App\Models\Status;
use App\Models\TagSrcProdukHukum;
use App\Models\TipeDokumen;
use App\Models\Tahun;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class produkhukumController extends Controller
{

    public function yourControllerMethod()
    {
    $years = ProdukHukum::all(); // Mengambil semua data tahun dari tabel produkhukum

    return view('your.view', ['years' => $years]);
    }
    
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
        $tag_src_produkhukum = TagSrcProdukHukum::all();

        // dd($tipe_dokumen);
        return view('menu.tambahprodukhukum', ['tipe_dokumen' => $tipe_dokumen, 'status' => $status, 'tag_src_produkhukum' => $tag_src_produkhukum ]);
    }



    public function store_tambahprodukhukum(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'id_tipe' => 'required',
            'id_tag' => 'required',
            'judul' => 'required',
            'badan_pengarang' => 'required',
            'no_peraturan' => 'required',
            'no_panggil' => 'required',
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
            'file_peraturan' => 'required',
            'file_abstraksi' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $produkhukum = new ProdukHukum();
            $produkhukum->tahun = $request->input('tahun');
            $produkhukum->id_tipe = $request->input('id_tipe');
            $produkhukum->id_tag = $request->input('id_tag');
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

            $folderPath = public_path('upload');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            $namaFile1 = 'file_peraturan-' . uniqid() . '.' . $request->file('file_peraturan')->getClientOriginalExtension();
            $namaFile2 = 'file_abstraksi-' . uniqid() . '.' . $request->file('file_abstraksi')->getClientOriginalExtension();

            $request->file('file_peraturan')->move($folderPath, $namaFile1);
            $request->file('file_abstraksi')->move($folderPath, $namaFile2);

            $produkhukum->file_peraturan = $namaFile1;
            $produkhukum->file_abstraksi = $namaFile2;

            $produkhukum->save();
            return response()->json([
                'status' => 200,
                'message' => 'Produk Hukum ADDED Successfully',

            ]);
        }
    }

    public function view($id)
    {
        $data = ProdukHukum::find($id);

        $tipe_dokumen = TipeDokumen::all();
        $tahun = ProdukHukum::all();
        $status = Status::all();
        $tag_src_produkhukum = TagSrcProdukHukum::all();


        return view('menu.lihatprodukhukum', ['data' => $data, 'tipe_dokumen' => $tipe_dokumen, 'status' => $status, 'tag_src_produkhukum' => $tag_src_produkhukum]);
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'id_tipe' => 'required',
            'id_tag' => 'required',
            'judul' => 'required',
            'badan_pengarang' => 'required',
            'no_peraturan' => 'required',
            'no_panggil' => 'required',
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
            // 'file_peraturan' => 'required',
            // 'file_abstraksi' => 'required',
            'file_peraturan' => '',
            'file_abstraksi' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $produkhukum = ProdukHukum::find($id);
            $produkhukum->tahun = $request->input('tahun');
            $produkhukum->id_tipe = $request->input('id_tipe');
            $produkhukum->id_tag = $request->input('id_tag');
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

            // $folderPath = public_path('upload');
            // if (!file_exists($folderPath)) {
            //     mkdir($folderPath, 0755, true);
            // }

            // $namaFile1 = 'file_peraturan-' . uniqid() . '.' . $request->file('file_peraturan')->getClientOriginalExtension();
            // $namaFile2 = 'file_abstraksi-' . uniqid() . '.' . $request->file('file_abstraksi')->getClientOriginalExtension();

            // $request->file('file_peraturan')->move($folderPath, $namaFile1);
            // $request->file('file_abstraksi')->move($folderPath, $namaFile2);

            // $produkhukum->file_peraturan = $namaFile1;
            // $produkhukum->file_abstraksi = $namaFile2;

            $produkhukum->update();
            return response()->json([
                'status' => 200,
                'message' => 'Produk Hukum ADDED Successfully',

            ]);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->input('result');
        if($keyword != null) {
            $produk_hukum = ProdukHukum::where('judul', 'like', '%' . $keyword . '%')
                ->orWhere('tahun', 'like', '%' . $keyword . '%')
                ->orWhereHas('relasi_id_tipe', function ($query) use ($keyword) {
                    $query->where('nama_tipe', 'like', '%' . $keyword . '%');
                })
                ->orWhereHas('relasi_id_tag', function ($query) use ($keyword) {
                    $query->where('nama_tag', 'like', '%'.$keyword.'%');
                })
                ->get();
        } else {
            $produk_hukum = ProdukHukum::where('judul', 'like', '%' . $keyword . '%')->get();
        }

        // dd($produk_hukum);
        return view('landingpage.lpprodukhukum', ['produk_hukum' => $produk_hukum]);

    }

    public function show($id)
    {
        $data = new ProdukHukum();
        $post = $data->show($id);
        $hukum = ProdukHukum::find($id);
        
        // return($hukum);
        return view('landingpage.lihatlpprodukhukum', ['post' => $hukum]);
    }

    public function lihatlp($id)
    {
        $data = ProdukHukum::find($id);
        

        $tipe_dokumen = TipeDokumen::all();
        $status = Status::all();
        $tag_src_produkhukum = TagSrcProdukHukum::all();

       
        return view('landingpage.lihatlpprodukhukum', ['data' => $data, 'tipe_dokumen' => $tipe_dokumen, 'status' => $status, 'tag_src_produkhukum' => $tag_src_produkhukum]);
    }

    // public function lihatlp($id)
    // {
    //     $ph = ProdukHukum::find($id);
    //     $td = TipeDokumen::where('id_tipe', $ph->id_tipe);
    //     $tag = TagSrcProdukHukum::where('id_tag', $ph->id_tag);
    //     $status = Status::where('id_status', $ph->id_status);

    //     return($td);
    // }

}
