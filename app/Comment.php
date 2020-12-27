<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = [
        'website', 'email', 'text','post_id',
    ];
}
