<!-- resources/views/components/contact.blade.php -->
<div class="row text-center mb-4">
    <div class="col-lg-12">
        <h2 class="contact-title"><span class="text-contact-orange">CONTACT</span> US</h2>
        <p class="contact-subtitle">Silakan isi formulir berikut, tim kami akan menghubungi Anda</p>
    </div>
</div>

<div class="row">
    <!-- Contact Info Column -->
    <div class="col-lg-5 mb-4">
        <div class="contact-info-box" itemscope itemtype="https://schema.org/LocalBusiness">
            <div class="contact-info-header">
                <h3 class="contact-info-title">Hubungi Kami Sekarang</h3>
                <h4 class="contact-info-subtitle">Tim Hanara siap mendengarkan dan memberikan solusi terbaik untuk Anda.
                </h4>
            </div>

            <div class="contact-details">
                <div class="contact-detail-item">
                    <div class="contact-icon">
                        <img src="{{ asset('assets/images/icon/Mail.png') }}" alt="Email Icon" width="40"
                            height="40" loading="lazy">
                    </div>
                    <div class="contact-text">
                        <a href="mailto:info@hanara.id" itemprop="email">info@hanara.id</a>
                    </div>
                </div>

                <div class="contact-detail-item">
                    <div class="contact-icon">
                        <img src="{{ asset('assets/images/icon/Call.png') }}" alt="WhatsApp Icon" width="40"
                            height="40" loading="lazy">
                    </div>
                    <div class="contact-text">
                        <a href="https://wa.me/62897500805" rel="noopener noreferrer" target="_blank">0897-5000-805</a>
                    </div>
                </div>

                <div class="contact-detail-item">
                    <div class="contact-icon">
                        <img src="{{ asset('assets/images/icon/Call2.png') }}" alt="Phone Icon" width="40"
                            height="40" loading="lazy">
                    </div>
                    <div class="contact-text">
                        <a href="tel:+627367050202" itemprop="telephone">(0736) 7050-202</a>
                    </div>
                </div>

                <div class="contact-detail-item" itemprop="address" itemscope
                    itemtype="https://schema.org/PostalAddress">
                    <div class="contact-icon">
                        <img src="{{ asset('assets/images/icon/loc.png') }}" alt="Location Icon" width="40"
                            height="40" loading="lazy">
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
            <form id="contactForm" class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <div class="row">
                    <!-- Nama Anda -->
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="name">Nama Anda <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" placeholder="Contoh: John Doe" value="{{ old('name') }}"
                                required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Nama Perusahaan -->
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="company">Nama Perusahaan <small><span style=" color: grey "> (optional)
                                    </span></small></label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror"
                                id="company" name="company" placeholder="Contoh: PT Hanara Prima Solusindo"
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
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Contoh: sales@hanara.id"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="address">Alamat <small><span style=" color: grey "> (optional)
                                    </span></small></label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                id="address" name="address" placeholder="Contoh: Jl. Merdeka No. 123, Jakarta"
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
                            <label for="whatsapp">Nomor WhatsApp <small><span style=" color: grey "> (optional)
                                    </span></small></label>
                            <input type="tel" class="form-control @error('whatsapp') is-invalid @enderror"
                                id="whatsapp" name="whatsapp" placeholder="Contoh: 0812 3456 7890"
                                pattern="[0-9\s\-\+\(\)]+" value="{{ old('whatsapp') }}">
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
                                    <input class="form-check-input" type="radio" name="preferred_time"
                                        id="time_morning" value="Pagi"
                                        {{ old('preferred_time', 'Pagi') == 'Pagi' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="time_morning">Pagi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="preferred_time"
                                        id="time_afternoon" value="Siang"
                                        {{ old('preferred_time') == 'Siang' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="time_afternoon">Siang</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="preferred_time"
                                        id="time_evening" value="Sore"
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
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                placeholder="Tuliskan informasi kebutuhan Anda disini" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- reCAPTCHA (optional but recommended for SEO and security) -->
                {{-- @if (config('services.recaptcha.site_key'))
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}">
                            </div>
                            @error('g-recaptcha-response')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                @endif --}}

                <!-- Submit Button -->
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-submit" id="submitBtn">
                            <span class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                            <span class="btn-text">Kirim Pesan</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-modal-content">
            <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x"></i>
            </button>
            <div class="modal-body text-center p-5">
                <!-- Success Animation -->
                <div class="success-checkmark">
                    <div class="check-icon">
                        <span class="icon-line line-tip"></span>
                        <span class="icon-line line-long"></span>
                        <div class="icon-circle"></div>
                        <div class="icon-fix"></div>
                    </div>
                </div>

                <!-- Success Message -->
                <h2 class="success-title mt-4 mb-3">Terima Kasih!</h2>
                <p class="success-message mb-4">
                    Pesan berhasil dikirim, tim Kami akan segera menghubungi Anda.
                </p>

                <!-- Contact Info -->
                <div class="contact-info-success">
                    <p class="mb-2">Untuk respon lebih cepat, Anda dapat menghubungi kami melalui:</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="https://wa.me/62897500805" class="btn btn-success-whatsapp" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:+627367050202" class="btn btn-success-phone">
                            <i class="bi bi-telephone-fill"></i> Telepon
                        </a>
                    </div>
                </div>

                <!-- Close Button -->
                <button type="button" class="btn btn-primary-custom mt-4" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content error-modal-content">
            <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x"></i>
            </button>
            <div class="modal-body text-center p-5">
                <!-- Error Animation -->
                <div class="error-icon-container">
                    <div class="error-icon">
                        <span class="error-line error-left"></span>
                        <span class="error-line error-right"></span>
                        <div class="error-circle"></div>
                    </div>
                </div>

                <!-- Error Message -->
                <h2 class="error-title mt-4 mb-3">Oops!</h2>
                <p class="error-message mb-4">
                    {{ session('error') ?: 'Maaf, terjadi kesalahan saat mengirim pesan Anda. Silakan coba lagi atau hubungi kami langsung.' }}
                </p>

                <!-- Alternative Contact -->
                <div class="contact-info-error">
                    <p class="mb-2">Anda dapat menghubungi kami langsung melalui:</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="mailto:info@hanara.id" class="btn btn-error-email">
                            <i class="bi bi-envelope-fill"></i> Email
                        </a>
                        <a href="https://wa.me/62897500805" class="btn btn-error-whatsapp" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Close Button -->
                <button type="button" class="btn btn-secondary-custom mt-4" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Styles -->
<style>
    /* Fix Modal Position and Z-Index */
    .modal {
        position: fixed !important;
        top: 0;
        left: 0;
        z-index: 9999 !important;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal-backdrop {
        position: fixed !important;
        top: 0;
        left: 0;
        z-index: 9998 !important;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 1.75rem auto;
        pointer-events: none;
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - (1.75rem * 2));
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        outline: 0;
    }

    /* Ensure modal is above everything */
    body.modal-open {
        overflow: hidden;
        padding-right: 0 !important;
    }

    /* Modal Styles */
    .success-modal-content,
    .error-modal-content {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 0 auto;
    }

    .success-modal-content {
        background: linear-gradient(135deg, #fff5f0 0%, #ffe0cc 100%);
    }

    .error-modal-content {
        background: linear-gradient(135deg, #ffeaa7 0%, #fab1a0 100%);
    }

    /* Add close button */
    .modal-close-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #999;
        cursor: pointer;
        z-index: 10;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .modal-close-btn:hover {
        background-color: rgba(0, 0, 0, 0.1);
        color: #333;
    }

    /* Success Checkmark Animation */
    .success-checkmark {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        position: relative;
    }

    .check-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #FF6B00;
    }

    .check-icon::before {
        top: 3px;
        left: -2px;
        width: 30px;
        transform-origin: 100% 50%;
        border-radius: 100px 0 0 100px;
    }

    .check-icon::after {
        top: 0;
        left: 30px;
        width: 60px;
        transform-origin: 0 50%;
        border-radius: 0 100px 100px 0;
        animation: rotate-circle 4.25s ease-in;
    }

    .check-icon::before,
    .check-icon::after {
        content: '';
        height: 100px;
        position: absolute;
        background: #fff5f0;
        transform: rotate(-45deg);
    }

    .icon-line {
        height: 5px;
        background-color: #FF6B00;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
    }

    .icon-line.line-tip {
        top: 46px;
        left: 14px;
        width: 25px;
        transform: rotate(45deg);
        animation: icon-line-tip 0.75s;
    }

    .icon-line.line-long {
        top: 38px;
        right: 8px;
        width: 47px;
        transform: rotate(-45deg);
        animation: icon-line-long 0.75s;
    }

    .icon-circle {
        top: -4px;
        left: -4px;
        z-index: 10;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        position: absolute;
        box-sizing: content-box;
        border: 4px solid rgba(255, 107, 0, .5);
    }

    .icon-fix {
        top: 8px;
        width: 5px;
        left: 26px;
        z-index: 1;
        height: 85px;
        position: absolute;
        transform: rotate(-45deg);
        background-color: #fff5f0;
    }

    /* Error Icon */
    .error-icon-container {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        position: relative;
    }

    .error-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        border: 4px solid #f44336;
        animation: error-icon-pulse 1s ease-in-out;
    }

    .error-line {
        position: absolute;
        height: 5px;
        width: 47px;
        background-color: #f44336;
        display: block;
        top: 37px;
        border-radius: 2px;
    }

    .error-line.error-left {
        transform: rotate(45deg);
        left: 17px;
        animation: error-line-left 0.5s;
    }

    .error-line.error-right {
        transform: rotate(-45deg);
        right: 16px;
        animation: error-line-right 0.5s;
    }

    .error-circle {
        top: -4px;
        left: -4px;
        z-index: 10;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        position: absolute;
        box-sizing: content-box;
        border: 4px solid rgba(244, 67, 54, .5);
    }

    /* Animations */
    @keyframes rotate-circle {
        0% {
            transform: rotate(-45deg);
        }

        5% {
            transform: rotate(-45deg);
        }

        12% {
            transform: rotate(-405deg);
        }

        100% {
            transform: rotate(-405deg);
        }
    }

    @keyframes icon-line-tip {
        0% {
            width: 0;
            left: 1px;
            top: 19px;
        }

        54% {
            width: 0;
            left: 1px;
            top: 19px;
        }

        70% {
            width: 50px;
            left: -8px;
            top: 37px;
        }

        84% {
            width: 17px;
            left: 21px;
            top: 48px;
        }

        100% {
            width: 25px;
            left: 14px;
            top: 45px;
        }
    }

    @keyframes icon-line-long {
        0% {
            width: 0;
            right: 46px;
            top: 54px;
        }

        65% {
            width: 0;
            right: 46px;
            top: 54px;
        }

        84% {
            width: 55px;
            right: 0px;
            top: 35px;
        }

        100% {
            width: 47px;
            right: 8px;
            top: 38px;
        }
    }

    @keyframes error-icon-pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes error-line-left {
        0% {
            width: 0;
        }

        100% {
            width: 47px;
        }
    }

    @keyframes error-line-right {
        0% {
            width: 0;
        }

        100% {
            width: 47px;
        }
    }

    /* Text Styles */
    .success-title {
        color: #FF6B00;
        font-weight: 700;
        font-size: 2.5rem;
    }

    .error-title {
        color: #f44336;
        font-weight: 700;
        font-size: 2.5rem;
    }

    .success-message,
    .error-message {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .contact-info-success,
    .contact-info-error {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
    }

    /* Button Styles */
    .btn-success-whatsapp {
        background-color: #25D366;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-success-whatsapp:hover {
        background-color: #128C7E;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    }

    .btn-success-phone,
    .btn-error-email {
        background-color: #FF6B00;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-success-phone:hover,
    .btn-error-email:hover {
        background-color: #e55a00;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
    }

    .btn-error-whatsapp {
        background-color: #25D366;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .btn-error-whatsapp:hover {
        background-color: #128C7E;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
    }

    .btn-primary-custom {
        background-color: #FF6B00;
        color: white;
        border: none;
        padding: 12px 40px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
        background-color: #e55a00;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
    }

    .btn-secondary-custom {
        background-color: #6c757d;
        color: white;
        border: none;
        padding: 12px 40px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-secondary-custom:hover {
        background-color: #5a6268;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 117, 125, 0.3);
    }

    /* Modal Animation */
    .modal.fade .modal-dialog {
        transform: scale(0.7);
        opacity: 0;
        transition: all 0.3s ease-out;
    }

    .modal.show .modal-dialog {
        transform: scale(1);
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 576px) {

        .success-title,
        .error-title {
            font-size: 2rem;
        }

        .modal-body {
            padding: 2rem !important;
        }

        .contact-info-success,
        .contact-info-error {
            padding: 15px;
        }

        .d-flex.gap-3 {
            flex-direction: column;
            gap: 10px !important;
        }

        .modal-dialog {
            margin: 0.5rem;
            max-width: calc(100% - 1rem);
        }

        .modal-dialog-centered {
            min-height: calc(100% - 1rem);
        }
    }

    /* Ensure modal is above everything */
    #successModal,
    #errorModal {
        z-index: 10000 !important;
    }

    #successModal .modal-dialog,
    #errorModal .modal-dialog {
        z-index: 10001 !important;
    }
</style>

<!-- JavaScript for Form Enhancement -->
<!-- Lanjutan JavaScript yang terpotong - ganti bagian script yang terpotong dengan ini -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');

        // Form submission handling
        if (form) {
            form.addEventListener('submit', function(e) {
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.querySelector('.spinner-border').classList.remove('d-none');
                submitBtn.querySelector('.btn-text').textContent = 'Mengirim...';
            });
        }

        // Phone number formatting
        const phoneInput = document.getElementById('whatsapp');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                // Remove non-numeric characters except + and spaces
                let value = e.target.value.replace(/[^\d\s\+]/g, '');
                e.target.value = value;
            });
        }

        // Auto-resize textarea
        const textarea = document.getElementById('message');
        if (textarea) {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        }

        // Auto show modal based on session flash messages
        @if (session('success'))
            setTimeout(function() {
                try {
                    var successModalEl = document.getElementById('successModal');
                    if (successModalEl) {
                        var successModal = new bootstrap.Modal(successModalEl, {
                            backdrop: 'static',
                            keyboard: true,
                            focus: true
                        });

                        // Force show modal
                        successModal.show();

                        // Ensure body has modal-open class
                        document.body.classList.add('modal-open');

                        // Scroll to top when modal opens
                        window.scrollTo(0, 0);

                        // Optional: Add confetti effect
                        if (typeof confetti !== 'undefined') {
                            setTimeout(() => {
                                confetti({
                                    particleCount: 100,
                                    spread: 70,
                                    origin: {
                                        y: 0.6
                                    }
                                });
                            }, 500);
                        }
                    }
                } catch (error) {
                    console.error('Error showing success modal:', error);
                }
            }, 100);
        @endif

        @if (session('error'))
            setTimeout(function() {
                try {
                    var errorModalEl = document.getElementById('errorModal');
                    if (errorModalEl) {
                        var errorModal = new bootstrap.Modal(errorModalEl, {
                            backdrop: 'static',
                            keyboard: true,
                            focus: true
                        });

                        // Force show modal
                        errorModal.show();

                        // Ensure body has modal-open class
                        document.body.classList.add('modal-open');

                        // Scroll to top when modal opens
                        window.scrollTo(0, 0);
                    }
                } catch (error) {
                    console.error('Error showing error modal:', error);
                }
            }, 100);
        @endif

        // Handle ESC key to close modal
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                var modals = document.querySelectorAll('.modal.show');
                modals.forEach(function(modal) {
                    var bsModal = bootstrap.Modal.getInstance(modal);
                    if (bsModal) {
                        bsModal.hide();
                    }
                });
            }
        });

        // Ensure modal closes properly
        document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(function(element) {
            element.addEventListener('click', function() {
                // Remove any leftover backdrops
                document.querySelectorAll('.modal-backdrop').forEach(function(backdrop) {
                    backdrop.remove();
                });

                // Remove modal-open class from body
                document.body.classList.remove('modal-open');
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
            });
        });
    });

    // Test functions untuk debugging
    function testSuccessModal() {
        var modal = new bootstrap.Modal(document.getElementById('successModal'));
        modal.show();

        // Trigger confetti
        if (typeof confetti !== 'undefined') {
            setTimeout(() => {
                confetti({
                    particleCount: 100,
                    spread: 70,
                    origin: {
                        y: 0.6
                    }
                });
            }, 500);
        }
    }

    function testErrorModal() {
        var modal = new bootstrap.Modal(document.getElementById('errorModal'));
        modal.show();
    }
</script>

<!-- Optional: Add confetti library for celebration effect -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<!-- Optional: Add reCAPTCHA script if using -->
@if (config('services.recaptcha.site_key'))
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endif

<!-- Temporary Test Buttons untuk debugging (hapus setelah testing) -->
{{-- <div class="mt-4 text-center">
    <button type="button" class="btn btn-success me-2" onclick="testSuccessModal()">
        Test Success Modal
    </button>
    <button type="button" class="btn btn-danger" onclick="testErrorModal()">
        Test Error Modal
    </button> --}}
</div>
