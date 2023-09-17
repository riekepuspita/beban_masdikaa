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
        'tipe_informasi', 'judul', 'status'
    ];
}
