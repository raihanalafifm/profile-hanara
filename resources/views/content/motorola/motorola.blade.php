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

    <section class="hnr-motorola-discussion-section mb-5">
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
