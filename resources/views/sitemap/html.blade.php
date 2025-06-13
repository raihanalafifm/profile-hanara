@extends('layout.main')

@section('container')
    <style>
        /* Sitemap Styles */
        .sitemap-hero {
            background: linear-gradient(135deg, #FF6B00 0%, #FF8533 100%);
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .sitemap-hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .sitemap-content {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .sitemap-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sitemap-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .sitemap-section h3 {
            color: #FF6B00;
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sitemap-section h3 i {
            font-size: 24px;
        }

        .sitemap-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sitemap-links li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .sitemap-links li:last-child {
            border-bottom: none;
        }

        .sitemap-links a {
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .sitemap-links a:hover {
            color: #FF6B00;
            background-color: rgba(255, 107, 0, 0.05);
            transform: translateX(5px);
        }

        .sitemap-links a i {
            color: #FF6B00;
            font-size: 14px;
        }

        .dynamic-content {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            margin-top: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .dynamic-content h4 {
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .content-item {
            padding: 15px;
            border-left: 3px solid #FF6B00;
            margin-bottom: 15px;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .content-item:hover {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .content-item a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }

        .content-item a:hover {
            color: #FF6B00;
        }

        .content-meta {
            font-size: 0.85rem;
            color: #666;
            margin-top: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sitemap-hero {
                padding: 60px 0 40px;
            }

            .sitemap-content {
                padding: 40px 0;
            }

            .sitemap-section {
                padding: 20px;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="sitemap-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Peta Situs</h1>
                    <p class="lead mb-0">Navigasi mudah ke seluruh halaman di website kami</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sitemap Content -->
    <section class="sitemap-content">
        <div class="container">
            <div class="row">
                <!-- Static Pages -->
                @foreach ($pages as $category => $links)
                    <div class="col-lg-6 mb-4">
                        <div class="sitemap-section">
                            <h3>
                                @if ($category == 'Halaman Utama')
                                    <i class="bi bi-house-door-fill"></i>
                                @elseif($category == 'Layanan Zimbra')
                                    <i class="bi bi-envelope-fill"></i>
                                @elseif($category == 'Software House')
                                    <i class="bi bi-code-square"></i>
                                @elseif($category == 'Hardware & Infrastruktur')
                                    <i class="bi bi-hdd-network-fill"></i>
                                @elseif($category == 'Business Solution')
                                    <i class="bi bi-briefcase-fill"></i>
                                @endif
                                {{ $category }}
                            </h3>
                            <ul class="sitemap-links">
                                @foreach ($links as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}">
                                            <i class="bi bi-chevron-right"></i>
                                            {{ $link['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Dynamic Content -->
            <div class="dynamic-content">
                <div class="row">
                    <!-- Recent Articles -->
                    @if ($articles->count() > 0)
                        <div class="col-lg-4 mb-4">
                            <h4><i class="bi bi-newspaper"></i> Artikel Terbaru</h4>
                            @foreach ($articles as $article)
                                <div class="content-item">
                                    <a href="{{ route('articles.show', Str::slug($article->title) . '-' . $article->id) }}">
                                        {{ $article->title }}
                                    </a>
                                    <div class="content-meta">
                                        <i class="bi bi-calendar3"></i> {{ $article->published_at->format('d M Y') }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Open Careers -->
                    @if ($careers->count() > 0)
                        <div class="col-lg-4 mb-4">
                            <h4><i class="bi bi-briefcase"></i> Lowongan Kerja</h4>
                            @foreach ($careers as $career)
                                <div class="content-item">
                                    <a href="{{ route('career.detail', $career->slug) }}">
                                        {{ $career->position }}
                                    </a>
                                    <div class="content-meta">
                                        <i class="bi bi-geo-alt"></i> {{ ucfirst($career->type) }}
                                        @if ($career->status == 'open')
                                            <span class="badge bg-success ms-2">Open</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Motorola Products -->
                    @if ($products->count() > 0)
                        <div class="col-lg-4 mb-4">
                            <h4><i class="bi bi-broadcast"></i> Produk Motorola</h4>
                            @foreach ($products as $product)
                                <div class="content-item">
                                    <a href="{{ route('motorola.detail', $product->slug) }}">
                                        {{ $product->name }}
                                    </a>
                                    <div class="content-meta">
                                        <i class="bi bi-tag"></i> {{ $product->category }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <!-- Additional Info -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill"></i>
                        <strong>XML Sitemap:</strong> Untuk mesin pencari, silakan akses
                        <a href="{{ route('sitemap.xml') }}" target="_blank" class="alert-link">sitemap.xml</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
