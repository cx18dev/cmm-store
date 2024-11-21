<?php

namespace App\Repositories;

use App\Models\Part;

class PartsRepository
{
    public function all()
    {
        return Part::all();
    }

    public function getCount()
    {
        return Part::count();
    }

    public function showAll()
    {
        return Part::all()->map(function ($part) {
            return [
                'name' => $part->name,
                'title' => $part->title,
                'price' => "$".number_format($part->price, 2),
                'discount' => number_format($part->discount, 2) . "%",
                'discounted_price' => "$" . number_format($part->price - ($part->price * $part->discount / 100), 2),
            ];
        });
    }

    public function create(array $data)
    {
        return Part::create($data);
    }

    public function find($id)
    {
        return Part::find($id);
    }

    public function update($id, array $data)
    {
        $part = $this->find($id);
        $part->update($data);
    }

    public function delete($id)
    {
        $part = Part::findOrFail($id);
        $part->delete();
    }
}
