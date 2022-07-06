<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $fillable = [
        'shortlink',
        'link',
        'status'
    ];
}
