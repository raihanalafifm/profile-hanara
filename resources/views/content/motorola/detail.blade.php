@extends('layout.main')

@section('container')
    <section class="hnr-motorola-detail-section">
        <div class="container reveal-section">

            <div class="hnr-back-link-container">
                <a href="{{ route('motorola') }}" class="hnr-back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    Kembali
                </a>
            </div>

            <div class="row">
                <!-- Product Image Column -->
                <div class="col-lg-5 mb-4">
                    <div class="hnr-product-image-container">
                        @if ($product->image)
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                class="hnr-product-main-image">
                        @else
                            <img src="{{ asset('assets/images/gambar/PRODUK MOTOROLA/default.png') }}"
                                alt="{{ $product->name }}" class="hnr-product-main-image">
                        @endif

                        <!-- Category Badge -->
                        <span class="hnr-product-category-badge">{{ $product->category }}</span>
                    </div>
                </div>

                <!-- Product Info Column -->
                <div class="col-lg-7">
                    <div class="hnr-product-info">
                        <h1 class="hnr-product-title">{{ $product->name }}</h1>

                        @if ($product->model_number)
                            <p class="hnr-product-model">Model: {{ $product->model_number }}</p>
                        @endif

                        <div class="hnr-product-type-badges">
                            <span class="badge bg-primary">{{ $product->type }}</span>
                            <span class="badge bg-info">{{ $product->category }}</span>
                        </div>

                        {{-- @if ($product->price)
          <div class="hnr-product-price">
            <h3>Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
          </div>
          @endif --}}

                        <div class="hnr-product-description">
                            <h4>Deskripsi Produk</h4>
                            <p>{{ $product->description ?: 'Deskripsi produk belum tersedia.' }}</p>
                        </div>

                        <div class="hnr-product-actions">
                            <a href="#hubungi" class="hnr-whatsapp-button">
                                <i class="bi bi-telephone-fill"></i> Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specifications Section -->
            @if ($product->specifications && count($product->specifications) > 0)
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="hnr-specifications-section">
                            <h3 class="hnr-section-title">Spesifikasi Teknis</h3>
                            <div class="hnr-specifications-table">
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach ($product->specifications as $key => $value)
                                            <tr>
                                                <td class="spec-label">{{ $key }}</td>
                                                <td class="spec-value">{{ $value }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Related Products Section -->
            @if ($relatedProducts->count() > 0)
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="hnr-section-title">Produk Terkait</h3>
                    </div>
                    @foreach ($relatedProducts as $related)
                        <div class="col-6 col-md-3 mb-4">
                            <div class="hnr-related-product-card">
                                <div class="hnr-related-product-image">
                                    @if ($related->image)
                                        <img src="{{ Storage::url($related->image) }}" alt="{{ $related->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/gambar/PRODUK MOTOROLA/default.png') }}"
                                            alt="{{ $related->name }}">
                                    @endif
                                </div>
                                <h4 class="hnr-related-product-title">{{ $related->name }}</h4>
                                <a href="{{ route('motorola.detail', $related->slug) }}" class="hnr-related-product-link">
                                    Lihat Detail <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
            @endif
            <div style="margin-top: 80px" id="hubungi">
                @include('components.contact')
            </div>
        </div>
    </section>
@endsection
