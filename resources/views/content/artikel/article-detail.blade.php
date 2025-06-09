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
                                <i class="bi bi-person"></i> Admin
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
@endsection
