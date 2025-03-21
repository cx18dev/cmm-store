@extends('layouts.guest')

@php
    // $usedCMMs = [
    //     [
    //         'title' => 'IMS-MERLIN 142210 DCC CMM',
    //         'stock' => 'IMS202501',
    //         'measuring_range' => '55" x 88.6" x 39"',
    //         'measuring_range_mm' => '(1400mm X 2250 mm X 1000mm)',
    //         'software' => 'VDMIS-R2025',
    //         'probe_head' => 'Renishaw PH10M Probe Head',
    //         'touch_probe' => 'TP20 RENISHAW UCC-T3 PLUS controller',
    //         'image' => 'IMS-MERLIN-142210-DCC-CMM.jpg',
    //         'image_title' => null,
    //     ],
    //     [
    //         'title' => 'IMS IMPACT-1000',
    //         'stock' => 'IMS202502',
    //         'measuring_range' => '31" x 39" x 26.6"',
    //         'measuring_range_mm' => '(800mm X 1000 mm X 650mm)',
    //         'software' => 'VDMIS-R2025',
    //         'probe_head' => 'Renishaw PH10 Probe Head',
    //         'touch_probe' => 'TP20',
    //         'image' => 'IMS-IMPACT-1000.jpg',
    //         'image_title' => '2 CMMs available of this size',
    //     ],
    //     [
    //         'title' => 'IMS IMPACT-750',
    //         'stock' => 'IMS202503',
    //         'measuring_range' => '29.5" x 29.5" x 21.6"',
    //         'measuring_range_mm' => '(750mm X 750 mm X 550mm)',
    //         'software' => 'VDMIS-R2025',
    //         'probe_head' => 'Renishaw PH10 Probe Head',
    //         'touch_probe' => 'TP20',
    //         'image' => 'IMS-IMPACT-750.jpg',
    //         'image_title' => '4 CMMs available of this size',
    //     ],
    //     [
    //         'title' => 'IMS IMPACT-600',
    //         'stock' => 'IMS202504',
    //         'measuring_range' => '19.6" x 23.6" x 17.7"',
    //         'measuring_range_mm' => '(500mm X 600 mm X 450mm)',
    //         'software' => 'VDMIS-R2025',
    //         'probe_head' => 'Renishaw PH10 Probe Head',
    //         'touch_probe' => 'TP20',
    //         'image' => 'IMS-IMPACT-600.png',
    //         'image_title' => '3 CMMs available of this size',
    //     ],
    // ];
@endphp

@section('content')
    <section class="marketplace-section">
        <div class="container my-5">
            <div class="row">
                <div class="market-content">
                    <h2>Pre-Owned CMMs with Like-New Performance</h2>
                    <p>
                        Our reconditioned CMMs come equipped with the latest VDMIS-R2025 Metrology software, brand-new PCs
                        with Windows 11, and
                        a 6-month warranty—offering you top-tier performance at a fraction of the cost.
                    </p>
                </div>
                <div class="used-cmm">
                    @if ($usedCMMs->count() > 0)
                        @foreach ($usedCMMs as $data)
                            <div class="row card flex-row shadow my-3">
                                <div class="col-lg-6 col-md-12 p-3">
                                    <div class="used-cmm-image">
                                        <img src="{{ asset('assets//admin/UsedCMM/' . $data['image']) }}"
                                            alt="{{ $data['cmm_name'] }}" class="img-fluid">
                                        <h6 class="text-center pt-2 fw-bold text-danger">
                                            @if (!empty($data['availablility']))
                                                {{ $data['availablility'] }} CMMs available of this size
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 p-3 cmm-card-details">
                                    <h3 class="used-cmm-header text-center mb-3">{{ $data['cmm_name'] }}</h3>
                                    <div class="used-cmm-content">
                                        <p><strong>Stock#:</strong> {{ $data['stock_number'] }}</p>
                                        <p><strong>Measuring Range:</strong>{{ $data['measuring_range'] }}<span
                                                class="theme-color ms-1">{{ $data['measuring_range_mm'] }}</span>
                                        </p>
                                        <p><strong>Software: </strong> {{ $data['software'] }}</p>
                                        <p><strong>Probe Head: </strong> {{ $data['probe_head'] }}</p>
                                        <p><strong>Touch Probe: </strong> {{ $data['touch_probe'] }}</p>
                                        @php
                                            $data['pc'] = json_decode($data->pc, true);
                                        @endphp
                                        <div class="d-flex">
                                            <p><strong>PC:</strong></p>
                                            <ul>
                                                @foreach ($data->pc as $pcItem)
                                                    <li>{{ $pcItem }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="used-cmm-request text-center">
                                        <a href="{{ route('request.quote', ['slug' => $data['slug']]) }}">
                                            <img src="{{ asset('assets/images/request.png') }}" alt="Used CMM Logo"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
