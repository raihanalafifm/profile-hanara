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
            'canonical' => route('cctv'),
             ]
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
            'image' => asset('assets/images/icon/cctv icon.png'),
            '@id' => route('cctv'),
            'url' => route('cctv'),
            'telephone' => '+62-736-7050202',
            'address' => config('seo.schema.organization.address'),
            'geo' => config('seo.schema.professional_service.geo'),
            'openingHoursSpecification' => config('seo.schema.professional_service.openingHoursSpecification'),
            'priceRange' => '$$',
            'servesCuisine' => 'CCTV Installation Service', // bisa diganti dengan service type lain
            'acceptsReservations' => 'True',
            'menu' => route('cctv') . '#pricing', // link ke section pricing
            'hasMap' => 'https://maps.app.goo.gl/FTxacZPBbKNzovbX8'
        ];
        
        return view('content.cctv.cctv', compact(
            'seoData',
            'schemaService',
            'schemaProducts',
            'schemaLocalBusiness'
        ));
    }

    public function motorola(): View
    {
        $seo = config('seo.pages.motorola');
        $seoDefaults = config('seo.defaults');
        
        $seoData = [
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
             ]
    ];
        
        // Get Hardware Service Schema
        $schemaService = config('seo.schema.hardware_service');
        
        // Get CCTV Products Schema
        $schemaProducts = config('seo.schema.cctv_products');
        
        // Local Business Schema untuk CCTV Service
        $schemaLocalBusiness = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Jasa installasi motorola - PT Hanara Prima Solusindo',
            'image' => asset('assets/images/icon/motorola-icon.png'),
            '@id' => route('motorola'),
            'url' => route('motorola'),
            'telephone' => '+62-736-7050202',
            'address' => config('seo.schema.organization.address'),
            'geo' => config('seo.schema.professional_service.geo'),
            'openingHoursSpecification' => config('seo.schema.professional_service.openingHoursSpecification'),
            'priceRange' => '$$',
            'servesCuisine' => 'motorola Installation Service', // bisa diganti dengan service type lain
            'acceptsReservations' => 'True',
            'menu' => route('motorola') . '#pricing', // link ke section pricing
            'hasMap' => 'https://maps.app.goo.gl/FTxacZPBbKNzovbX8'
        ];
        
        return view('content.motorola.motorola', compact(
            'seoData',
            'schemaService',
            'schemaProducts',
            'schemaLocalBusiness'
        ));
    }
}
