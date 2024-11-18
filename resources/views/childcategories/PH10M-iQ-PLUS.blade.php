@extends('probes')

<title>@yield('title', 'PH10M-iQ PLUS | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-10 infobox p-5">
                <h2 class="product-item-name text-center">PH10M-iQ PLUS motorised indexing probe head</h2>
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
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                            role="tab">Additional information</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <h5>A shank-mounted head with multiwired probe capability, a Renishaw autojoint and inferred
                            qualification</h5>
                        <ul>
                            <li>720 indexing positions</li>
                            <li>0.4 μm indexing repeatability</li>
                            <li>7.5° indexing steps in both axes</li>
                            <li>300 mm extension bar capability, 450 mm with special order carbon fibre extensions</li>
                            <li>Inferred qualification when mounted vertically or horizontally*</li>
                            <li>* The inferred calibration procedure is different depending on the chosen orientation of the
                                head</li>
                        </ul>
                        <div class="table-outer">
                            <h5>Specification</h5>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Length</p>
                                        </td>
                                        <td>
                                            <p>117 mm (4.6 in)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Width</p>
                                        </td>
                                        <td>
                                            <p>60 mm (2.44 in)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Weight</p>
                                        </td>
                                        <td>
                                            <p>645 g (22.07 oz)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Mounting</p>
                                        </td>
                                        <td>
                                            <p>Shank</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Probe mount</p>
                                        </td>
                                        <td>
                                            <p>Renishaw autojoint (multiwire)</p>
                                            <p>M8 threaded probes can be used with a PAA probe adaptor</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Controller</p>
                                        </td>
                                        <td>
                                            <p>PHC10-3 PLUS</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Angular movement</p>
                                        </td>
                                        <td>
                                            <p>A-axis: 0° to 105° in 7.5 steps</p>
                                            <p>B-axis: 0° to 180° in 7.5 steps</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Total number of positions</p>
                                        </td>
                                        <td>
                                            <p>720 positions</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="{{ asset('assets/docs/H-1000-7564_(PH10M-iQ_PLUS_IUG).pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PH10M-iQ-PLUS.jpg') }}" alt="pdf">
                                    <span>Installation & user's guide: PH10M-iQ PLUS</span>
                                </a>
                            </div>
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
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="pb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ asset('assets/zip/CAD_model_PH10_head_family.zip') }}"
                                        class="tab-iiner-cust-link" download>
                                        <img src="{{ asset('assets/thumbnails/zip_80px-trans-icon.png') }}" alt="zip">
                                        <span>CAD model: PH10 head family</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <h4>Presentations</h4>
                            <ul class="ppt-section">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/thumbnails/ppt_15px-trans-icon.png') }}" alt="ppt"
                                            class="pe-2">
                                        <a href="{{ asset('assets/ppt/PH10M-iQ_PLUS_presentation.pptx') }}" download>
                                            Presentation: PH10M-iQ PLUS
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <span>Presentation introducing PH10M-iQ PLUS, a variant of PH10M with the added
                                        functionality of inferred qualification.</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>

            <!-- Image Gallery Section -->
            <div class="col-md-2 gallery p-3">
                <img src="{{ asset('assets/probes/PH10M-IQ/G1-PH10M-iQ-PLUS.jpg') }}" alt="G1-PH10M-iQ-PLUS">
            </div>
        </div>
    </div>
@endsection
