@extends('probes')

<title>@yield('title', 'PH10M-iQ PLUS | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 category">

        <div class="row">
            <div class="col-10 infobox p-4">
                
                @include('layouts.partials.probe-nav')

                <h2 class="product-item-name text-center">PH10M-iQ PLUS motorised indexing probe head</h2>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="table-outer">
                            <p>PH10M-iQ PLUS functions identically to a traditional PH10M PLUS but with
                                the addition of inferred qualification technology. Inferred qualification increases
                                throughput by removing the need to qualify each head position that is used in a
                                measurement program.</p><br>
                            <p>PH10M-iQ PLUS works with all PH10M compatible probes, but only touch-trigger
                                probe configurations can utilize inferred qualification. Scanning probes can be used
                                in traditional PH10M qualification mode but cannot use inferred qualification.</p>
                        </div>
                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/PH10M-IQ/G1-PH10M-iQ-PLUS.jpg') }}" alt="G1-PH10M-iQ-PLUS">
            </div>
        </div>
    </div>
@endsection
