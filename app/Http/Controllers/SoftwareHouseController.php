<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SoftwareHouseController extends Controller
{
    public function webDevelopment(): View
    {

        $seo = config('seo.pages.software_web');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/jasa pembuatan website.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('develop-web'),
        ];

        // Get Software House Service Schema
        $schemaService = config('seo.schema.software_house_service');

        // Get Custom Software Schema
        $schemaSoftware = config('seo.schema.custom_software');

        return view('content.house.web', compact(
            'seoData',
            'schemaService',
            'schemaSoftware'
        ));
    }

    public function webApplication(): View
    {

        $seo = config('seo.pages.software_webapp');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/web app.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('web-application'),
        ];

        // Get Software House Service Schema
        $schemaService = config('seo.schema.software_house_service');

        // Get Custom Software Schema
        $schemaSoftware = config('seo.schema.custom_software');


        return view('content.house.webapp', compact(
            'seoData',
            'schemaService',
            'schemaSoftware'
        ));
    }
    public function maintenance(): View
    {

        $seo = config('seo.pages.software_maintenance');
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
            'ogImage' => asset($seo['og_image'] ?? 'assets/images/icon/maintenance-web.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('maintenance-web'),
        ];

        // Get Software House Service Schema
        $schemaService = config('seo.schema.software_house_service');

        // Get Custom Software Schema
        $schemaSoftware = config('seo.schema.custom_software');


        return view('content.house.maintenance', compact(
            'seoData',
            'schemaService',
            'schemaSoftware'
        ));
    }
}
