<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeDokumen extends Model
{

    use HasFactory;
    protected $table = 'tipe_dokumen';

    protected $primaryKey = 'id_tipe';

    protected $fillable = [
        'nama_tipe'
    ];

    public $timestime = false;
}
