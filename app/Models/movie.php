<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [
        'movie_title',
        'movie_desc',
        'movie_release',
        'movie_image',
        'movie_bgimage',
    ];
}
