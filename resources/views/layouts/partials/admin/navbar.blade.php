<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme shadow-sm"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <h5 class="ps-1 ps-sm-2 lh-0 m-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1 m-0">
                            @php
                                $segments = request()->segments();
                                $url = '';
                            @endphp

                            @foreach ($segments as $key => $segment)
                                @php
                                    if ($key === 0 && $segment === 'admin') {
                                        continue;
                                    }
                                    $segment = Str::of($segment)->replace('-', ' ')->title();
                                    $url .= '/' . $segment;
                                @endphp

                                @if ($key == 0)
                                    <li class="breadcrumb-item">{{ ucfirst($segment) }}</li>
                                @elseif($key < count($segments) - 1)
                                    <li class="breadcrumb-item">{{ ucfirst($segment) }}</li>
                                @else
                                    <li class="breadcrumb-item active">{{ ucfirst($segment) }}</li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                </h5>
            </div>
        </div>
        <!-- /Search -->

        <!-- User -->
        {{-- <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">{{ Auth::user()->email }}</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.settings') }}">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul> --}}
        <!--/ User -->
    </div>
</nav>
