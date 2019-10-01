<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoApp extends Model
{
   protected $table = 'app_info';
   protected $primaryKey = 'id';
   protected $fillable = [
   		'logo',
   		'link',
   		'url_link',
   		'text_banner',
   		'judul_content',
   		'isi_content',
   		'judul_card',
   		'isi_card',
   		'judul_box1',
   		'isi_box1',
   		'foto_box1',
   		'judul_box2',
   		'isi_box2',
   		'foto_box2',
   		'maps',
   		'judul_screen_fitur',
   		'isi_screen_fitur',
   ];
}
