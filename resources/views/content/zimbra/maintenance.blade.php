@extends('layout.main')

@section('container')
    <section class="hnr-maint-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo/Image Section -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-maint-logo-container">
                        <img src="{{ asset('assets/images/icon/maintenance-zimbra.png') }}" alt="Maintenance Zimbra"
                            class="hnr-maint-logo" loading="lazy">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-maint-content">
                        <h1 class="hnr-maint-title">
                            <span class="hnr-maint-title-orange">JASA</span> MAINTENANCE ZIMBRA
                        </h1>

                        <p class="hnr-maint-description">
                            Layanan Maintenance Zimbra dari Hanara dirancang untuk perusahaan atau instansi yang menggunakan
                            Zimbra Mail Server, namun tidak memiliki tim internal yang menguasai teknisnya. Daripada
                            menunggu error atau gangguan, kami menyediakan layanan support tahunan yang mencakup
                            pemeliharaan berkala, monitoring, dan bantuan saat dibutuhkan.
                            <br>
                            <br>
                            Sama seperti mesin produksi yang harus dirawat agar tidak tiba-tiba berhenti, Zimbra sebagai
                            pusat komunikasi bisnis juga butuh perawatan rutin. Terlebih jika email server Anda digunakan
                            setiap hari oleh banyak karyawan, maka memastikan kestabilan dan keamanan sistem menjadi hal
                            yang penting.
                            <br>
                            <br>
                            Dengan berlangganan jasa maintenance ini, Anda memiliki tim ahli dari Hanara yang siap membantu
                            kapan pun dibutuhkan tanpa harus repot mencari vendor baru saat masalah muncul.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Manfaat Maintenance Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-manfaat-section">
                        <h2 class="hnr-manfaat-title"><span class="hnr-manfaat-title-orange">Manfaat</span> Maintenance</h2>
                        <p class="hnr-manfaat-subtitle">Manfaat preventive maintenance untuk Zimbra Anda</p>

                        <div class="row mt-4">
                            <!-- Item 1: Pemeliharaan Sistem Operasi -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance1.png') }}"
                                                alt="Sistem Operasi" loading="lazy">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Pemeliharaan Sistem Operasi</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Memastikan OS yang menjadi fondasi Zimbra tetap stabil dan dalam status normal.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 2: Hardening dan Security -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance2.png') }}"
                                                alt="Security">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Hardening dan Security</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Menjaga keamanan server dari potensi serangan siber melalui pengecekan dan penguatan
                                        sistem.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 3: Pengecekan Log Server -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance3.png') }}"
                                                alt="Log Server">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Pengecekan Log Server</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Mendeteksi lebih awal potensi error atau penyalahgunaan melalui audit log harian.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 4: Report dan Recomendation -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance4.png') }}"
                                                alt="Report">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Report dan Recomendation</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Setiap tindakan preventif disusun dalam laporan lengkap berikut saran perbaikan.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 5: Update Versi / Patch Sistem -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance5.png') }}"
                                                alt="Update">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Update Versi / Patch Sistem</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Menjaga sistem tetap aman dan kompatibel dengan fitur baru melalui patch rutin.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 6: Pemeriksaan Service Zimbra -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance6.png') }}"
                                                alt="Service">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Pemeriksaan Service Zimbra</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Memastikan semua layanan utama Zimbra (LDAP, Mailbox, MTA, dll) berjalan normal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Centered Cards Row -->
                        <div class="row mt-4 justify-content-center">
                            <!-- Item 7: Fast Troubleshooting -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance7.png') }}"
                                                alt="Troubleshooting">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Fast Troubleshooting</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Tim kami siap membantu saat terjadi gangguan, dengan proses pengecekan dan pemecahan
                                        masalah yang cepat dan terarah.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 8: Tanpa SDM Zimbra di Kantor Anda -->
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance8.png') }}"
                                                alt="Remote">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Tanpa SDM Zimbra di Kantor Anda</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Tidak perlu rekrut staf teknis baru — cukup percayakan ke tim Hanara yang
                                        berpengalaman.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="hnr-manfaat-item">
                                    <div class="hnr-manfaat-icon-container">
                                        <div class="hnr-manfaat-icon">
                                            <img src="{{ asset('assets/images/icon/icon-card-maintenance4.png') }}"
                                                alt="Remote">
                                        </div>
                                    </div>
                                    <h3 class="hnr-manfaat-item-title">Monitoring Performa Server</h3>
                                    <p class="hnr-manfaat-item-text">
                                        Pantauan berkala pada resource server untuk mencegah overload atau kegagalan sistem.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pilihan Layanan Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-layanan-section">
                        <h2 class="hnr-layanan-title"><span class="hnr-layanan-title-orange">Pilihan</span> Layanan
                            Maintenance Zimbra</h2>
                        <p class="hnr-layanan-subtitle">Solusi maintenance terbaik untuk memastikan Zimbra Anda tetap
                            andal.
                        </p>

                        <div class="row mt-4">
                            <!-- Basic Support -->
                            <div class="col-lg-4 mb-4">
                                <div class="hnr-layanan-card">
                                    <h3 class="hnr-layanan-card-title">Basic Support</h3>
                                    <span style="display: block; text-align: center;">
                                        Cocok untuk perusahaan kecil atau instansi yang membutuhkan dukungan teknis ringan
                                        tanpa harus standby penuh setiap hari.
                                    </span>
                                    <br>
                                    <div class="hnr-layanan-feature-list">
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Office Hour Support</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Maksimal 1x Upgrade Version per
                                                tahun</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">On Site Preventive Maintenance
                                                1x/tahun</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Remote Monitoring</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Laporan Maintenance Sistem</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Training Zimbra Admin Console</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Dukungan via Telepon, SMS, Email, Chat
                                                Support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Standard Support -->
                            <div class="col-lg-4 mb-4">
                                <div class="hnr-layanan-card">
                                    <h3 class="hnr-layanan-card-title">Standard Support</h3>
                                    <span style="display: block; text-align: center;">
                                        Pilihan tepat untuk instansi menengah yang butuh dukungan lebih aktif dan pelatihan
                                        lebih mendalam untuk tim internal.
                                    </span>
                                    <br>
                                    <div class="hnr-layanan-feature-list">
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Daily Support via remote</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Maksimal 2x Upgrade Version per
                                                tahun</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Preventive maintenance onsite
                                                terjadwal</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Remote Monitoring</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Training Zimbra Admin Console &
                                                Maintenance Sistem</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Training Maintenance Sistem</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Dukungan Via Telepon, SMS, Email, Chat
                                                Support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Premium Support -->
                            <div class="col-lg-4 mb-4">
                                <div class="hnr-layanan-card">
                                    <h3 class="hnr-layanan-card-title">Premium Support</h3>
                                    <span style="display: block; text-align: center;">
                                        Layanan prioritas untuk organisasi besar yang membutuhkan respons cepat,
                                        fleksibilitas tinggi, dan dukungan penuh setiap saat.
                                    </span>
                                    <br>
                                    <div class="hnr-layanan-feature-list">
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Anytime Support</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Unlimited Upgrade Version</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Preventive maintenance onsite dan remote
                                                (sesuai SLA)</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Monitoring sistem 24/7</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Laporan sistem berkala dan rekomendasi
                                                pengembangan</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Pelatihan lanjutan untuk administrasi
                                                sistem dan troubleshooting</span>
                                        </div>
                                        <div class="hnr-layanan-feature">
                                            <span class="hnr-check-icon"></span>
                                            <span class="hnr-layanan-feature-text">Dukungan penuh melalui semua
                                                channel komunikasi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-faq-section">
                        <h2 class="hnr-faq-title">FAQ</h2>
                        <p class="hnr-faq-subtitle">Frequently Asked Questions (FAQ)</p>

                        <div class="hnr-faq-container" itemscope itemtype="https://schema.org/FAQPage">
                            <!-- FAQ items here dengan proper schema markup -->
                            <!-- Question 1 -->
                            <div class="hnr-faq-item active">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">01</div>
                                    <h3 class="hnr-faq-question">Apa yang dimaksud dengan layanan maintenance Zimbra di
                                        Hanara?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Layanan maintenance Zimbra adalah dukungan teknis tahunan dari tim Hanara untuk
                                        memastikan Zimbra Mail Server Anda tetap berjalan stabil. Layanan ini meliputi
                                        patching, monitoring, preventive check, hingga troubleshooting saat dibutuhkan.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">02</div>
                                    <h3 class="hnr-faq-question">Apakah Hanara hanya melayani maintenance untuk Zimbra yang
                                        mereka instal?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Tidak. Kami juga melayani maintenance untuk Zimbra yang sudah lebih dulu terpasang,
                                        termasuk dari vendor lain, selama sistemnya bisa diakses dan didukung.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">03</div>
                                    <h3 class="hnr-faq-question">Apakah layanan maintenance mencakup perbaikan jika server
                                        Zimbra mengalami error?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Ya. Jika Anda berlangganan paket support, tim kami akan membantu proses investigasi
                                        dan pemulihan sistem, baik melalui remote maupun onsite (tergantung paket yang
                                        dipilih).
                                    </p>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">04</div>
                                    <h3 class="hnr-faq-question">Apa itu remote monitoring?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Remote monitoring adalah proses pemantauan performa dan layanan Zimbra dari jarak
                                        jauh secara berkala. Kami bisa mendeteksi potensi masalah lebih awal, sebelum
                                        berdampak pada operasional.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">05</div>
                                    <h3 class="hnr-faq-question">Apakah saya bisa menyesuaikan jadwal preventive
                                        maintenance?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Bisa. Untuk paket Standard dan Premium, jadwal preventive maintenance bisa
                                        disepakati di awal dan disesuaikan kebutuhan.
                                    </p>
                                </div>
                            </div>
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">06</div>
                                    <h3 class="hnr-faq-question">Berapa lama kontrak layanan maintenance ini berlaku?</h3>
                                    <div class="hnr-faq-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="hnr-faq-body">
                                    <h4 class="hnr-faq-subtitle">Description</h4>
                                    <p class="hnr-faq-answer">
                                        Kontrak berlaku selama 1 tahun sejak tanggal aktivasi. Perpanjangan dapat dilakukan
                                        secara otomatis atau manual sesuai perjanjian.
                                    </p>
                                </div>
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
        </div>
    </section>
@endsection
