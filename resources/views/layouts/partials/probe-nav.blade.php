@if (count($probeLinks) > 0)
    <ul class="list-inline">
        @php
            $probesToSkip = ['AM1/AM2', 'HCU2', 'PHC10-3 PLUS', 'PHC10-3 PLUS with internal PI200-3'];
        @endphp

        @foreach ($probeLinks as $link)
            @if (in_array($link['name'], $probesToSkip))
                @continue
            @endif

            @php
                // Determine the route or use `javascript:void(0)` for specific slugs
                $route = in_array($link['slug'], ['RTP20', 'PHS-2'])
                    ? 'javascript:void(0);'
                    : route('probes', ['category' => $category->slug, 'probes' => $link['slug']]);

                // Check if the current link should be active
                $isActive = request('probes') === $link['slug'] ? 'active' : '';
            @endphp

            <li class="list-inline-item">
                <a class="tab-link {{ $isActive }}" href="{{ $route }}">
                    {{ $link['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
