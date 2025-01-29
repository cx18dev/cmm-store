<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartCategory extends Model
{
    protected $fillable = ['name', 'module'];

    public function parts()
    {
        return $this->hasMany(Part::class, 'part_category_id', 'id');
    }
}
