@extends('probes')

<title>@yield('title', 'PHC10-3 PLUS | CMM Online Store')</title>

@section('style')
    <style>
        .table-outer table td {
            width: auto !important;
        }

        .table-outer.specification table td {
            width: 50% !important;
        }

        .table-outer tr td {
            font-weight: normal;
        }
    </style>
@endsection

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-12 infobox p-5">
                <div class="text-center">
                    <img src="{{ asset('assets/thumbnails/coming-soon.png') }}" alt="Coming Soon">
                </div>
                
                <!-- Get Quote Form Section -->
                {{-- @include('layouts.partials.get-quote') --}}
            </div>
        </div>
    </div>
@endsection
