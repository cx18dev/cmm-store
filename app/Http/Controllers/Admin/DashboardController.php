<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PartRepository;
use App\Repositories\ProbeRepository;
use App\Repositories\CategoryRepository;

class DashboardController extends Controller
{
    protected $partsRepo;
    protected $probeRepo;
    protected $categoryRepo;

    public function __construct()
    {
        $this->partsRepo = new PartRepository;
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
    }
    
    public function index()
    {
        $parts = $this->partsRepo->getCount();
        $probes = $this->probeRepo->getCount();
        $categories = $this->categoryRepo->getCount();
        return view('admin.dashboard', compact('parts', 'probes', 'categories'));
    }
}
