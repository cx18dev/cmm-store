<?php

namespace App\Repositories;

use App\Models\UsedCMM;
use Illuminate\Support\Facades\File;

class UsedCMMRepository
{
    public function all()
    {
        return UsedCMM::all();
    }

    public function getActiveCategories()
    {
        return UsedCMM::where('status', 1)->get();
    }

    public function getBySlug($slug)
    {
        return UsedCMM::where('status', 1)->where('slug', $slug)->first();
    }

    public function getCount()
    {
        return UsedCMM::count();
    }

    public function create(array $data)
    {
        return UsedCMM::create([
            'cmm_name' => $data['cmm_name'],
            'slug' => $data['cmm_name'],
            'stock_number' => $data['stock_number'],
            'measuring_range' => $data['measuring_range'],
            'software' => $data['software'],
            'probe_head' => $data['probe_head'],
            'touch_probe' => $data['touch_probe'],
            'image' => $data['image'],
            'availablility' => $data['availablility'],
            'pc' => json_encode($data['pc']),
        ]);
    }

    public function find($id)
    {
        return UsedCMM::find($id);
    }

    public function update($id, array $data)
    {
        $usedCMM = $this->find($id);
        $usedCMM->update([
            'cmm_name' => $data['cmm_name'],
            'slug' => $data['cmm_name'],
            'stock_number' => $data['stock_number'],
            'measuring_range' => $data['measuring_range'],
            'software' => $data['software'],
            'probe_head' => $data['probe_head'],
            'touch_probe' => $data['touch_probe'],
            'image' => $data['image'] ?? $usedCMM->image,
            'availablility' => $data['availablility'],
            'pc' => json_encode($data['pc']),
        ]);
    }

    public function delete($id)
    {
        $usedCMM = UsedCMM::findOrFail($id);

        if (!empty($usedCMM->image)) {
            $oldImagePath = public_path('assets/admin/UsedCMM/' . $usedCMM->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $usedCMM->delete();
    }
}
