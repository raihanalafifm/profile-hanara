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
    public function index(Request $request)
    {
        // Jika request dari backend
        if ($request->is('backend/*')) {
            $query = Article::with(['user', 'creator']);

            // Admin can see all, user only their own
            if (auth()->user()->isUser()) {
                $query->where('created_by', auth()->id());
            }

            $articles = $query->ordered()->paginate(10);
            return view('backend.base.article', compact('articles'));
        }

        // Frontend logic - only show approved articles
        $query = Article::where('is_active', true)
            ->where('approval_status', Article::STATUS_APPROVED)
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

    public function show($slug)
    {
        // Extract ID from slug (format: title-slug-id)
        $parts = explode('-', $slug);
        $id = end($parts);

        $article = Article::with('user')
            ->where('id', $id)
            ->where('is_active', true)
            ->where('approval_status', Article::STATUS_APPROVED)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $relatedArticles = Article::where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->where('is_active', true)
            ->where('approval_status', Article::STATUS_APPROVED)
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
    public function adminIndex()
    {
        $query = Article::with(['user', 'creator']);

        // Admin can see all, user only their own
        if (auth()->user()->isUser()) {
            $query->where('created_by', auth()->id());
        }

        $articles = $query->latest()->paginate(10);
        return view('backend.base.article', compact('articles'));
    }

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

        // Set default values
        $validated['user_id'] = auth()->id();
        $validated['created_by'] = auth()->id();

        // Auto approve for admin, pending for user
        if (auth()->user()->isAdmin()) {
            $validated['is_active'] = true;
            $validated['approval_status'] = Article::STATUS_APPROVED;
            $validated['approved_by'] = auth()->id();
            $validated['approved_at'] = now();
        } else {
            $validated['is_active'] = false;
            $validated['approval_status'] = Article::STATUS_PENDING;
        }

        Article::create($validated);

        $message = auth()->user()->isAdmin()
            ? 'Artikel berhasil ditambahkan dan dipublish!'
            : 'Artikel berhasil ditambahkan dan menunggu persetujuan admin.';

        return redirect()->route('backend.articles.index')->with('success', $message);
    }

    public function update(Request $request, Article $article)
    {
        // Check permission
        if (auth()->user()->isUser() && $article->created_by !== auth()->id()) {
            abort(403, 'You can only edit your own articles.');
        }

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

        // Reset approval status if content changed (except for admin)
        if (auth()->user()->isUser()) {
            $validated['approval_status'] = Article::STATUS_PENDING;
            $validated['approved_by'] = null;
            $validated['approved_at'] = null;
            $validated['is_active'] = false;
        }

        $article->update($validated);

        $message = auth()->user()->isAdmin()
            ? 'Artikel berhasil diperbarui!'
            : 'Artikel berhasil diperbarui dan menunggu persetujuan admin.';

        return redirect()->route('backend.articles.index')->with('success', $message);
    }

    public function destroy(Article $article)
    {
        // Check permission
        if (auth()->user()->isUser() && $article->created_by !== auth()->id()) {
            abort(403, 'You can only delete your own articles.');
        }

        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('backend.articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }

    public function toggleStatus(Article $article)
    {
        // Only admin can toggle status
        if (auth()->user()->isUser()) {
            abort(403, 'Only admin can change article status.');
        }

        $article->update(['is_active' => !$article->is_active]);

        return redirect()->route('backend.articles.index')
            ->with('success', 'Status artikel berhasil diubah!');
    }

    public function edit($id)
    {
        try {
            $article = Article::findOrFail($id);

            // Check permission - user hanya bisa edit artikel milik sendiri
            if (auth()->user()->isUser() && $article->created_by !== auth()->id()) {
                return response()->json(['error' => 'You can only edit your own articles'], 403);
            }

            return response()->json([
                'id' => $article->id,
                'title' => $article->title,
                'category' => $article->category,
                'description' => $article->description,
                'content' => $article->content,
                'link' => $article->link,
                'image' => $article->image,
                'published_at' => $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : null,
                'is_active' => $article->is_active,
                'approval_status' => $article->approval_status
            ]);
        } catch (\Exception $e) {
            \Log::error('Error loading article: ' . $e->getMessage());
            return response()->json(['error' => 'Article not found'], 404);
        }
    }
}
