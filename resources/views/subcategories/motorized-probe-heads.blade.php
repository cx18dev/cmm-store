@extends('probes')

@section('category')
    <div class="col-md-10 p-5 category">
        <div class="cate-sec">
            <h2 class="product-item-name">Motorized probe heads</h2>
            <div class="row ps-2">
                <div class="col-md-4 p-2">
                    <a class="card shadow" 
                        href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-heads', 'childcategory' => 'PH10T-PLUS']) }}">
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
                <div class="col-md-4 p-2">
                    <a class="card shadow" 
                        href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-heads', 'childcategory' => 'PH10M-PLUS']) }}">
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
            </div>
        </div>
    </div>
@endsection
