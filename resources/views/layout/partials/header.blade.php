<header class="header text-white py-3">
    <div class="container">
        <h1 class="mb-0 text-center navbar-brand">
            <a class="text-decoration-none text-white" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/CMM-banner.jpg') }}" alt="Logo" />
            </a>
        </h1>
    </div>
</header>

<section class="Navbar-section">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between m-2" id="navbarNav">
                    <ul class="navbar-nav w-100 justify-content-between text-center">
                        <li class="nav-item {{ request()->is('CMM-Probes') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('probes') }}">CMM Probes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Certified CMMs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CMM Software</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CMM Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CMM Fixtures</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
