<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Repositories\ProbeRepository;
use App\Http\Requests\CmmQuoteRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\CmmQuoteRepository;

class HomeController extends Controller
{
    protected $partRepo;
    protected $probeRepo;
    protected $categoryRepo;
    protected $cmmQuoteRepo;

    public function __construct()
    {
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
        $this->cmmQuoteRepo = new CmmQuoteRepository;
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

    public function usedCMMs()
    {
        return view('used-cmms');
    }

    public function requestQuote()
    {
        return view('request-quote');
    }

    public function cmmQuoteRequest(CmmQuoteRequest $request)
    {
        $validatedData = $request->validated();

        // Save the CmmQuote data using the repository
        $created = $this->cmmQuoteRepo->create($validatedData);

        if ($created) {
            $formDetails = [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phone_number'],
                'cmm_name' => $validatedData['cmm_name'],
                'cmm_stock_number' => $validatedData['cmm_stock_number'],
                'company_name' => $validatedData['company_name'],
                'message' => $validatedData['message'],
            ];

            // Send the email to the admin
            try {
                Mail::send('emails.cmm-quote', compact('formDetails'), function ($message) use ($formDetails) {
                    $message->from($formDetails['email'], 'CMM Online Store')
                        ->to('info@cmmstore.com')
                        ->subject('CMM Quote Request - ' . $formDetails['email']);
                });

                // Redirect back with success message
                return redirect()->back()->with('success', 'Your request quote has been sent to the admin. Please wait for a response!');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to send email: ' . $e->getMessage());
            }
        }

        // Return error response if data saving fails
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
