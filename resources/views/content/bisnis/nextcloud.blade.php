@extends('layout.main')

@section('container')
<section class="hnr-nextcloud-section">
  <div class="container">
    <!-- Header Section with Logo and Description -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-nextcloud-logo-container">
          <img src="{{ asset('assets/images/icon/nextcloud-icon.png') }}" alt="Nextcloud" class="hnr-nextcloud-logo img-fluid">
        </div>
      </div>
      
      <div class="col-lg-7">
        <div class="hnr-nextcloud-content">
          <h1 class="hnr-nextcloud-title">
            <span class="hnr-nextcloud-title-orange">JASA INSTALASI</span>
            <span class="hnr-nextcloud-title-dark">NEXTCLOUD</span>
          </h1>
          
          <p class="hnr-nextcloud-description">
            Nextcloud adalah solusi penyimpanan cloud yang mudah, aman, dan fleksibel, dirancang khusus untuk membantu perusahaan dalam mengelola data secara efektif. Kami menyediakan jasa instalasi dan konfigurasi Nextcloud untuk memberikan sistem berbagi dokumen yang aman dan dapat dikelola sesuai dengan kebutuhan bisnis Anda.
          </p>
          
          <p class="hnr-nextcloud-description">
            Dengan Nextcloud, Anda dapat menyimpan, berbagi, dan mengakses file dari mana saja, kapan saja, dengan keamanan tinggi dan kontrol penuh atas data perusahaan Anda. Layanan ini sangat cocok untuk perusahaan yang mengutamakan Privasi data dengan sistem on-premise atau private cloud. Kolaborasi tim yang efisien dengan berbagai fitur Nextcloud. Pengelolaan file terpusat untuk meningkatkan produktivitas.
          </p>
        </div>
      </div>
    </div>
    
    <!-- Nextcloud Interface Section -->
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="hnr-nextcloud-section-title">
          <span class="hnr-nextcloud-title-orange">Tampilan</span> Nextcloud
        </h2>
        <p class="hnr-nextcloud-section-subtitle">
          Berikut merupakan tampilan dari Nextcloud, platform penyimpanan dan kolaborasi file yang dirancang untuk meningkatkan produktivitas secara online.
        </p>
        
        <div class="hnr-nextcloud-interface-container mt-4">
          <img src="{{ asset('assets/images/icon/nextcloud-bisnis.png') }}" alt="Interface Nextcloud" class="hnr-nextcloud-interface-img img-fluid">
        </div>
      </div>
    </div>
    
    <!-- Services Section -->
    <div class="row text-center mb-5">
      <div class="col-12">
        <h2 class="hnr-nextcloud-section-title">
          <span class="hnr-nextcloud-title-orange">Layanan</span> Kami
        </h2>
        <p class="hnr-nextcloud-section-subtitle">
          PT Hanara Prima Solusindo menyediakan berbagai layanan untuk mendukung implementasi dan penggunaan Nextcloud di perusahaan Anda:
        </p>
      </div>
    </div>
    
    <div class="row mb-5">
      <!-- Service 1: Konsultasi & Implementasi -->
      <div class="col-md-6 mb-4">
        <div class="hnr-nextcloud-service-card">
          <div class="hnr-nextcloud-service-icon">
            <img src="{{ asset('assets/images/icon/layanan1.png') }}" alt="Konsultasi dan Implementasi" class="img-fluid">
          </div>
          <div class="hnr-nextcloud-service-content">
            <h3 class="hnr-nextcloud-service-title">KONSULTASI DAN IMPLEMENTASI</h3>
            <p class="hnr-nextcloud-service-desc">
              Analisis kebutuhan bisnis dan perencanaan implementasi Nextcloud yang optimal. Instalasi dan konfigurasi Nextcloud sesuai dengan standar terbaik industri.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Service 2: Migrasi Data -->
      <div class="col-md-6 mb-4">
        <div class="hnr-nextcloud-service-card">
          <div class="hnr-nextcloud-service-icon">
            <img src="{{ asset('assets/images/icon/layanan2.png') }}" alt="Migrasi Data" class="img-fluid">
          </div>
          <div class="hnr-nextcloud-service-content">
            <h3 class="hnr-nextcloud-service-title">MIGRASI DATA</h3>
            <p class="hnr-nextcloud-service-desc">
              Analisis kebutuhan bisnis dan perencanaan implementasi Nextcloud yang optimal. Instalasi dan konfigurasi Nextcloud sesuai dengan standar terbaik industri.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Service 3: Pemeliharaan dan Dukungan -->
      <div class="col-md-6 mb-4">
        <div class="hnr-nextcloud-service-card">
          <div class="hnr-nextcloud-service-icon">
            <img src="{{ asset('assets/images/icon/layanan3.png') }}" alt="Pemeliharaan dan Dukungan" class="img-fluid">
          </div>
          <div class="hnr-nextcloud-service-content">
            <h3 class="hnr-nextcloud-service-title">PEMELIHARAAN DAN DUKUNGAN TEKNIS</h3>
            <p class="hnr-nextcloud-service-desc">
              Dukungan teknis 24/7 untuk memastikan Nextcloud berjalan dengan lancar. Pembaruan sistem dan peningkatan rutin untuk mengoptimalkan kinerja dan keamanan.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Service 4: Pelatihan -->
      <div class="col-md-6 mb-4">
        <div class="hnr-nextcloud-service-card">
          <div class="hnr-nextcloud-service-icon">
            <img src="{{ asset('assets/images/icon/layanan4.png') }}" alt="Pelatihan dan Edukasi" class="img-fluid">
          </div>
          <div class="hnr-nextcloud-service-content">
            <h3 class="hnr-nextcloud-service-title">PELATIHAN DAN EDUKASI</h3>
            <p class="hnr-nextcloud-service-desc">
              Pelatihan untuk tim IT dan pengguna akhir agar dapat memanfaatkan Nextcloud dengan maksimal. Sesi edukasi tentang best practices dalam penggunaan Nextcloud.
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- FAQ Section -->
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2 class="hnr-nextcloud-section-title mb-4"><span class="hnr-nextcloud-title-orange">FAQ</span></h2>
        <p class="hnr-nextcloud-section-subtitle mb-5">Frequently Asked Questions (FAQ)</p>
        
        <div class="hnr-nextcloud-faq-container">
          <!-- FAQ Item 1 -->
          <div class="hnr-nextcloud-faq-item active">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">01</div>
              <h3 class="hnr-nextcloud-faq-question">Apa itu Nextcloud?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Nextcloud adalah platform penyimpanan dan kolaborasi file self-hosted yang memungkinkan pengguna menyimpan, menyimpan, dan berbagi file dengan aman. Ini adalah solusi penyimpanan cloud yang dapat di-host sendiri, memberikan kontrol penuh atas data Anda dan memastikan privasi dan keamanan data perusahaan.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">02</div>
              <h3 class="hnr-nextcloud-faq-question">Bagaimana Nextcloud berbeda dari penyimpanan cloud lainnya?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Nextcloud berbeda dari layanan penyimpanan cloud publik seperti Dropbox, Google Drive, atau OneDrive karena dihosting secara lokal di server Anda sendiri. Ini memberikan keunggulan berupa kontrol penuh atas data, privasi yang lebih baik, tidak ada biaya langganan per pengguna, penyesuaian yang lebih fleksibel, dan integrasi yang lebih mudah dengan sistem perusahaan yang ada.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">03</div>
              <h3 class="hnr-nextcloud-faq-question">Mengapa Nextcloud cocok untuk bisnis?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Nextcloud sangat cocok untuk bisnis karena menawarkan kontrol penuh atas data, keamanan tingkat enterprise, kolaborasi tim yang efisien, integrasi dengan perangkat lunak bisnis lainnya, dan biaya yang lebih rendah dalam jangka panjang. Fitur-fitur seperti berbagi file, kalender bersama, manajemen tugas, dan kontrol akses yang detail menjadikannya solusi lengkap untuk kebutuhan penyimpanan dan kolaborasi data perusahaan.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 4 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">04</div>
              <h3 class="hnr-nextcloud-faq-question">Apa yang diperlukan untuk menginstal Nextcloud?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Untuk menginstal Nextcloud, Anda memerlukan server (fisik atau virtual) dengan sistem operasi Linux, webserver (Apache atau Nginx), database (MySQL/MariaDB, PostgreSQL), dan PHP. Spesifikasi minimal tergantung pada jumlah pengguna dan volume data, tetapi umumnya dimulai dengan 2GB RAM, prosesor dual-core, dan ruang penyimpanan minimal 10GB untuk instalasi dasar. Tim kami akan membantu menentukan spesifikasi yang tepat berdasarkan kebutuhan bisnis Anda.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 5 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">05</div>
              <h3 class="hnr-nextcloud-faq-question">Apakah Nextcloud dapat diintegrasikan dengan aplikasi lain?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Ya, Nextcloud sangat fleksibel dalam hal integrasi. Nextcloud dapat diintegrasikan dengan berbagai aplikasi dan layanan seperti Microsoft Office, Slack, aplikasi email, kalender, layanan autentikasi (LDAP/Active Directory), dan banyak lagi. Nextcloud juga memiliki App Store dengan ratusan aplikasi yang dapat diinstal untuk memperluas fungsionalitasnya. Tim kami dapat membantu mengkonfigurasi integrasi yang Anda butuhkan.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 6 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">06</div>
              <h3 class="hnr-nextcloud-faq-question">Bagaimana cara memastikan keamanan data di Nextcloud?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Nextcloud menawarkan berbagai fitur keamanan tingkat lanjut, termasuk enkripsi end-to-end, enkripsi penyimpanan, autentikasi dua faktor, kebijakan kata sandi yang kuat, pembatasan akses IP, dan audit logging. Sebagai layanan self-hosted, data Anda tetap berada di infrastruktur Anda sendiri, yang mengurangi risiko kebocoran data. Tim kami menerapkan praktik terbaik keamanan selama instalasi dan konfigurasi, serta menyediakan panduan tentang cara menjaga keamanan instalasi Nextcloud Anda secara berkelanjutan.
              </p>
            </div>
          </div>
          
          <!-- FAQ Item 7 -->
          <div class="hnr-nextcloud-faq-item">
            <div class="hnr-nextcloud-faq-header">
              <div class="hnr-nextcloud-faq-number">07</div>
              <h3 class="hnr-nextcloud-faq-question">Apakah disini disediakan layanan migrasi dari penyimpanan cloud lain?</h3>
              <div class="hnr-nextcloud-faq-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </div>
            </div>
            <div class="hnr-nextcloud-faq-body">
              <p class="hnr-nextcloud-faq-answer">
                Ya, kami menyediakan layanan migrasi lengkap untuk memindahkan data dari penyimpanan cloud lain seperti Google Drive, Dropbox, OneDrive, atau penyimpanan lainnya ke Nextcloud Anda. Proses migrasi kami dirancang untuk meminimalkan gangguan bisnis, memastikan integritas data, dan memastikan semua hak akses dan struktur folder ditransfer dengan benar. Tim kami akan merencanakan, menguji, dan melaksanakan migrasi dengan cermat untuk memastikan transisi yang lancar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Contact Us Section -->
    @include('components.contact')
  </div>
</section>
@endsection