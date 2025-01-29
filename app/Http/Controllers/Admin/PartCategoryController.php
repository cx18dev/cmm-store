<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use App\Http\Requests\ProbesCategoryRequest;
use App\Repositories\ProbesCategoryRepository;

class PartCategoryController extends Controller
{
    protected $categoryRepo;

    public function __construct()
    {
        $this->categoryRepo = new ProbesCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = $this->categoryRepo->all();

            return DataTables::of($categories)
                ->addColumn('id', function ($category) {
                    return $category->id;
                })
                ->addColumn('name', function ($category) {
                    return $category->name;
                })
            
                ->addColumn('actions', function ($category) {
                    return '<a href="' . route('admin.part-category.edit', $category->id) . '" id="edit-' . $category->id . '" class="btn rounded-pill btn-icon btn-outline-secondary"><span class="bx bx-edit-alt"></span></a>
                    <a href="' . route('admin.part-category.destroy', $category->id) . '" id="delete-' . $category->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->rawColumns(['id', 'name', 'status', 'actions'])
                ->make(true);
        }
        return view('admin.parts_category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.parts_category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProbesCategoryRequest $request)
    {
        $data = $request->validated();

        $this->categoryRepo->create($data);

        // Redirect with success message
        return redirect()->route('admin.part-category.index')->with('success', 'Probes Category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parts_category = $this->categoryRepo->find($id);

        if (!$parts_category) {
            return redirect()->route('admin.category.index')
                ->with('error', 'Selected record not found.');
        }

        return view('admin.parts_category.form', compact('parts_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProbesCategoryRequest $request, $id)
    {
        // Retrieve only the fields that should be updated
        $data = $request->validated();

        $this->categoryRepo->update($id, $data);

        // Redirect with success message
        return redirect()->route('admin.part-category.index')->with('success', 'Category updated successfully.');
        // return redirect()->back()->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryRepo->delete($id);

        return response()->json(['success' => 'Category deleted successfully.']);
    }
}
