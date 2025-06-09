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
                            PT Hanara Prima Solusindo sebagai pusat distributor handy talky dan RIG untuk merek Motorola.
                            Motorola terkenal untuk satu nama handal untuk Handy Talky dan menghadirkan berbagai tipe yang
                            memenuhi standar kualitas untuk komunikasi radio baik HT VHF/UHF baik alat operasi pihak depan
                            mendukung kinerja pekerjaan maupun balik layar untuk industri. Handy Talky dan RIG Motorola
                            hadir dalam beragam pilihan sesuai kebutuhan dengan ragam varian dan kelas.
                        </p>

                        <a href="{{ url('https://shop.hanara.id') }}" class="hnr-motorola-button">Pesan Sekarang!</a>
                    </div>
                </div>
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

    <!-- Contact Section -->
    <div class="container reveal-section">
        @include('components.contact')
    </div>
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
    </style>
@endpush
