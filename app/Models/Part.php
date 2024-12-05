<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'probe_id',
        'name',
        'title',
        'price',
        'discount',
        'status',
    ];

    public function probes()
    {
        $probeIds = explode(',', $this->probe_id);

        return Probe::whereIn('id', $probeIds)->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function probe()
    {
        return $this->belongsTo(Probe::class);
    }


}
