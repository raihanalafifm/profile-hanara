@extends('layout.main')

@section('container')
    <section class="hnr-zimserver-section">
        <div class="container">
            <!-- Zimbra Server Header Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-zimserver-image-container">
                        <img src="{{ asset('assets/images/icon/zimbra server.png') }}" alt="Zimbra Mail Server"
                            class="hnr-zimserver-logo">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hnr-zimserver-content">
                        <h1 class="hnr-zimserver-title">
                            <span class="hnr-zimserver-orange">ZIMBRA</span>
                            <span class="hnr-zimserver-black">MAIL SERVER</span>
                        </h1>
                        <p class="hnr-zimserver-desc">
                            Dengan dukungan tenaga profesional, bersertifikat, dan berpengalaman, PT Hanara Prima Solusindo
                            siap melayani kebutuhan implementasi Zimbra Mail Server, khususnya untuk lisensi Zimbra Network
                            Edition (Standard & Professional). Layanan kami mencakup instalasi, konfigurasi, pemeliharaan
                            rutin, hingga troubleshooting, sehingga Anda tidak perlu khawatir soal stabilitas dan
                            produktivitas sistem email bisnis Anda.
                        </p>
                        <p class="hnr-zimserver-desc">

                            Zimbra Mail Server adalah software kolaborasi berbasis open source yang banyak digunakan oleh
                            instansi pemerintah, BUMN, sektor perbankan, hingga perusahaan swasta. Versi Network Edition
                            menawarkan fitur yang lebih lengkap, seperti sinkronisasi ke perangkat mobile (ActiveSync),
                            backup & restore lanjutan, proteksi anti-spam premium, serta dukungan teknis langsung dari
                            vendor resmi.
                        </p>
                        <p class="hnr-zimserver-desc">
                            Jika Anda mencari solusi email server yang tangguh dan profesional untuk skala menengah hingga
                            enterprise, Zimbra Network Edition adalah pilihan tepat.
                        </p>
                        <p class="hnr-zimserver-desc">
                            Saatnya upgrade email bisnis Anda bersama Hanara — aman, efisien, dan didukung tim profesional
                            dengan pengalaman lebih dari 10 tahun.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Why Zimbra NE Section -->
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="hnr-zimserver-section-title">
                        <span class="hnr-zimserver-orange">Mengapa</span> Harus
                    </h2>
                    <h3 class="hnr-zimserver-section-subtitle">Zimbra Network Edition ?</h3>
                    <p class="hnr-zimserver-section-desc">Kemudahan kolaborasi dan keamanan email dalam satu platform cloud
                    </p>
                </div>
            </div>

            <!-- NE Features Row 1 -->
            <div class="row mb-5">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server1.png') }}" alt="Realtime">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Realtime</h4>
                        <p>Sinkronisasi data dan email secara langsung tanpa jeda, untuk kolaborasi yang efisien.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server2.png') }}" alt="Zimbra Docs">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Zimbra Docs</h4>
                        <p>Bekerja langsung di dokumen online tanpa perlu aplikasi tambahan — edit, simpan, dan kolaborasi
                            real-time.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server3.png') }}" alt="Zimbra Drive">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Zimbra Drive</h4>
                        <p>Media penyimpanan internal berbasis cloud untuk file penting, mudah diakses kapan saja.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server4.png') }}"
                                alt="MS Exchange Interoperability">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">MS Exchange Interoperability</h4>
                        <p>Kompatibel dengan Microsoft Exchange, memudahkan integrasi ke sistem enterprise.</p>
                    </div>
                </div>
            </div>

            <!-- NE Features Row 2 -->
            <div class="row mb-5">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server5.png') }}"
                                alt="Two-Factor Authentication">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Two-Factor Authentication</h4>
                        <p>Lapisan keamanan tambahan untuk login, melindungi akun dari akses tidak sah.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server6.png') }}" alt="Attachment Search">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Attachment Search</h4>
                        <p>Cari file lampiran dengan cepat langsung dari antarmuka email.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server7.png') }}" alt="Web Client Branding">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Web Client Branding</h4>
                        <p>Sesuaikan tampilan webmail dengan identitas brand perusahaan Anda.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="hnr-zimserver-feature-item text-center">
                        <div class="hnr-zimserver-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-server8.png') }}"
                                alt="Delegated Administration">
                        </div>
                        <h4 class="hnr-zimserver-feature-title">Delegated Administration</h4>
                        <p>Berikan peran admin terbatas ke staf IT tanpa membahayakan sistem utama.</p>
                    </div>
                </div>
            </div>

            <!-- Standard Package Section -->
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <h2 class="hnr-zimserver-package-title">Zimbra NE</h2>
                    <h3 class="hnr-zimserver-package-subtitle">Standard Package</h3>
                    <p class="hnr-zimserver-package-desc">Solusi email aman & andal untuk kebutuhan dasar</p>
                </div>
            </div>

            <!-- Standard Package Features -->
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Webmail Friendly</h4>
                            <p class="hnr-zimserver-feature-desc">Tampilan webmail yang simpel dan mudah digunakan, cocok
                                untuk pengguna non-teknis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-hdd"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">POP3/IMAP</h4>
                            <p class="hnr-zimserver-feature-desc">Akses email dari aplikasi seperti Outlook atau
                                Thunderbird, sesuai kebutuhan perangkat Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Zimbra Chat</h4>
                            <p class="hnr-zimserver-feature-desc">Fitur chat internal untuk memudahkan komunikasi antar
                                pengguna dalam satu organisasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-folder2"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Zimbra Drive</h4>
                            <p class="hnr-zimserver-feature-desc">Simpan dan kelola file secara online melalui Drive yang
                                terintegrasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Real-Time Backup</h4>
                            <p class="hnr-zimserver-feature-desc">Backup otomatis secara berkala untuk melindungi data
                                email dari kehilangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Two-Factor Authentication</h4>
                            <p class="hnr-zimserver-feature-desc">Keamanan ekstra dengan verifikasi dua langkah via ponsel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Web Admin Console</h4>
                            <p class="hnr-zimserver-feature-desc">Kelola akun pengguna dan server dengan tampilan antarmuka
                                yang user-friendly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Multi Domain</h4>
                            <p class="hnr-zimserver-feature-desc">Dukung banyak domain dalam satu server, praktis untuk
                                perusahaan grup/divisi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Class of Service</h4>
                            <p class="hnr-zimserver-feature-desc">Atur kuota, fitur, dan akses pengguna berdasarkan peran
                                atau divisi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional Package Section -->
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <h2 class="hnr-zimserver-package-title">Zimbra NE</h2>
                    <h3 class="hnr-zimserver-package-subtitle">Professional Package</h3>
                    <p class="hnr-zimserver-package-desc">Fitur lengkap untuk kolaborasi tingkat lanjut & efisiensi kerja
                        maksimal</p>
                </div>
            </div>

            <!-- Professional Package Features -->
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-check2-all"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Lebih Lengkap</h4>
                            <p class="hnr-zimserver-feature-desc">Semua fitur dari versi Standard sudah termasuk di dalam
                                paket ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Active Sync</h4>
                            <p class="hnr-zimserver-feature-desc">Sinkronisasi email, kalender, dan kontak ke berbagai
                                perangkat (HP, tablet, laptop).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-microsoft"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Outlook Sync</h4>
                            <p class="hnr-zimserver-feature-desc">Integrasi penuh dengan Microsoft Outlook — cocok untuk
                                kebutuhan enterprise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Mobile Device Management</h4>
                            <p class="hnr-zimserver-feature-desc">Hapus email dari perangkat jika hilang atau dicuri,
                                langsung dari admin panel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-archive"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Archiving</h4>
                            <p class="hnr-zimserver-feature-desc">Arsip otomatis untuk menyimpan dan mencari riwayat email
                                dengan mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="hnr-zimserver-package-feature">
                        <div class="hnr-zimserver-package-icon">
                            <i class="bi bi-share"></i>
                        </div>
                        <div class="hnr-zimserver-package-content">
                            <h4 class="hnr-zimserver-feature-name">Shared Items Sync</h4>
                            <p class="hnr-zimserver-feature-desc">Berbagi folder, dokumen, atau tugas antar pengguna
                                tingkatkan kolaborasi tim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mb-5">
            <div class="col-12">
                {{-- <h2 class="hnr-zimserver-section-title">
                    <span class="hnr-zimserver-orange">Tertarik?</span>
                </h2> --}}
                <h3 class="hnr-zimserver-section-subtitle">Tertarik menggunakan Zimbra Network Edition untuk bisnis atau
                    instansi Anda?
                </h3>
                <p class="hnr-zimserver-section-desc">Hubungi tim Hanara untuk konsultasi gratis dan penawaran terbaik.
                </p>
            </div>
        </div>
        <section class="hnr-contact-section">
            <div class="container">
                @include('components.contact')
            </div>
        </section>
    </section>
@endsection
