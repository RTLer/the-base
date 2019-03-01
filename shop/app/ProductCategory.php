<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $fillable = [
        'parent_id',
        'name',
        'slug',
    ];
}
