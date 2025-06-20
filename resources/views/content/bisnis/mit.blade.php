@extends('layout.main')

@section('container')
    <!-- MIT Hero Section -->
@section('container')
    <!-- MIT Hero Section -->
    <section class="mit-hero-section">
        <!-- Background Orange Element -->
        <div class="mit-bg-orange-element"></div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <!-- Content Column -->
                <div class="col-12">
                    <div class="mit-hero-content">
                        <!-- Text Content -->
                        <div class="mit-text-content">
                            <h1 class="mit-main-title">
                                <span class="mit-orange">MIT -</span> Management<br>
                                Information Technology
                            </h1>
                            <p class="mit-subtitle">
                                Platform Terintegrasi untuk Manajemen Operasional Departemen IT
                            </p>

                            <!-- CTA Button -->
                            <div class="mit-cta-section">
                                <a href="#" class="mit-cta-btn">
                                    Konsultasi Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Dashboard Image -->
                        <div class="mit-dashboard-container ">
                            <img src="{{ asset('assets/images/mit/hero.svg') }}" alt="MIT Dashboard"
                                class="mit-dashboard-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIT About Section - Persis seperti gambar -->
    <section class="mit-about-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column - Laptop -->
                <div class="col-lg-6">
                    <div class="mit-about-image">
                        <img src="{{ asset('assets/images/mit/about.svg') }}" alt="MIT Laptop" class="mit-about-img">
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6">
                    <div class="mit-about-content">
                        <!-- About Us Badge -->
                        <span class="mit-about-badge">About Us</span>

                        <!-- Title -->
                        <h2 class="mit-about-title">
                            MIT - Management<br>
                            Information Technology
                        </h2>

                        <!-- Description -->
                        <p class="mit-about-description">
                            MIT adalah aplikasi berbasis web yang dikembangkan khusus untuk mendukung kinerja
                            dan tata kelola harian Departemen IT di perusahaan. Aplikasi ini dirancang untuk
                            mengelola proses kerja yang kompleks dengan efisiensi tinggi, transparansi progres,
                            dan dokumentasi yang terdigitalisasi secara menyeluruh.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIT Features Section -->
    <section class="mit-features-section">
        <div class="container">
            <!-- Section Header (Centered) -->
            <div class="mit-section-header">
                <!-- Section Tag -->
                <span class="mit-section-tag">Features</span>

                <!-- Main Title -->
                <h2 class="mit-features-title">
                    Fitur Utama <span class="mit-orange">MIT</span>
                </h2>

                <!-- Description -->
                <p class="mit-features-description">
                    Bukan sekadar aplikasi manajemen tugas. MIT adalah platform digitalisasi operasional IT yang dirancang
                    untuk meningkatkan produktivitas, transparansi, dan efisiensi seluruh tim IT, mulai dari support harian,
                    pengelolaan aplikasi, infrastruktur, hingga konten digital perusahaan.
                </p>
            </div>
        </div>
    </section>

    <!-- MIT Task Management Section -->
    <section class="mit-task-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-task-content">
                        <!-- Task Management Section -->
                        <div class="mit-task-management">
                            <h2 class="mit-unscheduled-title">
                                Task Management
                            </h2>
                            <p class="mit-task-desc">
                                MIT menyediakan sistem manajemen tugas (task management) yang terstruktur dengan berbagai
                                status:
                            </p>

                            <!-- Status List -->
                            <div class="mit-status-list">
                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Plan to Do:</strong> daftar tugas yang
                                        direncanakan</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Today's Plan:</strong> tugas yang akan dikerjakan
                                        hari ini</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Working:</strong> tugas yang sedang
                                        dikerjakan</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>On Hold:</strong> tugas tertunda karena kendala
                                        atau dependencies</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Completed & Archived:</strong> tugas selesai &
                                        diarsipkan otomatis</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-task-image">
                        <img src="{{ asset('assets/images/mit/fitur1.svg') }}" alt="MIT Task Management Interface"
                            class="mit-task-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIT Unscheduled Task Section -->
    <section class="mit-unscheduled-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-image">
                        <img src="{{ asset('assets/images/mit/fitur2.svg') }}" alt="MIT Unscheduled Task Interface"
                            class="mit-unscheduled-img">
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-content">
                        <!-- Main Title -->
                        <h2 class="mit-unscheduled-title">
                            Unscheduled Task
                        </h2>

                        <!-- Subtitle -->
                        <h3 class="mit-unscheduled-subtitle">
                            Fleksibel untuk Respons Cepat.
                        </h3>

                        <!-- Description -->
                        <p class="mit-unscheduled-description">
                            Berbeda dari task biasa, MIT juga menyediakan fitur Unscheduled Task yang memungkinkan pengguna
                            mencatat pekerjaan yang tidak direncanakan sebelumnya, namun tetap terdokumentasi secara
                            real-time. Cocok untuk pekerjaan darurat, ad-hoc, atau respon cepat harian.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIT client Management Section -->
    <section class="mit-task-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-task-content">
                        <!-- Task Management Section -->
                        <div class="mit-task-management">
                            <h2 class="mit-unscheduled-title">
                                Client Management
                            </h2>
                            <p class="mit-task-desc">
                                MIT memudahkan proses layanan internal melalui modul:
                            </p>

                            <!-- Status List -->
                            <div class="mit-status-list">
                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Ticket Request</strong> untuk permintaan umum
                                        IT</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Email Request</strong> untuk pembuatan akun
                                        email</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Role User Request</strong> untuk permintaan akses
                                        sistem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-task-image">
                        <img src="{{ asset('assets/images/mit/fitur3.svg') }}" alt="MIT Client Management Interface"
                            class="mit-task-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIT integrasi sdm Section -->
    <section class="mit-unscheduled-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-image">
                        <img src="{{ asset('assets/images/mit/fitur4.svg') }}" alt="MIT integrasi sdm Interface"
                            class="mit-unscheduled-img">
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-content">
                        <!-- Main Title -->
                        <h2 class="mit-unscheduled-title">
                            Integrasi SDM
                        </h2>

                        <!-- Subtitle -->
                        <h3 class="mit-unscheduled-subtitle">
                            Sinkron dengan Aplikasi HCM
                        </h3>

                        <!-- Description -->
                        <p class="mit-unscheduled-description">
                            MIT dilengkapi fitur untuk mencatat dan mengelola database karyawan secara internal. Bahkan
                            dapat disinkronkan dengan sistem HCM (Human Capital Management) milik Hanara untuk menampilkan
                            data user, divisi, posisi, dan kebutuhan administratif lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIT IT Application Section -->
    <section class="mit-task-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-task-content">
                        <!-- Task Management Section -->
                        <div class="mit-task-management">
                            <h2 class="mit-unscheduled-title">
                                IT Application
                            </h2>
                            <h3 class="mit-unscheduled-subtitle">
                                Pengelolaan Aplikasi Perusahaan
                            </h3>
                            <p class="mit-task-desc">
                                Pengelolaan Aplikasi Perusahaan MIT mempermudah tim developer & IT support untuk:
                            </p>

                            <!-- Status List -->
                            <div class="mit-status-list">
                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text">Mencatat dan mengelola daftar URL aplikasi aktif</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text">Menerima & menindaklanjuti permintaan update ke
                                        production</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text">Mendistribusikan notifikasi update kepada tim
                                        terkait</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text">Modul ini sangat penting untuk perusahaan yang
                                        menjalankan banyak aplikasi internal maupun eksternal secara paralel.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-task-image">
                        <img src="{{ asset('assets/images/mit/fitur5.svg') }}" alt="MIT IT Application Interface"
                            class="mit-task-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIT IT Infrastructure Section -->
    <section class="mit-unscheduled-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-image">
                        <img src="{{ asset('assets/images/mit/fitur6.svg') }}" alt="MIT IT Infrastructure Interface"
                            class="mit-unscheduled-img">
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-content">
                        <!-- Main Title -->
                        <h2 class="mit-unscheduled-title">
                            IT Infrastructure
                        </h2>

                        <!-- Subtitle -->
                        <h3 class="mit-unscheduled-subtitle">
                            Dokumentasi Infrastruktur Digital
                        </h3>

                        <!-- Description -->
                        <p class="mit-unscheduled-description">
                            model ini meliputi:
                        </p>
                        <div class="mit-status-list">
                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text"><strong>Company Email List:</strong> daftar email aktif
                                    karyawan</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text"><strong>List Remote PC:</strong> daftar komputer untuk remote
                                    troubleshooting</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text"><strong>Roster:</strong> pengelolaan jadwal kerja shift/tim
                                    lapangan</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text"><strong>Monitoring Qouta, Topologi, dan lainnya:</strong>
                                    Sebagai dokumentasi infrastruktur TI perusahaan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIT Task Management Section -->
    <section class="mit-task-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-task-content">
                        <!-- Task Management Section -->
                        <div class="mit-task-management">
                            <h2 class="mit-unscheduled-title">
                                IT Digital Creative
                            </h2>
                            <h3 class="mit-unscheduled-subtitle">
                                Koordinasi Tim Konten Sosial Media.
                            </h3>
                            <p class="mit-task-desc">
                                Menyediakan modul seperti:
                            </p>

                            <!-- Status List -->
                            <div class="mit-status-list">
                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>Sosial Media Calender:</strong> Penjadwalan
                                        konten harian/mingguan</span>
                                </div>

                                <div class="mit-status-item">
                                    <span class="mit-status-icon">✓</span>
                                    <span class="mit-status-text"><strong>MIT Announcement &amp; Banner:</strong> Pusat
                                        pengumuman untuk tim creative &amp; internal banding</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-task-image">
                        <img src="{{ asset('assets/images/mit/fitur7.svg') }}" alt="MIT IT Digital Creative Interface"
                            class="mit-task-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIT Unscheduled Task Section -->
    <section class="mit-unscheduled-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Image -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-image">
                        <img src="{{ asset('assets/images/mit/fitur8.svg') }}" alt="MIT Library Interface"
                            class="mit-unscheduled-img">
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-6">
                    <div class="mit-unscheduled-content">
                        <!-- Main Title -->
                        <h2 class="mit-unscheduled-title">
                            Library
                        </h2>

                        <!-- Subtitle -->
                        <h3 class="mit-unscheduled-subtitle">
                            Pusat Dokumen IT.
                        </h3>

                        <!-- Description -->
                        <p class="mit-unscheduled-description">
                            Menyimpan baerbagai referensi dan standar operasional</p>
                        <div class="mit-status-list">
                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text">SOP</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text">Manual Book</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text">Internal Memo</span>
                            </div>

                            <div class="mit-status-item">
                                <span class="mit-status-icon">✓</span>
                                <span class="mit-status-text">Semua dokumen terdigitalisasi dan mudah dicari kapan pun
                                    dibutuhkan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
