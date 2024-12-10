<?php

namespace App\Repositories;

use App\Models\Part;
use App\Models\Probe;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class ProbeRepository
{
    public function all()
    {
        return Probe::with('category')->get();
    }

    public function getCount()
    {
        return Probe::count();
    }

    public function create(array $data)
    {
        return Probe::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'slug' => $data['slug'],
            'image' => $data['image'],
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'] ?? 0,
        ]);
    }

    public function find($id)
    {
        return Probe::find($id);
    }

    public function update($id, array $data)
    {
        $probe = $this->find($id);
        $probe->update([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'slug' => $data['slug'],
            'image' => $data['image'],
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => $data['status'] ?? 0,
        ]);
    }

    public function delete($id)
    {
        $probe = Probe::findOrFail($id);
        if ($probe) {
            if (File::exists(public_path('assets/admin/probes/' . $probe->image))) {
                File::delete(public_path('assets/admin/probes/' . $probe->image));
            }
        }
        $probe->delete();
    }

    public function getByCategoryProbes($category)
    {
        return Probe::where('category_id', $category)->where('status', 1)->get();
    }

    public function getPartsByProbeSlug($slug)
    {
        $probe = Probe::with('category')->where('slug', $slug)->where('status', 1)->first();

        if (!$probe) {
            return [];
        }

        return [
            'probe' => $probe,
            'parts' => Part::whereRaw('FIND_IN_SET(?, probe_id)', [$probe->id])->where('status', 1)->get(),
        ];
    }

    public function getProbeLinks($category)
    {
        $probe = Probe::with('category')->where('category_id', $category)->where('status', 1)->get(['name', 'slug']);
        
        return $probe;
    }

}
