<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $fillable = [
    	'name', 'name_rus', 'page', 'bg_path'
		];
}
