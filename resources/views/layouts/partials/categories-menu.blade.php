<div id="leftside-navigation">
    @php
        $categories = Helper::categorySidebar();
        if ($categories->isNotEmpty()) {
            $categories = $categories->prepend($categories->pop());
        }
    @endphp

    @foreach ($categories as $key => $category)
        <ul class="level-0">
            <li class="parent">
                <p class="text-dark main">
                    <a class="{{ request('category') === $category->slug ? 'activeCate' : '' }}"
                        href="{{ route('probes', ['category' => $category->slug]) }}">
                        <span>{{ $category->name }}</span>
                    </a>
                </p>
            </li>
        </ul>
    @endforeach
</div>
