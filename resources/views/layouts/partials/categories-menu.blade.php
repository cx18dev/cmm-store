<div id="leftside-navigation">
    @foreach (Helper::categorySidebar() as $category)
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
