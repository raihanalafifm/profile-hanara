@extends('layout.main')

@php
    // Set SEO Data untuk halaman 404 dengan cara yang lebih aman
    $seoData = [
        'title' => '404 - Halaman Tidak Ditemukan | PT Hanara Prima Solusindo',
        'description' =>
            'Halaman yang Anda cari tidak ditemukan. Silakan kembali ke halaman utama PT Hanara Prima Solusindo.',
        'keywords' => '404, error, halaman tidak ditemukan, hanara',
        'robots' => 'noindex, follow',
        'canonical' => url()->current(),
        'ogTitle' => '404 - Halaman Tidak Ditemukan',
        'ogDescription' => 'Halaman yang Anda cari tidak ditemukan di website PT Hanara Prima Solusindo.',
        'ogImage' => asset('assets/images/svg/404.svg'),
        'ogType' => 'website',
        'author' => 'PT Hanara Prima Solusindo',
        'twitterCard' => 'summary_large_image',
    ];
@endphp

@section('container')
    <!-- 404 Error Section -->
    <section class="error-404-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <!-- Left Content -->
                <div class="col-lg-6 col-md-12">
                    <div class="error-404-content">
                        <h1 class="error-404-number">404</h1>
                        <h2 class="error-404-title">OOOps!<br>Page Not Found</h2>
                        <p class="error-404-text">
                            This page doesn't exist or was removed!<br>
                            We suggest you back to home.
                        </p>
                        <a href="{{ route('home') }}" class="btn-back-home">
                            Back to homepage
                        </a>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="col-lg-6 col-md-12">
                    <div class="error-404-illustration">
                        <img src="{{ asset('assets/images/svg/404.svg') }}" alt="404 Error" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* 404 Error Page Styles */
        .error-404-section {
            background-color: #FFF5F0;
            padding: 80px 0;
            min-height: calc(100vh - 200px);
            /* Adjust based on navbar and footer height */
            position: relative;
            overflow: hidden;
        }

        /* Background decoration */
        .error-404-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 140, 90, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .error-404-section::after {
            content: '';
            position: absolute;
            bottom: -150px;
            left: -150px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 107, 0, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .error-404-content {
            position: relative;
            z-index: 1;
        }

        .error-404-number {
            font-size: 120px;
            font-weight: 800;
            color: #FF8C5A;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 4px 4px 0px rgba(255, 107, 0, 0.2);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .error-404-title {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .error-404-text {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn-back-home {
            display: inline-block;
            background-color: #00A86B;
            color: white;
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 168, 107, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-back-home::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-back-home:hover {
            background-color: #008F5A;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 168, 107, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-back-home:hover::before {
            left: 100%;
        }

        .error-404-illustration {
            position: relative;
            z-index: 1;
            text-align: center;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .error-404-illustration img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.1));
        }

        /* Responsive Styles */
        @media (max-width: 991px) {
            .error-404-section {
                padding: 60px 0;
            }

            .error-404-number {
                font-size: 100px;
            }

            .error-404-title {
                font-size: 32px;
            }

            .error-404-text {
                font-size: 16px;
            }

            .error-404-content {
                text-align: center;
                margin-bottom: 40px;
            }

            .error-404-illustration {
                max-width: 400px;
                margin: 0 auto;
            }
        }

        @media (max-width: 767px) {
            .error-404-section {
                padding: 40px 0;
            }

            .error-404-number {
                font-size: 80px;
            }

            .error-404-title {
                font-size: 28px;
            }

            .error-404-text {
                font-size: 15px;
                margin-bottom: 25px;
            }

            .btn-back-home {
                padding: 12px 28px;
                font-size: 15px;
            }

            .error-404-illustration {
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .error-404-number {
                font-size: 60px;
            }

            .error-404-title {
                font-size: 24px;
            }

            .error-404-text {
                font-size: 14px;
            }

            .btn-back-home {
                padding: 10px 24px;
                font-size: 14px;
            }
        }

        /* Dark Mode Support */
        [data-theme="dark"] .error-404-section {
            background-color: #0a0a0a;
        }

        [data-theme="dark"] .error-404-section::before,
        [data-theme="dark"] .error-404-section::after {
            background: radial-gradient(circle, rgba(255, 107, 0, 0.05) 0%, transparent 70%);
        }

        [data-theme="dark"] .error-404-title {
            color: #e0e0e0;
        }

        [data-theme="dark"] .error-404-text {
            color: #b0b0b0;
        }

        [data-theme="dark"] .error-404-illustration img {
            filter: drop-shadow(0 10px 30px rgba(255, 255, 255, 0.05));
        }
    </style>
@endsection
