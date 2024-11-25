@extends('probes')

<title>@yield('title', '3-Axis Motorized Probe Heads | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-4 category">
        <div class="cate-sec">
            <h2 class="category-title"><u>3-Axis Motorized Probe Heads</u></h2>
            <div class="row">
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10T-PLUS']) }}">
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
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10M-PLUS']) }}">
                        <img src="{{ asset('assets/probes/PH10M/PH10M-PLUS.jpg') }}" alt="PH10M-PLUS">
                        <div class="info">
                            <h5 class="title">PH10M PLUS</h5>
                            <p class="desc">
                                The PH10M PLUS motorized probe head has been developed for the new generation
                                of contact and non-contact scanning probes. It has three times the torque of PH10
                                PLUS, allowing probe extension bars up to 300 mm long to be used.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10MQ-PLUS']) }}">
                        <img src="{{ asset('assets/probes/PH10M-IQ/PH10MQ-PLUS.png') }}" alt="PH10MQ-PLUS">
                        <div class="info">
                            <h5 class="title">PH10MQ PLUS</h5>
                            <p class="desc">
                                The PH10MQ PLUS can be mounted vertically inside the CMM’s quill for a greater
                                working envelope by increasing the Z axis travel.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10M-iQ-PLUS']) }}">
                        <img src="{{ asset('assets/probes/PH10M-IQ/PH10M-iQ-PLUS.jpg') }}" alt="PH10M-iQ-PLUS">
                        <div class="info">
                            <h5 class="title">PH10M-iQ PLUS</h5>
                            <p class="desc">
                                PH10M-iQ PLUS functions identically to a traditional PH10M PLUS but with
                                the addition of inferred qualification technology.
                            </p>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'AM1-AM2-adjustment-modules']) }}">
                        <img src="{{ asset('assets/probes/AM1-AM2.png') }}" alt="AM1-AM2">
                        <div class="info">
                            <h5 class="title">AM1/AM2</h5>
                            <p class="desc">
                                The AM1 adjustment module is designed for use with the PH10T and PH10M
                                probe heads. The AM2 is designed for the PH10MQ probe heads.
                            </p>
                        </div>
                    </a>
                </div> --}}
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PHC10-3-PLUS']) }}">
                        <img src="{{ asset('assets/probes/PHC10-3-PLUS.png') }}" alt="PHC10-3-PLUS">
                        <div class="info">
                            <h5 class="title">PHC10-3 PLUS</h5>
                            <p class="desc">
                                The PHC10-3 PLUS head control receives instructions and processes signals to
                                rotate the angles of the PH10 PLUS series probe heads.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PHC10-3-PLUS-with-internal-PI200-3']) }}">
                        <img src="{{ asset('assets/probes/PHC10-3-PLUS-PI200-3.png') }}" alt="PHC10-3-PLUS-PI200-3">
                        <div class="info">
                            <h5 class="title">PHC10-3 PLUS with internal PI200-3</h5>
                            <p class="desc">
                                This variant of the PHC10-3 PLUS controller includes a prefitted PI200-3
                                interface card in a single 1U case.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-3">
                    <a class="card shadow-sm"
                        href="{{ route('category', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'HCU2']) }}">
                        <img src="{{ asset('assets/probes/HCU2.png') }}" alt="HCU2">
                        <div class="info">
                            <h5 class="title">HCU2</h5>
                            <p class="desc">
                                The HCU2 hand control unit enables the probe head to be used in a manual
                                mode or during a teach cycle.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
