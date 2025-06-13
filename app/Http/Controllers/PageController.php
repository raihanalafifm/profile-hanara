<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display About Us page
     */
    public function about(): View
    {
        $seo = config('seo.pages.about');
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
            'ogImage' => asset('assets/images/gambar/bw-meet.png'), // Specific image for about
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('about-us'),
        ];

        // Schema untuk About Page
        $schemaOrg = array_merge(
            config('seo.schema.organization'),
            [
                '@type' => ['Organization', 'LocalBusiness'],
                'priceRange' => '$$',
                'image' => asset('assets/images/gambar/bw-meet.png'),
                'hasMap' => 'https://maps.app.goo.gl/uYzrn7BUobtDcrWn8',
            ]
        );

        return view('content.about.about', compact('seoData', 'schemaOrg'));
    }

    /**
     * Display Contact Us page
     */
    public function contact(): View
    {
        $seo = config('seo.pages.contact');
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
            // 'ogImage' => asset('assets/images/og-contact.jpg'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('contact-us'),
        ];
        $schemaOrg = array_merge(
            config('seo.schema.organization'),
            [
                '@type' => ['Organization', 'LocalBusiness'],
                'priceRange' => '$$',
                // 'image' => asset('assets/images/gambar/bw-meet.png'),
                'hasMap' => 'https://maps.app.goo.gl/uYzrn7BUobtDcrWn8',
            ]
        );
        return view('content.about.contact', compact('seoData', 'schemaOrg'));
    }
}
