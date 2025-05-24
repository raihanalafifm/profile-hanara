<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
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
  if (window.innerWidth >= 992) {
    document.querySelectorAll('.navbar .dropdown').forEach(function(dropdown) {
      dropdown.addEventListener('mouseenter', function() {
        // Tambahkan preventDefault() untuk mencegah fokus default
        const dropdownToggle = this.querySelector('.dropdown-toggle');
        dropdownToggle.addEventListener('click', function(e) {
          e.preventDefault();
        });
        
        dropdownToggle.click();
        dropdownToggle.classList.add('show');
        this.querySelector('.dropdown-menu').classList.add('show');
        
        // Hapus fokus setelah klik
        dropdownToggle.blur();
      });
      
      dropdown.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-toggle').classList.remove('show');
        this.querySelector('.dropdown-menu').classList.remove('show');
      });
    });
  }
});
    </script>