@extends('probes')

<title>@yield('title', 'Upgrade PH9/PHC9/TP2/TP6 TO PH10/PHC10/TP20 | CMM Online Store')</title>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="category-title">
                    <u>Upgrade PH9 & PHC9 & TP2/TP6 To PH10T/PH10M/PH10MQ PLUS & PHC10-3 PLUS & TP20 WITH 3 MODULES</u>
                </h2>

                <div class="text-center mb-5">
                    <img src="{{ asset('assets/images/upgrade-ph9-phc9-tp2-tp6-to-ph10-phc10-tp20.jpg') }}"
                        alt="upgrade-ph9-phc9-tp2-tp6-to-ph10-phc10-tp20">
                </div>

                <h4 class="text-danger"><strong>NOTE:</strong> The PH10 Upgrade kits include free TP20 modules (3 off) and can be ordered in any
                    combination of standard, medium, or extended versions.</h4>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

            </div>
        </div>
    </div>
@endsection
