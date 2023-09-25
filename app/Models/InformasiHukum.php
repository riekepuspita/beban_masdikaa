<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiHukum extends Model
{
    use HasFactory;
    protected $table = 'informasi_hukum';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_tipe_informasi', 'judul', 'id_status_info'
    ];

    public $timestime = false;

    public function relasi_id_tipe_info()
    {
        return $this->belongsTo(TipeInformasi::class, 'id_tipe_info');
    }

    public function relasi_id_status_info()
    {
        return $this->belongsTo(StatusInformasi::class, 'id_status_info');
    }

    public function join_tipeinformasi()
    {
        return $this->join('tipe_informasi', 'informasi_hukum.id_tipe_info', '=', 'tipe_informasi.id_tipe_info')

            ->select('informasi_hukum.*', 'tipe_informasi.nama_tipe_info');
    }

    public function join_statusinformasi()
    {
        return $this->join('status_informasi', 'informasi_hukum.id_status_info', '=', 'status_informasi.id_status_info')

            ->select('informasi_hukum.*', 'status_infrmasi.status_info');
    }
}
