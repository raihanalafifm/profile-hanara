<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('backend.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/images/icon/icon hanara.png') }}" alt="Icon Hanara" style="width: 25px; height: auto;" />

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Hanara Admin</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
            <a href="{{ route('backend.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        
        <!-- Artikel -->
        <li class="menu-item {{ request()->routeIs('backend.articles.*') ? 'active' : '' }}">
            <a href="{{ route('backend.articles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Artikel">Artikel</div>
            </a>
        </li>
        
        <!-- Career -->
        <li class="menu-item {{ request()->routeIs('backend.careers.*') ? 'active' : '' }}">
            <a href="{{ route('backend.careers.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase"></i>
                <div data-i18n="Career">Career</div>
            </a>
        </li>
        
        <!-- Users -->
        <li class="menu-item {{ request()->routeIs('backend.users.*') ? 'active' : '' }}">
            <a href="{{ route('backend.users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
    </ul>
</aside>