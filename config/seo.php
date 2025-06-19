<?php

return [
    // Default SEO settings
    'defaults' => [
        'title_suffix' => '',
        'author' => 'PT Hanara Prima Solusindo',
        'robots' => 'index, follow',
        'og_type' => 'website',
        'og_image' => 'https://hanara.id/assets/images/icon/icon-hanara.png',
        'twitter_card' => 'summary_large_image',
        'og_site_name' => 'Hanara IT Solution',
        'og_locale' => 'id_ID',
        'twitter_site' => '@hanaraid',
        'og_locale_alternate' => 'en_US',
        'twitter_creator' => '@hanara_id',
    ],
    // '404' => [
    //     'title' => '404 - Halaman Tidak Ditemukan | PT Hanara Prima Solusindo',
    //     'description' => 'Halaman yang Anda cari tidak ditemukan. Silakan kembali ke halaman utama PT Hanara Prima Solusindo.',
    //     'keywords' => '404, error, halaman tidak ditemukan, hanara',
    //     'og_title' => '404 - Halaman Tidak Ditemukan',
    //     'og_description' => 'Halaman yang Anda cari tidak ditemukan di website PT Hanara Prima Solusindo.',
    //     'robots' => 'noindex, follow',
    // ],

    // SEO settings per halaman (maksimal 60 karakter untuk title)
    'pages' => [
        'home' => [
            'title' => 'Hanara – Jasa Zimbra, Nextcloud, dan IT Support Profesional',
            'og_title' => 'Hanara – Jasa Zimbra, Nextcloud, dan IT Support Profesional',
            'description' => 'Hanara adalah partner IT terpercaya untuk solusi Zimbra Mail Server, Nextcloud Cloud Storage, dan layanan dukungan server & jaringan bisnis Anda.',
            'og_description' => 'Hanara adalah partner IT terpercaya untuk solusi Zimbra Mail Server, Nextcloud Cloud Storage, dan layanan dukungan server & jaringan bisnis Anda.',
            'keywords' => 'hanara, jasa zimbra, cloud zimbra indonesia, nextcloud, it support, server maintenance, solusi it bisnis',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-hanara.png',
        ],

        'about' => [
            'title' => 'Tentang Hanara – Partner Solusi IT Profesional di Indonesia',
            'og_title' => 'Tentang Hanara – Partner Solusi IT Profesional di Indonesia',
            'description' => 'Hanara adalah perusahaan teknologi yang menyediakan solusi IT seperti Zimbra, Nextcloud, dan layanan dukungan server. Kenali visi dan tim profesional kami di sini.',
            'og_description' => 'Hanara adalah perusahaan teknologi yang menyediakan solusi IT seperti Zimbra, Nextcloud, dan layanan dukungan server. Kenali visi dan tim profesional kami di sini.',
            'keywords' => 'hanara, tentang hanara, perusahaan it indonesia, jasa it profesional, solusi it, zimbra, nextcloud, dukungan server, profil perusahaan it',
            'og_image' => 'https://hanara.id/assets/images/gambar/bw-meet.png',
        ],

        'contact' => [
            'title' => 'Hubungi Hanara – Konsultasi & Layanan IT Profesional',
            'og_title' => 'Hubungi Hanara – Konsultasi & Layanan IT Profesional',
            'description' => 'Ingin kerja sama atau konsultasi layanan IT seperti Zimbra & Nextcloud? Hubungi tim Hanara melalui formulir atau kontak kami yang tersedia di halaman ini.',
            'og_description' => 'Ingin kerja sama atau konsultasi layanan IT seperti Zimbra & Nextcloud? Hubungi tim Hanara melalui formulir atau kontak kami yang tersedia di halaman ini.',
            'keywords' => 'hubungi hanara, konsultasi it, layanan it, kontak hanara, jasa zimbra, jasa nextcloud, layanan server, it support indonesia',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-hanara.png',
        ],

        'career' => [
            'title' => 'Karir di Hanara – Lowongan IT & Peluang Berkembang',
            'og_title' => 'Karir di Hanara – Lowongan IT & Peluang Berkembang',
            'description' => 'Bergabunglah dengan Hanara, perusahaan IT yang membuka peluang karir di bidang teknologi, server, cloud, dan layanan digital untuk tim profesional.',
            'og_description' => 'Bergabunglah dengan Hanara, perusahaan IT yang membuka peluang karir di bidang teknologi, server, cloud, dan layanan digital untuk tim profesional.',
            'keywords' => 'karir hanara, lowongan it, kerja di hanara, peluang karir teknologi, digital talent, lowongan nextcloud, lowongan zimbra, perusahaan IT',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-hanara.png',
        ],

        'career_detail' => [
            'title' => '{position} | Hanara ',
            'description' => 'Lowongan {position} di Hanara. {type}. Kirim CV sekarang untuk bergabung dengan tim IT professional kami.',
            'keywords' => 'lowongan {position}, karir IT bengkulu, {type} job',
        ],

        'article' => [
            'title' => 'Artikel Hanara – Tips & Insight Seputar Solusi IT dan Server',
            'og_title' => 'Artikel Hanara – Tips & Insight Seputar Solusi IT dan Server',
            'description' => 'Baca berbagai artikel dari Hanara seputar solusi IT, server, cloud, Zimbra, Nextcloud, hingga tips teknologi untuk bisnis Anda. Update rutin setiap minggu.',
            'og_description' => 'Baca berbagai artikel dari Hanara seputar solusi IT, server, cloud, Zimbra, Nextcloud, hingga tips teknologi untuk bisnis Anda. Update rutin setiap minggu.',
            'keywords' => 'artikel hanara, tips it, insight teknologi, solusi it, zimbra, nextcloud, server cloud, blog hanara, artikel teknologi, it support',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-hanara.png',
        ],

        'article_detail' => [
            'title' => '{article}',
            'description' => '{description}',
            'keywords' => '{keywords}',
        ],

        // Zimbra Services
        'zimbra_instalasi' => [
            'title' => 'Instalasi Zimbra Mail Server – Layanan Profesional Hanara',
            'og_title' => 'Instalasi Zimbra Mail Server – Layanan Profesional Hanara',
            'description' => 'Hanara menyediakan jasa instalasi Zimbra Mail Server untuk kebutuhan perusahaan dan lembaga Anda, lengkap dengan konfigurasi optimal dan dukungan teknis ahli.',
            'og_description' => 'Hanara menyediakan jasa instalasi Zimbra Mail Server untuk kebutuhan perusahaan dan lembaga Anda, lengkap dengan konfigurasi optimal dan dukungan teknis ahli.',
            'keywords' => 'instalasi zimbra, install zimbra server, jasa zimbra indonesia, zimbra mail server, konfigurasi zimbra, email server profesional, hanara',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-instalasi.png',
        ],

        'zimbra_maintenance' => [
            'title' => 'Jasa Maintenance Zimbra – Zimbra Local Support',
            'og_title' => 'Jasa Maintenance Zimbra – Zimbra Local Support',
            'description' => 'Layanan maintenance Zimbra dari Hanara mencakup monitoring, backup, update, troubleshooting, dan support untuk memastikan server email Anda berjalan optimal.',
            'og_description' => 'Layanan maintenance Zimbra dari Hanara mencakup monitoring, backup, update, troubleshooting, dan support untuk memastikan server email Anda berjalan optimal.',
            'keywords' => 'zimbra maintenance, support tahunan zimbra, jasa pemeliharaan server, backup zimbra, monitoring zimbra, hanara, zimbra indonesia',
            'og_image' => 'https://hanara.id/assets/images/icon/maintenance-zimbra.png',
        ],

        'zimbra_troubleshooting' => [
            'title' => 'Troubleshooting Zimbra – Solusi Cepat untuk Server Bermasalah',
            'og_title' => 'Troubleshooting Zimbra – Solusi Cepat untuk Server Bermasalah',
            'description' => 'Zimbra Anda bermasalah? Tim Hanara siap membantu troubleshooting Zimbra, pemulihan email server, pengecekan log, dan solusi error Zimbra secara cepat dan aman.',
            'og_description' => 'Zimbra Anda bermasalah? Tim Hanara siap membantu troubleshooting Zimbra, pemulihan email server, pengecekan log, dan solusi error Zimbra secara cepat dan aman.',
            'keywords' => 'troubleshooting zimbra, zimbra error, pemulihan zimbra, jasa perbaikan email server, zimbra bermasalah, hanara, support zimbra',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-troubleshoot.png',
        ],

        'zimbra_cloud' => [
            'title' => 'Zimbra Cloud – Email Bisnis Tanpa Ribet Server Sendiri',
            'og_title' => 'Zimbra Cloud – Email Bisnis Tanpa Ribet Server Sendiri',
            'description' => 'Gunakan Zimbra Cloud dari Hanara untuk email bisnis profesional tanpa perlu server sendiri. Praktis, aman, hemat biaya, dan siap pakai untuk perusahaan Anda.',
            'og_description' => 'Gunakan Zimbra Cloud dari Hanara untuk email bisnis profesional tanpa perlu server sendiri. Praktis, aman, hemat biaya, dan siap pakai untuk perusahaan Anda.',
            'keywords' => 'zimbra cloud, email bisnis, jasa zimbra cloud, sewa zimbra, server email indonesia, cloud mail server, hanara, zimbra indonesia',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-cloud.png',
        ],

        'zimbra_server' => [
            'title' => 'Zimbra Network Edition – Lisensi Resmi & Dukungan Penuh',
            'og_title' => 'Zimbra Network Edition – Lisensi Resmi & Dukungan Penuh',
            'description' => 'Dapatkan lisensi resmi Zimbra Network Edition dari Hanara. Solusi email premium untuk perusahaan dengan fitur lengkap, dukungan teknis, dan stabilitas tinggi.',
            'og_description' => 'Dapatkan lisensi resmi Zimbra Network Edition dari Hanara. Solusi email premium untuk perusahaan dengan fitur lengkap, dukungan teknis, dan stabilitas tinggi.',
            'keywords' => 'zimbra network edition, lisensi zimbra resmi, zimbra server, zimbra NE indonesia, email server premium, hanara, dukungan zimbra',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-server.png',
        ],

        // Software House Services
        'software_web' => [
            'title' => 'Jasa Pembuatan Website & Web Aplikasi | Hanara',
            'description' => 'Hanara siap bantu perusahaan Anda tampil profesional dengan website company profile yang elegan, cepat diakses, dan mudah dikelola.',
            'keywords' => 'jasa website bengkulu, web development, bikin website murah',
            'og_title' => 'Jasa Pembuatan Website & Web Aplikasi | Hanara',
            'og_description' => 'Hanara siap bantu perusahaan Anda tampil profesional dengan website company profile yang elegan, cepat diakses, dan mudah dikelola.',
            'og_image' => 'https://hanara.id/assets/images/icon/jasa-pembuatan-website.png',
        ],

        'software_webapp' => [
            'title' => 'Jasa Pembuatan Website & Web Aplikasi | Hanara',
            'description' => 'Hanara melayani pembuatan website dan web aplikasi sesuai kebutuhan bisnis Anda. Solusi digital berbasis web, responsif, aman, dan mudah dikembangkan.',
            'keywords' => 'aplikasi web custom, sistem informasi, software development',
            'og_title' => 'Jasa Pembuatan Website & Web Aplikasi | Hanara',
            'og_description' => 'Hanara melayani pembuatan website dan web aplikasi sesuai kebutuhan bisnis Anda. Solusi digital berbasis web, responsif, aman, dan mudah dikembangkan.',
            'og_image' => 'https://hanara.id/assets/images/icon/web-app.png',
        ],

        'software_maintenance' => [
            'title' => 'Jasa Maintenance Website Profesional | Hanara',
            'description' => 'Website sering error atau lambat? Hanara siap bantu maintenance website Anda agar tetap optimal, aman, dan selalu up-to-date tanpa gangguan.',
            'keywords' => 'maintenance website, jasa kelola website, support website',
            'og_title' => 'Jasa Maintenance Website Profesional | Hanara',
            'og_description' => 'Website sering error atau lambat? Hanara siap bantu maintenance website Anda agar tetap optimal, aman, dan selalu up-to-date tanpa gangguan.',
            'og_image' => 'https://hanara.id/assets/images/icon/maintenance-web.png',
        ],

        // Other Services
        'cctv' => [
            'title' => 'Jasa Instalasi CCTV Profesional | Hanara',
            'description' => 'Butuh instal CCTV indoor/outdoor? Hanara siap pasang sistem CCTV lengkap, mulai dari survei, instalasi, setting & maintenance dengan garansi resmi.',
            'keywords' => 'pasang cctv bengkulu, hikvision, dahua, jasa cctv',
            'og_title' => 'Jasa Instalasi CCTV Profesional | Hanara',
            'og_description' => 'Butuh instal CCTV indoor/outdoor? Hanara siap pasang sistem CCTV lengkap, mulai dari survei, instalasi, setting & maintenance dengan garansi resmi.',
            'og_image' => 'https://hanara.id/assets/images/icon/cctv-icon.png',
        ],

        'motorola' => [
            'title' => 'Radio HT Motorola | Handy Talkie & Digital Radio',
            'description' => 'Tersedia radio HT Motorola original: digital & analog. Pilihan Xtended (XiR, CP, SL1M), garansi resmi, cocok untuk industri & komunikasi profesional.',
            'keywords' => 'motorola bengkulu, radio ht, two way radio',
            'og_title' => 'Radio HT Motorola | Handy Talkie & Digital Radio',
            'og_description' => 'Tersedia radio HT Motorola original: digital & analog. Pilihan Xtended (XiR, CP, SL1M), garansi resmi, cocok untuk industri & komunikasi profesional.',
            'og_image' => 'https://hanara.id/assets/images/icon/motorola-icon.png',
        ],

        'nextcloud' => [
            'title' => 'Jasa Implementasi Nextcloud Indonesia | Hanara',
            'description' => 'Private cloud storage untuk bisnis. File sharing aman, sync multi-device. On-premise atau cloud. Demo gratis!',
            'keywords' => 'nextcloud indonesia, private cloud, file sharing',
            'og_title' => 'Jasa Implementasi Nextcloud Indonesia | Hanara',
            'og_description' => 'Hanara menyediakan layanan implementasi Nextcloud untuk bisnis Anda. Akses data aman, cloud pribadi, file sharing, dan kolaborasi tanpa batas — server milik Anda.',
            'og_image' => 'https://hanara.id/assets/images/icon/nextcloud-icon.png',
        ],

        'hcm' => [
            'title' => 'Aplikasi HRIS & Payroll (HCM + HCIS Mobile) | Hanara',
            'description' => 'Tingkatkan efisiensi HR Anda dengan HCM lengkap & HCIS Mobile. Hanara hadirkan aplikasi HR, payroll, absensi & mobile support—mudah, cepat, akurat.',
            'keywords' => 'hcm system, hris indonesia, sistem payroll',
            'og_title' => 'Aplikasi HRIS & Payroll (HCM + HCIS Mobile) | Hanara',
            'og_description' => 'Tingkatkan efisiensi HR Anda dengan HCM lengkap & HCIS Mobile. Hanara hadirkan aplikasi HR, payroll, absensi & mobile support—mudah, cepat, akurat.',
            'og_image' => 'https://hanara.id/assets/images/icon/hcm.png',
        ],
        'sikerja' => [
            'title'         => 'siKerja – Smart Utility App by Hanara: QR & Barcode Scanner, Checklist, FinTrack, MIT Connect',
            'og_title'      => 'siKerja – Smart Utility App by Hanara: QR & Barcode Scanner, Checklist, FinTrack, MIT Connect',
            'description'   => 'siKerja adalah aplikasi mobile multifungsi buatan Hanara yang menggabungkan QR & Barcode Scanner, Timestamp Cam, Checklist Manager, Reminder Hub, Quick Notes, FinTrack, dan Scan Doc dalam satu antarmuka ringan. Dilengkapi MIT Connect untuk integrasi sistem proyek IT, cocok untuk individu hingga perusahaan.',
            'og_description' => 'siKerja adalah aplikasi mobile multifungsi buatan Hanara yang menggabungkan QR & Barcode Scanner, Timestamp Cam, Checklist Manager, Reminder Hub, Quick Notes, FinTrack, dan Scan Doc dalam satu antarmuka ringan. Dilengkapi MIT Connect untuk integrasi sistem proyek IT, cocok untuk individu hingga perusahaan.',
            'keywords'      => 'siKerja, aplikasi produktivitas, QR scanner, barcode scanner, timestamp cam, checklist manager, reminder, quick notes, financial tracker, scan doc, MIT Connect, Hanara',
            'og_image'      => 'https://hanara.id/assets/images/icon/icon-sikerja.png',
        ],
        'mit' => [
            'title' => 'MIT – Platform Manajemen Operasional IT Terintegrasi oleh Hanara',
            'og_title' => 'MIT – Platform Manajemen Operasional IT Terintegrasi oleh Hanara',
            'description' => 'MIT (Management Information Technology) adalah aplikasi web terintegrasi yang mendukung manajemen tugas, layanan tiket, pengelolaan infrastruktur, dan sistem informasi internal Departemen IT perusahaan secara digital, transparan, dan efisien.',
            'og_description' => 'MIT (Management Information Technology) adalah aplikasi web terintegrasi yang mendukung manajemen tugas, layanan tiket, pengelolaan infrastruktur, dan sistem informasi internal Departemen IT perusahaan secara digital, transparan, dan efisien.',
            'keywords' => 'MIT, manajemen tugas IT, task management IT, tiket IT, software helpdesk, HCM integrasi, pengelolaan infrastruktur IT, aplikasi internal IT, digitalisasi operasional IT, Hanara',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-mit.png',
        ],
        'sosmed' => [
            'title' => 'Digital Marketing Hanara – Sosial Media, Iklan, dan Konten Profesional',
            'og_title' => 'Digital Marketing Hanara – Sosial Media, Iklan, dan Konten Profesional',
            'description' => 'Hanara menawarkan layanan digital marketing terpadu, mulai dari manajemen sosial media, iklan berbayar, desain visual, hingga produksi video dan konten TikTok. Solusi lengkap untuk branding digital bisnis Anda.',
            'og_description' => 'Hanara menawarkan layanan digital marketing terpadu, mulai dari manajemen sosial media, iklan berbayar, desain visual, hingga produksi video dan konten TikTok. Solusi lengkap untuk branding digital bisnis Anda.',
            'keywords' => 'digital marketing, jasa sosial media, iklan facebook, iklan google, manajemen instagram, konten tiktok, video promosi, jasa desain hanara, jasa copywriting, strategi digital bisnis',
            'og_image' => 'https://hanara.id/assets/images/icon/icon-digitalmarketing.png',
        ],
    ],

    // Schema.org structured data templates
    'schema' => [
        // Service schema for Zimbra
        'zimbra_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Email Server Installation and Maintenance',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo',
                'url' => 'https://hanara.id'
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'IT Services',
                'itemListElement' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Our Services',
                    'itemListElement' => [
                        'Zimbra Mail Server',
                        'Web Development',
                        'Web Application',
                        'CCTV Installation',
                        'Motorola Radio',
                        'Nextcloud',
                        'HCM & HRIS'
                    ]
                ]
            ]
        ],

        // Software House Service Schema
        'software_house_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Software Development Services',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo',
                'url' => 'https://hanara.id',
                'logo' => 'https://hanara.id/assets/images/LOGO-PERUSAHAAN/HANARA.ID-2023.-II.png'
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'availableChannel' => [
                '@type' => 'ServiceChannel',
                'serviceUrl' => 'https://hanara.id/software-house',
                'servicePhone' => '+62-736-7050202',
                'availableLanguage' => ['Indonesian', 'English']
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'IT Services',
                'itemListElement' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Our Services',
                    'itemListElement' => [
                        'Zimbra Mail Server',
                        'Web Development',
                        'Web Application',
                        'CCTV Installation',
                        'Motorola Radio',
                        'Nextcloud',
                        'HCM & HRIS'
                    ]
                ]
            ]
        ]
    ]
];
