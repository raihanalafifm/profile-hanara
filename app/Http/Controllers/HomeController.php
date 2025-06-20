<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $schemaWebPage = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $seoData['title'],
            'description' => $seoData['description'],
            'url' => route('home'),
            'mainEntity' => config('seo.schema.organization')
        ];
        $articles = Article::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();
        // Tambahkan schema ItemList untuk artikel
        $schemaItemList = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'name' => 'Artikel Terbaru',
            'itemListElement' => []
        ];

        foreach ($articles as $index => $article) {
            $schemaItemList['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'url' => route('articles.show', Str::slug($article->title) . '-' . $article->id)
            ];
        }

        // Ambil artikel yang aktif dan terurut


        // Data tambahan untuk homepage
        $stats = [
            'clients' => 100,
            'projects' => 250,
            'experience' => 5,
            'team' => 20
        ];

        return view('content.home', compact('seoData', 'schemaOrg', 'schemaWebPage', 'schemaItemList', 'articles', 'stats'));;
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
