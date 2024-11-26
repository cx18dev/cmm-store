@extends('probes')

<title>@yield('title', 'RBE Repair By Exchange | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-4 category">
        <div class="cate-sec">
            <h2 class="category-title"><u>RBE Repair By Exchange</u></h2>
            {{-- <div class="row">
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('probes', ['category' => '5-axis-motorized-probe-heads', 'probes' => 'PH10T-PLUS']) }}">
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
            </div> --}}
            <div class="row">
                <div class="col-12 infobox p-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/thumbnails/coming-soon.png') }}" alt="Coming Soon">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
