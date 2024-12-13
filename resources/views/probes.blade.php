@extends('layouts.guest')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar with multi-level collapsible menu -->
            <div class="col-lg-2 col-md-3 cust-sidebar py-3 text-dark">
                @include('layouts.partials.categories-menu')
            </div>

            <!-- Main content area with tabbed layout and table -->
            @yield('category')
            {{-- @include('layouts.partials.category') --}}
        </div>
    </div>
@endsection
