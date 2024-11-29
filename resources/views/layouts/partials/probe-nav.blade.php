<ul class="list-inline">
    @php
        $probesToSkip = ['AM1/AM2', 'HCU2', 'PHC10-3 PLUS', 'PHC10-3 PLUS with internal PI200-3'];
    @endphp

    @foreach ($probeLinks as $link)
        @if (in_array($link['name'], $probesToSkip))
            @continue
        @endif

        {{-- @php
            $slug = in_array($link['slug'], ['RTP20', 'PHS-2']) ? 'javascript:void(0);' : $link['slug'];
        @endphp --}}

        <li class="list-inline-item">
            <a class="tab-link" href="{{ route('probes', ['category' => '3-axis-motorized-probe-heads', 'probes' => $link['slug']]) }}">
                {{ $link['name'] }}
            </a>
        </li>
    @endforeach
</ul>
