<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public $fillable = [
        'user_id',
        'product_id',
        'count',
    ];
}
