<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensipulang extends Model
{
    protected $table = 'absensi_pulang';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'enkripsi',
    	'waktu_scan',
    	'guru_id',
    	'kehadiran',
    ];

     public function kehadiran() 
    {
    	return $this->belongsToMany('App/Ketkehadiran');
    }
}
