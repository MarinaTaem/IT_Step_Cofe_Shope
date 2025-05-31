<?php

// Model 3: Coffee.php
// File: app/Models/Coffee.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail_id',
        'url_image'
    ];

    public function detail()
    {
        return $this->hasOne(CoffeeDetail::class, 'id', 'detail_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating_number');
    }
}