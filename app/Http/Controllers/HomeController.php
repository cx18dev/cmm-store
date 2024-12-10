<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Repositories\ProbeRepository;
use App\Repositories\CategoryRepository;

class HomeController extends Controller
{
    protected $partRepo;
    protected $probeRepo;
    protected $categoryRepo;

    public function __construct()
    {
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
    }

    public function probes($category, $probSlug = null)
    {
        $viewPath = null;
        $data = [];

        // Retrieve category by slug if provided
        $categoryData = $this->categoryRepo->getBySlug($category);

        // If category is not found, abort early with 404
        if (!$categoryData) {
            abort(404, 'Category not found.');
        }
        $data['category'] = $categoryData;

        // If no slug is provided, show the category view
        if ($probSlug === null) {
            $data['probes'] = $this->probeRepo->getByCategoryProbes($categoryData->id);
            $viewPath = 'category';
        } else {
            // If a slug is provided, get parts for the specific probe
            $partsData = $this->probeRepo->getPartsByProbeSlug($probSlug);

            if (!$partsData) {
                abort(404, 'Probe not found.');
            }

            $data['parts'] = $partsData['parts'];
            $data['probe'] = $partsData['probe'];
            $viewPath = "probes.$probSlug";
        }

        // Get all probe links for navigation
        $data['probeLinks'] = $this->probeRepo->getProbeLinks($categoryData->id);

        // Return the appropriate view if it exists, otherwise 404
        if ($viewPath && View::exists($viewPath)) {
            return view($viewPath, $data);
        }

        abort(404, 'View not found or invalid category path.');
    }
}
