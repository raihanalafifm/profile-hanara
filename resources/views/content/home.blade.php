@extends('layout.main')


@section('container')
<!-- Hero Section dengan SEO Optimization -->

<section class="hero-section">
    <div class="container">
      <div class="row align-items-center ">
        <!-- Left Content -->
        <div class="col-lg-6 hero-content reveal-section">
          <!-- Ganti div dengan h1 untuk SEO -->
          <h1 class="company-name-hero">PT HANARA PRIMA SOLUSINDO</h1>
          <h2 class="hero-title">
            <span class="text-primary">Your Partner</span>  for Smarter IT Solution
          </h2>
          <p class="hero-description">
            Empowering businesses with secure servers, email systems, and IT-managed services you can rely on.
          </p>
          
          <!-- Service Cards dengan semantic HTML -->
          <div class="service-cards reveal-section" role="list">
            <article class="service-card" role="listitem">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-1.png') }}" 
                     alt="Professional IT Services Icon" 
                     loading="lazy"
                     width="50" 
                     height="50"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Professional Services
              </div>
            </article>
            
            <article class="service-card" role="listitem">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-2.png') }}" 
                     alt="Managed IT System Icon"
                     loading="lazy"
                     width="50" 
                     height="50"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Managed IT System
              </div>
            </article>
            
            <article class="service-card" role="listitem">
              <div class="service-icon">
                <img src="{{ asset('assets/images/icon/icon-card-hero-3.png') }}" 
                     alt="Social Media Management Icon"
                     loading="lazy"
                     width="50" 
                     height="50"> 
              </div>
              <div class="service-divider"></div>
              <div class="service-text">
                Managed Social Media
              </div>
            </article>
          </div>
        </div>
        
        <div class="col-lg-6 hero-image">
            <!-- Main device image dengan alt text SEO -->
            <div class="device-image reveal-section">
              <img src="{{ asset('assets/images/icon/icon-hero.png') }}" 
                   alt="Digital Innovation Solutions by PT Hanara Prima Solusindo" 
                   class="img-fluid main-device"
                   loading="eager"
                   width="600"
                   height="400">
            </div>
      </div>
    </div>
</section>


<!-- Update sections lainnya dengan struktur heading yang benar -->

