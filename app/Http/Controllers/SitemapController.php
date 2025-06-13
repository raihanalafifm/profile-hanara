<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Career;
use App\Models\Motorola;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->get();

        $careers = Career::active()->get();
        $products = Motorola::active()->get();
        $urls = [
            [
                'loc' => route('home'),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => route('about-us'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('instalasi-zimbra'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('maintenance-zimbra'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('troubleshooting-zimbra'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('cloud-zimbra'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('server-zimbra'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('develop-web'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('web-application'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('maintenance-web'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('cctv'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('nextcloud'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('hcis'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
        ];


        foreach ($articles as $article) {
            $urls[] = [
                'loc' => route('articles.show', Str::slug($article->title) . '-' . $article->id),
                'lastmod' => $article->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ];
        }
        return response()->view('sitemap.index', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
