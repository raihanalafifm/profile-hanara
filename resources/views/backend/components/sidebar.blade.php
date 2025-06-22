<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('backend.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/images/icon/icon hanara.png') }}" alt="Icon Hanara"
                    style="width: 25px; height: auto;" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Hanara Admin</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- User Info -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ auth()->user()->name }}</span>
            <span class="badge bg-label-{{ auth()->user()->isAdmin() ? 'danger' : 'primary' }} ms-2">
                {{ auth()->user()->role_label }}
            </span>
        </li>

        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
            <a href="{{ route('backend.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Admin Only: Approval Menu -->
        @if (auth()->user()->isAdmin())
            <li class="menu-item {{ request()->routeIs('backend.approval.*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-check-shield"></i>
                    <div data-i18n="Approval">Approval</div>
                    @php
                        $pendingCount =
                            \App\Models\Article::pending()->count() +
                            \App\Models\Career::pending()->count() +
                            \App\Models\Motorola::pending()->count();
                    @endphp
                    @if ($pendingCount > 0)
                        <span class="badge bg-danger ms-2">{{ $pendingCount }}</span>
                    @endif
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('backend.approval.index') ? 'active' : '' }}">
                        <a href="{{ route('backend.approval.index') }}" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('backend.approval.articles') ? 'active' : '' }}">
                        <a href="{{ route('backend.approval.articles') }}" class="menu-link">
                            <div data-i18n="Articles">Articles</div>
                            @php $articlesPending = \App\Models\Article::pending()->count(); @endphp
                            @if ($articlesPending > 0)
                                <span class="badge bg-warning ms-2">{{ $articlesPending }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('backend.approval.careers') ? 'active' : '' }}">
                        <a href="{{ route('backend.approval.careers') }}" class="menu-link">
                            <div data-i18n="Careers">Careers</div>
                            @php $careersPending = \App\Models\Career::pending()->count(); @endphp
                            @if ($careersPending > 0)
                                <span class="badge bg-warning ms-2">{{ $careersPending }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="menu-item {{ request()->routeIs('backend.approval.motorola') ? 'active' : '' }}">
                        <a href="{{ route('backend.approval.motorola') }}" class="menu-link">
                            <div data-i18n="Motorola">Motorola</div>
                            @php $motorolaPending = \App\Models\Motorola::pending()->count(); @endphp
                            @if ($motorolaPending > 0)
                                <span class="badge bg-warning ms-2">{{ $motorolaPending }}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <!-- Content Management -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Content Management</span>
        </li>

        <!-- Artikel -->
        <li class="menu-item {{ request()->routeIs('backend.articles.*') ? 'active' : '' }}">
            <a href="{{ route('backend.articles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Artikel">Artikel</div>
                @if (auth()->user()->isUser())
                    @php
                        $myPendingArticles = \App\Models\Article::where('created_by', auth()->id())
                            ->pending()
                            ->count();
                    @endphp
                    @if ($myPendingArticles > 0)
                        <span class="badge bg-warning ms-2">{{ $myPendingArticles }}</span>
                    @endif
                @endif
            </a>
        </li>

        <!-- Career -->
        <li class="menu-item {{ request()->routeIs('backend.careers.*') ? 'active' : '' }}">
            <a href="{{ route('backend.careers.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase"></i>
                <div data-i18n="Career">Career</div>
                @if (auth()->user()->isUser())
                    @php
                        $myPendingCareers = \App\Models\Career::where('created_by', auth()->id())
                            ->pending()
                            ->count();
                    @endphp
                    @if ($myPendingCareers > 0)
                        <span class="badge bg-warning ms-2">{{ $myPendingCareers }}</span>
                    @endif
                @endif
            </a>
        </li>

        <!-- Motorola Products -->
        <li class="menu-item {{ request()->routeIs('backend.motorola.*') ? 'active' : '' }}">
            <a href="{{ route('backend.motorola.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-radio"></i>
                <div data-i18n="Motorola">Motorola Products</div>
                @if (auth()->user()->isUser())
                    @php
                        $myPendingMotorola = \App\Models\Motorola::where('created_by', auth()->id())
                            ->pending()
                            ->count();
                    @endphp
                    @if ($myPendingMotorola > 0)
                        <span class="badge bg-warning ms-2">{{ $myPendingMotorola }}</span>
                    @endif
                @endif
            </a>
        </li>
        <!-- Profile Menu (untuk semua user) -->
        <li class="menu-item {{ request()->routeIs('profile.*') ? 'active' : '' }}">
            <a href="{{ route('profile.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Profile">Profile Saya</div>
            </a>
        </li>

        <!-- Admin Only: System Management -->
        @if (auth()->user()->isAdmin())
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">System Management</span>
            </li>

            <!-- Users -->
            <li class="menu-item {{ request()->routeIs('backend.users.*') ? 'active' : '' }}">
                <a href="{{ route('backend.users.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Users">Users</div>
                </a>
            </li>
        @endif

        <!-- Quick Links -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Quick Links</span>
        </li>

        <li class="menu-item">
            <a href="{{ route('home') }}" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <div data-i18n="Website">View Website</div>
            </a>
        </li>
    </ul>
</aside>
