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
        
        // Add more pages...
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