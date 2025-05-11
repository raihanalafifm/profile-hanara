@extends('layout.main')

@section('container')
<section class="hnr-zimbra-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Zimbra Logo -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-zimbra-logo-container">
          <img src="{{ asset('assets/images/icon/zimbra instalasi.png') }}" alt="Zimbra Mail Server" class="hnr-zimbra-logo">
        </div>
      </div>
      
      <!-- Zimbra Description -->
      <div class="col-lg-7">
        <div class="hnr-zimbra-content">
          <h1 class="hnr-zimbra-title">LAYANAN INSTALASI</h1>
          <h2 class="hnr-zimbra-subtitle">ZIMBRA MAIL SERVER</h2>
          
          <p class="hnr-zimbra-description">
            Zimbra Mail Server adalah platform email server yang powerful dan telah banyak 
            digunakan oleh instansi pemerintah, perbankan, serta berbagai perusahaan di berbagai 
            sektor dan bidang bisnis. Zimbra tidak hanya sekadar platform untuk mengirim dan 
            menerima email, tetapi juga menyediakan berbagai fitur produktivitas, seperti:
          </p>
          
          <div class="hnr-zimbra-features">
            <div class="hnr-zimbra-feature-item">
              <span class="hnr-feature-bullet">*</span> <strong>Kalender:</strong> Mempermudah penjadwalan rapat dan pengingat tanggal waktu.
            </div>
            <div class="hnr-zimbra-feature-item">
              <span class="hnr-feature-bullet">*</span> <strong>Task:</strong> Mengelola dan membantu pekerjaan dengan lebih terstruktur. <strong>"Briefcase:</strong> Menyimpan dan berbagi file pekerjaan secara aman.
            </div>
            <div class="hnr-zimbra-feature-item">
              <span class="hnr-feature-bullet">*</span> <strong>Folder Sharing:</strong> Berkolaborasi dengan tim melalui folder bersama.
            </div>
          </div>
          
          <p class="hnr-zimbra-conclusion">
            Dengan fitur-fitur tersebut, Zimbra tidak hanya memudahkan pekerjaan end-user, tetapi 
            juga memberikan kemudahan pengelolaan bagi administrator IT, sehingga 
            meningkatkan efisiensi dan produktivitas organisasi.
          </p>
        </div>
      </div>
    </div>
     <div class="row mt-5">
      <div class="col-12">
        <div class="hnr-zimbra-interface-section">
          <h2 class="hnr-interface-title"><span class="hnr-text-orange">Tampilan</span> Zimbra Mail</h2>
          <p class="hnr-interface-description">
            Berikut merupakan tampilan dari Zimbra Mail, layanan email dengan tampilan yang bersih dan 
            mudah digunakan untuk menunjang aktivitas profesional anda.
          </p>
          
          <div class="hnr-interface-image-container">
            <img src="{{ asset('assets/images/icon/interface zimbra.png') }}" alt="Tampilan Zimbra Mail" class="hnr-interface-image">
          </div>
        </div>
      </div>
    </div>
   <div class="row mt-5 mb-5">
  <div class="col-12">
    <div class="hnr-zimbra-features-section">
      <h2 class="hnr-features-title"><span class="hnr-text-orange">Fitur</span> Unggulan Zimbra</h2>
      <p class="hnr-features-description">
        Fitur unggulan Zimbra yang membantu meningkatkan produktivitas dan efisiensi kerja Anda.
      </p>
      
      <div class="row mt-4">
        <!-- Open Source -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-1.png') }}" alt="Open Source">
            </div>
            <h3 class="hnr-feature-card-title">Open Source</h3>
            <p class="hnr-feature-card-text">
              Zimbra sangat cocok untuk digunakan sebagai email on-premise karena anda dapat mengembangkan platform ini sesuai kebutuhan.
            </p>
          </div>
        </div>
        
        <!-- Operating System Linux -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-2.png') }}" alt="Linux">
            </div>
            <h3 class="hnr-feature-card-title">Operating System Linux</h3>
            <p class="hnr-feature-card-text">
              Zimbra adalah platform email yang stabil dan aman karena berjalan diatas sistem operasi Linux, khususnya CentOS dan Ubuntu.
            </p>
          </div>
        </div>
        
        <!-- Class of Service -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-3.png') }}" alt="Class of Service">
            </div>
            <h3 class="hnr-feature-card-title">Class of Service</h3>
            <p class="hnr-feature-card-text">
              Mengelola fasilitas untuk user dan mengelompokan user menjadi sangat mudah dengan fitur Class of Services di Admin Console Zimbra.
            </p>
          </div>
        </div>
        
        <!-- Admin Console -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-4.png') }}" alt="Admin Console">
            </div>
            <h3 class="hnr-feature-card-title">Admin Console</h3>
            <p class="hnr-feature-card-text">
              Anda tidak perlu menguasai dan memahami command, karena Zimbra sudah menyediakan Administration Console berbasis web.
            </p>
          </div>
        </div>
        
        <!-- Mobile Device Management -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-5.png') }}" alt="Mobile Device">
            </div>
            <h3 class="hnr-feature-card-title">Mobile Device Management</h3>
            <p class="hnr-feature-card-text">
              Fitur yang dapat mengaman-kan data data Anda melalui webmail ketika Anda kehilangan device smartphone.
            </p>
          </div>
        </div>
        
        <!-- CBPOLICYCD -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-6.png') }}" alt="CBPOLICYCD">
            </div>
            <h3 class="hnr-feature-card-title">CBPOLICYCD</h3>
            <p class="hnr-feature-card-text">
              Mengatur berbagai macam policy users untuk kirim dan terima email menggunakan CBPolicyD berbasis web.
            </p>
          </div>
        </div>
        
        <!-- Active Sync -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-7.png') }}" alt="Active Sync">
            </div>
            <h3 class="hnr-feature-card-title">Active Sync</h3>
            <p class="hnr-feature-card-text">
              Sinkronisasikan account email Anda dengan smartphone menggunakan Active Sync. Sinkronisasi data data email, kontak, task, dan kalender.
            </p>
          </div>
        </div>
        
        <!-- Fitur Zimlet -->
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="hnr-feature-card">
            <div class="hnr-feature-icon">
              <img src="{{ asset('assets/images/icon/icon-fitur-8.png') }}" alt="Zimlet">
            </div>
            <h3 class="hnr-feature-card-title">Fitur Zimlet</h3>
            <p class="hnr-feature-card-text">
              Lengkapi kebutuhan pekerjaan anda dengan tools yang disediakan Zimlet untuk webmail Zimbra.
            </p>
          </div>
        </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Zimbra vs Email Hosting Comparison - KODE BARU -->
