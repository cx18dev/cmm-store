@extends('probes')

<title>@yield('title', 'PH10MQ PLUS | CMM Online Store')</title>

@php
    $specifications = [
        [
            'key' => 'Head mounting',
            'value' => 'Direct to quill',
        ],
        [
            'key' => 'Dimensions',
            'value' => 'Length 73 mm, width 80 mm',
        ],
        [
            'key' => 'Weight',
            'value' => '730 g',
        ],
    ];
@endphp

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-md-10 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <h2 class="product-item-name text-center">PH10MQ PLUS motorised indexing probe head</h2>

                <p>The PH10MQ PLUS can be mounted vertically inside the CMM’s quill for a greater
                    working envelope by increasing the Z axis travel. The specification of the PH10MQ
                    PLUS is identical to that of the PH10M PLUS, with the following exceptions:</p>

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
