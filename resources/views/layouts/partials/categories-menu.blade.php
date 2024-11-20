{{-- <h5>Categories</h5> --}}
<div id="leftside-navigation">
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a class="{{ request()->is('CMM/3-axis-systems') ? 'activeCate' : '' }}"
                    href="{{ route('category', ['category' => '3-axis-systems']) }}">
                    <span>3-axis systems</span>
                </a>
            </p>
            <ul class="level-1">
                <li class="parent">
                    <p class="text-dark main">
                        <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-heads') ? 'activeCate' : '' }}"
                            href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-heads']) }}">
                            <span>Motorized probe heads</span>
                        </a>
                    </p>
                    <ul class="level-2">
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-heads/PH10T-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-heads', 'childcategory' => 'PH10T-PLUS']) }}">
                                    <span>PH10T PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-heads/PH10M-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-heads', 'childcategory' => 'PH10M-PLUS']) }}">
                                    <span>PH10M PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="level-1">
                <li class="parent">
                    <p class="text-dark main">
                        <a class="{{ request()->is('CMM/3-axis-systems/coordinate-measuring-machine-probes') ? 'activeCate' : '' }}"
                            href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'coordinate-measuring-machine-probes']) }}">
                            <span>Coordinate measuring machine probes</span>
                        </a>
                    </p>
                    <ul class="level-2">
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/coordinate-measuring-machine-probes/PH10MQ-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'coordinate-measuring-machine-probes', 'childcategory' => 'PH10MQ-PLUS']) }}">
                                    <span>PH10MQ PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/coordinate-measuring-machine-probes/PH10M-iQ-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'coordinate-measuring-machine-probes', 'childcategory' => 'PH10M-iQ-PLUS']) }}">
                                    <span>PH10M-iQ PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="level-1">
                <li class="parent">
                    <p class="text-dark main">
                        <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-head-accessories') ? 'activeCate' : '' }}"
                            href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-head-accessories']) }}">
                            <span>Motorized probe head accessories</span>
                        </a>
                    </p>
                    <ul class="level-2">
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-head-accessories/AM1-AM2-adjustment-modules') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-head-accessories', 'childcategory' => 'AM1-AM2-adjustment-modules']) }}">
                                    <span>AM1/AM2</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-head-accessories/PHC10-3-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-head-accessories', 'childcategory' => 'PHC10-3-PLUS']) }}">
                                    <span>PHC10-3 PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-head-accessories/PHC10-3-PLUS-with-internal-PI200-3') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-head-accessories', 'childcategory' => 'PHC10-3-PLUS-with-internal-PI200-3']) }}">
                                    <span>PHC10-3 PLUS with internal PI200-3</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM/3-axis-systems/motorized-probe-head-accessories/HCU2') ? 'activeCate' : '' }}"
                                    href="{{ route('category', ['category' => '3-axis-systems', 'subcategory' => 'motorized-probe-head-accessories', 'childcategory' => 'HCU2']) }}">
                                    <span>HCU2</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/touch-trigger-probe-systems--38674">
                    <span>Touch-trigger probe systems</span>
                </a>
            </p>
        </li>
    </ul>
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a href="https://www.renishaw.com/cmmsupport/knowledgebase/en/scanning-probe-systems--38675">
                    <span>Scanning probe systems</span>
                </a>
            </p>
        </li>
    </ul>
</div>
