@extends('probes')

<title>@yield('title', '5-Axis Motorized Probe Heads | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-4 category">
        <div class="cate-sec">
            {{-- <h3 class="product-item-name">Motorized probe heads</h3> --}}
            <div class="row">
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '5-axis-motorized-probe-heads', 'probes' => 'PH10T-PLUS']) }}">
                        <img src="{{ asset('assets/probes/PH10T/PH10T-PLUS.jpg') }}" alt="PH10T-PLUS">
                        <div class="info">
                            <h5 class="title">PH10T PLUS</h5>
                            <p class="desc">
                                The new PH10T PLUS motorized probe head allows complete, rapid, and repeatable
                                inspection of most complex components with minimum human intervention.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
