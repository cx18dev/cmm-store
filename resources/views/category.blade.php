@extends('probes')

<title>@yield('title', $category->name . ' | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-4 category">

        @include('layouts.partials.probe-nav')

        <div class="cate-sec">
            <h2 class="category-title"><u>{{ $category->name }}</u></h2>
            <div class="row">
                @forelse ($probes as $probe)
                    <div class="col-md-4 p-3">
                        <a class="card shadow-sm"
                            href="{{ route('probes', ['category' => $category->slug, 'probes' => $probe->slug]) }}">
                            <img src="{{ asset('assets/admin/probes/' . $probe->image) }}" alt="{{ $probe->name }}">
                            <div class="info">
                                <h5 class="title">{{ $probe->name }}</h5>
                                <p class="desc">
                                    {{ $probe->description }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 infobox">
                        <div class="text-center">
                            <img src="{{ asset('assets/thumbnails/coming-soon.png') }}" alt="Coming Soon">
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
@endsection
