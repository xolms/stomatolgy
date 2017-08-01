<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name' , 'work', 'text', 'small_img', 'big_img', 'alt'
    ];
}
