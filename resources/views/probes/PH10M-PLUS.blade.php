@extends('probes')

<title>@yield('title', 'PH10M/PH10MQ PLUS | CMM Online Store')</title>

@php
    $specifications = [
        [
            'key' => '2σ positional repeatability',
            'value' => '0.4 μm',
        ],
        [
            'key' => 'Cycle time (90° move)',
            'value' => '3.5 seconds',
        ],
        [
            'key' => 'Total angular movement',
            'value' => 'A axis 105° to 0° in 7.5° steps = 15 positions. <br> B axis ±180° in 7.5° steps = 48 positions',
        ],
        [
            'key' => 'Total number of positions',
            'value' => '720',
        ],
        [
            'key' => 'Maximum extension bar length',
            'value' => '300 mm using PAA3 extension*',
        ],
        [
            'key' => 'Head mounting',
            'value' => 'Shank to suit your CMM',
        ],
        [
            'key' => 'Probe mounting facility',
            'value' => 'Auto joint',
        ],
        [
            'key' => 'Probe head control',
            'value' => 'PHC10-3 PLUS (purchased separately)',
        ],
        [
            'key' => 'Dimensions',
            'value' => 'Length 102 mm excluding AM1, width 62 mm',
        ],
        [
            'key' => 'Weight',
            'value' => '645 g',
        ],
    ];
@endphp

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-md-10 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="product-item-name text-center">PH10M PLUS motorised indexing probe head</h2>

                <p>The PH10M PLUS motorized probe head has been developed for the new generation
                    of contact and non-contact scanning probes. It has three times the torque of PH10
                    PLUS, allowing probe extension bars up to 300 mm long to be used.</p>
                <p>The PH10M PLUS has an auto joint mounting.</p>

                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')

                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="table-outer">
                            <h5 class="mt-4 mb-3">Specifications:</h5>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    @forelse ($specifications as $specification)
                                        <tr>
                                            <td>
                                                <p>{!! $specification['key'] !!}<br></p>
                                            </td>
                                            <td>
                                                <p>{!! $specification['value'] !!}<br></p>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            <p>* On all the PH10 PLUS series of probe heads, it is possible to extend beyond
                                300 mm using our range of CF extensions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/PH10M/G1-PH10M.jpg') }}" alt="G1-PH10M">
                <img src="{{ asset('assets/probes/PH10M/G2-PH10M.jpg') }}" alt="G2-PH10M">
                <img src="{{ asset('assets/probes/PH10M/G3-PH10M.jpg') }}" alt="G3-PH10M">
                <img src="{{ asset('assets/probes/PH10M/G4-PH10M.jpg') }}" alt="G4-PH10M">
                <img src="{{ asset('assets/probes/PH10M/G5-PH10M.jpg') }}" alt="G5-PH10M">
            </div>
        </div>
    </div>
@endsection
