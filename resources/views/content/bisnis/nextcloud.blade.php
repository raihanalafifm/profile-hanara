@extends('layout.main')

@section('container')
    <section class="hnr-nextcloud-section">
        <div class="container">
            <!-- Header Section with Logo and Description -->
            <div class="row align-items-center mb-5 reveal-section">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-nextcloud-logo-container">
                        <img src="{{ asset('assets/images/icon/nextcloud-icon.png') }}" alt="Nextcloud"
                            class="hnr-nextcloud-logo img-fluid">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hnr-nextcloud-content">
                        <h1 class="hnr-nextcloud-title">
                            <span class="hnr-nextcloud-title-orange">JASA INSTALASI</span>
                            <span class="hnr-nextcloud-title-dark">NEXTCLOUD</span>
                        </h1>

                        <p class="hnr-nextcloud-description">
                            Nextcloud adalah solusi cloud storage yang aman, fleksibel, dan dapat disesuaikan untuk
                            kebutuhan bisnis modern. Hanara menyediakan jasa instalasi dan konfigurasi Nextcloud, baik untuk
                            sistem on-premise maupun private cloud, agar perusahaan Anda dapat berbagi dan mengelola dokumen
                            dengan efisien, tanpa bergantung pada layanan cloud publik.
                        </p>

                        <p class="hnr-nextcloud-description">
                            Dengan Nextcloud, Anda dapat menyimpan, mengakses, dan membagikan file secara real-time dari
                            berbagai perangkat, kapan saja, di mana saja. Sistem ini dirancang dengan keamanan tingkat
                            tinggi dan kontrol penuh atas data, cocok untuk perusahaan, institusi pendidikan, dan organisasi
                            yang mengutamakan privasi dan produktivitas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Nextcloud Interface Section -->
            <div class="row text-center mb-5 reveal-section">
                <div class="col-12">
                    <h2 class="hnr-nextcloud-section-title">
                        <span class="hnr-nextcloud-title-orange">Tampilan</span> Nextcloud
                    </h2>
                    <p class="hnr-nextcloud-section-subtitle">
                        Inilah tampilan antarmuka Nextcloud—platform penyimpanan cloud yang mendukung kolaborasi tim,
                        berbagi file secara aman, dan akses dokumen dari mana saja. Nextcloud hadir dengan fitur lengkap
                        untuk mendukung kerja jarak jauh dan produktivitas digital perusahaan Anda.
                    </p>

                    <div class="hnr-nextcloud-interface-container mt-4">
                        <img src="{{ asset('assets/images/icon/nextcloud-bisnis.png') }}" alt="Interface Nextcloud"
                            class="hnr-nextcloud-interface-img img-fluid">
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="row text-center mb-5 reveal-section">
                <div class="col-12">
                    <h2 class="hnr-nextcloud-section-title">
                        <span class="hnr-nextcloud-title-orange">Mengapa </span>Memilih Nextcloud dari Hanara?
                    </h2>
                    <p class="hnr-nextcloud-section-subtitle">
                        Hanara tidak hanya menyediakan instalasi, tetapi juga memberikan solusi menyeluruh untuk memastikan
                        Nextcloud berjalan optimal di lingkungan bisnis Anda. Berikut keunggulan layanan kami:
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <!-- Service 1: Konsultasi & Implementasi -->
                <div class="col-md-6 mb-4 reveal-section">
                    <div class="hnr-nextcloud-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-2.png') }}" alt="Privasi & Keamanan Tinggi"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Privasi & Keamanan Tinggi</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Data Anda tersimpan di server pribadi, bukan di cloud publik—sepenuhnya di bawah kendali
                                Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Migrasi Data -->
                <div class="col-md-6 mb-4 reveal-section">
                    <div class="hnr-nextcloud-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-6.png') }}" alt="kustomisasi fleksibel"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Kustomisasi Fleksibel</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Bisa diintegrasikan dengan sistem internal seperti LDAP, Zimbra, atau OnlyOffice sesuai
                                kebutuhan perusahaan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Pemeliharaan dan Dukungan -->
                <div class="col-md-6 mb-4">
                    <div class="hnr-nextcloud-service-card reveal-section">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-5.png') }}" alt="akses mudah"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Akses Mudah dari Mana Saja</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Tersedia aplikasi Nextcloud untuk Windows, macOS, Android, dan iOS, memudahkan kolaborasi
                                lintas perangkat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Pelatihan -->
                <div class="col-md-6 mb-4">
                    <div class="hnr-nextcloud-service-card reveal-section">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-fitur-3.png') }}" alt="instalasi teknis"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Instalasi & Dukungan Teknis Profesional</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Tim Hanara berpengalaman dalam deployment Nextcloud baik di cloud maupun on-premise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="display: flex; justify-content: center;">
                    <div class="col-md-6 mb-4">
                        <div class="hnr-nextcloud-service-card reveal-section">
                            <div class="hnr-nextcloud-service-icon">
                                <img src="{{ asset('assets/images/icon/icon-fitur-1.png') }}" alt="skalabilitas"
                                    class="img-fluid">
                            </div>
                            <div class="hnr-nextcloud-service-content">
                                <h3 class="hnr-nextcloud-service-title">Skalabilitas untuk Semua Skala Usaha</h3>
                                <p class="hnr-nextcloud-service-desc">
                                    Cocok untuk UMKM, sekolah, hingga perusahaan besar dengan kebutuhan storage dan user
                                    yang berkembang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mb-5 reveal-section">
                <div class="col-12">
                    <h2 class="hnr-nextcloud-section-title">
                        <span class="hnr-nextcloud-title-orange">Layanan</span> Kami
                    </h2>
                    <p class="hnr-nextcloud-section-subtitle">
                        PT Hanara Prima Solusindo menyediakan beragam layanan profesional untuk mendukung implementasi,
                        pengelolaan, dan optimalisasi Nextcloud di lingkungan perusahaan Anda.
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <!-- Service 1: Konsultasi & Implementasi -->
                <div class="col-md-6 mb-4 reveal-section">
                    <div class="hnr-nextcloud-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/layanan1.png') }}" alt="Konsultasi dan Implementasi"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Konsultasi dan Implementasi</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Kami menganalisis kebutuhan bisnis Anda secara menyeluruh dan merancang implementasi
                                Nextcloud yang optimal. Tim kami akan melakukan instalasi dan konfigurasi sistem sesuai
                                standar terbaik di industri, baik untuk server lokal maupun cloud.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Migrasi Data -->
                <div class="col-md-6 mb-4 reveal-section">
                    <div class="hnr-nextcloud-service-card">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/layanan2.png') }}" alt="Migrasi Data" class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Migrasi Data</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Layanan migrasi data dari sistem lama ke Nextcloud tanpa gangguan operasional. Kami menjamin
                                proses migrasi yang aman, cepat, dan minim downtime, termasuk integrasi dengan sistem file
                                atau platform lain.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Pemeliharaan dan Dukungan -->
                <div class="col-md-6 mb-4">
                    <div class="hnr-nextcloud-service-card reveal-section">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/layanan3.png') }}" alt="Pemeliharaan dan Dukungan"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Pemeliharaan dan Dukungan Teknis</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Kami menyediakan dukungan teknis 24/7 untuk memastikan Nextcloud berjalan stabil dan aman.
                                Termasuk pembaruan sistem berkala, troubleshooting, dan penguatan sistem keamanan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Pelatihan -->
                <div class="col-md-6 mb-4">
                    <div class="hnr-nextcloud-service-card reveal-section">
                        <div class="hnr-nextcloud-service-icon">
                            <img src="{{ asset('assets/images/icon/layanan4.png') }}" alt="Pelatihan dan Edukasi"
                                class="img-fluid">
                        </div>
                        <div class="hnr-nextcloud-service-content">
                            <h3 class="hnr-nextcloud-service-title">Pelatihan dan Edukasi</h3>
                            <p class="hnr-nextcloud-service-desc">
                                Sesi pelatihan bagi tim IT dan end-user agar dapat menggunakan Nextcloud secara maksimal.
                                Kami juga memberikan panduan best practices dan pengelolaan data yang efisien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="row mb-5">
                <div class="col-12 text-center reveal-section">
                    <h2 class="hnr-nextcloud-section-title mb-4"><span class="hnr-nextcloud-title-orange">FAQ</span></h2>
                    <p class="hnr-nextcloud-section-subtitle mb-5">Frequently Asked Questions (FAQ)</p>

                    <div class="hnr-nextcloud-faq-container">
                        <!-- FAQ Item 1 -->
                        <div class="hnr-nextcloud-faq-item active">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">01</div>
                                <h3 class="hnr-nextcloud-faq-question">Apa itu Nextcloud dan kenapa berbeda dari Google
                                    Drive atau Dropbox?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Nextcloud adalah platform cloud storage self-hosted yang memungkinkan Anda memiliki
                                    server penyimpanan sendiri. Berbeda dari Google Drive atau Dropbox, data Nextcloud tidak
                                    tersimpan di server publik, melainkan di server pribadi atau milik perusahaan Anda
                                    sendiri, sehingga privasi dan keamanan data lebih terjamin.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">02</div>
                                <h3 class="hnr-nextcloud-faq-question">Apakah saya harus punya server sendiri untuk memakai
                                    Nextcloud?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Tidak harus. Hanara menyediakan dua pilihan:
                                </p>
                                <p class="hnr-nextcloud-faq-answer">
                                    Instalasi di server milik Anda (on-premise)
                                </p>
                                <p class="hnr-nextcloud-faq-answer">
                                    Nextcloud berbasis cloud (pakai server Hanara)
                                </p>
                                <p class="hnr-nextcloud-faq-answer">
                                    Keduanya bisa disesuaikan dengan kebutuhan dan anggaran perusahaan Anda.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">03</div>
                                <h3 class="hnr-nextcloud-faq-question">Siapa saja yang cocok menggunakan Nextcloud?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Nextcloud cocok digunakan oleh:
                                </p>
                                <p class="hnr-nextcloud-faq-answer">
                                    Perusahaan swasta yang ingin menyimpan data internal secara aman
                                    <br>
                                    Instansi pendidikan untuk penyimpanan & distribusi materi
                                    <br>
                                    Pemerintahan yang memerlukan kontrol penuh atas file sensitif
                                    <br>
                                    UKM yang ingin beralih dari Google Drive namun tetap hemat biaya
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">04</div>
                                <h3 class="hnr-nextcloud-faq-question">Bisa diakses dari HP? Atau hanya di PC?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Bisa. Nextcloud memiliki aplikasi resmi untuk: Android & iOS Windows, MacOS, dan Linux
                                    Semua file bisa disinkronkan otomatis dan diakses kapan pun, di mana pun.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">05</div>
                                <h3 class="hnr-nextcloud-faq-question">
                                    Apakah Nextcloud mendukung kolaborasi dokumen seperti Google Docs?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Ya, dengan integrasi seperti OnlyOffice atau Collabora Online, pengguna bisa membuat,
                                    mengedit, dan berkolaborasi secara real-time pada dokumen Word, Excel, dan PowerPoint
                                    langsung di browser.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">06</div>
                                <h3 class="hnr-nextcloud-faq-question">Bagaimana kalau saya sudah punya data lama, apakah
                                    bisa dipindahkan ke Nextcloud?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Bisa. Kami menyediakan layanan migrasi data dari penyimpanan lama ke Nextcloud, baik
                                    dari Google Drive, Dropbox, maupun file server lokal.
                                </p>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">07</div>
                                <h3 class="hnr-nextcloud-faq-question">Apakah Hanara memberikan garansi atau support
                                    pasca-instalasi?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Ya. Kami menyediakan:
                                    <br>
                                    Garansi instalasi & konfigurasi
                                    <br>
                                    Dukungan teknis 24/7
                                    <br>
                                    Layanan maintenance bulanan atau tahunan
                                    <br>
                                    Monitoring uptime & patching keamanan rutin
                                </p>
                            </div>
                        </div>
                        <div class="hnr-nextcloud-faq-item">
                            <div class="hnr-nextcloud-faq-header">
                                <div class="hnr-nextcloud-faq-number">08</div>
                                <h3 class="hnr-nextcloud-faq-question">Berapa biaya layanan Nextcloud dari Hanara?</h3>
                                <div class="hnr-nextcloud-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="hnr-nextcloud-faq-body">
                                <p class="hnr-nextcloud-faq-answer">
                                    Biaya tergantung pada skala penggunaan (jumlah user, kapasitas storage), lokasi server
                                    (on-premise atau cloud), serta fitur tambahan yang diinginkan. Hubungi tim Hanara untuk
                                    penawaran terbaik sesuai kebutuhan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cloud-banner-wrapper reveal-section mb-5">
        <div class="cloud-banner" style="background-image: url('{{ asset('assets/images/gambar/cloud.jpg') }}')">
            <div class="cloud-banner-content">
                <h1>Siap Bangun Sistem Cloud Sendiri untuk Bisnis Anda?</h1>
                <p class="highlight"><strong>Gunakan Nextcloud - solusi cloud privat yang aman & fleksibel untuk perusahaan
                        Anda.</strong></p>
                <p>Tim Hanara siap membantu Anda dari tahap awal: konsultasi, instalasi, hingga perawatan Nextcloud yang
                    optimal.</p>
                <p class="cta">Sampaikan kebutuhan Anda lewat formulir di bawah, dan kami akan menghubungi Anda
                    secepatnya.</p>
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
