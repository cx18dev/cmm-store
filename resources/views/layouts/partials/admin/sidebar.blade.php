<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo d-flex justify-content-center">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <img src="{{ asset('assets/images/CMM-banner.jpg') }}" alt="Logo" class="img-fluid">
            {{-- <span class="app-brand-text demo text-body fw-bold ps-2">Admin</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <li class="menu-item open {{ request()->is('admin/category*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Category">Category</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/category/main-category') ? 'active' : '' }}">
                    <a href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="Main Category">Main Category</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/category/sub-category') ? 'active' : '' }}">
                    <a href="#" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-file"></i>
                        <div data-i18n="Sub Category">Sub Category</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->getRequestUri() === '/admin/probes' ? 'active' : '' }}">
            <a href="{{ route('admin.parts.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Probes">Probes</div>
            </a>
        </li>

        <li class="menu-item {{ request()->getRequestUri() === '/admin/profile' ? 'active' : '' }}">
            <a href="{{ route('admin.profile.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profile">Profile</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ request()->getRequestUri() === '/admin/settings' ? 'active' : '' }}">
            <a href="{{ route('admin.settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li> --}}

        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div data-i18n="Log Out">Log Out</div>
            </a>
        </li>
    </ul>
</aside>
