<?php

namespace App\Repositories;

use App\Models\Part;
use App\Models\PartCategory;

class PartRepository
{
    public function all()
    {
        return Part::all();
    }

    public function partCategory()
    {
        return PartCategory::get();
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
                'upgrade_to' => $part->upgrade_to,
                'discounted_price' => "$" . number_format($part->price - ($part->price * $part->discount / 100), 2),
            ];
        });
    }

    public function create(array $data)
    {
        return Part::create([
            'probe_id' => $data['probe_id'],
            'name' => $data['name'],
            'title' => $data['title'],
            'price' => $data['price'],
            'discount' => $data['discount'],
            'upgrade_to' => $data['upgrade_to'],
            'status' => $data['status'] ?? 0,
            'part_category_id' => $data['part_category_id'] ?? null,
            'module' => $data['module'] ?? null,
        ]);
    }

    public function find($id)
    {
        return Part::find($id);
    }

    public function update($id, array $data)
    {
        $part = $this->find($id);
        $part->update([
            'probe_id' => $data['probe_id'],
            'name' => $data['name'],
            'title' => $data['title'],
            'price' => $data['price'],
            'discount' => $data['discount'],
            'upgrade_to' => $data['upgrade_to'],
            'status' => $data['status'] ?? 0,
            'part_category_id' => $data['part_category_id'] ?? null,
            'module' => $data['module'] ?? null,
        ]);
    }

    public function delete($id)
    {
        $part = Part::findOrFail($id);
        $part->delete();
    }
}
