<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukHukum extends Model
{

    use HasFactory;
    protected $table = 'produk_hukum';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tahun', 'id_tipe', 'judul', 'id_status'
    ];

    public $timestime = false;

    public function tahun()
    {
        return $this->belongsTo(ProdukHukum::class, 'tahun'); // Sesuaikan relasi dengan model Year
    }

    public function relasi_id_tipe()
    {
        return $this->belongsTo(TipeDokumen::class, 'id_tipe');
    }

    public function relasi_id_status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function relasi_id_tag()
    {
        return $this->belongsTo(TagSrcProdukHukum::class, 'id_tag');
    }

    public function join_tipedokumen()
    {
        return $this->join('tipe_dokumen', 'produk_hukum.id_tipe', '=', 'tipe_dokumen.id_tipe')

            ->select('produk_hukum.*', 'tipe_dokumen.nama_tipe');
    }

    public function show($id)
    {
        return $this->join('tipe_dokumen', 'produk_hukum.id_tipe', '=', 'tipe_dokumen.id_tipe')
            // ->join('tahun', 'produk_hukum.id_tahun', '=', 'tahun.nama_tahun')
            ->where('produk_hukum.id', '=', $id);
    }

    public function show_hukum($id)
    {
        return $this->join('tipe_dokumen', 'produk_hukum.id_tipe', '=', 'tipe_dokumen.id_tipe')
            // ->join('tahun', 'produk_hukum.id_tahun', '=', 'tahun.nama_tahun')
            ->join('tipe_dokumen','produk_hukum.id_tipe', '=', 'tipe_dokumen.nama_tipe')
            ->join('tag_src_produkhukum','produk_hukum.id_tag', '=', 'tag_src_produkhukum.nama_tag')
            ->join('status','produk_hukum.id_status', '=', 'status.status')

            ->where('produk_hukum.id', '=', $id);
    }

}
