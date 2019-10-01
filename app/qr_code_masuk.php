<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qr_code_masuk extends Model
{
	protected $table = 'qr_code_masuk';
	protected $primaryKey = 'id';
	protected $fillable = [
		'kode_enkripsi',
	];
}
