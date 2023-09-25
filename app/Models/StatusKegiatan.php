<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKegiatan extends Model
{

    use HasFactory;
    protected $table = 'status_kegiatan';

    protected $primaryKey = 'id_status_keg';

    protected $fillable = [
        'status_keg'
    ];

    public $timestime = false;
}
