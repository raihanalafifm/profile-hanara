@extends('layout.main')


@section('container')

<section class="about-page-section">
    <div class="container">
      <!-- Header dengan H1 untuk SEO -->
      <div class="row text-center mb-5 reveal-section">
        <div class="col-lg-12">
          <div class="about-page-header">
            <h1 class="about-page-title"><span class="about-orange">PT</span> HANARA<br>PRIMA SOLUSINDO</h1>
            <p class="about-page-tagline">Built on trust. Growing with vision.</p>
          </div>
        </div>
      </div>
      
      <!-- Team Image dengan alt text SEO -->
      <div class="row justify-content-center mb-5 reveal-section">
        <div class="col-lg-10">
          <div class="about-team-image">
            <img src="{{ asset('assets/images/gambar/bw-meet.png') }}" 
                 alt="Tim PT Hanara Prima Solusindo - IT Solution Provider" 
                 class="img-fluid rounded"
                 width="1000"
                 height="600"
                 loading="eager">
          </div>
        </div>
      </div>
      
      <!-- About Us Text Section dengan semantic HTML -->
      <div class="row mb-5 reveal-section">
        <div class="col-lg-3">
          <h2 class="about-section-title">About Us</h2>
        </div>
        <div class="col-lg-9">
          <div class="about-description">
            <p><strong>PT Hanara Prima Solusindo (Hanara)</strong> adalah perusahaan yang bergerak di bidang <em>IT Solution Provider</em>, berkomitmen untuk meningkatkan efektivitas dan produktivitas bisnis di era digital saat ini. Kami menyadari bahwa teknologi informasi memegang peranan penting sebagai partner bisnis IT yang handal dan siap untuk menghadapi tantangan industri dalam dunia digital dan teknologi informasi.</p>
            <p>Dengan tim profesional yang berpengalaman, Hanara berfikir pada pengembangan solusi yang disesuaikan dengan kebutuhan dibidang software, untuk mencapai tujuan dan target perusahaan klien kami.</p>
          </div>
        </div>
      </div>
      
      <!-- Vision Section -->
      <div class="row mb-5 reveal-section">
        <div class="col-lg-3">
          <h2 class="about-section-title">Visi</h2>
        </div>
        <div class="col-lg-9">
          <div class="about-description">
            <p>Menjadi mitra terpercaya dalam menyediakan solusi teknologi inovatif melalui produk dan layanan unggulan untuk mendukung pertumbuhan dan kesuksesan pelanggan.</p>
          </div>
        </div>
      </div>
      
      <!-- Mission Section dengan structured data -->
      <div class="row mb-5 reveal-section">
        <div class="col-lg-3">
          <h2 class="about-section-title">Misi</h2>
        </div>
        <div class="col-lg-9">
          <!-- Mission Cards dengan semantic HTML -->
          <div class="row mission-cards">
            @php
            $missions = [
                [
                    'number' => '01',
                    'title' => 'Layanan Berkualitas Terbaik',
                    'description' => 'Platform kolaborasi modern yang dirancang untuk meningkatkan efisiensi kerja tim melalui akses data yang aman dan fleksibel.'
                ],
                [
                    'number' => '02', 
                    'title' => 'Solusi Bisnis Inovatif',
                    'description' => 'Solusi email server yang handal, aman, dan mudah digunakan, untuk memastikan komunikasi bisnis lancar tanpa hambatan.'
                ],
                // ... tambahkan misi lainnya
            ];
            @endphp
            
            @foreach($missions as $mission)
            <div class="col-md-6 mb-4">
              <article class="mission-card">
                <div class="mission-icon orange-bg">
                  <span class="mission-number">{{ $mission['number'] }}</span>
                </div>
                <h3 class="mission-title">{{ $mission['title'] }}</h3>
                <p class="mission-text">{{ $mission['description'] }}</p>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection