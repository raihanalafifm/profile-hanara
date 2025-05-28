@extends('layout.main')

@section('container')
<!-- CCTV Hero Section -->
<div class="reveal-section">
<section class="hnr-cctv-hero-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- CCTV Image with Brands -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-cctv-image-container">
          <img src="{{ asset('assets/images/icon/cctv icon.png') }}" alt="CCTV Solutions" class="hnr-cctv-main-image">
        </div>
      </div>
      
      <!-- CCTV Content -->
      <div class="col-lg-7">
        <div class="hnr-cctv-content">
          <h1 class="hnr-cctv-title">
            <span class="hnr-cctv-title-orange">HANARA CCTV</span>
            <span class="d-block">Solusi Anda Untuk Kebutuhan CCTV</span>
          </h1>
          
          <p class="hnr-cctv-description">
            Hanara CCTV adalah unit bisnis PT Hanara Prima Solusindo dalam bidang CCTV yang didedikasikan khusus untuk memberikan solusi keamanan terbaik kepada pelanggan kami dengan teknologi CCTV yang canggih dengan pengalaman yang tepat dengan kebutuhan anda.
          </p>
          
          <a href="#contact" class="hnr-cctv-button">Ayok Hubungi!</a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>


<!-- Why Choose Us Section -->
<div class="reveal-section">
<section class="hnr-cctv-why-section">
  <div class="container">
    <div class="hnr-cctv-section-title text-center">
      <h2 class="hnr-cctv-title-heading">
        <span class="hnr-cctv-title-orange">Alasan</span> Memilih Kami
      </h2>
      <h3 class="hnr-cctv-title-subheading">Sebagai Penyedia CCTV</h3>
      <p class="hnr-cctv-title-description">
        Kami menyediakan layanan CCTV berkualitas dengan teknologi terkini, pemasangan profesional, serta layanan cepat dan tanggapnya untuk memastikan keamanan Anda hingga setiap sudut.
      </p>
    </div>
    
    <div class="row mt-5">
      <!-- Legalitas -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon1.png') }}" alt="Legalitas">
          </div>
          <h3 class="hnr-cctv-feature-title">Memiliki Legalitas Perusahaan</h3>
        </div>
      </div>
      
      <!-- Teknisi Profesional -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon2.png') }}" alt="Teknisi Profesional">
          </div>
          <h3 class="hnr-cctv-feature-title">Teknisi Professional & Berpengalaman</h3>
        </div>
      </div>
      
      <!-- Fleksibel -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon3.png') }}" alt="Fleksibel">
          </div>
          <h3 class="hnr-cctv-feature-title">Fleksibel Sesuai Kebutuhan Anda</h3>
        </div>
      </div>
      
      <!-- Harga Kompetitif -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon4.png') }}" alt="Harga Kompetitif">
          </div>
          <h3 class="hnr-cctv-feature-title">Harga Kompetitif</h3>
        </div>
      </div>
      
      <!-- Garansi -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon5.png') }}" alt="Garansi">
          </div>
          <h3 class="hnr-cctv-feature-title">Garansi Pemasangan CCTV</h3>
        </div>
      </div>
      
      <!-- Teknisi Terintegritas -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon6.png') }}" alt="Teknisi Terintegritas">
          </div>
          <h3 class="hnr-cctv-feature-title">Teknisi yang Berintegritas</h3>
        </div>
      </div>
      
      <!-- Proses Instalasi -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon7.png') }}" alt="Proses Instalasi">
          </div>
          <h3 class="hnr-cctv-feature-title">Proses Instalasi Cepat & Rapi</h3>
        </div>
      </div>
      
      <!-- Kualitas -->
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="hnr-cctv-feature-card text-center">
          <div class="hnr-cctv-feature-icon">
            <img src="{{ asset('assets/images/icon/cctv-icon8.png') }}" alt="Kualitas">
          </div>
          <h3 class="hnr-cctv-feature-title">Kualitas CCTV Terbaik</h3>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- Product Section -->
<div class="reveal-section">
<section class="hnr-cctv-product-section">
  <div class="container">
    <div class="hnr-cctv-section-title text-center">
      <h2 class="hnr-cctv-title-heading">
        <span class="hnr-cctv-title-orange">Pilih Produk</span> 
      </h2>
      <h3 class="hnr-cctv-title-subheading">Sesuai Kebutuhan Anda</h3>
      <p class="hnr-cctv-title-description">
        Produk CCTV yang tepat untuk segala rumah atau bisnis Anda. Beragam pilihan merek dengan kualitas terbaik.
      </p>
    </div>
    
    <div class="hnr-cctv-brand-logos mt-5">
      <div class="hnr-cctv-brand-logo-item">
        <img src="{{ asset('assets/images/icon/hikvision.png') }}" alt="Hikvision">
      </div>
      <div class="hnr-cctv-brand-logo-item">
        <img src="{{ asset('assets/images/icon/ezviz.png') }}" alt="Ezviz">
      </div>
      <div class="hnr-cctv-brand-logo-item">
        <img src="{{ asset('assets/images/icon/bardi.png') }}" alt="Bardi">
      </div>
      <div class="hnr-cctv-brand-logo-item">
        <img src="{{ asset('assets/images/icon/xiaomi.png') }}" alt="Xiaomi">
      </div>
      <div class="hnr-cctv-brand-logo-item">
        <img src="{{ asset('assets/images/icon/acome.png') }}" alt="Acome">
      </div>
    </div>
  </div>
</section>
</div>
  <div class="container">
    @include('components.contact')
  </div>
@endsection