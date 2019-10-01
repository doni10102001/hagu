<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketkehadiran extends Model
{
    protected $table = 'ket_kehadiran';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'kehadiran',
    	'ket',
    ];

    public function absensimasuk()
    {
    	return $this->belongsToMany('App\Absensimasuk');
    }

    public function absensipulang()
    {
        return $this->belongsToMany('App\Absensipulang');
    }
}
