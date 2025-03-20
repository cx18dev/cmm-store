<?php

namespace App\Repositories;

use App\Models\CmmQuote;

class CmmQuoteRepository
{
    public function all()
    {
        return CmmQuote::all();
    }
    public function create(array $data)
    {
        return CmmQuote::create($data);
    }

    public function getCount()
    {
        return CmmQuote::count();
    }


    public function delete($id)
    {
        $inquiry = CmmQuote::findOrFail($id);
        $inquiry->delete();
    }
}
