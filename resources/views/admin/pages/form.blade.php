@extends('layouts.app')

@section('title', 'Pages | Admin CMM Store')

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
            @if (isset($page->id))
                @php
                    $action = route('admin.pages.update', $page->id);
                @endphp
            @else
                @php
                    $action = route('admin.pages.store');
                @endphp
            @endif
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="pagesForm">
                @csrf
                @if (isset($page->id))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-4 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Enter Title" value="{{ old('title', $page->title ?? '') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control"
                                {{ isset($page->slug) && !empty($page->slug) ? 'disabled="disabled"' : '' }}
                                placeholder="Enter Slug" value="{{ old('slug', $page->slug ?? '') }}">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category" id="category"
                                {{ isset($page->category) && !empty($page->category) ? 'disabled="disabled"' : '' }}>
                                <option value="" selected>Select Category</option>
                                <option value="navbar"
                                    {{ (isset($page->category) && $page->category == 'navbar') || old('category') == 'navbar' ? 'selected' : '' }}>
                                    Navbar
                                </option>
                                <option value="software-link"
                                    {{ (isset($page->category) && $page->category == 'software-link') || old('category') == 'software-link' ? 'selected' : '' }}>
                                    Software Link
                                </option>
                                <option value="inquiry"
                                    {{ (isset($page->category) && $page->category == 'inquiry') || old('category') == 'inquiry' ? 'selected' : '' }}>
                                    Inquiry
                                </option>
                            </select>
                            @error('category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6 mb-6">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="3">{{ old('meta_keywords', $page->meta_keywords ?? '') }}</textarea>
                            @error('meta_keywords')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-6">
                            <label for="meta_description" class="form-label">Meta Keywords</label>
                            <textarea id="meta_description" name="meta_description" class="form-control" rows="3">{{ old('meta_description', $page->meta_description ?? '') }}</textarea>
                            @error('meta_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="content" class="form-label">Content</label>
                            <div class="editor-container">
                                <textarea id="content" name="content" class="form-control tinymce-editor" rows="10">{{ old('content', $page->content ?? '') }}</textarea>
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-secondary">Close</a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/j8or6hn0u943kr0logs02xbdxg6njjlrezfeo6grmf6ofokx/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: '#content',
                height: '100%',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code fullscreen preview ',
                toolbar: 'undo redo blocks fontfamily fontsize forecolor styleselect bold italic underline strikethrough link image media alignleft aligncenter alignright alignjustify bullist numlist lineheight outdent indent table code fullscreen preview ',
                extended_valid_elements: "iframe[src|frameborder|style|scrolling|class|width|height|name|align]"
            }).join(' ');
        });
    </script>

@endsection
