@extends('layout.main')

@section('container')
    <section class="hnr-house-maint-section">
        <div class="container">
            <div class="row align-items-center reveal-section">
                <!-- Logo/Image Section -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-house-maint-logo-container">
                        <img src="{{ asset('assets/images/icon/maintenance-web.png') }}" alt="Website Maintenance"
                            class="hnr-house-maint-logo">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-house-maint-content">
                        <h1 class="hnr-house-maint-title">
                            <span class="hnr-house-maint-title-orange">JASA</span> MAINTENANCE WEBSITE
                        </h1>

                        <p class="hnr-house-maint-description">
                            Layanan kami, sebagai website membukakan maintenance berkala guna memaksimalkan dan menjaga
                            performa website tetap optimal, sehingga membuat seluruh halaman website terjaga dengan baik.
                            Kami juga memastikan performa website Anda karena kami akan melakukan maintenance kode, update
                            fitur, maintenance framework, update konten, dan meningkatkan artisel dan lain lain.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-house-benefit-section reveal-section">
                        <h2 class="hnr-house-benefit-title"><span class="hnr-house-benefit-title-orange">Mengapa</span>
                            Maintenance Penting?</h2>
                        <p class="hnr-house-benefit-subtitle">Maintenance rutin menjaga website tetap aman, cepat, dan bebas
                            masalah</p>

                        <div class="row mt-4">
                            <!-- Item 1: Software & Plugin Outdated -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance1.png') }}"
                                                alt="Software & Plugin Outdated">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Software & Plugin Outdated</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Software dan plugin yang outdated membuat website Anda beresiko pada performa
                                        website dalam mengakibati. Bisa dan mulai komponen website membuat.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 2: Performa Website Tidak Optimal -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance2.png') }}"
                                                alt="Performa Website">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Performa Website Tidak Optimal</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Masalah performa website seperti lambatnya loading website yang buruk? Bukti yang
                                        dirasakan oleh para user dan membuat enggan untuk kembali mengakses website Anda.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 3: Konten Website Sudah Outdated -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance4.png') }}"
                                                alt="Konten Outdated">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Konten Website Sudah Outdated</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        User akan meninggal website Anda setelah tidak aktif jika melihat konten website
                                        yang terlalu lama tidak di-update. Membuat Anda kehilangan kepercayaan mendapatkan
                                        user atau customer baru.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 4: Data Website Hilang -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance3.png') }}"
                                                alt="Data Hilang">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Data Website Hilang</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Sayang sekali jika Anda harus kehilangan data penting client, customer, atau
                                        informasi lainnya karena sesuatu. Segala usaha bisnis Anda akan hilang bisa terhenti
                                        seketika.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise Section -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-house-expertise-section reveal-section">
                        <h2 class="hnr-house-expertise-title"><span class="hnr-house-expertise-title-orange">Kenapa</span>
                            Memilih Kami?</h2>
                        <p class="hnr-house-expertise-subtitle">Cepat, aman, dan andal. Website Anda berjalan dan siap
                            melayani</p>

                        <div class="row mt-4">
                            <!-- Expertise 1 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-fitur-3.png') }}"
                                            alt="Tim Professional">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Tim Professional</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Hanya memilih dan menggunakan software & plugin terbaik dan cocok untuk website
                                            anda guna meningkatkan performa dan kecepatan.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 2 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance1.png') }}"
                                            alt="Optimalisasi Performa">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Optimalisasi Performa Website</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Mengoptimalkan dan menyempurnakan performa website dalam hal kecepatan akan
                                            memberikan dan hangout dapat mendongkrak performa bisnis anda.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 3 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance7.png') }}"
                                            alt="Fast Support">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Fast Support Response</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Kami berkomitmen untuk memberikan respon cepat dalam 30 menit saat Anda
                                            mengalami masalah dengan website Anda.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 4 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance2.png') }}"
                                            alt="Security Updates">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Security Updates</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Keamanan website Anda adalah prioritas kami. Kami secara rutin memperbarui dan
                                            memantau aspek keamanan website Anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal-section">
                @include('components.contact')
            </div>
        </div>
    </section>
@endsection
