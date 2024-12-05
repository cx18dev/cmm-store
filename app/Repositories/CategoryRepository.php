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

    public function getActiveCategories()
    {
        return Category::where('status', 1)->get();
    }

    public function getBySlug($slug)
    {
        return Category::where('status', 1)->where('slug', $slug)->first();
    }

    public function getCount()
    {
        return Category::count();
    }

    public function create(array $data)
    {
        return Category::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'status' => $data['status'] ?? 0
        ]);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function update($id, array $data)
    {
        $probe = $this->find($id);
        $probe->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'status' => $data['status'] ?? 0
        ]);
    }

    public function delete($id)
    {
        $probe = Category::findOrFail($id);
        $probe->delete();
    }
}
