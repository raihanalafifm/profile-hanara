<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top navbar-default">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}" alt="Hanara" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('about.*') ? 'active' : '' }}" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item {{ request()->routeIs('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About Us</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('zimbra.*') ? 'active' : '' }}" href="#" id="zimbraDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              Zimbra
            </a>
            <ul class="dropdown-menu" aria-labelledby="zimbraDropdown">
              <li><a class="dropdown-item {{ request()->routeIs('cloud-zimbra') ? 'active' : '' }}" href="{{ route('cloud-zimbra') }}">Zimbra Cloud</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('server-zimbra') ? 'active' : '' }}" href="{{ route('server-zimbra') }}">Zimbra Server</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('instalasi-zimbra') ? 'active' : '' }}" href="{{ route('instalasi-zimbra') }}">Instalasi</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('maintenance-zimbra') ? 'active' : '' }}" href="{{ route('maintenance-zimbra') }}">Maintenance</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('troubleshooting-zimbra') ? 'active' : '' }}" href="{{ route('troubleshooting-zimbra') }}">Troubleshooting</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('house.*') ? 'active' : '' }}" href="#" id="softwareDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              Software House
            </a>
            <ul class="dropdown-menu" aria-labelledby="softwareDropdown">
              <li><a class="dropdown-item {{ request()->routeIs('develop-web') ? 'active' : '' }}" href="{{ route('develop-web') }}">Web Development</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('web-application') ? 'active' : '' }}" href="{{ route('web-application') }}">Web Application</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('maintenance-web') ? 'active' : '' }}" href="{{ route('maintenance-web') }}">Maintenance</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('business.*') ? 'active' : '' }}" href="#" id="businessDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              Business Solution
            </a>
            <ul class="dropdown-menu" aria-labelledby="businessDropdown">
              <li><a class="dropdown-item {{ request()->routeIs('hcis') ? 'active' : '' }}" href="{{ route('hcis') }}">HCM + HCIS</a></li>
              <li><a class="dropdown-item {{ request()->routeIs('nextcloud') ? 'active' : '' }}" href="{{ route('nextcloud') }}">Nextcloud</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('motorola') ? 'active' : '' }}" href="{{ route('motorola') }}">Motorola</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('cctv') ? 'active' : '' }}" href="{{ route('cctv') }}">CCTV</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
  // Create span element for hamburger menu animation
  const togglerIcon = document.querySelector('.navbar-toggler-icon');
  if (togglerIcon && !togglerIcon.querySelector('span')) {
    const span = document.createElement('span');
    togglerIcon.appendChild(span);
  }
  
  // Navbar scroll effect
  const navbar = document.querySelector('.navbar');
  let lastScroll = 0;
  
  window.addEventListener('scroll', function() {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
      navbar.classList.remove('navbar-default');
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
      navbar.classList.add('navbar-default');
    }
    
    lastScroll = currentScroll;
  });
  
  // Check if mobile or desktop
  function isMobile() {
    return window.innerWidth < 992;
  }
  
  // Mobile dropdown handling
  if (isMobile()) {
    setupMobileNav();
  } else {
    setupDesktopNav();
  }
  
  // Setup mobile navigation
  function setupMobileNav() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
      // Remove any existing event listeners
      const newToggle = toggle.cloneNode(true);
      toggle.parentNode.replaceChild(newToggle, toggle);
      
      newToggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const dropdownMenu = this.nextElementSibling;
        const isOpen = dropdownMenu.classList.contains('show');
        
        // Close all other dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.remove('show');
        });
        
        document.querySelectorAll('.dropdown-toggle').forEach(t => {
          t.setAttribute('aria-expanded', 'false');
        });
        
        // Toggle current dropdown
        if (!isOpen) {
          dropdownMenu.classList.add('show');
          this.setAttribute('aria-expanded', 'true');
        } else {
          dropdownMenu.classList.remove('show');
          this.setAttribute('aria-expanded', 'false');
        }
      });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.remove('show');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
        });
      }
    });
    
    // Handle navbar collapse on link click
    const navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const navbarToggler = document.querySelector('.navbar-toggler');
    
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
          // Use Bootstrap's collapse method if available
          if (window.bootstrap && window.bootstrap.Collapse) {
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bsCollapse) {
              bsCollapse.hide();
            }
          } else {
            // Fallback method
            navbarToggler.click();
          }
        }
      });
    });
  }
  
  // Setup desktop navigation
  function setupDesktopNav() {
    document.querySelectorAll('.navbar .dropdown').forEach(function(dropdown) {
      dropdown.addEventListener('mouseenter', function() {
        const dropdownToggle = this.querySelector('.dropdown-toggle');
        
        // Prevent default click behavior on desktop
        dropdownToggle.addEventListener('click', function(e) {
          e.preventDefault();
        });
        
        // Show dropdown
        const dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownToggle.classList.add('show');
        dropdownMenu.classList.add('show');
        dropdownToggle.setAttribute('aria-expanded', 'true');
        
        // Remove focus
        dropdownToggle.blur();
      });
      
      dropdown.addEventListener('mouseleave', function() {
        const dropdownToggle = this.querySelector('.dropdown-toggle');
        const dropdownMenu = this.querySelector('.dropdown-menu');
        
        dropdownToggle.classList.remove('show');
        dropdownMenu.classList.remove('show');
        dropdownToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }
  
  // Handle window resize
  let resizeTimer;
  let wasMobile = isMobile();
  
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      const isNowMobile = isMobile();
      
      // Only re-setup if we've crossed the mobile/desktop boundary
      if (wasMobile !== isNowMobile) {
        // Reset all dropdowns
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
          menu.classList.remove('show');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
          toggle.setAttribute('aria-expanded', 'false');
        });
        
        // Setup appropriate navigation
        if (isNowMobile) {
          setupMobileNav();
        } else {
          setupDesktopNav();
        }
        
        wasMobile = isNowMobile;
      }
    }, 250);
  });
  
  // Prevent navbar from closing when clicking inside dropdown
  document.querySelectorAll('.dropdown-menu').forEach(function(dropdown) {
    dropdown.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });
});
  </script>