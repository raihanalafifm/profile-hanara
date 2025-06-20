<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top navbar-default" role="navigation"
    aria-label="Main navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" aria-label="Hanara - Home">
            @php
                $currentRoute = Route::currentRouteName();
                $logoPath = 'assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png';
                $logoAlt = 'Hanara Logo';
                $logoClass = 'logo';

                // Change logo based on current route
                if ($currentRoute === 'mit') {
                    $logoPath = 'assets/images/icon1/mit.png';
                    $logoAlt = 'MIT Logo';
                    $logoClass = 'logo logo-mit';
                } elseif ($currentRoute === 'sikerja') {
                    $logoPath = 'assets/images/icon1/sikerja.png';
                    $logoAlt = 'SiKerja Logo';
                    $logoClass = 'logo logo-sikerja';
                }
            @endphp

            <img src="{{ asset($logoPath) }}" alt="{{ $logoAlt }}" class="{{ $logoClass }}" width="120"
                height="40">
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle main navigation">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" role="menubar">
                <li class="nav-item" role="none">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('dashboard') }}"
                        role="menuitem" {{ request()->routeIs('home') ? 'aria-current="page"' : '' }}>
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown" role="none">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('about.*') ? 'active' : '' }}"
                        href="#" id="aboutDropdown" role="menuitem" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown" role="menu">
                        <li><a class="dropdown-item {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                href="{{ route('about-us') }}">About Us</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                                href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('articles.*') ? 'active' : '' }}"
                                href="{{ route('articles.index') }}">Artikels</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('career') ? 'active' : '' }}"
                                href="{{ route('career') }}">Career</a></li>
                        <li><a class="dropdown-item ? 'active' : ''" target="_blank" rel="noopener noreferrer"
                                href="{{ url('https://hanara.id/about.pdf') }}">Company
                                Profile</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('zimbra.*') || request()->routeIs('cloud-zimbra') || request()->routeIs('server-zimbra') || request()->routeIs('instalasi-zimbra') || request()->routeIs('maintenance-zimbra') || request()->routeIs('troubleshooting-zimbra') ? 'active' : '' }}"
                        href="#" id="zimbraDropdown" role="button" aria-expanded="false">
                        Zimbra
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="zimbraDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('cloud-zimbra') ? 'active' : '' }}"
                                href="{{ route('cloud-zimbra') }}">Zimbra Cloud</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('server-zimbra') ? 'active' : '' }}"
                                href="{{ route('server-zimbra') }}">Zimbra Server</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('instalasi-zimbra') ? 'active' : '' }}"
                                href="{{ route('instalasi-zimbra') }}">Instalasi</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('maintenance-zimbra') ? 'active' : '' }}"
                                href="{{ route('maintenance-zimbra') }}">Maintenance</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('troubleshooting-zimbra') ? 'active' : '' }}"
                                href="{{ route('troubleshooting-zimbra') }}">Troubleshooting</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('house.*') || request()->routeIs('develop-web') || request()->routeIs('web-application') || request()->routeIs('maintenance-web') ? 'active' : '' }}"
                        href="#" id="softwareDropdown" role="button" aria-expanded="false">
                        Software House
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="softwareDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('develop-web') ? 'active' : '' }}"
                                href="{{ route('develop-web') }}">Web Development</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('web-application') ? 'active' : '' }}"
                                href="{{ route('web-application') }}">Web Application</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('maintenance-web') ? 'active' : '' }}"
                                href="{{ route('maintenance-web') }}">Maintenance</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('business.*') || request()->routeIs('hcis') || request()->routeIs('nextcloud') || request()->routeIs('sosmed') || request()->routeIs('sikerja') || request()->routeIs('mit') ? 'active' : '' }}"
                        href="#" id="businessDropdown" role="button" aria-expanded="false">
                        Business Solution
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="businessDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('hcis') ? 'active' : '' }}"
                                href="{{ route('hcis') }}">HCM + HCIS</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('nextcloud') ? 'active' : '' }}"
                                href="{{ route('nextcloud') }}">Nextcloud</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sosmed') ? 'active' : '' }}"
                                href="{{ route('sosmed') }}">Digital Marketing </a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('sikerja') ? 'active' : '' }}"
                                href="{{ route('sikerja') }}">SiKerja</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('mit') ? 'active' : '' }}"
                                href="{{ route('mit') }}">MIT</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('motorola') ? 'active' : '' }}"
                        href="{{ route('motorola') }}">Motorola</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cctv') ? 'active' : '' }}"
                        href="{{ route('cctv') }}">CCTV</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('house.*') ? 'active' : '' }}"
                        href="#" id="support" role="button" aria-expanded="false">
                        Support
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="support">
                        <li><a target="_blank" rel="noopener noreferrer" class="dropdown-item "
                                href="{{ url('https://portal.hanara.id') }}">Portal</a></li>
                        <li><a target="_blank" rel="noopener noreferrer" class="dropdown-item "
                                href="{{ url('https://sikerja.hanara.id ') }}">SiKerja</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="theme-toggle ms-3">
            <button class="theme-toggle-btn" id="themeToggle" aria-label="Toggle dark mode">
                {{-- <i class="bi bi-sun-fill light-icon"></i>
                <i class="bi bi-moon-fill dark-icon"></i> --}}
            </button>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Create hamburger animation span
        const togglerIcon = document.querySelector('.navbar-toggler-icon');
        if (togglerIcon && !togglerIcon.querySelector('span')) {
            const span = document.createElement('span');
            togglerIcon.appendChild(span);
        }

        // Get elements
        const toggler = document.querySelector('.navbar-toggler');
        const collapse = document.querySelector('.navbar-collapse');
        const navbar = document.querySelector('.navbar');

        // Check if mobile
        function isMobile() {
            return window.innerWidth < 992;
        }

        // Toggle navbar manually
        toggler.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            collapse.classList.toggle('show');
            const isOpen = collapse.classList.contains('show');
            toggler.setAttribute('aria-expanded', isOpen);
            toggler.classList.toggle('collapsed', !isOpen);
        });

        // Close navbar function
        function closeNavbar() {
            if (isMobile()) {
                collapse.classList.remove('show');
                toggler.setAttribute('aria-expanded', 'false');
                toggler.classList.add('collapsed');

                // Close all dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                    toggle.setAttribute('aria-expanded', 'false');
                });
            }
        }

        // Handle dropdown toggles
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (isMobile()) {
                    const dropdownMenu = this.nextElementSibling;
                    const isOpen = dropdownMenu.classList.contains('show');

                    // Close other dropdowns
                    document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.remove('show');
                        }
                    });
                    document.querySelectorAll('.dropdown-toggle').forEach(t => {
                        if (t !== this) {
                            t.setAttribute('aria-expanded', 'false');
                        }
                    });

                    // Toggle current dropdown
                    if (!isOpen) {
                        dropdownMenu.classList.add('show');
                        this.setAttribute('aria-expanded', 'true');
                    } else {
                        dropdownMenu.classList.remove('show');
                        this.setAttribute('aria-expanded', 'false');
                    }
                }
            });
        });

        // Close navbar when clicking nav links (non-dropdown)
        document.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(link => {
            link.addEventListener('click', function() {
                closeNavbar();
            });
        });

        // Close navbar when clicking dropdown items
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function() {
                setTimeout(closeNavbar, 100);
            });
        });

        // Close navbar when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.navbar')) {
                closeNavbar();
            }
        });

        // Scroll effect
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                navbar.classList.remove('navbar-default');
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.add('navbar-default');
            }
        });

        // Desktop hover effect
        if (!isMobile()) {
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                dropdown.addEventListener('mouseenter', function() {
                    const toggle = this.querySelector('.dropdown-toggle');
                    const menu = this.querySelector('.dropdown-menu');

                    toggle.classList.add('show');
                    menu.classList.add('show');
                    toggle.setAttribute('aria-expanded', 'true');
                });

                dropdown.addEventListener('mouseleave', function() {
                    const toggle = this.querySelector('.dropdown-toggle');
                    const menu = this.querySelector('.dropdown-menu');

                    toggle.classList.remove('show');
                    menu.classList.remove('show');
                    toggle.setAttribute('aria-expanded', 'false');
                });
            });
        }

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Close everything on resize
                closeNavbar();

                // Re-setup desktop hover if needed
                if (!isMobile()) {
                    document.querySelectorAll('.dropdown').forEach(dropdown => {
                        const toggle = dropdown.querySelector('.dropdown-toggle');
                        toggle.removeEventListener('click', null);
                    });
                }
            }, 250);
        });
    });
