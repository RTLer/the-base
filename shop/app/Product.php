<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'category_id',
        'user_id',
        'name',
        'code',
        'price',
        'description',
        'image',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
