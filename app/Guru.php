<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'foto',
    	'nik',
    	'tmpat_lahir',
    	'tgl_lahir',
    	'alamat',
    	'rt',
    	'rw',
    	'desa',
    	'kec',
    	'kab',
    	'jenis_kelamin',
    	'jabatan',
    ];
}
