@extends('probes')

<title>@yield('title', 'Upgrade PH9 To PH10 Series | CMM Online Store')</title>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="category-title">
                    <u>Upgrade PH9 probe head only to PH10T OR PH10M OR PH10MQ PLUS Probe head only</u>
                </h2>

                <div class="text-center">
                    <img src="{{ asset('assets/images/upgrade-PH9-to-PH10-series.jpg') }}" alt="upgrade-PH9-to-PH10-series">
                </div>

                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

            </div>
        </div>
    </div>
@endsection
