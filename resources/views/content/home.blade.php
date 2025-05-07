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
<!-- About Us Section -->
<section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Image Content -->
        <div class="col-lg-6 about-images">
          <div class="about-image-wrapper">
            <div class="certificate-logo">
              <img src="{{ asset('assets/images/icon/sertifikat.png') }}" alt="Certificate Logo" class="img-fluid">
            </div>
            <div class="main-image">
              <img src="{{ asset('assets/images/gambar/meeting-home.png') }}" alt="Team Presentation" class="img-fluid">
            </div>
          </div>
        </div>
        
        <!-- Right Text Content -->
        <div class="col-lg-6 about-content">
          <div class="section-heading">
            <span class="section-tag">• About Us •</span>
            <h2 class="company-name"><span class="text-primary">PT </span>HANARA<br>PRIMA SOLUTION</h2>
          </div>
          
          <div class="about-description">
            <p>
              PT Hanara Prima Solusindo adalah mitra inovasi teknologi terpercaya yang menyediakan solusi IT komprehensif untuk menjawab tantangan dunia bisnis di era digital. Dengan layanan seperti Nextcloud, Zimbra Mail Server, dukungan IT 24/7, serta aplikasi berbasis web dan mobile yang dikembangkan in-house, Hanara berkomitmen menghadirkan solusi yang handal dan disesuaikan dengan kebutuhan strategis klien untuk mengoptimalkan produktivitas bisnis mereka.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection