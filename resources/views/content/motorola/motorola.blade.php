@extends('layout.main')

@section('container')
<!-- Motorola Hero Section -->
<section class="hnr-motorola-hero-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Motorola Image -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-motorola-image-container">
          <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola Devices" class="hnr-motorola-main-image">
        </div>
      </div>
      
      <!-- Motorola Content -->
      <div class="col-lg-7">
        <div class="hnr-motorola-content">
          <h1 class="hnr-motorola-title">
            <span class="hnr-motorola-title-orange">HANDY TALKY & RIG</span>
            <span class="hnr-motorola-title-black d-block">MOTOROLA</span>
          </h1>
          
          <p class="hnr-motorola-description">
            PT Hanara Prima Solusindo sebagai pusat distributor handy talky dan RIG untuk merek Motorola. Motorola terkenal untuk satu nama handal untuk Handy Talky dan menghadirkan berbagai tipe yang memenuhi standar kualitas untuk komunikasi radio baik HT VHF/UHF baik alat operasi pihak depan mendukung kinerja pekerjaan maupun balik layar untuk industri. Handy Talky dan RIG Motorola hadir dalam beragam pilihan sesuai kebutuhan dengan ragam varian dan kelas.
          </p>
          
          <a href="#contact" class="hnr-motorola-button">Pesan Sekarang!</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Product Categories Section -->
<section class="hnr-motorola-categories-section">
  <div class="container">
    <div class="hnr-motorola-section-title text-center">
      <h2 class="hnr-motorola-title-heading">
        Pilih <span class="hnr-motorola-title-orange">Kategori Produk</span>
      </h2>
      <p class="hnr-motorola-title-description">
        Temukan kategori produk yang Anda butuhkan
      </p>
    </div>
    
    <div class="row mt-5">
      <!-- Category 1 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-category-card text-center">
          <div class="hnr-motorola-category-icon">
            <img src="{{ asset('assets/images/icon/moto-vhf.png') }}" alt="Handy Talky & Radio RIG Motorola VHF">
          </div>
          <h3 class="hnr-motorola-category-title">HANDY TALKY & RADIO RIG MOTOROLA VHF</h3>
        </div>
      </div>
      
      <!-- Category 2 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-category-card text-center">
          <div class="hnr-motorola-category-icon">
            <img src="{{ asset('assets/images/icon/moto-uhf.png') }}" alt="Handy Talky & Radio RIG Motorola UHF">
          </div>
          <h3 class="hnr-motorola-category-title">HANDY TALKY & RADIO RIG MOTOROLA UHF</h3>
        </div>
      </div>
      
      <!-- Category 3 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-category-card text-center">
          <div class="hnr-motorola-category-icon">
            <img src="{{ asset('assets/images/icon/moto-battery.png') }}" alt="Battery, Antena, Dan Cable">
          </div>
          <h3 class="hnr-motorola-category-title">BATTERY, ANTENA, DAN CABLE</h3>
        </div>
      </div>
      
      <!-- Category 4 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-category-card text-center">
          <div class="hnr-motorola-category-icon">
            <img src="{{ asset('assets/images/icon/moto-repeater.png') }}" alt="Repeater">
          </div>
          <h3 class="hnr-motorola-category-title">REPEATER</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VHF Products Section -->
<section class="hnr-motorola-products-section">
  <div class="container">
    <div class="hnr-motorola-section-title text-center">
      <h2 class="hnr-motorola-title-heading">
        HT dan RIG <span class="hnr-motorola-title-orange">Motorola VHF</span>
      </h2>
    </div>
    
    <div class="row mt-4">
      <!-- Product 1 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p3688.png') }}" alt="XIR P3688">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P3688 136-174 5W LKR(16)</h3>
        </div>
      </div>
      
      <!-- Product 2 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p6620i.png') }}" alt="XIR P6620I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P6620I 136-174 5W LKP</h3>
        </div>
      </div>
      
      <!-- Product 3 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p8608i.png') }}" alt="XIR P8608I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P8608I 136-174 5W NKP</h3>
        </div>
      </div>
      
      <!-- Product 4 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p8668i.png') }}" alt="XIR P8668I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P8668i 136-174 5W FKP GPS BT WIFI</h3>
        </div>
      </div>
      
      <!-- Product 5 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p8668i.png') }}" alt="XIR P8668I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P6688I 136-174M 5W FKP (16)</h3>
        </div>
      </div>
      
      <!-- Product 6 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/motorola-r2.png') }}" alt="Motorola R2">
          </div>
          <h3 class="hnr-motorola-product-title">Motorola R2 136-174 5W NKP</h3>
        </div>
      </div>
      
      <!-- Product 7 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-m3688.png') }}" alt="XIR M3688">
          </div>
          <h3 class="hnr-motorola-product-title">XIR M3688 136-174M 25W AD</h3>
        </div>
      </div>
      
      <!-- Product 8 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-m8660.png') }}" alt="XIR M8660">
          </div>
          <h3 class="hnr-motorola-product-title">XIR M8660 136-174M 45W AD</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- UHF Products Section -->
<section class="hnr-motorola-products-section hnr-motorola-section-alt">
  <div class="container">
    <div class="hnr-motorola-section-title text-center">
      <h2 class="hnr-motorola-title-heading">
        HT dan RIG <span class="hnr-motorola-title-orange">Motorola UHF</span>
      </h2>
    </div>
    
    <div class="row mt-4">
      <!-- Product 1 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/tdr-4400.png') }}" alt="TDR 4400HZ">
          </div>
          <h3 class="hnr-motorola-product-title">TDR 4400HZ 350-400MHz 403-527 4W LKP</h3>
        </div>
      </div>
      
      <!-- Product 2 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/tdr-4400.png') }}" alt="TDR 4400HZ">
          </div>
          <h3 class="hnr-motorola-product-title">TDR 4400HZ 403-440MHz 403-527 4W LKP(16A)</h3>
        </div>
      </div>
      
      <!-- Additional Products (3-8) -->
      <!-- Add similar blocks for each product in the UHF section -->
      <!-- I'm showing just two examples to keep the response shorter -->

      <!-- Product 3 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p8608i.png') }}" alt="XIR P8608I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P8608I 350-400MHz 403-527 4W NKP</h3>
        </div>
      </div>
      
      <!-- Product 4 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="hnr-motorola-product-card text-center">
          <div class="hnr-motorola-product-badge">
            <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola">
          </div>
          <div class="hnr-motorola-product-image">
            <img src="{{ asset('assets/images/icon/xir-p8668i.png') }}" alt="XIR P8668I">
          </div>
          <h3 class="hnr-motorola-product-title">XIR P8668i 350-400MHz 403-527 4W NKP F16</h3>
        </div>
      </div>
      
      <!-- Add more products as needed -->
    </div>
  </div>
</section>

<!-- Contact Section -->
  <div class="container">
    @include('components.contact')
  </div>
@endsection