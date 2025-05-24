<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource for backend.
     */
    public function index()
    {
        $careers = Career::ordered()->paginate(10);
        return view('backend.base.career', compact('careers'));
    }

    /**
     * Display career list for frontend
     */
    public function frontIndex()
    {
        $seo = config('seo.pages.career');
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
            'ogImage' => asset('assets/images/gambar/career.png'),
            'ogType' => $seoDefaults['og_type'],
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('career'),
        ];
        
        $careers = Career::active()->ordered()->get();
        
        return view('content.about.career', compact('careers', 'seoData'));
    }

    /**
     * Display career detail for frontend
     */
    public function frontShow(Career $career)
    {
        if (!$career->is_active) {
            abort(404);
        }
        
        $seo = config('seo.pages.career_detail');
        $seoDefaults = config('seo.defaults');
        
        // Replace placeholders
        $title = str_replace('{position}', $career->position, $seo['title']);
        $description = str_replace(
            ['{position}', '{type}'],
            [$career->position, $career->type],
            $seo['description']
        );
        $keywords = str_replace(
            ['{position}', '{type}'],
            [Str::lower($career->position), Str::lower($career->type)],
            $seo['keywords']
        );
        
        $seoData = [
            'title' => $title . $seoDefaults['title_suffix'],
            'titleOnly' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'author' => $seoDefaults['author'],
            'robots' => $seoDefaults['robots'],
            'ogTitle' => $title,
            'ogDescription' => Str::limit($career->description, 160),
            'ogImage' => asset('assets/images/og-career.jpg'),
            'ogType' => 'article',
            'twitterCard' => $seoDefaults['twitter_card'],
            'canonical' => route('career.detail', $career->slug),
        ];
        
        // Get related careers
        $relatedCareers = Career::active()
            ->where('id', '!=', $career->id)
            ->where('type', $career->type)
            ->limit(3)
            ->get();
        
        return view('content.about.job-detail', compact('career', 'seoData', 'relatedCareers'));
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
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'type' => 'required|in:Full Time,Part Time,Both',
            'description' => 'required|string',
            'skills' => 'nullable|string',
            'qualifications' => 'nullable|string',
        ]);

        // Convert skills dan qualifications ke array
        if ($request->skills) {
            $validated['skills'] = array_map('trim', explode("\n", $request->skills));
        }
        
        if ($request->qualifications) {
            $validated['qualifications'] = array_map('trim', explode("\n", $request->qualifications));
        }

        Career::create($validated);

        return redirect()->route('backend.careers.index')
            ->with('success', 'Career berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'type' => 'required|in:Full Time,Part Time,Both',
            'description' => 'required|string',
            'skills' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        // Convert skills dan qualifications ke array
        if ($request->skills) {
            $validated['skills'] = array_map('trim', explode("\n", $request->skills));
        }
        
        if ($request->qualifications) {
            $validated['qualifications'] = array_map('trim', explode("\n", $request->qualifications));
        }

        // Update slug jika position berubah
        if ($career->position !== $validated['position']) {
            $validated['slug'] = Career::generateSlug($validated['position']);
        }

        $career->update($validated);

        return redirect()->route('backend.careers.index')
            ->with('success', 'Career berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('backend.careers.index')
            ->with('success', 'Career berhasil dihapus!');
    }

    /**
     * Toggle career status
     */
    public function toggleStatus(Career $career)
    {
        $career->update(['is_active' => !$career->is_active]);
        
        return redirect()->route('backend.careers.index')
            ->with('success', 'Status career berhasil diubah!');
    }
}