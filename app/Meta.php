<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $fillable = [
			'page', 'title', 'keywords', 'description'
		];
}
