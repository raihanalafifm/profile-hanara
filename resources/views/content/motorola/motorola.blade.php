@extends('layout.main')

@section('container')
    <!-- Motorola Hero Section -->
    <section class="hnr-motorola-hero-section">
        <div class="container reveal-section">
            <div class="row align-items-center">
                <!-- Motorola Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-motorola-image-container">
                        <img src="{{ asset('assets/images/icon/motorola-icon.png') }}" alt="Motorola Devices"
                            class="hnr-motorola-main-image">
                    </div>
                </div>

                <!-- Motorola Content -->
                <div class="col-lg-7">
                    <div class="hnr-motorola-content">
                        <h1 class="hnr-motorola-title">
                            <span class="hnr-motorola-title-orange">HANDY TALKY & RIG</span>
                            <span class="hnr-motorola-title-black d-block">MOTOROLA</span>
                        </h1>

                        <p class="hnr-motorola-description">
                            PT Hanara Prima Solusindo adalah distributor resmi perangkat komunikasi dua arah merk Motorola,
                            meliputi Handy Talky (HT) dan RIG untuk kebutuhan operasional di lapangan maupun industri.
                            <br>
                            Motorola dikenal sebagai brand terpercaya di dunia komunikasi radio, dengan kualitas sinyal
                            kuat, daya tahan tinggi, dan jangkauan luas.
                            Kami menyediakan berbagai tipe HT dan RIG VHF/UHF yang cocok digunakan oleh sektor pertambangan,
                            logistik, keamanan, perkebunan, hingga pemerintahan.
                            <br>
                            Perangkat tersedia dalam berbagai varian kelas — dari entry-level hingga model industri —
                            lengkap dengan dukungan aftersales dan pengaturan lisensi frekuensi jika dibutuhkan.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hnr-motorola-find-product-section">
        <div class="container reveal-section">
            <div class="hnr-find-product-content">
                <div class="hnr-find-product-icon">
                    <i class="bi bi-search"></i>
                </div>
                <h2 class="hnr-find-product-title">
                    Temukan Produk Handy Talky & RIG Motorola yang Sesuai Kebutuhan Anda
                </h2>
                <p class="hnr-find-product-description">
                    Lihat katalog lengkap HT dan RIG Motorola yang tersedia di toko online resmi Hanara.
                    Tersedia berbagai model: digital/analog, VHF/UHF, single/dual band, hingga RIG mobil & base station.
                    Semua unit baru & bergaransi.
                </p>
                <a href="https://shop.hanara.id/brands/motorola/" target="_blank" rel="noopener noreferrer"
                    class="hnr-catalog-button">
                    <i class="bi bi-shop"></i>
                    Lihat Katalog di Shop Hanara
                </a>
            </div>
        </div>
    </section>

    @if (isset($products['Broadband']) && $products['Broadband']->count() > 0)
        <!-- Broadband Section -->
        <section class="hnr-motorola-categories-section">
            <div class="container reveal-section">
                <div class="hnr-motorola-section-title text-center">
                    <h2 class="hnr-motorola-title-heading">
                        <span class="hnr-motorola-title-orange">Broadband</span> devices & apps
                    </h2>
                </div>

                <div class="row mt-5">
                    @foreach ($products['Broadband'] as $product)
                        <div class="col-6 col-md-3 mb-4">
                            <div class="hnr-motorola-category-card text-center">
                                <div class="hnr-motorola-category-icon">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/gambar/PRODUK MOTOROLA/Broadband/fulcrum-mash-up.png') }}"
                                            alt="{{ $product->name }}">
                                    @endif
                                </div>
                                <h3 class="hnr-motorola-category-title">{{ $product->name }}</h3>
                                <a href="{{ route('motorola.detail', $product->slug) }}" class="hnr-motorola-readmore-btn">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (isset($products['Radio Mobil']) && $products['Radio Mobil']->count() > 0)
        <!-- Radio Mobil Section -->
        <section class="hnr-motorola-products-section">
            <div class="container reveal-section">
                <div class="hnr-motorola-section-title text-center">
                    <h2 class="hnr-motorola-title-heading">
                        Radio<span class="hnr-motorola-title-orange"> Mobil</span>
                    </h2>
                </div>

                <div class="row mt-4">
                    @foreach ($products['Radio Mobil'] as $product)
                        <div class="col-6 col-md-3 mb-4">
                            <div class="hnr-motorola-product-card text-center">
                                <div class="hnr-motorola-product-badge">
                                    <img src="{{ asset('assets/images/icon/icon hanara.png') }}" alt="Motorola">
                                </div>
                                <div class="hnr-motorola-product-image">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/gambar/PRODUK MOTOROLA/DMR Radio/Radio Mobil/MOTOTRBO XiR M3688 Mobile Radio/xir_m3688_lg.png') }}"
                                            alt="{{ $product->name }}">
                                    @endif
                                </div>
                                <h3 class="hnr-motorola-product-title">{{ $product->name }}</h3>
                                <a href="{{ route('motorola.detail', $product->slug) }}" class="hnr-motorola-readmore-btn">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (isset($products['Radio Portable']) && $products['Radio Portable']->count() > 0)
        <!-- Radio Portable Section -->
        <section class="hnr-motorola-products-section hnr-motorola-section-alt">
            <div class="container reveal-section">
                <div class="hnr-motorola-section-title text-center">
                    <h2 class="hnr-motorola-title-heading">
                        Radio <span class="hnr-motorola-title-orange">Portable</span>
                    </h2>
                </div>

                <div class="row mt-4">
                    @foreach ($products['Radio Portable'] as $product)
                        <div class="col-6 col-md-3 mb-4">
                            <div class="hnr-motorola-product-card text-center">
                                <div class="hnr-motorola-product-badge">
                                    <img src="{{ asset('assets/images/icon/icon hanara.png') }}" alt="Motorola">
                                </div>
                                <div class="hnr-motorola-product-image">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/gambar/PRODUK MOTOROLA/DMR Radio/Radio Portable/R2/R2.png') }}"
                                            alt="{{ $product->name }}">
                                    @endif
                                </div>
                                <h3 class="hnr-motorola-product-title">{{ $product->name }}</h3>
                                <a href="{{ route('motorola.detail', $product->slug) }}" class="hnr-motorola-readmore-btn">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="hnr-motorola-discussion-section">
        <div class="container reveal-section">
            <div class="hnr-discussion-content">
                <div class="hnr-discussion-icon">
                    <i class="bi bi-chat-dots"></i>
                </div>
                <h2 class="hnr-discussion-title">
                    Ingin berdiskusi lebih lanjut mengenai perangkat komunikasi seperti Handy Talky atau RIG Motorola yang
                    sesuai untuk kebutuhan lapangan atau industri Anda?
                </h2>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="hnr-contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Read More Button Styles */
        .hnr-motorola-readmore-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 20px;
            background-color: transparent;
            color: #FF6B00;
            border: 1px solid #FF6B00;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .hnr-motorola-readmore-btn:hover {
            background-color: #FF6B00;
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .hnr-motorola-readmore-btn i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .hnr-motorola-readmore-btn:hover i {
            transform: translateX(5px);
        }

        /* Adjust card styles */
        .hnr-motorola-category-card,
        .hnr-motorola-product-card {
            padding-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hnr-motorola-category-title,
        .hnr-motorola-product-title {
            margin-bottom: 10px;
        }

        /* Find Product Section Styles */
        .hnr-motorola-find-product-section {
            background-color: #fff;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hnr-find-product-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hnr-find-product-icon {
            width: 80px;
            height: 80px;
            background-color: #fff3e8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: pulse 2s infinite;
        }

        .hnr-find-product-icon i {
            font-size: 36px;
            color: #FF6B00;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 107, 0, 0.7);
            }

            70% {
                box-shadow: 0 0 0 20px rgba(255, 107, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 107, 0, 0);
            }
        }

        .hnr-find-product-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .hnr-find-product-description {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .hnr-catalog-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background-color: #FF6B00;
            color: #fff;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
        }

        .hnr-catalog-button:hover {
            background-color: #e55600;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 0, 0.4);
            text-decoration: none;
        }

        .hnr-catalog-button i {
            font-size: 20px;
        }

        /* Discussion Section Styles */
        .hnr-motorola-discussion-section {
            background-color: #f9f9fb;
            padding: 60px 0;
            position: relative;
        }

        .hnr-discussion-content {
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .hnr-discussion-icon {
            width: 70px;
            height: 70px;
            background-color: #FF6B00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .hnr-discussion-icon i {
            font-size: 32px;
            color: #fff;
        }

        .hnr-discussion-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            line-height: 1.5;
        }

        /* Background decoration for Find Product section */
        .hnr-motorola-find-product-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background-color: rgba(255, 107, 0, 0.05);
            border-radius: 50%;
            z-index: 1;
        }

        .hnr-motorola-find-product-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 107, 0, 0.03);
            border-radius: 50%;
            z-index: 1;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .hnr-motorola-find-product-section {
                padding: 60px 0;
            }

            .hnr-find-product-title {
                font-size: 28px;
            }

            .hnr-find-product-description {
                font-size: 16px;
            }

            .hnr-discussion-title {
                font-size: 22px;
            }
        }

        @media (max-width: 767px) {
            .hnr-motorola-find-product-section {
                padding: 50px 0;
            }

            .hnr-find-product-title {
                font-size: 24px;
            }

            .hnr-find-product-description {
                font-size: 15px;
                padding: 0 15px;
            }

            .hnr-catalog-button {
                padding: 12px 25px;
                font-size: 15px;
            }

            .hnr-motorola-discussion-section {
                padding: 50px 0;
            }

            .hnr-discussion-title {
                font-size: 20px;
                padding: 0 15px;
            }

            .hnr-discussion-icon {
                width: 60px;
                height: 60px;
            }

            .hnr-discussion-icon i {
                font-size: 28px;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .hnr-motorola-find-product-section {
                background-color: #0a0a0a;
            }

            .hnr-find-product-icon {
                background-color: #3d2a14;
            }

            .hnr-find-product-title {
                color: #e0e0e0;
            }

            .hnr-find-product-description {
                color: #b0b0b0;
            }

            .hnr-motorola-discussion-section {
                background-color: #1a1a1a;
            }

            .hnr-discussion-title {
                color: #e0e0e0;
            }

            .hnr-motorola-find-product-section::before,
            .hnr-motorola-find-product-section::after {
                background-color: rgba(255, 107, 0, 0.02);
            }
        }
    </style>
@endpush
