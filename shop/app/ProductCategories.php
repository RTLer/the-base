<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    public $fillable = [
        'parent_id',
        'name',
        'slug',
    ];
}
