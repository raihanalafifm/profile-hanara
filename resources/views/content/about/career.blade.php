@extends('layout.main')

@section('container')
    <section class="hnr-career-section">
        <div class="container ">
            <!-- Header Section dengan H1 untuk SEO -->
            <div class="hnr-career-header reveal-section">
                <h1 class="hnr-career-title">
                    <span class="hnr-career-title-orange">JOIN OUR TEAM OF TALENTS</span>
                    <span class="hnr-career-title-black">DISCOVER ROLES AND ELEVATE<br>YOUR CAREER TODAY.</span>
                </h1>
                <p class="hnr-career-subtitle">Let's grow, succeed, and move forward—together</p>
            </div>

            <!-- Career Banner Image dengan alt text -->
            <div class="hnr-career-banner reveal-section">
                <img src="{{ asset('assets/images/gambar/career.png') }}"
                    alt="Bergabung dengan Tim IT PT Hanara Prima Solusindo" class="hnr-career-banner-img" width="1200"
                    height="400" loading="eager">
            </div>

            <!-- Career Tagline -->
            <div class="hnr-career-tagline reveal-section">
                <h2 class="hnr-career-tagline-text">Mari tumbuh dan berkolaborasi bersama talenta terbaik.</h2>
            </div>

            <!-- Job Listings Section dengan semantic HTML -->
            <div class="hnr-career-jobs reveal-section">
                @forelse($careers as $index => $career)
                    <article class="hnr-job-card" itemscope itemtype="https://schema.org/JobPosting">
                        <div class="hnr-job-header">
                            <div class="hnr-job-title-container">
                                <span class="hnr-job-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</span>
                                <h3 class="hnr-job-title" itemprop="title">{{ $career->position }}</h3>
                                <!-- Status Badge -->
                                <span class="hnr-job-status-badge {{ $career->status_badge_class }}">
                                    <span class="hnr-status-icon">{{ $career->status_icon }}</span>
                                    <span class="hnr-status-text">{{ $career->status_label }}</span>
                                </span>
                            </div>
                            <div class="hnr-job-tags">
                                @if ($career->type == 'Both' || $career->type == 'Full Time')
                                    <span class="hnr-job-tag hnr-tag-fulltime" itemprop="employmentType">Full Time</span>
                                @endif
                                {{-- @if ($career->type == 'Both' || $career->type == 'Part Time')
                                    <span class="hnr-job-tag hnr-tag-parttime" itemprop="employmentType">Part Time</span>
                                @endif --}}
                            </div>
                            <button class="hnr-job-toggle {{ $index > 0 ? 'collapsed' : '' }}"
                                aria-label="Toggle job details" data-target="job-{{ $career->id }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                        </div>
                        <div class="hnr-job-details {{ $index > 0 ? 'collapsed' : '' }}" id="job-{{ $career->id }}">
                            <div class="hnr-job-description">
                                <h4 class="hnr-job-section-title">Description</h4>
                                <p class="hnr-job-description-text" itemprop="description">{{ $career->description }}</p>
                                <div class="hnr-apply-button-container">
                                    @if ($career->status === 'open')
                                        <a href="{{ route('career.detail', $career->slug) }}" class="hnr-apply-button"
                                            itemprop="url">
                                            Apply this role
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg>
                                        </a>
                                    @else
                                        <span class="hnr-apply-button-disabled">
                                            This position is {{ $career->status_label }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <meta itemprop="datePosted" content="{{ $career->created_at->toIso8601String() }}">
                        <div itemprop="hiringOrganization" itemscope itemtype="https://schema.org/Organization">
                            <meta itemprop="name" content="PT Hanara Prima Solusindo" />
                            <meta itemprop="sameAs" content="https://hanara.id" />
                            <meta itemprop="logo"
                                content="{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}" />
                        </div>
                        <div itemprop="jobLocation" itemscope itemtype="https://schema.org/Place">
                            <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                <meta itemprop="streetAddress" content="Jl. Sutoyo No.8, Tanah Patah" />
                                <meta itemprop="addressLocality" content="Kec. Ratu Agung" />
                                <meta itemprop="addressRegion" content="Kota Bengkulu" />
                                <meta itemprop="postalCode" content="38224" />
                                <meta itemprop="addressCountry" content="ID" />
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="text-center py-5">
                        <p class="text-muted">Belum ada lowongan tersedia saat ini. Silakan cek kembali nanti.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
