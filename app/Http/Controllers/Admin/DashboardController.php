<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PartsRepository;
use App\Repositories\ProbeRepository;

class DashboardController extends Controller
{
    protected $partsRepo;
    protected $probeRepo;

    public function __construct()
    {
        $this->partsRepo = new PartsRepository;
        $this->probeRepo = new ProbeRepository;
    }
    
    public function index()
    {
        $parts = $this->partsRepo->getCount();
        $probes = $this->probeRepo->getCount();
        return view('admin.dashboard', compact('parts', 'probes'));
    }
}