<section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Image Content -->
        <div class="col-lg-6 about-images reveal-section">
          <div class="about-image-wrapper">
            <div class="certificate-logo">
              <img src="{{ asset('assets/images/icon/sertifikat.png') }}" 
                   alt="Sertifikat PT Hanara Prima Solusindo" 
                   class="img-fluid"
                   loading="lazy"
                   width="150"
                   height="150">
            </div>
            <div class="main-image">
              <img src="{{ asset('assets/images/gambar/meeting-home.png') }}" 
                   alt="Team Meeting PT Hanara Prima Solusindo" 
                   class="img-fluid"
                   loading="lazy"
                   width="500"
                   height="300">
            </div>
          </div>
        </div>
        
        <!-- Right Text Content dengan semantic HTML -->
        <div class="col-lg-6 about-content reveal-section">
          <div class="section-heading">
            <span class="section-tag">• About Us •</span>
            <!-- Gunakan h2 karena h1 sudah dipakai di hero -->
            <h2 class="company-name"><span class="text-primary">Your Partner </span> <br>for Smarter IT Solution</h2>
          </div>
          
          <div class="about-description">
            <p>
              PT Hanara Prima Solusindo adalah penyedia solusi teknologi informasi yang membantu perusahaan menghadapi tantangan era digital dengan layanan yang fleksibel, aman, dan efisien.
            </p>
            <p>
                Kami menawarkan sistem kolaborasi seperti Nextcloud, layanan email berbasis Zimbra Mail Server, serta pengembangan aplikasi web dan mobile yang disesuaikan dengan kebutuhan bisnis Anda.
            </p>
            <p>
                Dengan dukungan IT 24/7 dan tim profesional in-house, kami berkomitmen menghadirkan layanan yang handal untuk mendukung transformasi digital dan meningkatkan produktivitas Anda.
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
      <div class="col-lg-6 reveal-section">
        <div class="awesome-section-heading">
          <span class="section-tag">• Layanan Unggulan Hanara •</span>
          <h2 class="section-title"><span class="text-primary">Smarter </span>IT Solutions <br>for Modern Business</h2>
          <p class="section-description">Kami menyediakan berbagai layanan IT terbaik seperti Zimbra Mail Server, Nextcloud, pengembangan aplikasi web, komunikasi Motorola, hingga sistem keamanan CCTV, untuk mendukung transformasi digital dan efisiensi bisnis Anda.</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <!-- Nextcloud Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon blue-icon">
            <img src="{{ asset('assets/images/icon/nextcloud.png') }}" alt="Nextcloud">
          </div>
          <h3 class="solution-title">Nextcloud</h3>
          <p class="solution-description">
           Solusi file sharing & kolaborasi berbasis cloud untuk tim Anda. <br> Akses data dengan aman, fleksibel, dan efisien di mana saja.
          </p>
          <a href="{{ route('nextcloud') }}" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Zimbra Mail Server Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon orange-icon">
            <img src="{{ asset('assets/images/icon/zimbra.png') }}" alt="Zimbra Mail Server">
          </div>
          <h3 class="solution-title">Zimbra Mail Server</h3>
          <p class="solution-description">
              Layanan email server yang aman, stabil, dan mudah dikelola. <br> Ideal untuk perusahaan yang membutuhkan komunikasi bisnis tanpa hambatan.
          </p>
          <a href="{{ route('instalasi-zimbra') }}" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- IT Support Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon dark-icon">
            <img src="{{ asset('assets/images/icon/itsupport.png') }}" alt="IT Support">
          </div>
          <h3 class="solution-title">IT Support</h3>
          <p class="solution-description">
            Dukungan teknis untuk instalasi, maintenance, dan troubleshooting IT. <br>Respon cepat untuk menjaga kelancaran sistem dan infrastruktur Anda.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Social Media Management Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon purple-icon">
            <img src="{{ asset('assets/images/icon/sosmed.png') }}" alt="Social Media Management">
          </div>
          <h3 class="solution-title">Social Media Management</h3>
          <p class="solution-description">
            Bangun reputasi bisnis Anda secara profesional di platform digital. <br> Kami bantu kelola strategi konten, interaksi, hingga laporan performa.
          </p>
          <a href="#" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Motorola Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon blue-dark-icon">
            <img src="{{ asset('assets/images/icon/motorola.png') }}" alt="Motorola">
          </div>
          <h3 class="solution-title">Motorola</h3>
          <p class="solution-description">
            Solusi perangkat komunikasi RIG & HT untuk industri, logistik, dan keamanan. <br>Komunikasi real-time yang kuat dan andal di lapangan.
          </p>
          <a href="{{ route('motorola') }}" class="solution-link">
            <i class="fas fa-arrow-right"></i> Read More
          </a>
        </div>
      </div>
      
      <!-- Web Developer Card -->
      <div class="col-lg-4 col-md-6 mb-4 reveal-section">
        <div class="solution-card">
          <div class="solution-icon pink-icon">
            <img src="{{ asset('assets/images/icon/web.png') }}" alt="Web Developer">
          </div>
          <h3 class="solution-title">Web Developer</h3>
          <p class="solution-description">
            Sistem berbasis web seperti HCM & HCIS untuk manajemen SDM, absensi, dan payroll. <br> Kustomisasi sesuai kebutuhan operasional perusahaan Anda.
          </p>
          <a href="{{ route('develop-web') }}" class="solution-link">
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
      <div class="col-lg-6 character-column reveal-section">
        <div class="character-container">
          <img src="{{ asset('assets/images/icon/whychoose.png') }}" alt="IT Support Character" class="main-character">
        </div>
      </div>
      
      <!-- Right Content - Features -->
      <div class="col-lg-6 features-column">
        <div class="section-heading-alt reveal-section">
          <span class="section-tag-alt">• Kenapa Memilih Hanara? •</span>
          <h2 class="section-title-alt">Your <span class="text-primary-alt">Reliable Partner</span> in Smart IT Solutions</h2>
        </div>
        
        <div class="features-list">
          <!-- Feature 1 -->
          <div class="feature-item reveal-section">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose1.png') }}" alt="Tim Professional">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Tim Professional</h4>
              <p class="feature-description">Dipandu oleh tenaga ahli berpengalaman di bidang infrastruktur server, aplikasi bisnis, dan sistem komunikasi industri.</p>
            </div>
          </div>
          
          <!-- Feature 2 -->
          <div class="feature-item reveal-section">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose2.png') }}" alt="Layanan 24/7">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Layanan 24/7</h4>
              <p class="feature-description">Kami siap memberikan bantuan teknis kapan saja untuk menjaga layanan Anda tetap stabil dan produktif.</p>
            </div>
          </div>
          
          <!-- Feature 3 -->
          <div class="feature-item reveal-section">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose3.png') }}" alt="Keamanan & Keandalan">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Keamanan & Keandalan</h4>
              <p class="feature-description">Solusi kami dilengkapi proteksi data, enkripsi, dan teknologi terkini untuk memastikan keamanan sistem IT Anda.</p>
            </div>
          </div>
          
          <!-- Feature 4 -->
          <div class="feature-item reveal-section">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose4.png') }}" alt="Solusi yang Disesuaikan">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Solusi yang Disesuaikan</h4>
              <p class="feature-description">Layanan kami dirancang fleksibel sesuai kebutuhan industri, skala bisnis, dan strategi pertumbuhan klien.</p>
            </div>
          </div>
          
          <!-- Feature 5 -->
          <div class="feature-item reveal-section">
            <div class="feature-icon">
              <img src="{{ asset('assets/images/icon/choose5.png') }}" alt="Efisiensi & Inovasi">
            </div>
            <div class="feature-content">
              <h4 class="feature-title">Efisiensi & Inovasi</h4>
              <p class="feature-description">Kami mengutamakan efisiensi biaya dan kemudahan integrasi sistem, tanpa mengorbankan performa dan kemajuan teknologi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial Section with Consistent Company Icon -->

