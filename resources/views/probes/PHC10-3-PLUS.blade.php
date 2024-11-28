@extends('probes')

<title>@yield('title', 'PHC10-3 PLUS | CMM Online Store')</title>

@php
    $specifications = [
        [
            'key' => 'Data transmission',
            'value' => 'RS232 or USB',
        ],
        [
            'key' => 'Input connectors',
            'value' => '15 way ‘D’ probe',
        ],
        [
            'key' => 'Output connectors',
            'value' => '7 pin DIN or 9 pin D type',
        ],
        [
            'key' => 'Maximum cable length',
            'value' => '50 m (164 ft)',
        ],
        [
            'key' => 'Hand control',
            'value' => 'HCU1 (purchased separately)',
        ],
    ];
@endphp

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-12 infobox p-4">
                <h2 class="product-item-name text-center">PHC10-3 PLUS motorised indexing probe head</h2>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="table-outer">
                            <p>The PHC10-3 PLUS head control receives instructions and processes signals to
                                rotate the angles of the PH10 PLUS series probe heads. The PHC10-3 PLUS is
                                compatible with all PH10 PLUS heads. It has its own internal power supply.</p>
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
        </div>
    </div>
@endsection
