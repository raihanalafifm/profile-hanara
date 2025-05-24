@extends('layout.main')

@section('schema')
<!-- Additional Schema for Homepage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "{{ $seoData['titleOnly'] }}",
  "description": "{{ $seoData['description'] }}",
  "url": "{{ $seoData['canonical'] }}",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ route('home') }}"
    }]
  }
}
</script>

<!-- Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Layanan PT Hanara Prima Solusindo",
  "itemListElement": [
    {
      "@type": "Service",
      "position": 1,
      "name": "Zimbra Mail Server",
      "description": "Solusi email server profesional untuk bisnis",
      "provider": {
        "@type": "Organization",
        "name": "PT Hanara Prima Solusindo"
      }
    },
    {
      "@type": "Service", 
      "position": 2,
      "name": "Web Development",
      "description": "Jasa pembuatan website dan aplikasi web custom",
      "provider": {
        "@type": "Organization",
        "name": "PT Hanara Prima Solusindo"
      }
    },
    {
      "@type": "Service",
      "position": 3,
      "name": "CCTV Installation",
      "description": "Instalasi dan maintenance sistem keamanan CCTV",
      "provider": {
        "@type": "Organization",
        "name": "PT Hanara Prima Solusindo"
      }
    }
  ]
}
</script>
@endsection

@section('container')
<!-- Hero Section dengan SEO Optimization -->
<section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Content -->
        <div class="col-lg-6 hero-content">
          <!-- Ganti div dengan h1 untuk SEO -->
          <h1 class="company-name-hero">PT HANARA PRIMA SOLUSINDO</h1>
          <h2 class="hero-title">
            <span class="text-primary">Digital</span> Innovation
            For Your Future
          </h2>
          <p class="hero-description">
            Solusi digital terdepan untuk bisnis Anda. Kami menyediakan layanan teknologi informasi terbaik untuk semua kebutuhan bisnis Anda.
          </p>
          
          <!-- Service Cards dengan semantic HTML -->
          <div class="service-cards" role="list">
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
            <div class="device-image">
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
        <div class="col-lg-6 about-images">
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
        <div class="col-lg-6 about-content">
          <div class="section-heading">
            <span class="section-tag">• About Us •</span>
            <!-- Gunakan h2 karena h1 sudah dipakai di hero -->
            <h2 class="company-name"><span class="text-primary">PT </span>HANARA<br>PRIMA SOLUTION</h2>
          </div>
          
          <div class="about-description">
            <p>
              PT Hanara Prima Solusindo adalah mitra inovasi teknologi terpercaya yang menyediakan solusi IT komprehensif untuk menjawab tantangan dunia bisnis di era digital. Dengan layanan seperti <strong>Nextcloud</strong>, <strong>Zimbra Mail Server</strong>, dukungan IT 24/7, serta aplikasi berbasis web dan mobile yang dikembangkan in-house, Hanara berkomitmen menghadirkan solusi yang handal dan disesuaikan dengan kebutuhan strategis klien untuk mengoptimalkan produktivitas bisnis mereka.
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
<!-- Testimonial Section with Consistent Company Icon -->
<section class="testimonial-clean-section">
  <div class="container">
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
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="trusted-clients-heading">
          <span class="trusted-clients-tag">• Our Client •</span>
          <h2 class="trusted-clients-title">Kami telah dipercaya oleh banyak klien dan perusahaan</h2>
          <p class="trusted-clients-subtitle">
            Kami memiliki beberapa keahlian untuk bekerja sama dengan perusahaan dan organisasi terkemuka di Indonesia. Kami berusaha untuk memberikan pelayanan yang terbaik kepada semua klien kami.
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
  <div class="container">
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
<!-- Latest Blog Section with Dynamic Articles -->
<section class="latest-blog-section py-5">
  <div class="container">
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
                <a href="javascript:void(0);" class="blog-card-link" onclick="return false;">
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