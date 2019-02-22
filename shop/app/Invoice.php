<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $fillable = [
        'user_id',
        'transaction_key',
        'settled_amount',
        'status',
    ];
}
