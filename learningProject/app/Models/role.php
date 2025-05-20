<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = ['name', 'permissions'];
    
    protected $casts = [
        'permissions' => 'array', // auto-cast JSON to PHP array
    ];
}
