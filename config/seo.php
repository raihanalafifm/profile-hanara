<?php

return [
    // Default SEO settings
    'defaults' => [
        'title_suffix' => ' - PT Hanara Prima Solusindo',
        'author' => 'PT Hanara Prima Solusindo',
        'robots' => 'index, follow',
        'og_type' => 'website',
        'og_image' => '/assets/images/og-default.jpg',
        'twitter_card' => 'summary_large_image',
    ],
    
    // SEO settings per halaman
    'pages' => [
        'home' => [
            'title' => 'Solusi IT Terpadu untuk Transformasi Digital Bisnis Anda',
            'description' => 'PT Hanara Prima Solusindo menyediakan layanan IT solution lengkap: Zimbra Mail Server, Web Development, CCTV, Motorola Radio, dan Cloud Services. Konsultasi gratis!',
            'keywords' => 'IT solution Indonesia, zimbra mail server, web development, jasa pembuatan website, CCTV installation, motorola radio, cloud services, software house Bengkulu',
            'og_title' => 'Transformasi Digital Bisnis Anda Bersama Hanara Prima Solusindo',
            'og_description' => 'Partner teknologi terpercaya dengan layanan lengkap: Zimbra, Web Development, CCTV & Motorola. Hub: 0897-5000-805',
        ],
        
        'about' => [
            'title' => 'Tentang Kami - Profil Perusahaan',
            'description' => 'Kenali PT Hanara Prima Solusindo, perusahaan IT Solution Provider terpercaya di Indonesia. Berpengalaman sejak 2018 melayani berbagai instansi dan perusahaan.',
            'keywords' => 'tentang hanara, profil perusahaan IT, IT solution provider Indonesia, perusahaan teknologi Bengkulu',
        ],
        
        'contact' => [
            'title' => 'Hubungi Kami - Konsultasi Gratis',
            'description' => 'Hubungi PT Hanara Prima Solusindo untuk konsultasi gratis kebutuhan IT bisnis Anda. Lokasi: Bengkulu. Telp: (0736) 7050-202, WA: 0897-5000-805',
            'keywords' => 'kontak hanara, alamat hanara bengkulu, konsultasi IT gratis, hubungi kami',
        ],
        
        // Zimbra Services
        'zimbra_instalasi' => [
            'title' => 'Jasa Instalasi Zimbra Mail Server Professional',
            'description' => 'Layanan instalasi Zimbra Mail Server oleh tim bersertifikat. Garansi instalasi, training, dan support 24/7. Sudah dipercaya 100+ perusahaan.',
            'keywords' => 'instalasi zimbra, jasa instalasi email server, zimbra mail server Indonesia, setup zimbra',
        ],
        
        'zimbra_maintenance' => [
            'title' => 'Jasa Maintenance Zimbra - Support & Monitoring 24/7',
            'description' => 'Layanan maintenance Zimbra profesional. Preventive maintenance, monitoring 24/7, backup rutin, dan response time maksimal 30 menit.',
            'keywords' => 'maintenance zimbra, support zimbra, jasa maintenance email server, zimbra troubleshooting',
        ],
        
                'about' => [
                    'title' => 'Tentang Kami - Profil PT Hanara Prima Solusindo',
                    'description' => 'PT Hanara Prima Solusindo adalah perusahaan IT Solution Provider terpercaya sejak 2018. Berkomitmen meningkatkan efektivitas bisnis di era digital dengan solusi teknologi inovatif.',
                    'keywords' => 'tentang hanara, profil perusahaan IT, IT solution provider Indonesia, perusahaan teknologi Bengkulu, software house bengkulu, jasa IT bengkulu',
                    'og_title' => 'Tentang PT Hanara Prima Solusindo - Partner Teknologi Terpercaya',
                    'og_description' => 'Kenali lebih dekat Hanara, perusahaan IT Solution Provider dengan tim profesional berpengalaman. Visi: Menjadi mitra terpercaya dalam solusi teknologi inovatif.',
                ],

                'contact' => [
                    'title' => 'Hubungi Kami - Konsultasi Gratis IT Solution',
                    'description' => 'Hubungi PT Hanara Prima Solusindo untuk konsultasi gratis. Alamat: Jl. Batang Hari, Bengkulu. Telp: (0736) 7050-202, WA: 0897-5000-805. Response cepat!',
                    'keywords' => 'kontak hanara, alamat hanara bengkulu, konsultasi IT gratis, hubungi kami, jasa IT bengkulu, nomor telepon hanara',
                    'og_title' => 'Hubungi PT Hanara Prima Solusindo - Konsultasi Gratis',
                    'og_description' => 'Ada pertanyaan tentang layanan IT? Hubungi kami sekarang! WA: 0897-5000-805 atau kunjungi kantor kami di Bengkulu.',
                ],

                'career' => [
                    'title' => 'Lowongan Kerja IT - Karir di PT Hanara Prima Solusindo',
                    'description' => 'Bergabunglah dengan tim Hanara! Cari lowongan kerja IT terbaru: Web Developer, Mobile Developer, IT Support, dan posisi lainnya. Kirim lamaran Anda sekarang!',
                    'keywords' => 'lowongan kerja IT bengkulu, karir hanara, job vacancy IT, lowongan web developer, lowongan programmer bengkulu, career IT bengkulu',
                    'og_title' => 'Lowongan Kerja - Bergabung dengan Tim IT Hanara',
                    'og_description' => 'Kembangkan karir Anda bersama Hanara. Berbagai posisi IT tersedia dengan benefit menarik. Apply sekarang!',
                ],

                'career_detail' => [
                    'title' => '{position} - Lowongan Kerja di PT Hanara Prima Solusindo',
                    'description' => 'Lowongan {position} di PT Hanara Prima Solusindo. {type}. Kirim CV dan portfolio Anda sekarang untuk bergabung dengan tim IT profesional kami.',
                    'keywords' => 'lowongan {position}, karir IT bengkulu, job {position} bengkulu, {type} job',
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
        ]
    ]
];