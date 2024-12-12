@extends('layouts.app')

@section('title', 'Dashboard | Admin CMM Store')

@section('content')

        <div class="col-sm-6 col-xl-3 my-2">
            <div class="card">
                <a href="{{ route('admin.category.index') }}" class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Categories</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">{{ number_format($categories) }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-box bx-collection bx-sm"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 my-2">
            <div class="card">
                <a href="{{ route('admin.probes.index') }}" class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Probes</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">{{ number_format($probes) }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="bx bx-box bxs-package bx-sm"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 my-2">
            <div class="card">
                <a href="{{ route('admin.parts.index') }}" class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Parts</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">{{ number_format($parts) }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="bx bx-box bx-box bx-sm"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 my-2">
            <div class="card">
                <a href="{{ route('admin.quotes') }}" class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Quotes</span>
                            <div class="d-flex align-items-end mt-2">
                                <h3 class="mb-0 me-2">{{ number_format($inquiries) }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-info rounded p-2">
                            <i class="bx bx-box bxs-quote-alt-left bx-sm"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>

@endsection
