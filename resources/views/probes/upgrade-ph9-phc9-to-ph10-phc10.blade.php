@extends('probes')

<title>@yield('title', 'Upgrade PH9 PHC9 To PH10 PHC10 | CMM Online Store')</title>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="category-title">
                    <u>Upgrade PH9 & PHC9 To PH10T/PH10M/PH10MQ PLUS & PHC10-3 PLU</u>
                </h2>

                <div class="text-center">
                    <img src="{{ asset('assets/images/upgrade-ph9-phc9-to-ph10-phc10.jpg') }}" alt="upgrade-ph9-phc9-to-ph10-phc10">
                </div>

                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

            </div>
        </div>
    </div>
@endsection
