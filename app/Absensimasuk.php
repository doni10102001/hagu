<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensimasuk extends Model
{
    protected $table = 'absensi_masuk';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'enkripsi',
    	'waktu_scan',
    	'guru_id',
    	'kehadiran',
    ];
}
