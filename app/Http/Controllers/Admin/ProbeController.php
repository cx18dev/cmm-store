<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ProbeRequest;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\File;
use App\Repositories\ProbeRepository;
use Illuminate\Support\Facades\Storage;

class ProbeController extends Controller
{
    protected $probeRepo;
    protected $categoryRepo;

    public function __construct()
    {
        $this->probeRepo = new ProbeRepository;
        $this->categoryRepo = new CategoryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $probes = $this->probeRepo->all();

            return DataTables::of($probes)
                ->addColumn('id', function ($probe) {
                    return $probe->id;
                })
                ->addColumn('image', function ($probe) {
                    return '<img class="table-img" src="' . asset("assets/admin/probes/$probe->image") . '">';
                })
                ->addColumn('name', function ($probe) {
                    return $probe->name;
                })
                ->addColumn('category', function ($probe) {
                    return $probe->category->name;
                })
                ->addColumn('title', function ($probe) {
                    $words = explode(' ', $probe->title);
                    $chunks = array_chunk($words, 10);

                    $formattedTitle = '';
                    foreach ($chunks as $chunk) {
                        $formattedTitle .= implode(' ', $chunk) . ' <br>';
                    }
                    return $formattedTitle;
                })
                ->addColumn('actions', function ($probe) {
                    return '<a href="' . route('admin.probes.edit', $probe->id) . '" id="edit-' . $probe->id . '" class="btn rounded-pill btn-icon btn-outline-secondary"><span class="bx bx-edit-alt"></span></a>
                    <a href="' . route('admin.probes.destroy', $probe->id) . '" id="delete-' . $probe->id . '" class="btn rounded-pill btn-icon btn-outline-danger"><span class="bx bx-trash"></span></a>';
                })
                ->rawColumns(['id', 'image', 'name', 'category', 'title', 'actions'])
                ->make(true);
        }
        return view('admin.probes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryRepo->all();
        return view('admin.probes.form', compact('categories'));
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
        ]);

        $folderPath = public_path('assets/admin/probes');

        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move($folderPath, $fileName);

        return response()->json([
            'path' => asset("assets/admin/probes/{$fileName}"),
            'fileName' => $fileName,
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProbeRequest $request)
    {
        $data = $request->validated();

        $this->probeRepo->create($data);

        return redirect()->route('admin.probes.index')->with('success', 'Probe created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = $this->categoryRepo->all();
        $probe = $this->probeRepo->find($id);

        if (!$probe) {
            return redirect()->route('admin.probes.index')
                ->with('error', 'Selected record not found.');
        }

        return view('admin.probes.form', compact('probe', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProbeRequest $request, $id)
    {
        // Find the probe using the ID
        $probe = $this->probeRepo->find($id);
        $data = $request->validated();

        // Check if a new image was uploaded
        if ($request->has('image') && $probe['image'] !== $data['image']) {
            // Get the existing image path
            $existingImage = $probe->image;

            // Check if the old image exists and delete it
            if (File::exists(public_path('assets/admin/probes/' . $existingImage))) {
                File::delete(public_path('assets/admin/probes/' . $existingImage));
            }
        }

        // Update the record in the database
        $this->probeRepo->update($id, $data);

        // Redirect with success message
        return redirect()->route('admin.probes.index')->with('success', 'Probe updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->probeRepo->delete($id);

        return response()->json(['success' => 'Probe deleted successfully.']);
    }
}
