<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Probe extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'title',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
