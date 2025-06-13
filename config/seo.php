<?php

return [
    // Default SEO settings
    'defaults' => [
        'title_suffix' => ' - Hanara IT Solution',
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

    // SEO settings per halaman (maksimal 60 karakter untuk title)
    'pages' => [
        'home' => [
            'title' => 'IT Solution Bengkulu - Zimbra, Web & CCTV',
            'description' => 'Hanara menyediakan solusi IT terpercaya di Bengkulu. Spesialis Zimbra Mail Server, pembuatan website, CCTV, dan radio Motorola. Konsultasi gratis: 0897-5000-805',
            'keywords' => 'IT solution Bengkulu, zimbra mail server, jasa website, pasang CCTV, radio motorola',
            'og_title' => 'Hanara - Partner IT Terpercaya untuk Bisnis Anda',
            'og_description' => 'Solusi IT lengkap dari tim berpengalaman 10+ tahun. Zimbra, Web Development, CCTV & Motorola Radio.',
        ],

        'about' => [
            'title' => 'Tentang Hanara - IT Solution Professional',
            'description' => 'Hanara adalah perusahaan IT yang menyediakan solusi Zimbra, Nextcloud, dan layanan server. Tim bersertifikat dengan pengalaman 10+ tahun.',
            'keywords' => 'tentang hanara, perusahaan IT indonesia, jasa IT professional',
            'og_title' => 'Tentang Hanara - Partner Solusi IT Terpercaya',
            'og_description' => 'Perusahaan IT dengan tim bersertifikat. Spesialis Zimbra Mail Server, Web Development & Infrastructure.',
            'og_image' => 'https://hanara.id/assets/images/gambar/bw-meet.png',
        ],

        'contact' => [
            'title' => 'Hubungi Hanara - Konsultasi IT Gratis',
            'description' => 'Butuh solusi IT? Hubungi Hanara untuk konsultasi Zimbra, Nextcloud & layanan IT lainnya. Respon cepat via WA: 0897-5000-805',
            'keywords' => 'kontak hanara, konsultasi IT, jasa zimbra, jasa nextcloud',
            'og_title' => 'Hubungi Hanara - Konsultasi IT Professional',
            'og_description' => 'Konsultasi gratis untuk solusi IT bisnis Anda. Tim siap membantu via WA: 0897-5000-805',
        ],

        'career' => [
            'title' => 'Karir di Hanara - Lowongan IT Bengkulu',
            'description' => 'Bergabung dengan Hanara untuk karir di bidang IT. Posisi developer, network engineer, dan digital marketing tersedia. Benefit menarik!',
            'keywords' => 'karir hanara, lowongan IT bengkulu, kerja IT, digital talent',
            'og_title' => 'Lowongan Kerja IT - Bergabung dengan Hanara',
            'og_description' => 'Kembangkan karir IT Anda bersama Hanara. Berbagai posisi tersedia dengan benefit menarik.',
        ],

        'career_detail' => [
            'title' => '{position} - Lowongan di Hanara',
            'description' => 'Lowongan {position} di Hanara. {type}. Kirim CV sekarang untuk bergabung dengan tim IT professional kami.',
            'keywords' => 'lowongan {position}, karir IT bengkulu, {type} job',
        ],

        'article' => [
            'title' => 'Artikel Hanara - Tips IT & Teknologi',
            'description' => 'Artikel seputar solusi IT, Zimbra, Nextcloud, tips teknologi untuk bisnis. Update rutin dari tim expert Hanara.',
            'keywords' => 'artikel IT, tips teknologi, zimbra tutorial, nextcloud guide',
            'og_title' => 'Artikel Hanara - Insight Teknologi Terkini',
            'og_description' => 'Tips dan panduan IT dari expert. Zimbra, Nextcloud, Web Development & solusi teknologi bisnis.',
        ],

        'article_detail' => [
            'title' => '{article}',
            'description' => '{description}',
            'keywords' => '{keywords}',
        ],

        // Zimbra Services
        'zimbra_instalasi' => [
            'title' => 'Instalasi Zimbra Mail Server - Hanara',
            'description' => 'Jasa instalasi Zimbra Mail Server professional. Konfigurasi optimal, training gratis, dan support teknis. Hubungi: 0897-5000-805',
            'keywords' => 'instalasi zimbra, zimbra mail server, email server indonesia',
            'og_title' => 'Instalasi Zimbra - Tim Bersertifikat Hanara',
            'og_description' => 'Instalasi Zimbra cepat & aman dengan garansi. Free training & lifetime support.',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-instalasi.png',
        ],

        'zimbra_maintenance' => [
            'title' => 'Maintenance Zimbra - Support 24/7',
            'description' => 'Layanan maintenance Zimbra mencakup monitoring, backup, update & troubleshooting. Cegah downtime dengan preventive maintenance rutin.',
            'keywords' => 'maintenance zimbra, support zimbra, jasa pemeliharaan server',
            'og_title' => 'Maintenance Zimbra 24/7 - Zero Downtime',
            'og_description' => 'Monitoring 24/7 & response cepat. Jaga email server tetap optimal dengan maintenance rutin.',
            'og_image' => 'https://hanara.id/assets/images/icon/maintenance-zimbra.png',
        ],

        'zimbra_troubleshooting' => [
            'title' => 'Troubleshooting Zimbra - Solusi Cepat',
            'description' => 'Email bermasalah? Tim expert siap atasi error Zimbra, pemulihan data, dan optimasi server. Response time <30 menit.',
            'keywords' => 'troubleshooting zimbra, zimbra error, perbaikan email server',
            'og_title' => 'Troubleshooting Zimbra - Atasi Error Cepat',
            'og_description' => 'Tim expert siap bantu 24/7. Response cepat untuk semua masalah Zimbra Anda.',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-troubleshoot.png',
        ],

        'zimbra_cloud' => [
            'title' => 'Zimbra Cloud - Email Bisnis Hemat',
            'description' => 'Email bisnis professional tanpa ribet server. Zimbra Cloud dari Hanara, mulai 25rb/user/bulan. Setup mudah, langsung pakai!',
            'keywords' => 'zimbra cloud, email bisnis, cloud email indonesia',
            'og_title' => 'Zimbra Cloud - Email Bisnis Tanpa Ribet',
            'og_description' => 'Email professional mulai 25rb/user. Tanpa investasi server, langsung pakai!',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-cloud.png',
        ],

        'zimbra_server' => [
            'title' => 'Zimbra Network Edition - Lisensi Resmi',
            'description' => 'Distributor resmi Zimbra Network Edition. Fitur premium untuk enterprise dengan support official. Harga kompetitif!',
            'keywords' => 'zimbra network edition, lisensi zimbra, zimbra NE indonesia',
            'og_title' => 'Zimbra NE - Distributor Resmi Indonesia',
            'og_description' => 'Lisensi Zimbra NE dengan harga terbaik. Free instalasi & training untuk enterprise.',
            'og_image' => 'https://hanara.id/assets/images/icon/zimbra-server.png',
        ],

        // Software House Services
        'software_web' => [
            'title' => 'Jasa Pembuatan Website - Hanara',
            'description' => 'Website professional mulai 3 juta. Company profile, toko online, custom system. Responsive, SEO friendly & fast loading.',
            'keywords' => 'jasa website bengkulu, web development, bikin website murah',
            'og_title' => 'Jasa Website Professional - Design Modern',
            'og_description' => 'Website custom dengan teknologi terkini. Garansi 1 tahun & free maintenance 3 bulan.',
            'og_image' => 'https://hanara.id/assets/images/icon/jasa-pembuatan-website.png',
        ],

        'software_webapp' => [
            'title' => 'Pembuatan Aplikasi Web - Custom System',
            'description' => 'Aplikasi web custom untuk bisnis. ERP, CRM, HR System dengan teknologi modern. Konsultasi gratis!',
            'keywords' => 'aplikasi web custom, sistem informasi, software development',
            'og_title' => 'Web Application Development - Hanara',
            'og_description' => 'Solusi digital untuk efisiensi bisnis. Teknologi modern, scalable & user friendly.',
            'og_image' => 'https://hanara.id/assets/images/icon/web-app.png',
        ],

        'software_maintenance' => [
            'title' => 'Maintenance Website - Update & Support',
            'description' => 'Maintenance website mulai 500rb/bulan. Update rutin, backup, monitoring 24/7. Jaga performa website tetap optimal!',
            'keywords' => 'maintenance website, jasa kelola website, support website',
            'og_title' => 'Maintenance Website & Aplikasi - Hanara',
            'og_description' => 'Jaga website selalu optimal. Update, backup & monitoring professional.',
            'og_image' => 'https://hanara.id/assets/images/icon/maintenance-web.png',
        ],

        // Other Services
        'cctv' => [
            'title' => 'Pasang CCTV Bengkulu - Hikvision & Dahua',
            'description' => 'Jasa pasang CCTV Bengkulu dengan produk original Hikvision & Dahua. Garansi resmi, teknisi berpengalaman. Survey gratis!',
            'keywords' => 'pasang cctv bengkulu, hikvision, dahua, jasa cctv',
            'og_title' => 'CCTV Bengkulu - Distributor Resmi',
            'og_description' => 'CCTV berkualitas, harga terbaik. Garansi resmi & after sales terjamin.',
            'og_image' => 'https://hanara.id/assets/images/icon/cctv-icon.png',
        ],

        'motorola' => [
            'title' => 'Radio Motorola Bengkulu - Distributor Resmi',
            'description' => 'Jual HT Motorola, repeater & aksesoris. Service center resmi dengan teknisi tersertifikat. Ready stock!',
            'keywords' => 'motorola bengkulu, radio ht, two way radio',
            'og_title' => 'Motorola Radio - Distributor & Service Center',
            'og_description' => 'Radio Motorola original, garansi resmi. Service center tersedia.',
            'og_image' => 'https://hanara.id/assets/images/icon/motorola-icon.png',
        ],

        'nextcloud' => [
            'title' => 'Nextcloud - Private Cloud Storage',
            'description' => 'Private cloud storage untuk bisnis. File sharing aman, sync multi-device. On-premise atau cloud. Demo gratis!',
            'keywords' => 'nextcloud indonesia, private cloud, file sharing',
            'og_title' => 'Nextcloud - Cloud Storage Aman',
            'og_description' => 'Kontrol penuh atas data bisnis. Kolaborasi mudah, akses dimana saja.',
            'og_image' => 'https://hanara.id/assets/images/icon/nextcloud-icon.png',
        ],

        'hcm' => [
            'title' => 'HCM & HRIS - Sistem HR Digital',
            'description' => 'Sistem HR terintegrasi untuk payroll, absensi, cuti & performance. Efisiensi pengelolaan SDM dalam satu platform.',
            'keywords' => 'hcm system, hris indonesia, sistem payroll',
            'og_title' => 'HCM & HRIS - Digitalisasi SDM',
            'og_description' => 'Kelola SDM lebih efisien. Payroll otomatis, absensi digital, employee self service.',
            'og_image' => 'https://hanara.id/assets/images/icon/hcm.png',
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
