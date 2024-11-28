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
        if($probe){
            if (File::exists(public_path('assets/admin/probes/' . $probe->image))) {
                File::delete(public_path('assets/admin/probes/' . $probe->image));
            }
        }
        $probe->delete();
    }

    public function getPartsByProbeSlug($slug)
    {
        $probe = Probe::where('slug', $slug)->first();

        if (!$probe) {
            return [];
        }

        return Part::whereRaw('FIND_IN_SET(?, probe_id)', [$probe->id])->get();
    }
}
