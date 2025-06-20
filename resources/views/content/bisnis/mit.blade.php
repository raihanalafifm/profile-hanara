@extends('layout.main')

@section('container')
    <section class="mit-hero">
        <!-- Orange Decorative Circles -->
        <div class="mit-shape-left"></div>
        <div class="mit-shape-left-secondary"></div>
        <div class="mit-shape-right"></div>

        <div class="container-fluid mit-content-wrapper">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-md-6 col-12 order-2 order-lg-1">
                    <div class="mit-hero-content">
                        <h1 class="mit-title">MIT</h1>
                        <h2 class="mit-subtitle">Management Information Technology</h2>
                        <p class="mit-description">
                            Platform manajemen teknologi informasi yang dirancang untuk mengoptimalkan operasional IT,
                            mengelola aset digital, dan meningkatkan efisiensi tim teknologi dengan solusi terintegrasi
                            yang mudah digunakan.
                        </p>
                        <p class="mit-description">
                            Dengan fitur-fitur canggih dan antarmuka yang intuitif, MIT membantu perusahaan dalam
                            mengelola infrastruktur IT, monitoring sistem, dan koordinasi proyek teknologi secara
                            real-time dan efektif.
                        </p>

                        <!-- CTA Button -->
                        <div class="mit-cta-section">
                            <a href="#" class="mit-cta-btn">
                                Pelajari Lebih Lanjut
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                                    style="margin-left: 8px;">
                                    <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6-6 6-1.41-1.41z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="col-lg-6 col-md-6 col-12 order-1 order-lg-2">
                    <div class="mit-illustration">
                        <img src="{{ asset('assets/images/mit/hero.svg') }}" alt="MIT Hero" class="mit-hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
