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
            <div class="card-body">
                <div class="row g-2">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ $cmmQuote->name }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control"
                            value="{{ $cmmQuote->email }}" disabled>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control"
                            value="{{ $cmmQuote->phone_number }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" id="company_name" name="company_name" class="form-control"
                            value="{{ $cmmQuote->company_name }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">CMM Name</label>
                        <input type="text" id="phone" name="phone" class="form-control"
                            value="{{ $cmmQuote->cmm_name }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">CMM Stock Number</label>
                        <input type="text" id="phone" name="phone" class="form-control"
                            value="{{ $cmmQuote->cmm_stock_number }}" disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" disabled>{{ $cmmQuote->message }}</textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer d-flex justify-content-between">
                <a class="btn btn-outline-secondary" href="{{ route('admin.cmm.quotes') }}">Back</a>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script></script>
@endsection
