@extends('layouts.app')

@section('title', 'Dashboard | Admin CMM Store')

@section('content')

    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            Hello {{ Auth::user()->name }},
                        </h5>
                        <p class="mb-4">
                            You're logged in!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
