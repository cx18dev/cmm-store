<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsedCMM extends Model
{
    protected $fillable = ['cmm_name', 'slug', 'stock_number', 'measuring_range', 'software', 'probe_head', 'touch_probe', 'image', 'pc', 'availablility'];
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = mb_strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $value)));
    }
}
