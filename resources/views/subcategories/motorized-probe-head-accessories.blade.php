@extends('probes')

@section('category')
    <div class="col-md-10 p-5 category">
        <div class="cate-sec">
            <h2 class="product-item-name">Motorized probe head accessories</h2>
            <div class="row ps-2">
                <div class="col-md-4 p-2">
                    <a class="card shadow" href="#">
                        <img src="{{ asset('assets/probes/AM1-AM2.png') }}" alt="AM1-AM2">
                        <div class="info">
                            <h5 class="title">AM1/AM2</h5>
                            <p class="desc">
                                The AM1 adjustment module is designed for use with the PH10T and PH10M
                                probe heads. The AM2 is designed for the PH10MQ probe heads.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-2">
                    <a class="card shadow" href="#">
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
                <div class="col-md-4 p-2">
                    <a class="card shadow" href="#">
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
                <div class="col-md-4 p-2">
                    <a class="card shadow" href="#">
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
