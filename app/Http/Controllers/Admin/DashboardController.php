<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Repositories\PartRepository;
use App\Repositories\ProbeRepository;
use App\Repositories\InquiryRepository;
use App\Repositories\CategoryRepository;

class DashboardController extends Controller
{
    protected $partsRepo;
    protected $probeRepo;
    protected $categoryRepo;
    protected $inquiryRepo;

    public function __construct()
    {
        $this->partsRepo = new PartRepository;
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
        $this->inquiryRepo = new InquiryRepository;
    }
    
    public function index()
    {
        $parts = $this->partsRepo->getCount();
        $probes = $this->probeRepo->getCount();
        $categories = $this->categoryRepo->getCount();
        $inquiries = $this->inquiryRepo->getCount();
        return view('admin.dashboard', compact('parts', 'probes', 'categories', 'inquiries'));
    }

    public function quotes(Request $request)
    {
        $quotes = $this->inquiryRepo->all();
        if ($request->ajax()) {
            return DataTables::of($quotes)
                ->addColumn('created_at', function ($quotes) {
                    return date('H:i A, d-m-y', strtotime($quotes->created_at));
                })
                ->addColumn('actions', function ($quotes) {
                    return '<a href="' . route('admin.quote.show', $quotes->id) . '" class="btn rounded-pill btn-icon btn-outline-info"><span class="bx bx-show-alt"></span></a>
                    <a href="' . route('admin.quote.destroy', $quotes->id) . '" id="delete-' . $quotes->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->rawColumns(['created_at', 'actions'])
                ->make(true);
        }
        return view('admin.quotes.index');
    }

    public function quoteShow(string $id)
    {
        $quote = $this->inquiryRepo->find($id);
        
        if($quote){
            return view('admin.quotes.form', compact('quote'));
        }
        return redirect()->route('admin.quotes')->with('warning', "Record does not found!");
    }

    public function quoteDestroy(string $id)
    {
        $this->inquiryRepo->delete($id);

        return response()->json(['success' => 'Quote deleted successfully.']);
    }
}
