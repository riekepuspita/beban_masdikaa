<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusInformasi extends Model
{

    use HasFactory;
    protected $table = 'status_informasi';

    protected $primaryKey = 'id_status_info';

    protected $fillable = [
        'status_info'
    ];

    public $timestime = false;
}
