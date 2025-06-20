@extends('layout.main')

@section('container')
    <!-- MIT Hero Section -->
@section('container')
    <!-- MIT Hero Section -->
    <section class="mit-hero-section">
        <!-- Background Orange Element -->
        <div class="mit-bg-orange-element"></div>

        <div class="container">
            <div class="row align-items-center min-vh-100">
                <!-- Content Column -->
                <div class="col-12">
                    <div class="mit-hero-content">
                        <!-- Text Content -->
                        <div class="mit-text-content">
                            <h1 class="mit-main-title">
                                <span class="mit-orange">MIT -</span> Management<br>
                                Information Technology
                            </h1>
                            <p class="mit-subtitle">
                                Platform Terintegrasi untuk Manajemen Operasional Departemen IT
                            </p>

                            <!-- CTA Button -->
                            <div class="mit-cta-section">
                                <a href="#" class="mit-cta-btn">
                                    Konsultasi Sekarang
                                </a>
                            </div>
                        </div>

                        <!-- Dashboard Image -->
                        <div class="mit-dashboard-container ">
                            <img src="{{ asset('assets/images/mit/hero.svg') }}" alt="MIT Dashboard"
                                class="mit-dashboard-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
