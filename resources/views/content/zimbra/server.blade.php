@extends('layout.main')

@section('container')
<section class="hnr-zimserver-section">
  <div class="container">
    <!-- Zimbra Server Header Section -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-zimserver-image-container">
          <img src="{{ asset('assets/images/icon/zimbra server.png') }}" alt="Zimbra Mail Server" class="hnr-zimserver-logo">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hnr-zimserver-content">
          <h1 class="hnr-zimserver-title">
            <span class="hnr-zimserver-orange">ZIMBRA</span>
            <span class="hnr-zimserver-black">MAIL SERVER</span>
          </h1>
          <p class="hnr-zimserver-desc">
            Dilakukan dengan tenaga profesional dan berpengalaman serta bersertifikasi, PT Hanara Prima Solusindo siap melayani kebutuhan lisensi Zimbra Mail Server (Zimbra Network Edition Standard dan Zimbra Network Edition Professional), jasa atau layanan instalasi Zimbra, jasa atau layanan maintenance Zimbra dan jasa atau layanan troubleshooting Zimbra Mail Server sehingga Anda tidak lagi perlu khawatir dengan produktifitas email server.
          </p>
          <p class="hnr-zimserver-desc">
            Zimbra Mail Server sendiri adalah software open source untuk email server dan kolaborasi (groupware) yang banyak digunakan diberbagai instansi pemerintah, BUMN, perbankan hingga swasta, karena Zimbra adalah solusi email server yang powerful dengan bantuan fitur seperti penjadwalan, kalender (spa), kontak, manajemen penyimpanan dokumen via web dan fitur fitur pendukung lainnya.
          </p>
        </div>
      </div>
    </div>

    <!-- Why Zimbra NE Section -->
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="hnr-zimserver-section-title">
          <span class="hnr-zimserver-orange">Mengapa</span> Harus
        </h2>
        <h3 class="hnr-zimserver-section-subtitle">Zimbra Network Edition ?</h3>
        <p class="hnr-zimserver-section-desc">Kemudahan kolaborasi dan keamanan email dalam satu platform cloud</p>
      </div>
    </div>

    <!-- NE Features Row 1 -->
    <div class="row mb-5">
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server1.png') }}" alt="Realtime">
          </div>
          <h4 class="hnr-zimserver-feature-title">Realtime</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server2.png') }}" alt="Zimbra Docs">
          </div>
          <h4 class="hnr-zimserver-feature-title">Zimbra Docs</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server3.png') }}" alt="Zimbra Drive">
          </div>
          <h4 class="hnr-zimserver-feature-title">Zimbra Drive</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server4.png') }}" alt="MS Exchange Interoperability">
          </div>
          <h4 class="hnr-zimserver-feature-title">MS Exchange Interoperability</h4>
        </div>
      </div>
    </div>

    <!-- NE Features Row 2 -->
    <div class="row mb-5">
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server5.png') }}" alt="Two-Factor Authentication">
          </div>
          <h4 class="hnr-zimserver-feature-title">Two-Factor Authentication</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server6.png') }}" alt="Attachment Search">
          </div>
          <h4 class="hnr-zimserver-feature-title">Attachment Search</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server7.png') }}" alt="Web Client Branding">
          </div>
          <h4 class="hnr-zimserver-feature-title">Web Client Branding</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="hnr-zimserver-feature-item text-center">
          <div class="hnr-zimserver-feature-icon">
            <img src="{{ asset('assets/images/icon/icon-card-server8.png') }}" alt="Delegated Administration">
          </div>
          <h4 class="hnr-zimserver-feature-title">Delegated Administration</h4>
        </div>
      </div>
    </div>

    <!-- Standard Package Section -->
    <div class="row mt-5 text-center">
      <div class="col-12">
        <h2 class="hnr-zimserver-package-title">Zimbra NE</h2>
        <h3 class="hnr-zimserver-package-subtitle">Standard Package</h3>
        <p class="hnr-zimserver-package-desc">Solusi email aman & andal untuk kebutuhan dasar</p>
      </div>
    </div>

    <!-- Standard Package Features -->
    <div class="row mb-5">
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-globe"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Webmail Friendly</h4>
            <p class="hnr-zimserver-feature-desc">Interface yang friendly memberikan pengalaman user untuk menggunakan Webmail Zimbra</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-hdd"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">POP3/IMAP</h4>
            <p class="hnr-zimserver-feature-desc">Simpan email di mobile daripada mail client dengan protokol POP3 atau IMAP sesuai kebutuhan Anda</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-chat-dots"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Zimbra Chat</h4>
            <p class="hnr-zimserver-feature-desc">Layanan chat yang disediakan Zimbra siap menghubungkan antar satu user dengan user lainnya</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-folder2"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Zimbra Drive</h4>
            <p class="hnr-zimserver-feature-desc">Upload File Anda ke dalam Drive Zimbra yang terintegrasi dengan NextCloud atau OwnCloud</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-clock-history"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Real-Time Backup</h4>
            <p class="hnr-zimserver-feature-desc">Tak perlu khawatir jika terjadi kehilangan suatu file, Zimbra sudah menyediakan Backup setiap waktu</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-shield-lock"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Two-Factor Authentication</h4>
            <p class="hnr-zimserver-feature-desc">Meningkatkan fitur identifikasi melalui mobile phone sehingga membuat email Anda lebih aman</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-pc-display"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Web Admin Console</h4>
            <p class="hnr-zimserver-feature-desc">Kelola user dan server melalui interface Web Console yang friendly dan mudah digunakan</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-globe2"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Multi Domain</h4>
            <p class="hnr-zimserver-feature-desc">Mendukung multi-domain yang dapat diintegrasikan dalam satu mail server Zimbra</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-gear"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Class of Service</h4>
            <p class="hnr-zimserver-feature-desc">Mengelompokkan user sesuai divisi, seperti kuota user dan fitur dalam webmail agar lebih mudah dikelola</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Professional Package Section -->
    <div class="row mt-5 text-center">
      <div class="col-12">
        <h2 class="hnr-zimserver-package-title">Zimbra NE</h2>
        <h3 class="hnr-zimserver-package-subtitle">Professional Package</h3>
        <p class="hnr-zimserver-package-desc">Fitur lengkap untuk kolaborasi tingkat lanjut & efisiensi kerja maksimal</p>
      </div>
    </div>

    <!-- Professional Package Features -->
    <div class="row mb-5">
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-check2-all"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Lebih Lengkap</h4>
            <p class="hnr-zimserver-feature-desc">Fitur yang ada di Zimbra NE Standard sudah termasuk didalam Zimbra NE Professional</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Active Sync</h4>
            <p class="hnr-zimserver-feature-desc">Sinkronisasikan Zimbra Anda dengan Active Sync seperti data email, kontak, task dan kalender</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-microsoft"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Outlook Sync</h4>
            <p class="hnr-zimserver-feature-desc">Sinkronisasi data email, kontak, task, dan juga kalender anda ke dalam Microsoft Outlook</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-phone"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Mobile Device Management</h4>
            <p class="hnr-zimserver-feature-desc">Hapus data email Anda ketika perangkat mobile phone hilang atau tidak kenal email Zimbra</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-archive"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Archiving</h4>
            <p class="hnr-zimserver-feature-desc">Berguna untuk mengarsipkan data mailbox sehingga tidak mudah dalam mencari email lama</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="hnr-zimserver-package-feature">
          <div class="hnr-zimserver-package-icon">
            <i class="bi bi-share"></i>
          </div>
          <div class="hnr-zimserver-package-content">
            <h4 class="hnr-zimserver-feature-name">Shared Items Sync</h4>
            <p class="hnr-zimserver-feature-desc">Berbagi file dengan user lain melalui webmail sehingga mempermudah pekerjaan Anda</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    @include("components.contact")
  </div>
</section>
@endsection