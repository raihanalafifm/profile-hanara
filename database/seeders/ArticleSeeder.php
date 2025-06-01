<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing articles
        Article::truncate();

        // Sample articles data
        $articles = [
            [
                'title' => 'CDE Group Berbagi Kebahagiaan: Pembagian Sembako dan Santunan untuk Anak Yatim Piatu',
                'description' => 'Menjelang Hari Raya Idul Fitri 1446 H, CDE Group mengadakan kegiatan berbagi kebahagiaan dengan membagikan sembako dan santunan kepada anak-anak yatim piatu.',
                'content' => '<p>Dalam menyambut bulan suci Ramadhan dan menjelang Hari Raya Idul Fitri 1446 H, <strong>PT CDE Group</strong> kembali menunjukkan komitmennya dalam kegiatan sosial kemasyarakatan. Pada tanggal 25 Maret 2025, perusahaan mengadakan acara pembagian sembako dan santunan untuk anak-anak yatim piatu di wilayah sekitar.</p>
                <p>Kegiatan yang berlangsung di Aula Serbaguna ini dihadiri oleh jajaran direksi CDE Group dan menyasar lebih dari <strong>100 anak yatim piatu</strong> dari berbagai panti asuhan di sekitar area operasional perusahaan.</p>
                <h3>Bentuk Kepedulian Perusahaan</h3>
                <p>Direktur Utama CDE Group, Bapak Ahmad Fauzi, menyampaikan bahwa kegiatan ini merupakan bentuk kepedulian perusahaan terhadap masyarakat sekitar, khususnya anak-anak yang membutuhkan.</p>
                <blockquote>"Kami berharap bantuan ini dapat meringankan beban dan membawa kebahagiaan bagi adik-adik semua di bulan Ramadhan ini."</blockquote>
                <p>Paket sembako yang dibagikan berisi:</p>
                <ul>
                    <li>Beras 10 kg</li>
                    <li>Minyak goreng 2 liter</li>
                    <li>Gula pasir 2 kg</li>
                    <li>Susu dan biskuit</li>
                    <li>Santunan tunai</li>
                </ul>',
                'category' => 'csr',
                'link' => null,
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(5),
                'order' => 1
            ],
            [
                'title' => 'CDE Group Berikan Bantuan Sosial Kepada Masyarakat Desa Air Sebayur',
                'description' => 'Air Sebayur, 1 September 2024 – CDE Group kembali menunjukkan komitmennya dalam program CSR dengan memberikan bantuan sosial kepada masyarakat Desa Air Sebayur.',
                'content' => '<p><strong>CDE Group</strong> melaksanakan program bantuan sosial kepada masyarakat Desa Air Sebayur pada tanggal 1 September 2024. Program ini merupakan bagian dari komitmen perusahaan dalam mendukung kesejahteraan masyarakat di sekitar area operasional.</p>
                <h3>Detail Program Bantuan</h3>
                <p>Bantuan yang diberikan meliputi:</p>
                <ul>
                    <li>Renovasi musholla desa</li>
                    <li>Pembangunan sarana air bersih</li>
                    <li>Bantuan peralatan sekolah untuk SD setempat</li>
                    <li>Program beasiswa untuk siswa berprestasi</li>
                </ul>
                <p>Kepala Desa Air Sebayur, Bapak Supriyanto, menyampaikan rasa terima kasihnya atas bantuan yang diberikan. "Bantuan dari CDE Group sangat membantu pembangunan di desa kami, terutama untuk fasilitas ibadah dan pendidikan," ujarnya.</p>',
                'category' => 'csr',
                'link' => null,
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(10),
                'order' => 2
            ],
            [
                'title' => 'Implementasi Zimbra Mail Server Tingkatkan Produktivitas PT Mitra Prima',
                'description' => 'PT Hanara Prima Solusindo berhasil mengimplementasikan Zimbra Mail Server di PT Mitra Prima, meningkatkan efisiensi komunikasi internal perusahaan hingga 40%.',
                'content' => '<p>PT Hanara Prima Solusindo dengan bangga mengumumkan keberhasilan implementasi <strong>Zimbra Mail Server</strong> di PT Mitra Prima, salah satu perusahaan manufaktur terkemuka di Indonesia.</p>
                <h3>Tantangan yang Dihadapi</h3>
                <p>Sebelum implementasi, PT Mitra Prima menghadapi beberapa tantangan:</p>
                <ul>
                    <li>Email server yang sering down</li>
                    <li>Kapasitas penyimpanan terbatas</li>
                    <li>Tidak ada fitur kolaborasi terintegrasi</li>
                    <li>Biaya lisensi email yang mahal</li>
                </ul>
                <h3>Solusi Zimbra</h3>
                <p>Dengan implementasi Zimbra Mail Server, PT Mitra Prima kini menikmati:</p>
                <ul>
                    <li>Uptime server mencapai 99.9%</li>
                    <li>Storage unlimited dengan sistem quota</li>
                    <li>Fitur kolaborasi lengkap (Calendar, Tasks, Briefcase)</li>
                    <li>Penghematan biaya lisensi hingga 60%</li>
                </ul>
                <p>"Sejak menggunakan Zimbra, produktivitas tim kami meningkat signifikan. Fitur kolaborasinya sangat membantu koordinasi antar departemen," ujar Bapak Hendro, IT Manager PT Mitra Prima.</p>',
                'category' => 'tech',
                'link' => 'https://hanara.id/case-study/zimbra-mitra-prima',
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(15),
                'order' => 3
            ],
            [
                'title' => 'Hanara Gelar Workshop Web Development untuk Mahasiswa',
                'description' => 'PT Hanara Prima Solusindo mengadakan workshop gratis tentang web development modern untuk 50 mahasiswa IT di Bengkulu, mendukung pengembangan SDM lokal.',
                'content' => '<p>Dalam rangka mendukung pengembangan sumber daya manusia di bidang teknologi, <strong>PT Hanara Prima Solusindo</strong> menggelar workshop Web Development untuk mahasiswa pada tanggal 20 Mei 2024.</p>
                <h3>Materi Workshop</h3>
                <p>Workshop yang diikuti oleh 50 mahasiswa dari berbagai universitas di Bengkulu ini membahas:</p>
                <ol>
                    <li><strong>Fundamental Web Development</strong>
                        <ul>
                            <li>HTML5 & CSS3</li>
                            <li>JavaScript ES6+</li>
                            <li>Responsive Design</li>
                        </ul>
                    </li>
                    <li><strong>Framework Modern</strong>
                        <ul>
                            <li>Laravel untuk Backend</li>
                            <li>Vue.js untuk Frontend</li>
                            <li>RESTful API</li>
                        </ul>
                    </li>
                    <li><strong>Best Practices</strong>
                        <ul>
                            <li>Git Version Control</li>
                            <li>Clean Code</li>
                            <li>Security Basics</li>
                        </ul>
                    </li>
                </ol>
                <p>Para peserta juga mendapatkan sertifikat dan kesempatan magang di PT Hanara Prima Solusindo.</p>',
                'category' => 'event',
                'link' => null,
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(20),
                'order' => 4
            ],
            [
                'title' => 'Peluncuran HCM System Versi 2.0 dengan Fitur AI',
                'description' => 'PT Hanara Prima Solusindo meluncurkan HCM System versi 2.0 yang dilengkapi dengan teknologi AI untuk mempermudah pengelolaan SDM perusahaan.',
                'content' => '<p>PT Hanara Prima Solusindo dengan bangga mempersembahkan <strong>HCM System versi 2.0</strong>, solusi manajemen SDM terbaru yang dilengkapi dengan teknologi Artificial Intelligence (AI).</p>
                <h3>Fitur-Fitur Unggulan</h3>
                <p>HCM System 2.0 hadir dengan berbagai fitur canggih:</p>
                <ul>
                    <li><strong>AI-Powered Recruitment</strong> - Sistem seleksi kandidat otomatis berdasarkan kriteria yang ditentukan</li>
                    <li><strong>Predictive Analytics</strong> - Prediksi turnover karyawan dan rekomendasi retention strategy</li>
                    <li><strong>Smart Attendance</strong> - Absensi dengan face recognition dan geo-tagging</li>
                    <li><strong>Automated Payroll</strong> - Perhitungan gaji otomatis dengan compliance pajak terbaru</li>
                    <li><strong>Performance Management</strong> - KPI tracking real-time dengan dashboard interaktif</li>
                </ul>
                <h3>Keunggulan Versi 2.0</h3>
                <p>Dibandingkan versi sebelumnya, HCM System 2.0 menawarkan:</p>
                <ol>
                    <li>Peningkatan kecepatan processing hingga 3x lipat</li>
                    <li>User interface yang lebih intuitif dan mobile-friendly</li>
                    <li>Integrasi dengan 20+ aplikasi pihak ketiga</li>
                    <li>Compliance dengan regulasi ketenagakerjaan terbaru</li>
                </ol>
                <p>Untuk informasi lebih lanjut dan demo produk, silakan hubungi tim sales kami.</p>',
                'category' => 'news',
                'link' => 'https://hanara.id/products/hcm-system',
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(3),
                'order' => 5
            ],
            [
                'title' => 'Tips Memilih CCTV yang Tepat untuk Bisnis Anda',
                'description' => 'Panduan lengkap memilih sistem CCTV yang sesuai dengan kebutuhan bisnis, dari spesifikasi teknis hingga pertimbangan budget.',
                'content' => '<p>Keamanan adalah aspek penting dalam menjalankan bisnis. Salah satu cara efektif untuk meningkatkan keamanan adalah dengan memasang sistem CCTV. Namun, dengan banyaknya pilihan di pasaran, bagaimana cara memilih yang tepat?</p>
                <h3>1. Tentukan Kebutuhan Anda</h3>
                <p>Sebelum membeli, identifikasi kebutuhan spesifik bisnis Anda:</p>
                <ul>
                    <li>Area mana saja yang perlu dipantau?</li>
                    <li>Apakah butuh pemantauan 24/7?</li>
                    <li>Berapa lama rekaman perlu disimpan?</li>
                    <li>Apakah perlu akses remote?</li>
                </ul>
                <h3>2. Jenis-Jenis Kamera CCTV</h3>
                <p><strong>a. Analog vs IP Camera</strong></p>
                <ul>
                    <li>Analog: Lebih murah, kualitas standar</li>
                    <li>IP Camera: Kualitas HD/4K, fitur smart analytics</li>
                </ul>
                <p><strong>b. Indoor vs Outdoor</strong></p>
                <ul>
                    <li>Indoor: Desain compact, tidak tahan cuaca</li>
                    <li>Outdoor: Weatherproof, night vision lebih baik</li>
                </ul>
                <h3>3. Fitur Penting yang Harus Ada</h3>
                <ol>
                    <li><strong>Night Vision</strong> - Minimal jarak 20 meter</li>
                    <li><strong>Motion Detection</strong> - Hemat storage dan alert system</li>
                    <li><strong>Remote Access</strong> - Monitor dari smartphone</li>
                    <li><strong>Backup Power</strong> - UPS untuk antisipasi mati listrik</li>
                </ol>
                <h3>4. Pertimbangan Budget</h3>
                <p>Jangan hanya fokus pada harga kamera. Pertimbangkan juga:</p>
                <ul>
                    <li>Biaya instalasi profesional</li>
                    <li>Storage (HDD/Cloud)</li>
                    <li>Maintenance tahunan</li>
                    <li>Upgrade sistem di masa depan</li>
                </ul>
                <p>PT Hanara Prima Solusindo menyediakan konsultasi gratis untuk membantu Anda memilih sistem CCTV yang tepat. Hubungi kami untuk survey lokasi dan penawaran terbaik.</p>',
                'category' => 'tech',
                'link' => null,
                'image' => null,
                'is_active' => true,
                'published_at' => Carbon::now()->subDays(7),
                'order' => 6
            ]
        ];

        // Insert articles
        foreach ($articles as $article) {
            Article::create($article);
        }

        $this->command->info('Articles seeded successfully!');
    }
}