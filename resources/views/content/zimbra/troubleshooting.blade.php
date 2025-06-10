@extends('layout.main')

@section('container')
    <!-- Troubleshooting Header Section -->
    <section class="hnr-troubleshoot-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Troubleshooting Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-troubleshoot-logo-container">
                        <img src="{{ asset('assets/images/icon/zimbra troubleshoot.png') }}" alt="Troubleshooting Zimbra"
                            class="hnr-troubleshoot-logo">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-troubleshoot-content">
                        <h1 class="hnr-troubleshoot-title">
                            <span class="hnr-troubleshoot-title-orange">JASA</span> TROUBLESHOOTING ZIMBRA
                        </h1>

                        <p class="hnr-troubleshoot-description">
                            Jasa Troubleshooting Zimbra adalah layanan pemulihan dan perbaikan Zimbra Mail Server untuk Anda
                            yang mengalami kendala teknis, error sistem, atau gangguan layanan email. Layanan ini ditujukan
                            untuk klien yang belum berlangganan support, namun membutuhkan solusi cepat dan tepat dari tim
                            profesional.
                            <br><br>
                            Tim Hanara siap membantu menyelesaikan berbagai jenis permasalahan, seperti error login webmail,
                            layanan Zimbra yang tidak aktif, service tidak jalan, pengaturan DNS yang bermasalah, hingga
                            error pada database atau konfigurasi internal server.
                            <br><br>
                            Dengan pengalaman menangani berbagai kasus Zimbra baik OSE maupun Network Edition kami dapat
                            melakukan troubleshooting secara remote maupun onsite, tergantung tingkat kesulitan dan kondisi
                            sistem. Setiap proses dilakukan secara terukur, terdokumentasi, dan fokus pada pemulihan sistem
                            secara aman tanpa risiko kehilangan data.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Troubleshooting Services Title Section -->
    <section class="hnr-troubleshoot-title-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="hnr-main-title">Troubleshooting <span class="hnr-title-bold">Zimbra</span></h2>
                    <p class="hnr-subtitle">Melayani preventive maintenance untuk zimbra anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Troubleshooting Services Section -->
    <section class="hnr-troubleshoot-services">
        <div class="container">
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting1.png') }}"
                                alt="Email Bisa Mengirim" class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Email Tidak Bisa Mengirim</h3>
                        <p class="hnr-service-text">
                            Mengatasi Zimbra yang gagal mengirim email meskipun bisa menerima. Umumnya disebabkan oleh
                            kesalahan konfigurasi SMTP, DNS records, atau domain yang tidak terverifikasi.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting2.png') }}"
                                alt="Tidak Bisa Terima Email" class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Tidak Bisa Menerima Email</h3>
                        <p class="hnr-service-text">
                            Zimbra bisa mengirim tapi gagal menerima email masuk? Bisa jadi masalah ada pada MX records,
                            domain expired, atau filter email yang salah konfigurasi.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting3.png') }}"
                                alt="Service Not Running" class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Service Zimbra Tidak Berjalan</h3>
                        <p class="hnr-service-text">
                            Menangani kondisi saat service Zimbra (seperti MTA, LDAP, atau Mailbox) tidak aktif. Kami bantu
                            mengidentifikasi dan mengaktifkan service yang bermasalah.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting8.png') }}" alt="Email Delay"
                                class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Pengiriman Email Terlambat</h3>
                        <p class="hnr-service-text">
                            Zimbra bisa mengirim email, tapi butuh waktu lama hingga diterima? Biasanya terkait antrian
                            email, DNS, atau performa server yang tidak optimal.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting4.png') }}" alt="Email Spam"
                                class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title"> Email Ditandai sebagai Spam</h3>
                        <p class="hnr-service-text">
                            Mengatasi email Zimbra yang masuk ke folder spam penerima, meski isinya valid. Kami bantu
                            perbaiki reputasi IP/domain dan konfigurasi email agar tidak dianggap spam.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting5.png') }}" alt="Spam Filter"
                                class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Terlalu Banyak Email Spam Masuk</h3>
                        <p class="hnr-service-text">
                            Mengatasi kondisi inbox dipenuhi spam. Kami bantu mengatur filter spam, RBL, atau integrasi
                            antispam yang lebih efektif.
                        </p>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting6.png') }}" alt="Access Issues"
                                class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Gagal Akses Setelah Uninstall</h3>
                        <p class="hnr-service-text">
                            Zimbra tidak bisa diakses setelah proses uninstall atau update gagal? Kami bantu restore service
                            dan konfigurasi agar server kembali berjalan.
                        </p>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="hnr-service-card">
                        <div class="hnr-service-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting7.png') }}" alt="Other Issues"
                                class="hnr-icon-image">
                        </div>
                        <h3 class="hnr-service-title">Masalah Lainya</h3>
                        <p class="hnr-service-text">
                            Tidak menemukan masalah Anda di daftar ini? Hubungi kami dan tim Hanara akan bantu analisa serta
                            memberikan solusi terbaik untuk kondisi Zimbra Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Advantages Section -->
    <section class="hnr-advantages-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="hnr-advantages-title">Keunggulan <span class="hnr-title-bold">Kami</span></h2>
                    <p class="hnr-advantages-subtitle">Kepuasan pelanggan Anda terjaga mendobrak masalah yang terjadi ketika
                        tim kami cepat mendobrak permasalahan Anda</p>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Advantage 1 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting9.png') }}"
                                alt="Qualified Staff" class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title">Staff Berpengalaman dan Tersertifikasi</h3>
                        <p class="hnr-advantage-text">
                            Tim Hanara memiliki pengalaman luas dalam menangani Zimbra Mail Server dan sistem operasi Linux.
                            Kami terbiasa menyelesaikan berbagai jenis kendala, dari konfigurasi ringan hingga error
                            kompleks.
                        </p>
                    </div>
                </div>

                <!-- Advantage 2 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting10.png') }}"
                                alt="Fast Response" class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title">Respon Cepat dan Terukur</h3>
                        <p class="hnr-advantage-text">
                            Kami memahami bahwa downtime email bisa berdampak besar pada bisnis. Karena itu, kami memberikan
                            respon cepat dan terstruktur sesuai kebutuhan dan tingkat urgensi masalah.
                        </p>
                    </div>
                </div>

                <!-- Advantage 3 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting11.png') }}"
                                alt="Expert Solutions" class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title">Solusi Tuntas, Bukan Tambal Sulam</h3>
                        <p class="hnr-advantage-text">
                            Setiap penanganan tidak hanya difokuskan pada perbaikan sementara, tapi juga pada identifikasi
                            akar masalah dan pencegahan agar tidak terulang kembali.
                        </p>
                    </div>
                </div>

                <!-- Advantage 4 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting12.png') }}"
                                alt="Data Recovery" class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title">Efisiensi Waktu Perbaikan</h3>
                        <p class="hnr-advantage-text">
                            Kami bantu Anda meminimalkan waktu pemulihan sistem. Dengan pengalaman dan pendekatan yang tepat
                            sasaran, masalah Zimbra bisa diselesaikan lebih cepat tanpa banyak trial-error.
                        </p>
                    </div>
                </div>

                <!-- Advantage 5 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting13.png') }}" alt="Reports"
                                class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title">Laporan Troubleshooting</h3>
                        <p class="hnr-advantage-text">
                            Setiap penanganan akan didokumentasikan dalam laporan singkat yang menjelaskan penyebab, solusi,
                            dan langkah-langkah yang telah diambil. Cocok untuk arsip internal IT Anda.
                        </p>
                    </div>
                </div>

                <!-- Advantage 6 -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-advantage-card">
                        <div class="hnr-advantage-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-troubleshooting14.png') }}" alt="Monitoring"
                                class="hnr-advantage-img">
                        </div>
                        <h3 class="hnr-advantage-title"> Monitoring Pasca Perbaikan</h3>
                        <p class="hnr-advantage-text">
                            KKami tetap memantau sistem setelah masalah selesai. Hal ini memastikan sistem Zimbra Anda
                            benar-benar stabil dan tidak ada efek samping dari penanganan yang dilakukan.
                        </p>
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
                                <h3 class="hnr-faq-question">Apakah saya bisa menggunakan layanan troubleshooting jika
                                    Zimbra saya bukan dari Hanara?</h3>
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
                                    Bisa. Kami melayani perbaikan Zimbra dari berbagai sumber pemasangan, baik dari vendor
                                    lain maupun internal Anda sendiri.
                                </p>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="hnr-faq-item">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">02</div>
                                <h3 class="hnr-faq-question">Apakah bisa dilakukan secara remote?</h3>
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
                                    Ya. Banyak kasus troubleshooting Zimbra yang dapat diselesaikan via remote access. Namun
                                    untuk kondisi tertentu, kami juga menyediakan opsi onsite (dengan penyesuaian biaya dan
                                    jadwal).
                                </p>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="hnr-faq-item">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">03</div>
                                <h3 class="hnr-faq-question">Apakah data email saya akan aman saat proses troubleshooting?
                                </h3>
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
                                    Tentu. Kami sangat menjaga integritas data. Setiap tindakan akan dilakukan dengan
                                    hati-hati dan terdokumentasi. Jika dibutuhkan backup, kami akan koordinasikan terlebih
                                    dahulu.
                                </p>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="hnr-faq-item">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">04</div>
                                <h3 class="hnr-faq-question">Berapa lama proses penanganan masalah biasanya?</h3>
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
                                    Waktu penyelesaian tergantung pada jenis masalah dan kondisi sistem. Beberapa kasus bisa
                                    selesai dalam hitungan jam, sementara kasus kompleks mungkin memerlukan penjadwalan
                                    lebih lanjut.
                                </p>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="hnr-faq-item">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">05</div>
                                <h3 class="hnr-faq-question"> Apakah saya akan mendapatkan laporan setelah masalah
                                    ditangani?</h3>
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
                                    Ya. Kami memberikan ringkasan troubleshooting dalam bentuk laporan teknis yang mencakup
                                    penyebab masalah, solusi yang diambil, serta saran pencegahan ke depan.
                                </p>
                            </div>
                        </div>
                        <div class="hnr-faq-item">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">06</div>
                                <h3 class="hnr-faq-question">Bagaimana cara saya memulai proses troubleshooting dengan
                                    Hanara?</h3>
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
                                    Cukup hubungi kami melalui WhatsApp, email, atau formulir kontak di halaman ini. Tim
                                    kami akan segera menghubungi Anda untuk analisa awal dan langkah selanjutnya.
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
    </section>
@endsection
