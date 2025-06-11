<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Career;
use App\Models\Motorola;
use Illuminate\Http\Request;

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

        return response()->view('sitemap.index', [
            'articles' => $articles,
            'careers' => $careers,
            'products' => $products,
        ])->header('Content-Type', 'text/xml');
    }
}
