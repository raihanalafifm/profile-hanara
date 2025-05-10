@extends('layout.main')

@section('container')
<section class="hnr-career-section">
    <div class="container">
      <!-- Header Section -->
      <div class="hnr-career-header">
        <h1 class="hnr-career-title">
          <span class="hnr-career-title-orange">JOIN OUR TEAM OF TALENTS</span>
          <span class="hnr-career-title-black">DISCOVER ROLES AND ELEVATE<br>YOUR CAREER TODAY.</span>
        </h1>
        <p class="hnr-career-subtitle">Let's grow, succeed, and move forward—together</p>
      </div>
  
      <!-- Career Banner Image -->
      <div class="hnr-career-banner">
        <img src="{{ asset('assets/images/gambar/career.png') }}" alt="Team Collaboration" class="hnr-career-banner-img">
      </div>
  
      <!-- Career Tagline -->
      <div class="hnr-career-tagline">
        <h2 class="hnr-career-tagline-text">Mari tumbuh dan berkolaborasi bersama talenta terbaik.</h2>
      </div>
  
      <!-- Job Listings Section -->
      <div class="hnr-career-jobs">
        <!-- IT Support -->
        <div class="hnr-job-card">
          <div class="hnr-job-header">
            <div class="hnr-job-title-container">
              <span class="hnr-job-number">01.</span>
              <h3 class="hnr-job-title">IT Support</h3>
            </div>
            <div class="hnr-job-tags">
              <span class="hnr-job-tag hnr-tag-fulltime">Full Time</span>
              <span class="hnr-job-tag hnr-tag-parttime">Part Time</span>
            </div>
            <button class="hnr-job-toggle" aria-label="Toggle job details" data-target="job-support">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="hnr-job-details" id="job-support">
            <div class="hnr-job-description">
              <h4 class="hnr-job-section-title">Description</h4>
              <p class="hnr-job-description-text">Tanggung jawab Anda meliputi pemeliharaan sistem, dukungan teknis, dan troubleshooting masalah perangkat keras dan perangkat lunak. Kami mencari seseorang yang detail-oriented dan mampu bekerja baik secara mandiri maupun dalam tim.</p>
              <div class="hnr-apply-button-container">
                <a href="{{ url('career/it-support') }}" class="hnr-apply-button">Apply this role <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Network Security Specialist -->
        <div class="hnr-job-card">
          <div class="hnr-job-header">
            <div class="hnr-job-title-container">
              <span class="hnr-job-number">02.</span>
              <h3 class="hnr-job-title">Network Security Specialist</h3>
            </div>
            <div class="hnr-job-tags">
              <span class="hnr-job-tag hnr-tag-fulltime">Full Time</span>
              <span class="hnr-job-tag hnr-tag-parttime">Part Time</span>
            </div>
            <button class="hnr-job-toggle collapsed" aria-label="Toggle job details" data-target="job-security">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="hnr-job-details collapsed" id="job-security">
            <div class="hnr-job-description">
              <h4 class="hnr-job-section-title">Description</h4>
              <p class="hnr-job-description-text">Kami mencari spesialis keamanan jaringan yang berpengalaman untuk melindungi infrastruktur perusahaan dari ancaman cyber. Anda akan bertanggung jawab untuk implementasi dan pemeliharaan solusi keamanan jaringan.</p>
              <a href="#" class="hnr-apply-button">Apply this job <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
          </div>
        </div>
  
        <!-- Cloud Computing Engineer -->
        <div class="hnr-job-card">
          <div class="hnr-job-header">
            <div class="hnr-job-title-container">
              <span class="hnr-job-number">03.</span>
              <h3 class="hnr-job-title">Cloud Computing Engineer</h3>
            </div>
            <div class="hnr-job-tags">
              <span class="hnr-job-tag hnr-tag-fulltime">Full Time</span>
              <span class="hnr-job-tag hnr-tag-parttime">Part Time</span>
            </div>
            <button class="hnr-job-toggle collapsed" aria-label="Toggle job details" data-target="job-cloud">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="hnr-job-details collapsed" id="job-cloud">
            <div class="hnr-job-description">
              <h4 class="hnr-job-section-title">Description</h4>
              <p class="hnr-job-description-text">Anda akan merancang, mengimplementasikan, dan mengelola solusi cloud untuk meningkatkan efisiensi operasional perusahaan. Pengalaman dengan AWS, Azure, atau Google Cloud Platform diutamakan.</p>
              <a href="#" class="hnr-apply-button">Apply this job <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
          </div>
        </div>
  
        <!-- Software Developer -->
        <div class="hnr-job-card">
          <div class="hnr-job-header">
            <div class="hnr-job-title-container">
              <span class="hnr-job-number">04.</span>
              <h3 class="hnr-job-title">Software Developer</h3>
            </div>
            <div class="hnr-job-tags">
              <span class="hnr-job-tag hnr-tag-fulltime">Full Time</span>
              <span class="hnr-job-tag hnr-tag-parttime">Part Time</span>
            </div>
            <button class="hnr-job-toggle collapsed" aria-label="Toggle job details" data-target="job-developer">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="hnr-job-details collapsed" id="job-developer">
            <div class="hnr-job-description">
              <h4 class="hnr-job-section-title">Description</h4>
              <p class="hnr-job-description-text">Sebagai Software Developer, Anda akan bertanggung jawab untuk mendesain, mengembangkan, dan memelihara aplikasi perusahaan. Kemampuan problem-solving yang kuat dan pengetahuan tentang berbagai bahasa pemrograman diperlukan.</p>
              <a href="#" class="hnr-apply-button">Apply this job <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection