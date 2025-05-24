@extends('layout.main')

@section('schema')
<!-- Contact Page Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ route('home') }}"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "Hubungi Kami",
      "item": "{{ route('contact-us') }}"
    }]
  },
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "PT Hanara Prima Solusindo",
    "image": "{{ asset('assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png') }}",
    "telephone": "+627367050202",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jl. Batang Hari, RT.011/RW.003, Nusa Indah",
      "addressLocality": "Bengkulu",
      "addressRegion": "Bengkulu",
      "postalCode": "38223",
      "addressCountry": "ID"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": -3.81233,
      "longitude": 102.29693
    },
    "openingHoursSpecification": [{
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "08:00",
      "closes": "17:00"
    }]
  }
}
</script>
@endsection

@section('container')
<!-- Breadcrumb -->
{{-- <nav aria-label="breadcrumb" class="mt-3">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
    </ol>
  </div>
</nav> --}}

<section class="contact-section">
    <div class="container">
      <h1 class="visually-hidden">Hubungi PT Hanara Prima Solusindo</h1>
      @include('components.contact')
      
      <!-- Map Section dengan proper heading -->
      <div class="map-section mt-5">
        <h2 class="map-title">Lokasi Kantor Kami</h2>
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1088071562257!2d102.29693!3d-3.81233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b18431b2b9c7%3A0x8a6d7f5183f7c773!2sJl.%20Batang%20Hari%2C%20Nusa%20Indah%2C%20Kec.%20Ratu%20Agung%2C%20Kota%20Bengkulu%2C%20Bengkulu%2038223!5e0!3m2!1sid!2sid!4v1715382540125!5m2!1sid!2sid" 
            width="100%" 
            height="400" 
            style="border:0; border-radius:10px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi PT Hanara Prima Solusindo">
          </iframe>
        </div>
        <div class="map-actions mt-3">
          <a href="https://maps.app.goo.gl/FTxacZPBbKNzovbX8" 
             target="_blank" 
             rel="noopener noreferrer"
             class="btn btn-submit">
            <i class="bi bi-geo-alt-fill"></i> Petunjuk Arah
          </a>
        </div>
      </div>
    </div>
</section>
@endsection