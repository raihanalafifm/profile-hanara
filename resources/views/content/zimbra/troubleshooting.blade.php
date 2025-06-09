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
                            Jasa Pemecahan Masalah dan Perbaikan Zimbra Mail Server: Layanan troubleshooter yang tinggi
                            untuk Zimbra Mail Server, sebagai solusi atas segala jenis email server mengalami gangguan.
                            Meliputi kemampuan penyelesaian kode komputer bahasa instalasi, bahasa setting, bahasa script,
                            bahasa database, bahasa aplikasi dan think lebih mengarah pada masalanya email, error pada
                            service tersebut, hingga masalah platform sistem. Dengan tim ahli yang berpengalaman dan
                            memiliki teknik yang handalan melakukan troubleshooting dengan terukur, cepat memperbaiki setiap
                            kasus kendala koneksi email pengguna layanan.
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
                        <h3 class="hnr-service-title">Email Bisa Mengirim Email</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra menerima email namun tidak bisa mengirim email. Bisa karena domain
                            email tidak ter-konfirmasi atau masalah DNS records yang tidak konfigurasi dengan benar.
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
                        <h3 class="hnr-service-title">Tidak Bisa Terima Email</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra mampu mengirim email namun tidak bisa terima email, bisa jadi masalah
                            konfigurasi MX records tidak lengkap atau masalah domain.
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
                        <h3 class="hnr-service-title">Service Zimbra Not Running</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra dengan service tersebut tidak aktif, bisa karena Zimbra tidak running,
                            perbaiki service yang tidak running.
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
                        <h3 class="hnr-service-title">Pengiriman Email Outgoing Delay</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra dengan kondisi pengiriman email sangat lama untuk sampai ke tujuan
                            meski sudah running.
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
                        <h3 class="hnr-service-title">Email Kena Dikenali Spam</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra pada email yang dikirim dikenali Spam oleh sisi penerima, padahal email
                            bukan termasuk kategori spam.
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
                        <h3 class="hnr-service-title">Banyak Terima Email Spam</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra dengan kondisi terlalu banyak email spam yang masuk, solusi
                            menghilangkan spam dan mengkonfigurasi email Anda.
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
                        <h3 class="hnr-service-title">Uninstall Tidak Bisa Diakses</h3>
                        <p class="hnr-service-text">
                            Mengatasi masalah Zimbra kondisi webmail tidak bisa di akses saat server aktif, kembal operasi.
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
                            Konsultasikan masalah lainnya yang tidak dalam daftar, beri tahu kami masalah dan kami yang
                            memberikan masalah.
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
                        <h3 class="hnr-advantage-title">Staff yang Qualified dan Berpengalaman</h3>
                        <p class="hnr-advantage-text">
                            Anda tidak perlu ragu dengan kemampuan, kualifikasi dalam mengani sistem operasi Linux dan
                            Zimbra Mail Server, kami sudah terbiasa dan memiliki pengalaman troubleshooting Email
                            Server/Linux/Zimbra Mail Server.
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
                        <h3 class="hnr-advantage-title">Respon yang Cepat</h3>
                        <p class="hnr-advantage-text">
                            Kami menyadari bahwa SLA untuk email server merupakan hal yang sangat penting email server down
                            permasalahan tidak boleh dibiarkan, kami sering sekali memberikan pertolongan dan menyelesaikan
                            pengajaran dan kualitas yang menakjubkan.
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
                        <h3 class="hnr-advantage-title">Penyelesaian yang Cepat</h3>
                        <p class="hnr-advantage-text">
                            Kami Kami, siapkan bantuan cepat untuk permasalahan email Zimbra melalui group online, bahkan
                            respon solusi cepat, tindakan terbaik fix semua masalah dan selalu menyebarluaskan masalah.
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
                        <h3 class="hnr-advantage-title">Rehabilitasi Waktu</h3>
                        <p class="hnr-advantage-text">
                            Kami tidak hanya sekadar memperbaiki, tetapi akan memastikan bahwa Zimbra Anda berfungsi dengan
                            benar, solusi hangout kemi pasti tepat yang sudah terbukti dengan layanan kami. Anda yang
                            mengingat jam kerja kami.
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
                            Melaporkan hal yang sudah selesai bekubu dokumen yang sudah diaggap selesai kami, selling kami
                            kami memberikan dokumentasi email server, kami juga mengajurkan pengalaman dan solusi yang sudah
                            dilakukan.
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
                        <h3 class="hnr-advantage-title">Monitoring</h3>
                        <p class="hnr-advantage-text">
                            Kami berharap di masalah selesai, setelah Zimbra Anda kembali normal, kami tetap dan terus
                            pantau dengan barang kami melaukan monitoring by jangka waktu tertentu dan tetap memantau apakah
                            setiap data tetap aman berjak baik untuk future layanan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="hnr-contact-section">
            <div class="container">
                @include('components.contact')
            </div>
        </section>
    </section>
@endsection
