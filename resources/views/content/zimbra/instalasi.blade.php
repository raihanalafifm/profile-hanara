@extends('layout.main')

@section('container')
    <section class="hnr-zimbra-section">
        <div class="container">
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
                            <strong>Zimbra Mail Server</strong> adalah platform email server yang powerful dan telah
                            digunakan
                            oleh berbagai instansi pemerintahan, lembaga pendidikan, perbankan, hingga perusahaan swasta.
                            Untuk memastikan sistem email berjalan optimal sejak awal, Hanara menyediakan layanan instalasi
                            Zimbra secara profesional — baik untuk versi Open Source Edition (OSE) maupun Network Edition
                            (NE).
                        </p>
                        <p>
                            Kami membantu Anda dalam proses setup lengkap, mulai dari instalasi sistem, konfigurasi DNS,
                            integrasi domain, hingga aktivasi akun dan pengujian fungsionalitas. Dengan pengalaman lebih
                            dari 10 tahun, kami pastikan server Zimbra Anda siap digunakan dengan stabil, aman, dan sesuai
                            kebutuhan bisnis.
                        </p>
                        <p>Zimbra bukan sekadar platform email, tapi juga menyediakan fitur-fitur kolaborasi yang mendukung
                            produktivitas, seperti:
                        </p>

                        <div class="hnr-zimbra-features">
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Kalender:</strong> Menjadwalkan rapat dan
                                pengingat acara penting.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Task:</strong> Mengelola pekerjaan dan
                                to-do list tim dengan efisien.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Briefcase:</strong> Menyimpan dan berbagi
                                dokumen penting secara aman.
                            </div>
                            <div class="hnr-zimbra-feature-item">
                                <span class="hnr-feature-bullet">•</span> <strong>Folder Sharing:</strong> Kolaborasi file
                                antar pengguna dalam satu organisasi.
                            </div>
                        </div>

                        <p class="hnr-zimbra-conclusion">
                            Dengan fitur-fitur tersebut, Zimbra tidak hanya memudahkan pekerjaan end-user, tetapi
                            juga memberikan kemudahan pengelolaan bagi administrator IT, sehingga
                            meningkatkan efisiensi dan produktivitas organisasi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Interface Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-zimbra-interface-section">
                        <h2 class="hnr-interface-title"><span class="hnr-text-orange">Tampilan</span> Zimbra Mail</h2>
                        <p class="hnr-interface-description">
                            Zimbra Mail hadir dengan tampilan yang modern dan mudah dipahami, dirancang untuk mendukung
                            aktivitas profesional secara efisien.
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
                                            'Zimbra sangat cocok digunakan sebagai email on-premise karena platform ini bisa dikembangkan dan disesuaikan dengan kebutuhan organisasi Anda.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-2.png',
                                        'title' => 'Operating System Linux',
                                        'description' =>
                                            'Zimbra berjalan di atas sistem operasi Linux yang stabil dan aman, seperti CentOS dan Ubuntu.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-3.png',
                                        'title' => 'Class of Service',
                                        'description' =>
                                            'Kelola fitur dan kuota pengguna dengan mudah melalui fitur Class of Service pada Zimbra Admin Console.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-4.png',
                                        'title' => 'Admin Console',
                                        'description' =>
                                            'Tidak perlu paham command line — cukup gunakan Zimbra Admin Console berbasis web untuk mengelola seluruh sistem email Anda.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-5.png',
                                        'title' => 'Mobile Device Management',
                                        'description' =>
                                            'Amankan data email Anda saat perangkat hilang dengan fitur penghapusan jarak jauh melalui webmail.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-6.png',
                                        'title' => 'CBPolicyD',
                                        'description' =>
                                            'Atur kebijakan pengiriman dan penerimaan email secara fleksibel dengan dukungan CBPolicyD berbasis web.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-7.png',
                                        'title' => 'Active Sync',
                                        'description' =>
                                            'Sinkronisasi email, kalender, dan kontak ke perangkat mobile atau desktop secara real-time menggunakan ActiveSync.',
                                    ],
                                    [
                                        'icon' => 'icon-fitur-8.png',
                                        'title' => 'Fitur Zimlet',
                                        'description' =>
                                            'Tambahkan fungsionalitas ke Zimbra dengan Zimlet — plugin yang membantu mendukung pekerjaan harian Anda langsung dari webmail.',
                                    ],
                                ];
                            @endphp

                            @foreach ($features as $feature)
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <!-- HAPUS itemscope dan itemtype Product -->
                                    <div class="hnr-feature-card">
                                        <div class="hnr-feature-icon">
                                            <img src="{{ asset('assets/images/icon/' . $feature['icon']) }}"
                                                alt="{{ $feature['title'] }} - Fitur Zimbra" loading="lazy" width="10"
                                                height="10">
                                        </div>
                                        <!-- HAPUS itemprop attributes -->
                                        <h3 class="hnr-feature-card-title">{{ $feature['title'] }}</h3>
                                        <p class="hnr-feature-card-text">
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
                                            'hosting' => 'IP Public digabung dengan website',
                                        ],
                                        [
                                            'zimbra' => 'Tampilan menarik, tersedia banyak tema',
                                            'hosting' => 'Tampilan kaku, pilihan tema terbatas',
                                        ],
                                        [
                                            'zimbra' => 'Webmail lengkap dengan banyak fitur kolaborasi',
                                            'hosting' => 'Webmail hanya untuk kirim dan terima email',
                                        ],
                                        [
                                            'zimbra' => 'Kuota user bisa disesuaikan (custom)',
                                            'hosting' => 'kuota user sangat terbatas (biasanya hanya 2 opsi)',
                                        ],
                                        [
                                            'zimbra' => 'Bisa mengelompokkan user (Class of Service)',
                                            'hosting' => 'Tidak bisa mengelompokkan user',
                                        ],
                                        [
                                            'zimbra' => ' Bisa trace/lacak email melalui log',
                                            'hosting' => 'Tidak tersedia fitur pelacakan email',
                                        ],
                                    ];
                                @endphp

                                @foreach ($comparisons as $comparison)
                                    <div class="hnr-comparison-row">
                                        <div class="hnr-zimbra-feature">
                                            <span class="hnr-check-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <circle cx="10" cy="10" r="10" fill="#00c853" />
                                                    <path d="M6 10l2.5 2.5L14 7" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            {{ $comparison['zimbra'] }}
                                        </div>
                                        <div class="hnr-hosting-feature">
                                            <span class="hnr-cross-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <circle cx="10" cy="10" r="10" fill="#ff4d4d" />
                                                    <path d="M6 6l8 8M14 6l-8 8" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </span>
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
                            Di bawah ini adalah protokol email yang digunakan oleh Zimbra untuk mendukung pengiriman dan
                            pengambilan email secara aman dan stabil. Protokol-protokol ini memungkinkan Anda mengakses
                            email dari berbagai perangkat dengan perlindungan enkripsi.
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
                                        'desc' => 'Versi aman dari SMTP yang menggunakan enkripsi SSL/TLS.',
                                    ],
                                    [
                                        'number' => '03',
                                        'title' => 'POP3 (Post Office Protocol)',
                                        'desc' =>
                                            'Mengambil email dari server ke perangkat, lalu menghapusnya dari server.',
                                    ],
                                    [
                                        'number' => '04',
                                        'title' => 'POP3S (Secure Post Office Protocol)',
                                        'desc' => 'POP3 dengan koneksi yang dienkripsi menggunakan SSL/TLS.',
                                    ],
                                    [
                                        'number' => '05',
                                        'title' => 'IMAP (Internet Mail Application Protocol)',
                                        'desc' =>
                                            'Mengelola email langsung di server tanpa menghapus salinan, cocok untuk akses dari banyak perangkat.',
                                    ],
                                    [
                                        'number' => '06',
                                        'title' => 'IMAPS (Secure Internet Mail Application Protocol)',
                                        'desc' => 'IMAP dengan koneksi terenkripsi SSL/TLS untuk keamanan tambahan.',
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

            <!-- FAQ Section tanpa schema attributes di HTML -->
            <section class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-faq-section">
                        <h2 class="hnr-faq-title">FAQ</h2>
                        <p class="hnr-faq-subtitle">Frequently Asked Questions (FAQ)</p>

                        <!-- FAQ Container tanpa itemscope itemtype -->
                        <div class="hnr-faq-container">
                            @foreach ($faqData as $index => $faq)
                                <!-- FAQ Item {{ $index + 1 }} -->
                                <div class="hnr-faq-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="hnr-faq-header">
                                        <div class="hnr-faq-number">{{ sprintf('%02d', $index + 1) }}</div>
                                        <h3 class="hnr-faq-question">{{ $faq['question'] }}</h3>
                                        <div class="hnr-faq-toggle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline
                                                    points="{{ $index === 0 ? '18 15 12 9 6 15' : '6 9 12 15 18 9' }}">
                                                </polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="hnr-faq-body">
                                        <h4 class="hnr-faq-subtitle">Description</h4>
                                        <p class="hnr-faq-answer">{!! nl2br(e($faq['answer'])) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="hnr-contact-section">
                <div class="container">
                    @include('components.contact')
                </div>
            </section>
        </div>
    </section>
@endsection



<!-- Include FAQ Schema sebagai JSON-LD -->
@push('schema-org')
    @include('components.faq-schema', ['faqItems' => $faqData])
@endpush

@push('scripts')
    <!-- Additional scripts if needed -->
@endpush
