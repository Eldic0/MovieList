<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    protected $fillable = [
        'actor_name',
        'gender',
        'biography',
        'actor_birthday',
        'birthplace',
        'actor_image',
        'popularity',
    ];
}
