@extends('layout.main')

@section('container')
    <!-- Zimbra Cloud Header Section -->
    <section class="hnr-cloud-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Zimbra Cloud Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-cloud-logo-container">
                        <img src="{{ asset('assets/images/icon/zimbra-cloud.png') }}" alt="Zimbra Cloud"
                            class="hnr-cloud-logo">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-cloud-content">
                        <h1 class="hnr-cloud-title">
                            <span class="hnr-cloud-title-orange">ZIMBRA</span> CLOUD
                        </h1>

                        <p class="hnr-cloud-description">
                            Zimbra Cloud Hanara adalah layanan email bisnis berbasis cloud yang dijalankan di server milik
                            Hanara sendiri. Solusi ini dirancang khusus untuk UKM, sekolah, komunitas, dan organisasi yang
                            membutuhkan email profesional tanpa harus mengelola server sendiri.
                            <br>
                            <br>
                            Kami menawarkan sistem Zimbra yang andal dan hemat biaya, cukup dengan berlangganan per akun.
                            Setiap akun mendapatkan layanan email yang stabil, aman, serta dukungan teknis langsung dari tim
                            IT Hanara. Cocok untuk kebutuhan mulai dari satu akun hingga puluhan akun, tanpa biaya setup
                            yang besar.
                            <br>
                            <br>
                            Dengan dukungan teknologi open-source dan infrastruktur terkontrol, Hanara memberikan jaminan
                            performa server yang tinggi dan kapasitas bandwidth yang disesuaikan. Upgrade kapasitas juga
                            tersedia sesuai kebutuhan pertumbuhan bisnis Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zimbra Cloud Features Section -->
    <section class="hnr-cloud-features-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="hnr-cloud-features-title">Fitur <span class="hnr-title-bold">Zimbra Cloud</span></h2>
                    <p class="hnr-cloud-features-subtitle">Kelola email bisnis Anda dengan mudah, aman, dan efisien melalui
                        fitur lengkap yang terintegrasi.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Feature Cards - 3 per row on desktop -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Admin Console</h3>
                        <p class="hnr-cloud-feature-desc">Panel kontrol administrator yang intuitif untuk mengelola seluruh
                            aspek email server Anda.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-list-task"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Task</h3>
                        <p class="hnr-cloud-feature-desc">Manajemen tugas terintegrasi untuk membantu mengatur pekerjaan dan
                            meningkatkan kolaborasi tim.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-calendar-week"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Calendar</h3>
                        <p class="hnr-cloud-feature-desc">Kalender bersama yang memudahkan penjadwalan rapat dan pengelolaan
                            agenda harian tim.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-funnel-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Mail Filter</h3>
                        <p class="hnr-cloud-feature-desc">Filter email canggih untuk menyortir pesan masuk dan menyaring
                            spam secara otomatis.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-folder2-open"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Folder & File</h3>
                        <p class="hnr-cloud-feature-desc">Pengelolaan folder dan file yang fleksibel untuk menyimpan serta
                            mengatur dokumen penting.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-key-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Forgot Password</h3>
                        <p class="hnr-cloud-feature-desc">Sistem pemulihan kata sandi yang aman dan mudah digunakan oleh
                            pengguna.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Mail Protection</h3>
                        <p class="hnr-cloud-feature-desc">Perlindungan menyeluruh terhadap spam, virus, dan ancaman
                            phishing.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Contact</h3>
                        <p class="hnr-cloud-feature-desc">Manajemen kontak terpusat untuk menyimpan dan mengelola data
                            relasi bisnis Anda.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hnr-cloud-feature-card">
                        <div class="hnr-cloud-feature-icon">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <h3 class="hnr-cloud-feature-name">Briefcase</h3>
                        <p class="hnr-cloud-feature-desc">Tempat penyimpanan dokumen penting yang aman dan dapat
                            diakses dari mana saja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zimbra Cloud Packages Section -->
    <section class="hnr-cloud-packages-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="hnr-cloud-packages-title">Paket <span class="hnr-title-bold">Zimbra Cloud</span></h2>
                    <p class="hnr-cloud-packages-subtitle">Dapatkan penawaran paket Zimbra Cloud yang terbaik dari PT.
                        Hanara Prima Solusindo</p>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">


                <!-- Package 4: Professional Edition (Most Popular) - Rp90k -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-cloud-package-card popular">
                        <div class="hnr-cloud-popular-badge">Zimbra Cloud OSE</div>
                        <div class="hnr-cloud-package-header">
                            <div class="hnr-cloud-package-type">
                                <div class="hnr-cloud-package-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud4.png') }}"
                                        alt="Professional Edition" class="img-fluid">
                                </div>
                                <h2 class="hnr-cloud-package-name">Rp25.000 <span
                                        style="font-size: 12px; font-weight: normal; color: #555;">/ Akun / Bulan</span>
                                </h2>
                            </div>
                            {{-- <h3 class="hnr-cloud-package-price"><span class="hnr-cloud-price-period">Kapasitas 5 GB per
                                    akun. Cocok untuk UKM, sekolah, komunitas, dan tim kecil.</span>
                            </h3> --}}
                            <span class="hnr-cloud-price-period" style="font-size:14px">Kapasitas 5 GB per
                                akun. Cocok untuk UKM, sekolah, komunitas, dan tim kecil.</span>
                            <a href="{{ url('https://shop.hanara.id/product/zimbra-cloud-ose/ ') }}" target="_blank"
                                rel="noopener noreferrer" class="hnr-cloud-order-btn hnr-cloud-order-btn-popular"
                                onclick="gtag_report_conversion('zimbra-cloud-order')">Beli
                                Paket</a>
                        </div>

                        <div class="hnr-cloud-package-content">
                            <h4 class="hnr-cloud-included-title">Apa Saja yang Didapat</h4>

                            <!-- Fitur Utama (Selalu Ditampilkan) -->
                            <div class="hnr-cloud-feature-group">
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Tampilan Webmail yang Modern</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Fitur Dasar Email Lengkap</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Dukungan POP3/IMAP/SMTP</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Manajemen Kontak</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Kalender Pribadi</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Akses Mobile Siap Pakai</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Server Dikelola oleh Hanara</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="email-promo-container">
        <div class="email-promo-bg">
            <img src="{{ asset('assets/images/gambar/bgcloud.jpg') }}" alt="" class="email-promo-image">
            <div class="email-promo-content">
                <h5 class="email-promo-title">🎯 Mulai Gunakan Email Bisnis Anda Hari Ini! <br>
                    Hanya <strong>Rp25.000</strong> per akun per bulan <br> hemat, stabil, dan langsung siap
                    pakai.
                </h5>

                <h2 class="email-promo-button">🎁 Promo Setup Zimbra Cloud</h2>

                <h5 class="email-promo-subtitle">
                    Cukup bayar <span class="email-promo-highlight">Rp500.000</span> untuk setup awal!! <br>
                    langsung dapat bonus domain .com selama <span class="email-promo-highlight">1 tahun!</span>
                    <br>
                    Termasuk konfigurasi awal, setting email, dan panduan pemakaian dari tim Hanara.
                </h5>

                <h6 class="email-promo-note">*Syarat & ketentuan berlaku. Domain dapat dipilih selama masih
                    tersedia.</h6>
            </div>
        </div>
    </div>
    <!-- Contact Us Section -->
    <section class="hnr-contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection
