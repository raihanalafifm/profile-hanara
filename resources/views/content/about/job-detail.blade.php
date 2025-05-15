@extends('layout.main')

@section('container')
<section class="hnr-job-detail-section">
  <div class="container">
    <!-- Back Button -->
    <div class="hnr-back-link-container">
      <a href="{{ url('career') }}" class="hnr-back-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF6B00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
        Kembali
      </a>
    </div>

    <!-- Job Title -->
    <div class="hnr-job-detail-header">
      <h1 class="hnr-job-detail-title">IT Support</h1>
      <p class="hnr-job-detail-type">Part Time / Full Time</p>
    </div>

    <!-- Job Description -->
    <div class="hnr-job-section">
      <h2 class="hnr-section-title">Description.</h2>
      <p class="hnr-section-content">
        Bergabunglah dengan tim kami sebagai IT Support. Tanggung jawab Anda meliputi pemeliharaan sistem, dukungan teknis, dan 
        troubleshooting masalah perangkat keras dan perangkat lunak. Kami mencari seseorang yang detail-oriented dan mampu bekerja 
        baik secara mandiri maupun dalam tim.
      </p>
    </div>

    <!-- Skills Section -->
    <div class="hnr-job-section">
      <h2 class="hnr-section-title">Skills.</h2>
      <ul class="hnr-skill-list">
        <li>
          <strong>Troubleshooting:</strong> Kemampuan untuk menganalisis dan menyelesaikan masalah teknis pada perangkat keras, perangkat lunak, 
          dan jaringan secara cepat dan efektif.
        </li>
        <li>
          <strong>Technical Knowledge:</strong> Pemahaman mendalam tentang sistem operasi (Windows, macOS, Linux), perangkat keras komputer, 
          printer, jaringan dasar, dan aplikasi umum (Microsoft Office, email clients).
        </li>
        <li>
          <strong>Customer Service:</strong> Keterampilan komunikasi dan empati untuk membantu pengguna dengan sabar dan profesional, baik secara 
          langsung, melalui telepon, maupun secara daring.
        </li>
        <li>
          <strong>Network Fundamentals:</strong> Pengetahuan dasar tentang TCP/IP, DHCP, DNS, VPN, serta kemampuan mengkonfigurasi router/switch 
          kecil dan koneksi jaringan.
        </li>
        <li>
          <strong>Hardware Maintenance & Installation:</strong> Mampu memasang, mengganti, dan merawat perangkat keras seperti RAM, hard drive, 
          printer, scanner, dan peripheral lainnya.
        </li>
      </ul>
    </div>

    <!-- Qualifications Section -->
    <div class="hnr-job-section">
      <h2 class="hnr-section-title">Qualification.</h2>
      <ul class="hnr-qualification-list">
        <li>Minimal lulusan D3/S1 di bidang Teknik Informatika, Sistem Informasi, atau jurusan terkait.</li>
        <li>Memiliki pengalaman kerja di bidang IT Support minimal 1 tahun (fresh graduate dipertimbangkan).</li>
        <li>Menguasai troubleshooting perangkat keras dan perangkat lunak komputer.</li>
        <li>Memahami dasar-dasar jaringan komputer (LAN/WAN, TCP/IP, DNS, DHCP).</li>
        <li>Terbiasa menggunakan sistem operasi Windows dan Linux.</li>
      </ul>
    </div>

    <!-- Application Form Section -->
    <div class="hnr-application-section">
      <h2 class="hnr-application-title">Siap bergabung dengan perjalanan kami?</h2>
      <h3 class="hnr-application-subtitle">Kirimkan Lamaran Anda di sini.</h3>

      <form id="jobApplicationForm" class="hnr-application-form">
        <!-- Full Name -->
        <div class="hnr-form-group">
          <label for="fullName" class="hnr-form-label">Full Name<span class="hnr-required">*</span></label>
          <input type="text" id="fullName" name="fullName" class="hnr-form-input" placeholder="Your full name" required>
        </div>

        <!-- Email -->
        <div class="hnr-form-group">
          <label for="email" class="hnr-form-label">Email<span class="hnr-required">*</span></label>
          <input type="email" id="email" name="email" class="hnr-form-input" placeholder="Your active email" required>
        </div>

        <!-- Phone Number -->
        <div class="hnr-form-group">
          <label for="phoneNumber" class="hnr-form-label">Phone Number<span class="hnr-required">*</span></label>
          <input type="tel" id="phoneNumber" name="phoneNumber" class="hnr-form-input" placeholder="Your active phone number" required>
        </div>

        <!-- Career -->
        <div class="hnr-form-group">
          <label for="career" class="hnr-form-label">Career<span class="hnr-required">*</span></label>
          <select id="career" name="career" class="hnr-form-select" required>
            <option value="" disabled selected>select career</option>
            <option value="it-support">IT Support</option>
            <option value="network-security">Network Security Specialist</option>
            <option value="cloud-engineer">Cloud Computing Engineer</option>
            <option value="software-developer">Software Developer</option>
          </select>
        </div>

        <!-- Work Preference -->
        <div class="hnr-form-group">
          <label class="hnr-form-label">Work Preferences<span class="hnr-required">*</span></label>
          <div class="hnr-radio-group">
            <div class="hnr-radio-option">
              <input type="radio" id="fullTime" name="workPreference" value="Full Time" required>
              <label for="fullTime">Full Time</label>
            </div>
            <div class="hnr-radio-option">
              <input type="radio" id="partTime" name="workPreference" value="Part Time">
              <label for="partTime">Part Time</label>
            </div>
          </div>
        </div>

        <!-- LinkedIn -->
        <div class="hnr-form-group">
          <label for="linkedin" class="hnr-form-label">LinkedIn</label>
          <input type="text" id="linkedin" name="linkedin" class="hnr-form-input" placeholder="Your linkedin username">
        </div>

        <!-- CV Upload -->
        <div class="hnr-form-group">
          <label for="cv" class="hnr-form-label">CV<span class="hnr-required">*</span></label>
          <div class="hnr-file-input-container">
            <input type="file" id="cv" name="cv" class="hnr-file-input" accept=".pdf,.doc,.docx" required>
            <div class="hnr-file-input-custom">
              <span class="hnr-file-input-text">No file chosen</span>
              <label for="cv" class="hnr-file-input-button">Chose File</label>
            </div>
          </div>
        </div>

        <!-- Portfolio Upload -->
        <div class="hnr-form-group">
          <label for="portfolio" class="hnr-form-label">Portfolio<span class="hnr-required">*</span></label>
          <div class="hnr-file-input-container">
            <input type="file" id="portfolio" name="portfolio" class="hnr-file-input" accept=".pdf,.zip,.rar" required>
            <div class="hnr-file-input-custom">
              <span class="hnr-file-input-text">No file chosen</span>
              <label for="portfolio" class="hnr-file-input-button">Chose File</label>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="hnr-form-submit">
          <button type="submit" class="hnr-submit-button">
            Send your application 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection