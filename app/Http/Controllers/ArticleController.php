<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Frontend Methods
     */

    // Menampilkan halaman kumpulan artikel (Frontend)
    public function index(Request $request)
    {
        // Jika request dari backend
        if ($request->is('backend/*')) {
            $articles = Article::with('user')->ordered()->paginate(10);
            return view('backend.base.article', compact('articles'));
        }

        // Frontend logic
        $query = Article::where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now()->endOfDay());

        // Filter berdasarkan kategori
        if ($request->has('category') && $request->category != 'all') {
            $query->where('category', $request->category);
        }

        // Pencarian
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description', 'like', '%' . $searchTerm . '%')
                    ->orWhere('content', 'like', '%' . $searchTerm . '%');
            });
        }

        $articles = $query->orderBy('published_at', 'desc')->paginate(9);

        // SEO Data
        $seoData = [
            'title' => 'Artikel & Berita - PT Hanara Prima Solusindo',
            'description' => 'Kumpulan artikel, berita, dan kegiatan CSR PT Hanara Prima Solusindo',
            'keywords' => 'artikel, berita, CSR, kegiatan perusahaan, PT Hanara Prima Solusindo',
        ];

        return view('content.artikel.articles', compact('articles', 'seoData'));
    }

    // Menampilkan detail artikel (Frontend)
    public function show($slug)
    {
        // Extract ID from slug (format: title-slug-id)
        $parts = explode('-', $slug);
        $id = end($parts);

        $article = Article::with('user')
            ->where('id', $id)
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $relatedArticles = Article::where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->limit(3)
            ->get();

        // SEO Data
        $seoData = [
            'title' => $article->title . ' - PT Hanara Prima Solusindo',
            'description' => $article->description,
            'keywords' => $article->category . ', artikel, PT Hanara Prima Solusindo',
            'ogTitle' => $article->title,
            'ogDescription' => $article->description,
            'ogImage' => $article->image ? Storage::url($article->image) : null,
        ];
        $schemaArticle = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $article->title,
            'description' => $article->description,
            'image' => $article->image ? Storage::url($article->image) : asset('assets/images/default-article.jpg'),
            'datePublished' => $article->published_at?->toIso8601String() ?? $article->created_at->toIso8601String(),
            'dateModified' => $article->updated_at->toIso8601String(),
            'author' => [
                '@type' => 'Person',
                'name' => $article->user->name ?? 'Admin',
                'url' => route('home')
            ],
            'publisher' => config('seo.schema.organization'),
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => request()->url()
            ]
        ];

        return view('content.artikel.article-detail', compact('article', 'relatedArticles', 'seoData', 'schemaArticle'));
    }

    /**
     * Backend Methods
     */

    // Menampilkan halaman manajemen artikel (Backend)
    public function adminIndex()
    {
        $articles = Article::with('user')->latest()->paginate(10);
        return view('backend.base.article', compact('articles'));
    }

    // Menyimpan artikel baru (Backend)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'description' => 'required|string|max:200',
            'content' => 'nullable|string',
            'category' => 'required|string|in:solusi,kasus,tips,tech,hnr,faq',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }

        // Handle published_at dengan timezone yang benar
        if (isset($validated['published_at'])) {
            $validated['published_at'] = Carbon::parse($validated['published_at'])->setTimezone('Asia/Jakarta');
        } else {
            $validated['published_at'] = now();
        }

        // Set is_active to true by default for new articles
        $validated['is_active'] = true;

        // Tambahkan user_id dari user yang sedang login
        $validated['user_id'] = auth()->id();

        Article::create($validated);

        return redirect()->route('backend.articles.index')
            ->with('success', 'Artikel berhasil ditambahkan!');
    }

    // Update artikel (Backend)
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'description' => 'required|string|max:200',
            'content' => 'nullable|string',
            'category' => 'required|string|in:solusi,kasus,tips,tech,hnr,faq',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $imagePath = $request->file('image')->store('articles', 'public');
            $validated['image'] = $imagePath;
        }

        if (!isset($validated['published_at']) && !$article->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->has('published_at') && $request->published_at) {
            $validated['published_at'] = Carbon::parse($request->published_at)->setTimezone('Asia/Jakarta');
        }

        $article->update($validated);

        return redirect()->route('backend.articles.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    // Hapus artikel (Backend)
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('backend.articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }

    // Toggle status artikel (Backend)
    public function toggleStatus(Article $article)
    {
        $article->update(['is_active' => !$article->is_active]);

        return redirect()->route('backend.articles.index')
            ->with('success', 'Status artikel berhasil diubah!');
    }

    // Edit artikel - return JSON untuk AJAX
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        // Return all article data as JSON
        return response()->json([
            'id' => $article->id,
            'title' => $article->title,
            'category' => $article->category,
            'description' => $article->description,
            'content' => $article->content,
            'link' => $article->link,
            'image' => $article->image,
            'published_at' => $article->published_at,
            'is_active' => $article->is_active
        ]);
    }
}
