@extends('layout.main')

@section('container')
    <!-- CCTV Hero Section -->
    <div class="reveal-section">
        <section class="hnr-cctv-hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- CCTV Image with Brands -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="hnr-cctv-image-container">
                            <img src="{{ asset('assets/images/icon/cctv icon.png') }}" alt="CCTV Solutions"
                                class="hnr-cctv-main-image">
                        </div>
                    </div>

                    <!-- CCTV Content -->
                    <div class="col-lg-7">
                        <div class="hnr-cctv-content">
                            <h1 class="hnr-cctv-title">
                                <span class="hnr-cctv-title-orange">HANARA CCTV</span>
                                <span class="d-block">Solusi Anda Untuk Kebutuhan CCTV</span>
                            </h1>

                            <p class="hnr-cctv-description">
                                Hanara CCTV adalah unit bisnis PT Hanara Prima Solusindo dalam bidang CCTV yang
                                didedikasikan khusus untuk memberikan solusi keamanan terbaik kepada pelanggan kami dengan
                                teknologi CCTV yang canggih dengan pengalaman yang tepat dengan kebutuhan anda.
                            </p>

                            <a href="{{ url('https://shop.hanara.id/product-category/cctv/') }}" target="_blank"
                                rel="noopener noreferrer" class="hnr-cctv-button">Pesan Sekarang !!!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Why Choose Us Section -->
    <div class="reveal-section">
        <section class="hnr-cctv-why-section">
            <div class="container">
                <div class="hnr-cctv-section-title text-center">
                    <h2 class="hnr-cctv-title-heading">
                        <span class="hnr-cctv-title-orange">Alasan</span> Memilih Kami
                    </h2>
                    <h3 class="hnr-cctv-title-subheading">Sebagai Penyedia CCTV</h3>
                    <p class="hnr-cctv-title-description">
                        Kami menyediakan layanan CCTV berkualitas dengan teknologi terkini, pemasangan profesional, serta
                        layanan cepat dan tanggapnya untuk memastikan keamanan Anda hingga setiap sudut.
                    </p>
                </div>

                <div class="row mt-5">
                    <!-- Legalitas -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon1.png') }}" alt="Legalitas">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Memiliki Legalitas Perusahaan</h3>
                        </div>
                    </div>

                    <!-- Teknisi Profesional -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon2.png') }}" alt="Teknisi Profesional">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Teknisi Professional & Berpengalaman</h3>
                        </div>
                    </div>

                    <!-- Fleksibel -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon3.png') }}" alt="Fleksibel">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Fleksibel Sesuai Kebutuhan Anda</h3>
                        </div>
                    </div>

                    <!-- Harga Kompetitif -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon4.png') }}" alt="Harga Kompetitif">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Harga Kompetitif</h3>
                        </div>
                    </div>

                    <!-- Garansi -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon5.png') }}" alt="Garansi">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Garansi Pemasangan CCTV</h3>
                        </div>
                    </div>

                    <!-- Teknisi Terintegritas -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon6.png') }}" alt="Teknisi Terintegritas">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Teknisi yang Berintegritas</h3>
                        </div>
                    </div>

                    <!-- Proses Instalasi -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon7.png') }}" alt="Proses Instalasi">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Proses Instalasi Cepat & Rapi</h3>
                        </div>
                    </div>

                    <!-- Kualitas -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="hnr-cctv-feature-card text-center">
                            <div class="hnr-cctv-feature-icon">
                                <img src="{{ asset('assets/images/icon/cctv-icon8.png') }}" alt="Kualitas">
                            </div>
                            <h3 class="hnr-cctv-feature-title">Kualitas CCTV Terbaik</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Product Section -->
    <div class="reveal-section">
        <section class="hnr-cctv-product-section mb-5">
            <div class="container">
                <div class="hnr-cctv-section-title text-center">
                    <h2 class="hnr-cctv-title-heading">
                        <span class="hnr-cctv-title-orange">Pilih Produk CCTV</span>
                    </h2>
                    <h3 class="hnr-cctv-title-subheading">Sesuai Kebutuhan Anda</h3>
                    <p class="hnr-cctv-title-description">
                        Kami menyediakan berbagai pilihan kamera CCTV dari merek terbaik seperti Hikvision, EZVIZ, Bardi,
                        dan Acome. Semua produk sudah teruji kualitasnya dan kompatibel dengan instalasi
                        indoor maupun outdoor.
                    </p>
                </div>

                <div class="hnr-cctv-brand-logos mt-5 mb-5">
                    <div class="hnr-cctv-brand-logo-item">
                        <img src="{{ asset('assets/images/icon/hikvision.png') }}" alt="Hikvision">
                    </div>
                    <div class="hnr-cctv-brand-logo-item">
                        <img src="{{ asset('assets/images/icon/ezviz.png') }}" alt="Ezviz">
                    </div>
                    <div class="hnr-cctv-brand-logo-item">
                        <img src="{{ asset('assets/images/icon/bardi.png') }}" alt="Bardi">
                    </div>
                    <div class="hnr-cctv-brand-logo-item">
                        <img src="{{ asset('assets/images/icon/xiaomi.png') }}" alt="Xiaomi">
                    </div>
                    <div class="hnr-cctv-brand-logo-item">
                        <img src="{{ asset('assets/images/icon/acome.png') }}" alt="Acome">
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="reveal-section hnr-cctv-why-section">
                <div class="row text-center reveal-section ">
                    <div class="col-12">
                        <h2 class="hnr-webapp-framework-title">
                            <span class="hnr-webapp-title-orange">Layanan
                            </span> Jasa Pemasangan <br>CCTV Hanara
                        </h2>
                        <p class="hnr-cctv-title-description">
                            Hanara melayani jasa pemasangan CCTV untuk rumah, kantor, sekolah, fasilitas industri, hingga
                            area publik. <br> Kami menawarkan instalasi sistem CCTV lengkap dengan konfigurasi online,
                            pemantauan
                            jarak jauh, serta pelatihan penggunaan bagi pengguna. Anda tidak perlu repot—semua
                            dikerjakan
                            oleh tim profesional kami.
                        </p>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row hnr-webdev-services-row">
                        <!-- Service 1: Instalasi CCTV kabel & wireless -->
                        <div class="col-md-6 mb-3 reveal-section">
                            <div class="hnr-webdev-service-card">
                                <div class="hnr-nextcloud-service-icon">
                                    <img src="{{ asset('assets/images/icon/cctv-camera.png') }}" alt="CCTV"
                                        class="img-fluid">
                                </div>
                                <div class="hnr-webdev-service-content">
                                    <h3 class="hnr-webdev-service-title">Instalasi CCTV kabel & wireless</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2: Pemasangan DVR/NVR -->
                        <div class="col-md-6 mb-3 reveal-section">
                            <div class="hnr-webdev-service-card">
                                <div class="hnr-nextcloud-service-icon">
                                    <img src="{{ asset('assets/images/icon/dvr.png') }}" alt="DVR/NVR"
                                        class="img-fluid">
                                </div>
                                <div class="hnr-webdev-service-content">
                                    <h3 class="hnr-webdev-service-title">Pemasangan DVR/NVR & konfigurasi remote</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3: Integrasi dengan ponsel -->
                        <div class="col-md-6 mb-3 reveal-section">
                            <div class="hnr-webdev-service-card">
                                <div class="hnr-nextcloud-service-icon">
                                    <img src="{{ asset('assets/images/icon/hp.png') }}" alt="Integrasi dengan ponsel"
                                        class="img-fluid">
                                </div>
                                <div class="hnr-webdev-service-content">
                                    <h3 class="hnr-webdev-service-title">Integrasi dengan ponsel (Android/iOS)</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Service 4: Maintenance & troubleshooting -->
                        <div class="col-md-6 mb-3 reveal-section">
                            <div class="hnr-webdev-service-card">
                                <div class="hnr-nextcloud-service-icon">
                                    <img src="{{ asset('assets/images/icon/problem-solving.png') }}"
                                        alt="Maintenance & troubleshooting" class="img-fluid">
                                </div>
                                <div class="hnr-webdev-service-content">
                                    <h3 class="hnr-webdev-service-title">Maintenance & troubleshooting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FAQ Section dengan proper schema markup -->
    <section class="row mt-5 mb-5">
        <div class="col-12">
            <div class="hnr-faq-section">
                <h2 class="hnr-faq-title">FAQ</h2>
                <p class="hnr-faq-subtitle">Frequently Asked Questions (FAQ)</p>

                <!-- FAQ Container tanpa schema attributes -->
                <div class="hnr-faq-container">
                    @foreach ($faqData as $index => $faq)
                        <!-- FAQ Item {{ $index + 1 }} -->
                        <div class="hnr-faq-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="hnr-faq-header">
                                <div class="hnr-faq-number">{{ sprintf('%02d', $index + 1) }}</div>
                                <h3 class="hnr-faq-question">{{ $faq['question'] }}</h3>
                                <div class="hnr-faq-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="{{ $index === 0 ? '18 15 12 9 6 15' : '6 9 12 15 18 9' }}">
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
    <section id="kontak" class="hnr-contact-section">
        <div class="container">
            @include('components.contact')
        </div>
    </section>
@endsection

<!-- Include FAQ Schema sebagai JSON-LD -->
@push('schema-org')
    @include('components.faq-schema', ['faqItems' => $faqData])
@endpush
