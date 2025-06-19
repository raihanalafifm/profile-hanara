@extends('layout.main')

@section('container')
    <style>
        /* Digital Marketing Hero Section Styles */
        .sosmed-hero {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        /* Orange Decorative Shapes - Updated to Circles */
        .sosmed-shape-left {
            position: absolute;
            top: -40%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: #FF6B00;
            border-radius: 50%;
        }

        .sosmed-shape-left-secondary {
            position: absolute;
            top: -20%;
            left: 5%;
            width: 400px;
            height: 400px;
            background: #FFE5CC;
            border-radius: 50%;
        }

        .sosmed-shape-right {
            position: absolute;
            bottom: -40%;
            right: -15%;
            width: 700px;
            height: 700px;
            background: #FF6B00;
            border-radius: 50%;
        }

        /* Content Container */
        .sosmed-content-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 3rem;
        }

        /* Hero Title */
        .sosmed-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #FF6B00;
            margin-bottom: 0.5rem;
            line-height: 1.1;
        }

        .sosmed-subtitle {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        /* Hero Description */
        .sosmed-description {
            font-size: 1.1rem;
            color: #555555;
            line-height: 1.7;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        /* CTA Button */
        .sosmed-cta-btn {
            background-color: #FF6B00;
            color: white;
            padding: 0.875rem 2.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .sosmed-cta-btn:hover {
            background-color: #E55A00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
        }

        /* Illustration Container */
        .sosmed-illustration {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .sosmed-illustration img {
            width: 100%;
            max-width: 600px;
            height: auto;
            object-fit: contain;
        }

        /* Dark Mode Styles */
        [data-theme="dark"] .sosmed-hero {
            background-color: #1a1a1a;
        }

        [data-theme="dark"] .sosmed-shape-left,
        [data-theme="dark"] .sosmed-shape-right {
            background: #FF6B00;
            opacity: 0.9;
        }

        [data-theme="dark"] .sosmed-shape-left-secondary {
            background: #4d2600;
        }

        [data-theme="dark"] .sosmed-title {
            color: #FF8A33;
        }

        [data-theme="dark"] .sosmed-subtitle {
            color: #f0f0f0;
        }

        [data-theme="dark"] .sosmed-description {
            color: #b0b0b0;
        }

        [data-theme="dark"] .sosmed-cta-btn {
            background-color: #FF6B00;
        }

        [data-theme="dark"] .sosmed-cta-btn:hover {
            background-color: #FF8A33;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-content-wrapper {
                padding: 0 2rem;
            }
        }

        @media (max-width: 992px) {
            .sosmed-title {
                font-size: 2.5rem;
            }

            .sosmed-subtitle {
                font-size: 2.2rem;
            }

            .sosmed-illustration img {
                max-width: 500px;
            }

            .sosmed-shape-left {
                width: 500px;
                height: 500px;
                top: -30%;
                left: -15%;
            }

            .sosmed-shape-left-secondary {
                width: 350px;
                height: 350px;
            }

            .sosmed-shape-right {
                width: 600px;
                height: 600px;
                bottom: -35%;
                right: -20%;
            }
        }

        @media (max-width: 768px) {
            .sosmed-hero {
                padding: 60px 0;
                min-height: auto;
            }

            .sosmed-title {
                font-size: 2rem;
                text-align: center;
            }

            .sosmed-subtitle {
                font-size: 1.8rem;
                text-align: center;
            }

            .sosmed-description {
                font-size: 1rem;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }

            .sosmed-cta-btn {
                display: block;
                width: fit-content;
                margin: 0 auto;
            }

            .sosmed-illustration {
                margin-bottom: 2rem;
            }

            .sosmed-shape-left {
                width: 200px;
                height: 200px;
                top: -100px;
                left: -100px;
            }

            .sosmed-shape-left-secondary {
                width: 150px;
                height: 150px;
            }

            .sosmed-shape-right {
                width: 250px;
                height: 250px;
                bottom: -125px;
                right: -125px;
            }
        }

        @media (max-width: 576px) {
            .sosmed-title {
                font-size: 1.75rem;
            }

            .sosmed-subtitle {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .sosmed-description {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
            }

            .sosmed-cta-btn {
                font-size: 1rem;
                padding: 0.75rem 2rem;
            }

            .sosmed-illustration img {
                max-width: 300px;
            }

            .sosmed-shape-left {
                width: 150px;
                height: 150px;
                top: -75px;
                left: -75px;
            }

            .sosmed-shape-right {
                width: 200px;
                height: 200px;
                bottom: -100px;
                right: -100px;
            }
        }

        /* Services Section Styles */
        .sosmed-services {
            padding: 80px 0;
            background-color: #FFFFFF;
            position: relative;
        }

        /* Services Header */
        .sosmed-services-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .sosmed-services-title {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .sosmed-services-title .text-orange {
            color: #FF6B00;
        }

        .sosmed-services-description {
            font-size: 1.1rem;
            color: #666666;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Services Grid */
        .sosmed-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Service Item */
        .sosmed-service-item {
            text-align: center;
            padding: 30px 20px;
            transition: transform 0.3s ease;
        }

        .sosmed-service-item:hover {
            transform: translateY(-10px);
        }

        .sosmed-service-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-service-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .sosmed-service-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 15px;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-service-desc {
            font-size: 1rem;
            color: #666666;
            line-height: 1.6;
            max-width: 300px;
            margin: 0 auto;
        }

        /* Dark Mode */
        [data-theme="dark"] .sosmed-services {
            background-color: #1a1a1a;
        }

        [data-theme="dark"] .sosmed-services-title {
            color: #f0f0f0;
        }

        [data-theme="dark"] .sosmed-services-title .text-orange {
            color: #FF8A33;
        }

        [data-theme="dark"] .sosmed-services-description {
            color: #b0b0b0;
        }

        [data-theme="dark"] .sosmed-service-title {
            color: #f0f0f0;
        }

        [data-theme="dark"] .sosmed-service-desc {
            color: #b0b0b0;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-services-grid {
                padding: 0 20px;
            }
        }

        @media (max-width: 992px) {
            .sosmed-services-title {
                font-size: 2.5rem;
            }

            .sosmed-services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .sosmed-service-icon {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 768px) {
            .sosmed-services {
                padding: 60px 0;
            }

            .sosmed-services-title {
                font-size: 2rem;
            }

            .sosmed-services-description {
                font-size: 1rem;
                padding: 0 20px;
            }

            .sosmed-services-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 0 30px;
            }

            .sosmed-service-title {
                font-size: 1.2rem;
                min-height: auto;
            }
        }

        @media (max-width: 576px) {
            .sosmed-services-title {
                font-size: 1.75rem;
            }

            .sosmed-services-description {
                font-size: 0.95rem;
                line-height: 1.7;
            }

            .sosmed-service-icon {
                width: 80px;
                height: 80px;
                margin-bottom: 20px;
            }

            .sosmed-service-title {
                font-size: 1.1rem;
                margin-bottom: 10px;
            }

            .sosmed-service-desc {
                font-size: 0.95rem;
            }
        }

        .sosmed-why-different {
            padding: 100px 0;
            background-color: #F8F9FA;
            position: relative;
        }

        /* Section Header */
        .sosmed-why-different-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .sosmed-why-different-title {
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            line-height: 1.3;
        }

        .sosmed-why-different-title .text-orange {
            color: #FF6B00;
        }

        /* Features Grid */
        .sosmed-features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Keeps 3 equal columns */
            gap: 30px;
            /* Space between cards */
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Center the last two cards in the second row */
        .sosmed-feature-card:nth-child(4),
        .sosmed-feature-card:nth-child(5) {
            grid-column: span 1;
            /* Makes sure each card takes one full column */
            max-width: 400px;
            /* Adjust the size */
            margin: 0 auto;
            /* Centers the cards */
        }

        /* Styling for Feature Cards */
        .sosmed-feature-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sosmed-feature-card:hover {
            transform: translateY(-10px);
            /* Lift effect */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            /* Stronger shadow */
        }

        /* Image and Text styling */
        .sosmed-feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sosmed-feature-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .sosmed-feature-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .sosmed-feature-desc {
            font-size: 1rem;
            color: #666666;
            line-height: 1.6;
        }

        /* Dark Mode Styles */
        [data-theme="dark"] .sosmed-feature-card {
            background: #1a1a1a;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        [data-theme="dark"] .sosmed-feature-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
        }

        [data-theme="dark"] .sosmed-feature-title {
            color: #f0f0f0;
        }

        [data-theme="dark"] .sosmed-feature-desc {
            color: #b0b0b0;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sosmed-features-grid {
                padding: 0 20px;
                gap: 25px;
            }
        }

        @media (max-width: 992px) {
            .sosmed-why-different-title {
                font-size: 2.5rem;
            }

            .sosmed-features-grid {
                grid-template-columns: repeat(2, 1fr);
                /* Adjust to 2 columns */
                grid-template-areas:
                    "card1 card2"
                    "card3 card3"
                    "card4 card5";
                /* Ensure the last row has 2 centered cards */
            }

            .sosmed-feature-card:nth-child(3) {
                grid-column: span 2;
                /* Cards in the middle span two columns */
                max-width: 500px;
                margin: 0 auto;
            }

            .sosmed-feature-card:nth-child(4),
            .sosmed-feature-card:nth-child(5) {
                grid-column: span 1;
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .sosmed-why-different {
                padding: 70px 0;
            }

            .sosmed-why-different-title {
                font-size: 2rem;
                padding: 0 20px;
            }

            .sosmed-why-different-header {
                margin-bottom: 50px;
            }

            .sosmed-features-grid {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "card1"
                    "card2"
                    "card3"
                    "card4"
                    "card5";
                gap: 20px;
                padding: 0 20px;
            }

            .sosmed-feature-card,
            .sosmed-feature-card:nth-child(3),
            .sosmed-feature-card:nth-child(4),
            .sosmed-feature-card:nth-child(5) {
                grid-column: span 1;
                max-width: 100%;
            }

            .sosmed-feature-card {
                padding: 30px 25px;
            }

            .sosmed-feature-title {
                font-size: 1.15rem;
            }
        }

        @media (max-width: 576px) {
            .sosmed-why-different {
                padding: 60px 0;
            }

            .sosmed-why-different-title {
                font-size: 1.75rem;
            }

            .sosmed-feature-icon {
                width: 70px;
                height: 70px;
                margin-bottom: 20px;
            }

            .sosmed-feature-title {
                font-size: 1.1rem;
                margin-bottom: 12px;
            }

            .sosmed-feature-desc {
                font-size: 0.95rem;
            }

            .sosmed-feature-card {
                padding: 25px 20px;
                border-radius: 15px;
            }
        }
    </style>

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

                <!-- Row 2 -->
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
                    <p class="sosmed-feature-desc">Solusi digital marketing yang skalabel untuk semua ukuran bisnis.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
