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
        
        return view('content.zimbra.instalasi', compact('seoData', 'schemaService'));
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
        
        return view('content.zimbra.maintenance', compact('seoData', 'schemaService'));
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
        
        // FAQ Schema untuk troubleshooting
        $schemaFAQ = $this->generateFAQSchema();
        
        return view('content.zimbra.troubleshooting', compact('seoData', 'schemaService', 'schemaFAQ'));
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
        
        // Product schema untuk pricing
        $schemaProduct = $this->generateProductSchema();
        
        return view('content.zimbra.cloud', compact('seoData', 'schemaService', 'schemaProduct'));
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
            'offers' => [
                [
                    '@type' => 'Offer',
                    'name' => 'Business Email',
                    'price' => '30000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Business Email Plus',
                    'price' => '50000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Standard Edition',
                    'price' => '70000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock'
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Professional Edition',
                    'price' => '90000',
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => date('Y-m-d', strtotime('+1 year')),
                    'availability' => 'https://schema.org/InStock'
                ]
            ]
        ];
    }
}