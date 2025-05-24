<?php

namespace App\Http\Controllers;
use Illuminate\View\View;  
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(): View
    {
       // SEO Data dari config
        $seo = config('seo.pages.home');
        $seoDefaults = config('seo.defaults');
        
        // Gabungkan dengan defaults
        $seoData = [
            'title' => $seo['title'] . $seoDefaults['title_suffix'],
            'titleOnly' => $seo['title'], // tanpa suffix untuk OG
            'description' => $seo['description'],
            'keywords' => $seo['keywords'],
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $seo['og_title'] ?? $seo['title'],
            'ogDescription' => $seo['og_description'] ?? $seo['description'],
            'ogImage' => asset($seoDefaults['og_image']),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('home'),
        ];
        
        // Schema.org data
        $schemaOrg = config('seo.schema.organization');
        
        // Ambil artikel yang aktif dan terurut
        $articles = Article::active()
                          ->ordered()
                          ->take(4)
                          ->get();
        
        // Data tambahan untuk homepage
        $stats = [
            'clients' => 100,
            'projects' => 250,
            'experience' => 5,
            'team' => 20
        ];
        
        return view('content.home', compact('seoData', 'schemaOrg', 'articles', 'stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
