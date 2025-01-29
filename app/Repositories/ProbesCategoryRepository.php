<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\PartCategory;
use Illuminate\Support\Facades\File;

class ProbesCategoryRepository
{
    public function all()
    {
        return PartCategory::all();
    }

    public function getCount()
    {
        return PartCategory::count();
    }

    public function create(array $data)
    {
        return PartCategory::create([
            'name' => $data['name'],
        ]);
    }

    public function find($id)
    {
        return PartCategory::find($id);
    }

    public function update($id, array $data)
    {
        $probe = $this->find($id);
        $probe->update([
            'name' => $data['name'],

        ]);
    }

    public function delete($id)
    {
        $probe = PartCategory::findOrFail($id);
        $probe->delete();
    }
}