<div class="row mt-5">
  <div class="col-12">
    <div class="hnr-comparison-section">
      <h2 class="hnr-comparison-title"><span class="hnr-text-orange">Zimbra</span> Mail Server vs Email Hosting</h2>
      <p class="hnr-comparison-description">
        Zimbra menawarkan fitur unggulan yang lebih fleksibel dan profesional dibandingkan email hosting biasa. 
        Berikut perbandingan detailnya:
      </p>
      
      <div class="hnr-comparison-table">
        <div class="hnr-comparison-header">
          <div class="hnr-header-zimbra">Zimbra</div>
          <div class="hnr-header-hosting">Email Hosting</div>
        </div>
        
        <div class="hnr-comparison-content">
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              IP Public terpisah dari website
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              IP Public sharing dengan website
            </div>
          </div>
          
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              Tampilan menarik, tersedia banyak tema
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              Tampilan kaku, pilihan tema sedikit
            </div>
          </div>
          
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              Webmail dilengkapi banyak fitur
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              Webmail hanya untuk send and received email
            </div>
          </div>
          
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              Quota user bisa dicustom
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              Quota user hanya 2 opsi
            </div>
          </div>
          
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              Bisa mengelompokan user (Class of Services)
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              Tidak bisa mengelompokan user
            </div>
          </div>
          
          <div class="hnr-comparison-row">
            <div class="hnr-zimbra-feature">
              <span class="hnr-check-icon"></span>
              Bisa trace email melalui log
            </div>
            <div class="hnr-hosting-feature">
              <span class="hnr-cross-icon"></span>
              Tidak bisa trace email
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Email Protocol Section - KODE YANG DIPERBARUI -->
<div class="row mt-5 mb-5">
  <div class="col-12">
    <div class="hnr-protocol-section">
      <h2 class="hnr-protocol-title"><span class="hnr-text-orange">Email</span> Protocol</h2>
      <p class="hnr-protocol-description">
        Email Protocol Yang Berada Di Zimbra
      </p>
      
      <div class="row mt-4">
        <!-- SMTP Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">01</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">SMTP (Simple Mail Transport Protocol)</h3>
              <p class="hnr-protocol-card-text">
                Digunakan untuk mengirim email antar server.
              </p>
            </div>
          </div>
        </div>
        
        <!-- SSMTP Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">02</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">SSMTP (Secure Simple Mail Transport Protocol)</h3>
              <p class="hnr-protocol-card-text">
                Versi aman dari SMTP dengan enkripsi SSL/TLS.
              </p>
            </div>
          </div>
        </div>
        
        <!-- POP3 Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">03</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">POP3 (Post Office Protocol)</h3>
              <p class="hnr-protocol-card-text">
                Mengambil email dari server ke klien dan menghapusnya dari server.
              </p>
            </div>
          </div>
        </div>
        
        <!-- POP3S Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">04</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">POP3S (Secure Post Office Protocol)</h3>
              <p class="hnr-protocol-card-text">
                POP3 dengan koneksi yang dienkripsi menggunakan SSL/TLS.
              </p>
            </div>
          </div>
        </div>
        
        <!-- IMAP Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">05</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">IMAP (Internet Mail Application Protocol)</h3>
              <p class="hnr-protocol-card-text">
                Mengelola email langsung di server tanpa menghapus salinan.
              </p>
            </div>
          </div>
        </div>
        
        <!-- IMAPS Protocol -->
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="hnr-protocol-card">
            <div class="hnr-protocol-number-container">
              <div class="hnr-protocol-number">06</div>
            </div>
            <div class="hnr-protocol-content">
              <h3 class="hnr-protocol-card-title">IMAPS (Secure Internet Mail Application Protocol)</h3>
              <p class="hnr-protocol-card-text">
                IMAP yang dilengkapi dengan koneksi aman melalui SSL/TLS.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FAQ Section - KODE LENGKAP DIPERBAIKI -->
