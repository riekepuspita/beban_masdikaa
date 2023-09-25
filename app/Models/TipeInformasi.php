<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeInformasi extends Model
{

    use HasFactory;
    protected $table = 'tipe_informasi';

    protected $primaryKey = 'id_tipe_info';

    protected $fillable = [
        'nama_tipe_info'
    ];

    public $timestime = false;
}
