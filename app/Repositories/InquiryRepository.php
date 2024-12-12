<?php

namespace App\Repositories;

use App\Models\Inquiry;

class InquiryRepository
{
    public function all()
    {
        return Inquiry::all();
    }
    public function create(array $data)
    {
        return Inquiry::create($data);
    }

    public function getCount()
    {
        return Inquiry::count();
    }

    public function find($id)
    {
        return Inquiry::find($id);
    }

    public function update($id, array $data)
    {
        $inquiry = $this->find($id);
        $inquiry->update($data);
    }

    public function delete($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->delete();
    }
}
