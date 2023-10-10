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
        'id_tahun', 'id_tipe', 'judul', 'id_status'
    ];

    public $timestime = false;

    public function relasi_id_tipe()
    {
        return $this->belongsTo(TipeDokumen::class, 'id_tipe');
    }

    public function relasi_id_status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function relasi_id_tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun');
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
}
