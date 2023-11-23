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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class produkhukumController extends Controller
{

    // public function yourControllerMethod()
    // {
    //     $years = ProdukHukum::all(); // Mengambil semua data tahun dari tabel produkhukum

    //     return view('your.view', ['years' => $years]);
    // }

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
        return view('menu.tambahprodukhukum', ['tipe_dokumen' => $tipe_dokumen, 'status' => $status, 'tag_src_produkhukum' => $tag_src_produkhukum]);
    }



    public function store_tambahprodukhukum(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'tahun' => 'required',
                'id_tipe' => 'required',
                'id_tag' => 'required',
                'judul' => 'required',
                'badan_pengarang' => 'required',
                'no_peraturan' => 'required|regex:/^[0-9]+$/',
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
            ],
            [
                'tahun.required' => 'Tahun wajib diisi',
                'id_tipe.required' => 'Tipe wajib diisi',
                'id_tag.required' => 'Tag wajib diisi',
                'judul.required' => 'Judul wajib diisi',
                'badan_pengarang.required' => 'Badan Pengarang wajib diisi',
                'no_peraturan.required' => 'Nomor Peraturan wajib diisi',
                'no_peraturan.regex' => 'Nomor Peraturan hanya boleh berisi angka',
                'no_panggil.required' => 'No Panggil wajib diisi',
                'jenis_bentuk_peraturan.required' => 'Jenis Bentuk Peraturan wajib diisi',
                'cetakan_edisi.required' => 'Cetakan Edisi wajib diisi',
                'tempat_terbit.required' => 'Tempat Terbit wajib diisi',
                'penerbit.required' => 'Penerbit wajib diisi',
                'tanggal_penetapan.required' => 'Tanggal Penetapan wajib diisi',
                'deskripsi_fisik.required' => 'Deskripsi Fisik wajib diisi',
                'sumber.required' => 'Sumber wajib diisi',
                'subjek.required' => 'Subjek wajib diisi',
                'isbn.required' => 'Isbn wajib diisi',
                'id_status.required' => 'Status wajib diisi',
                'bahasa.required' => 'Bahasa wajib diisi',
                'lokasi.required' => 'Lokasi wajib diisi',
                'abstraksi.required' => 'Abstraksi wajib diisi',
                'catatan.required' => 'Catatan wajib diisi',
                'file_peraturan.required' => 'File Peraturan wajib diisi',
                'file_abstraksi.required' => 'File Abstraksi wajib diisi',
                
            ]
        );

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

            if ($request->hasFile('file_peraturan') && $request->hasFile('file_abstraksi')) {
                $namaFile1 = $request->file('file_peraturan')->getClientOriginalName();
                $namaFile2 = $request->file('file_abstraksi')->getClientOriginalName();
        
                $request->file('file_peraturan')->move($folderPath, $namaFile1);
                $request->file('file_abstraksi')->move($folderPath, $namaFile2);
        
                $produkhukum->file_peraturan = $namaFile1;
                $produkhukum->file_abstraksi = $namaFile2;
        
                $produkhukum->save();
        
                return response()->json([
                    'status' => 200,
                    'message' => 'Produk Hukum ADDED Successfully',
                ]);
            } elseif (!$request->hasFile('file_peraturan') && !$request->hasFile('file_abstraksi')) {
                return response()->json([
                    'status' => 400,
                    'message' => 'File Peraturan dan File Abstraksi belum diunggah',
                ]);
            } elseif (!$request->hasFile('file_peraturan')) {
                return response()->json([
                    'status' => 400,
                    'message' => 'File Peraturan belum diunggah',
                ]);
            } elseif (!$request->hasFile('file_abstraksi')) {
                return response()->json([
                    'status' => 400,
                    'message' => 'File Abstraksi belum diunggah',
                ]);
            }
            
        }
    }

    // public function store_tambahprodukhukum(Request $request)
    // {
    //     if ($request->hasFile('csv_file')) {
    //         // Handle CSV file import
    //         $file = $request->file('csv_file');
    //         $path = $file->getRealPath();

    //         // Process the CSV file and insert data into the database
    //         $data = array_map('str_getcsv', file($path));
    //         foreach ($data as $row) {
    //             if (count($row) < 8) {
    //                 // Log an error, skip the record, or handle it according to your needs
    //                 // In this example, we'll log an error message
    //                 Log::error("CSV row has less than 8 columns: " . implode(', ', $row));
    //                 continue; // Skip this record and proceed to the next
    //             }

    //             $column1 = $row[0];
    //             $column2 = $row[1];
    //             $column3 = $row[2];
    //             $column4 = $row[3];
    //             $column5 = $row[4];
    //             $column6 = $row[5];
    //             $column7 = $row[6];
    //             $column8 = $row[7];
    //             $column9 = $row[8];
    //             $column10 = $row[9];
    //             $column11 = $row[10];
    //             $column12 = $row[11];
    //             $column13 = $row[12];
    //             $column14 = $row[13];
    //             $column15 = $row[14];
    //             $column16 = $row[15];
    //             $column17 = $row[16];
    //             $column18 = $row[17];
    //             $column19 = $row[18];
    //             $column20 = $row[19];
    //             $column21 = $row[20];
    //             $column22 = $row[21];
    //             $column23 = $row[22];



    //             if (strtotime($column13) === false) {
    //                 // Log an error, skip the record, or handle it according to your needs
    //                 // In this example, we'll log an error message
    //                 Log::error("Invalid date format in column8: $column13");
    //                 continue; // Skip this record and proceed to the next
    //             }

    //             // Insert data into the database
    //             ProdukHukum::create([
    //                 'tahun' => $column1,
    //                 'id_tipe' => $column2,
    //                 'id_tag' => $column3,
    //                 'judul' => $column4,
    //                 'badan_pengarang' => $column5,
    //                 'no_peraturan' => $column6,
    //                 'no_panggil' => $column7,
    //                 'jenis_bentuk_peraturan' => $column8,
    //                 'cetakan_edisi' => $column9,
    //                 'tempat_terbit' => $column10,
    //                 'penerbit' => $column11,
    //                 'tanggal_penetapan' => $column12,
    //                 'deskripsi_fisik' => $column13,
    //                 'sumber' => $column14,
    //                 'subjek' => $column15,
    //                 'isbn' => $column16,
    //                 'id_status' => $column17,
    //                 'bahasa' => $column18,
    //                 'lokasi' => $column19,
    //                 'abstraksi' => $column20,
    //                 'catatan' => $column21,
    //                 'file_peraturan' => $column22,
    //                 'file_abstraksi' => $column23,
    //             ]);
    //         }

    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Produk Hukum ADDED Successfully',
    //         ]);
    //     } else {

    //         $produkhukum = new ProdukHukum();
    //         $produkhukum->tahun = $request->input('tahun');
    //         $produkhukum->id_tipe = $request->input('id_tipe');
    //         $produkhukum->id_tag = $request->input('id_tag');
    //         $produkhukum->judul = $request->input('judul');
    //         $produkhukum->badan_pengarang = $request->input('badan_pengarang');
    //         $produkhukum->no_peraturan = $request->input('no_peraturan');
    //         $produkhukum->no_panggil = $request->input('no_panggil');
    //         $produkhukum->jenis_bentuk_peraturan = $request->input('jenis_bentuk_peraturan');
    //         $produkhukum->singkatan_jenis = $request->input('singkatan_jenis');
    //         $produkhukum->cetakan_edisi = $request->input('cetakan_edisi');
    //         $produkhukum->tempat_terbit = $request->input('tempat_terbit');
    //         $produkhukum->penerbit = $request->input('penerbit');
    //         $produkhukum->tanggal_penetapan = $request->input('tanggal_penetapan');
    //         $produkhukum->deskripsi_fisik = $request->input('deskripsi_fisik');
    //         $produkhukum->sumber = $request->input('sumber');
    //         $produkhukum->subjek = $request->input('subjek');
    //         $produkhukum->isbn = $request->input('isbn');
    //         $produkhukum->id_status = $request->input('id_status');
    //         $produkhukum->bahasa = $request->input('bahasa');
    //         $produkhukum->lokasi = $request->input('lokasi');
    //         $produkhukum->abstraksi = $request->input('abstraksi');
    //         $produkhukum->catatan = $request->input('catatan');

    //         $folderPath = public_path('upload');
    //         if (!file_exists($folderPath)) {
    //             mkdir($folderPath, 0755, true);
    //         }

    //         $namaFile1 = $request->file('file_peraturan')->getClientOriginalName();
    //         $namaFile2 = $request->file('file_abstraksi')->getClientOriginalName();

    //         $request->file('file_peraturan')->move($folderPath, $namaFile1);
    //         $request->file('file_abstraksi')->move($folderPath, $namaFile2);

    //         $produkhukum->file_peraturan = $namaFile1;
    //         $produkhukum->file_abstraksi = $namaFile2;

    //         $produkhukum->save();
    //         return response()->json([
    //             'status' => 200,
    //             'message' => 'Produk Hukum ADDED Successfully',
    //         ]);
    //     }
    // }

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

    public function importCSV(Request $request)
    {
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));

            foreach ($data as $row) {
                // Add validation for required fields or other validation rules as needed
                $validator = Validator::make($row, [
                    'tahun' => 'required',
                    'id_tag' => 'required',
                    // Add more validation rules here for other fields
                ]);

                if ($validator->fails()) {
                    // Handle validation errors as needed
                    // You can return an error response or log the errors
                    return response()->json([
                        'status' => 400,
                        'message' => 'Validation error',
                        'errors' => $validator->errors(),
                    ], 400);
                }

                ProdukHukum::create([
                    'tahun' => $row[0],
                    'id_tag' => $row[1],
                    'id_tipe' => $row[2],
                    'judul' => $row[3],
                    'badan_pengarang' => $row[4],
                    'no_peraturan' => $row[5],
                    'no_panggil' => $row[6],
                    'jenis_bentuk_peraturan' => $row[7],
                    'cetakan_edisi' => $row[8],
                    'tempat_terbit' => $row[9],
                    'penerbit' => $row[10],
                    'tanggal_penetapan' => $row[11],
                    'deskripsi_fisik' => $row[12],
                    'sumber' => $row[13],
                    'subjek' => $row[14],
                    'isbn' => $row[15],
                    'id_status' => $row[16],
                    'bahasa' => $row[17],
                    'lokasi' => $row[18],
                    'abstraksi' => $row[19],
                    'catatan' => $row[20],
                    'file_peraturan' => $row[21],
                    'file_abstraksi' => $row[22],
                ]);
            }

            return response()->json([
                'status' => 200,
                'message' => 'Produk Hukum ADDED Successfully',
            ]);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->input('result');
        if ($keyword != null) {
            $produk_hukum = ProdukHukum::where('judul', 'like', '%' . $keyword . '%')
                ->orWhere('tahun', 'like', '%' . $keyword . '%')
                ->orWhere('file_peraturan', 'like', '%' . $keyword . '%')
                ->orWhere('file_abstraksi', 'like', '%' . $keyword . '%')
                ->orWhereHas('relasi_id_tipe', function ($query) use ($keyword) {
                    $query->where('nama_tipe', 'like', '%' . $keyword . '%');
                })
                ->orWhereHas('relasi_id_tag', function ($query) use ($keyword) {
                    $query->where('nama_tag', 'like', '%' . $keyword . '%');
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
