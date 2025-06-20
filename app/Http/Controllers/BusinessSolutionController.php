<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BusinessSolutionController extends Controller
{
    public function nextcloud(): View
    {
        $seo = config('seo.pages.nextcloud');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/nextcloud-icon.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('nextcloud'), // FIXED: was route('cctv')
        ];

        // Get Business Solution Service Schema
        $schemaService = config('seo.schema.business_solution_service');

        // Specific schema untuk Nextcloud
        $schemaNextcloud = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'Nextcloud Private Cloud Storage',
            'operatingSystem' => 'Web-based, iOS, Android, Windows, macOS, Linux',
            'applicationCategory' => 'BusinessApplication',
            'offers' => [
                '@type' => 'Offer',
                'price' => '50000',
                'priceCurrency' => 'IDR',
                'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                'itemCondition' => 'https://schema.org/NewCondition',
                'availability' => 'https://schema.org/InStock',
                'seller' => config('seo.schema.organization')
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.7',
                'ratingCount' => '89'
            ],
            'featureList' => [
                'File sync and share',
                'Collaborative editing',
                'Calendar and contacts',
                'Video conferencing',
                'End-to-end encryption',
                'GDPR compliant'
            ]
        ];

        // FAQ Schema untuk Nextcloud
        $schemaFAQ = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Apa itu Nextcloud?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Nextcloud adalah platform cloud storage open source yang memungkinkan Anda menyimpan, berbagi, dan mengakses file dari mana saja dengan keamanan tingkat enterprise.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Berapa kapasitas storage Nextcloud?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Kapasitas storage Nextcloud dapat disesuaikan dengan kebutuhan, mulai dari 100GB hingga unlimited tergantung paket yang dipilih.'
                    ]
                ]
            ]
        ];

        return view('content.bisnis.nextcloud', compact(
            'seoData',
            'schemaService',
            'schemaNextcloud',
            'schemaFAQ'
        ));
    }

    public function hcmHcis(): View
    {
        $seo = config('seo.pages.hcm');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/hcm.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('hcis'), // FIXED: was route('cctv')
        ];

        // Get Business Solution Service Schema
        $schemaService = config('seo.schema.business_solution_service');

        // Specific schema untuk HCM & HCIS
        $schemaHCM = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'HCM & HCIS System',
            'alternateName' => 'Human Capital Management System',
            'applicationCategory' => 'BusinessApplication',
            'applicationSubCategory' => 'HR Management',
            'operatingSystem' => 'Web-based',
            'browserRequirements' => 'Requires JavaScript. Recommended browsers: Chrome, Firefox, Safari, Edge.',
            'softwareVersion' => '2.0',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'IDR',
                'description' => 'Harga disesuaikan dengan jumlah karyawan dan modul yang digunakan',
                'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                'eligibleQuantity' => [
                    '@type' => 'QuantitativeValue',
                    'minValue' => 50,
                    'unitText' => 'employees'
                ]
            ],
            'screenshot' => asset('assets/images/icon/hcm.png'),
            'featureList' => [
                'Employee Database Management',
                'Attendance & Time Management',
                'Payroll Processing',
                'Leave Management',
                'Performance Appraisal',
                'Recruitment Management',
                'Employee Self Service',
                'Analytics & Reporting'
            ],
            'creator' => config('seo.schema.organization'),
            'datePublished' => '2020-01-01',
            'dateModified' => date('Y-m-d')
        ];

        return view('content.bisnis.hcm', compact(
            'seoData',
            'schemaService',
            'schemaHCM'
        ));
    }


    public function MIT(): View
    {
        $seo = config('seo.pages.mit');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/icon-mit.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('mit'),
        ];

        // Get Business Solution Service Schema
        $schemaService = config('seo.schema.business_solution_service');

        // Specific schema untuk MIT
        $schemaMIT = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'MIT - Management Information Technology',
            'applicationCategory' => 'BusinessApplication',
            'applicationSubCategory' => 'IT Management',
            'operatingSystem' => 'Web-based',
            'browserRequirements' => 'Requires JavaScript. Recommended browsers: Chrome, Firefox, Safari, Edge.',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'IDR',
                'description' => 'Harga disesuaikan dengan kebutuhan dan skala perusahaan',
                'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                'availability' => 'https://schema.org/InStock',
                'seller' => config('seo.schema.organization')
            ],
            'featureList' => [
                'Task Management (Plan to Do, Working, On Hold, Completed)',
                'Unscheduled Task Tracking',
                'Client Management (Tickets, Email Request, Role Request)',
                'HCM Integration',
                'IT Application Management',
                'IT Infrastructure Documentation',
                'Digital Creative Tools',
                'Document Library',
                'Role-based Access Control'
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'ratingCount' => '125'
            ],
            'creator' => config('seo.schema.organization'),
            'datePublished' => '2021-01-01',
            'dateModified' => date('Y-m-d')
        ];

        return view('content.bisnis.mit', compact(
            'seoData',
            'schemaService',
            'schemaMIT'
        ));
    }

    public function SiKerja(): View
    {
        $seo = config('seo.pages.sikerja');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/icon-sikerja.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('sikerja'),
        ];

        // Get Business Solution Service Schema
        $schemaService = config('seo.schema.business_solution_service');

        // Specific schema untuk siKerja
        $schemaSiKerja = [
            '@context' => 'https://schema.org',
            '@type' => 'MobileApplication',
            'name' => 'siKerja - Smart Utility App',
            'operatingSystem' => 'Android, iOS',
            'applicationCategory' => 'ProductivityApplication',
            'applicationSubCategory' => 'Business Tools',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'IDR',
                'description' => 'Gratis untuk pengguna individu, berbayar untuk fitur premium',
                'availability' => 'https://schema.org/InStock'
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.5',
                'ratingCount' => '2547'
            ],
            'screenshot' => [
                asset('assets/images/sikerja/hero.svg'),
                asset('assets/images/sikerja/fitur.svg')
            ],
            'featureList' => [
                'QR Code Scanner',
                'Barcode Scanner',
                'Timestamp Camera',
                'Checklist Manager',
                'Reminder Hub',
                'Quick Notes',
                'FinTrack (Financial Tracker)',
                'Document Scanner',
                'MIT Connect Integration'
            ],
            'creator' => config('seo.schema.organization'),
            'datePublished' => '2022-06-01',
            'dateModified' => date('Y-m-d'),
            'downloadUrl' => [
                'https://play.google.com/store/apps/details?id=com.hanara.sikerja',
                'https://apps.apple.com/id/app/sikerja/id1234567890'
            ]
        ];

        // FAQ Schema untuk siKerja
        $schemaFAQ = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Apa itu siKerja?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'siKerja adalah aplikasi mobile multifungsi dari Hanara yang dirancang untuk mendukung efisiensi kerja dan aktivitas harian. Aplikasi ini menggabungkan berbagai tools produktivitas dalam satu platform.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Apakah siKerja gratis?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ya, siKerja tersedia gratis untuk pengguna individu dengan fitur dasar. Untuk fitur premium dan integrasi MIT Connect, tersedia paket berlangganan.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Apa saja fitur unggulan siKerja?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Fitur unggulan siKerja meliputi: QR & Barcode Scanner, Timestamp Camera, Checklist Manager, Reminder Hub, Quick Notes, FinTrack untuk tracking keuangan, dan Document Scanner.'
                    ]
                ]
            ]
        ];

        return view('content.bisnis.sikerja', compact(
            'seoData',
            'schemaService',
            'schemaSiKerja',
            'schemaFAQ'
        ));
    }

    public function SosMed(): View
    {
        $seo = config('seo.pages.sosmed');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/icon-digitalmarketing.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('sosmed'),
        ];

        // Get Business Solution Service Schema
        $schemaService = config('seo.schema.business_solution_service');

        // Specific schema untuk Digital Marketing
        $schemaDigitalMarketing = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => 'Digital Marketing Services',
            'name' => 'Digital Marketing Hanara',
            'description' => 'Layanan digital marketing terpadu untuk bisnis Anda',
            'provider' => config('seo.schema.organization'),
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Indonesia'
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Digital Marketing Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Paket Starter',
                            'description' => '1 Platform (Instagram/Facebook), 8 Konten/Bulan'
                        ],
                        'price' => '4950000',
                        'priceCurrency' => 'IDR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Paket Growth',
                            'description' => '2 Platform + LinkedIn, 12 Konten/Bulan, Facebook Ads'
                        ],
                        'price' => '8950000',
                        'priceCurrency' => 'IDR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Paket Pro',
                            'description' => '3 Platform + TikTok, 16 Konten/Bulan, Full Service'
                        ],
                        'price' => '14950000',
                        'priceCurrency' => 'IDR'
                    ]
                ]
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '87'
            ]
        ];

        return view('content.bisnis.sosmed', compact(
            'seoData',
            'schemaService',
            'schemaDigitalMarketing'
        ));
    }
}