<section class="testimonial-clean-section">
  <div class="container reveal-section">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <div class="testimonial-clean-heading">
          <span class="testimonial-clean-tag">• Client's Testimonial •</span>
          <h2 class="testimonial-clean-title">Our Clients Feedback</h2>
        </div>
        
        <div class="testimonial-clean-slider">
          <!-- Testimonial 1 -->
          <div class="testimonial-clean-item active">
            <div class="testimonial-clean-text">
              “ Keputusan untuk bekerja sama dengan tim Hanara adalah salah satu keputusan terbaik yang pernah saya buat. Mereka tidak hanya menunjukkan dedikasi yang luar biasa terhadap proyek ini, tetapi juga menghasilkan kualitas kerja yang sangat memuaskan.”            
            </div>
            <div class="testimonial-clean-company">
              <div class="company-logo-wrapper">
                <img src="{{ asset('assets/images/icon/cde-logo.png') }}" alt="PT. Cakrawala Dinamika Energi" class="company-logo">
              </div>
              <p class="company-name">PT. Cakrawala Dinamika Energi</p>
            </div>
          </div>
          
          <!-- Testimonial 2 -->
          <div class="testimonial-clean-item">
            <div class="testimonial-clean-text">
              “Kerja tim Hanara tidak hanya mengagumkan tetapi juga melebihi ekspektasi saya yang tertinggi. Mereka tidak hanya menghadirkan solusi kreatif dan inovatif, tetapi juga menjaga tingkat akurasi dan profesionalisme yang tinggi. "            
            </div>
            <div class="testimonial-clean-company">
              <div class="company-logo-wrapper">
                <img src="{{ asset('assets/images/icon/spn-logo.png') }}" alt="PT. Global Tech Indonesia" class="company-logo">
              </div>
              <p class="company-name">PT. SPN</p>
            </div>
          </div>
          
          <!-- Testimonial 3 -->
          <div class="testimonial-clean-item">
            <div class="testimonial-clean-text">
              “ Saya merasa sungguh beruntung dapat bekerja dengan tim Hanara yang luar biasa ini. Kerja keras mereka benar-benar terbayar dengan hasil yang luar biasa"
            </div>
            <div class="testimonial-clean-company">
              <div class="company-logo-wrapper">
                <img src="{{ asset('assets/images/icon/JYL.png') }}" alt="PT. Mitra Solusi Digital" class="company-logo">
              </div>
              <p class="company-name">PT. JYL</p>
            </div>
          </div>
        </div>
        
        <!-- Navigation Dots -->
        <div class="testimonial-clean-dots">
          <span class="clean-dot active" data-slide="0"></span>
          <span class="clean-dot" data-slide="1"></span>
          <span class="clean-dot" data-slide="2"></span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Our Clients Section -->

