<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qr_code_pulang extends Model
{
    protected $table = 'qr_code_pulang';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'kode_enkripsi',
    ];
}
