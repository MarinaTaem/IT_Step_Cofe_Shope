<?php

// Model 5: Comment.php
// File: app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coffee_id',
        'content'
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