<section class="trusted-clients-section">
  <div class="container reveal-section">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="trusted-clients-heading">
          <span class="trusted-clients-tag">• Our Client •</span>
          <h2 class="trusted-clients-title">Dipercaya oleh Berbagai Klien dari Beragam Industri</h2>
          <p class="trusted-clients-subtitle">
            Beberapa perusahaan dan organisasi ternama di Indonesia telah mempercayakan solusi IT mereka kepada Hanara. Kami terus berkomitmen memberikan layanan terbaik sesuai kebutuhan klien.
          </p>
        </div>
      </div>
    </div>
    
    <div class="row trusted-clients-logos">
      <!-- Row 1 -->
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/cde-coal.png') }}" alt="CDE Coal">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/ces-coal.png') }}" alt="CES Coal">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/mpp.png') }}" alt="MPP">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/yacoonn.png') }}" alt="Yacoon">
        </div>
      </div>
      
      <!-- Row 2 -->
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/chm.png') }}" alt="CHM">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/spn-logo.png') }}" alt="Sindo Prima Niaga">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/ef bengkulu.png') }}" alt="Branch Kota Bengkulu">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/mitra plus.png') }}" alt="Mitra Plus">
        </div>
      </div>
      
      <!-- Row 3 -->
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/msk.png') }}" alt="MSK">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/tek.png') }}" alt="TEK">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/sac.png') }}" alt="Asia Capital">
        </div>
      </div>
      <div class="col-6 col-md-3 trusted-client-logo-wrap">
        <div class="trusted-client-logo">
          <img src="{{ asset('assets/images/icon/mavix.png') }}" alt="Mavix">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Our Application Products Section - HP Outside Cards -->

<section class="product-gallery-section py-5">
  <div class="container reveal-section">
    <div class="row mb-5">
      <div class="col-lg-12">
        <h2 class="product-gallery-title"><span class="text-product-orange">OUR</span> APPLICATION<br>PRODUCTS.</h2>
      </div>
    </div>
    
    <!-- Products Layout -->
    <div class="product-gallery-layout">
      <!-- First Row: MIT and HCM -->
      <div class="row">
        <!-- MIT Product -->
        <div class="col-lg-6 product-item-col">
          <div class="product-item position-relative">
            <!-- Phone Image (outside card) -->
            <div class="product-phone-image mit-phone">
              <img src="{{ asset('assets/images/icon/mit-hp.png') }}" alt="MIT App Screenshot">
            </div>
            
            <!-- Card Content -->
            <div class="product-item-card orange-product-bg">
              <div class="product-item-icon">
                <img src="{{ asset('assets/images/icon/icon-mit.png') }}" alt="MIT Icon">
              </div>
              <h3 class="product-item-title">MANAGAMENT<br>INFO TECHNOLOGY</h3>
              <p class="product-item-desc">
                MIT merupakan solusi untuk pengelolaan seluruh Departemen IT. Aplikasi ini mencakup tiga fungsi utama pengelolaan teknologi informasi: Infrastruktur, Aplikasi, dan Digital Creative.
              </p>
            </div>
          </div>
        </div>
        
        <!-- HCM Product -->
        <div class="col-lg-6 product-item-col">
          <div class="product-item position-relative">
            <!-- Phone Image (outside card) -->
            <div class="product-phone-image hcm-phone">
              <img src="{{ asset('assets/images/icon/hcis-hp.png') }}" alt="HCM App Screenshot">
            </div>
            
            <!-- Card Content -->
            <div class="product-item-card green-product-bg">
              <div class="product-item-icon">
                <img src="{{ asset('assets/images/icon/icon-hcis.png') }}" alt="HCM Icon">
              </div>
              <h3 class="product-item-title">HUMAN CAPITAL<br>MANAGEMENT</h3>
              <p class="product-item-desc">
                HCM merupakan platform berbasis web yang terintegrasi dengan berbagai fitur esensial untuk efisiensi dan produktivitas pengelolaan SDM di perusahaan.
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Second Row: Sikerja -->
      <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 product-item-col">
          <div class="product-item position-relative">
            <!-- Phone Image (outside card) -->
            <div class="product-phone-image sikerja-phone">
              <img src="{{ asset('assets/images/icon/sikerja-hp.png') }}" alt="Sikerja App Screenshot">
            </div>
            
            <!-- Card Content -->
            <div class="product-item-card orange-product-bg">
              <div class="product-item-icon">
                <img src="{{ asset('assets/images/icon/icon-sikerja.png') }}" alt="Sikerja Icon">
              </div>
              <h3 class="product-item-title">SIKERJA WORK<br>PRODUCTIVITY APP</h3>
              <p class="product-item-desc">
                HCM merupakan platform berbasis web yang terintegrasi dengan berbagai fitur esensial untuk efisiensi dan produktivitas pengelolaan SDM di perusahaan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Latest Blog Section with Dynamic Articles -->

