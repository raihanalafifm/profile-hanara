@extends('layout.main')

@section('container')
<section class="hnr-career-section">
    <div class="container">
      <!-- Header Section -->
      <div class="hnr-career-header">
        <h1 class="hnr-career-title">
          <span class="hnr-career-title-orange">JOIN OUR TEAM OF TALENTS</span>
          <span class="hnr-career-title-black">DISCOVER ROLES AND ELEVATE<br>YOUR CAREER TODAY.</span>
        </h1>
        <p class="hnr-career-subtitle">Let's grow, succeed, and move forward—together</p>
      </div>
  
      <!-- Career Banner Image -->
      <div class="hnr-career-banner">
        <img src="{{ asset('assets/images/gambar/career.png') }}" alt="Team Collaboration" class="hnr-career-banner-img">
      </div>
  
      <!-- Career Tagline -->
      <div class="hnr-career-tagline">
        <h2 class="hnr-career-tagline-text">Mari tumbuh dan berkolaborasi bersama talenta terbaik.</h2>
      </div>
  
      <!-- Job Listings Section -->
      <div class="hnr-career-jobs">
        @forelse($careers as $index => $career)
        <div class="hnr-job-card">
          <div class="hnr-job-header">
            <div class="hnr-job-title-container">
              <span class="hnr-job-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</span>
              <h3 class="hnr-job-title">{{ $career->position }}</h3>
            </div>
            <div class="hnr-job-tags">
              @if($career->type == 'Both' || $career->type == 'Full Time')
                <span class="hnr-job-tag hnr-tag-fulltime">Full Time</span>
              @endif
              @if($career->type == 'Both' || $career->type == 'Part Time')
                <span class="hnr-job-tag hnr-tag-parttime">Part Time</span>
              @endif
            </div>
            <button class="hnr-job-toggle {{ $index > 0 ? 'collapsed' : '' }}" aria-label="Toggle job details" data-target="job-{{ $career->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="hnr-job-details {{ $index > 0 ? 'collapsed' : '' }}" id="job-{{ $career->id }}">
            <div class="hnr-job-description">
              <h4 class="hnr-job-section-title">Description</h4>
              <p class="hnr-job-description-text">{{ $career->description }}</p>
              <div class="hnr-apply-button-container">
                <a href="{{ route('career.detail', $career->slug) }}" class="hnr-apply-button">
                  Apply this role 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="text-center py-5">
          <p class="text-muted">Belum ada lowongan tersedia saat ini.</p>
        </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection