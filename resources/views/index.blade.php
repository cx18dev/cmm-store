@extends('layout.app')

@section('content')
    <section class="marketplace-section">
        <div class="container my-5">
            <div class="row">
                <div class="market-content">
                    <h2>CMM Marketplace Platform</h2>
                    <p>
                        Our platform connects customers directly with top-tier suppliers of CMM (Coordinate Measuring
                        Machine) products and services, eliminating intermediaries to secure the best prices. Whether
                        you need new or used CMM machines, CMM Probes, calibration, retrofitting, or maintenance
                        services, our marketplace offers a streamlined solution for sourcing everything related to
                        CMM technology, all in one place.
                    </p>
                    <div class="py-4 text-center">
                        <img src="{{ asset('assets/images/CMM-Marketplace-Platform.jpg') }}" alt="CMM Marketplace Platform" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
