@extends('layout.main')

@section('container')
<section class="contact-section">
    <div class="container">
      @include('components.contact')
        <h4 class="map-title">Lokasi Kami</h4>
            <iframe 
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1088071562257!2d102.29693!3d-3.81233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b18431b2b9c7%3A0x8a6d7f5183f7c773!2sJl.%20Batang%20Hari%2C%20Nusa%20Indah%2C%20Kec.%20Ratu%20Agung%2C%20Kota%20Bengkulu%2C%20Bengkulu%2038223!5e0!3m2!1sid!2sid!4v1715382540125!5m2!1sid!2sid" 
                 width="100%" 
                 height="250" 
                 style="border:0; border-radius:10px;" 
                 allowfullscreen="" 
                 loading="lazy" 
                 referrerpolicy="no-referrer-when-downgrade">
            </iframe>
         <div class="map-actions mt-2">
            <a href="https://maps.app.goo.gl/FTxacZPBbKNzovbX8" target="_blank" class="btn btn-submit">
              Petunjuk Arah
             </a>
        </div>
    </div>
  </section>
@endsection