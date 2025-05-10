@extends('layout.main')

@section('container')
<section class="contact-section">
    <div class="container">
      <!-- Header -->
      <div class="row text-center mb-4">
        <div class="col-lg-12">
          <h1 class="contact-title"><span class="text-contact-orange">CONTACT</span> US</h1>
          <p class="contact-subtitle">Ada pertanyaan atau komentar? Kirimkan saja pesan kepada kami</p>
        </div>
      </div>
      
      <div class="row">
        <!-- Contact Info Column -->
        <div class="col-lg-5 mb-4">
          <div class="contact-info-box">
            <div class="contact-info-header">
              <h2 class="contact-info-title">Let's Talk</h2>
              <h3 class="contact-info-subtitle">Let's Get In Touch!</h3>
            </div>
            
            <div class="contact-details">
              <div class="contact-detail-item">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/icon/Mail.png') }}" alt="Email">
                </div>
                <div class="contact-text">
                  <a href="mailto:info@hanara.id">info@hanara.id</a>
                </div>
              </div>
              
              <div class="contact-detail-item">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/icon/Call.png') }}" alt="WhatsApp">
                </div>
                <div class="contact-text">
                  <a href="https://wa.me/62897500805">0897-5000-805</a>
                </div>
              </div>
              
              <div class="contact-detail-item">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/icon/Call2.png') }}" alt="Phone">
                </div>
                <div class="contact-text">
                  <a href="tel:+627367050202">(0736) 7050-202</a>
                </div>
              </div>
              
              <div class="contact-detail-item">
                <div class="contact-icon">
                  <img src="{{ asset('assets/images/icon/loc.png') }}" alt="Location">
                </div>
                <div class="contact-text">
                  Jl. Batang Hari, RT.011/RW.003, Nusa Indah, Kec. Ratu Agung, Kota Bengkulu, Bengkulu 38223
                </div>
              </div>
            </div>
            
            <!-- Background Gradient Elements -->
            <div class="contact-bg-circle"></div>
          </div>
        </div>
        
        <!-- Contact Form Column -->
        <div class="col-lg-7">
          <div class="contact-form-container">
            <form id="contactForm" class="contact-form">
              
              <div class="row">
                <!-- Nama Anda -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="name">Nama Anda</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Contoh: John Doe" required>
                  </div>
                </div>
                
                <!-- Nama Perusahaan -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="company">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Contoh: PT Hanara Prima Solusindo">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <!-- Email -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Contoh: sales@hanara.id" required>
                  </div>
                </div>
                
                <!-- Alamat -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Contoh: Jl. Merdeka No. 123, Jakarta">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <!-- Nomor WhatsApp -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Contoh: 0812 3456 7890">
                  </div>
                </div>
                
                <!-- Waktu Dihubungi -->
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <label>Kapan Anda bersedia dihubungi?</label>
                    <div class="time-options">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="time_morning" value="Pagi" checked>
                        <label class="form-check-label" for="time_morning">Pagi</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="time_afternoon" value="Siang">
                        <label class="form-check-label" for="time_afternoon">Siang</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="time_evening" value="Sore">
                        <label class="form-check-label" for="time_evening">Sore</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Informasi Kebutuhan -->
              <div class="row mb-4">
                <div class="col-12">
                  <div class="form-group">
                    <label for="message">Informasi Kebutuhan Anda</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tuliskan informasi kebutuhan Anda disini"></textarea>
                  </div>
                </div>
              </div>
              
              <!-- Submit Button -->
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
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