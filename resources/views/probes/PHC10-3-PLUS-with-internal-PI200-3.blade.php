@extends('probes')

<title>@yield('title', 'PHC10-3 PLUS with internal PI200-3 | CMM Online Store')</title>

@php
    $parts = [
        [
            'name' => 'A-5863-0200',
            'price' => 4310,
            'discount' => 20,
        ],
    ];
@endphp

@section('style')
    <style>
        .table-outer table td {
            width: auto !important;
        }

        .table-outer.specification table td {
            width: 50% !important;
        }

        .table-outer tr td {
            font-weight: normal;
        }
    </style>
@endsection

@section('category')
    <div class="col-md-10 category">
        <div class="row">
            <div class="col-12 infobox p-4">
                <h2 class="product-item-name text-center">PHC10-3 PLUS with internal PI200-3 probe head controller</h2>
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
                        <h5>Dedicated head controller for the PH10 range of motorised heads for use with OEM machine
                            controller systems</h5>
                        <div class="row align-items-center">
                            <div class="col">
                                <ul>
                                    <li>Replaces the PHC10-3 and the PHC10-2 and provides support for RS232 and USB
                                        communications</li>
                                    <li>Uses a 24 V external power supply, manages all the PH10 and PH10 PLUS head functions
                                        and interfaces with the CMM's computer</li>
                                    <li>Does not manage the probe functions but does have the provision for a PI 200-3 or PI
                                        7-3 interface card to be fitted internally</li>
                                </ul>
                            </div>
                            <div class="col text-center">
                                <img src="{{ asset('assets/probes/PHC10-3/PHC10-3.jpg') }}" alt="zip">
                            </div>
                        </div>
                        <div class="table-outer">
                            <h5>PHC10-3 PLUS (A-5863-0100)</h5>
                            <div class="row align-items-center py-5">
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-front.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-back.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>

                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
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
                                            <p> 1</p>
                                        </td>
                                        <td>
                                            <p> 9-way D-type plug for
                                                <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/pics-connection--19080"
                                                    title="PICS">PICS</a> output
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 2</p>
                                        </td>
                                        <td>
                                            <p> 9-way D-type connector to <a
                                                    href="https://www.renishaw.com/cmmsupport/knowledgebase/en/interface-switch-descriptions--19106"
                                                    title="HCU1">HCU2</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 3</p>
                                        </td>
                                        <td>
                                            <p> 25-way D-type plug <a
                                                    href="https://www.renishaw.com/cmmsupport/knowledgebase/en/rs232-setup--19104"
                                                    title="RS232">RS232</a> communications connector to CMM computer</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 4</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/usb-communications--19105"
                                                    title="USB">USB</a> type "B" socket</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 5</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/phc10-3-plus-configuration-switches--19069"
                                                    title="PHC10-3 configuration switches">PHC10-3 configuration
                                                    switches</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 6</p>
                                        </td>
                                        <td>
                                            <p> 15-way D-type connector to probe head</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 7</p>
                                        </td>
                                        <td>
                                            <p> 7-pin DIN raw probe connector to probe interface or multiwire input for
                                                internal interfaces</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 8</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/power-supply--19114"
                                                    title="DC power jack">DC power jack</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 9</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/power-supply--19114"
                                                    title="Equipment bond point">Equipment bond point</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 10</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/interface-switch-descriptions--19106"
                                                    title="Reset button">Reset</a> button</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PHC10-3 PLUS and integral PI 200-3 (A-5863-0200)</h5>
                            <div class="row align-items-center py-5">
                                <div class="col">
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/PHC10-3-integral-front.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-integral-back.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>

                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
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
                                            <p> 1</p>
                                        </td>
                                        <td>
                                            <p><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/scr200-stylus-change-rack--22162"
                                                    title="SCR200">SCR200</a> rack connection</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 2</p>
                                        </td>
                                        <td>
                                            <p> PI 200-3 <a
                                                    href="https://www.renishaw.com/cmmsupport/knowledgebase/en/tp200-touch-trigger-probe-system--22340"
                                                    title="TP200">TP200</a> configuration switches</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> 3</p>
                                        </td>
                                        <td>
                                            <p> PI 200-3 <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/connector-pin-outs--15472"
                                                    title="SSR">SSR</a> output connection</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PHC10-3 PLUS and integral PI 200-3 with additional PICS (A-5863-0300)</h5>
                            <div class="row align-items-center py-5">
                                <div class="col">
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/PHC10-3-integral-PICS-front.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col">
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/PHC10-3-integral-PICS-back.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>

                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
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
                                        <td> 1</td>
                                        <td><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/scr200-stylus-change-rack--22162"
                                                title="SCR200">SCR200</a> rack connection</td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td>PI 200-3 <a
                                                href="https://www.renishaw.com/cmmsupport/knowledgebase/en/tp200-touch-trigger-probe-system--22340"
                                                title="TP200">TP200</a> configuration switches</td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td> PI 200-3 <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/connector-pin-outs--15472"
                                                title="SSR">SSR</a> output connection</td>
                                    </tr>
                                    <tr>
                                        <td> 4</td>
                                        <td> PI 200-3 <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/connector-pin-outs--15472"
                                                title="PICS input">PICS</a> input</td>
                                    </tr>
                                    <tr>
                                        <td> 5</td>
                                        <td> PI 200-3 <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/connector-pin-outs--15472"
                                                title="PICS output">PICS</a> output</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PHC10-3 PLUS (A-5863-0100) with PI 200-3 card (A-5707-0200)</h5>
                            <div class="row align-items-center py-5">
                                <div class="col">
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/PHC10-3-PI-200-front.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-PI-200-back.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>

                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
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
                                        <td> 1</td>
                                        <td><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/scr200-stylus-change-rack--22162"
                                                title="SCR200">SCR200</a> rack connection</td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td> PI 200-3 <a
                                                href="https://www.renishaw.com/cmmsupport/knowledgebase/en/tp200-touch-trigger-probe-system--22340"
                                                title="TP200">TP200</a> configuration switches</td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td> PI 200-3 <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/connector-pin-outs--15472"
                                                title="SSR">SSR</a> output connection</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PHC10-3 PLUS (A-5863-0100) with PI 7-3 card (A-5726-0200)</h5>
                            <div class="row align-items-center py-5">
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-PI-7-front.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PHC10-3-PI-7-back.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>

                            <table width="100%" border="1" cellspacing="0" cellpadding="10">
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
                                        <td> 1</td>
                                        <td><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/tp7m-tp7m-ep-touch-trigger-probes--22346"
                                                title="TP7M / TP7M EP touch-trigger probes">TP7</a> configuration switches
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td><a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/product-description-and-pin-outs--15823"
                                                title="SSR">SSR</a> output</td>
                                    </tr>
                                    <tr>
                                        <td> 3</td>
                                        <td> Probe <a
                                                href="https://www.renishaw.com/cmmsupport/knowledgebase/en/product-description-and-pin-outs--15823"
                                                title="Probe multiwire connection">multiwire</a> connection</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>PH10 PLUS system with standard two wire touch-trigger probes</h5>
                                    <h6>With internal PI 200-3 and autochange</h6>
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/Internal-PI-200-3-autochange.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col-md-6">
                                    <h5>PH10 PLUS system with standard two wire touch-trigger probes</h5>
                                    <h6>With internal PI 200-3</h6>
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/Internal-PI-200-3.jpg') }}"
                                        alt="zip">
                                </div>
                            </div>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <th>Key</th>
                                        <th>
                                            <p style="text-align: left;">Description</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p style="text-align: left;">Communication connection to CMM controller RS232
                                                or
                                                USB</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <p style="text-align: left;">Communication to CMM controller</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <p style="text-align: left;">Communication to autochange rack</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <p style="text-align: left;">PICS output to CMM controller</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <p style="text-align: left;">Probe output to CMM controller</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PH10 PLUS system with standard two wire touch-trigger probes</h5>
                            <h6>With external PI 200-3 and autochange</h6>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img class="w-75"
                                        src="{{ asset('assets/probes/PHC10-3/External-PI-200-3-autochange.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col-md-6">
                                    <table width="100%" cellspacing="0" cellpadding="10">
                                        <tbody>
                                            <tr>
                                                <th>Key</th>
                                                <th>
                                                    <p style="text-align: left;">Description</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <p style="text-align: left;">Communication connection to CMM
                                                        controller - RS232 or USB</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <p style="text-align: left;">Communication to CMM controller</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <p style="text-align: left;">Communication to autochange rack</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <p style="text-align: left;">PICS output to CMM controller</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <p style="text-align: left;">Probe output to CMM contoller</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PH10 PLUS system with multiwire scanning probes</h5>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img class="w-100" src="{{ asset('assets/probes/PHC10-3/PH10-PLUS-multiple.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col-md-6">
                                    <table width="100%" cellspacing="0" cellpadding="10">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p style="">Key</p>
                                                </th>
                                                <th>
                                                    <p style="text-align: left;">Description </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">1</p>
                                                </td>
                                                <td>Comms to CMM controller</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">2</p>
                                                </td>
                                                <td>
                                                    <p style="text-align: left;">PICS to CMM controller</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">3</p>
                                                </td>
                                                <td>
                                                    <p style="text-align: left;">Multiwire to probe interface</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-outer">
                            <h5>PH10 PLUS system with multiwire scanning and touch-trigger probes with internal PI 200-3
                            </h5>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img class="w-100"
                                        src="{{ asset('assets/probes/PHC10-3/PH10-PLUS-multiwire.jpg') }}"
                                        alt="zip">
                                </div>
                                <div class="col-md-6">
                                    <table width="100%" cellspacing="0" cellpadding="10">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <p style="">Key</p>
                                                </th>
                                                <th>
                                                    <p style="text-align: left;">Description </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">1</p>
                                                </td>
                                                <td>Comms to CMM controller</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">2</p>
                                                </td>
                                                <td>
                                                    <p style="text-align: left;">Touch-trigger probe and PICS to CMM
                                                        controller</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="">3</p>
                                                </td>
                                                <td>
                                                    <p style="text-align: left;">Multiwire to probe interface</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-outer specification">
                            <h5>Specification</h5>
                            <table width="100%" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Power supply</p>
                                        </td>
                                        <td>
                                            <p>24 Vdc 49 W provided by the Emerson PSU (DP4024N3M) power adaptor</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Data transmission</p>
                                        </td>
                                        <td>
                                            <p>RS232 or USB1 and USB2</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Current consumption (at 240 V)</p>
                                        </td>
                                        <td>
                                            <p>Less than 1 A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>PSU electrical ratings<br></p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Supply voltage<br></p>
                                        </td>
                                        <td>
                                            <p>100 V - 240 V +/-10%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Frequency range<br></p>
                                        </td>
                                        <td>
                                            <p>50 Hz - 60 Hz</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Power consumption<br></p>
                                        </td>
                                        <td>
                                            <p>49 W max.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Transient voltages</p>
                                        </td>
                                        <td>
                                            <p>Installation category II</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Input connectors</p>
                                        </td>
                                        <td>
                                            <p>15-way ‘D'</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Probe output connectors </p>
                                        </td>
                                        <td>
                                            <p>7-pin DIN or 9-way ‘D' type</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Dimensions<br></p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Height<br></p>
                                        </td>
                                        <td>
                                            <p>44 mm (1.75 in) - 1U</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Width<br></p>
                                        </td>
                                        <td>
                                            <p>440 mm (17.30 in)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Depth<br></p>
                                        </td>
                                        <td>
                                            <p>180 mm (7.1 in)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>Weight</p>
                                        </td>
                                        <td>
                                            <p>1.5 kg (3 lb 5 oz)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Maximum cable length<br></p>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>RS232<br></p>
                                        </td>
                                        <td>
                                            <p>50 m (164.04 ft)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <p>USB<br></p>
                                        </td>
                                        <td>
                                            <p>5 m (extendible in lengths of 5 m by use of a hub, to a maximum length of 30
                                                m)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>Hand held control unit</p>
                                        </td>
                                        <td>
                                            <p>HCU2</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/docs/PFC10-3/H-1000-0077_(PHC10-3_PLUS_IG).pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PHC10-3-PLUS.jpg') }}" alt="pdf">
                                    Installation guide: <br>PHC10-3 PLUS
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/docs/H-1000-7592_(PH10_PLUS_IUG).pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PH10M.jpg') }}" alt="pdf">
                                    Installation & user's guide: <br>PH10 PLUS
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/docs/H-1000-7564_(PH10M-iQ_PLUS_IUG).pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PH10M-iQ-PLUS.jpg') }}" alt="pdf">
                                    Installation & user's guide: <br>PH10M-iQ PLUS
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/ppt/PH10_PLUS_presentation.pptx') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/thumbnails/pptx_icon.png') }}" alt="pdf">
                                    Presentation: <br>PH10 PLUS
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/ppt/PH10M-iQ_PLUS_presentation.pptx') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img style="width: 100px; height: 100px;" src="{{ asset('assets/thumbnails/pptx_icon.png') }}" alt="pdf">
                                    Presentation: <br>PH10M-iQ PLUS
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/docs/PFC10-3/H-1000-0077_(PHC10-3_PLUS_IG).pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PHC10-3-switch-settings.jpg') }}" alt="pdf">
                                    Leaflet: <br>PHC10-3 switch settings
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ asset('assets/docs/PFC10-3/H-1000-7545_PHC10-3_card_leaflet.pdf') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/PHC10-3-card.jpg') }}" alt="pdf">
                                    Leaflet: <br>PHC10-3 card
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
                                            <p>PH10T PLUS probe head and shank kit (see below for complete part no.)<br>
                                            </p>
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
                                            <p>PHC10-3 PLUS head controller with integral PI 200-3 interface (includes
                                                24 V
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
                                        <td>
                                            <p>PH10M PLUS</p>
                                            <p>A-5863-</p>
                                        </td>
                                        <td>
                                            <p>PH10M PLUS</p>
                                            <p>(with AM1)</p>
                                            <p>A-5863-</p>
                                        </td>
                                        <td>
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
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <a href="{{ asset('assets/zip/CAD_model_PHC10-3_PLUS.zip') }}"
                                    class="tab-iiner-cust-link" download>
                                    <img src="{{ asset('assets/thumbnails/zip_80px-trans-icon.png') }}" alt="zip">
                                    <span>CAD model: PHC10-3 PLUS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get Quote Form Section -->
                @include('layouts.partials.get-quote')
            </div>
        </div>
    </div>
@endsection
