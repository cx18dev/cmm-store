@extends('probes')

<title>@yield('title', $probe->name . ' | CMM Online Store')</title>

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-12 col-12 infobox p-4">

                @include('layouts.partials.probe-nav')

                <div class="row mb-5">
                    <!-- Left Section -->
                    <div class="col-12 col-md-12">
                        <h5 class="text-center">Overview:</h5>
                        <div class="text-justify">
                            <p>
                                The TP20 is a compact 5-way, or 6-way, kinematic touch-trigger probe system. The two-piece design,
                                comprising probe body
                                and detachable stylus module(s), connected using a highly repeatable magnetic kinematic coupling. This
                                provides the facility
                                to change stylus configurations either manually or automatically without the need for requalification of
                                the stylus tips,
                                thereby giving significant time savings in inspection routines.
                            </p>
                            <p>
                                Modules offering a range of trigger forces allow the probe performance to be best matched to the
                                measurement task. A set
                                of probe extensions is also available, as is a 6-way module. The stylus mounting thread accepts styli
                                from the Renishaw M2 range.
                            </p>
                            <p>
                                The TP20 system is easily retrofitted and is compatible with existing touch trigger probe interfaces,
                                extensions and
                                adaptors.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 py-5 px-0">
                        <div class="row mx-0">
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>SF</h6>
                                        <p>Standard Force Stylus Module (Black Cap)</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/SF.png') }}" alt="SF-module">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>LF</h6>
                                        <p>Low Force Stylus Module (Green Cap)</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/LF.png') }}" alt="LF-module">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>MF</h6>
                                        <p>Medium Force Stylus Module (Grey Cap)</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/MF.png') }}" alt="MF-module">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>EF</h6>
                                        <p>Extended Force Stylus Module (Brown Cap)</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/EF.png') }}" alt="EF-module">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>6W</h6>
                                        <p>6-Way Force Stylus Module (Blue Cap)</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/6W.png') }}" alt="6W-module">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>EM1 SF</h6>
                                        <p>Standard Force Extension Module</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/EM1-SF.png') }}" alt="EM1-SF-module">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 pb-3">
                                <div class="card probe-card">
                                    <div class="info">
                                        <h6>EM2 SF</h6>
                                        <p>Standard Force Extension Module</p>
                                    </div>
                                    <div class="probe-img-sec">
                                        <img src="{{ asset('assets/images/probe-parts/EM2-SF.png') }}" alt="EM2-SF-module">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Right Section -->
                    <div class="col-12 col-md-12">
                        <ul class="nav nav-tabs probes-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Module1" type="button"
                                    role="tab">
                                    <div class="col-12 text-center probe-item">
                                        <h5 class="category-title px-5">
                                            Upgrade to TP20 Standard Body with 1 Module Options
                                        </h5>
                                        <img class="img-fluid part-img" src="{{ asset('assets/probes/1-Module.png') }}" alt="{{ $probe->slug }}">
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Module2" type="button"
                                    role="tab">
                                    <div class="col-12 text-center probe-item">
                                        <h5 class="category-title px-5">
                                            Upgrade to TP20 Standard Body with 2 Module Options
                                        </h5>
                                        <img class="img-fluid part-img" src="{{ asset('assets/probes/2-Module.png') }}" alt="{{ $probe->slug }}">
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Module3" type="button"
                                    role="tab">
                                    <div class="col-12 text-center probe-item">
                                        <h5 class="category-title px-5">
                                            Upgrade to TP20 Standard Body with 3 Module Options
                                        </h5>
                                        <img class="img-fluid part-img" src="{{ asset('assets/probes/3-Module.png') }}" alt="{{ $probe->slug }}">
                                    </div>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="Module1" role="tabpanel">
                                <section class="cust-form-sec relative shadow">
                                    <h3 class="text-center">Get a Quote</h3>
                                    <div class="cust-discount">
                                        <img src="{{ asset('assets/images/10-discount.png') }}" alt="cust-discount" class="cust-img">
                                    </div>
                                    <div class="row" id="product-form">
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Standard Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-24-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-24-probe-17">A-1032-1100</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-24-probe-17">TP20 body +1 SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-24-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-24-probe-17" for="part-24-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-25-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-25-probe-17">A-1032-1200</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-25-probe-17">TP20 body +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-25-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-25-probe-17" for="part-25-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-26-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-26-probe-17">A-1032-1300</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-26-probe-17">TP20 body +1 EF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-26-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-26-probe-17" for="part-26-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-27-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-27-probe-17">A-1032-1400</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-27-probe-17">TP20 body +1 LF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-27-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-27-probe-17" for="part-27-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-28-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-28-probe-17">A-1032-1500</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-28-probe-17">TP20 body +1 6W Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-28-probe-17">$1074.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-28-probe-17" for="part-28-probe-17">
                                                                            $966.60
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-29-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-29-probe-17">A-1032-1600</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-29-probe-17">TP20 body +1 EM1 Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-29-probe-17">$1029.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-29-probe-17" for="part-29-probe-17">
                                                                            $926.10
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-30-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-30-probe-17">A-1032-1700</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-30-probe-17">TP20 body +1 EM2 Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-30-probe-17">$1046.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-30-probe-17" for="part-30-probe-17">
                                                                            $941.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Non Inhibit Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-31-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-31-probe-17">A-1032-2100</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-31-probe-17">TP20 body +1 SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-31-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-31-probe-17" for="part-31-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-32-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-32-probe-17">A-1032-2200</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-32-probe-17">TP20 body +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-32-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-32-probe-17" for="part-32-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-33-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-33-probe-17">A-1032-2300</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-33-probe-17">TP20 body +1 EF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-33-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-33-probe-17" for="part-33-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-34-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-34-probe-17">A-1032-2400</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-34-probe-17">TP20 body +1 LF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-34-probe-17">$966.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-34-probe-17" for="part-34-probe-17">
                                                                            $869.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-35-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-35-probe-17">A-1032-2500</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-35-probe-17">TP20 body +1 6W Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-35-probe-17">$1074.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-35-probe-17" for="part-35-probe-17">
                                                                            $966.60
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-36-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-36-probe-17">A-1032-2600</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-36-probe-17">TP20 body +1 EM1 Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-36-probe-17">$1036.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-36-probe-17" for="part-36-probe-17">
                                                                            $926.10
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-37-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-37-probe-17">A-1032-2700</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-37-probe-17">TP20 body +1 EM2 Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-37-probe-17">$1046.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-37-probe-17" for="part-37-probe-17">
                                                                            $941.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <img id="AddToCart" src="http://cmm-store.local/assets/images/add-to-cart.png" alt="Add to cart"
                                                style="width: 15%; cursor: pointer;">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade" id="Module2" role="tabpanel">
                                <section class="cust-form-sec relative shadow">
                                    <h3 class="text-center">Get a Quote</h3>
                                    <div class="cust-discount">
                                        <img src="{{ asset('assets/images/10-discount.png') }}" alt="cust-discount" class="cust-img">
                                    </div>
                                    <div class="row" id="product-form">
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Standard Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-38-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-38-probe-17">A-1032-1110</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-38-probe-17">TP20 NI body +1 SF +1 SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-38-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-38-probe-17" for="part-38-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-39-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-39-probe-17">A-1032-1120</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-39-probe-17">TP20 NI body +1 SF +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-39-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-39-probe-17" for="part-39-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-40-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-40-probe-17">A-1032-1130</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-40-probe-17">TP20 NI body +1 SF +1 EF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-40-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-40-probe-17" for="part-40-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-41-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-41-probe-17">A-1032-1120</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-41-probe-17">TP20 NI body +1 SF +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-41-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-41-probe-17" for="part-41-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Non Inhibit Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-42-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-42-probe-17">A-1032-2110</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-42-probe-17">TP20 NI body +1 SF +1 SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-42-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-42-probe-17" for="part-42-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-43-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-43-probe-17">A-1032-2120</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-43-probe-17">TP20 NI body +1 SF +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-43-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-43-probe-17" for="part-43-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-44-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-44-probe-17">A-1032-2110</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-44-probe-17">TP20 NI body +1 SF +1 SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-44-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-44-probe-17" for="part-44-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-45-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-45-probe-17">A-1032-2120</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-45-probe-17">TP20 NI body +1 SF +1 MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-45-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-45-probe-17" for="part-45-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <img id="AddToCart" src="http://cmm-store.local/assets/images/add-to-cart.png" alt="Add to cart"
                                                style="width: 15%; cursor: pointer;">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-content mt-3" id="myTabContent">
                            <div class="tab-pane fade" id="Module3" role="tabpanel">
                                <section class="cust-form-sec relative shadow">
                                    <h3 class="text-center">Get a Quote</h3>
                                    <div class="cust-discount">
                                        <img src="{{ asset('assets/images/10-discount.png') }}" alt="cust-discount" class="cust-img">
                                    </div>
                                    <div class="row" id="product-form">
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Standard Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-46-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-46-probe-17">A-1032-1111</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-46-probe-17">TP20 NI body +1SF +1SF +1SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-46-probe-17">$2156.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-46-probe-17" for="part-46-probe-17">
                                                                            $1940.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-47-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-47-probe-17">A-1032-1112</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-47-probe-17">TP20 NI body +1SF +1SF +1MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-47-probe-17">$2156.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-47-probe-17" for="part-47-probe-17">
                                                                            $1940.40
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="text-primary text-center">TP20 Non Inhibit Body</h4>
                                            <div class="my-4 mb-2">
                                                <div class="select-product">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-bold" style="width: 5%;"></th>
                                                                    <th class="fw-bold" style="width: 15%;">Part Number</th>
                                                                    <th class="fw-bold" style="width: 15%;">Upgrade To</th>
                                                                    <th class="fw-bold" style="width: 15%;">Renishaw List Price</th>
                                                                    <th class="fw-bold" style="width: 15%;">Our Discounted Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-48-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-48-probe-17">A-1032-2110</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-48-probe-17">TP20 NI body +1SF +1SF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-48-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-48-probe-17" for="part-48-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input class="form-check-input mt-0" type="checkbox" id="part-49-probe-17">
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-49-probe-17">A-1032-2120</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-49-probe-17">TP20 NI body +1SF +1MF Module</label>
                                                                    </td>
                                                                    <td>
                                                                        <label for="part-49-probe-17">$1473.00</label>
                                                                    </td>
                                                                    <td>
                                                                        <label id="discounted-price-part-49-probe-17" for="part-49-probe-17">
                                                                            $1325.70
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <img id="AddToCart" src="http://cmm-store.local/assets/images/add-to-cart.png" alt="Add to cart"
                                                style="width: 15%; cursor: pointer;">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
