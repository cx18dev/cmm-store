@extends('probes')

<title>@yield('title', 'PHC10-3 PLUS with internal PI200-3 | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-10 infobox p-4">

                @include('layouts.partials.probe-nav')
                
                <h2 class="product-item-name text-center">PHC10-3 PLUS with internal PI200-3 probe head controller</h2>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="table-outer">
                            <p>This variant of the PHC103 PLUS controller includes a prefitted PI2003
                                interface card in a single 1U case.</p>
                        </div>
                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/PHC10-3-PLUS-PI200-3.png') }}" alt="G1-PHC10-3-PLUS-PI200-3">
            </div>
        </div>
    </div>
@endsection
