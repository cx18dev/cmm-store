@extends('probes')

<title>@yield('title', 'PH10T PLUS | CMM Online Store')</title>

@php
    $parts = [
        [
            'name' => 'A-5863-5000',
            'price' => 22174,
            'discount' => 20,
        ],
    ];

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
            'value' => 'A axis 105° to 0° in 7.5° steps = 15 positions. <br> B axis ±180° in 7.5° steps = 48 positions.',
        ],
        [
            'key' => 'Total number of positions',
            'value' => '720',
        ],
        [
            'key' => 'Maximum extension bar length',
            'value' => '300 mm using PEL4 extension*',
        ],
        [
            'key' => 'Head mounting',
            'value' => 'Shank to suit your CMM',
        ],
        [
            'key' => 'Probe mounting facility',
            'value' => 'M8 thread',
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
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-10 infobox p-4">
                <h2 class="product-item-name text-center">PH10T PLUS motorised indexing probe head</h2>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="table-outer">
                            <p>The new PH10T PLUS motorized probe head allows complete, rapid, and repeatable
                                inspection of most complex components with minimum human intervention. Full
                                orientation of your TP2, TP6, TP20 or TP200 probe between any of 720 positions,
                                under manual or program control, turns your 3 axis CMM into a 5 axis machine.</p>
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
                        </div>
                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/PH10T/G1-PH10T.jpg') }}" alt="G1-PH10T">
                <img src="{{ asset('assets/probes/PH10T/G2-PH10T.jpg') }}" alt="G2-PH10T">
                <img src="{{ asset('assets/probes/PH10T/G3-PH10T.jpg') }}" alt="G3-PH10T">
            </div>
        </div>
    </div>
@endsection
