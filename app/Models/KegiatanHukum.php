<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanHukum extends Model
{
    use HasFactory;
    protected $table = 'kegiatan_hukum';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_tipe_kegiatan', 'judul', 'status_kegiatan'
    ];

    public $timestime = false;

    public function relasi_id_tipe_kegiatan()
    {
        return $this->belongsTo(TipeKegiatan::class, 'id_tipe_kegiatan');
    }

    public function relasi_id_status_keg()
    {
        return $this->belongsTo(StatusKegiatan::class, 'id_status_keg');
    }

    public function join_tipekegiatan()
    {
        return $this->join('tipe_kegiatan', 'kegiatan_hukum.id_tipe_kegiatan', '=', 'tipe_kegiatan.id_tipe_kegiatan')

            ->select('kegiatan_hukum.*', 'tipe_kegiatan.nama_tipe_kegiatan');
    }

    public function join_statuskegiatan()
    {
        return $this->join('status_kegiatan', 'kegiatan_hukum.id_status_keg', '=', 'status_kegiatan.id_status_keg')

            ->select('kegiatan_hukum.*', 'status_kegiatan.status_keg');
    }
}
