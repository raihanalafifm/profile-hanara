@extends('layout.main')

@section('container')
    <section class="sikerja-hero">
        <!-- Orange Decorative Circles -->
        <div class="sikerja-shape-left"></div>
        <div class="sikerja-shape-left-secondary"></div>
        <div class="sikerja-shape-right"></div>

        <div class="container-fluid sikerja-content-wrapper">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-md-6 col-12 order-2 order-lg-1">
                    <div class="sikerja-hero-content">
                        <h1 class="sikerja-title">siKerja</h1>
                        <h2 class="sikerja-subtitle">aplikasi mobile multifungsi yang dirancang oleh Hanara untuk mendukung
                            efisiensi kerja dan aktivitas harian Anda.</h2>
                        <p class="sikerja-description">
                            Dirancang agar ringan dan intuitif, siKerja cocok digunakan oleh individu, tim kerja, maupun
                            perusahaan yang ingin mengelola aktivitas secara lebih rapi, cepat, dan terstruktur—kapan saja,
                            di mana saja.
                        </p>

                        <!-- App Store Buttons -->
                        <div class="sikerja-app-store-buttons">
                            <a href="#" class="sikerja-app-store-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                                </svg>
                                Download on the App Store
                            </a>
                            <a href="#" class="sikerja-app-store-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
                                </svg>
                                GET IT ON Google Play
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="col-lg-6 col-md-6 col-12 order-1 order-lg-2">
                    <div class="sikerja-illustration">
                        <img src="{{ asset('assets/images/sikerja/hero.svg') }}" alt="SiKerja Hero"
                            class="sikerja-phone-mockup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fitur Unggulan siKerja Section -->
    <section class="sikerja-fitur-section">
        <div class="container">
            <!-- Section Header -->
            <div class="sikerja-fitur-header">
                <h2 class="sikerja-fitur-title">Fitur <span class="sikerja-orange">Unggulan</span> siKerja</h2>
                <p class="sikerja-fitur-subtitle">Kami memiliki beberapa kesempatan untuk bekerja sama dengan perusahaan dan
                    organisasi ternama di Indonesia.</p>
                <p class="sikerja-fitur-subtitle">Kami berusaha untuk memberikan pelayanan yang terbaik kepada semua klien
                    kami.</p>
            </div>

            <!-- Main Content -->
            <div class="row align-items-center">
                <!-- Left: Phone Image -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="sikerja-phone-container">
                        <img src="{{ asset('assets/images/sikerja/fitur.svg') }}" alt="siKerja Phone Mockup"
                            class="sikerja-phone-mockup">
                    </div>
                </div>

                <!-- Right: Features List -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="sikerja-features-list">
                        <!-- QR Scanner -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/qr.svg') }}" alt="qr code">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">QR Scanner</h3>
                                <p class="sikerja-feature-desc">Membaca barcode produk, inventaris, atau dokumen dengan
                                    cepat dan akurat, cocok untuk pengguna logistik dan operasional.</p>
                            </div>
                        </div>

                        <!-- Barcode Scanner -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/barcode.svg') }}" alt="scan barcode">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Barcode Scanner</h3>
                                <p class="sikerja-feature-desc">Membaca barcode produk, inventaris, atau dokumen dengan
                                    cepat dan akurat, cocok untuk pengguna logistik dan operasional. </p>
                            </div>
                        </div>

                        <!-- Timestamp Cam -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/timestamp.svg') }}" alt="timestamp cam">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Timestamp Cam</h3>
                                <p class="sikerja-feature-desc">Kamera dengan stempel waktu otomatis. Ideal untuk
                                    dokumentasi pekerjaan lapangan, audit, atau laporan teknis. </p>
                            </div>
                        </div>

                        <!-- Checklist Manager -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/check.svg') }}" alt="checklist manager">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Checklist Manager</h3>
                                <p class="sikerja-feature-desc">Buat, atur, dan selesaikan daftar tugas pribadi maupun
                                    profesional Anda dengan tampilan yang praktis dan user-friendly. </p>
                            </div>
                        </div>

                        <!-- Reminder Hub -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/reminder.svg') }}" alt="reminder hub">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Reminder Hub</h3>
                                <p class="sikerja-feature-desc">Pusat notifikasi & pengingat dari seluruh aktivitas penting
                                    Anda. Semua hal krusial akan muncul di sini. </p>
                            </div>
                        </div>

                        <!-- Quick Notes -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/notes.svg') }}" alt="quick notes">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Quick Notes</h3>
                                <p class="sikerja-feature-desc">Catatan singkat, cepat, dan instan. Cocok untuk menyimpan
                                    ide, to-do list, atau poin penting saat rapat. </p>
                            </div>
                        </div>

                        <!-- FinTrack -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/fintrack.svg') }}" alt="fintrack">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">FinTrack (Financial Tracker)</h3>
                                <p class="sikerja-feature-desc">Monitor pengeluaran dan pemasukan harian. Bantu Anda
                                    mengatur keuangan pribadi atau operasional tim kecil. </p>
                            </div>
                        </div>

                        <!-- Scan Doc -->
                        <div class="sikerja-feature-item">
                            <div class="sikerja-feature-icon-circle">
                                <img src="{{ asset('assets/images/sikerja/scan.svg') }}" alt="scan doc">
                            </div>
                            <div class="sikerja-feature-content">
                                <h3 class="sikerja-feature-name">Scan Doc (Cam Scanner)</h3>
                                <p class="sikerja-feature-desc">Fitur pemindai dokumen berbasis kamera. Ambil gambar dokumen
                                    fisik dan konversi otomatis menjadi format PDF rapi, cocok untuk kebutuhan administrasi
                                    digital. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIT Connect Section -->
    <section class="sikerja-mit-section">
        <div class="container">
            <!-- Section Header -->
            <div class="sikerja-mit-header">
                <h2 class="sikerja-mit-title"><span class="sikerja-mit-orange">MIT</span> Connect (Fitur Tambahan Khusus)
                </h2>
                <p class="sikerja-mit-subtitle">Untuk pengguna internal Hanara & mitra resmi, tersedia fitur MIT Connect
                    yang memungkinkan integrasi langsung ke sistem web MIT</p>
                <p class="sikerja-mit-subtitle">(Management Information Technology). Fitur ini memudahkan pegawai internal
                    untuk</p>
            </div>

            <!-- Main Content -->
            <div class="row align-items-center">
                <!-- Left: Features List -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="sikerja-mit-features">
                        <!-- Feature 1 -->
                        <div class="sikerja-mit-feature">
                            <div class="sikerja-mit-check">
                                <img src="{{ asset('assets/images/sikerja/checkils.svg') }}" alt="">
                            </div>
                            <span class="sikerja-mit-feature-text">Mengakses dan Memperbarui Task Terjadwal</span>
                        </div>

                        <!-- Feature 2 -->
                        <div class="sikerja-mit-feature">
                            <div class="sikerja-mit-check">
                                <img src="{{ asset('assets/images/sikerja/checkils.svg') }}" alt="">
                            </div>
                            <span class="sikerja-mit-feature-text">Menambah Unsheduled Task</span>
                        </div>

                        <!-- Feature 3 -->
                        <div class="sikerja-mit-feature">
                            <div class="sikerja-mit-check">
                                <img src="{{ asset('assets/images/sikerja/checkils.svg') }}" alt="">
                            </div>
                            <span class="sikerja-mit-feature-text">Melihat Laporan Mingguan</span>
                        </div>

                        <!-- Feature 4 -->
                        <div class="sikerja-mit-feature">
                            <div class="sikerja-mit-check">
                                <img src="{{ asset('assets/images/sikerja/checkils.svg') }}" alt="">
                            </div>
                            <span class="sikerja-mit-feature-text">Sinkronisasi Langsung ke Sistem Manajemen Proyek
                                IT</span>
                        </div>

                        <!-- Feature 5 -->
                        <div class="sikerja-mit-feature">
                            <div class="sikerja-mit-check">
                                <img src="{{ asset('assets/images/sikerja/checkils.svg') }}" alt="">
                            </div>
                            <span class="sikerja-mit-feature-text">MIT Connect hanya tersedia untuk pengguna
                                terverifikasi</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Device Images -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="sikerja-mit-devices">
                        <img src="{{ asset('assets/images/sikerja/laptop.svg') }}" alt="MIT Connect Devices"
                            class="sikerja-mit-devices-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mengapa siKerja Section - Tambahkan setelah section hero dan sebelum section fitur unggulan -->
    <section class="sikerja-mengapa-section">
        <div class="container">
            <!-- Section Header -->
            <div class="sikerja-mengapa-header text-center">
                <h2 class="sikerja-mengapa-title">Mengapa Harus Pakai <span class="sikerja-mengapa-orange">siKerja?</span>
                </h2>
            </div>

            <!-- Cards Grid -->
            <div class="row justify-content-center">
                <!-- Card 1: Bisa digunakan siapa saja -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="sikerja-mengapa-card">
                        <div class="sikerja-mengapa-icon">
                            <img src="{{ asset('assets/images/sikerja/mengapa1.svg') }}" alt="Bisa digunakan siapa saja">
                        </div>
                        <h3 class="sikerja-mengapa-card-title">Bisa digunakan siapa saja</h3>
                        <p class="sikerja-mengapa-card-desc">Nikmati berbagai fitur produktivitas tanpa membebani kinerja
                            perangkat Anda, tetap ringan dan responsif.</p>
                    </div>
                </div>

                <!-- Card 2: Fitur lengkap dan ringan -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="sikerja-mengapa-card">
                        <div class="sikerja-mengapa-icon">
                            <img src="{{ asset('assets/images/sikerja/mengapa2.svg') }}" alt="Fitur lengkap dan ringan">
                        </div>
                        <h3 class="sikerja-mengapa-card-title">Fitur lengkap dan ringan</h3>
                        <p class="sikerja-mengapa-card-desc">Nikmati berbagai fitur produktivitas tanpa membebani kinerja
                            perangkat Anda, tetap ringan dan responsif.</p>
                    </div>
                </div>

                <!-- Card 3: Tampilan modern -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="sikerja-mengapa-card">
                        <div class="sikerja-mengapa-icon">
                            <img src="{{ asset('assets/images/sikerja/mengapa3.svg') }}" alt="Tampilan modern">
                        </div>
                        <h3 class="sikerja-mengapa-card-title">Tampilan modern</h3>
                        <p class="sikerja-mengapa-card-desc">Desain antarmuka yang bersih dan intuitif memberikan
                            pengalaman pengguna yang nyaman dan efisien.</p>
                    </div>
                </div>

                <!-- Card 4: Terintegrasi dengan sistem MIT & produk Hanara lainnya -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="sikerja-mengapa-card">
                        <div class="sikerja-mengapa-icon">
                            <img src="{{ asset('assets/images/sikerja/mengapa4.svg') }}"
                                alt="Terintegrasi dengan sistem MIT">
                        </div>
                        <h3 class="sikerja-mengapa-card-title">Terintegrasi dengan sistem MIT & produk Hanara lainnya</h3>
                        <p class="sikerja-mengapa-card-desc">Mendukung sinkronisasi otomatis dengan berbagai sistem Hanara
                            untuk alur kerja yang lebih terhubung dan efisien.</p>
                    </div>
                </div>

                <!-- Card 5: Cocok untuk keperluan pribadi, kerja lapangan, admin kantor, atau supervisor -->
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="sikerja-mengapa-card">
                        <div class="sikerja-mengapa-icon">
                            <img src="{{ asset('assets/images/sikerja/mengapa5.svg') }}"
                                alt="Cocok untuk berbagai keperluan">
                        </div>
                        <h3 class="sikerja-mengapa-card-title">Cocok untuk keperluan pribadi, kerja lapangan, admin kantor,
                            atau supervisor</h3>
                        <p class="sikerja-mengapa-card-desc">Solusi fleksibel untuk berbagai kebutuhan—dari penggunaan
                            individu hingga tim kerja skala kecil maupun besar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hnr-contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection
