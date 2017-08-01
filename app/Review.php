<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rev_id', 'user_id', 'user_photo', 'message', 'time', 'visible', 'name'
    ];

}
