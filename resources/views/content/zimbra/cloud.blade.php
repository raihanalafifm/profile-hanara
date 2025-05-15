@extends('layout.main')

@section('container')
<!-- Zimbra Cloud Header Section -->
<section class="hnr-cloud-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Zimbra Cloud Image -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-cloud-logo-container">
          <img src="{{ asset('assets/images/icon/zimbra-cloud.png') }}" alt="Zimbra Cloud" class="hnr-cloud-logo">
        </div>
      </div>
      
      <!-- Description Section -->
      <div class="col-lg-7">
        <div class="hnr-cloud-content">
          <h1 class="hnr-cloud-title">
            <span class="hnr-cloud-title-orange">ZIMBRA</span> CLOUD
          </h1>
          
          <p class="hnr-cloud-description">
            Jasa Maintenance Zimbra adalah layanan support Zimbra Mail Server untuk memudahkan customer dalam melakukan pemeliharaan atau preventive maintenance. Layanan minus proteksi yang dipadukan oleh penambahan, minus hardware (customer harus memberikan berupa hardware untuk VPS). Kualitas yang menjadi novel server yang dibanderol untuk kita, selain software open source yang memberikan penawaran oleh keistimewaan email server agar tidak selalu kendala selalu dan low bandwidth (upgrade bandwidth).
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Zimbra Cloud Features Section -->
<section class="hnr-cloud-features-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="hnr-cloud-features-title">Fitur <span class="hnr-title-bold">Zimbra Cloud</span></h2>
        <p class="hnr-cloud-features-subtitle">Kemudahan kelolanya akan membawa nyaman dalam pengelolaan email</p>
      </div>
    </div>

    <div class="row mt-5">
      <!-- Row 1 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-gear-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Admin Console</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-list-task"></i>
          </div>
          <h3 class="hnr-feature-title">Task</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-calendar-week"></i>
          </div>
          <h3 class="hnr-feature-title">Calendar</h3>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-funnel-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Mail Filter</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-folder2-open"></i>
          </div>
          <h3 class="hnr-feature-title">Folder & File</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-key-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Forgot Password</h3>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Mail Protection</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-person-lines-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Contact</h3>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="hnr-feature-circle">
          <div class="hnr-feature-icon">
            <i class="bi bi-briefcase-fill"></i>
          </div>
          <h3 class="hnr-feature-title">Briefcase</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Zimbra Cloud Packages Section -->
<section class="hnr-cloud-packages-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="hnr-cloud-packages-title">Paket <span class="hnr-title-bold">Zimbra Cloud</span></h2>
        <p class="hnr-cloud-packages-subtitle">Dapatkan penawaran paket Zimbra Cloud yang terbaik dan PT Hanara Prima Solusindo</p>
      </div>
    </div>

    <div class="row mt-5">
      <!-- Package 1: Basic -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-package-card">
          <div class="hnr-package-header">
            <div class="hnr-package-badge">
              <span class="hnr-badge-dot"></span>
              <span class="hnr-badge-text">Business Email</span>
            </div>
            <h3 class="hnr-package-price">Rp30k <span class="hnr-price-period">/bulan</span></h3>
            <a href="#" class="hnr-order-btn">Pesan Paket</a>
          </div>
          
          <div class="hnr-package-content">
            <h4 class="hnr-included-title">What's Included</h4>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Email</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Advanced Search</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Zimbra for Custom Extensions</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Conversation Views</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Offline Web Client (Online & Offline)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Attachment Search</li>
              </ul>
            </div>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Contacts</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Personal Distribution Lists</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Shared Address Lists (GAL)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> LDAP Exchange Interoperability</li>
              </ul>
            </div>
            
            <a href="#" class="hnr-more-btn">Lihat semua fitur</a>
          </div>
        </div>
      </div>

      <!-- Package 2: Standard -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-package-card">
          <div class="hnr-package-header">
            <div class="hnr-package-badge">
              <span class="hnr-badge-dot"></span>
              <span class="hnr-badge-text">Business Email</span>
            </div>
            <h3 class="hnr-package-price">Rp50k <span class="hnr-price-period">/bulan</span></h3>
            <a href="#" class="hnr-order-btn">Pesan Paket</a>
          </div>
          
          <div class="hnr-package-content">
            <h4 class="hnr-included-title">What's Included</h4>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Email</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Advanced Search</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Zimbra for Custom Extensions</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Conversation Views</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Offline Web Client (Online & Offline)</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Attachment Search</li>
              </ul>
            </div>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Contacts</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Personal Distribution Lists</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>Shared Address Lists (GAL)</li>
                <li class="hnr-feature-item"><span class="hnr-check-icon"></span>LDAP Exchange Interoperability</li>
              </ul>
            </div>
            
            <a href="#" class="hnr-more-btn">Lihat semua fitur</a>
          </div>
        </div>
      </div>

      <!-- Package 3: Standard Plus -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-package-card">
          <div class="hnr-package-header standard-package">
            <div class="hnr-package-badge">
              <span class="hnr-badge-dot"></span>
              <span class="hnr-badge-text">Standard Email</span>
            </div>
            <h3 class="hnr-package-price">Rp70k <span class="hnr-price-period">/bulan</span></h3>
            <a href="#" class="hnr-order-btn">Pesan Paket</a>
          </div>
          
          <div class="hnr-package-content">
            <h4 class="hnr-included-title">What's Included</h4>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Email</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Advanced Search</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Zimbra for Custom Extensions</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Conversation Views</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Offline Web Client (Online & Offline)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Attachment Search</li>
              </ul>
            </div>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Contacts</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Personal Distribution Lists</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> Shared Address Lists (GAL)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-green"></i> LDAP Exchange Interoperability</li>
              </ul>
            </div>
            
            <a href="#" class="hnr-more-btn">Lihat semua fitur</a>
          </div>
        </div>
      </div>

      <!-- Package 4: Professional -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-package-card">
          <div class="hnr-package-header professional-package">
            <div class="hnr-package-badge">
              <span class="hnr-badge-dot"></span>
              <span class="hnr-badge-text">Professional</span>
            </div>
            <h3 class="hnr-package-price">Rp90k <span class="hnr-price-period">/bulan</span></h3>
            <a href="#" class="hnr-order-btn professional-btn">Pesan Paket</a>
          </div>
          
          <div class="hnr-package-content">
            <h4 class="hnr-included-title">What's Included</h4>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Email</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Advanced Search</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Zimbra for Custom Extensions</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Conversation Views</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Offline Web Client (Online & Offline)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Attachment Search</li>
              </ul>
            </div>
            
            <div class="hnr-package-section">
              <h5 class="hnr-section-title">Contacts</h5>
              <ul class="hnr-feature-list">
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Personal Distribution Lists</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> Shared Address Lists (GAL)</li>
                <li class="hnr-feature-item"><i class="bi bi-check-circle-fill text-orange"></i> LDAP Exchange Interoperability</li>
              </ul>
            </div>
            
            <a href="#" class="hnr-more-btn">Lihat semua fitur</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Us Section -->
<section class="hnr-contact-section">
  <div class="container">
    @include('components.contact')
  </div>
</section>

@endsection