<section class="latest-blog-section py-5">
  <div class="container reveal-section">
    <div class="row text-center mb-4">
      <div class="col-lg-12">
        <span class="blog-tag">• Our Latest Blog •</span>
        <h2 class="blog-title">Connect with us for experiencing<br>the best <span class="text-blog-orange">IT Solutions</span></h2>
        <p class="blog-subtitle">
          Kami memiliki beberapa kesempatan untuk bekerja sama dengan perusahaan dan organisasi ternama di Indonesia.<br>
          Kami berusaha untuk memberikan pelayanan yang terbaik kepada semua klien kami.
        </p>
      </div>
    </div>
    
    <!-- Blog Cards Slider -->
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-slider">
          <div class="blog-slider-container">
            @forelse($articles as $article)
            <!-- Blog Card -->
            <div class="blog-card">
              <div class="blog-card-img">
               @if($article->image)
                      <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
               @else
                    <img src="{{ asset('assets/images/default-blog.jpg') }}" alt="{{ $article->title }}">
               @endif
                <div class="blog-card-overlay">
                  <h3 class="blog-card-headline">{{ strtoupper(Str::limit($article->title, 40)) }}</h3>
                </div>
              </div>
              <div class="blog-card-content">
                <h4 class="blog-card-title">{{ $article->title }}</h4>
                <p class="blog-card-text">
                  {{ Str::limit($article->description, 150) }}
                </p>
                @if($article->link)
                <a href="{{ $article->link }}" class="blog-card-link" target="_blank" rel="noopener">
                  <i class="fas fa-arrow-right"></i> Read More
                </a>
                @else
                <a href="{{ route('articles.show', Str::slug($article->title) . '-' . $article->id) }}" class="blog-card-link">
                    <i class="fas fa-arrow-right"></i> Read More
                </a>
                @endif
              </div>
            </div>
            @empty
            <!-- Default Blog Cards if no articles -->
            <div class="blog-card">
              <div class="blog-card-img">
                <img src="{{ asset('assets/images/icon/zimbra-blog.png') }}" alt="Zimbra Server">
                <div class="blog-card-overlay">
                  <h3 class="blog-card-headline">INSTALLATION<br>ZIMBRA SERVER</h3>
                </div>
              </div>
              <div class="blog-card-content">
                <h4 class="blog-card-title">Zimbra Mail Server</h4>
                <p class="blog-card-text">
                  Zimbra Mail Server sendiri adalah software open source untuk email server dan kolaborasi (groupware) yang banyak digunakan diberbagai instalsi pemerintah
                </p>
                <a href="javascript:void(0);" class="blog-card-link" onclick="return false;">
                  <i class="fas fa-arrow-right"></i> Read More
                </a>
              </div>
            </div>
            @endforelse
          </div>
          
          <!-- Slider Navigation -->
          @if($articles->count() > 1)
          <div class="blog-slider-nav">
            @foreach($articles as $index => $article)
            <span class="blog-slider-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></span>
            @endforeach
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

@endsection