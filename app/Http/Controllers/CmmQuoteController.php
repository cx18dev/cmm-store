<?php

namespace App\Http\Controllers;

use App\Repositories\CmmQuoteRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class CmmQuoteController extends Controller
{

    protected $cmmquoteRepo;

    public function __construct()
    {
        $this->cmmquoteRepo = new CmmQuoteRepository;
    }

    public function cmmquotes(Request $request)
    {
        $quotes = $this->cmmquoteRepo->all();
        if ($request->ajax()) {
            return DataTables::of($quotes)
                ->addColumn('created_at', function ($quotes) {
                    return date('H:i A, d-m-y', strtotime($quotes->created_at));
                })
                ->addColumn('actions', function ($quotes) {
                    return '<a href="' . route('admin.cmm.quote.show', $quotes->id) . '" class="btn rounded-pill btn-icon btn-outline-info"><span class="bx bx-show-alt"></span></a>
                    <a href="' . route('admin.cmm.quote.destroy', $quotes->id) . '" id="delete-' . $quotes->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->editColumn('cmm_name', function ($row) {
                    if (isset($row['cmm_name'])) {
                        return \Helper::getCMMName($row['cmm_name']);
                    }
                    return ''; // or return a default value if not set
                })
                ->rawColumns(['created_at', 'actions', 'cmm_name'])
                ->make(true);
        }
        return view('admin.cmm_quotes.index');
    }

    public function cmmquoteShow(Request $request) {}


    public function cmmquoteDestroy(string $id) {}
}
