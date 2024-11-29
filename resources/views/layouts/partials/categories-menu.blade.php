{{-- <h5>Categories</h5> --}}
<div id="leftside-navigation">
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a class="{{ request()->is('CMM-probes/RBE-repair-by-exchange*') ? 'activeCate' : '' }}"
                    href="{{ route('probes', ['category' => 'RBE-repair-by-exchange']) }}">
                    <span>RBE Repair By Exchange</span>
                </a>
            </p>
        </li>
    </ul>
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads*') ? 'activeCate' : '' }}"
                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads']) }}">
                    <span>3-Axis Motorized Probe Heads</span>
                </a>
            </p>
            {{-- <ul class="level-1">
                <li class="parent">
                    <ul class="level-2">
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PH10T-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10T-PLUS']) }}">
                                    <span>PH10T PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PH10M-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10M-PLUS']) }}">
                                    <span>PH10M PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="level-1">
                <li class="parent">
                    <ul class="level-2">
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PH10MQ-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10MQ-PLUS']) }}">
                                    <span>PH10MQ PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PH10M-iQ-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PH10M-iQ-PLUS']) }}">
                                    <span>PH10M-iQ PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="level-1">
                <li class="parent">
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PHC10-3-PLUS') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PHC10-3-PLUS']) }}">
                                    <span>PHC10-3 PLUS</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>
                                <a class="{{ request()->is('CMM-probes/3-axis-motorized-probe-heads/PHC10-3-PLUS-with-internal-PI200-3') ? 'activeCate' : '' }}"
                                    href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => 'PHC10-3-PLUS-with-internal-PI200-3']) }}">
                                    <span>PHC10-3 PLUS with internal PI200-3</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </li>
            </ul> --}}
        </li>
    </ul>
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a class="{{ request()->is('CMM-probes/5-axis-motorized-probe-heads*') ? 'activeCate' : '' }}"
                    href="{{ route('probes', ['category' => '5-axis-motorized-probe-heads']) }}">
                    <span>5-Axis Motorized Probe Heads</span>
                </a>
            </p>
        </li>
    </ul>
    <ul class="level-0">
        <li class="parent">
            <p class="text-dark main">
                <a class="{{ request()->is('CMM-probes/fixed-and-manual-probe-heads*') ? 'activeCate' : '' }}"
                    href="{{ route('probes', ['category' => 'fixed-and-manual-probe-heads']) }}">
                    <span>Fixed And Manual Probe Heads</span>
                </a>
            </p>
        </li>
    </ul>
</div>
