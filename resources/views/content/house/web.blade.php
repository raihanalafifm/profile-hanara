@extends('layout.main')

@section('container')
    <section class="hnr-house-web-section">
        <div class="container">
            <!-- Header Section -->
            <div class="row align-items-center reveal-section">
                <!-- Web Design Image -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="hnr-house-web-img-container">
                        <img src="{{ asset('assets/images/icon/jasa pembuatan website.png') }}" alt="Web Design"
                            class="hnr-house-web-img">
                    </div>
                </div>

                <!-- Description Section -->
                <div class="col-lg-7">
                    <div class="hnr-house-web-content">
                        <h1 class="hnr-house-web-title">
                            <span class="hnr-house-web-title-orange">JASA</span> PEMBUATAN WEBSITE COMPANY PROFILE

                        </h1>

                        <p class="hnr-house-web-description">
                            Kami menyediakan layanan pembuatan website company profile yang dirancang khusus untuk
                            memperkuat citra profesional organisasi Anda secara online.
                            Cocok untuk perusahaan, sekolah, instansi pemerintah, organisasi, yayasan, maupun personal
                            branding profesional.
                            <br>
                            Website yang kami bangun memiliki desain modern, cepat diakses, dan ramah perangkat mobile,
                            serta dioptimalkan dengan teknik SEO on-page untuk mendukung kemunculan di hasil pencarian
                            Google.
                            <br>
                            Layanan kami mencakup:
                            <br>
                            ✅ Desain responsif dan elegan
                            <br>
                            ✅ Struktur halaman yang informatif (profil, layanan, kontak, galeri, dll)
                            <br>
                            ✅ Integrasi WhatsApp, Google Maps, dan media sosial
                            <br>
                            ✅ Fitur tambahan sesuai kebutuhan seperti form pendaftaran, blog, atau download dokumen
                        </p>

                        <!-- Achievement Stats -->
                        <div class="hnr-house-web-stats">
                            <div class="hnr-house-web-stat-item">
                                <div class="hnr-house-web-stat-icon">
                                    <img src="{{ asset('assets/images/icon/monitor.png') }}" alt="Projects">
                                </div>
                                <div class="hnr-house-web-stat-content">
                                    <h3 class="hnr-house-web-stat-number">200 +</h3>
                                    <p class="hnr-house-web-stat-text">Successfully Project Finished</p>
                                </div>
                            </div>

                            <div class="hnr-house-web-stat-item">
                                <div class="hnr-house-web-stat-icon">
                                    <img src="{{ asset('assets/images/icon/calender.png') }}" alt="Experience">
                                </div>
                                <div class="hnr-house-web-stat-content">
                                    <h3 class="hnr-house-web-stat-number">10 +</h3>
                                    <p class="hnr-house-web-stat-text">Year of Experience Web Project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row mt-5 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-house-web-section-title">
                        <span class="hnr-house-web-title-orange">Mengapa</span> <span class="hnr-house-web-title-bold">Harus
                            Kami Yang</span>
                    </h2>
                    <h3 class="hnr-house-web-section-subtitle">Membuat Website Anda?</h3>
                    <p class="hnr-house-web-section-desc">Pilihan terbaik, teknologi terbaru, dan harga tepat, solusi
                        website Anda</p>
                </div>
            </div>

            <!-- Features Grid - Row 1 -->
            <div class="row mt-4 reveal-section">
                <!-- Feature 1: Sudah Tersedia Domain -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web1.png') }}" alt="Domain">
                        </div>
                        <h3 class="hnr-house-web-feature-title"> Dasar Website yang Lengkap
                            Termasuk Domain Profesional</h3>
                        <p class="hnr-house-web-feature-text">
                            Gratis domain .com/.id selama 1 tahun, kami bantu pilih nama yang kredibel dan mudah diingat.
                        </p>
                    </div>
                </div>

                <!-- Feature 2: Sudah Termasuk Hosting -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web2.png') }}" alt="Hosting">
                        </div>
                        <h3 class="hnr-house-web-feature-title">
                            Termasuk Hosting Cepat & Aman
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Hosting stabil dengan bandwidth besar, sistem backup harian, dan dukungan keamanan tinggi.
                        </p>
                    </div>
                </div>

                <!-- Feature 3: Sesuai Kebutuhan Anda -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web3.png') }}" alt="Customization">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Desain Sesuai Kebutuhan Anda
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Bisa disesuaikan untuk perusahaan, sekolah, organisasi, UMKM, hingga yayasan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Features Grid - Row 2 -->
            <div class="row reveal-section">

                <!-- Feature 5: Responsif -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web5.png') }}" alt="Responsif">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Performa dan Pengalaman Pengguna
                            Responsif (Mobile Friendly)
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Tampil optimal di semua perangkat—smartphone, tablet, dan desktop.
                        </p>
                    </div>
                </div>

                <!-- Feature 6: SEO Friendly -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web6.png') }}" alt="SEO Friendly">
                        </div>
                        <h3 class="hnr-house-web-feature-title">SEO Friendly</h3>
                        <p class="hnr-house-web-feature-text">
                            Struktur dan konten website dioptimalkan agar mudah ditemukan di Google.
                        </p>
                    </div>
                </div>
                <!-- Feature 4: Interaktif -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web4.png') }}" alt="Interaktif">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Interaktif & Modern
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Fitur kontak, chat, galeri, hingga form online untuk pengalaman pengguna yang dinamis.
                        </p>
                    </div>
                </div>
            </div>

            {{-- <!-- Features Grid - Row 3 -->
            <div class="row reveal-section">
                <!-- Feature 7: Membantu Memahami Marketing Strategy -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web7.png') }}" alt="Marketing">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Membantu Memahami Marketing Strategy Anda</h3>
                        <p class="hnr-house-web-feature-text">
                            Kami selalu membicarakan target market website produk, dan jasa perusahaan Anda itu dibuat
                            dikoloh pengunjung website sehingga pemasaran akan jauh lebih kuat mengunjungi customer.
                        </p>
                    </div>
                </div>

                <!-- Feature 8: Fitur Toko Online -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web8.png') }}" alt="Online Store">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Fitur Toko Online</h3>
                        <p class="hnr-house-web-feature-text">
                            Solusi tepat untuk pembuatan toko UMKM yang ingin mudah dan pengunjung tidak perlu menunggu
                            dengan fitur listing produk, katalog produk, fitur keranjang dari pengunjung.
                        </p>
                    </div>
                </div>

                <!-- Feature 9: Integrasi Dengan Payment Gateway -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web9.png') }}" alt="Payment">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Integrasi Dengan Payment Gateway</h3>
                        <p class="hnr-house-web-feature-text">
                            Solusi untuk dapat langsung melakukan payment produk tanpa harus pelanggan melakukan transfer
                            dengan metode pembayaran yang lengkap melului pembayaran mudah.
                        </p>
                    </div>
                </div>
            </div> --}}

            <!-- Features Grid - Row 4 -->
            <div class="row reveal-section">
                <!-- Feature 10: Dibuatkan Social Media -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web14.png') }}" alt="WhatsApp">
                        </div>
                        <h3 class="hnr-house-web-feature-title"> Integrasi & Dukungan Digital
                            Integrasi WhatsApp & Media Sosial
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Pengunjung bisa langsung terhubung ke WhatsApp atau sosial media Anda.

                        </p>
                    </div>
                </div>

                <!-- Feature 11: Email Perusahaan -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web11.png') }}" alt="Email">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Email Bisnis (@namadomain.com)
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Meningkatkan profesionalisme komunikasi dengan email khusus domain Anda.
                        </p>
                    </div>
                </div>

                <!-- Feature 12: Analytics Tools -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web12.png') }}" alt="Analytics">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Analytics & Monitoring
                        </h3>
                        <p class="hnr-house-web-feature-text">
                            Pantau pengunjung dan performa website dengan Google Analytics & tools lainnya.
                        </p>
                    </div>
                </div>
            </div>

            {{-- <!-- Features Grid - Row 5 -->
            <div class="row reveal-section">
                <!-- Feature 13: Realtime Chat -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web13.png') }}" alt="Chat">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Realtime Chat</h3>
                        <p class="hnr-house-web-feature-text">
                            Anda dapat menjajaki dan merespond customer yang mengunjungi website Anda secara realtime,
                            bahkan dalam masa pandemi, customer jangan sampai klik web visitor yang mengakses website Anda.
                        </p>
                    </div>
                </div>

                <!-- Feature 14: Connect Whatsapp -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web14.png') }}" alt="WhatsApp">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Connect WhatsApp</h3>
                        <p class="hnr-house-web-feature-text">
                            Embadikan akses informasi bagi bisa Anda koneksikan dengan menggunakan nomor WhatsApp perusahaan
                            Anda, semudah klik meningkatkan customer bisa langsung menghubungi Anda dengan cepat.
                        </p>
                    </div>
                </div>

                <!-- Feature 15: Android & Playstore -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-feature-card">
                        <div class="hnr-house-web-feature-icon">
                            <img src="{{ asset('assets/images/icon/icon-card-web15.png') }}" alt="Android">
                        </div>
                        <h3 class="hnr-house-web-feature-title">Download ke Playstore</h3>
                        <p class="hnr-house-web-feature-text">
                            Untuk pembuatan paket website khusus dan Desember. Kerjasama Anda dapat paket yang cukup untuk
                            anda membuat aplikasi Android Anda di download dari website.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Modified Features Grid - Row 6 with centered content -->
            <div class="row reveal-section">
                <div class="col-md-8 mx-auto">
                    <div class="row">
                        <!-- Feature 16: BONUS Whatsapp -->
                        <div class="col-md-6 mb-4">
                            <div class="hnr-house-web-feature-card">
                                <div class="hnr-house-web-feature-icon">
                                    <img src="{{ asset('assets/images/icon/icon-card-web16.png') }}" alt="Bonus">
                                </div>
                                <h3 class="hnr-house-web-feature-title">BONUS Whatsapp</h3>
                                <p class="hnr-house-web-feature-text">
                                    Anda dapat langsung bonus aplikasi Whatsapp yang terkoneksi website Anda secara control,
                                    bahkan harus memeksimalkan marketing agar sempurna hingga bisa dirubah antar yang
                                    menginkan website Anda.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 17: FREE Training -->
                        <div class="col-md-6 mb-4">
                            <div class="hnr-house-web-feature-card">
                                <div class="hnr-house-web-feature-icon">
                                    <img src="{{ asset('assets/images/icon/icon-card-web17.png') }}" alt="Training">
                                </div>
                                <h3 class="hnr-house-web-feature-title">FREE Training</h3>
                                <p class="hnr-house-web-feature-text">
                                    Untuk pembuatan paket website Discovery, kami diberikan dan hosting langsung sandera
                                    selama 2 bulan. Ramu juga akan di training cara menambah dan mengelola informasi secara
                                    mudah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Pricing Section -->
            <!-- Pricing Section -->
            <div class="row mt-5 mb-1 text-center reveal-section">
                <div class="col-12">
                    <h2 class="hnr-house-web-pricing-title"><span class="hnr-house-web-title-orange">Paket </span> Website
                        Terbaik Kami</h2>
                    <p class="hnr-house-web-pricing-subtitle">Pilih Paket Website yang Sesuai Kebutuhan Anda
                        Semua paket sudah termasuk domain, hosting, desain profesional, dan fitur lengkap untuk membangun
                        website company profile yang kredibel.
                    </p>
                </div>
            </div>

            <div class="row mb-5 reveal-section">
                <p
                    style="color: #555;font-size: 0.9rem;font-style: italic;background-color: #f9f9f9; padding: 8px 12px;border-left: 3px solid #ff8800;margin-top: 10px;border-radius: 4px;">
                    Harga belum termasuk PPN.
                    Setiap website dibuat khusus sesuai kebutuhan Anda. Waktu pengerjaan berkisar 7 hingga 30 hari
                    kerja, tergantung tingkat kompleksitas, revisi dan materi.
                </p>
                <!-- Package 1: Web Startup (Ekonomis) -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud2.png') }}"
                                        alt="Startup Package">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Web Startup (Ekonomi)</h3>
                                <p class="hnr-house-web-pricing-subtext">Include Domain & Hosting 1 Tahun</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 3.990.000</div>
                            <p style="color:#636363; font-family:'Poppins', sans-serif; font-size:12px; font-weight:600;">
                                Cocok untuk bisnis kecil &amp; personal branding
                            </p>
                            <a href="{{ url('https://shop.hanara.id/product/paket-website-startup-ekonomi/') }}"
                                target="_blank" rel="noopener noreferrer" class="hnr-house-web-pricing-btn">Beli
                                Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FREE Domain (.com) 1 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Hosting 1 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>3GB Storage</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Server IIX</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited Bandwidth</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Email Account</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited POP3 Email</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FTP Access</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Tampilan Responsive</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SEO Friendly</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SSL Lets Encrypt</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Home Page</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman About Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Galeri</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Contact Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Produk dan Service</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Form Order</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Connect Whatsapp</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Renewal Tahun Berikutnya Rp. 1.375.000/Tahun</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 2: Web Startup (Best Seller) -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card popular">
                        <div class="hnr-house-web-pricing-badge">Paling Popular</div>
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud3.png') }}"
                                        alt="Startup Pro Package">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Web Startup (Best Seller)</h3>
                                <p class="hnr-house-web-pricing-subtext">Include Domain & Hosting 1 Tahun</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 5.990.000</div>
                            <p style="color:#636363; font-family:'Poppins', sans-serif; font-size:12px; font-weight:600;">
                                Rekomendasi terbaik untuk UKM &amp; lembaga
                            </p>
                            <a href="{{ url('https://shop.hanara.id/product/paket-website-startup-best-seller/') }}"
                                target="_blank" rel="noopener noreferrer"
                                class="hnr-house-web-pricing-btn hnr-house-web-pricing-btn-popular">Beli
                                Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FREE Domain (.com) 1 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Hosting 1 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>7GB Storage</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Server IIX</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited Bandwidth</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Email Account</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited POP3 Email</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FTP Access</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Tampilan Responsive</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SEO Friendly</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SSL Lets Encrypt</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Home Page</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman About Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Galeri</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Contact Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Produk dan Service</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Toko Online</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Integrasi Payment Gateway</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Form Order</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Realtime Chatting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Connect Whatsapp</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Analytic Tools</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Fans Page</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Instagram Account</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Renewal Tahun Berikutnya Rp. 1.980.000/Tahun</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package 3: Web Startup (Lebih Hemat) -->
                <div class="col-md-4 mb-4">
                    <div class="hnr-house-web-pricing-card">
                        <div class="hnr-house-web-pricing-header">
                            <div class="hnr-house-web-pricing-type">
                                <div class="hnr-house-web-pricing-icon">
                                    <img src="{{ asset('assets/images/icon/icon-paket-cloud4.png') }}"
                                        alt="Premium Package">
                                </div>
                                <h3 class="hnr-house-web-pricing-name">Paket Web Startup (Lebih Hemat)</h3>
                                <p class="hnr-house-web-pricing-subtext">Include Domain & Hosting 3 Tahun</p>
                            </div>
                            <div class="hnr-house-web-pricing-price">Rp 12.990.000</div>
                            <p style="color:#636363; font-family:'Poppins', sans-serif; font-size:12px; font-weight:600;">
                                Solusi lengkap untuk perusahaan besar &amp; instansi
                            </p>
                            <a href="{{ url('https://shop.hanara.id/product/paket-website-startup-lebih-hemat/ ') }}"
                                target="_blank" rel="noopener noreferrer" class="hnr-house-web-pricing-btn">Beli
                                Paket</a>
                        </div>

                        <div class="hnr-house-web-pricing-features">
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FREE Domain (.com) 1 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Hosting 3 Tahun</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>10GB Storage</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Server IIX</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited Bandwidth</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Email Account</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Unlimited POP3 Email</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FTP Access</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Tampilan Responsive</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SEO Friendly</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>SSL Lets Encrypt</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Home Page</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman About Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Galeri</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Contact Us</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Halaman Produk dan Service</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Toko Online</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Integrasi Payment Gateway</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Form Order</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Realtime Chatting</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Fitur Connect Whatsapp</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Analytic Tools</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>FREE Training Membuat Halaman/Artikel</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Google My Business</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Fans Page</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Create Instagram Account</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>BONUS Google Ads Rp.250.000,-</span>
                            </div>
                            <div class="hnr-house-web-pricing-feature">
                                <span class="hnr-pricing-check-icon"></span>
                                <span>Renewal Tahun Berikutnya Rp. 2.980.000/Tahun</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tools Section - Place this after package selection and before contact -->
            <div class="row mt-5 mb-5 reveal-section">
                <div class="col-12 text-center">
                    <h2 class="hnr-tools-title">
                        <span class="hnr-tools-title-orange">Tools</span> Yang Akan Mendukung
                        <span class="d-block">Website Anda</span>
                    </h2>

                    <p class="hnr-tools-description">
                        Untuk memastikan performa dan keamanan terbaik, website Anda didukung berbagai software profesional
                        di server kami. <br>
                        Kami menggunakan teknologi terkini seperti Nginx WebServer, WordPress, cPanel, SSL Let's Encrypt, WP
                        Accelerator, dan Fail2ban. <br>
                        Semua tools ini dirancang untuk memberikan:
                    </p>

                    <ul class="hnr-tools-list">
                        <li> Performa website yang cepat dan stabil</li>
                        <li> Pengelolaan mudah melalui cPanel</li>
                        <li> Keamanan optimal dari serangan siber</li>
                        <li> Dukungan SEO dan pengembangan berkelanjutan</li>
                    </ul>
                </div>
            </div>

            <div class="hnr-tools-container mb-5 reveal-section">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="hnr-tools-logos">
                            <!-- cPanel -->
                            <div class="hnr-tool-item">
                                <img src="{{ asset('assets/images/icon/cpanel.png') }}" alt="cPanel"
                                    class="hnr-tool-logo">
                            </div>

                            <!-- SSL Secured -->
                            <div class="hnr-tool-item">
                                <img src="{{ asset('assets/images/icon/ssl.png') }}" alt="SSL Secured"
                                    class="hnr-tool-logo">
                            </div>

                            <!-- WordPress -->
                            <div class="hnr-tool-item">
                                <img src="{{ asset('assets/images/icon/wordpress.png') }}" alt="WordPress"
                                    class="hnr-tool-logo">
                            </div>

                            <!-- Nginx -->
                            <div class="hnr-tool-item">
                                <img src="{{ asset('assets/images/icon/nginx.png') }}" alt="Nginx"
                                    class="hnr-tool-logo">
                            </div>

                            <!-- Let's Encrypt -->
                            <div class="hnr-tool-item">
                                <img src="{{ asset('assets/images/icon/enc.png') }}" alt="Let's Encrypt"
                                    class="hnr-tool-logo">
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
