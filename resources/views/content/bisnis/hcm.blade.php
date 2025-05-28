@extends('layout.main')

@section('container')
    <!-- Hero Section -->
    <section class="hcm-hero-section">
        <div class="container py-5">
            <div class="row align-items-center reveal-section">
                <div class="col-md-6">
                    <div class="hcm-header-text">
                        <h6 class="text-dark">HCM - HUMAN CAPITAL MANAGEMENT</h6>
                        <h1 class="hcm-title">
                            <span class="text-dark">All Your </span>
                            <span class="hcm-orange">HR Applications</span>
                            <span class="text-dark"> In One Place</span>
                        </h1>
                        <p class="text-dark">Mengatur Data Karyawan, Absensi Karyawan, Penggajian Karyawan dengan lebih mudah dan efisien.</p>
                        
                        <div class="d-flex gap-3 mt-4">
                            <a href="#" class="btn hcm-app-store-btn">
                                <img src="{{ asset('assets/images/icon/appstore.png') }}" width="24" alt="App Store Icon">
                                Available on App Store
                            </a>
                            <a href="#" class="btn hcm-play-store-btn">
                                <img src="{{ asset('assets/images/icon/playstore.png') }}" width="24" alt="Play Store Icon">
                                Available on Play Store
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hcm-dashboard-image">
                        <img src="{{ asset('assets/images/icon/hcm.png') }}" class="img-fluid" alt="HCM Dashboard">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="hcm-about-section">
        <div class="container py-5">
            <div class="row align-items-center reveal-section">
                <div class="col-md-5">
                    <div class="hcm-illustration-container">
                        <img src="{{ asset('assets/images/icon/hcm-icon.png') }}" class="img-fluid" alt="HR Illustration">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="hcm-about-content">
                        <h5 class="hcm-section-subtitle">• About Us •</h5>
                        <h2 class="hcm-section-title">HUMAN CAPITAL MANAGEMENT</h2>
                        <div class="hcm-description">
                            <p>Solusi tepat untuk perusahaan yang ingin memiliki Aplikasi untuk memudahkan menyimpan informasi karyawan, mengelola fungsi umum SDM, Absensi, dan menjalankan aktivitas SDM penting seperti memproses gaji, mengelola tunjangan, pajak, THR, dan berbagai macam laporan yang diperlukan untuk payroll.</p>
                            
                            <p>HCM tersedia dalam 2 platform, Website untuk Administrasi HRD, team Payroll dan team Pajak di Perusahaan Anda, serta Mobile Apps (iOS & Android) untuk Karyawan melakukan absen, cuti, izin, melihat laporan kehadiran, laporan gaji dan berbagai macam fitur yang diperlukan untuk memudahkan Perusahaan Anda mengelola karyawan dan payroll.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="hcm-services-section">
        <div class="container py-5 reveal-section">
            <div class="text-center mb-5">
                <h5 class="hcm-section-subtitle">• Awesome Service •</h5>
                <h2 class="hcm-section-title-dark">Kami Menyediakan</h2>
                <h2 class="hcm-section-title-orange">Aplikasi HR yang Anda Butuhkan</h2>
                <p class="hcm-services-desc">We switch all the channels on yo get into people's<br>hands, homes, and minds to radically shift behavior</p>
            </div>
            
            <div class="row g-4">
                <!-- First row of services -->
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service1.png') }}" alt="Manajemen Karyawan">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Karyawan</h4>
                        <p class="hcm-service-desc">Kelola database karyawan di perusahaan Anda secara online</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service2.png') }}" alt="Manajemen Absensi">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Absensi</h4>
                        <p class="hcm-service-desc">Memudahkan proses absensi secara online (Manual/Finger/Mobile Apps)</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service3.png') }}" alt="Manajemen Penggajian">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Penggajian</h4>
                        <p class="hcm-service-desc">Memudahkan proses penggajian karyawan di perusahaan Anda</p>
                    </div>
                </div>
                
                <!-- Second row of services -->
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service4.png') }}" alt="Pinjaman">
                        </div>
                        <h4 class="hcm-service-title">Pinjaman</h4>
                        <p class="hcm-service-desc">HCM menyediakan fitur loan ke perusahaan</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service5.png') }}" alt="Pengajuan Izin">
                        </div>
                        <h4 class="hcm-service-title">Pengajuan Izin</h4>
                        <p class="hcm-service-desc">Memudahkan proses pengajuan izin</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service6.png') }}" alt="BPJS">
                        </div>
                        <h4 class="hcm-service-title">BPJS</h4>
                        <p class="hcm-service-desc">Payroll sudah ada fitur BPJS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Team Section -->
    <section class="hcm-team-section">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="hcm-section-subtitle">• Meet Our Team •</h5>
                <h2 class="hcm-section-title-dark">Kami sangat bangga</h2>
                <h2 class="hcm-section-title-dark mb-5">dengan performa terbaik kami</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-sm-4">
                    <div class="hcm-team-card">
                        <div class="hcm-team-image">
                            <img src="{{ asset('assets/images/icon/farjun.png') }}" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="hcm-team-name">Farjun Azandi</h4>
                        <p class="hcm-team-position">Developer</p>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="hcm-team-card">
                        <div class="hcm-team-image">
                            <img src="{{ asset('assets/images/icon/iqbal.png') }}" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="hcm-team-name">Farjun Azandi</h4>
                        <p class="hcm-team-position">Mobile Apps Developer</p>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="hcm-team-card">
                        <div class="hcm-team-image">
                            <img src="{{ asset('assets/images/icon/agung.png') }}" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="hcm-team-name">Farjun Azandi</h4>
                        <p class="hcm-team-position">Implementer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonial Section -->
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
                                " Keputusan untuk bekerja sama dengan tim Hanara adalah salah satu keputusan terbaik yang pernah saya buat. Mereka tidak hanya menunjukkan dedikasi yang luar biasa terhadap proyek ini, tetapi juga menghasilkan kualitas kerja yang sangat memuaskan."            
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
                                "Kerja tim Hanara tidak hanya mengagumkan tetapi juga melebihi ekspektasi saya yang tertinggi. Mereka tidak hanya menghadirkan solusi kreatif dan inovatif, tetapi juga menjaga tingkat akurasi dan profesionalisme yang tinggi. "            
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
                                " Saya merasa sungguh beruntung dapat bekerja dengan tim Hanara yang luar biasa ini. Kerja keras mereka benar-benar terbayar dengan hasil yang luar biasa"
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

    <!-- Trusted Clients Section -->
    <section class="trusted-clients-section">
        <div class="container reveal-section">
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
  
    <!-- Pricing Section -->
 <section class="hcm-pricing-section">
        <div class="container py-5 reveal-section">
            <div class="text-center mb-5">
                <h2 class="hcm-pricing-title"><span class="hcm-orange">Paket</span> Terbaik untuk Bisnis Anda</h2>
                <p class="hcm-pricing-subtitle">Dapatkan penawaran paket HR Management yang terbaik dari PT. Hanara Prima Solusindo</p>
            </div>
            
            <div class="row g-4">
                <!-- Tier 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hcm-pricing-card">
                        <div class="hcm-pricing-icon-container">
                            <div class="hcm-pricing-icon">
                                <img src="{{ asset('assets/images/icon/icon-paket-cloud.png') }}" alt="Tier 1">
                            </div>
                            <h4>Tier 1</h4>
                        </div>
                        
                        <div class="hcm-pricing-amount">
                            <h2>Rp30k<span>/monthly</span></h2>
                        </div>
                        
                        <a href="#" class="btn hcm-pricing-btn">Beli Paket</a>
                        
                        <hr class="hcm-pricing-divider">
                        
                        <div class="hcm-pricing-features">
                            <h6>What's included</h6>
                            <ul class="hcm-feature-list">
                                <li><span class="hcm-check-icon"></span> HCIS Mobile</li>
                                <li><span class="hcm-check-icon"></span> Custom Domain</li>
                                <li><span class="hcm-check-icon"></span> Modul Asset Management</li>
                                <li><span class="hcm-check-icon"></span> Database Karyawan</li>
                                <li><span class="hcm-check-icon"></span> Modul Absensi</li>
                                <li><span class="hcm-check-icon"></span> Modul Penggajian</li>
                                <li><span class="hcm-check-icon"></span> Modul Cuti</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Tier 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hcm-pricing-card">
                        <div class="hcm-pricing-icon-container">
                            <div class="hcm-pricing-icon">
                                <img src="{{ asset('assets/images/icon/icon-paket-cloud2.png') }}" alt="Tier 2">
                            </div>
                            <h4>Tier 2</h4>
                        </div>
                        
                        <div class="hcm-pricing-amount">
                            <h2>Rp50k<span>/monthly</span></h2>
                        </div>
                        
                        <a href="#" class="btn hcm-pricing-btn">Beli Paket</a>
                        
                        <hr class="hcm-pricing-divider">
                        
                        <div class="hcm-pricing-features">
                            <h6>What's included</h6>
                            <ul class="hcm-feature-list">
                                <li><span class="hcm-check-icon"></span> HCIS Mobile</li>
                                <li><span class="hcm-check-icon"></span> Custom Domain</li>
                                <li><span class="hcm-check-icon"></span> Modul Asset Management</li>
                                <li><span class="hcm-check-icon"></span> Database Karyawan</li>
                                <li><span class="hcm-check-icon"></span> Modul Absensi</li>
                                <li><span class="hcm-check-icon"></span> Modul Penggajian</li>
                                <li><span class="hcm-check-icon"></span> Modul Cuti</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Tier 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hcm-pricing-card">
                        <div class="hcm-pricing-icon-container">
                            <div class="hcm-pricing-icon">
                                <img src="{{ asset('assets/images/icon/icon-paket-cloud3.png') }}" alt="Tier 3">
                            </div>
                            <h4>Tier 3</h4>
                        </div>
                        
                        <div class="hcm-pricing-amount">
                            <h2>Rp70k<span>/monthly</span></h2>
                        </div>
                        
                        <a href="#" class="btn hcm-pricing-btn">Beli Paket</a>
                        
                        <hr class="hcm-pricing-divider">
                        
                        <div class="hcm-pricing-features">
                            <h6>What's included</h6>
                            <ul class="hcm-feature-list">
                                <li><span class="hcm-check-icon"></span> HCIS Mobile</li>
                                <li><span class="hcm-check-icon"></span> Custom Domain</li>
                                <li><span class="hcm-check-icon"></span> Modul Asset Management</li>
                                <li><span class="hcm-check-icon"></span> Database Karyawan</li>
                                <li><span class="hcm-check-icon"></span> Modul Absensi</li>
                                <li><span class="hcm-check-icon"></span> Modul Penggajian</li>
                                <li><span class="hcm-check-icon"></span> Modul Cuti</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Tier 4 - Popular -->
                <div class="col-lg-3 col-md-6">
                    <div class="hcm-pricing-card hcm-pricing-popular">
                        <div class="hcm-popular-badge">Paling Popular</div>
                        <div class="hcm-pricing-icon-container">
                            <div class="hcm-pricing-icon">
                                <img src="{{ asset('assets/images/icon/icon-paket-cloud4.png') }}" alt="Tier 4">
                            </div>
                            <h4>Tier 4</h4>
                        </div>
                        
                        <div class="hcm-pricing-amount">
                            <h2>Rp90k<span>/monthly</span></h2>
                        </div>
                        
                        <a href="#" class="btn hcm-pricing-btn hcm-pricing-btn-popular">Beli Paket</a>
                        
                        <hr class="hcm-pricing-divider">
                        
                        <div class="hcm-pricing-features">
                            <h6>What's included</h6>
                            <ul class="hcm-feature-list">
                                <li><span class="hcm-check-icon"></span> HCIS Mobile</li>
                                <li><span class="hcm-check-icon"></span> Custom Domain</li>
                                <li><span class="hcm-check-icon"></span> Modul Asset Management</li>
                                <li><span class="hcm-check-icon"></span> Database Karyawan</li>
                                <li><span class="hcm-check-icon"></span> Modul Absensi</li>
                                <li><span class="hcm-check-icon"></span> Modul Penggajian</li>
                                <li><span class="hcm-check-icon"></span> Modul Cuti</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Component -->
    <div class="container mt-5 reveal-section">
        @include('components.contact')
    </div>

    <!-- Map Section -->
    <section class="contact-section reveal-section">
        <div class="container">
            <h4 class="map-title">Lokasi Kami</h4>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1088071562257!2d102.29693!3d-3.81233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b18431b2b9c7%3A0x8a6d7f5183f7c773!2sJl.%20Batang%20Hari%2C%20Nusa%20Indah%2C%20Kec.%20Ratu%20Agung%2C%20Kota%20Bengkulu%2C%20Bengkulu%2038223!5e0!3m2!1sid!2sid!4v1715382540125!5m2!1sid!2sid" 
                width="100%" 
                height="250" 
                style="border:0; border-radius:10px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="map-actions mt-2">
                <a href="https://maps.app.goo.gl/FTxacZPBbKNzovbX8" target="_blank" class="btn btn-submit">
                    Petunjuk Arah
                </a>
            </div>
        </div>
    </section>
@endsection