@extends('probes')

<title>@yield('title', 'HCU2 | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-10 infobox p-5">
                <h2 class="product-item-name text-center">HCU2 hand control unit</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab">Technical specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                            role="tab">Documents</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                            role="tab">Part numbers</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <h5>Portable head drive and position display unit for use with the PHC10-3 PLUS motorised head
                            controller</h5>
                        <ul>
                            <li>Compatible with the PHC10 range of head controllers to drive PH10 motorised probe heads to
                                the required position</li>
                            <li>Enables the probe head to be used in a manual mode</li>
                            <li>Used for component set-up, operator-controlled inspection and teach cycle programming</li>
                            <li>2-speed action (jog and sweep moves)</li>
                            <li>LCD showing head angle, system status and error analysis</li>
                            <li>Transmit button for teach cycle</li>
                        </ul>
                        <div class="table-outer">
                            <h5>Specification</h5>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <th>
                                            <p>Key</p>
                                        </th>
                                        <th>
                                            <p>Description</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <p>LCD display</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>Beep on / off button</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <p>Probe functions button</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>4</p>
                                        </td>
                                        <td>
                                            <p>Direction buttons</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>5</p>
                                        </td>
                                        <td>
                                            <p>Transmit button</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="{{ asset('assets/docs/H-1000-5361_(HCU2_UG).pdf') }}" class="tab-iiner-cust-link"
                                    download>
                                    <img src="{{ asset('assets/thumbnails/HCU2.jpg') }}" alt="pdf">
                                    <span>User guide: HCU2</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="table-outer">
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <th> </th>
                                        <th>Part number</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>HCU2 hand control unit</p>
                                        </td>
                                        <td>
                                            <p>A-5882-0010</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/HCU2/HCU2.jpg') }}" alt="G1-HCU2">
                <img src="{{ asset('assets/probes/HCU2/HCU2-pattern.jpg') }}" alt="G2-HCU2-pattern">
                <img src="{{ asset('assets/probes/HCU2/HCU2-front.jpg') }}" alt="G3-HCU2-front">
            </div>
        </div>
    </div>
@endsection
