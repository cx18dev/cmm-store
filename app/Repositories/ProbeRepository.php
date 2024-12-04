<?php

namespace App\Repositories;

use App\Models\Part;
use App\Models\Probe;
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
        return Probe::create($data);
    }

    public function find($id)
    {
        return Probe::find($id);
    }

    public function update($id, array $data)
    {
        $probe = $this->find($id);
        $probe->update($data);
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

    public function getPartsByProbeSlug($slug)
    {
        $probe = Probe::with('category')->where('slug', $slug)->first();

        if (!$probe) {
            return [];
        }

        return [
            'probe' => $probe,
            'parts' => Part::whereRaw('FIND_IN_SET(?, probe_id)', [$probe->id])->get(),
        ];
        // return Part::with('probe')->where('probe_id', $probe->id)
        //     ->where('probe_id', $probe->id)
        //     ->get()
        //     ->map(function ($part) {

        //         $part->category_name = $part->probe->category ? $part->probe->category->name : null;
        //         $part->probe_name = $part->probe ? $part->probe->name : null;
        //         $part->probe_image = $part->probe ? $part->probe->image : null;
        //         return $part;
        //     });
    }
}
