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
                        <p class="text-dark">Mengatur Data Karyawan, Absensi Karyawan, Penggajian Karyawan dengan lebih
                            mudah dan efisien.</p>

                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ url('https://apps.apple.com/id/app/hcis-mobile/id6443559171?l=id') }}"
                                target="_blank" rel="noopener noreferrer" class="btn hcm-app-store-btn">
                                <img src="{{ asset('assets/images/icon/appstore.png') }}" width="24"
                                    alt="App Store Icon">
                                Available on App Store
                            </a>
                            <a href="{{ url('https://play.google.com/store/apps/details?id=com.aakmining.hcismobile') }}"
                                target="_blank" rel="noopener noreferrer" class="btn hcm-play-store-btn">
                                <img src="{{ asset('assets/images/icon/playstore.png') }}" width="24"
                                    alt="Play Store Icon">
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
                        <h2 class="hcm-section-title">HUMAN CAPITAL MANAGEMENT (HCM)</h2>
                        <div class="hcm-description">
                            <p>Aplikasi dengan sistem lengkap untuk HR (Human Resource) / HRD dari Hanara yang berfungsi
                                untuk mengelola proses SDM secara digital, dari absensi hingga penggajian.
                            </p>
                            <p>
                                Solusi ini terdiri dari dua modul terintegrasi:s
                            </p>
                            <ol>
                                <li>HCM (Web Dashboard): Digunakan oleh tim HR, Finance, dan Payroll untuk mengelola
                                    database
                                    karyawan, jadwal kerja, cuti, penggajian, BPJS, hingga pelaporan SPT Tahunan.</li>
                                <li>HCIS (Mobile App): Digunakan oleh karyawan untuk absensi online, pengajuan cuti/izin,
                                    melihat slip gaji, serta notifikasi HR secara langsung melalui smartphone.</li>
                            </ol>
                            <p>
                                Dengan sistem berbasis web dan mobile yang saling terhubung, aplikasi HCM Hanara memudahkan
                                perusahaan mengelola SDM secara efisien dan real-time.
                            </p>
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
                <h2 class="hcm-section-title-dark">Fitur Aplikasi HR</h2>
                <h2 class="hcm-section-title-orange">
                    Lengkap dan Terintegrasi
                </h2>
                <p class="hcm-services-desc">Semua kebutuhan pengelolaan SDM tersedia dalam satu sistem, dari database
                    karyawan hingga pelaporan gaji dan BPJS.
                </p>
            </div>

            <div class="row g-4">
                <!-- First row of services -->
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service1.png') }}" alt="Manajemen Karyawan">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Karyawan</h4>
                        <p class="hcm-service-desc">Kelola data karyawan secara digital, termasuk jabatan, divisi, status
                            kontrak, riwayat kerja, dan dokumen penting lainnya.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service2.png') }}" alt="Manajemen Absensi">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Absensi</h4>
                        <p class="hcm-service-desc">Catat absensi harian secara online melalui metode manual, fingerprint,
                            atau aplikasi mobile (dengan GPS & selfie check-in).
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service3.png') }}" alt="Manajemen Penggajian">
                        </div>
                        <h4 class="hcm-service-title">Manajemen Penggajian (Payroll)
                        </h4>
                        <p class="hcm-service-desc">Hitung gaji otomatis berdasarkan absensi, lembur, potongan, pinjaman,
                            dan tunjangan.
                            Sudah termasuk fitur slip gaji digital & export laporan.
                        </p>
                    </div>
                </div>

                <!-- Second row of services -->
                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service4.png') }}" alt="Pinjaman">
                        </div>
                        <h4 class="hcm-service-title">Pinjaman Karyawan</h4>
                        <p class="hcm-service-desc">Fitur pengelolaan pinjaman internal karyawan yang terhubung ke sistem
                            payroll, lengkap dengan tenor, cicilan, dan riwayat angsuran.

                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service5.png') }}" alt="Pengajuan Izin">
                        </div>
                        <h4 class="hcm-service-title">Pengajuan Izin &amp; Cuti</h4>
                        <p class="hcm-service-desc">Karyawan bisa mengajukan cuti, izin sakit, atau dinas secara mandiri
                            melalui aplikasi mobile. <br>
                            Pengajuan dapat disetujui langsung oleh atasan terkait.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="hcm-service-card text-center">
                        <div class="hcm-service-icon">
                            <img src="{{ asset('assets/images/icon/hcm-service6.png') }}" alt="BPJS">
                        </div>
                        <h4 class="hcm-service-title">Integrasi BPJS Kesehatan &amp; Ketenagakerjaan
                        </h4>
                        <p class="hcm-service-desc">Data payroll terhubung langsung dengan perhitungan BPJS secara otomatis,
                            mendukung pelaporan reguler ke instansi terkait.</p>
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
                                " Keputusan untuk bekerja sama dengan tim Hanara adalah salah satu keputusan terbaik yang
                                pernah saya buat. Mereka tidak hanya menunjukkan dedikasi yang luar biasa terhadap proyek
                                ini, tetapi juga menghasilkan kualitas kerja yang sangat memuaskan."
                            </div>
                            <div class="testimonial-clean-company">
                                <div class="company-logo-wrapper">
                                    <img src="{{ asset('assets/images/icon/cde-logo.png') }}"
                                        alt="PT. Cakrawala Dinamika Energi" class="company-logo">
                                </div>
                                <p class="company-name">PT. Cakrawala Dinamika Energi</p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-clean-item">
                            <div class="testimonial-clean-text">
                                "Kerja tim Hanara tidak hanya mengagumkan tetapi juga melebihi ekspektasi saya yang
                                tertinggi. Mereka tidak hanya menghadirkan solusi kreatif dan inovatif, tetapi juga menjaga
                                tingkat akurasi dan profesionalisme yang tinggi. "
                            </div>
                            <div class="testimonial-clean-company">
                                <div class="company-logo-wrapper">
                                    <img src="{{ asset('assets/images/icon/spn-logo.png') }}"
                                        alt="PT. Global Tech Indonesia" class="company-logo">
                                </div>
                                <p class="company-name">PT. SPN</p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-clean-item">
                            <div class="testimonial-clean-text">
                                " Saya merasa sungguh beruntung dapat bekerja dengan tim Hanara yang luar biasa ini. Kerja
                                keras mereka benar-benar terbayar dengan hasil yang luar biasa"
                            </div>
                            <div class="testimonial-clean-company">
                                <div class="company-logo-wrapper">
                                    <img src="{{ asset('assets/images/icon/JYL.png') }}" alt="PT. Mitra Solusi Digital"
                                        class="company-logo">
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

    <!-- Custom Solution Section - Menggantikan Pricing Section -->
    <section class="hcm-custom-solution-section reveal-section">
        <div class="container">
            <div class="custom-solution-wrapper">
                <!-- Background decoration elements -->
                <div class="bg-decoration-1"></div>
                <div class="bg-decoration-2"></div>
                <div class="bg-decoration-3"></div>

                <div class="row align-items-center">
                    <!-- Content Column -->
                    <div class="col-lg-7">
                        <div class="custom-solution-content">
                            <h2 class="solution-title">
                                <span class="title-line-1">Setiap Perusahaan Punya</span>
                                <span class="title-line-2">Kebutuhan HR yang <span
                                        class="text-gradient">Berbeda</span></span>
                            </h2>

                            <h3 class="solution-subtitle">
                                Kami bantu rancang solusi HCM yang sesuai untuk Anda.
                            </h3>

                            <p class="solution-description">
                                Fitur dan modul dalam sistem HCM Hanara dapat disesuaikan berdasarkan skala bisnis,
                                jumlah karyawan, dan alur kerja HR di perusahaan Anda.
                            </p>

                            <p class="solution-cta-text">
                                Hubungi tim kami untuk mendapatkan penawaran terbaik, lengkap dengan
                                <span class="highlight-text">demo dan konsultasi tanpa biaya.</span>
                            </p>

                            <div class="cta-button-wrapper">
                                <a href="#contact-section" class="btn-consult-now">
                                    <span class="btn-text">Konsultasi Sekarang</span>
                                    <span class="btn-arrow">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>

                                <!-- Floating badges -->
                                {{-- <div class="floating-badge badge-1">
                                    <i class="bi bi-check-circle-fill"></i> Free Demo
                                </div>
                                <div class="floating-badge badge-2">
                                    <i class="bi bi-headset"></i> Konsultasi Gratis
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Illustration Column -->
                    <div class="col-lg-5">
                        <div class="solution-illustration">
                            <div class="illustration-wrapper">
                                <!-- Animated circles -->
                                <div class="animated-circle circle-1"></div>
                                <div class="animated-circle circle-2"></div>
                                <div class="animated-circle circle-3"></div>

                                <!-- Feature cards floating around -->
                                {{-- <div class="feature-card card-1">
                                    <i class="bi bi-gear-fill"></i>
                                    <span>Customizable</span>
                                </div>
                                <div class="feature-card card-2">
                                    <i class="bi bi-graph-up"></i>
                                    <span>Scalable</span>
                                </div>
                                <div class="feature-card card-3">
                                    <i class="bi bi-shield-check"></i>
                                    <span>Secure</span>
                                </div> --}}

                                <!-- Main illustration using image or custom graphics -->
                                <div class="main-illustration">
                                    <!-- Bisa menggunakan gambar existing atau SVG custom -->
                                    <img src="#" alt="HCM Customization" class="img-fluid"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">

                                    <!-- Fallback SVG jika gambar tidak ada -->
                                    <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        style="display:none;">
                                        <!-- Building blocks representing customization -->
                                        <rect x="100" y="250" width="80" height="80" rx="8"
                                            fill="#FF6B00" opacity="0.9" />
                                        <rect x="140" y="210" width="80" height="80" rx="8"
                                            fill="#FF8533" opacity="0.9" />
                                        <rect x="180" y="170" width="80" height="80" rx="8"
                                            fill="#FFA366" opacity="0.9" />
                                        <rect x="220" y="130" width="80" height="80" rx="8"
                                            fill="#FFC299" opacity="0.9" />

                                        <!-- Connecting lines -->
                                        <path d="M140 290 L220 210" stroke="#333" stroke-width="2"
                                            stroke-dasharray="5,5" />
                                        <path d="M180 250 L260 170" stroke="#333" stroke-width="2"
                                            stroke-dasharray="5,5" />

                                        <!-- Icons on blocks -->
                                        <text x="140" y="295" font-size="24" fill="white"
                                            text-anchor="middle">📊</text>
                                        <text x="180" y="255" font-size="24" fill="white"
                                            text-anchor="middle">👥</text>
                                        <text x="220" y="215" font-size="24" fill="white"
                                            text-anchor="middle">⚙️</text>
                                        <text x="260" y="175" font-size="24" fill="white"
                                            text-anchor="middle">📱</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Component dengan ID untuk scroll -->
    <section class="hnr-contact-section mt-5" id="contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection
