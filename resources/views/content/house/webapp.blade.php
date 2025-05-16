@extends('layout.main')

@section('container')
<section class="hnr-webapp-section">
  <div class="container">
    <!-- Header Section - Web Application -->
    <div class="row align-items-center mb-5">
      <!-- Web App Image -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-webapp-img-container">
          <img src="{{ asset('assets/images/icon/web app.png') }}" alt="Web Application" class="hnr-webapp-img">
        </div>
      </div>
      
      <!-- Description Section -->
      <div class="col-lg-7">
        <div class="hnr-webapp-content">
          <h1 class="hnr-webapp-title">
            <span class="hnr-webapp-title-orange">JASA</span> PEMBUATAN<br>
            WEB APPLICATION
          </h1>
          
          <p class="hnr-webapp-description">
            Website saat ini bukan lagi hanya sekadar company profile perusahaan, kebutuhan dan operasional juga sudah mulai beralih menggunakan website seperti e-commerce, web portal, dashboard, dan web custom lainnya yang berfungsi untuk operasional perusahaan seperti aplikasi untuk Purchasing, Logistik, Finance, Accounting, Pajak, dan lain lain. Web application ini tidak bisa seperti website company profile yang cukup menggunakan CMS wordpress, web app membutuhkan bahasa pemrograman khusus seperti Laravel, CodeIgniter, atau Framework DevExpress untuk memenuhi requirement yang diajukan dan mengakomodir berbagai macam fitur yang diinginkan dalam web application.
          </p>
          
          <!-- Achievement Stats -->
          <div class="hnr-webapp-stats">
            <div class="hnr-webapp-stat-item">
              <div class="hnr-webapp-stat-icon">
                <img src="{{ asset('assets/images/icon/monitor.png') }}" alt="Projects">
              </div>
              <div class="hnr-webapp-stat-content">
                <h3 class="hnr-webapp-stat-number">200 +</h3>
                <p class="hnr-webapp-stat-text">Successfully Project Finished</p>
              </div>
            </div>
            
            <div class="hnr-webapp-stat-item">
              <div class="hnr-webapp-stat-icon">
                <img src="{{ asset('assets/images/icon/calender.png') }}" alt="Experience">
              </div>
              <div class="hnr-webapp-stat-content">
                <h3 class="hnr-webapp-stat-number">5 +</h3>
                <p class="hnr-webapp-stat-text">Year of Experience Web Project</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Best Framework Section -->
    <div class="row mt-5 mb-5 text-center">
      <div class="col-12">
        <h2 class="hnr-webapp-framework-title">
          <span class="hnr-webapp-title-orange">Best</span> Framework Untuk
          <span class="d-block">Web Application</span>
        </h2>
        <p class="hnr-webapp-framework-subtitle">
          Pilih framework yang tepat untuk mempercepat, mengamankan, dan memudahkan pengembangan aplikasi web Anda.
        </p>
      </div>
    </div>
    
    <!-- Framework Laravel -->
    <div class="row mb-5 align-items-center">
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <div class="hnr-webapp-framework-logo">
          <img src="{{ asset('assets/images/icon/laravel.png') }}" alt="Laravel" class="img-fluid">
        </div>
      </div>
      <div class="col-md-9">
        <h3 class="hnr-webapp-framework-name">LARAVEL</h3>
        <p class="hnr-webapp-framework-desc">
          Laravel merupakan salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web. Sebuah framework yang dapat memaksimalkan penggunaan PHP di dalam proses pengembangan website.
        </p>
        <div class="hnr-webapp-framework-features">
          <h4 class="hnr-webapp-features-title">Keunggulan Framework Laravel:</h4>
          <ol class="hnr-webapp-features-list">
            <li>Website menjadi lebih mudah dikembangkan.</li>
            <li>Template pada Laravel merupakan salah satu keunikan pada framework ini.</li>
            <li>Framework ini lebih menghemat waktu karena Laravel dapat disinkronisasikan dengan framework lain.</li>
          </ol>
        </div>
      </div>
    </div>
    
    <!-- Framework DevXpress -->
    <div class="row mb-5 align-items-center">
      <div class="col-md-9 order-md-1 order-2">
        <h3 class="hnr-webapp-framework-name">DEVXPRESS</h3>
        <p class="hnr-webapp-framework-desc">
          DevExpress merupakan komponen tambahan yang terintegrasi dengan Visual Studio yang berisi control-control yang membantu kita untuk membuat sebuah aplikasi yang professional dari segi user interface, fitur yang lebih lengkap, dan cepat dalam mengalola data.
        </p>
        <div class="hnr-webapp-framework-features">
          <h4 class="hnr-webapp-features-title">Keunggulan Framework DevExpress:</h4>
          <ol class="hnr-webapp-features-list">
            <li>LayoutControl DevExpress memungkinkan Anda mengatur item sebagai tab dalam grup atau yang berbeda.</li>
            <li>ScrollPanel bawaan hanya mengatur item menjadi satu baris jig dapat diinteraksikan horizontal/ vertical.</li>
            <li>Tidak memiliki konsep grup, tab atau mode penyesuaian dan tidak mendukung penyesuaian otomatis.</li>
          </ol>
        </div>
      </div>
      <div class="col-md-3 text-center mb-4 mb-md-0 order-md-2 order-1">
        <div class="hnr-webapp-framework-logo">
          <img src="{{ asset('assets/images/icon/devexpress.png') }}" alt="DevXpress" class="img-fluid">
        </div>
      </div>
    </div>
    
    <!-- Framework CodeIgniter -->
    <div class="row mb-5 align-items-center">
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <div class="hnr-webapp-framework-logo">
          <img src="{{ asset('assets/images/icon/codeigniter.png') }}" alt="CodeIgniter" class="img-fluid">
        </div>
      </div>
      <div class="col-md-9">
        <h3 class="hnr-webapp-framework-name">CODEIGNITER</h3>
        <p class="hnr-webapp-framework-desc">
          CodeIgniter adalah framework yang banyak digunakan karena mampu mempercepat pengembangan web berbasis PHP berdasarkan package serta array library yang lebih luas. Sehingga web developer menjadi lebih mudah dalam mengembangkan suatu website.
        </p>
        <div class="hnr-webapp-framework-features">
          <h4 class="hnr-webapp-features-title">Keunggulan Framework CodeIgniter:</h4>
          <ol class="hnr-webapp-features-list">
            <li>Framework ini diklaim memiliki performa yang sangat cepat dibanding framework-framework lain.</li>
            <li>Penggunaan resourcenya yang kecil, hanya memerlukan spesifikasi server/hosting yang kecil dibandingkan dengan framework lain.</li>
            <li>CodeIgniter bersifat tidak kaku, sehingga memberikan kebebasan kepada web developer untuk mengembangkan aplikasi berbasis web bahkan tanpa framework.</li>
          </ol>
        </div>
      </div>
    </div>
    
    <!-- Why Choose Us Section -->
    <div class="row mt-5 mb-5 text-center">
      <div class="col-12">
        <h2 class="hnr-webapp-why-title">
          <span class="hnr-webapp-title-orange">Kenapa</span> Harus Membuat
          <span class="d-block">Web App Di Hanara?</span>
        </h2>
        <p class="hnr-webapp-why-subtitle">
          Hanara menawarkan solusi web app cepat, aman, dan sesuai kebutuhan bisnis Anda.
        </p>
      </div>
    </div>
    
    <!-- Benefits Grid -->
    <div class="row mt-4 mb-5">
      <!-- Benefit 1 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-gear-fill"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">Menyesuaikan Kebutuhan Anda</h3>
          <p class="hnr-webapp-benefit-desc">
            Tersedia jasa pembuatan web custom menyesuaikan permintaan pada, sehingga menghasilkan web yang berkualitas dan memuaskan.
          </p>
        </div>
      </div>
      
      <!-- Benefit 2 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-people-fill"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">Tim Ahli Dan Berpengalaman</h3>
          <p class="hnr-webapp-benefit-desc">
            Anda tidak perlu ragu dan khawatir, karena kami memiliki Tim yang ahli dan berpengalaman untuk memastikan website terbaik anda.
          </p>
        </div>
      </div>
      
      <!-- Benefit 3 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-palette-fill"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">Expert UI/UX</h3>
          <p class="hnr-webapp-benefit-desc">
            Kami membangun platform yang didesain sedemikian rupa agar menjadi website yang user-friendly, untuk mewujudkan pengalaman yang interaktif dan juga harmonisasi.
          </p>
        </div>
      </div>
      
      <!-- Benefit 4 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-currency-dollar"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">Harga Termasuk Resource</h3>
          <p class="hnr-webapp-benefit-desc">
            Selain menghasilkan web berkualitas, kami juga memberikan harga terbaik dimana resource termasuk di dalamnya, seperti domain dan hosting untuk website Anda.
          </p>
        </div>
      </div>
      
      <!-- Benefit 5 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-phone-fill"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">Responsive</h3>
          <p class="hnr-webapp-benefit-desc">
            Memastikan bahwa tampilan layout website berjalan dengan baik pada ponsel, tablet atau perangkat lainnya dan tentunya disesuaikan ukuran kebutuhan anda.
          </p>
        </div>
      </div>
      
      <!-- Benefit 6 -->
      <div class="col-md-4 mb-4">
        <div class="hnr-webapp-benefit-card">
          <div class="hnr-webapp-benefit-icon">
            <i class="bi bi-headset"></i>
          </div>
          <h3 class="hnr-webapp-benefit-title">24/7 Support</h3>
          <p class="hnr-webapp-benefit-desc">
            Selain mengembangkan website, tim kami siap untuk memberikan layanan support bagi pelanggan selama 24 jam.
          </p>
        </div>
      </div>
    </div>
    
    <!-- Contact Section -->
    @include('components.contact')
  </div>
</section>
@endsection