@extends('layout.main')

@section('container')
    <section class="hnr-house-maint-section">
        <div class="container">
            <div class="row align-items-center reveal-section">
                <!-- Logo/Image Section -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-house-maint-logo-container">
                        <img src="{{ asset('assets/images/icon/maintenance-web.png') }}" alt="Website Maintenance"
                            class="hnr-house-maint-logo">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-house-maint-content">
                        <h1 class="hnr-house-maint-title">
                            <span class="hnr-house-maint-title-orange">JASA</span> MAINTENANCE WEBSITE
                        </h1>

                        <p class="hnr-house-maint-description">
                            Website yang tidak dirawat secara rutin berisiko mengalami error, penurunan performa, hingga
                            gangguan keamanan. <br>
                            Layanan maintenance website dari Hanara dirancang untuk memastikan situs Anda selalu optimal,
                            aman, dan terupdate sesuai kebutuhan bisnis.<br>
                            Kami menangani berbagai jenis website, mulai dari WordPress, Laravel, CodeIgniter, hingga
                            platform custom lainnya.
                            <br><br>
                            🔧 Layanan maintenance mencakup:
                            <br>
                            - Update kode & plugin untuk menjaga keamanan
                            <br>
                            - Perbaikan bug & error halaman
                            <br>
                            - Optimasi kecepatan dan performa website
                            <br>
                            - Maintenance framework (Laravel/CI)
                            <br>
                            - Update konten halaman dan artikel
                            <br>
                            - Backup rutin dan pemulihan data
                            <br>
                            - Monitoring uptime & laporan teknis berkala
                            <br><br>
                            Dengan tim teknis berpengalaman, Hanara memastikan website Anda tidak hanya aktif, tetapi juga
                            memberikan pengalaman terbaik bagi pengguna setiap saat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="hnr-house-benefit-section reveal-section">
                        <h2 class="hnr-house-benefit-title"><span class="hnr-house-benefit-title-orange">Mengapa</span>
                            Maintenance Penting?</h2>
                        <p class="hnr-house-benefit-subtitle">Perawatan rutin menjaga website tetap aman, cepat, dan selalu
                            relevan bagi pengunjung.</p>

                        <div class="row mt-4">
                            <!-- Item 1: Software & Plugin Outdated -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance1.png') }}"
                                                alt="Software & Plugin Outdated">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Software & Plugin Outdated</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Komponen website seperti CMS, plugin, atau library yang tidak diperbarui dapat
                                        menyebabkan error, celah keamanan, dan penurunan performa.
                                        Maintenance rutin mencegah risiko teknis akibat sistem yang usang.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 2: Performa Website Tidak Optimal -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance2.png') }}"
                                                alt="Performa Website">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Performa Website Menurun</h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Loading lama, error saat akses, atau tampilan yang rusak dapat membuat pengunjung
                                        enggan membuka website Anda. <br>
                                        Maintenance akan membantu optimasi kecepatan dan stabilitas website.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 3: Konten Website Sudah Outdated -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance4.png') }}"
                                                alt="Konten Outdated">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Konten Website Tidak Update
                                    </h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Website dengan informasi lama, berita tidak relevan, atau tampilan tidak diperbarui
                                        bisa mengurangi kepercayaan pengunjung.
                                        Dengan maintenance, konten tetap segar dan mendukung citra profesional.
                                    </p>
                                </div>
                            </div>

                            <!-- Item 4: Data Website Hilang -->
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="hnr-house-benefit-item">
                                    <div class="hnr-house-benefit-icon-container">
                                        <div class="hnr-house-benefit-icon">
                                            <img src="{{ asset('assets/images/icon/icon-web-maintenance3.png') }}"
                                                alt="Data Hilang">
                                        </div>
                                    </div>
                                    <h3 class="hnr-house-benefit-item-title">Risiko Kehilangan Data
                                    </h3>
                                    <p class="hnr-house-benefit-item-text">
                                        Tanpa backup rutin, data penting seperti customer, transaksi, atau file bisa hilang
                                        dalam sekejap karena error atau serangan.
                                        Maintenance menjamin perlindungan dan pemulihan data yang andal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise Section -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="hnr-house-expertise-section reveal-section">
                        <h2 class="hnr-house-expertise-title"><span class="hnr-house-expertise-title-orange">Kenapa</span>
                            Harus Maintenance Website Anda Bersama Hanara?
                        </h2>
                        <p class="hnr-house-expertise-subtitle">Cepat, aman, dan andal. Website Anda tetap aktif dan siap
                            melayani pelanggan kapan saja.
                        </p>

                        <div class="row mt-4">
                            <!-- Expertise 1 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-fitur-3.png') }}"
                                            alt="Tim Professional">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Tim Professional</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Website Anda ditangani oleh tim teknis berpengalaman yang hanya menggunakan
                                            software dan plugin terpercaya. <br>
                                            Kami pastikan setiap tindakan maintenance dilakukan secara tepat, cepat, dan
                                            aman.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 2 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance1.png') }}"
                                            alt="Optimalisasi Performa">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Optimalisasi Performa Website</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Kami membantu meningkatkan kecepatan loading dan kestabilan website Anda. <br>
                                            Performa yang lebih cepat akan meningkatkan pengalaman pengguna dan mendukung
                                            pencapaian target bisnis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 3 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance7.png') }}"
                                            alt="Fast Support">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Fast Support Response</h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Masalah pada website bisa datang kapan saja. <br>
                                            berkomitmen memberikan respon teknis cepat dalam waktu kurang dari 30 menit*
                                            saat terjadi kendala
                                            (*di jam layanan). </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Expertise 4 -->
                            <div class="col-md-6 mb-4">
                                <div class="hnr-house-expertise-card">
                                    <div class="hnr-house-expertise-icon">
                                        <img src="{{ asset('assets/images/icon/icon-card-maintenance2.png') }}"
                                            alt="Security Updates">
                                    </div>
                                    <div class="hnr-house-expertise-content">
                                        <h3 class="hnr-house-expertise-card-title">Pembaruan Keamanan Berkala
                                            Keamanan adalah prioritas.
                                        </h3>
                                        <p class="hnr-house-expertise-card-text">
                                            Tim kami melakukan security patch, update plugin, serta pemantauan rutin untuk
                                            mencegah celah keamanan dan gangguan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="hnr-contact-section">
                <div class="container">
                    @include('components.contact')
                </div>
            </section>
        </div>
    </section>
@endsection
