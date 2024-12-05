@extends('layouts.app')

@section('title', 'Category | Admin CMM Store')

@section('style')
    <style>
        .editor-container {
            height: 100vh;
        }

        textarea.tinymce-editor {
            height: 100%;
        }
    </style>
@endsection

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
            @if (isset($category->id))
                @php
                    $action = route('admin.category.update', $category->id);
                @endphp
            @else
                @php
                    $action = route('admin.category.store');
                @endphp
            @endif
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="categoryForm">
                @csrf
                @if (isset($category->id))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-12 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter Name" value="{{ old('name', $category->name ?? '') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control"
                                oninput="replaceSpaceWithDash(event)"
                                {{-- {{ isset($category->slug) && !empty($category->slug) ? 'readonly' : '' }} --}}
                                placeholder="Enter Slug" value="{{ old('slug', $category->slug ?? '') }}">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check">
                                <input type="checkbox" id="status" name="status" class="form-check-input" value="1"
                                    {{ old('status', $category->status ?? 0) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-outline-secondary">Close</a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function replaceSpaceWithDash(event) {
            // Replace spaces with dashes in the input field's value
            event.target.value = event.target.value.replace(/\s+/g, '-');
        }


        $(document).ready(function() {
            // Add a custom rule for pattern validation
            $.validator.addMethod("pattern", function(value, element, param) {
                return this.optional(element) || param.test(value);
            }, "Slug can only contain lowercase letters, numbers, and dashes.");

            $("#categoryForm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    slug: {
                        required: true,
                        pattern: /^[a-zA-Z0-9-]+$/,
                        minlength: 3,
                        maxlength: 50,
                    },
                },
                messages: {
                    slug: {
                        required: "Slug is required.",
                        minlength: "Slug must be at least 3 characters long.",
                        maxlength: "Slug must not exceed 50 characters.",
                        pattern: "Slug can only contain lowercase letters, numbers, and dashes.",
                    },
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
            });
        });
    </script>
@endsection
