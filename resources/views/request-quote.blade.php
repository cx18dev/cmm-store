@extends('layouts.guest')
@php
    $usedCMMs = [
        [
            'id' => 1,
            'title' => 'IMS-MERLIN 142210 DCC CMM',
            'stock' => 'IMS202501',
        ],
        [
            'id' => 2,
            'title' => 'IMS IMPACT-1000',
            'stock' => 'IMS202502',
        ],
        [
            'id' => 3,
            'title' => 'IMS IMPACT-750',
            'stock' => 'IMS202503',
        ],
        [
            'id' => 4,
            'title' => 'IMS IMPACT-600',
            'stock' => 'IMS202504',
        ],
    ];

@endphp
@section('content')
    <div class="marketplace-section container my-5">
        <div class="market-content">
            <h2 class="text-center mb-5">Request Quote</h3>
        </div>

        @if (session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <section class="cust-form-sec relative shadow mt-0">
            <div class="container">
                <div class="row d-flex align-items-center">

                    <!-- Form Section -->
                    <form id="request-quote-form" action="{{ route('cmmQuoteRequest') }}" method="POST">
                        @csrf
                        <div class="form-container">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label fw-bold">Name:</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" id="name"
                                        name="name" placeholder="Enter Name">
                                    @if ($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email:</label>
                                    <input type="email" class="form-control" value="{{ old('email') }}" id="email"
                                        name="email" placeholder="Enter Email">
                                    @if ($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone_number" class="form-label fw-bold">Phone:</label>
                                    <input type="tel" class="form-control" value="{{ old('phone_number') }}"
                                        id="phone_number" name="phone_number" placeholder="Enter Phone">
                                    @if ($errors->has('phone_number'))
                                        <div class="text-danger">{{ $errors->first('phone_number') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company_name" class="form-label fw-bold">Company Name:</label>
                                    <input type="text" class="form-control" value="{{ old('company_name') }}"
                                        id="company_name" name="company_name" placeholder="Enter Company Name">
                                    @if ($errors->has('company_name'))
                                        <div class="text-danger">{{ $errors->first('company_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cmm_name" class="form-label fw-bold">CMM Name:</label>
                                    <input name="cmm_name" id="cmm_name" class="form-control"
                                        value="{{ isset($usedCMM) ? $usedCMM->cmm_name : '' }}" readonly>
                                    @if ($errors->has('cmm_name'))
                                        <div class="text-danger">{{ $errors->first('cmm_name') }}</div>
                                    @endif
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="cmm_stock_number" class="form-label fw-bold">CMM Stock Number:</label>
                                    <input type="text" value="{{ isset($usedCMM) ? $usedCMM->stock_number : '' }}"
                                        class="form-control" readonly id="cmm_stock_number" name="cmm_stock_number"
                                        placeholder="Enter CMM Stock Number">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="message" class="form-label fw-bold">Additional Information:</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter Message" rows="3">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <div class="text-danger">{{ $errors->first('message') }}</div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="spinner-border spinner-border-sm me-2 d-none" id="spinner"
                                            role="status" aria-hidden="true"></span>
                                        SEND
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@section('script')
    <script></script>
@endsection
@endsection
