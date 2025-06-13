@extends('layout.main')

@section('page_title', $article->title . ' - PT Hanara Prima Solusindo')
@section('meta_description', $article->description)
@section('meta_keywords', $article->category . ', artikel, PT Hanara Prima Solusindo')

@section('container')

    <!-- Article Content -->
    <section class="hnr-article-detail-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Back Button -->
                    <div class="mb-4">
                        <a href="{{ route('articles.index') }}" class="hnr-back-button">
                            <i class="bi bi-arrow-left"></i> Kembali ke Artikel
                        </a>
                    </div>

                    <!-- Article Header -->
                    <div class="hnr-article-header">
                        <span class="hnr-article-category-badge">
                            @switch($article->category)
                                @case('csr')
                                    CSR & LINGKUNGAN
                                @break

                                @case('news')
                                    BERITA
                                @break

                                @case('event')
                                    EVENT
                                @break

                                @case('tech')
                                    TEKNOLOGI
                                @break

                                @default
                                    ARTIKEL
                            @endswitch
                        </span>
                        <h1 class="hnr-article-detail-title">{{ $article->title }}</h1>
                        <div class="hnr-article-meta">
                            <span class="hnr-article-date">
                                <i class="bi bi-calendar3"></i>
                                {{ $article->published_at ? $article->published_at->translatedFormat('l, d F Y') : $article->created_at->translatedFormat('l, d F Y') }}
                            </span>
                            <span class="hnr-article-author">
                                <i class="bi bi-person"></i> {{ $article->user->name ?? 'admin' }}
                            </span>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    @if ($article->image)
                        <div class="hnr-featured-image">
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                        </div>
                    @endif

                    <!-- Article Body -->
                    <div class="hnr-article-body">
                        @if ($article->content)
                            {!! $article->content !!}
                        @else
                            <p>{{ $article->description }}</p>
                        @endif
                    </div>

                    <!-- Author Profile -->
                    @if ($article->user)
                        <div style="border-top: 1px solid #e5e5e5; padding-top: 2rem; margin-top: 3rem;">
                            <div style="display: flex; align-items: flex-start;">
                                <div style="margin-right: 1rem;">
                                    @if ($article->user->avatar)
                                        <img src="{{ asset('storage/' . $article->user->avatar) }}"
                                            alt="{{ $article->user->name }}"
                                            style="width: 64px; height: 64px; border-radius: 50%; object-fit: cover; border: 2px solid #f0f0f0;">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($article->user->name) }}&background=FF6B00&color=fff"
                                            alt="{{ $article->user->name }}"
                                            style="width: 64px; height: 64px; border-radius: 50%; object-fit: cover; border: 2px solid #f0f0f0;">
                                    @endif
                                </div>
                                <div style="flex: 1;">
                                    <h5 style="font-size: 1.1rem; font-weight: 600; color: #333; margin: 0 0 0.25rem 0;">
                                        {{ $article->user->name }}</h5>
                                    <p style="font-size: 0.95rem; color: #666; margin: 0 0 0.5rem 0;">
                                        {{ $article->user->position ?: 'Penulis' }}</p>
                                    @if ($article->user->bio)
                                        <p style="font-size: 0.9rem; color: #555; line-height: 1.6; margin: 0;">
                                            {{ $article->user->bio }}</p>
                                    @else
                                        <p style="font-size: 0.9rem; color: #555; line-height: 1.6; margin: 0;">
                                            Penulis artikel di PT Hanara Prima Solusindo. Memiliki ketertarikan dalam
                                            teknologi informasi dan solusi digital untuk bisnis.
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- <!-- Share Buttons -->
                <div class="hnr-article-share">
                    <h5>Bagikan Artikel:</h5>
                    <div class="hnr-share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           target="_blank" class="hnr-share-btn facebook" rel="noopener">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($article->title) }}" 
                           target="_blank" class="hnr-share-btn twitter" rel="noopener">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . request()->url()) }}" 
                           target="_blank" class="hnr-share-btn whatsapp" rel="noopener">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                           target="_blank" class="hnr-share-btn linkedin" rel="noopener">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    @if ($relatedArticles->count() > 0)
        <section class="hnr-related-articles">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="hnr-related-title">Artikel Terkait</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedArticles as $related)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="hnr-article-card">
                                <div class="hnr-article-image">
                                    @if ($related->image)
                                        <img src="{{ Storage::url($related->image) }}" alt="{{ $related->title }}">
                                    @else
                                        <img src="{{ asset('assets/images/icon/icon hanara.png') }}"
                                            alt="{{ $related->title }}">
                                    @endif
                                </div>
                                <div class="hnr-article-content">
                                    <div class="hnr-article-date">
                                        {{ strtoupper($related->published_at ? $related->published_at->translatedFormat('l, d M Y') : $related->created_at->translatedFormat('l, d M Y')) }}
                                    </div>
                                    <h3 class="hnr-article-title">
                                        {{ Str::upper($related->title) }}
                                    </h3>
                                    <p class="hnr-article-excerpt">
                                        {{ Str::limit($related->description, 100) }}
                                    </p>
                                    @if ($related->link)
                                        <a href="{{ $related->link }}" class="hnr-article-link" target="_blank"
                                            rel="noopener">
                                            LANJUT BACA <i class="bi bi-arrow-right"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('articles.show', Str::slug($related->title) . '-' . $related->id) }}"
                                            class="hnr-article-link">
                                            LANJUT BACA <i class="bi bi-arrow-right"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <style>
        /* Related Articles Section - Updated for Better Proportions */
        .hnr-related-articles {
            background-color: #f9f9fb;
            padding: 40px 0;
            /* Reduced from 60px */
        }

        .hnr-related-title {
            font-size: 24px;
            /* Reduced from 28px */
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            /* Reduced from 30px */
            text-align: center;
        }

        /* Article Card - More Compact Design */
        .hnr-related-articles .hnr-article-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
        }

        .hnr-related-articles .hnr-article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        /* Article Image - Smaller Height */
        .hnr-related-articles .hnr-article-image {
            position: relative;
            height: 180px;
            /* Reduced from 250px */
            overflow: hidden;
        }

        .hnr-related-articles .hnr-article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hnr-related-articles .hnr-article-card:hover .hnr-article-image img {
            transform: scale(1.1);
        }

        /* Article Content - More Compact */
        .hnr-related-articles .hnr-article-content {
            padding: 20px;
            /* Reduced from 25px */
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .hnr-related-articles .hnr-article-date {
            color: #ff6700;
            font-size: 12px;
            /* Reduced from 14px */
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .hnr-related-articles .hnr-article-title {
            font-size: 16px;
            /* Reduced from 20px */
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
            line-height: 1.3;
            min-height: 42px;
            /* Reduced from 56px */
        }

        .hnr-related-articles .hnr-article-excerpt {
            color: #666;
            font-size: 14px;
            /* Reduced from 15px */
            line-height: 1.5;
            margin-bottom: 15px;
            flex: 1;
        }

        .hnr-related-articles .hnr-article-link {
            display: inline-flex;
            align-items: center;
            color: #ff6700;
            font-size: 13px;
            /* Reduced from 14px */
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .hnr-related-articles .hnr-article-link:hover {
            color: #ff4500;
        }

        .hnr-related-articles .hnr-article-link i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .hnr-related-articles .hnr-article-link:hover i {
            transform: translateX(5px);
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .hnr-related-articles {
                padding: 35px 0;
            }

            .hnr-related-title {
                font-size: 22px;
                margin-bottom: 20px;
            }

            .hnr-related-articles .hnr-article-image {
                height: 160px;
            }

            .hnr-related-articles .hnr-article-title {
                font-size: 15px;
                min-height: auto;
            }
        }

        @media (max-width: 767px) {
            .hnr-related-articles {
                padding: 30px 0;
            }

            .hnr-related-title {
                font-size: 20px;
            }

            .hnr-related-articles .hnr-article-image {
                height: 150px;
            }

            .hnr-related-articles .hnr-article-content {
                padding: 15px;
            }

            .hnr-related-articles .hnr-article-title {
                font-size: 14px;
            }

            .hnr-related-articles .hnr-article-excerpt {
                font-size: 13px;
            }
        }

        /* Dark Mode Support for Related Articles */
        @media (prefers-color-scheme: dark) {
            .hnr-related-articles {
                background-color: #1a1a1a;
            }

            .hnr-related-title {
                color: #e0e0e0;
            }

            .hnr-related-articles .hnr-article-card {
                background-color: #232323;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            }

            .hnr-related-articles .hnr-article-card:hover {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            }

            .hnr-related-articles .hnr-article-title {
                color: #e0e0e0;
            }

            .hnr-related-articles .hnr-article-excerpt {
                color: #b0b0b0;
            }
        }
    </style>
@endsection
