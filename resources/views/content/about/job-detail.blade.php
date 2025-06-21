@extends('layout.main')

@section('container')
    <section class="hnr-job-detail-section">
        <div class="container reveal-section">
            <!-- Back Button -->
            <div class="hnr-back-link-container">
                <a href="{{ route('career') }}" class="hnr-back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Job Title -->
            <div class="hnr-job-detail-header">
                <h1 class="hnr-job-detail-title">{{ $career->position }}</h1>
                <p class="hnr-job-detail-type">
                    @if ($career->type == 'Both')
                        Part Time / Full Time
                    @else
                        {{ $career->type }}
                    @endif
                </p>
            </div>

            <!-- Job Description -->
            <div class="hnr-job-section">
                <h2 class="hnr-section-title">Description.</h2>
                <p class="hnr-section-content">{{ $career->description }}</p>
            </div>

            <!-- Skills Section -->
            @if ($career->skills && count($career->skills) > 0)
                <div class="hnr-job-section">
                    <h2 class="hnr-section-title">Skills.</h2>
                    <ul class="hnr-skill-list">
                        @foreach ($career->skills as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Qualifications Section -->
            @if ($career->qualifications && count($career->qualifications) > 0)
                <div class="hnr-job-section">
                    <h2 class="hnr-section-title">Qualification.</h2>
                    <ul class="hnr-qualification-list">
                        @foreach ($career->qualifications as $qualification)
                            <li>{{ $qualification }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Application Form Section -->
            <div class="hnr-application-section">
                <h2 class="hnr-application-title">Siap bergabung dengan perjalanan kami?</h2>
                <h3 class="hnr-application-subtitle">Kirimkan Lamaran Anda di sini.</h3>

                <form id="jobApplicationForm" class="hnr-application-form">
                    <!-- Full Name -->
                    <div class="hnr-form-group">
                        <label for="fullName" class="hnr-form-label">Full Name<span class="hnr-required">*</span></label>
                        <input type="text" id="fullName" name="fullName" class="hnr-form-input"
                            placeholder="Your full name" required>
                    </div>

                    <!-- Email -->
                    <div class="hnr-form-group">
                        <label for="email" class="hnr-form-label">Email<span class="hnr-required">*</span></label>
                        <input type="email" id="email" name="email" class="hnr-form-input"
                            placeholder="Your active email" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="hnr-form-group">
                        <label for="phoneNumber" class="hnr-form-label">Phone Number<span
                                class="hnr-required">*</span></label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" class="hnr-form-input"
                            placeholder="Your active phone number" required>
                    </div>

                    <!-- Career (Auto-filled and readonly) -->
                    <div class="hnr-form-group">
                        <label for="career" class="hnr-form-label">Career<span class="hnr-required">*</span></label>
                        <input type="text" id="career" name="career" class="hnr-form-input"
                            value="{{ $career->position }}" readonly>
                        <input type="hidden" name="career_id" value="{{ $career->id }}">
                    </div>

                    <!-- Work Preference -->
                    {{-- <div class="hnr-form-group">
                        <label class="hnr-form-label">Work Preferences<span class="hnr-required">*</span></label>
                        <div class="hnr-radio-group">
                            @if ($career->type == 'Both' || $career->type == 'Full Time')
                                <div class="hnr-radio-option">
                                    <input type="radio" id="fullTime" name="workPreference" value="Full Time" required
                                        {{ $career->type == 'Full Time' ? 'checked' : '' }}>
                                    <label for="fullTime">Full Time</label>
                                </div>
                            @endif
                            @if ($career->type == 'Both' || $career->type == 'Part Time')
                                <div class="hnr-radio-option">
                                    <input type="radio" id="partTime" name="workPreference" value="Part Time"
                                        {{ $career->type == 'Part Time' ? 'checked' : '' }}>
                                    <label for="partTime">Part Time</label>
                                </div>
                            @endif
                        </div>
                    </div> --}}

                    <!-- LinkedIn -->
                    <div class="hnr-form-group">
                        <label for="linkedin" class="hnr-form-label">LinkedIn</label>
                        <input type="text" id="linkedin" name="linkedin" class="hnr-form-input"
                            placeholder="Your linkedin username">
                    </div>

                    <!-- CV Upload -->
                    {{-- <div class="hnr-form-group">
                        <label for="cv" class="hnr-form-label">CV<span class="hnr-required">*</span></label>
                        <div class="hnr-file-input-container">
                            <input type="file" id="cv" name="cv" class="hnr-file-input"
                                accept=".pdf,.doc,.docx" required>
                            <div class="hnr-file-input-custom">
                                <span class="hnr-file-input-text">No file chosen</span>
                                <label for="cv" class="hnr-file-input-button">Chose File</label>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Upload -->
                    <div class="hnr-form-group">
                        <label for="portfolio" class="hnr-form-label">Portfolio<span
                                class="hnr-required">*</span></label>
                        <div class="hnr-file-input-container">
                            <input type="file" id="portfolio" name="portfolio" class="hnr-file-input"
                                accept=".pdf,.zip,.rar" required>
                            <div class="hnr-file-input-custom">
                                <span class="hnr-file-input-text">No file chosen</span>
                                <label for="portfolio" class="hnr-file-input-button">Chose File</label>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Submit Button -->
                    <div class="hnr-form-submit">
                        <button type="submit" class="hnr-submit-button">
                            Send your application
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<!-- Tambahkan ini di bagian akhir file job-detail.blade.php sebelum @endsection -->

<!-- Success Modal untuk Job Application -->
<div class="modal fade" id="jobSuccessModal" tabindex="-1" aria-labelledby="jobSuccessModalLabel" aria-hidden="true">
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
                <h2 class="success-title mt-4 mb-3">Lamaran Terkirim!</h2>
                <p class="success-message mb-4">
                    Terima kasih telah melamar posisi <strong>{{ $career->position }}</strong>.
                    Tim HR kami akan meninjau lamaran Anda dan menghubungi dalam 3-5 hari kerja.
                </p>

                <!-- Next Steps Info -->
                <div class="contact-info-success">
                    <p class="mb-2"><strong>Langkah Selanjutnya:</strong></p>
                    <ul class="next-steps-list text-start">
                        <li>Tim HR akan meninjau lamaran Anda</li>
                        <li>Jika cocok, kami akan menghubungi untuk interview</li>
                        <li>Pantau email Anda untuk update status lamaran</li>
                    </ul>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="https://wa.me/62897500805" class="btn btn-success-whatsapp" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp HR
                        </a>
                        <a href="mailto:career@hanara.id" class="btn btn-success-phone">
                            <i class="bi bi-envelope-fill"></i> Email HR
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

<!-- Error Modal untuk Job Application -->
<div class="modal fade" id="jobErrorModal" tabindex="-1" aria-labelledby="jobErrorModalLabel" aria-hidden="true">
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
                    Maaf, terjadi kesalahan saat mengirim lamaran Anda. Silakan coba lagi atau hubungi tim HR kami
                    langsung.
                </p>

                <!-- Alternative Contact -->
                <div class="contact-info-error">
                    <p class="mb-2">Anda dapat mengirim lamaran langsung melalui:</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="mailto:career@hanara.id" class="btn btn-error-email">
                            <i class="bi bi-envelope-fill"></i> Email HR
                        </a>
                        <a href="https://wa.me/62897500805" class="btn btn-error-whatsapp" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp HR
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

<!-- Modal Styles (gunakan yang sama dari contact.blade.php) -->
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

    /* Next Steps List Styling */
    .next-steps-list {
        list-style: none;
        padding: 0;
        margin: 15px 0;
    }

    .next-steps-list li {
        position: relative;
        padding: 8px 0 8px 25px;
        color: #666;
        font-size: 0.95rem;
    }

    .next-steps-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #FF6B00;
        font-weight: bold;
        font-size: 14px;
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
    #jobSuccessModal,
    #jobErrorModal {
        z-index: 10000 !important;
    }

    #jobSuccessModal .modal-dialog,
    #jobErrorModal .modal-dialog {
        z-index: 10001 !important;
    }
</style>

<!-- JavaScript untuk Job Application Form Enhancement -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const jobForm = document.getElementById('jobApplicationForm');
        const submitBtn = jobForm.querySelector('.hnr-submit-button');

        // Form submission handling
        if (jobForm) {
            jobForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent default form submission for demo

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                    Mengirim lamaran...
                `;

                // Simulate API call (replace with actual form submission logic)
                setTimeout(function() {
                    // Reset button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = `
                        Send your application
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    `;

                    // Simulate success response (you can change this based on your backend response)
                    const isSuccess = Math.random() > 0.1; // 90% success rate for demo

                    if (isSuccess) {
                        showJobSuccessModal();
                        // Reset form on success
                        jobForm.reset();
                    } else {
                        showJobErrorModal();
                    }
                }, 2000); // 2 second delay for demo
            });
        }

        // Phone number formatting
        const phoneInput = document.getElementById('phoneNumber');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                // Remove non-numeric characters except + and spaces
                let value = e.target.value.replace(/[^\d\s\+]/g, '');
                e.target.value = value;
            });
        }

        // File input handling (jika Anda uncomment file inputs)
        const fileInputs = document.querySelectorAll('.hnr-file-input');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const textElement = this.nextElementSibling.querySelector(
                    '.hnr-file-input-text');
                if (this.files.length > 0) {
                    textElement.textContent = this.files[0].name;
                } else {
                    textElement.textContent = 'No file chosen';
                }
            });
        });

        // Function to show success modal
        function showJobSuccessModal() {
            try {
                var successModalEl = document.getElementById('jobSuccessModal');
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
                console.error('Error showing job success modal:', error);
            }
        }

        // Function to show error modal
        function showJobErrorModal() {
            try {
                var errorModalEl = document.getElementById('jobErrorModal');
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
                console.error('Error showing job error modal:', error);
            }
        }

        // Auto show modal based on session flash messages (untuk integrasi dengan Laravel)
        @if (session('job_success'))
            setTimeout(function() {
                showJobSuccessModal();
            }, 100);
        @endif

        @if (session('job_error'))
            setTimeout(function() {
                showJobErrorModal();
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
    function testJobSuccessModal() {
        var modal = new bootstrap.Modal(document.getElementById('jobSuccessModal'));
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

    function testJobErrorModal() {
        var modal = new bootstrap.Modal(document.getElementById('jobErrorModal'));
        modal.show();
    }
</script>

<!-- Optional: Add confetti library untuk efek celebration -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
@endsection
