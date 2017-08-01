<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
    	'page', 'alias', 'position', 'text', 'title'
		];
}
