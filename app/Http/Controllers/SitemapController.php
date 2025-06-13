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

        // Static pages
        $urls = [
            [
                'loc' => route('home'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => route('about-us'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('contact-us'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('career'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('articles.index'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '0.9'
            ],
            // Zimbra Pages
            [
                'loc' => route('instalasi-zimbra'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('maintenance-zimbra'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('troubleshooting-zimbra'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('cloud-zimbra'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('server-zimbra'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            // Software House Pages
            [
                'loc' => route('develop-web'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('web-application'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('maintenance-web'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            // Hardware Pages
            [
                'loc' => route('cctv'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('motorola'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ],
            // Business Solution Pages
            [
                'loc' => route('nextcloud'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('hcis'),
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
        ];

        // Add dynamic articles
        foreach ($articles as $article) {
            $urls[] = [
                'loc' => route('articles.show', Str::slug($article->title) . '-' . $article->id),
                'lastmod' => $article->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ];
        }

        // Add careers
        foreach ($careers as $career) {
            $urls[] = [
                'loc' => route('career.detail', $career->slug),
                'lastmod' => $career->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.6'
            ];
        }

        // Add Motorola products
        foreach ($products as $product) {
            $urls[] = [
                'loc' => route('motorola.detail', $product->slug),
                'lastmod' => $product->updated_at->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ];
        }

        return response()->view('sitemap.index', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }

    /**
     * Generate HTML sitemap page for users
     */
    public function html()
    {
        $seoData = [
            'title' => 'Sitemap - Peta Situs PT Hanara Prima Solusindo',
            'description' => 'Peta situs lengkap PT Hanara Prima Solusindo. Temukan semua halaman layanan kami: Zimbra, Web Development, CCTV, dan solusi IT lainnya.',
            'keywords' => 'sitemap, peta situs, hanara, navigasi website',
            'robots' => 'index, follow',
            'canonical' => route('sitemap.html')
        ];

        // Group pages by category
        $pages = [
            'Halaman Utama' => [
                ['title' => 'Beranda', 'url' => route('home')],
                ['title' => 'Tentang Kami', 'url' => route('about-us')],
                ['title' => 'Hubungi Kami', 'url' => route('contact-us')],
                ['title' => 'Karir', 'url' => route('career')],
                ['title' => 'Artikel', 'url' => route('articles.index')],
            ],
            'Layanan Zimbra' => [
                ['title' => 'Instalasi Zimbra', 'url' => route('instalasi-zimbra')],
                ['title' => 'Maintenance Zimbra', 'url' => route('maintenance-zimbra')],
                ['title' => 'Troubleshooting Zimbra', 'url' => route('troubleshooting-zimbra')],
                ['title' => 'Zimbra Cloud', 'url' => route('cloud-zimbra')],
                ['title' => 'Zimbra Server', 'url' => route('server-zimbra')],
            ],
            'Software House' => [
                ['title' => 'Pembuatan Website', 'url' => route('develop-web')],
                ['title' => 'Aplikasi Web', 'url' => route('web-application')],
                ['title' => 'Maintenance Website', 'url' => route('maintenance-web')],
            ],
            'Hardware & Infrastruktur' => [
                ['title' => 'Pasang CCTV', 'url' => route('cctv')],
                ['title' => 'Radio Motorola', 'url' => route('motorola')],
            ],
            'Business Solution' => [
                ['title' => 'Nextcloud', 'url' => route('nextcloud')],
                ['title' => 'HCM & HCIS', 'url' => route('hcis')],
            ],
        ];

        // Get dynamic content
        $articles = Article::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->limit(10)
            ->get();

        $careers = Career::active()
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        $products = Motorola::active()
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('sitemap.html', compact('seoData', 'pages', 'articles', 'careers', 'products'));
    }
}
