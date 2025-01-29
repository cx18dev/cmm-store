@extends('layouts.app')

@section('title', 'Probe | Admin CMM Store')

@section('content')

    <div class="col-lg-12 mb-4 order-0">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-2" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            @if (isset($probe->id))
                @php
    $action = route('admin.probes.update', $probe->id);
                @endphp
            @else
                @php
    $action = route('admin.probes.store');
                @endphp
            @endif
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="probesForm">
                @csrf
                @if (isset($probe->id))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter Name" value="{{ old('name', $probe->name ?? '') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" name="category_id" id="category_id">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $probe->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control"
                                placeholder="Enter Slug" value="{{ old('slug', $probe->slug ?? '') }}">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-6">
                            <label for="title" class="form-label">Title</label>
                            <textarea id="title" name="title" class="form-control" rows="3" placeholder="Enter Title">{{ old('title', $probe->title ?? '') }}</textarea>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-6">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter Description">{{ old('description', $probe->description ?? '') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-6">
                            <label for="image" class="form-label">Image</label>
                            <div class="dropzone-drag-area form-control" id="previews">
                                <div class="dz-message text-muted opacity-50" data-dz-message>
                                    <span>Drag file here to upload</span>
                                </div>

                                <!-- Hidden Input to Store Image Path -->
                                <input type="hidden" name="image" id="image"
                                    value="{{ isset($probe->image) ? $probe->image : '' }}">

                                <!-- Preview Container -->
                                <div class="d-none" id="dzPreviewContainer">
                                    <div class="dz-preview dz-file-preview">
                                        <div class="dz-photo">
                                            <img class="dz-thumbnail" data-dz-thumbnail>
                                        </div>
                                        <button class="dz-delete border-0 p-0" type="button" data-dz-remove>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="times">
                                                <path fill="#FFFFFF"
                                                    d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="invalid-feedback fw-bold">Please upload an image.</div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check">
                                <input type="checkbox" id="status" name="status" class="form-check-input" value="1"
                                    {{ old('status', $probe->status ?? 0) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('admin.probes.index') }}" class="btn btn-outline-secondary">Close</a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;

        const myDropzone = new Dropzone("#probesForm", {
            previewTemplate: document.querySelector("#dzPreviewContainer").innerHTML,
            url: "{{ route('admin.image.upload') }}",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            },
            maxFiles: 1,
            maxFilesize: 2, // MB
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            thumbnailWidth: 200,
            thumbnailHeight: 200,
            previewsContainer: "#previews",
            init: function() {
                const dropzoneInstance = this;

                // If there's an existing image, add it to the dropzone preview
                const imagePath = document.querySelector('input[name="image"]').value;
                if (imagePath) {
                    const file = {
                        name: 'Uploaded Image',
                        size: 0
                    };
                    const finalImagePath = "{{ asset('assets/admin/probes') }}" + `/${imagePath}`;
                    dropzoneInstance.emit("addedfile", file);
                    dropzoneInstance.emit("thumbnail", file, finalImagePath);
                    document.querySelector('input[name="image"]').value = imagePath;
                }

                // On file upload success, update the hidden input field with the new image path
                this.on("success", function(file, response) {
                    document.querySelector('input[name="image"]').value = response.fileName;
                    console.log("File uploaded successfully:", response.path);
                });

                this.on("error", function(file, response) {
                    console.error("Error uploading file:", response);
                });

                // Handle file removal
                this.on("removedfile", function(file) {
                    document.querySelector('input[name="image"]').value = '';
                });
            }
        });
    </script>
@endsection
