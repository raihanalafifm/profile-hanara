@extends('layout.main')

@section('container')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Content -->
        <div class="col-lg-6 hero-content">
          <div class="company-name">PT HANARA PRIMA SOLUTION</div>
          <h1 class="hero-title">
            <span class="text-primary">Digital</span> Innovation<br>
            For Your Future
          </h1>
          <p class="hero-description">
            Solusi digital terdepan untuk bisnis Anda. Kami menyediakan layanan teknologi informasi terbaik untuk semua kebutuhan bisnis Anda.
          </p>
          
          <!-- Service Cards -->
          <div class="service-cards">
            <div class="service-card">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-1.png') }}" alt="Professional Services"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Professional Services
              </div>
            </div>
            
            <div class="service-card">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-2.png') }}" alt="Professional Services"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Managed IT System
              </div>
            </div>
            
            <div class="service-card">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-3.png') }}" alt="Professional Services"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Managed Social Media
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 hero-image">
            <!-- Main device image -->
            <div class="device-image">
              <img src="{{ asset('assets/images/icon/icon-hero.png') }}" alt="Digital Innovation" class="img-fluid main-device">
            </div>
    
      </div>
    </div>
  </section>
@endsection