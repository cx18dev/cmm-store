@extends('probes')

<title>@yield('title', '3-axis systems | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-5 category">
        @include('layouts.partials.head')

        @include('layouts.partials.coordinate')

        @include('layouts.partials.accessories')
    </div>
@endsection
