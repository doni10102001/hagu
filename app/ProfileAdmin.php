<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileAdmin extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id',
    	'name',
    	'email',
    	'password',
    ];
}
