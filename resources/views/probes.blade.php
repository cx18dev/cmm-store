@extends('layouts.guest')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar with multi-level collapsible menu -->
            <div class="col-md-2 cust-sidebar p-3 text-dark">
                @include('layouts.partials.categories-menu')
            </div>

            <!-- Main content area with tabbed layout and table -->
            @yield('category')
            {{-- @include('layouts.partials.category') --}}
        </div>
    </div>
@endsection
