@extends('layouts.guest')

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
