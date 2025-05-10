@extends('layout.main')

@section('container')
<section class="about-page-section">
    <div class="container">
      <!-- Header -->
      <div class="row text-center mb-5">
        <div class="col-lg-12">
          <div class="about-page-header">
            <h1 class="about-page-title"><span class="about-orange">PT</span> HANARA<br>PRIMA SOLUSINDO</h1>
            <p class="about-page-tagline">Built on trust. Growing with vision.</p>
          </div>
        </div>
      </div>
      
      <!-- Team Image -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
          <div class="about-team-image">
            <img src="{{ asset('assets/images/gambar/bw-meet.png') }}" alt="Team Meeting" class="img-fluid rounded">
          </div>
        </div>
      </div>
      
      <!-- About Us Text Section -->
      <div class="row mb-5">
        <div class="col-lg-3">
          <h2 class="about-section-title">About Us</h2>
        </div>
        <div class="col-lg-9">
          <div class="about-description">
            <p>PT Hanara Prima Solusindo (Hanara) adalah perusahaan yang bergerak di bidang IT Solution Provider, berkomitmen untuk meningkatkan efektivitas dan produktivitas bisnis di era digital saat ini. Kami menyadari bahwa teknologi informasi memegang peranan penting sebagai partner bisnis IT yang handal dan siap untuk menghadapi tantangan industri dalam dunia digital dan teknologi informasi.</p>
            <p>Dengan tim profesional yang berpengalaman, Hanara berfikir pada pengembangan solusi yang disesuaikan dengan kebutuhan dibidang software, untuk mencapai tujuan dan target perusahaan klien kami.</p>
          </div>
        </div>
      </div>
      
      <!-- Vision Section -->
      <div class="row mb-5">
        <div class="col-lg-3">
          <h2 class="about-section-title">Visi</h2>
        </div>
        <div class="col-lg-9">
          <div class="about-description">
            <p>Menjadi mitra terpercaya dalam menyediakan solusi teknologi inovatif melalui produk dan layanan unggulan untuk mendukung pertumbuhan dan kesuksesan pelanggan.</p>
          </div>
        </div>
      </div>
      
      <!-- Mission Section -->
      <div class="row mb-5">
        <div class="col-lg-3">
          <h2 class="about-section-title">Misi</h2>
        </div>
        <div class="col-lg-9">
          <!-- Mission Cards -->
          <div class="row mission-cards">
            <!-- Mission Card 1 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">01</span>
                </div>
                <h3 class="mission-title">Layanan Berkualitas Terbaik</h3>
                <p class="mission-text">Platform kolaborasi modern yang dirancang untuk meningkatkan efisiensi kerja tim melalui akses data yang aman dan fleksibel.</p>
              </div>
            </div>
            
            <!-- Mission Card 2 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">02</span>
                </div>
                <h3 class="mission-title">Solusi Bisnis Inovatif</h3>
                <p class="mission-text">Solusi email server yang handal, aman, dan mudah digunakan, untuk memastikan komunikasi bisnis lancar tanpa hambatan.</p>
              </div>
            </div>
            
            <!-- Mission Card 3 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">03</span>
                </div>
                <h3 class="mission-title">Teknologi Andal dan Efisien</h3>
                <p class="mission-text">Layanan instalasi dan pemeliharaan dengan respon cepat guna menjaga fungsi infrastruktur teknis anda berjalan optimal.</p>
              </div>
            </div>
            
            <!-- Mission Card 4 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">04</span>
                </div>
                <h3 class="mission-title">Pengembangan Tim Unggul</h3>
                <p class="mission-text">Dirancang untuk membantu perusahaan membangun citra positif dan memperkuat branding di platform media sosial.</p>
              </div>
            </div>
            
            <!-- Mission Card 5 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">05</span>
                </div>
                <h3 class="mission-title">Produk dengan Nilai Tambah</h3>
                <p class="mission-text">Solusi komunikasi industri yang mendukung operasional bisnis dengan kebutuhan komunikasi real-time.</p>
              </div>
            </div>
            
            <!-- Mission Card 6 -->
            <div class="col-md-6 mb-4">
              <div class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">06</span>
                </div>
                <h3 class="mission-title">Pivot untuk Inovasi Digital</h3>
                <p class="mission-text">HCM merupakan platform berbasis web yang terintegrasi dengan berbagai fitur esensial untuk efisiensi dan produktivitas pengelolaan SDM di perusahaan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection