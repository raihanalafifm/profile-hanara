@extends('layout.main')

@section('container')
    <section class="hnr-zimbra-section">
        <div class="container">
            {{-- <!-- Breadcrumb untuk navigasi dan SEO -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Zimbra</li>
        <li class="breadcrumb-item active" aria-current="page">Instalasi</li>
      </ol>
    </nav> --}}

            <div class="row align-items-center">
                <!-- Zimbra Logo -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-zimbra-logo-container">
                        <img src="{{ asset('assets/images/icon/zimbra instalasi.png') }}"
                            alt="Instalasi Zimbra Mail Server - PT Hanara Prima Solusindo" class="hnr-zimbra-logo"
                            loading="lazy" width="400" height="400">
                    </div>
                </div>

                <!-- Zimbra Description -->
                <div class="col-lg-7">
                    <div class="hnr-zimbra-content">
                        <h1 class="hnr-zimbra-title">LAYANAN INSTALASI</h1>
                        <h2 class="hnr-zimbra-subtitle">ZIMBRA MAIL SERVER</h2>

                        <p class="hnr-zimbra-description">
                            <strong>Zimbra Mail Server</strong> adalah platform email server yang powerful dan telah banyak
                            digunakan oleh instansi pemerintah, perbankan, serta berbagai perusahaan di berbagai
                            sektor dan bidang bisnis. Zimbra tidak hanya sekadar platform untuk mengirim dan
                            menerima email, tetapi juga menyediakan berbagai fitur produktivitas, seperti:
                        </p>

                        <div class="hnr-zimbra-features">
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Kalender:</strong> Mempermudah penjadwalan
                                rapat dan pengingat tanggal waktu.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Task:</strong> Mengelola dan membantu
                                pekerjaan dengan lebih terstruktur.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Briefcase:</strong> Menyimpan dan berbagi
                                file pekerjaan secara aman.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Folder Sharing:</strong> Berkolaborasi
                                dengan tim melalui folder bersama.
                            </div>
                        </div>

                        <p class="hnr-zimbra-conclusion">
                            Dengan fitur-fitur tersebut, Zimbra tidak hanya memudahkan pekerjaan end-user, tetapi
                            juga memberikan kemudahan pengelolaan bagi administrator IT, sehingga
                            meningkatkan efisiensi dan produktivitas organisasi.
                        </p>

                        {{-- <!-- CTA Button -->
          <div class="mt-4">
            <a href="{{ route('contact-us') }}" class="btn btn-primary btn-lg">
              Konsultasi Gratis <i class="bi bi-arrow-right"></i>
            </a>
            <a href="https://wa.me/62897500805" class="btn btn-success btn-lg ms-2" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-whatsapp"></i> WhatsApp Kami
            </a>
          </div> --}}
                    </div>
                </div>
            </div>

            <!-- Interface Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-zimbra-interface-section">
                        <h2 class="hnr-interface-title"><span class="hnr-text-orange">Tampilan</span> Zimbra Mail</h2>
                        <p class="hnr-interface-description">
                            Berikut merupakan tampilan dari Zimbra Mail, layanan email dengan tampilan yang bersih dan
                            mudah digunakan untuk menunjang aktivitas profesional anda.
                        </p>

                        <div class="hnr-interface-image-container">
                            <img src="{{ asset('assets/images/icon/interface zimbra.png') }}"
                                alt="Tampilan Interface Zimbra Mail - Dashboard Email Professional"
                                class="hnr-interface-image" loading="lazy" width="1200" height="700">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section dengan semantic HTML -->
            <article class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-zimbra-features-section">
                        <header>
                            <h2 class="hnr-features-title"><span class="hnr-text-orange">Fitur</span> Unggulan Zimbra</h2>
                            <p class="hnr-features-description">
                                Fitur unggulan Zimbra yang membantu meningkatkan produktivitas dan efisiensi kerja Anda.
                            </p>
                        </header>

                        <div class="row mt-4">
                            @php
                                $features = [
                                    [
                                        'icon' => 'icon-fitur-1.png',
                                        'title' => 'Open Source',
                                        'description' =>
                                            'Zimbra sangat cocok untuk digunakan sebagai email on-premise karena anda dapat mengembangkan platform ini sesuai kebutuhan.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-2.png',
                                        'title' => 'Operating System Linux',
                                        'description' =>
                                            'Zimbra adalah platform email yang stabil dan aman karena berjalan diatas sistem operasi Linux, khususnya CentOS dan Ubuntu.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-3.png',
                                        'title' => 'Class of Service',
                                        'description' =>
                                            'Mengelola fasilitas untuk user dan mengelompokan user menjadi sangat mudah dengan fitur Class of Services di Admin Console Zimbra.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-4.png',
                                        'title' => 'Admin Console',
                                        'description' =>
                                            'Anda tidak perlu menguasai dan memahami command, karena Zimbra sudah menyediakan Administration Console berbasis web.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-5.png',
                                        'title' => 'Mobile Device Management',
                                        'description' =>
                                            'Fitur yang dapat mengamankan data data Anda melalui webmail ketika Anda kehilangan device smartphone.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-6.png',
                                        'title' => 'CBPOLICYCD',
                                        'description' =>
                                            'Mengatur berbagai macam policy users untuk kirim dan terima email menggunakan CBPolicyD berbasis web.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-7.png',
                                        'title' => 'Active Sync',
                                        'description' =>
                                            'Sinkronisasikan account email Anda dengan smartphone menggunakan Active Sync. Sinkronisasi data data email, kontak, task, dan kalender.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-8.png',
                                        'title' => 'Fitur Zimlet',
                                        'description' =>
                                            'Lengkapi kebutuhan pekerjaan anda dengan tools yang disediakan Zimlet untuk webmail Zimbra.',
                                    ],
                                ];
                            @endphp

                            @foreach ($features as $feature)
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="hnr-feature-card" itemscope itemtype="https://schema.org/Product">
                                        <div class="hnr-feature-icon">
                                            <img src="{{ asset('assets/images/icon/' . $feature['icon']) }}"
                                                alt="{{ $feature['title'] }} - Fitur Zimbra" loading="lazy" width="10"
                                                height="10">
                                        </div>
                                        <h3 class="hnr-feature-card-title" itemprop="name">{{ $feature['title'] }}</h3>
                                        <p class="hnr-feature-card-text" itemprop="description">
                                            {{ $feature['description'] }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </article>

            <!-- Comparison Section -->
            <section class="row mt-5">
                <div class="col-12">
                    <div class="hnr-comparison-section">
                        <h2 class="hnr-comparison-title"><span class="hnr-text-orange">Zimbra</span> Mail Server vs Email
                            Hosting</h2>
                        <p class="hnr-comparison-description">
                            Zimbra menawarkan fitur unggulan yang lebih fleksibel dan profesional dibandingkan email hosting
                            biasa.
                            Berikut perbandingan detailnya:
                        </p>

                        <div class="hnr-comparison-table">
                            <div class="hnr-comparison-header">
                                <div class="hnr-header-zimbra">Zimbra</div>
                                <div class="hnr-header-hosting">Email Hosting</div>
                            </div>

                            <div class="hnr-comparison-content">
                                @php
                                    $comparisons = [
                                        [
                                            'zimbra' => 'IP Public terpisah dari website',
                                            'hosting' => 'IP Public sharing dengan website',
                                        ],
                                        [
                                            'zimbra' => 'Tampilan menarik, tersedia banyak tema',
                                            'hosting' => 'Tampilan kaku, pilihan tema sedikit',
                                        ],
                                        [
                                            'zimbra' => 'Webmail dilengkapi banyak fitur',
                                            'hosting' => 'Webmail hanya untuk send and received email',
                                        ],
                                        [
                                            'zimbra' => 'Quota user bisa dicustom',
                                            'hosting' => 'Quota user hanya 2 opsi',
                                        ],
                                        [
                                            'zimbra' => 'Bisa mengelompokan user (Class of Services)',
                                            'hosting' => 'Tidak bisa mengelompokan user',
                                        ],
                                        [
                                            'zimbra' => 'Bisa trace email melalui log',
                                            'hosting' => 'Tidak bisa trace email',
                                        ],
                                    ];
                                @endphp

                                @foreach ($comparisons as $comparison)
                                    <div class="hnr-comparison-row">
                                        <div class="hnr-zimbra-feature">
                                            <span class="hnr-check-icon">✓</span>
                                            {{ $comparison['zimbra'] }}
                                        </div>
                                        <div class="hnr-hosting-feature">
                                            <span class="hnr-cross-icon">✗</span>
                                            {{ $comparison['hosting'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Email Protocol Section -->
            <section class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-protocol-section">
                        <h2 class="hnr-protocol-title"><span class="hnr-text-orange">Email</span> Protocol</h2>
                        <p class="hnr-protocol-description">
                            Email Protocol Yang Berada Di Zimbra
                        </p>

                        <div class="row mt-4">
                            @php
                                $protocols = [
                                    [
                                        'number' => '01',
                                        'title' => 'SMTP (Simple Mail Transport Protocol)',
                                        'desc' => 'Digunakan untuk mengirim email antar server.',
                                    ],
                                    [
                                        'number' => '02',
                                        'title' => 'SSMTP (Secure Simple Mail Transport Protocol)',
                                        'desc' => 'Versi aman dari SMTP dengan enkripsi SSL/TLS.',
                                    ],
                                    [
                                        'number' => '03',
                                        'title' => 'POP3 (Post Office Protocol)',
                                        'desc' => 'Mengambil email dari server ke klien dan menghapusnya dari server.',
                                    ],
                                    [
                                        'number' => '04',
                                        'title' => 'POP3S (Secure Post Office Protocol)',
                                        'desc' => 'POP3 dengan koneksi yang dienkripsi menggunakan SSL/TLS.',
                                    ],
                                    [
                                        'number' => '05',
                                        'title' => 'IMAP (Internet Mail Application Protocol)',
                                        'desc' => 'Mengelola email langsung di server tanpa menghapus salinan.',
                                    ],
                                    [
                                        'number' => '06',
                                        'title' => 'IMAPS (Secure Internet Mail Application Protocol)',
                                        'desc' => 'IMAP yang dilengkapi dengan koneksi aman melalui SSL/TLS.',
                                    ],
                                ];
                            @endphp

                            @foreach ($protocols as $protocol)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="hnr-protocol-card">
                                        <div class="hnr-protocol-number-container">
                                            <div class="hnr-protocol-number">{{ $protocol['number'] }}</div>
                                        </div>
                                        <div class="hnr-protocol-content">
                                            <h3 class="hnr-protocol-card-title">{{ $protocol['title'] }}</h3>
                                            <p class="hnr-protocol-card-text">{{ $protocol['desc'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section dengan Schema Markup -->
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
                                    <h3 class="hnr-faq-question">Apa itu Zimbra Mail Server?</h3>
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
                                        Zimbra Mail Server adalah platform email server yang powerful dan fleksibel. Zimbra
                                        tidak hanya
                                        menyediakan layanan pengiriman dan penerimaan email, tetapi juga berbagai fitur
                                        produktivitas seperti
                                        kalender, task management, folder sharing, dan penyimpanan file (briefcase). Zimbra
                                        cocok digunakan
                                        untuk kebutuhan email server perusahaan dan instansi.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">02</div>
                                    <h3 class="hnr-faq-question">Berapa lama proses instalasi Zimbra Mail Server?</h3>
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
                                        Proses instalasi Zimbra Mail Server biasanya memakan waktu sekitar 1-2 hari kerja,
                                        tergantung pada
                                        kompleksitas infrastruktur dan kebutuhan spesifik. Ini termasuk setup awal,
                                        konfigurasi dasar,
                                        dan pengujian dasar. Untuk migrasi data dari sistem email lama atau konfigurasi
                                        lanjutan mungkin
                                        memerlukan waktu tambahan.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 3 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">03</div>
                                    <h3 class="hnr-faq-question">Mengapa Zimbra cocok untuk bisnis?</h3>
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
                                        Zimbra cocok untuk bisnis karena menawarkan solusi email yang komprehensif dengan
                                        kontrol penuh atas
                                        data. Fitur kolaborasi seperti kalender bersama, kontak, dan pengelolaan tugas
                                        meningkatkan produktivitas
                                        tim. Sistem keamanan yang kuat melindungi komunikasi bisnis penting. Zimbra juga
                                        menawarkan fleksibilitas
                                        dalam pengelolaan pengguna dan penyimpanan, serta opsi hosting on-premise yang
                                        memberi bisnis kendali
                                        penuh atas infrastruktur email mereka.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 4 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">04</div>
                                    <h3 class="hnr-faq-question">Apakah Zimbra mendukung akses dari perangkat mobile?</h3>
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
                                        Ya, Zimbra sepenuhnya mendukung akses dari perangkat mobile melalui protokol
                                        ActiveSync. Pengguna dapat
                                        dengan mudah mengakses email, kalender, kontak, dan fitur Zimbra lainnya melalui
                                        smartphone atau tablet.
                                        Zimbra juga menyediakan aplikasi mobile resmi untuk Android dan iOS, yang memberikan
                                        pengalaman yang
                                        optimal saat mengakses akun Zimbra dari perangkat mobile.
                                    </p>
                                </div>
                            </div>

                            <!-- Question 5 -->
                            <div class="hnr-faq-item">
                                <div class="hnr-faq-header">
                                    <div class="hnr-faq-number">05</div>
                                    <h3 class="hnr-faq-question">Bagaimana dengan keamanan Zimbra Mail Server?</h3>
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
                                        Zimbra menawarkan berbagai fitur keamanan yang komprehensif, termasuk enkripsi
                                        SSL/TLS untuk komunikasi
                                        email, otentikasi multi-faktor, anti-virus dan anti-spam terintegrasi, serta kontrol
                                        akses berbasis peran.
                                        Keamanan Zimbra juga mendukung kebijakan password yang kuat dan dapat dikonfigurasi
                                        untuk memenuhi standar
                                        kepatuhan industri. Dengan hosting on-premise, perusahaan memiliki kontrol penuh
                                        atas data email mereka,
                                        meningkatkan privasi dan keamanan.
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

@push('scripts')
    <!-- Additional scripts if needed -->
@endpush
