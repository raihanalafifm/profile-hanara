<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function cctv(): View
    {
        $seo = config('seo.pages.cctv');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/cctv-icon.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('cctv'),
        ];

        // Get Hardware Service Schema
        $schemaService = config('seo.schema.hardware_service');

        // Get CCTV Products Schema
        $schemaProducts = config('seo.schema.cctv_products');

        // Local Business Schema untuk CCTV Service
        $schemaLocalBusiness = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Jasa Pasang CCTV Bengkulu - PT Hanara Prima Solusindo',
            'image' => asset('assets/images/icon/cctv-icon.png'),
            '@id' => route('cctv'),
            'url' => route('cctv'),
            'telephone' => '+62-736-7050202',
            'address' => config('seo.schema.organization.address'),
            'geo' => config('seo.schema.professional_service.geo'),
            'openingHoursSpecification' => config('seo.schema.professional_service.openingHoursSpecification'),
            'priceRange' => '$$',
            'acceptsReservations' => 'True',
            'hasMap' => 'https://maps.app.goo.gl/FTxacZPBbKNzovbX8'
        ];

        // FAQ Data untuk CCTV
        $faqData = [
            [
                'question' => 'Berapa biaya jasa pemasangan CCTV dari Hanara?',
                'answer' => 'Biaya pemasangan CCTV bervariasi tergantung jumlah kamera, jenis perangkat (analog/IP), lokasi instalasi, dan tingkat kesulitan pemasangan. Silakan hubungi tim kami untuk konsultasi gratis dan estimasi harga sesuai kebutuhan Anda.'
            ],
            [
                'question' => 'Apakah bisa hanya beli produk CCTV tanpa jasa pemasangan?',
                'answer' => 'Bisa. Hanara menyediakan pembelian unit CCTV secara terpisah, baik untuk pemakaian pribadi maupun kebutuhan proyek. Namun, kami tetap menyarankan pemasangan profesional agar sistem berjalan optimal.'
            ],
            [
                'question' => 'Apakah Hanara melayani pemasangan di luar kota atau luar provinsi?',
                'answer' => 'Ya, kami melayani pemasangan CCTV di berbagai wilayah Indonesia, terutama untuk skala proyek. Biaya transportasi dan akomodasi teknisi akan dihitung sesuai lokasi.'
            ],
            [
                'question' => 'Apa saja jenis kamera CCTV yang tersedia?',
                'answer' => 'Kami menyediakan berbagai jenis kamera: - Kamera indoor & outdoor - Dome camera - Bullet camera - Kamera CCTV wireless - Kamera CCTV dengan fitur night vision & audio'
            ],
            [
                'question' => 'Berapa lama proses pemasangan CCTV?',
                'answer' => 'Durasi instalasi tergantung jumlah kamera dan kondisi lokasi. Untuk pemasangan standar (4–8 kamera), proses biasanya selesai dalam 1–2 hari kerja.'
            ],
            [
                'question' => 'Apakah bisa melihat hasil CCTV dari HP atau laptop?',
                'answer' => 'Tentu. Semua sistem CCTV yang kami pasang dapat diakses melalui aplikasi di smartphone atau browser di laptop. Kami juga bantu setting hingga Anda bisa memantau dari mana saja.'
            ],
            [
                'question' => 'Apakah Hanara memberikan garansi?',
                'answer' => 'Ya. Kami memberikan garansi produk (sesuai merek) dan garansi instalasi hingga 1 tahun. Layanan purna jual juga tersedia jika terjadi kendala teknis.'
            ],
            [
                'question' => 'Apakah sistem CCTV bisa disambungkan ke jaringan internet kantor?',
                'answer' => 'Bisa. Kami akan bantu integrasi CCTV dengan jaringan lokal atau internet kantor, termasuk konfigurasi IP, DDNS, dan akses cloud jika dibutuhkan.'
            ],
            [
                'question' => 'Apakah saya perlu menyediakan kabel dan peralatan sendiri?',
                'answer' => 'Tidak perlu. Kami sudah menyediakan paket lengkap instalasi CCTV beserta kabel, konektor, DVR/NVR, dan perangkat pendukung lainnya. Namun, jika Anda sudah memiliki perangkat sendiri, kami juga melayani jasa instalasi saja.'
            ],
            [
                'question' => 'Apakah tersedia layanan maintenance CCTV?',
                'answer' => 'Ya. Hanara menyediakan layanan pemeliharaan berkala (maintenance) dan troubleshooting jika sistem CCTV Anda mengalami gangguan.'
            ]
        ];

        return view('content.cctv.cctv', compact(
            'seoData',
            'schemaService',
            'schemaProducts',
            'schemaLocalBusiness',
            'faqData'
        ));
    }

    public function motorola(): View
    {
        $seo = config('seo.pages.motorola');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/motorola-icon.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('motorola'),
        ];

        // Get Hardware Service Schema
        $schemaService = config('seo.schema.hardware_service');

        // Specific schema untuk Motorola
        $schemaProduct = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => 'Motorola Two-Way Radio',
            'description' => 'Professional radio communication equipment from Motorola',
            'brand' => [
                '@type' => 'Brand',
                'name' => 'Motorola'
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'IDR',
                'availability' => 'https://schema.org/InStock',
                'seller' => [
                    '@type' => 'Organization',
                    'name' => 'PT Hanara Prima Solusindo'
                ]
            ]
        ];

        // Local Business Schema untuk Motorola Service
        $schemaLocalBusiness = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Distributor Radio Motorola Bengkulu - PT Hanara Prima Solusindo',
            'image' => asset('assets/images/icon/motorola-icon.png'),
            '@id' => route('motorola'),
            'url' => route('motorola'),
            'telephone' => '+62-736-7050202',
            'address' => config('seo.schema.organization.address'),
            'geo' => config('seo.schema.professional_service.geo'),
            'openingHoursSpecification' => config('seo.schema.professional_service.openingHoursSpecification'),
            'priceRange' => '$',
            'acceptsReservations' => 'True',
            'hasMap' => 'https://maps.app.goo.gl/FTxacZPBbKNzovbX8'
        ];

        return view('content.motorola.motorola', compact(
            'seoData',
            'schemaService',
            'schemaProduct',
            'schemaLocalBusiness'
        ));
    }
}
