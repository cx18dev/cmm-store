<?php

namespace App\Repositories;

use App\Models\Probe;
use Illuminate\Support\Facades\File;

class ProbeRepository
{
    public function all()
    {
        return Probe::all();
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
}
