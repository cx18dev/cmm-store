@extends('probes')

<title>@yield('title', 'AM1/AM2 adjustment modules | CMM Online Store')</title>

@php
    $parts = [
        [
            'name' => 'A-1026-0320 (AM1)',
            'price' => 897,
            'discount' => 20,
        ],
        [
            'name' => 'A-1036-0080 (AM2)',
            'price' => 897,
            'discount' => 20,
        ],
    ];
@endphp

@section('category')
    <div class="col-lg-10 col-md-9 category">
        <div class="row">
            <div class="col-sm-10 col-12 infobox p-4">
                <h2 class="product-item-name text-center">AM1 / AM2 adjustment modules</h2>
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
                        <h5>The AM1 adjustment module has been designed for use with the PH6M and MIH manual probe heads and
                            the PH10T PLUS / PH10M PLUS motorised probe heads</h5>
                        <h5>The AM2 adjustment module has been designed for use with the PH10MQ PLUS motorised probe head.
                        </h5><br>
                        <div class="mb-5">
                            <h5>AM1 module:</h5>
                            <p class="mb-0">It provides quick and accurate angular alignment of the probe heads with the
                                CMM's axes and/or the autochange rack.</p>
                            <p class="mb-0">In addition, the quick release mechanism allows the head to be removed for
                                storage and subsequently replaced without further alignment. Built in the overtravel
                                protection decreases the risk of head damage.<br></p>
                        </div>
                        <div>
                            <h5>AM2 module:</h5>
                            <p class="mb-0">The probe head is mounted directly onto the quill via the AM2.</p>
                            <p class="mb-0">M = Multiwire.</p>
                            <p class="mb-0">Q = Quill mounted.</p>
                        </div>
                        <div class="table-outer">
                            <h5>Specification</h5>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <th> </th>
                                        <th>
                                            <p>AM1</p>
                                        </th>
                                        <th>
                                            <p>AM2</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="text-align: left;">Size</p>
                                        </th>
                                        <td>
                                            <p>60 mm × 15.5 mm (2.36 in × 0.61 in) nominal</p>
                                        </td>
                                        <td>
                                            <p>80 mm × 10 mm (3.15 in × 0.39 in) nominal</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="text-align: left;">Adjustment</p>
                                        </th>
                                        <td>
                                            <p>±2° in pitch and roll* (recommended)</p>
                                            <p>±4.5° in yaw</p>
                                        </td>
                                        <td>
                                            <p>±1° in pitch and roll* (recommended)</p>
                                            <p>±1° in yaw</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="text-align: left;">Overtravel</p>
                                        </th>
                                        <td>
                                            <p>±3.5° in pitch and roll</p>
                                        </td>
                                        <td>
                                            <p>0°</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="text-align: left;">Mounting</p>
                                        </th>
                                        <td>
                                            <p>Mounts to quill using shanks</p>
                                            <p>Alternatively direct to quill using OEM adaptor</p>
                                        </td>
                                        <td>
                                            <p>Mounts direct to quill</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="text-align: left;">Weight</p>
                                        </th>
                                        <td>
                                            <p>150 g (5.29 oz)</p>
                                        </td>
                                        <td>
                                            <p>48 g (1.69 oz)</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>* Up to ±5.5° in pitch and roll is possible but this is at the expense of overtravel.</p>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        @php
                            $guides = [
                                [
                                    'pdf' => 'assets/docs/AM1-AM2/H-1000-2051_AM2_DS.pdf',
                                    'thumbnail' => 'assets/thumbnails/TH1-AM2-adjustment-module.jpg',
                                    'label' => 'Data sheet: AM2 adjustment module',
                                ],
                                [
                                    'pdf' => 'assets/docs/AM1-AM2/H-1000-4010_AM1_UG.pdf',
                                    'thumbnail' => 'assets/thumbnails/TH1-AM1.jpg',
                                    'label' => 'User guide: AM1',
                                ],
                                [
                                    'pdf' => 'assets/docs/AM1-AM2/H-1000-5090_Autochange_system_UG.pdf',
                                    'thumbnail' => 'assets/thumbnails/TH3-Autochange-system.jpg',
                                    'label' => 'User guide: Autochange system',
                                ],
                                [
                                    'pdf' => 'assets/docs/AM1-AM2/H-1000-6010_Autochange_system_IG.pdf',
                                    'thumbnail' => 'assets/thumbnails/TH4-Autochange-system.jpg',
                                    'label' => 'Installation guide: Autochange system',
                                ],
                            ];
                        @endphp

                        <div class="row">
                            @foreach ($guides as $guide)
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ asset($guide['pdf']) }}" class="tab-iiner-cust-link " download
                                        aria-label="{{ $guide['label'] }}">
                                        <img src="{{ asset($guide['thumbnail']) }}" alt="PDF Thumbnail">
                                        <span>{{ $guide['label'] }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="table-outer">
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td>Part number</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10M PLUS motorised indexing probe head kits</strong></p>
                                            <p>For use with multiwired probes and extension bars</p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10M PLUS probe head and shank kit (see below for complete part no.)</p>
                                        </td>
                                        <td>
                                            <p>A-5863-11**</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10M PLUS probe head, AM1 and shank kit (see below for complete part
                                                no.)<br>
                                            </p>
                                        </td>
                                        <td>
                                            <p>A-5863-19**</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10M PLUS probe head only<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-4000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10M PLUS probe head and AM1 kit<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-1060</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10MQ PLUS quill mounted, motorised indexing probe head
                                                    kits</strong>
                                            </p>
                                            <p>For use with multiwired probes and extension bars</p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10MQ PLUS probe head kit</p>
                                        </td>
                                        <td>
                                            <p>A-5863-6000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10T PLUS motorised indexing probe head kits</strong></p>
                                            <p>For use with M8 threaded touch-trigger probes and extension bars</p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10T PLUS probe head and shank kit (see below for complete part no.)<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-25**</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10T PLUS probe head only<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-5000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10M-iQ PLUS motorised indexing probe head kits with inferred
                                                    qualification</strong></p>
                                            <p>For use with multiwired probes and extension bars</p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PH10M-iQ PLUS probe head kit<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-7000</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10 PLUS head controllers and hand control units</strong></p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PHC10-3 PLUS RS232 head controller (includes 24 V PSU)<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-0100</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PHC10-3 PLUS head controller with integral PI 200-3 interface (includes 24 V
                                                PSU,
                                                4 feet, documentation CD
                                                and USB driver)<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-0200</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PHC10-3 PLUS head controller with integral PI 200-3 interface, additional
                                                PICS
                                                output port and PL25(T) PICS
                                                cable (includes 4 feet, documentation CD and USB driver)<br></p>
                                        </td>
                                        <td>
                                            <p>A-5863-0300</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>HCU2 hand control unit<br></p>
                                        </td>
                                        <td>
                                            <p>A-5882-0010</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><strong>PH10 PLUS accessories</strong></p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>AM1 adjustment module for PH10M PLUS, PH10T PLUS, PH6M and MIH<br></p>
                                        </td>
                                        <td>
                                            <p>A-1026-0320</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>AM2 adjustment module for PH10MQ PLUS<br></p>
                                        </td>
                                        <td>
                                            <p>A-1036-0080</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PHA3 - PH10MQ PLUS to KM1 quick change adaptor<br></p>
                                        </td>
                                        <td>
                                            <p>A-2238-0751</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>24 V PSU for PHC10-3 PLUS, PI 200-3 and PI 7-3<br></p>
                                        </td>
                                        <td>
                                            <p>P-EA02-0042</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>1U bracket kit<br></p>
                                        </td>
                                        <td>A-1018-0189</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>1/3 x 1U bracket<br></p>
                                        </td>
                                        <td>
                                            <p>A-1018-0179</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PHC10-2 bracket 1U to 2U<br></p>
                                        </td>
                                        <td>
                                            <p>A-1018-0173</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-outer cust-table">
                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td class="fw-bold">
                                            <p>PH10M PLUS</p>
                                            <p>A-5863-</p>
                                        </td>
                                        <td class="fw-bold">
                                            <p>PH10M PLUS</p>
                                            <p>(with AM1)</p>
                                            <p>A-5863-</p>
                                        </td>
                                        <td class="fw-bold">
                                            <p>PH10T PLUS</p>
                                            <p>A-5863-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS1<br></p>
                                        </td>
                                        <td>
                                            <p>1139<br></p>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <p>2521<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS2<br></p>
                                        </td>
                                        <td>
                                            <p>1135<br></p>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <p>2522<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS3<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS4<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td>
                                            <p>2524<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS5<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS6<br></p>
                                        </td>
                                        <td>1136<br></td>
                                        <td> </td>
                                        <td>
                                            <p>2526<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS7<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td>
                                            <p>2527<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS8<br></p>
                                        </td>
                                        <td>
                                            <p>1137<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS9<br></p>
                                        </td>
                                        <td>
                                            <p>1141<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS10<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS11<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS12<br></p>
                                        </td>
                                        <td>1155<br></td>
                                        <td> </td>
                                        <td>
                                            <p>2530<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS13<br></p>
                                        </td>
                                        <td>
                                            <p>1142<br></p>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <p>2531<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS14<br></p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td>
                                            <p>2532<br></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS15<br></p>
                                        </td>
                                        <td>
                                            <p>1140</p>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <p>2533</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>MS17<br></p>
                                        </td>
                                        <td> </td>
                                        <td>
                                            <p>1991</p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>D shank</p>
                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
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
                <img src="{{ asset('assets/probes/AM1-AM2/G1-AM1-AM2.jpg') }}" alt="G1-AM1-AM2">
                <img src="{{ asset('assets/probes/AM1-AM2/G2-AM1-AM2.jpg') }}" alt="G2-AM1-AM2">
                <img src="{{ asset('assets/probes/AM1-AM2/G3-AM1-AM2.jpg') }}" alt="G3-AM1-AM2">
            </div>
        </div>
    </div>
@endsection
