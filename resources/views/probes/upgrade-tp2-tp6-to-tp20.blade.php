@extends('probes')

<title>@yield('title', $probe->name . ' | CMM Online Store')</title>

<style>
    .part-img {
        border: 1px solid gray;
        border-radius: 15px;
        object-fit: contain;
        object-position: center;
        box-shadow: 0 .5rem 1rem rgba(var(--bs-body-color-rgb), .15);
    }
</style>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="category-title">
                    <u>{{ $probe->title }}</u>
                </h2>

                <div class="row mb-5">
                    <div class="col-6">
                        <img class="part-img" src="{{ asset('assets/probes/A-1032-1100.jpg') }}" alt="{{ $probe->slug }}">
                    </div>
                    <div class="col-6">
                        <img class="part-img" src="{{ asset('assets/probes/A-1032-1200.jpg') }}" alt="{{ $probe->slug }}">
                    </div>
                </div>

                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

            </div>
        </div>
    </div>
@endsection
