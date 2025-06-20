@extends('layout.main')
@push('schema-org')
    @if (isset($schemaDigitalMarketing))
        <script type="application/ld+json">
        {!! json_encode($schemaDigitalMarketing, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    @endif
@endpush
@section('container')
    <section class="sosmed-hero">
        <!-- Orange Decorative Circles -->
        <div class="sosmed-shape-left"></div>
        <div class="sosmed-shape-left-secondary"></div>
        <div class="sosmed-shape-right"></div>

        <div class="container-fluid sosmed-content-wrapper">
            <div class="row align-items-center">
                <!-- Left Illustration -->
                <div class="col-lg-5 col-md-6 col-12 order-2 order-lg-1">
                    <div class="sosmed-illustration">
                        <img src="{{ asset('assets/images/sosmed/hero.svg') }}" alt="Digital Marketing Illustration">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-7 col-md-6 col-12 order-1 order-lg-2">
                    <h1 class="sosmed-title">Digital Marketing</h1>
                    <h2 class="sosmed-subtitle">Terpadu untuk Bisnis Anda</h2>
                    <p class="sosmed-description">
                        Dari manajemen sosial media hingga kampanye iklan yang efektif, Hanara hadir membantu bisnis Anda
                        tumbuh secara digital—dengan konten profesional, strategi cerdas, dan dukungan talent kreatif.
                    </p>
                    <a href="#" class="sosmed-cta-btn">Konsultasi Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sosmed-services">
        <div class="container">
            <!-- Section Header -->
            <div class="sosmed-services-header">
                <h2 class="sosmed-services-title">
                    <span class="text-orange">Lebih dari</span> Sekedar <br>
                    Upload Konten
                </h2>
                <p class="sosmed-services-description">
                    Hanara bukan hanya agensi sosial media biasa. Kami hadir sebagai partner Anda dalam mengelola<br>
                    brand di era digital. Mulai dari konten visual profesional, iklan berbayar, laporan performa rutin,<br>
                    hingga produksi video dan konten TikTok, semua dirancang untuk hasil yang terukur.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="sosmed-services-grid">
                <!-- Row 1 -->
                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/manajemen sosmed.svg') }}" alt="Social Media Management">
                    </div>
                    <h3 class="sosmed-service-title">Manajemen Facebook, Instagram dan LinkedIn</h3>
                    <p class="sosmed-service-desc">Kelola dan optimalkan kehadiran brand Anda di platform media sosial
                        terkemuka
                    </p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/copywriting.svg') }}" alt="Copywriting & Design">
                    </div>
                    <h3 class="sosmed-service-title">Copywriting & Desain Visual yang Menarik</h3>
                    <p class="sosmed-service-desc">Ciptakan pesan dan visual yang memikat audiens Anda</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/iklan.svg') }}" alt="Paid Advertising">
                    </div>
                    <h3 class="sosmed-service-title">Iklan Berbayar (Facebook Ads & Google Ads)</h3>
                    <p class="sosmed-service-desc">Kampanye iklan yang efektif untuk jangkauan dan konversi maksimal</p>
                </div>

                <!-- Row 2 -->
                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/optimasi.svg') }}" alt="Google My Business">
                    </div>
                    <h3 class="sosmed-service-title">Optimisasi Google My Business</h3>
                    <p class="sosmed-service-desc">Pastikan bisnis Anda mudah ditemukan di pencarian lokal Google</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/produksi.svg') }}" alt="Video Production">
                    </div>
                    <h3 class="sosmed-service-title">Produksi Video dan Konten Tiktok/Reels</h3>
                    <p class="sosmed-service-desc">Ciptakan konten video pendek yang menarik dan viral.</p>
                </div>

                <div class="sosmed-service-item">
                    <div class="sosmed-service-icon">
                        <img src="{{ asset('assets/images/sosmed/talent.svg') }}" alt="Content Creator">
                    </div>
                    <h3 class="sosmed-service-title">Talent Content Creator Hanara</h3>
                    <p class="sosmed-service-desc">Dapatkan dukungan dari talent profesional untuk kebutuhan konten visual
                        Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sosmed-why-different">
        <div class="container">
            <!-- Section Header -->
            <div class="sosmed-why-different-header">
                <h2 class="sosmed-why-different-title">
                    <span class="text-orange">Kenapa</span> Digital Marketing dari<br>
                    Hanara <span class="text-orange">Berbeda?</span>
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="sosmed-features-grid">
                <!-- Row 1 -->
                <div class="sosmed-features-row sosmed-features-row-3"
                    style="display: flex; justify-content: center; gap: 32px; margin-bottom: 32px;">
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/tim desain.svg') }}" alt="In-House Team">
                        </div>
                        <h3 class="sosmed-feature-title">Didukung Tim Desain &<br>Copywriter In-House</h3>
                        <p class="sosmed-feature-desc">Kualitas terjaga dengan tim profesional internal.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/laporan.svg') }}" alt="Reports">
                        </div>
                        <h3 class="sosmed-feature-title">Laporan Rutin &<br>Analisa Performa</h3>
                        <p class="sosmed-feature-desc">Lihat hasil nyata dan progres kampanye Anda.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/talent 2.svg') }}" alt="Internal Talent">
                        </div>
                        <h3 class="sosmed-feature-title">Talent & Produksi Konten<br>Internal (Bukan Freelance)</h3>
                        <p class="sosmed-feature-desc">Kami garansi konsistensi dan kualitas tinggi.</p>
                    </div>
                </div>
                <div class="sosmed-features-row sosmed-features-row-2"
                    style="display: flex; justify-content: center; gap: 32px;">
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/ads.svg') }}" alt="Transparent">
                        </div>
                        <h3 class="sosmed-feature-title">Kontrol Iklan &<br>Anggaran Iklan Transparan</h3>
                        <p class="sosmed-feature-desc">Anda memiliki kendali penuh atas investasi iklan Anda.</p>
                    </div>
                    <div class="sosmed-feature-card">
                        <div class="sosmed-feature-icon">
                            <img src="{{ asset('assets/images/sosmed/umkm.svg') }}" alt="Suitable">
                        </div>
                        <h3 class="sosmed-feature-title">Cocok untuk UMKM, Startup,<br>hingga Korporasi</h3>
                        <p class="sosmed-feature-desc">Solusi digital marketing yang skalabel untuk semua ukuran bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trusted-clients-section">
        <div class="container reveal-section">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="trusted-clients-heading">
                        <span class="trusted-clients-tag">• Our Client •</span>
                        <h2 class="trusted-clients-title">Dipercaya oleh Berbagai Klien dari Beragam Industri</h2>
                        <p class="trusted-clients-subtitle">
                            Beberapa perusahaan dan organisasi ternama di Indonesia telah mempercayakan solusi IT mereka
                            kepada Hanara. Kami terus berkomitmen memberikan layanan terbaik sesuai kebutuhan klien.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row trusted-clients-logos">
                <!-- Row 1 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/cde-coal.png') }}" alt="CDE Coal">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/ces-coal.png') }}" alt="CES Coal">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mpp.png') }}" alt="MPP">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/yacoonn.png') }}" alt="Yacoon">
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/chm.png') }}" alt="CHM">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/spn-logo.png') }}" alt="Sindo Prima Niaga">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/ef bengkulu.png') }}" alt="Branch Kota Bengkulu">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mitra plus.png') }}" alt="Mitra Plus">
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/msk.png') }}" alt="MSK">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/tek.png') }}" alt="TEK">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/sac.png') }}" alt="Asia Capital">
                    </div>
                </div>
                <div class="col-6 col-md-3 trusted-client-logo-wrap">
                    <div class="trusted-client-logo">
                        <img src="{{ asset('assets/images/icon/mavix.png') }}" alt="Mavix">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Digital Marketing Packages Section -->
    <section class="sosmed-pricing-section">
        <div class="container">
            <!-- Pricing Header -->
            <div class="row mt-5 mb-1 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-house-web-pricing-title">
                        <span class="hnr-house-web-title-orange">Paket </span> Digital Marketing
                    </h2>
                    <p class="hnr-house-web-pricing-subtitle">
                        Solusi Pemasaran Digital Terbaik untuk Bisnis Anda<br>
                        Tingkatkan visibilitas online dan jangkauan customer dengan strategi digital marketing yang tepat
                        sasaran.
                    </p>
                </div>
            </div>

            <div class="row mb-5 reveal-section">
                <div class="sosmed-pricing-disclaimer">
                    Harga belum termasuk PPN. Setiap strategi digital marketing disesuaikan dengan target market dan
                    kebutuhan bisnis Anda.
                </div>

                <!-- Package 1: Digital Marketing Starter -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud2.png') }}"
                                        alt="Digital Marketing Starter">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Starter</h3>
                                <p class="hnr-house-web-pricing-subtext">1 Platform (Instagram/Facebook)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 4.950.000</div>
                            <p class="sosmed-pricing-description">
                                Cocok untuk bisnis yang baru memulai
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>8 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Ads</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Talents</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Video</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Laporan Bulanan (Basic)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WhatsApp</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 2: Digital Marketing Growth -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud3.png') }}"
                                        alt="Digital Marketing Growth">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Growth</h3>
                                <p class="hnr-house-web-pricing-subtext">2 Platform (IG/Facebook + LinkedIn)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 8.950.000</div>
                            <p class="sosmed-pricing-description">
                                Untuk bisnis yang ingin berkembang
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>12 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Facebook Ads (500K Ads Budget)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Setup & Optimasi Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Talents</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-cross-icon"></span>
                                <span>Video</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Laporan Bulanan (Detail + Insight)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WA & Email</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 3: Digital Marketing Pro (Best Seller) -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card popular">
                        <div class="hnr-house-web-pricing-badge">Paling Populer</div>
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud4.png') }}"
                                        alt="Digital Marketing Pro">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Pro (Best Seller)</h3>
                                <p class="hnr-house-web-pricing-subtext">3 Platform (IG/FB + LinkedIn + TikTok)</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 14.950.000</div>
                            <p class="sosmed-pricing-description">
                                Solusi lengkap untuk ekspansi bisnis
                            </p>
                            <a href="#" class="hnr-house-web-pricing-btn">Beli Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>16 Konten/Bulan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Desain Visual + SEO Caption & Hashtag</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Copywriting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Facebook Ads (1JT Ads Budget)</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Setup + Full Optimasi & Posting Mingguan GMB</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Tersedia Talent Handal</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Video Reels + TikTok Short Format</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Full Report + Strategi Bulan Depan</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Support melalui WA, Email & Virtual Meet</span>
                            </div>
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
@endsection
