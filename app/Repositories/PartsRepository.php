<?php

namespace App\Repositories;

use App\Models\Parts;

class PartsRepository
{
    public function all()
    {
        return Parts::all();
    }

    public function showAll()
    {
        return Parts::all()->map(function ($part) {
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
        return Parts::create($data);
    }

    public function find($id)
    {
        return Parts::find($id);
    }

    public function update($id, array $data)
    {
        $pages = $this->find($id);
        $pages->update($data);
    }

    public function delete($id)
    {
        $pages = Parts::findOrFail($id);
        $pages->delete();
    }
}
