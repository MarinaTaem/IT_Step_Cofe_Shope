<?php

// Model 4: CoffeeDetail.php
// File: app/Models/CoffeeDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_description',
        'origin',
        'brewing_method',
        'roast_level',
        'price'
    ];

    // protected $casts = [
    //     'price' => 'decimal:2'
    // ];

    public function coffee()
    {
        return $this->hasOne(Coffee::class, 'detail_id');
    }
}