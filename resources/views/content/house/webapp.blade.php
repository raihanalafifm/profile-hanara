@extends('layout.main')

@section('container')
    <section class="hnr-webapp-section">
        <div class="container ">
            <!-- Header Section - Web Application -->
            <div class="row align-items-center mb-5">
                <!-- Web App Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 reveal-section">
                    <div class="hnr-webapp-img-container">
                        <img src="{{ asset('assets/images/icon/web app.png') }}" alt="Web Application" class="hnr-webapp-img">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7 reveal-section">
                    <div class="hnr-webapp-content">
                        <h1 class="hnr-webapp-title">
                            <span class="hnr-webapp-title-orange">JASA</span> PEMBUATAN<br>
                            WEB APPLICATION
                        </h1>

                        <p class="hnr-webapp-description">
                            Kebutuhan digital bisnis saat ini tidak lagi cukup dengan website company profile saja. Banyak
                            perusahaan, sekolah, dan organisasi kini membutuhkan aplikasi web berbasis sistem seperti
                            dashboard internal, web portal, aplikasi operasional (logistik, finance, HR, purchasing, dll.),
                            atau platform layanan pelanggan berbasis cloud.
                            <br>
                            Kami menyediakan layanan pembuatan web application custom menggunakan framework Laravel,
                            CodeIgniter (CI), maupun DevExpress, sesuai dengan kebutuhan sistem Anda.
                            Semua aplikasi dirancang secara khusus (tailor-made) untuk memenuhi spesifikasi, proses bisnis,
                            dan fitur yang Anda ajukan — mulai dari multi-user login, manajemen data, hingga integrasi API
                            eksternal.

                        </p>

                        <!-- Achievement Stats -->
                        <div class="hnr-webapp-stats">
                            <div class="hnr-webapp-stat-item">
                                <div class="hnr-webapp-stat-icon">
                                    <img src="{{ asset('assets/images/icon/monitor.png') }}" alt="Projects">
                                </div>
                                <div class="hnr-webapp-stat-content">
                                    <h3 class="hnr-webapp-stat-number">200 +</h3>
                                    <p class="hnr-webapp-stat-text">Successfully Project Finished</p>
                                </div>
                            </div>

                            <div class="hnr-webapp-stat-item">
                                <div class="hnr-webapp-stat-icon">
                                    <img src="{{ asset('assets/images/icon/calender.png') }}" alt="Experience">
                                </div>
                                <div class="hnr-webapp-stat-content">
                                    <h3 class="hnr-webapp-stat-number">10 +</h3>
                                    <p class="hnr-webapp-stat-text">Year of Experience Web Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-nextcloud-section-title">
                        <span class="hnr-nextcloud-title-orange">Layanan </span> ini cocok untuk:
                    </h2>
                </div>
            </div>

            <div class="row hnr-webdev-services-row">
                <!-- Service 1: Aplikasi internal perusahaan -->
                <div class="col-md-6 mb-3 reveal-section">
                    <div class="hnr-webdev-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-2.png') }}" alt="Privasi & Keamanan Tinggi"
                                class="img-fluid">
                        </div>
                        <div class="hnr-webdev-service-content">
                            <h3 class="hnr-webdev-service-title">Aplikasi internal perusahaan dan startup</h3>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Sistem informasi sekolah -->
                <div class="col-md-6 mb-3 reveal-section">
                    <div class="hnr-webdev-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-6.png') }}" alt="kustomisasi fleksibel"
                                class="img-fluid">
                        </div>
                        <div class="hnr-webdev-service-content">
                            <h3 class="hnr-webdev-service-title">Sistem informasi sekolah dan yayasan</h3>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Web portal layanan publik -->
                <div class="col-md-6 mb-3 reveal-section">
                    <div class="hnr-webdev-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-5.png') }}" alt="akses mudah"
                                class="img-fluid">
                        </div>
                        <div class="hnr-webdev-service-content">
                            <h3 class="hnr-webdev-service-title">Web portal layanan publik dan pemerintahan</h3>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Platform bisnis cloud -->
                <div class="col-md-6 mb-3 reveal-section">
                    <div class="hnr-webdev-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-7.png') }}" alt="cloud platform"
                                class="img-fluid">
                        </div>
                        <div class="hnr-webdev-service-content">
                            <h3 class="hnr-webdev-service-title">Platform bisnis berbasis cloud / SaaS</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Best Framework Section -->
            <div class="row mt-5 mb-5 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-webapp-framework-title">
                        <span class="hnr-webapp-title-orange">Best</span> Framework Untuk
                        <span class="d-block">Web Application</span>
                    </h2>
                    <p class="hnr-webapp-framework-subtitle">
                        Pilih framework yang tepat untuk mempercepat, mengamankan, dan memudahkan pengembangan aplikasi
                        berbasis web sesuai kebutuhan bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- Framework Laravel -->
            <div class="row mb-5 align-items-center reveal-section">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="hnr-webapp-framework-logo">
                        <img src="{{ asset('assets/images/icon/laravel.png') }}" alt="Laravel" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 class="hnr-webapp-framework-name">Laravel – Modern, Powerful, dan Efisien
                    </h3>
                    <p class="hnr-webapp-framework-desc">
                        Laravel adalah framework PHP paling populer saat ini, digunakan secara luas dalam pengembangan
                        aplikasi web modern.
                        <br>
                        Dengan arsitektur yang rapi, Laravel cocok untuk membangun sistem kompleks seperti dashboard, ERP,
                        atau aplikasi multi-user.

                    </p>
                    <div class="hnr-webapp-framework-features">
                        <h4 class="hnr-webapp-features-title">Keunggulan Framework Laravel:</h4>
                        <ol class="hnr-webapp-features-list">
                            <li>Struktur kode rapi & scalable, mudah dikembangkan ke fitur lanjutan</li>
                            <li>Memiliki sistem templating Blade yang memudahkan UI dinamis</li>
                            <li>Tersedia banyak paket/library yang mempercepat pengembangan</li>
                            <li>Mendukung REST API dan integrasi pihak ketiga secara optimal</li>
                            <li> Sangat cocok untuk project web application berbasis cloud system</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Framework DevXpress -->
            <div class="row mb-5 align-items-center reveal-section">
                <div class="col-md-9 order-md-1 order-2">
                    <h3 class="hnr-webapp-framework-name">DevExpress – Solusi UI Interaktif Berbasis Visual Studio
                    </h3>
                    <p class="hnr-webapp-framework-desc">
                        DevExpress adalah komponen UI berbasis .NET dan Visual Studio, digunakan untuk membangun aplikasi
                        web dengan tampilan user interface yang canggih dan interaktif. <br>
                        Umumnya dipakai untuk aplikasi enterprise atau sistem desktop-to-web.

                    </p>
                    <div class="hnr-webapp-framework-features">
                        <h4 class="hnr-webapp-features-title">Keunggulan Framework DevExpress:</h4>
                        <ol class="hnr-webapp-features-list">
                            <li>Komponen visual lengkap: layout, grid, form, tab, dll</li>
                            <li>Terintegrasi dengan Visual Studio untuk workflow yang cepat</li>
                            <li>Cocok untuk aplikasi desktop yang ingin dikonversi ke web hybrid</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4 mb-md-0 order-md-2 order-1">
                    <div class="hnr-webapp-framework-logo">
                        <img src="{{ asset('assets/images/icon/devexpress.png') }}" alt="DevXpress" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Framework CodeIgniter -->
            <div class="row mb-5 align-items-center reveal-section">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="hnr-webapp-framework-logo">
                        <img src="{{ asset('assets/images/icon/codeigniter.png') }}" alt="CodeIgniter" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-9">
                    <h3 class="hnr-webapp-framework-name">CodeIgniter – Ringan, Cepat, dan Stabil</h3>
                    <p class="hnr-webapp-framework-desc">
                        CodeIgniter (CI) adalah framework PHP yang ringan dan cocok untuk sistem berskala kecil-menengah.
                        CI banyak dipilih untuk aplikasi yang butuh proses cepat, stabil, dan mudah di-deploy di shared
                        hosting.</p>
                    <div class="hnr-webapp-framework-features">
                        <h4 class="hnr-webapp-features-title">Keunggulan Framework CodeIgniter:</h4>
                        <ol class="hnr-webapp-features-list">
                            <li>Performa tinggi & ringan di berbagai jenis server</li>
                            <li>Struktur MVC sederhana, mudah dipelajari & dipahami tim internal</li>
                            <li>Tidak membutuhkan resource besar, hemat biaya server</li>
                            <li>Cocok untuk sistem internal, manajemen data, atau aplikasi web perusahaan</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row mt-5 mb-5 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-webapp-why-title">
                        <span class="hnr-webapp-title-orange">Kenapa</span> Harus Membuat
                        <span class="d-block">Web Application Di Hanara?</span>
                    </h2>
                    <p class="hnr-webapp-why-subtitle">
                        Kami menghadirkan solusi pembuatan aplikasi web yang cepat, aman, dan sepenuhnya disesuaikan dengan
                        proses bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- Benefits Grid -->
            <div class="row mt-4 mb-5 reveal-section">
                <!-- Benefit 1 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">Menyesuaikan Kebutuhan Anda</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Kami membangun aplikasi web custom berdasarkan kebutuhan bisnis Anda. <br>
                            Mulai dari sistem sederhana hingga kompleks, semua dirancang khusus agar fungsional dan efisien.
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">Tim Ahli Dan Berpengalaman</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Project Anda akan ditangani langsung oleh tim developer profesional dengan pengalaman membangun
                            berbagai sistem web untuk perusahaan, institusi, dan startup.
                        </p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-palette-fill"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">Expert UI/UX</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Tampilan bukan hanya soal estetika, tapi juga pengalaman pengguna.
                            Kami merancang antarmuka web yang intuitif, harmonis, dan mudah digunakan oleh semua level user.
                        </p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">Harga Termasuk Resource</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Setiap paket kami sudah termasuk domain, hosting, dan resource teknis lainnya — tanpa biaya
                            tersembunyi. Anda cukup fokus pada hasil.
                        </p>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">Desain Responsif</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Aplikasi Anda akan berjalan optimal di semua perangkat — mulai dari desktop hingga smartphone —
                            tanpa kehilangan performa atau kenyamanan pengguna.
                        </p>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-webapp-benefit-card">
                        <div class="hnr-webapp-benefit-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3 class="hnr-webapp-benefit-title">24/7 Support</h3>
                        <p class="hnr-webapp-benefit-desc">
                            Tim support kami siap membantu kapan pun Anda mengalami kendala.
                            Kami paham bahwa sistem digital harus siap melayani tanpa henti.
                        </p>
                    </div>
                </div>
            </div>

            <section class="hnr-contact-section">
                <div class="container">
                    @include('components.contact')
                </div>
            </section>
        </div>
    </section>
@endsection
