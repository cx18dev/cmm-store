<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'title',
        'description',
    ];
}
