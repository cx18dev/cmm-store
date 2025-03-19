<header class="header text-white py-3 d-lg-block d-none">
    <div class="container">
        <h1 class="mb-0 text-center navbar-brand">
            <a class="text-decoration-none text-white" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/CMM-banner.jpg') }}" alt="Logo" />
            </a>
        </h1>
    </div>
</header>

<section class="Navbar-section">
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand d-lg-none" href="#"><img src="{{ asset('assets/images/CMM-banner.jpg') }}" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between m-2" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-between">
                    <li class="nav-item {{ request()->is('CMM-probes*') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('probes', ['category' => 'RBE-repair-by-exchange']) }}">CMM
                            Probes</a>
                    </li>
                    <li class="nav-item  {{ request()->is('used-cmms*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('used.cmm') }}">Used CMMs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">Certified CMMs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">CMM Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">CMM Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">CMM Fixtures</a>
                    </li>
                    <li class="nav-item {{ request()->is('cart') || request()->is('checkout') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center position-relative" href="{{ route('cart') }}">
                            CMM Cart
                            <i class="fa-duotone fa-solid fa-cart-shopping ms-2"></i>
                            @php
                                $totalItems = Helper::getTotalItems();
                            @endphp
                            @if (Helper::getTotalItems() > 0)
                                <span class="badge">
                                    {{ $totalItems > 10 ? '10+' : $totalItems }}
                                </span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
