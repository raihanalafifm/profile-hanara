<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ZimbraController extends Controller
{
    /**
     * Display Zimbra installation page
     */
    public function instalasi(): View
    {
        $seo = config('seo.pages.zimbra_instalasi');
        $seoDefaults = config('seo.defaults');

        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'],
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/zimbra-instalasi.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('instalasi-zimbra'),
        ];

        // Schema.org untuk Service
        $schemaService = config('seo.schema.zimbra_service');

        // FAQ Data untuk Schema
        $faqData = [
            [
                'question' => 'Apa itu Zimbra Mail Server?',
                'answer' => 'Zimbra Mail Server adalah sistem email bisnis yang powerful dan fleksibel, banyak digunakan oleh perusahaan, institusi pendidikan, dan lembaga pemerintahan. Selain layanan email, Zimbra juga dilengkapi fitur kolaborasi seperti kalender, task management, penyimpanan file (briefcase), dan folder sharing.'
            ],
            [
                'question' => 'Berapa lama proses instalasi Zimbra Mail Server?',
                'answer' => 'Durasi instalasi tergantung pada kebutuhan dan arsitektur sistem yang diinginkan. Untuk setup standar dengan jumlah user terbatas, proses bisa berlangsung dalam hitungan minggu. Namun untuk implementasi skala besar, termasuk migrasi data, multi-server, atau integrasi khusus, proses bisa memakan waktu lebih panjang sesuai tahapan yang disepakati bersama.'
            ],
            [
                'question' => 'Berapa biaya instalasi Zimbra di Hanara?',
                'answer' => 'Biaya instalasi Zimbra disesuaikan dengan cakupan pekerjaan, seperti jumlah user, kebutuhan arsitektur (single atau multi-server), sistem integrasi, serta migrasi data. Hanara menawarkan layanan instalasi mulai dari paket dasar hingga enterprise-grade. Untuk penawaran resmi, silakan hubungi tim kami untuk konsultasi lebih lanjut.'
            ],
            [
                'question' => 'Apakah bisa menggunakan domain email sendiri?',
                'answer' => 'Tentu. Anda dapat menggunakan nama domain perusahaan atau organisasi sendiri (contoh: @namaperusahaan.com) untuk seluruh akun email. Kami bantu sepenuhnya dalam proses konfigurasi DNS dan integrasi domain.'
            ],
            [
                'question' => 'Apakah Zimbra mendukung akses dari perangkat mobile?',
                'answer' => 'Ya. Zimbra mendukung protokol POP3/IMAP yang memungkinkan akses dari aplikasi email di perangkat mobile seperti Outlook, K-9 Mail, dan Gmail. Untuk fitur sinkronisasi otomatis kalender dan kontak, Zimbra Network Edition mendukung ActiveSync.'
            ],
            [
                'question' => 'Apa perbedaan Zimbra OSE dan Network Edition?',
                'answer' => 'Zimbra OSE (Open Source Edition) merupakan versi gratis dengan fitur dasar, cocok untuk internal atau non-critical email. Sementara Zimbra Network Edition menawarkan fitur lengkap seperti ActiveSync, backup & restore, dan dukungan resmi. Hanara melayani instalasi untuk kedua versi sesuai kebutuhan Anda.'
            ],
            [
                'question' => 'Bagaimana keamanan Zimbra Mail Server?',
                'answer' => 'Zimbra mendukung koneksi terenkripsi menggunakan SSL/TLS pada SMTP, POP3, dan IMAP. Anda juga bisa mengaktifkan fitur keamanan tambahan seperti antivirus, antispam, serta two-factor authentication (2FA) untuk melindungi akun pengguna dan sistem email secara menyeluruh.'
            ],
            [
                'question' => 'Bagaimana jika hanya butuh email profesional tanpa instalasi server?',
                'answer' => 'Jika Anda hanya membutuhkan layanan email profesional tanpa perlu mengelola server sendiri, kami juga menyediakan Zimbra Cloud Hanara — layanan email berbasis cloud dengan harga terjangkau dan langsung siap digunakan, cocok untuk UKM dan tim kecil.'
            ]
        ];

        return view('content.zimbra.instalasi', compact(
            'seoData',
            'schemaService',
            'faqData'
        ));
    }

    /**
     * Display Zimbra maintenance page
     */
    public function maintenance(): View
    {
        $seo = config('seo.pages.zimbra_maintenance');
        $seoDefaults = config('seo.defaults');

        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'],
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/maintenance-zimbra.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('maintenance-zimbra'),
        ];

        // Schema.org untuk Service
        $schemaService = config('seo.schema.zimbra_service');

        // FAQ Data untuk Maintenance
        $faqData = [
            [
                'question' => 'Apa yang dimaksud dengan layanan maintenance Zimbra di Hanara?',
                'answer' => 'Layanan maintenance Zimbra adalah dukungan teknis tahunan dari tim Hanara untuk memastikan Zimbra Mail Server Anda tetap berjalan stabil. Layanan ini meliputi patching, monitoring, preventive check, hingga troubleshooting saat dibutuhkan.'
            ],
            [
                'question' => 'Apakah Hanara hanya melayani maintenance untuk Zimbra yang mereka instal?',
                'answer' => 'Tidak. Kami juga melayani maintenance untuk Zimbra yang sudah lebih dulu terpasang, termasuk dari vendor lain, selama sistemnya bisa diakses dan didukung.'
            ],
            [
                'question' => 'Apakah layanan maintenance mencakup perbaikan jika server Zimbra mengalami error?',
                'answer' => 'Ya. Jika Anda berlangganan paket support, tim kami akan membantu proses investigasi dan pemulihan sistem, baik melalui remote maupun onsite (tergantung paket yang dipilih).'
            ],
            [
                'question' => 'Apa itu remote monitoring?',
                'answer' => 'Remote monitoring adalah proses pemantauan performa dan layanan Zimbra dari jarak jauh secara berkala. Kami bisa mendeteksi potensi masalah lebih awal, sebelum berdampak pada operasional.'
            ],
            [
                'question' => 'Apakah saya bisa menyesuaikan jadwal preventive maintenance?',
                'answer' => 'Bisa. Untuk paket Standard dan Premium, jadwal preventive maintenance bisa disepakati di awal dan disesuaikan kebutuhan.'
            ],
            [
                'question' => 'Berapa lama kontrak layanan maintenance ini berlaku?',
                'answer' => 'Kontrak berlaku selama 1 tahun sejak tanggal aktivasi. Perpanjangan dapat dilakukan secara otomatis atau manual sesuai perjanjian.'
            ]
        ];

        return view('content.zimbra.maintenance', compact(
            'seoData',
            'schemaService',
            'faqData'
        ));
    }

    /**
     * Display Zimbra troubleshooting page
     */
    public function troubleshooting(): View
    {
        $seo = config('seo.pages.zimbra_troubleshooting');
        $seoDefaults = config('seo.defaults');

        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'],
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/zimbra-troubleshoot.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('troubleshooting-zimbra'),
        ];

        // Schema.org untuk Service
        $schemaService = config('seo.schema.zimbra_service');

        // FAQ Data untuk Troubleshooting
        $faqData = [
            [
                'question' => 'Apakah saya bisa menggunakan layanan troubleshooting jika Zimbra saya bukan dari Hanara?',
                'answer' => 'Bisa. Kami melayani perbaikan Zimbra dari berbagai sumber pemasangan, baik dari vendor lain maupun internal Anda sendiri.'
            ],
            [
                'question' => 'Apakah bisa dilakukan secara remote?',
                'answer' => 'Ya. Banyak kasus troubleshooting Zimbra yang dapat diselesaikan via remote access. Namun untuk kondisi tertentu, kami juga menyediakan opsi onsite (dengan penyesuaian biaya dan jadwal).'
            ],
            [
                'question' => 'Apakah data email saya akan aman saat proses troubleshooting?',
                'answer' => 'Tentu. Kami sangat menjaga integritas data. Setiap tindakan akan dilakukan dengan hati-hati dan terdokumentasi. Jika dibutuhkan backup, kami akan koordinasikan terlebih dahulu.'
            ],
            [
                'question' => 'Berapa lama proses penanganan masalah biasanya?',
                'answer' => 'Waktu penyelesaian tergantung pada jenis masalah dan kondisi sistem. Beberapa kasus bisa selesai dalam hitungan jam, sementara kasus kompleks mungkin memerlukan penjadwalan lebih lanjut.'
            ],
            [
                'question' => 'Apakah saya akan mendapatkan laporan setelah masalah ditangani?',
                'answer' => 'Ya. Kami memberikan ringkasan troubleshooting dalam bentuk laporan teknis yang mencakup penyebab masalah, solusi yang diambil, serta saran pencegahan ke depan.'
            ],
            [
                'question' => 'Bagaimana cara saya memulai proses troubleshooting dengan Hanara?',
                'answer' => 'Cukup hubungi kami melalui WhatsApp, email, atau formulir kontak di halaman ini. Tim kami akan segera menghubungi Anda untuk analisa awal dan langkah selanjutnya.'
            ]
        ];

        return view('content.zimbra.troubleshooting', compact(
            'seoData',
            'schemaService',
            'faqData'
        ));
    }

    /**
     * Display Zimbra cloud page
     */
    public function cloud(): View
    {
        $seo = config('seo.pages.zimbra_cloud');
        $seoDefaults = config('seo.defaults');

        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'],
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/zimbra-cloud.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('cloud-zimbra'),
        ];

        // Schema.org untuk Service
        $schemaService = config('seo.schema.zimbra_service');

        // Product schema untuk pricing - sudah ada di method generateProductSchema()
        $schemaProduct = $this->generateProductSchema();

        return view('content.zimbra.cloud', compact(
            'seoData',
            'schemaService',
            'schemaProduct'
        ));
    }

    /**
     * Display Zimbra server page
     */
    public function server(): View
    {
        $seo = config('seo.pages.zimbra_server');
        $seoDefaults = config('seo.defaults');

        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'],
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/zimbra-server.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('server-zimbra'),
        ];

        // Schema.org untuk Service
        $schemaService = config('seo.schema.zimbra_service');

        return view('content.zimbra.server', compact('seoData', 'schemaService'));
    }

    /**
     * Generate FAQ Schema for troubleshooting page
     */
    private function generateFAQSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Apa itu Zimbra Mail Server?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Zimbra Mail Server adalah platform email server yang powerful dan fleksibel. Zimbra tidak hanya menyediakan layanan pengiriman dan penerimaan email, tetapi juga berbagai fitur produktivitas seperti kalender, task management, folder sharing, dan penyimpanan file (briefcase).'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Berapa lama proses instalasi Zimbra Mail Server?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Proses instalasi Zimbra Mail Server biasanya memakan waktu sekitar 1-2 hari kerja, tergantung pada kompleksitas infrastruktur dan kebutuhan spesifik.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Apakah Zimbra mendukung akses dari perangkat mobile?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ya, Zimbra sepenuhnya mendukung akses dari perangkat mobile melalui protokol ActiveSync. Pengguna dapat dengan mudah mengakses email, kalender, kontak, dan fitur Zimbra lainnya melalui smartphone atau tablet.'
                    ]
                ]
            ]
        ];
    }

    /**
     * Generate Product Schema for cloud pricing
     */
    /**
     * Generate Product Schema for cloud pricing
     */
    private function generateProductSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => 'Zimbra Cloud Email Service',
            'description' => 'Cloud-based email service dengan fitur lengkap untuk bisnis',
            'brand' => [
                '@type' => 'Brand',
                'name' => 'Zimbra'
            ],
            // TAMBAHKAN FIELD IMAGE INI
            'image' => [
                'https://hanara.id/assets/images/icon/zimbra-cloud.png',
                'https://hanara.id/assets/images/icon/zimbra cloud.png',
                'https://hanara.id/assets/images/icon/icon-paket-cloud4.png'
            ],
            'offers' => [
                [
                    '@type' => 'Offer',
                    'name' => 'Business Email',
                    'price' => '30000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock',
                    // Optional: tambahkan image untuk setiap offer juga
                    'image' => 'https://hanara.id/assets/images/icon/icon-paket-cloud.png'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Business Email Plus',
                    'price' => '50000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock',
                    'image' => 'https://hanara.id/assets/images/icon/icon-paket-cloud2.png'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Standard Edition',
                    'price' => '70000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock',
                    'image' => 'https://hanara.id/assets/images/icon/icon-paket-cloud3.png'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Professional Edition',
                    'price' => '90000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock',
                    'image' => 'https://hanara.id/assets/images/icon/icon-paket-cloud4.png'
                ]
            ]
        ];
    }
}
