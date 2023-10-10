<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagSrcProdukHukum extends Model
{

    use HasFactory;
    protected $table = 'tag_src_produkhukum';

    protected $primaryKey = 'id_tag';

    protected $fillable = [
        'nama_tag'
    ];

    public $timestime = false;
}
