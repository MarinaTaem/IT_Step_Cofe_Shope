<?php

// Model 6: Rating.php
// File: app/Models/Rating.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coffee_id',
        'rating_number'
    ];

    protected $casts = [
        'rating_number' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(Account::class, 'user_id');
    }

    public function coffee()
    {
        return $this->belongsTo(Coffee::class);
    }
}