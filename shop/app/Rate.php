<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $fillable = [
        'user_id',
        'rate',
        'comment',
        'code',
        'price',
        'description',
        'image',
    ];
}
