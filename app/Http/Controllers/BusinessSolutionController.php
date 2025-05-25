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
}