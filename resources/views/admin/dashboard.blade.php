@extends('layouts.app')

@section('title', 'Dashboard | Admin CMM Store')

@section('content')

    <div class="row g-6">
        <!-- Card Border Shadow -->
        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('admin.category.index') }}" class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-box bx-collection"></i></span>
                        </div>
                        <h4 class="mb-0">Categories: {{ number_format($categories) }}</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('admin.parts.index') }}" class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-package bx-sm"></i></span>
                        </div>
                        <h4 class="mb-0">Probes: {{ number_format($probes) }}</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('admin.probes.index') }}" class="card card-border-shadow-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-box bx-sm"></i></span>
                        </div>
                        <h4 class="mb-0">Parts: {{ number_format($parts) }}</h4>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-danger h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-danger"><i
                                    class="bx bx-git-repo-forked bx-sm"></i></span>
                        </div>
                        <h4 class="mb-0">27</h4>
                    </div>
                    <p class="mb-2">Deviated from route</p>
                    <p class="mb-0">
                        <span class="text-heading fw-medium me-2">+4.3%</span>
                        <span class="text-muted">than last week</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-border-shadow-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-time-five bx-sm"></i></span>
                        </div>
                        <h4 class="mb-0">13</h4>
                    </div>
                    <p class="mb-2">Late vehicles</p>
                    <p class="mb-0">
                        <span class="text-heading fw-medium me-2">-2.5%</span>
                        <span class="text-muted">than last week</span>
                    </p>
                </div>
            </div>
        </div> --}}
    </div>

@endsection
