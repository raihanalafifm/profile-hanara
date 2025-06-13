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
                'loc' => 'https://hanara.id',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ],
            [
                'loc' => 'https://hanara.id/about-us',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/contact-us',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/career',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ],
            [
                'loc' => 'https://hanara.id/articles',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'daily',
                'priority' => '0.9'
            ],
            // Zimbra Pages
            [
                'loc' => 'https://hanara.id/zimbra/instalasi',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/zimbra/maintenance',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/zimbra/troubleshooting',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/zimbra/cloud',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/zimbra/server',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            // Software House Pages
            [
                'loc' => 'https://hanara.id/software-house/website-development',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/software-house/web-application',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/software-house/maintenance',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            // Hardware Pages
            [
                'loc' => 'https://hanara.id/hardware/cctv',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/hardware/motorola',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ],
            // Business Solution Pages
            [
                'loc' => 'https://hanara.id/business-solution/nextcloud',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => 'https://hanara.id/business-solution/hcm-hris',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
        ];

        // Add dynamic articles
        foreach ($articles as $article) {
            $urls[] = [
                'loc' => 'https://hanara.id/articles/' . Str::slug($article->title) . '-' . $article->id,
                'lastmod' => $article->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7',
                'images' => $article->image ? [
                    [
                        'loc' => 'https://hanara.id/storage/' . $article->image,
                        'title' => $article->title,
                        'caption' => $article->description
                    ]
                ] : []
            ];
        }

        // Add careers
        foreach ($careers as $career) {
            $urls[] = [
                'loc' => 'https://hanara.id/career/' . $career->slug,
                'lastmod' => $career->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.6'
            ];
        }

        // Add Motorola products
        foreach ($products as $product) {
            $urls[] = [
                'loc' => 'https://hanara.id/hardware/motorola/' . $product->slug,
                'lastmod' => $product->updated_at->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'images' => $product->image ? [
                    [
                        'loc' => 'https://hanara.id/storage/' . $product->image,
                        'title' => $product->name,
                        'caption' => $product->description
                    ]
                ] : []
            ];
        }

        return response()->view('sitemap.index', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }

    /**
     * Generate robots.txt
     */
    public function robots()
    {
        $content = "User-agent: *\n";
        $content .= "Allow: /\n";
        $content .= "Disallow: /backend/\n";
        $content .= "Disallow: /admin/\n";
        $content .= "Disallow: /login\n";
        $content .= "Disallow: /register\n";
        $content .= "Disallow: /password\n";
        $content .= "Disallow: /api/\n";
        $content .= "Disallow: /storage/\n";
        $content .= "Disallow: /*.pdf$\n";
        $content .= "\n";
        $content .= "Sitemap: https://hanara.id/sitemap.xml\n";
        $content .= "\n";
        $content .= "# Crawl-delay for responsible crawling\n";
        $content .= "Crawl-delay: 1\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain');
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
            'canonical' => 'https://hanara.id/sitemap',
            'ogTitle' => 'Sitemap - Navigasi Lengkap Hanara',
            'ogDescription' => 'Temukan semua layanan IT kami dalam satu halaman. Navigasi mudah untuk solusi IT bisnis Anda.',
            'ogUrl' => 'https://hanara.id/sitemap',
            'ogType' => 'website'
        ];

        // Group pages by category
        $pages = [
            'Halaman Utama' => [
                ['title' => 'Beranda', 'url' => 'https://hanara.id'],
                ['title' => 'Tentang Kami', 'url' => 'https://hanara.id/about-us'],
                ['title' => 'Hubungi Kami', 'url' => 'https://hanara.id/contact-us'],
                ['title' => 'Karir', 'url' => 'https://hanara.id/career'],
                ['title' => 'Artikel', 'url' => 'https://hanara.id/articles'],
            ],
            'Layanan Zimbra' => [
                ['title' => 'Instalasi Zimbra', 'url' => 'https://hanara.id/zimbra/instalasi'],
                ['title' => 'Maintenance Zimbra', 'url' => 'https://hanara.id/zimbra/maintenance'],
                ['title' => 'Troubleshooting Zimbra', 'url' => 'https://hanara.id/zimbra/troubleshooting'],
                ['title' => 'Zimbra Cloud', 'url' => 'https://hanara.id/zimbra/cloud'],
                ['title' => 'Zimbra Server', 'url' => 'https://hanara.id/zimbra/server'],
            ],
            'Software House' => [
                ['title' => 'Pembuatan Website', 'url' => 'https://hanara.id/software-house/website-development'],
                ['title' => 'Aplikasi Web', 'url' => 'https://hanara.id/software-house/web-application'],
                ['title' => 'Maintenance Website', 'url' => 'https://hanara.id/software-house/maintenance'],
            ],
            'Hardware & Infrastruktur' => [
                ['title' => 'Pasang CCTV', 'url' => 'https://hanara.id/hardware/cctv'],
                ['title' => 'Radio Motorola', 'url' => 'https://hanara.id/hardware/motorola'],
            ],
            'Business Solution' => [
                ['title' => 'Nextcloud', 'url' => 'https://hanara.id/business-solution/nextcloud'],
                ['title' => 'HCM & HRIS', 'url' => 'https://hanara.id/business-solution/hcm-hris'],
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

        // Schema for sitemap page
        $schemaSitemap = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => 'Sitemap PT Hanara Prima Solusindo',
            'description' => 'Peta situs lengkap untuk navigasi website Hanara',
            'url' => 'https://hanara.id/sitemap',
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => 'Hanara IT Solution',
                'url' => 'https://hanara.id'
            ],
            'breadcrumb' => [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => 'https://hanara.id'
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => 'Sitemap',
                        'item' => 'https://hanara.id/sitemap'
                    ]
                ]
            ]
        ];

        return view('sitemap.html', compact('seoData', 'pages', 'articles', 'careers', 'products', 'schemaSitemap'));
    }
}
