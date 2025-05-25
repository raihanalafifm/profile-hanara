@extends('layout.main')

@section('container')
<section class="hnr-maint-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Logo/Image Section -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="hnr-maint-logo-container">
          <img src="{{ asset('assets/images/icon/maintenance-zimbra.png') }}" alt="Maintenance Zimbra" class="hnr-maint-logo" loading="lazy">
        </div>
      </div>
      
      <!-- Description Section -->
      <div class="col-lg-7">
        <div class="hnr-maint-content">
          <h1 class="hnr-maint-title">
            <span class="hnr-maint-title-orange">JASA</span> MAINTENANCE ZIMBRA
          </h1>
          
          <p class="hnr-maint-description">
            Jasa Maintenance Zimbra adalah layanan support Zimbra Mail Server untuk 
            memudahkan customer dalam melakukan pemeliharaan atau preventive maintenance. 
            Layaknya mesin produksi yang digunakan oleh perusahaan, tentu diwajibkan adanya 
            perawatan atau maintenance terhadap mesin tersebut. Begitu juga dengan email server 
            yang digunakan setiap hari, setiap jam bahkan hampir setiap detik oleh karyawan 
            perusahaan, tentu Anda harus melakukan perawatan atau maintenance email server 
            agar tetap dalam keadaan stabil dan bisa mencegah terjadinya masalah.
          </p>
        </div>
      </div>
    </div>
    
    <!-- Manfaat Maintenance Section -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="hnr-manfaat-section">
          <h2 class="hnr-manfaat-title"><span class="hnr-manfaat-title-orange">Manfaat</span> Maintenance</h2>
          <p class="hnr-manfaat-subtitle">Manfaat preventive maintenance untuk Zimbra Anda</p>
          
          <div class="row mt-4">
            <!-- Item 1: Pemeliharaan Sistem Operasi -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance1.png') }}" alt="Sistem Operasi" loading="lazy">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Pemeliharaan Sistem Operasi</h3>
                <p class="hnr-manfaat-item-text">
                  Sistem Operasi adalah fondasi dari Zimbra Mail Server. Zimbra sangat bergantung dengan kestabilan sistem operasi, dengan berlangganan support atau maintenance Zimbra, kami akan selalu memastikan bahwa sistem operasi yang anda gunakan dalam status normal.
                </p>
              </div>
            </div>
            
            <!-- Item 2: Hardening dan Security -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance2.png') }}" alt="Security">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Hardening dan Security</h3>
                <p class="hnr-manfaat-item-text">
                  Kami memahami bahwa dalam dunia jaringan komputer dan internet, kemungkinan cyber attack sangatlah besar. Bagaimanapun juga kita memiliki email server, oleh karena itu aspek keamanan merupakan hal yang krusial dan rutin harus di cek.
                </p>
              </div>
            </div>
            
            <!-- Item 3: Pengecekan Log Server -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance3.png') }}" alt="Log Server">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Pengecekan Log Server</h3>
                <p class="hnr-manfaat-item-text">
                  Log merupakan suatu record yang merekam semua aktivitas dari services yang berjalan. Dengan aktifitas rutin memeriksa log pada server, kita dapat mengetahui lebih awal apabila terjadi sebuah masalah untuk segera di "solve" sebelum masalah tersebut fatal.
                </p>
              </div>
            </div>
            
            <!-- Item 4: Report dan Recomendation -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance4.png') }}" alt="Report">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Report dan Recomendation</h3>
                <p class="hnr-manfaat-item-text">
                  Setelah semua kegiatan preventive dilakukan, kami akan tuangkan itu semua kedalam report yang bisa Anda pahami, sehingga Anda bisa membaca bagaimana kondisi server, termasuk kami memberikan rekomendasi apa saja yang harus dilakukan dari hasil preventive maintenance.
                </p>
              </div>
            </div>
            
            <!-- Item 5: Update Versi / Patch Sistem -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance5.png') }}" alt="Update">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Update Versi / Patch Sistem</h3>
                <p class="hnr-manfaat-item-text">
                  Kami memberikan performa dan keamanan terbaik, serta berlangsungnya fitur fitur baru, maka sangat diperlukan untuk melakukan update versi atau patching baik itu update sistem operasi maupun update versi dari Zimbra Mail Server.
                </p>
              </div>
            </div>
            
            <!-- Item 6: Pemeriksaan Service Zimbra -->
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance6.png') }}" alt="Service">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Pemeriksaan Service Zimbra</h3>
                <p class="hnr-manfaat-item-text">
                  Zimbra memiliki banyak services yang digunakan, diantaranya LDAP, Mailbox, Proxy dan MTA sebagai service wajib untuk platform email. Seluruh hal fitur jika salah satu saja service tersebut ada yang not running, oleh karena itu kami melakukan monitoring dan daily check.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Centered Cards Row -->
          <div class="row mt-4 justify-content-center">
            <!-- Item 7: Fast Troubleshooting -->
            <div class="col-md-6 col-lg-5 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance7.png') }}" alt="Troubleshooting">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Fast Troubleshooting</h3>
                <p class="hnr-manfaat-item-text">
                  Kami memberikan jaminan quick respon dengan durasi respon maksimal 1 x 30 menit saat gangguan ditujukan melalui media chat ataupun email. Anda tidak perlu khawatir ketika terjadi masalah dengan Zimbra, tim kami akan segera melakukan pengecekan dan solving problem.
                </p>
              </div>
            </div>
            
            <!-- Item 8: Tanpa SDM Zimbra di Kantor Anda -->
            <div class="col-md-6 col-lg-5 mb-4">
              <div class="hnr-manfaat-item">
                <div class="hnr-manfaat-icon-container">
                  <div class="hnr-manfaat-icon">
                    <img src="{{ asset('assets/images/icon/icon-card-maintenance8.png') }}" alt="Remote">
                  </div>
                </div>
                <h3 class="hnr-manfaat-item-title">Tanpa SDM Zimbra di Kantor Anda</h3>
                <p class="hnr-manfaat-item-text">
                  Dengan berlangganan support atau maintenance Zimbra dari kami, tentu Anda tidak perlu lagi merekrut mahal gaji karyawan yang dapat mengelola email server Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Pilihan Layanan Section -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="hnr-layanan-section">
          <h2 class="hnr-layanan-title"><span class="hnr-layanan-title-orange">Pilihan</span> Layanan Maintenance Zimbra</h2>
          <p class="hnr-layanan-subtitle">Solusi maintenance terbaik untuk memastikan Zimbra Anda tetap andal.</p>
          
          <div class="row mt-4">
            <!-- Basic Support -->
            <div class="col-lg-4 mb-4">
              <div class="hnr-layanan-card">
                <h3 class="hnr-layanan-card-title">Basic Support</h3>
                <div class="hnr-layanan-feature-list">
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Office Hour Support</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">1x Upgrade Version</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">On Site Preventive Maintenance</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Remote Monitoring</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Laporan Maintenance Sistem</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Training Zimbra Admin Console</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Telepon, SMS, Email, Chat Support</span>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Standard Support -->
            <div class="col-lg-4 mb-4">
              <div class="hnr-layanan-card">
                <h3 class="hnr-layanan-card-title">Standard Support</h3>
                <div class="hnr-layanan-feature-list">
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Daily Support</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">2x Upgrade Version</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">On Site Preventive Maintenance</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Remote Monitoring</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Training Maintenance Sistem</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Training Administrasi Sistem</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Telepon, SMS, Email, Chat Support</span>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Premium Support -->
            <div class="col-lg-4 mb-4">
              <div class="hnr-layanan-card">
                <h3 class="hnr-layanan-card-title">Premium Support</h3>
                <div class="hnr-layanan-feature-list">
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Anytime Support</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Unlimited Update Patch</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Unlimited Upgrade Version</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">On Site Preventive Maintenance</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Remote Monitoring</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Laporan Maintenance Sistem</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Training Administrasi Sistem</span>
                  </div>
                  <div class="hnr-layanan-feature">
                    <span class="hnr-check-icon"></span>
                    <span class="hnr-layanan-feature-text">Telepon, SMS, Email, Chat Support</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('components.contact')
  </div>
</section>
@endsection