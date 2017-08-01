<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
    	'name', 'img_path', 'img_active_path','alias', 'alt_img', 'alt_img_active'
		];
}