<div class="row mt-5 mb-5">
  <div class="col-12">
    <div class="hnr-faq-section">
      <h2 class="hnr-faq-title">FAQ</h2>
      <p class="hnr-faq-subtitle">Frequence Asked Questions (FAQ)</p>
      
      <div class="hnr-faq-container">
        <!-- Question 1 -->
        <div class="hnr-faq-item active">
          <div class="hnr-faq-header">
            <div class="hnr-faq-number">01</div>
            <h3 class="hnr-faq-question">Apa itu Zimbra Mail Server?</h3>
            <div class="hnr-faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="18 15 12 9 6 15"></polyline>
              </svg>
            </div>
          </div>
          <div class="hnr-faq-body">
            <h4 class="hnr-faq-subtitle">Description</h4>
            <p class="hnr-faq-answer">
              Zimbra Mail Server adalah platform email server yang powerful dan fleksibel. Zimbra tidak hanya 
              menyediakan layanan pengiriman dan penerimaan email, tetapi juga berbagai fitur produktivitas seperti 
              kalender, task management, folder sharing, dan penyimpanan file (briefcase). Zimbra cocok digunakan 
              untuk kebutuhan email server perusahaan dan instansi.
            </p>
          </div>
        </div>
        
        <!-- Question 2 -->
        <div class="hnr-faq-item">
          <div class="hnr-faq-header">
            <div class="hnr-faq-number">02</div>
            <h3 class="hnr-faq-question">Berapa lama proses instalasi Zimbra Mail Server?</h3>
            <div class="hnr-faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </div>
          </div>
          <div class="hnr-faq-body">
            <h4 class="hnr-faq-subtitle">Description</h4>
            <p class="hnr-faq-answer">
              Proses instalasi Zimbra Mail Server biasanya memakan waktu sekitar 1-2 hari kerja, tergantung pada 
              kompleksitas infrastruktur dan kebutuhan spesifik. Ini termasuk setup awal, konfigurasi dasar, 
              dan pengujian dasar. Untuk migrasi data dari sistem email lama atau konfigurasi lanjutan mungkin 
              memerlukan waktu tambahan.
            </p>
          </div>
        </div>
        
        <!-- Question 3 -->
        <div class="hnr-faq-item">
          <div class="hnr-faq-header">
            <div class="hnr-faq-number">03</div>
            <h3 class="hnr-faq-question">Mengapa Zimbra cocok untuk bisnis?</h3>
            <div class="hnr-faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </div>
          </div>
          <div class="hnr-faq-body">
            <h4 class="hnr-faq-subtitle">Description</h4>
            <p class="hnr-faq-answer">
              Zimbra cocok untuk bisnis karena menawarkan solusi email yang komprehensif dengan kontrol penuh atas 
              data. Fitur kolaborasi seperti kalender bersama, kontak, dan pengelolaan tugas meningkatkan produktivitas 
              tim. Sistem keamanan yang kuat melindungi komunikasi bisnis penting. Zimbra juga menawarkan fleksibilitas 
              dalam pengelolaan pengguna dan penyimpanan, serta opsi hosting on-premise yang memberi bisnis kendali 
              penuh atas infrastruktur email mereka.
            </p>
          </div>
        </div>
        
        <!-- Question 4 -->
        <div class="hnr-faq-item">
          <div class="hnr-faq-header">
            <div class="hnr-faq-number">04</div>
            <h3 class="hnr-faq-question">Apakah Zimbra mendukung akses dari perangkat mobile?</h3>
            <div class="hnr-faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </div>
          </div>
          <div class="hnr-faq-body">
            <h4 class="hnr-faq-subtitle">Description</h4>
            <p class="hnr-faq-answer">
              Ya, Zimbra sepenuhnya mendukung akses dari perangkat mobile melalui protokol ActiveSync. Pengguna dapat 
              dengan mudah mengakses email, kalender, kontak, dan fitur Zimbra lainnya melalui smartphone atau tablet. 
              Zimbra juga menyediakan aplikasi mobile resmi untuk Android dan iOS, yang memberikan pengalaman yang 
              optimal saat mengakses akun Zimbra dari perangkat mobile.
            </p>
          </div>
        </div>
        
        <!-- Question 5 -->
        <div class="hnr-faq-item">
          <div class="hnr-faq-header">
            <div class="hnr-faq-number">05</div>
            <h3 class="hnr-faq-question">Bagaimana dengan keamanan Zimbra Mail Server?</h3>
            <div class="hnr-faq-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </div>
          </div>
          <div class="hnr-faq-body">
            <h4 class="hnr-faq-subtitle">Description</h4>
            <p class="hnr-faq-answer">
              Zimbra menawarkan berbagai fitur keamanan yang komprehensif, termasuk enkripsi SSL/TLS untuk komunikasi 
              email, otentikasi multi-faktor, anti-virus dan anti-spam terintegrasi, serta kontrol akses berbasis peran. 
              Keamanan Zimbra juga mendukung kebijakan password yang kuat dan dapat dikonfigurasi untuk memenuhi standar 
              kepatuhan industri. Dengan hosting on-premise, perusahaan memiliki kontrol penuh atas data email mereka, 
              meningkatkan privasi dan keamanan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('components.contact')
  </div>
</section>
@endsection<