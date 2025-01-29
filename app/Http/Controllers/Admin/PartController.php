<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use App\Repositories\PartRepository;
use App\Repositories\ProbeRepository;

class PartController extends Controller
{
    protected $partsRepo;
    protected $probeRepo;

    public function __construct()
    {
        $this->partsRepo = new PartRepository;
        $this->probeRepo = new ProbeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $parts = $this->partsRepo->all();

            return DataTables::of($parts)
                ->addColumn('id', function ($part) {
                    return $part->id;
                })
                ->addColumn('name', function ($part) {
                    return $part->name;
                })
                ->addColumn('probe', function ($part) {
                    $probes = $part->probes()->pluck('name')->toArray();

                    $badgeHTML = array_map(function ($chunk) {
                        return implode(' ', array_map(function ($probe) {
                            return '<span class="badge bg-label-dark m-1">' . e($probe) . '</span>';
                        }, $chunk));
                    }, array_chunk($probes, 3));

                    return implode('<br>', $badgeHTML);
                })
                ->addColumn('price', function ($part) {
                    return "$" . number_format($part->price, 2);
                })
                ->addColumn('discount', function ($part) {
                    return $part->discount . "%";
                })
                ->addColumn('discounted_price', function ($part) {
                    return "$" . number_format($part->price * (1 - $part->discount / 100), 2);
                })
                ->addColumn('status', function ($part) {
                    if ($part->status) {
                        $status = '<span class="badge bg-label-success m-1">Active</span>';
                    } else {
                        $status = '<span class="badge bg-label-danger m-1">Inactive</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($part) {
                    return '<a href="' . route('admin.parts.edit', $part->id) . '" id="edit-' . $part->id . '" class="btn rounded-pill btn-icon btn-outline-secondary"><span class="bx bx-edit-alt"></span></a>
                    <a href="' . route('admin.parts.destroy', $part->id) . '" id="delete-' . $part->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->rawColumns(['id', 'name', 'probe', 'price', 'discount', 'discounted_price', 'status', 'actions'])
                ->make(true);
        }
        return view('admin.parts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $probes = $this->probeRepo->all();
        $partCategories = $this->partsRepo->partCategory();
        return view('admin.parts.form', compact('probes', 'partCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartRequest $request)
    {
        $data = $request->validated();

        if(is_array($data['probe_id'])){
            $data['probe_id'] = implode(",", $data['probe_id']);
        }

        $this->partsRepo->create($data);

        // Redirect with success message
        return redirect()->route('admin.parts.index')->with('success', 'Part created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $part = $this->partsRepo->find($id);
        $probes = $this->probeRepo->all();
        $partCategories = $this->partsRepo->partCategory();
        if (!$part) {
            return redirect()->route('admin.parts.index')
                ->with('error', 'Selected record not found.');
        }

        return view('admin.parts.form', compact('part', 'probes', 'partCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartRequest $request, $id)
    {
        // Retrieve only the fields that should be updated
        $data = $request->validated();

        if (is_array($data['probe_id'])) {
            $data['probe_id'] = implode(",", $data['probe_id']);
        }

        $this->partsRepo->update($id, $data);

        // Redirect with success message
        return redirect()->route('admin.parts.index')->with('success', 'Part updated successfully.');
        // return redirect()->back()->with('success', 'Parts updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->partsRepo->delete($id);

        return response()->json(['success' => 'Part deleted successfully.']);
    }
}
