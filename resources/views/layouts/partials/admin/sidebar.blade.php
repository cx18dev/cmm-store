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

        <li class="menu-item {{ request()->is('admin/pages*') ? 'active' : '' }}">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-customize"></i>
                <div data-i18n="Pages">Pages</div>
            </a>
        </li>

        {{-- <li class="menu-item open {{ request()->is('admin/inquiry*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Inquiry">Inquiry</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/inquiry/trial-requests') ? 'active' : '' }}">
                    <a href="{{ route('admin.inquiry.trial.requests') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="Media">Trial Requests</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/inquiry/news-letters') ? 'active' : '' }}">
                    <a href="{{ route('admin.inquiry.news.letters') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-file"></i>
                        <div data-i18n="Media">News Letters</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/inquiry/user-manual') ? 'active' : '' }}">
                    <a href="{{ route('admin.inquiry.user.manual') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-book"></i>
                        <div data-i18n="Media">User Manual</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/inquiry/quotes') ? 'active' : '' }}">
                    <a href="{{ route('admin.inquiry.quote') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="Media">Quotes</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/inquiry/helps') ? 'active' : '' }}">
                    <a href="{{ route('admin.inquiry.help') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-help-circle"></i>
                        <div data-i18n="Media">Help</div>
                    </a>
                </li>
            </ul>
        </li> --}}

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
