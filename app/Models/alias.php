<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alias extends Model
{
    protected $fillable = [
        'alias',
        'alias_actor',
    ];
}
