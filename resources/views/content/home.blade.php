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
<!-- Services Section -->
<section class="awesome-services-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="awesome-section-heading">
          <span class="section-tag">• Awesome Service •</span>
          <h2 class="section-title">Our Awesome <span class="text-primary">services</span><br>to give you success.</h2>
          <p class="section-description">We switch all the channels on ya get into people's hands, homes, and minds to radicaly shift behavior</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <!-- Nextcloud Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon blue-icon">
            <img src="{{ asset('assets/images/icon/nextcloud.png') }}" alt="Nextcloud">
          </div>
          <h3 class="solution-title">Nextcloud</h3>
          <p class="solution-description">
            Platform kolaborasi modern yang dirancang untuk meningkatkan efisiensi kerja tim melalui akses data yang aman dan fleksibel.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Zimbra Mail Server Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon orange-icon">
            <img src="{{ asset('assets/images/icon/zimbra.png') }}" alt="Zimbra Mail Server">
          </div>
          <h3 class="solution-title">Zimbra Mail Server</h3>
          <p class="solution-description">
            Solusi email server yang handal, aman, dan mudah digunakan, untuk memastikan komunikasi bisnis lancar tanpa hambatan.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- IT Support Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon dark-icon">
            <img src="{{ asset('assets/images/icon/itsupport.png') }}" alt="IT Support">
          </div>
          <h3 class="solution-title">IT Support</h3>
          <p class="solution-description">
            Layanan instalasi dan pemeliharaan dengan respon cepat guna menjaga fungsi infrastruktur bisnis anda berjalan optimal
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Social Media Management Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon purple-icon">
            <img src="{{ asset('assets/images/icon/sosmed.png') }}" alt="Social Media Management">
          </div>
          <h3 class="solution-title">Social Media Management</h3>
          <p class="solution-description">
            Dirancang untuk membantu perusahaan membangun citra positif dan memperkuat branding di platform media sosial.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Motorola Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon blue-dark-icon">
            <img src="{{ asset('assets/images/icon/motorola.png') }}" alt="Motorola">
          </div>
          <h3 class="solution-title">Motorola</h3>
          <p class="solution-description">
            Solusi komunikasi industri yang mendukung operasional bisnis dengan kebutuhan komunikasi real-time.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Web Developer Card -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="solution-card">
          <div class="solution-icon pink-icon">
            <img src="{{ asset('assets/images/icon/web.png') }}" alt="Web Developer">
          </div>
          <h3 class="solution-title">Web Developer</h3>
          <p class="solution-description">
            HCM merupakan platform berbasis web yang terintegrasi dengan berbagai fitur esensial untuk efisiensi dan produktivitas pengelolaan SDM di perusahaan.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Background Elements -->
  <div class="services-bg-element services-bg-circle-1"></div>
  <div class="services-bg-element services-bg-circle-2"></div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content - 3D Character -->
      <div class="col-lg-6 character-column">
        <div class="character-container">
          <img src="{{ asset('assets/images/icon/whychoose.png') }}" alt="IT Support Character" class="main-character">
        </div>
      </div>
      
      <!-- Right Content - Features -->
      <div class="col-lg-6 features-column">
        <div class="section-heading-alt">
          <span class="section-tag-alt">• Why Choose Us •</span>
          <h2 class="section-title-alt">Choose <span class="text-primary-alt">The Best</span> IT Service Company</h2>
        </div>
        
        <div class="features-list">
          <!-- Feature 1 -->
          <div class="feature-item">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose1.png') }}" alt="Tim Professional">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Tim Professional</h4>
              <p class="feature-description">Tenaga ahli berpengalaman yang siap membantu Anda mencapai tujuan bisnis dengan solusi andal.</p>
            </div>
          </div>
          
          <!-- Feature 2 -->
          <div class="feature-item">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose2.png') }}" alt="Layanan 24/7">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Layanan 24/7</h4>
              <p class="feature-description">Dukungan penuh kapan saja untuk memastikan kelancaran dan produktivitas bisnis Anda.</p>
            </div>
          </div>
          
          <!-- Feature 3 -->
          <div class="feature-item">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose3.png') }}" alt="Keamanan & Keandalan">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Keamanan & Keandalan</h4>
              <p class="feature-description">Kami mengintegrasikan teknologi up-to-date untuk menjamin keamanan dan keandalan layanan Anda.</p>
            </div>
          </div>
          
          <!-- Feature 4 -->
          <div class="feature-item">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose4.png') }}" alt="Solusi yang Disesuaikan">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Solusi yang Disesuaikan</h4>
              <p class="feature-description">Setiap layanan kami dioptimalkan agar sesuai dengan kebutuhan dan tujuan strategis bisnis Anda</p>
            </div>
          </div>
          
          <!-- Feature 5 -->
          <div class="feature-item">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose5.png') }}" alt="Efisiensi & Inovasi">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Efisiensi & Inovasi</h4>
              <p class="feature-description">Meningkatkan produktivitas bisnis Anda melalui solusi teknologi yang efektif dan inovatif.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection