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
@endsection
