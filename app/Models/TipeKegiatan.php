<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKegiatan extends Model
{

    use HasFactory;
    protected $table = 'tipe_kegiatan';

    protected $primaryKey = 'id_tipe_kegiatan';

    protected $fillable = [
        'nama_tipe_kegiatan'
    ];

    public $timestime = false;
}
