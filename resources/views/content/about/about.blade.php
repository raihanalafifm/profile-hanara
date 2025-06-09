@extends('layout.main')


@section('container')
    <section class="about-page-section">
        <div class="container">
            <!-- Header dengan H1 untuk SEO -->
            <div class="row text-center mb-5 reveal-section">
                <div class="col-lg-12">
                    <div class="about-page-header">
                        <h1 class="about-page-title"><span class="about-orange">PT</span> HANARA<br>PRIMA SOLUSINDO</h1>
                        <p class="about-page-tagline">Your Partner for Smarter IT Solution.</p>
                    </div>
                </div>
            </div>

            <!-- Team Image dengan alt text SEO -->
            <div class="row justify-content-center mb-5 reveal-section">
                <div class="col-lg-10">
                    <div class="about-team-image">
                        <img src="{{ asset('assets/images/gambar/bw-meet.png') }}"
                            alt="Tim PT Hanara Prima Solusindo - IT Solution Provider" class="img-fluid rounded"
                            width="1000" height="600" loading="eager">
                    </div>
                </div>
            </div>

            <!-- About Us Text Section dengan semantic HTML -->
            <div class="row mb-5 reveal-section">
                <div class="col-lg-3">
                    <h2 class="about-section-title">About Us</h2>
                </div>
                <div class="col-lg-9">
                    <div class="about-description">
                        <p> <strong> Hanara Prima Solusindo (Hanara) </strong> adalah perusahaan penyedia solusi IT yang
                            berfokus pada pengembangan sistem berbasis kebutuhan nyata di lapangan.
                        <p>
                            Kami berkomitmen untuk membantu perusahaan meningkatkan efektivitas dan produktivitas melalui
                            solusi teknologi yang adaptif, efisien, dan berkelanjutan.
                        </p>
                        <p>Kami percaya bahwa teknologi informasi bukan sekadar alat, melainkan mitra strategis dalam
                            menghadapi tantangan bisnis di era digital.
                        </p>
                        <p>Didukung oleh tim profesional yang berpengalaman di bidang infrastruktur, pengembangan software,
                            dan layanan kreatif digital, Hanara hadir untuk membangun solusi yang relevan dan berdampak
                            nyata bagi setiap klien.
                        </p>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Section -->
            <div class="row mb-5 reveal-section">
                <div class="col-lg-3">
                    <h2 class="about-section-title">Visi</h2>
                </div>
                <div class="col-lg-9">
                    <div class="about-description">
                        <p>Menjadi mitra terpercaya dalam menyediakan solusi teknologi yang inovatif dan berdampak, demi
                            mendukung pertumbuhan dan keberhasilan bisnis pelanggan.</p>
                    </div>
                </div>
            </div>

            <!-- Mission Section dengan structured data -->
            <div class="row mb-5 reveal-section">
                <div class="col-lg-3">
                    <h2 class="about-section-title">Misi</h2>
                </div>
                <div class="col-lg-9">
                    <!-- Mission Cards dengan semantic HTML -->
                    <div class="row mission-cards">
                        @php
                            $missions = [
                                [
                                    'number' => '01',
                                    'title' => 'Menyediakan Layanan Berkualitas Tinggi',
                                    'description' =>
                                        'Kami menghadirkan sistem dan platform kolaborasi yang efisien, aman, dan fleksibel untuk menunjang produktivitas kerja di berbagai sektor.',
                                ],
                                [
                                    'number' => '02',
                                    'title' => 'Membangun Solusi Bisnis yang Inovatif',
                                    'description' =>
                                        'Kami merancang solusi berbasis teknologi seperti email server, cloud, dan tools kolaborasi yang mudah digunakan, andal, dan sesuai dengan kebutuhan bisnis modern.',
                                ],
                                [
                                    'number' => '03',
                                    'title' => 'Menjadi Mitra Transformasi Digital',
                                    'description' =>
                                        'Solusi email server yang handal, aman, dan mudah digunakan, untuk memastikan komunikasi bisnis lancar tanpa hambatan.',
                                ],
                                [
                                    'number' => '04',
                                    'title' => 'Mengedepankan Adaptasi Teknologi Open-Source',
                                    'description' =>
                                        'Kami mengintegrasikan teknologi terbuka (open-source) yang hemat biaya dan mudah dikustomisasi agar solusi kami lebih fleksibel dan berdaya guna.',
                                ],
                                [
                                    'number' => '05',
                                    'title' => 'Membangun Tim Internal yang Tangguh dan Kolaboratif',
                                    'description' =>
                                        'Kami percaya kekuatan solusi dimulai dari tim yang solid. Hanara terus berinvestasi dalam pengembangan SDM dan budaya kerja kolaboratif.',
                                ],
                                // ... tambahkan misi lainnya
                            ];
                        @endphp

                        @foreach ($missions as $index => $mission)
                            <div class="col-md-6 mb-4 {{ $index == 4 ? 'offset-md-3' : '' }}">
                                <article class="mission-card">
                                    <div class="mission-icon orange-bg">
                                        <span class="mission-number">{{ $mission['number'] }}</span>
                                    </div>
                                    <h3 class="mission-title">{{ $mission['title'] }}</h3>
                                    <p class="mission-text">{{ $mission['description'] }}</p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
