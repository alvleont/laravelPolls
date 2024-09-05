<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{

    protected $fillable = [
        'email',
        'token',
        'answers',
        'status',
        'user_data'

    ];

    protected $casts = [
        'answers' => 'array',
        'user_data' => 'array',
    ];
}
