@extends('layout.main')

@section('page_title', 'Artikel & Berita - PT Hanara Prima Solusindo')
@section('meta_description', 'Kumpulan artikel, berita, dan kegiatan CSR PT Hanara Prima Solusindo')
@section('meta_keywords', 'artikel, berita, CSR, kegiatan perusahaan, PT Hanara Prima Solusindo')

@section('container')
<!-- Hero Section -->
<section class="hnr-articles-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="hnr-articles-hero-title">ARTIKEL & BERITA</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Articles Section -->
<section class="hnr-articles-main-section">
    <div class="container">
        <!-- Search and Filter Bar -->
        <div class="row mb-5">
            <div class="col-lg-8">
                <form action="{{ route('articles.index') }}" method="GET" class="hnr-articles-search-form">
                    <div class="input-group">
                        <input type="text" 
                               class="form-control hnr-search-input" 
                               placeholder="Cari artikel..." 
                               name="search"
                               value="{{ request('search') }}">
                        <button class="btn hnr-search-btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <select class="form-select hnr-category-filter" onchange="filterByCategory(this.value)">
                    <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>Semua Kategori</option>
                    <option value="solusi" {{ request('category') == 'solusi' ? 'selected' : '' }}>Solusi Teknologi Bisnis</option>
                    <option value="kasus" {{ request('category') == 'kasus' ? 'selected' : '' }}>Studi Kasus Klien</option>
                    <option value="tips" {{ request('category') == 'tips' ? 'selected' : '' }}>Tips & Panduan IT</option>
                    <option value="tech" {{ request('category') == 'tech' ? 'selected' : '' }}>Tren Teknologi</option>
                    <option value="hnr" {{ request('category') == 'hnr' ? 'selected' : '' }}>Layanan Hanara</option>
                    <option value="faq" {{ request('category') == 'faq' ? 'selected' : '' }}>FAQ Teknologi</option>
                </select>
            </div>
        </div>

        <!-- Articles Grid -->
        <div class="row">
            @forelse($articles as $article)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="hnr-article-card">
                    <div class="hnr-article-image">
                        @if($article->image)
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
                        @else
                            <img src="{{ asset('assets/images/default-article.jpg') }}" alt="{{ $article->title }}">
                        @endif
                        <div class="hnr-article-overlay">
                            <span class="hnr-article-category">
                                @switch($article->category)
                                    @case('solusi')
                                        Solusi Teknologi Bisnis
                                        @break
                                    @case('kasus')
                                        Studi Kasus Klien
                                        @break
                                    @case('tips')
                                        Tips & Panduan IT
                                        @break
                                    @case('tech')
                                        Tren Teknologi
                                        @break
                                    @case('hnr')
                                        Layanan Hanara
                                        @break
                                    @case('faq')
                                        FAQ Teknologi
                                        @break
                                    @default
                                        ARTIKEL
                                @endswitch
                            </span>
                        </div>
                    </div>
                    <div class="hnr-article-content">
                        <div class="hnr-article-date">
                            {{ strtoupper($article->published_at ? $article->published_at->translatedFormat('l, d M Y') : $article->created_at->translatedFormat('l, d M Y')) }}
                        </div>
                        <h3 class="hnr-article-title">
                            {{ Str::upper($article->title) }}
                        </h3>
                        <p class="hnr-article-excerpt">
                            {{ Str::limit($article->description, 150) }}
                        </p>
                        @if($article->link)
                        <a href="{{ $article->link }}" class="hnr-article-link" target="_blank" rel="noopener">
                            LANJUT BACA <i class="bi bi-arrow-right"></i>
                        </a>
                        @else
                        <a href="{{ route('articles.show', Str::slug($article->title) . '-' . $article->id) }}" class="hnr-article-link">
                            LANJUT BACA <i class="bi bi-arrow-right"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="hnr-no-articles">
                    <i class="bi bi-newspaper"></i>
                    <h3>Tidak Ada Artikel</h3>
                    <p>Belum ada artikel yang tersedia saat ini.</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($articles->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Articles pagination">
                    <ul class="pagination justify-content-center hnr-pagination">
                        {{-- Previous Page Link --}}
                        @if ($articles->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">‹</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $articles->previousPageUrl() }}" rel="prev">‹</a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($articles->links()->elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $articles->currentPage())
                                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($articles->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $articles->nextPageUrl() }}" rel="next">›</a></li>
                            <li class="page-item"><a class="page-link" href="{{ $articles->url($articles->lastPage()) }}">Last</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">›</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        @endif
    </div>
</section>

<script>
function filterByCategory(category) {
    let url = new URL(window.location.href);
    url.searchParams.set('category', category);
    if (category === 'all') {
        url.searchParams.delete('category');
    }
    window.location.href = url.toString();
}
</script>
@endsection