<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryRepository
{
    public function all()
    {
        return Category::all();
    }

    public function getCount()
    {
        return Category::count();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function update($id, array $data)
    {
        $probe = $this->find($id);
        $probe->update($data);
    }

    public function delete($id)
    {
        $probe = Category::findOrFail($id);
        $probe->delete();
    }
}
