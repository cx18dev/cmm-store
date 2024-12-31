@extends('probes')

<title>@yield('title', $probe->name . ' | CMM Online Store')</title>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="category-title">
                    <u>{{ $probe->title }}</u>
                </h2>

                <div class="text-center mb-5">
                    <img src="{{ asset('assets/admin/probes/' . $probe->image) }}"
                        alt="{{ $probe->slug }}">
                </div>

                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

            </div>
        </div>
    </div>
@endsection
