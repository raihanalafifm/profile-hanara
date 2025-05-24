<!-- resources/views/components/contact.blade.php -->
<div class="row text-center mb-4">
    <div class="col-lg-12">
      <h2 class="contact-title"><span class="text-contact-orange">CONTACT</span> US</h2>
      <p class="contact-subtitle">Ada pertanyaan atau komentar? Kirimkan saja pesan kepada kami</p>
    </div>
</div>

<div class="row">
    <!-- Contact Info Column -->
    <div class="col-lg-5 mb-4">
      <div class="contact-info-box" itemscope itemtype="https://schema.org/LocalBusiness">
        <div class="contact-info-header">
          <h3 class="contact-info-title">Let's Talk</h3>
          <h4 class="contact-info-subtitle">Let's Get In Touch!</h4>
        </div>
        
        <div class="contact-details">
          <div class="contact-detail-item">
            <div class="contact-icon">
              <img src="{{ asset('assets/images/icon/Mail.png') }}" alt="Email Icon" width="40" height="40" loading="lazy">
            </div>
            <div class="contact-text">
              <a href="mailto:info@hanara.id" itemprop="email">info@hanara.id</a>
            </div>
          </div>
          
          <div class="contact-detail-item">
            <div class="contact-icon">
              <img src="{{ asset('assets/images/icon/Call.png') }}" alt="WhatsApp Icon" width="40" height="40" loading="lazy">
            </div>
            <div class="contact-text">
              <a href="https://wa.me/62897500805" rel="noopener noreferrer" target="_blank">0897-5000-805</a>
            </div>
          </div>
          
          <div class="contact-detail-item">
            <div class="contact-icon">
              <img src="{{ asset('assets/images/icon/Call2.png') }}" alt="Phone Icon" width="40" height="40" loading="lazy">
            </div>
            <div class="contact-text">
              <a href="tel:+627367050202" itemprop="telephone">(0736) 7050-202</a>
            </div>
          </div>
          
          <div class="contact-detail-item" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <div class="contact-icon">
              <img src="{{ asset('assets/images/icon/loc.png') }}" alt="Location Icon" width="40" height="40" loading="lazy">
            </div>
            <div class="contact-text">
              <span itemprop="streetAddress">Jl. Batang Hari, RT.011/RW.003, Nusa Indah</span>, 
              <span itemprop="addressLocality">Kec. Ratu Agung</span>, 
              <span itemprop="addressRegion">Kota Bengkulu, Bengkulu</span> 
              <span itemprop="postalCode">38223</span>
              <meta itemprop="addressCountry" content="ID">
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
        <form id="contactForm" class="contact-form" method="POST" action="#">
          @csrf
          
          <div class="row">
            <!-- Nama Anda -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="name">Nama Anda <span class="text-danger">*</span></label>
                <input type="text" 
                       class="form-control @error('name') is-invalid @enderror" 
                       id="name" 
                       name="name" 
                       placeholder="Contoh: John Doe" 
                       value="{{ old('name') }}"
                       required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            
            <!-- Nama Perusahaan -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="company">Nama Perusahaan</label>
                <input type="text" 
                       class="form-control @error('company') is-invalid @enderror" 
                       id="company" 
                       name="company" 
                       placeholder="Contoh: PT Hanara Prima Solusindo"
                       value="{{ old('company') }}">
                @error('company')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          
          <div class="row">
            <!-- Email -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="email" 
                       name="email" 
                       placeholder="Contoh: sales@hanara.id" 
                       value="{{ old('email') }}"
                       required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            
            <!-- Alamat -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" 
                       class="form-control @error('address') is-invalid @enderror" 
                       id="address" 
                       name="address" 
                       placeholder="Contoh: Jl. Merdeka No. 123, Jakarta"
                       value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          
          <div class="row">
            <!-- Nomor WhatsApp -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label for="whatsapp">Nomor WhatsApp</label>
                <input type="tel" 
                       class="form-control @error('whatsapp') is-invalid @enderror" 
                       id="whatsapp" 
                       name="whatsapp" 
                       placeholder="Contoh: 0812 3456 7890" 
                       pattern="[0-9\s\-\+\(\)]+"
                       value="{{ old('whatsapp') }}">
                @error('whatsapp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
            
            <!-- Waktu Dihubungi -->
            <div class="col-md-6 mb-3">
              <div class="form-group">
                <label>Kapan Anda bersedia dihubungi?</label>
                <div class="time-options">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" 
                           type="radio" 
                           name="preferred_time" 
                           id="time_morning" 
                           value="Pagi" 
                           {{ old('preferred_time', 'Pagi') == 'Pagi' ? 'checked' : '' }}>
                    <label class="form-check-label" for="time_morning">Pagi</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" 
                           type="radio" 
                           name="preferred_time" 
                           id="time_afternoon" 
                           value="Siang"
                           {{ old('preferred_time') == 'Siang' ? 'checked' : '' }}>
                    <label class="form-check-label" for="time_afternoon">Siang</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" 
                           type="radio" 
                           name="preferred_time" 
                           id="time_evening" 
                           value="Sore"
                           {{ old('preferred_time') == 'Sore' ? 'checked' : '' }}>
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
                <label for="message">Informasi Kebutuhan Anda <span class="text-danger">*</span></label>
                <textarea class="form-control @error('message') is-invalid @enderror" 
                          id="message" 
                          name="message" 
                          rows="5" 
                          placeholder="Tuliskan informasi kebutuhan Anda disini" 
                          required>{{ old('message') }}</textarea>
                @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          
          <!-- reCAPTCHA (optional but recommended for SEO and security) -->
          @if(config('services.recaptcha.site_key'))
          <div class="row mb-4">
            <div class="col-12">
              <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
              @error('g-recaptcha-response')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          @endif
          
          <!-- Submit Button -->
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-submit" id="submitBtn">
                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                <span class="btn-text">Kirim Pesan</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>

<!-- Success/Error Messages -->
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
  {{ session('error') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- JavaScript for Form Enhancement -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    
    // Form submission handling
    form.addEventListener('submit', function(e) {
        // Show loading state
        submitBtn.disabled = true;
        submitBtn.querySelector('.spinner-border').classList.remove('d-none');
        submitBtn.querySelector('.btn-text').textContent = 'Mengirim...';
    });
    
    // Phone number formatting
    const phoneInput = document.getElementById('whatsapp');
    phoneInput.addEventListener('input', function(e) {
        // Remove non-numeric characters except + and spaces
        let value = e.target.value.replace(/[^\d\s\+]/g, '');
        e.target.value = value;
    });
    
    // Auto-resize textarea
    const textarea = document.getElementById('message');
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
});
</script>

<!-- Optional: Add reCAPTCHA script if using -->
@if(config('services.recaptcha.site_key'))
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endif