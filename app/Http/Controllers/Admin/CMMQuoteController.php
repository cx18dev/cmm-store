<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\UsedCMMRequest;
use App\Models\UsedCMM;
use App\Repositories\UsedCMMRepository;


class CMMQuoteController extends Controller
{

    protected $UsedCMMRepo;

    public function __construct()
    {
        $this->UsedCMMRepo = new UsedCMMRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->UsedCMMRepo->all();

            return DataTables::of($data)

                ->addColumn('image', function ($row) {
                    return '<img src="' . asset('assets/admin/UsedCMM/' . $row['image']) . '" alt="' . $row['name'] . '" width="50" />';
                })
                ->addColumn('actions', function ($category) {
                    return '<a href="' . route('admin.used-cmm.edit', $category->id) . '" id="edit-' . $category->id . '" class="btn rounded-pill btn-icon btn-outline-secondary"><span class="bx bx-edit-alt"></span></a>
                    <a href="' . route('admin.used-cmm.destroy', $category->id) . '" id="delete-' . $category->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->rawColumns(['id', 'image', 'actions'])
                ->make(true);
        }
        return view('admin.used_cmm.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.used_cmm.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsedCMMRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();

            $destinationPath = public_path('assets/admin/UsedCMM');
            $file->move($destinationPath, $fileName);
            $data['image'] = $fileName;
        } else {
            return back()->withErrors(['image' => 'Invalid file upload.']);
        }

        $this->UsedCMMRepo->create($data);

        // Redirect with success message
        return redirect()->route('admin.used-cmm.index')->with('success', 'Used CMM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usedCMM = $this->UsedCMMRepo->find($id);
        $usedCMM->pc = json_decode($usedCMM->pc, true);

        if (!$usedCMM) {
            return redirect()->route('admin.used-cmm.index')
                ->with('error', 'Selected record not found.');
        }

        return view('admin.used_cmm.form', compact('usedCMM'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsedCMMRequest $request, string $id)
    {
        // Retrieve only the fields that should be updated
        $data = $request->validated();

        $record = UsedCMM::findOrFail($id);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            if (!empty($record->image)) {
                $oldImagePath = public_path('assets/admin/UsedCMM/' . $record->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();

            $destinationPath = public_path('assets/admin/UsedCMM');
            $file->move($destinationPath, $fileName);

            $data['image'] = $fileName;
        }

        $this->UsedCMMRepo->update($id, $data);

        return redirect()->route('admin.used-cmm.index')->with('success', 'Used CMM updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->UsedCMMRepo->delete($id);

        return response()->json(['success' => 'Used CMM deleted successfully.']);
    }
}
