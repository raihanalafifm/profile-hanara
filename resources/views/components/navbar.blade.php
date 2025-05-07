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
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="{{ url('/about') }}">About Us</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Cotact US</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Career</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false aria-expanded="false">
              Zimbra
            </a>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
              <li><a class="dropdown-item" href="{{ url('/about') }}">Zimbra Cloud</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Zimbra Server</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Instalasi</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Maintenance</a></li>
              <li><a class="dropdown-item" href="{{ url('/team') }}">Troubleshooting</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('software-house*') ? 'active' : '' }}" href="#" id="softwareDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false aria-expanded="false">
              Software House
            </a>
            <ul class="dropdown-menu" aria-labelledby="softwareDropdown">
              <li><a class="dropdown-item" href="{{ url('/software-house/web') }}">Web Development</a></li>
              <li><a class="dropdown-item" href="{{ url('/software-house/mobile') }}">Mobile Apps</a></li>
              <li><a class="dropdown-item" href="{{ url('/software-house/mobile') }}">Maintenance</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->is('business-solution*') ? 'active' : '' }}" href="#" id="businessDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false aria-expanded="false">
              Business Solution
            </a>
            <ul class="dropdown-menu" aria-labelledby="businessDropdown">
              <li><a class="dropdown-item" href="{{ url('/business-solution/erp') }}">HCM + HCIS</a></li>
              <li><a class="dropdown-item" href="{{ url('/business-solution/crm') }}">Nextcloud</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('cctv*') ? 'active' : '' }}" href="{{ url('/cctv') }}">Motorola</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('cctv*') ? 'active' : '' }}" href="{{ url('/cctv') }}">CCTV</a>
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