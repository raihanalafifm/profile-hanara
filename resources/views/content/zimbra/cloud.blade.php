@extends('layout.main')

@section('container')
    <!-- Zimbra Cloud Header Section -->
    <section class="hnr-cloud-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Zimbra Cloud Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-cloud-logo-container">
                        <img src="{{ asset('assets/images/icon/zimbra cloud.png') }}" alt="Zimbra Cloud"
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
                <!-- Package 1: Business Email - Rp30k -->
                {{-- <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-cloud-package-card">
                        <div class="hnr-cloud-package-header">
                            <div class="hnr-cloud-package-type">
                                <div class="hnr-cloud-package-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud.png') }}" alt="Business Email"
                                        class="img-fluid">
                                </div>
                                <span class="hnr-cloud-package-name">Business Email</span>
                            </div>
                            <h3 class="hnr-cloud-package-price">Rp30k<span class="hnr-cloud-price-period">/month</span></h3>
                            <a href="#" class="hnr-cloud-order-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-cloud-package-content">
                            <h4 class="hnr-cloud-included-title">What's Included</h4>

                            <!-- Fitur Utama (Selalu Ditampilkan) -->
                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Email</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Advanced Search</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Zimlets for Custom Extensions</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Conversation Views</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Offline Web Client (Chrome & Firefox)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Attachment Search</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Contacts</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Personal Distribution Lists</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Global Address Lists (GAL)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>MS Exchange Interoperability</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Fitur Tambahan (Tersembunyi secara default) -->
                            <div class="hnr-cloud-expanded-features">
                                <!-- Calendar Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Calendar</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Basic Calendar</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Shared Calendars</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Calendar Scheduling</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Resource Scheduling</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Document Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Documents</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Basic Document Storage</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Document Sharing</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Document Versioning</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tasks Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Tasks</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Basic Task Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Shared Tasks</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Task Notifications</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Mobile Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Mobile & Sync</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Mobile Web Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>ActiveSync Support</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>POP/IMAP Access</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Admin Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Administration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Basic Admin Controls</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Advanced User Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Domain Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Storage & Limits -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Storage & Limits</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>5GB Storage per User</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Max 25MB Attachment Size</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <button class="hnr-cloud-toggle-btn">Lihat semua fitur <i
                                    class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div> --}}

                <!-- Package 2: Business Email Plus - Rp50k -->
                {{-- <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-cloud-package-card">
                        <div class="hnr-cloud-package-header">
                            <div class="hnr-cloud-package-type">
                                <div class="hnr-cloud-package-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud2.png') }}"
                                        alt="Business Email Plus" class="img-fluid">
                                </div>
                                <span class="hnr-cloud-package-name">Business Email Plus</span>
                            </div>
                            <h3 class="hnr-cloud-package-price">Rp50k<span class="hnr-cloud-price-period">/month</span>
                            </h3>
                            <a href="#" class="hnr-cloud-order-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-cloud-package-content">
                            <h4 class="hnr-cloud-included-title">What's Included</h4>

                            <!-- Fitur Utama (Selalu Ditampilkan) -->
                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Email</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Advanced Search</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Zimlets for Custom Extensions</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Conversation Views</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Offline Web Client (Chrome & Firefox)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>Attachment Search</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Contacts</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Personal Distribution Lists</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Global Address Lists (GAL)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                        <span>MS Exchange Interoperability</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Fitur Tambahan (Tersembunyi secara default) -->
                            <div class="hnr-cloud-expanded-features">
                                <!-- Calendar Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Calendar</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Basic Calendar</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Calendars</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Calendar Scheduling</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Resource Scheduling</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Document Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Documents</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Storage</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Sharing</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Document Versioning</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tasks Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Tasks</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Task Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Tasks</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-x-circle-fill hnr-icon-cross"></i>
                                            <span>Task Notifications</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Mobile Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Mobile & Sync</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Mobile Web Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>ActiveSync Support</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>POP/IMAP Access</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Admin Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Administration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Admin Controls</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>User Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Domain Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Storage & Limits -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Storage & Limits</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>10GB Storage per User</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Max 50MB Attachment Size</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <button class="hnr-cloud-toggle-btn">Lihat semua fitur <i
                                    class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Package 3: Standard Edition - Rp70k -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-cloud-package-card">
                        <div class="hnr-cloud-package-header">
                            <div class="hnr-cloud-package-type">
                                <div class="hnr-cloud-package-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud3.png') }}"
                                        alt="Standard Edition" class="img-fluid">
                                </div>
                                <span class="hnr-cloud-package-name">Standard Edition</span>
                            </div>
                            <h3 class="hnr-cloud-package-price">Rp70k<span class="hnr-cloud-price-period">/month</span>
                            </h3>
                            <a href="#" class="hnr-cloud-order-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-cloud-package-content">
                            <h4 class="hnr-cloud-included-title">What's Included</h4>

                            <!-- Fitur Utama (Selalu Ditampilkan) -->
                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Email</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Advanced Search</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Zimlets for Custom Extensions</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Conversation Views</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Offline Web Client (Chrome & Firefox)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Attachment Search</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="hnr-cloud-feature-group">
                                <h5 class="hnr-cloud-feature-group-title">Contacts</h5>
                                <ul class="hnr-cloud-feature-list">
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Personal Distribution Lists</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>Global Address Lists (GAL)</span>
                                    </li>
                                    <li class="hnr-cloud-feature-item">
                                        <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                        <span>MS Exchange Interoperability</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Fitur Tambahan (Tersembunyi secara default) -->
                            <div class="hnr-cloud-expanded-features">
                                <!-- Calendar Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Calendar</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Calendar</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Calendars</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Calendar Scheduling</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Resource Scheduling</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Document Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Documents</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Storage</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Sharing</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Versioning</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tasks Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Tasks</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Task Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Tasks</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Task Notifications</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Mobile Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Mobile & Sync</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Mobile Web Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>ActiveSync Support</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>POP/IMAP Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Mobile Device Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Security Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Security</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enhanced Spam Protection</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Anti-Virus Scanning</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Data Encryption</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Admin Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Administration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Admin Controls</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Comprehensive User Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Multi-Domain Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Backup & Restore</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Storage & Limits -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Storage & Limits</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>25GB Storage per User</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Max 100MB Attachment Size</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Quota Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Collaboration Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Collaboration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Folders</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Delegation</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Team Mailboxes</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Additional Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Additional Features</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Email Auto-Responders</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Email Filters & Rules</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>LDAP Integration</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <button class="hnr-cloud-toggle-btn">Lihat semua fitur <i
                                    class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div> --}}

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
                                rel="noopener noreferrer" class="hnr-cloud-order-btn hnr-cloud-order-btn-popular">Beli
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

                            <!-- Fitur Tambahan (Tersembunyi secara default) -->
                            {{-- <div class="hnr-cloud-expanded-features">
                                <!-- Calendar Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Calendar</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enterprise Calendar</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Shared Calendars</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Calendar Delegation</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Resource Scheduling & Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Meeting Room Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Document Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Documents</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enterprise Document Storage</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Document Sharing</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Versioning</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Document Workflow</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tasks Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Tasks</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enterprise Task Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Shared Task Lists</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Task Assignments</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Task Notifications & Reminders</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Mobile Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Mobile & Sync</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enterprise Mobile Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced ActiveSync</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>POP/IMAP Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Comprehensive Mobile Device Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Mobile Security Policies</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Security Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Security</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Premium Spam Protection</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Anti-Virus</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Data Loss Prevention (DLP)</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Email Encryption</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Two-Factor Authentication</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Email Archiving</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Admin Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Administration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Enterprise Admin Console</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Role-Based Administration</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Multi-Domain Management</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Backup & Restore</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Monitoring & Reporting</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Storage & Limits -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Storage & Limits</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>50GB Storage per User</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Unlimited Attachment Size</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Dynamic Quota Management</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Collaboration Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Collaboration</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Shared Folders</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Delegation</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Team Collaboration Spaces</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Group Messaging</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Additional Features -->
                                <div class="hnr-cloud-feature-group">
                                    <h5 class="hnr-cloud-feature-group-title">Additional Features</h5>
                                    <ul class="hnr-cloud-feature-list">
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced Email Rules & Filters</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Email Signatures & Templates</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Advanced LDAP Integration</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>API Access</span>
                                        </li>
                                        <li class="hnr-cloud-feature-item">
                                            <i class="bi bi-check-circle-fill hnr-icon-check"></i>
                                            <span>Priority Support</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <button class="hnr-cloud-toggle-btn">Lihat semua fitur <i
                                    class="bi bi-chevron-down"></i></button> --}}
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
