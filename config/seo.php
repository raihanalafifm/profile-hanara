<?php

return [
    // Default SEO settings
    'defaults' => [
        'title_suffix' => ' - PT Hanara Prima Solusindo',
        'author' => 'PT Hanara Prima Solusindo',
        'robots' => 'index, follow',
        'og_type' => 'website',
        'og_image' => 'assets/images/icon/icon hanara.png',
        'twitter_card' => 'summary_large_image',
    ],

    // SEO settings per halaman
    'pages' => [
        'home' => [
            'title' => 'Jasa IT Solution Bengkulu - Zimbra, Web Development, CCTV | Hanara',
            'description' => 'PT Hanara Prima Solusindo - Penyedia solusi IT terpercaya di Bengkulu. Layanan Zimbra Mail Server, pembuatan website, instalasi CCTV, radio Motorola. Konsultasi gratis ☎ 0897-5000-805',
            'keywords' => 'IT solution Bengkulu, jasa pembuatan website Bengkulu, instalasi zimbra, pasang CCTV Bengkulu, radio motorola, software house Bengkulu, cloud services Indonesia',
            'og_title' => 'Hanara - Partner IT Terpercaya untuk Transformasi Digital Bisnis Anda',
            'og_description' => 'Solusi IT lengkap: Zimbra Mail Server, Web Development, CCTV, Motorola Radio. Tim profesional dengan 10+ tahun pengalaman. Hubungi: 0897-5000-805',
        ],

        'about' => [
            'title' => 'Tentang Hanara – Partner Solusi IT Profesional di Indonesia',
            'description' => 'Hanara adalah perusahaan teknologi yang menyediakan solusi IT seperti Zimbra, Nextcloud, dan layanan dukungan server. Kenali visi dan tim profesional kami di sini.',
            'keywords' => 'hanara, tentang hanara, perusahaan it indonesia, jasa it profesional, solusi it, zimbra',
            'og_title' => 'Tentang Hanara – Partner Solusi IT Profesional di Indonesia',
            'og_description' => 'Perusahaan IT solution dengan tim bersertifikat & berpengalaman 10+ tahun. Spesialis Zimbra Mail Server, Web Development & Infrastructure.',
            'og_image' => '/assets/images/gambar/bw-meet.png',
        ],

        'contact' => [
            'title' => 'Hubungi hanara - Konsultasi dan layanan it profesional',
            'description' => 'Ingin kerja sama atau konsultasi layanan IT seperti Zimbra & Nextcloud? Hubungi tim Hanara melalui formulir atau kontak kami yang tersedia di halaman ini.',
            'keywords' => 'hubungi hanara, konsultasi it, layanan it, kontak hanara, jasa zimbra, jasa nextcloud, layanan server, it support indonesia',
            'og_title' => 'Hubungi hanara - Konsultasi dan layanan it profesional',
            'og_description' => 'ngin kerja sama atau konsultasi layanan IT seperti Zimbra & Nextcloud? Hubungi tim Hanara melalui formulir atau kontak kami yang tersedia di halaman ini.',
        ],

        'career' => [
            'title' => 'Karir di Hanara – Lowongan IT & Peluang Berkembang',
            'description' => 'Bergabunglah dengan Hanara, perusahaan IT yang membuka peluang karir di bidang teknologi, server, cloud, dan layanan digital untuk tim profesional.',
            'keywords' => 'karir hanara, lowongan it, kerja di hanara, pelang karis teknologi, digital talent, lowongan nextcloud, lowongan zimbra, perusahaan it',
            'og_title' => 'Lowongan Kerja - Bergabung dengan Tim IT Hanara',
            'og_description' => 'Kembangkan karir Anda bersama Hanara. Berbagai posisi IT tersedia dengan benefit menarik. Apply sekarang!',
        ],

        'career_detail' => [
            'title' => '{position} - Lowongan Kerja di PT Hanara Prima Solusindo',
            'description' => 'Lowongan {position} di PT Hanara Prima Solusindo. {type}. Kirim CV dan portfolio Anda sekarang untuk bergabung dengan tim IT profesional kami.',
            'keywords' => 'lowongan {position}, karir IT bengkulu, job {position} bengkulu, {type} job, lowongan kerja IT {position}',
        ],
        'article' => [
            'title' => 'Artikel Hanara – Tips & Insight Seputar Solusi IT dan Server',
            'description' => 'Baca berbagai artikel dari Hanara seputar solusi IT, server, cloud, Zimbra, Nextcloud, hingga tips teknologi untuk bisnis Anda. Update rutin setiap minggu.',
            'keywords' => 'artikel hanara, tips it, insight teknologi, solusi it, zimbra, nextcloud, server cloud, blog hanara, artikel teknologi, it support',
            'og_title' => 'artikel hanara - tips dan trik solusi IT dan server',
            'og_description' => 'Baca berbagai artikel dari Hanara seputar solusi IT, server, cloud, Zimbra, Nextcloud, hingga tips teknologi untuk bisnis Anda. Update rutin setiap minggu.',
        ],
        'article_detail' => [
            'title' => '{article} - Tips & Insight Seputar Solusi IT dan Server',
            'description' => 'baca {article} di PT Hanara Prima Solusindo. {kategori}. ',
            'keywords' => 'baca {article}, IT bengkulu, kumpulan {article} bengkulu, {kategori} baca, kumpulan IT {article}',
        ],

        // Zimbra Services - Complete SEO Configuration
        'zimbra_instalasi' => [
            'title' => 'instalasi Zimbra Mail Server – Layanan Profesional Hanara',
            'description' => 'Hanara menyediakan jasa instalasi Zimbra Mail Server untuk kebutuhan perusahaan dan lembaga Anda, lengkap dengan konfigurasi optimal dan dukungan teknis ahli.',
            'keywords' => 'instalasi zimbra, install zimbra server, jasa zimbra indonesia, zimbra mail server, konfigurasi zimbra, email server profesional, hanara',
            'og_title' => 'Instalasi Zimbra Mail Server - Tim Profesional Bersertifikat',
            'og_description' => 'Instalasi Zimbra cepat & aman dengan garansi. Free training & support. Hub: 0897-5000-805',
            'og_image' => '/assets/images/og-zimbra-instalasi.jpg',
        ],

        'zimbra_maintenance' => [
            'title' => 'Jasa Maintenance Zimbra – Zimbra Local Support',
            'description' => 'Layanan maintenance Zimbra dari Hanara mencakup monitoring, backup, update, troubleshooting, dan support untuk memastikan server email Anda berjalan optimal.',
            'keywords' => 'zimbra maintenance, support tahunan zimbra, jasa pemeliharaan server, backup zimbra, monitoring zimbra, hanara, zimbra indonesia',
            'og_title' => 'Maintenance Zimbra 24/7 - Jaga Email Server Tetap Optimal',
            'og_description' => 'Maintenance zimbra dengan monitoring 24/7 & response cepat. Cegah downtime dengan preventive maintenance rutin.',
            'og_image' => '/assets/images/og-zimbra-maintenance.jpg',
        ],

        'zimbra_troubleshooting' => [
            'title' => 'Troubleshooting Zimbra – Solusi Cepat untuk Server Bermasalah',
            'description' => 'Zimbra Anda bermasalah? Tim Hanara siap membantu troubleshooting Zimbra, pemulihan email server, pengecekan log, dan solusi error Zimbra secara cepat dan aman.',
            'keywords' => 'troubleshooting zimbra, zimbra error, pemulihan zimbra, jasa perbaikan email server, zimbra bermasalah, hanara, support zimbra',
            'og_title' => 'Troubleshooting Zimbra - Atasi Masalah Email Server Cepat',
            'og_description' => 'Email bermasalah? Tim expert kami siap bantu. Response time <30 menit.',
            'og_image' => '/assets/images/og-zimbra-troubleshooting.jpg',
        ],

        'zimbra_cloud' => [
            'title' => 'Zimbra Cloud – Email Bisnis Tanpa Ribet Server Sendiri',
            'description' => 'Gunakan Zimbra Cloud dari Hanara untuk email bisnis profesional tanpa perlu server sendiri. Praktis, aman, hemat biaya, dan siap pakai untuk perusahaan Anda.',
            'keywords' => 'zimbra cloud, email bisnis, jasa zimbra cloud, sewa zimbra, server email indonesia, cloud email server, hanara, zimbra indonesia',
            'og_title' => 'Zimbra Cloud – Email Bisnis Tanpa Ribet Server Sendiri',
            'og_description' => 'Gunakan Zimbra Cloud dari Hanara untuk email bisnis profesional tanpa perlu server sendiri. Praktis, aman, hemat biaya, dan siap pakai untuk perusahaan Anda.',
            'og_image' => '/assets/images/og-zimbra-cloud.jpg',
        ],

        'zimbra_server' => [
            'title' => 'Zimbra Network Edition – Lisensi Resmi & Dukungan Penuh',
            'description' => 'Dapatkan lisensi resmi Zimbra Network Edition dari Hanara. Solusi email premium untuk perusahaan dengan fitur lengkap, dukungan teknis, dan stabilitas tinggi.',
            'keywords' => 'zimbra network edition, lisensi zimbra resmi, zimbra server, zimbra NE indonesia, email server premium, hanara, dukungan zimbra',
            'og_title' => 'Lisensi Zimbra Network Edition - Distributor Resmi Indonesia',
            'og_description' => 'Lisensi Zimbra NE dengan harga kompetitif. Free instalasi & training.',
            'og_image' => '/assets/images/og-zimbra-server.jpg',
        ],

        // Software House Services
        'software_web' => [
            'title' => 'Jasa Pembuatan Website Professional - Custom & Responsive',
            'description' => 'Jasa pembuatan website custom dengan teknologi terkini. Website company profile, toko online, sistem informasi. Garansi 1 tahun & free maintenance 3 bulan.',
            'keywords' => 'jasa pembuatan website, web development bengkulu, website company profile, toko online, jasa bikin website murah, web developer professional',
            'og_title' => 'Jasa Pembuatan Website - Design Modern & SEO Friendly',
            'og_description' => 'Website professional mulai 3 juta. Responsive, SEO friendly, loading cepat. Portofolio 200+ website.',
        ],

        'software_webapp' => [
            'title' => 'Jasa Pembuatan Aplikasi Web - Sistem Informasi Custom',
            'description' => 'Pengembangan aplikasi web custom untuk kebutuhan bisnis. ERP, CRM, HR System, Inventory, dan sistem informasi lainnya. Teknologi modern & scalable.',
            'keywords' => 'jasa pembuatan aplikasi web, web application development, sistem informasi custom, aplikasi bisnis, software custom, aplikasi inventory',
            'og_title' => 'Web Application Development - Solusi Digital Bisnis Anda',
            'og_description' => 'Aplikasi web custom sesuai kebutuhan bisnis. Teknologi modern, user friendly, full support. Konsultasi gratis!',
        ],

        'software_maintenance' => [
            'title' => 'Jasa Maintenance Website & Aplikasi - Update & Support',
            'description' => 'Layanan maintenance website dan aplikasi profesional. Update konten, backup rutin, monitoring uptime, fix bug, dan optimasi performa. Paket mulai 500rb/bulan.',
            'keywords' => 'maintenance website, jasa maintenance aplikasi, update website, website support, maintenance bulanan, kelola website',
            'og_title' => 'Maintenance Website & Aplikasi - Jaga Performa Optimal',
            'og_description' => 'Maintenance website mulai 500rb/bulan. Update rutin, backup, monitoring 24/7. Website selalu optimal!',
        ],

        // Other Services
        'cctv' => [
            'title' => 'Jasa Pasang CCTV Bengkulu - Hikvision & Dahua Resmi',
            'description' => 'Jasa instalasi CCTV profesional di Bengkulu. Produk original Hikvision & Dahua, garansi resmi, free maintenance 1 tahun. Survey lokasi gratis.',
            'keywords' => 'pasang cctv bengkulu, jasa cctv bengkulu, hikvision bengkulu, dahua bengkulu, instalasi cctv, harga cctv bengkulu',
            'og_title' => 'Pasang CCTV Bengkulu - Distributor Resmi Hikvision & Dahua',
            'og_description' => 'CCTV berkualitas dengan harga terbaik. Garansi resmi, teknisi berpengalaman, after sales terjamin. Survey gratis!',
        ],

        'motorola' => [
            'title' => 'Radio Motorola Bengkulu - Distributor Resmi Two Way Radio',
            'description' => 'Distributor resmi radio komunikasi Motorola di Bengkulu. Jual HT Motorola, repeater, dan aksesoris. Service center resmi dengan teknisi tersertifikat.',
            'keywords' => 'motorola bengkulu, radio motorola, jual ht motorola, two way radio, repeater motorola, service motorola bengkulu',
            'og_title' => 'Motorola Radio Bengkulu - Distributor & Service Center Resmi',
            'og_description' => 'Radio Motorola original dengan garansi resmi. Ready stock, harga kompetitif, service center tersedia.',
        ],

        'nextcloud' => [
            'title' => 'Nextcloud Indonesia - Private Cloud Storage untuk Bisnis',
            'description' => 'Implementasi Nextcloud untuk private cloud storage perusahaan. File sharing aman, kolaborasi tim, sync multi-device. On-premise atau cloud hosting.',
            'keywords' => 'nextcloud Indonesia, private cloud storage, file sharing perusahaan, cloud storage lokal, nextcloud installation, self hosted cloud',
            'og_title' => 'Nextcloud - Solusi Private Cloud Storage Aman untuk Bisnis',
            'og_description' => 'Private cloud storage dengan kontrol penuh. Data aman, kolaborasi mudah, akses dimana saja. Demo gratis!',
        ],

        'hcm' => [
            'title' => 'HCM & HRIS System - Solusi HR Digital Terintegrasi',
            'description' => 'Sistem HCM (Human Capital Management) dan HRIS terintegrasi. Kelola payroll, absensi, cuti, performance, dan recruitment dalam satu platform.',
            'keywords' => 'hcm system, hris Indonesia, human capital management, sistem payroll, aplikasi hr, software hrd, attendance system',
            'og_title' => 'HCM & HRIS - Digitalisasi Manajemen SDM Perusahaan',
            'og_description' => 'Sistem HR terintegrasi untuk efisiensi pengelolaan SDM. Payroll otomatis, absensi digital, employee self service.',
        ],
    ],

    // Schema.org structured data templates
    'schema' => [
        'organization' => [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'PT Hanara Prima Solusindo',
            'alternateName' => 'Hanara',
            'url' => 'https://hanara.id',
            'logo' => 'https://hanara.id/assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png',
            'description' => 'Penyedia solusi IT terpadu di Indonesia',
            'foundingDate' => '2018',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Jl. Batang Hari, RT.011/RW.003, Nusa Indah',
                'addressLocality' => 'Bengkulu',
                'addressRegion' => 'Bengkulu',
                'postalCode' => '38223',
                'addressCountry' => 'ID'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+62-736-7050202',
                'contactType' => 'customer service',
                'areaServed' => 'ID',
                'availableLanguage' => ['Indonesian', 'English']
            ],
            'sameAs' => [
                'https://www.facebook.com/hanaraprima',
                'https://www.instagram.com/hanaraprima',
                'https://www.linkedin.com/company/hanara-prima-solusindo'
            ]
        ],

        // Service schema for Zimbra
        'zimbra_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Email Server Installation and Maintenance',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo'
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Zimbra Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Zimbra Installation',
                            'description' => 'Professional Zimbra Mail Server installation service'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Zimbra Maintenance',
                            'description' => '24/7 monitoring and maintenance service'
                        ]
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
                'logo' => 'https://hanara.id/assets/images/LOGO PERUSAHAAN/HANARA.ID-2023.-II.png'
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
                'name' => 'Software Development Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Web Development',
                            'description' => 'Custom website development with modern technologies',
                            'category' => 'Web Development',
                            'provider' => [
                                '@type' => 'Organization',
                                'name' => 'PT Hanara Prima Solusindo'
                            ]
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => '3000000',
                            'priceCurrency' => 'IDR',
                            'minPrice' => '3000000',
                            'maxPrice' => '50000000'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Web Application Development',
                            'description' => 'Enterprise web application and system development',
                            'category' => 'Software Development'
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => 'Custom Quote',
                            'priceCurrency' => 'IDR'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Website Maintenance',
                            'description' => 'Monthly website maintenance and support',
                            'category' => 'IT Support'
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => '500000',
                            'priceCurrency' => 'IDR',
                            'minPrice' => '500000',
                            'unitText' => 'MONTH'
                        ]
                    ]
                ]
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '127',
                'bestRating' => '5',
                'worstRating' => '1'
            ]
        ],

        // CCTV & Motorola Service Schema
        'hardware_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Security and Communication Hardware Installation',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo'
            ],
            'areaServed' => [
                '@type' => 'AdministrativeArea',
                'name' => 'Bengkulu',
                'containedIn' => [
                    '@type' => 'Country',
                    'name' => 'Indonesia'
                ]
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Hardware Installation Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'CCTV Installation',
                            'description' => 'Professional CCTV installation with Hikvision and Dahua products',
                            'brand' => [
                                ['@type' => 'Brand', 'name' => 'Hikvision'],
                                ['@type' => 'Brand', 'name' => 'Dahua']
                            ],
                            'serviceOutput' => 'Complete CCTV system with warranty'
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => '1500000',
                            'priceCurrency' => 'IDR',
                            'minPrice' => '1500000',
                            'unitText' => 'per camera'
                        ],
                        'warranty' => [
                            '@type' => 'WarrantyPromise',
                            'durationOfWarranty' => [
                                '@type' => 'QuantitativeValue',
                                'value' => '1',
                                'unitText' => 'year'
                            ],
                            'warrantyScope' => 'Product and installation warranty'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Motorola Radio Supply & Service',
                            'description' => 'Official Motorola two-way radio distributor and service center',
                            'brand' => [
                                '@type' => 'Brand',
                                'name' => 'Motorola'
                            ]
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => 'Quote on Request',
                            'priceCurrency' => 'IDR'
                        ]
                    ]
                ]
            ]
        ],

        // Business Solution Service Schema
        'business_solution_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Enterprise Business Solutions',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo'
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Business Solution Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Nextcloud Implementation',
                            'description' => 'Private cloud storage solution for enterprises',
                            'category' => 'Cloud Solutions',
                            'serviceType' => 'SoftwareApplication',
                            'applicationCategory' => 'BusinessApplication',
                            'operatingSystem' => 'Cross-platform'
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => '50000',
                            'priceCurrency' => 'IDR',
                            'minPrice' => '50000',
                            'unitText' => 'per user per month'
                        ],
                        'eligibleQuantity' => [
                            '@type' => 'QuantitativeValue',
                            'minValue' => 10,
                            'unitText' => 'users'
                        ]
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'HCM & HRIS System',
                            'description' => 'Complete Human Capital Management and HR Information System',
                            'category' => 'HR Solutions',
                            'serviceType' => 'SoftwareApplication'
                        ],
                        'priceSpecification' => [
                            '@type' => 'PriceSpecification',
                            'price' => 'Custom Quote',
                            'priceCurrency' => 'IDR',
                            'description' => 'Pricing based on number of employees and modules'
                        ],
                        'includesObject' => [
                            [
                                '@type' => 'TypeAndQuantityNode',
                                'typeOfGood' => [
                                    '@type' => 'Service',
                                    'name' => 'Implementation & Training'
                                ]
                            ],
                            [
                                '@type' => 'TypeAndQuantityNode',
                                'typeOfGood' => [
                                    '@type' => 'Service',
                                    'name' => '1 Year Support'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],

        // Product Schema untuk CCTV Products
        'cctv_products' => [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => 'CCTV Security Systems',
            'description' => 'Professional CCTV systems from Hikvision and Dahua',
            'category' => 'Security Equipment',
            'brand' => [
                ['@type' => 'Brand', 'name' => 'Hikvision'],
                ['@type' => 'Brand', 'name' => 'Dahua']
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'IDR',
                'lowPrice' => '1500000',
                'highPrice' => '25000000',
                'offerCount' => '50+',
                'availability' => 'https://schema.org/InStock',
                'seller' => [
                    '@type' => 'Organization',
                    'name' => 'PT Hanara Prima Solusindo'
                ]
            ]
        ],

        // Software Application Schema untuk Custom Software
        'custom_software' => [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'Custom Business Software Solutions',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem' => 'Web-based, Cross-platform',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'IDR',
                'description' => 'Free consultation and custom pricing'
            ],
            'featureList' => [
                'Custom development based on business needs',
                'Modern technology stack',
                'Scalable architecture',
                'API integration',
                'Mobile responsive',
                'Cloud ready'
            ],
            'softwareRequirements' => 'Modern web browser',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'PT Hanara Prima Solusindo'
            ]
        ],

        // Professional Service Schema
        'professional_service' => [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'PT Hanara Prima Solusindo - IT Solutions Provider',
            'description' => 'Professional IT services including software development, system integration, and IT infrastructure',
            'url' => 'https://hanara.id',
            'telephone' => '+62-736-7050202',
            'email' => 'info@hanara.id',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Jl. Batang Hari, RT.011/RW.003, Nusa Indah',
                'addressLocality' => 'Bengkulu',
                'addressRegion' => 'Bengkulu',
                'postalCode' => '38223',
                'addressCountry' => 'ID'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '-3.8123',
                'longitude' => '102.2995'
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '08:00',
                'closes' => '17:00'
            ],
            'priceRange' => '$$',
            'paymentAccepted' => 'Cash, Bank Transfer, Credit Card',
            'currenciesAccepted' => 'IDR',
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
        ]
    ]
];
