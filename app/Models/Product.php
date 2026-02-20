<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name',
        'slug',
        'image',
        'price',
        'description',
        'in_stock',
        'is_active',
        'in_sale'

    ];

public function user() {
    return $this->belongsTo(User::class);
}

}

