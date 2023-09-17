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
        'tipe_kegiatan', 'judul', 'status'
    ];
}