</script>

<style>
    .navbar-brand .logo-mit {
        max-height: 45px;
        width: auto;
    }

    .navbar-brand .logo-sikerja {
        max-height: 40px;
        width: auto;
    }

    /* Smooth transition when changing pages */
    .navbar-brand img {
        transition: opacity 0.3s ease;
    }

    /* Optional: Add hover effect for product logos */
    .navbar-brand:hover .logo-mit,
    .navbar-brand:hover .logo-sikerja {
        opacity: 0.8;
    }

    /* Mobile responsive adjustments */
    @media (max-width: 768px) {

        .navbar-brand .logo-mit,
        .navbar-brand .logo-sikerja {
            max-height: 35px;
        }
    }

    /* Mobile dropdown fix */
    @media (max-width: 991px) {
        .dropdown-menu {
            position: static !important;
            transform: none !important;
            width: 100%;
            border: none;
            box-shadow: none;
            background-color: #f8f9fa;
            border-radius: 0;
            margin: 0;
            padding: 0;
            display: none;
        }

        .dropdown-menu.show {
            display: block !important;
            animation: slideDown 0.3s ease;
        }

        .navbar-collapse {
            transition: none !important;
        }

        .navbar-collapse:not(.show) {
            display: none !important;
        }

        .navbar-collapse.show {
            display: block !important;
        }
    }
</style>
