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
        $query = Career::with(['creator']);

        // Admin can see all, user only their own
        if (auth()->user()->isUser()) {
            $query->where('created_by', auth()->id());
        }

        $careers = $query->ordered()->paginate(10);
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

        // Only show approved careers in frontend
        $careers = Career::active()->ordered()->get();

        return view('content.about.career', compact('careers', 'seoData'));
    }

    /**
     * Display career detail for frontend
     */
    public function frontShow(Career $career)
    {
        // Only show approved careers in frontend
        if (!$career->is_active || $career->approval_status !== Career::APPROVAL_APPROVED) {
            abort(404);
        }

        $seo = config('seo.pages.career_detail');
        $seoDefaults = config('seo.defaults');

        // Replace placeholders
        $title = str_replace('{position}', $career->position, $seo['title']);
        $description = str_replace(
            ['{position}', '{type}'],
            [$career->position, $career->type ?? 'Full Time'],
            $seo['description']
        );
        $keywords = str_replace(
            ['{position}', '{type}'],
            [Str::lower($career->position), Str::lower($career->type ?? 'full time')],
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
            ->where('status', $career->status)
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
            'description' => 'required|string',
            'skills' => 'nullable|string',
            'qualifications' => 'nullable|string',
            'status' => 'required|in:open,closed,on_hold',
        ]);

        // Convert skills dan qualifications ke array
        if ($request->skills) {
            $validated['skills'] = array_filter(array_map('trim', explode("\n", $request->skills)));
        }

        if ($request->qualifications) {
            $validated['qualifications'] = array_filter(array_map('trim', explode("\n", $request->qualifications)));
        }

        // Set default values
        $validated['created_by'] = auth()->id();

        // Auto approve for admin, pending for user
        if (auth()->user()->isAdmin()) {
            $validated['is_active'] = true;
            $validated['approval_status'] = Career::APPROVAL_APPROVED;
            $validated['approved_by'] = auth()->id();
            $validated['approved_at'] = now();
        } else {
            $validated['is_active'] = false;
            $validated['approval_status'] = Career::APPROVAL_PENDING;
        }

        Career::create($validated);

        $message = auth()->user()->isAdmin()
            ? 'Career berhasil ditambahkan dan dipublish!'
            : 'Career berhasil ditambahkan dan menunggu persetujuan admin.';

        return redirect()->route('backend.careers.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $career = Career::findOrFail($id);

            // Check permission
            if (auth()->user()->isUser() && $career->created_by !== auth()->id()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }

            return response()->json([
                'id' => $career->id,
                'position' => $career->position,
                'description' => $career->description,
                'skills' => $career->skills,
                'qualifications' => $career->qualifications,
                'status' => $career->status,
                'is_active' => $career->is_active,
                'approval_status' => $career->approval_status
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Career not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        // Check permission
        if (auth()->user()->isUser() && $career->created_by !== auth()->id()) {
            if (request()->ajax()) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            abort(403, 'You can only edit your own career posts.');
        }

        // Return JSON data for AJAX requests
        if (request()->ajax()) {
            return response()->json([
                'id' => $career->id,
                'position' => $career->position,
                'description' => $career->description,
                'skills' => $career->skills,
                'qualifications' => $career->qualifications,
                'status' => $career->status,
                'is_active' => $career->is_active,
                'approval_status' => $career->approval_status
            ]);
        }

        // Redirect to index if not AJAX
        return redirect()->route('backend.careers.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $career = Career::findOrFail($id);

            // Check permission
            if (auth()->user()->isUser() && $career->created_by !== auth()->id()) {
                abort(403, 'You can only edit your own career posts.');
            }

            $validated = $request->validate([
                'position' => 'required|string|max:255',
                'description' => 'required|string',
                'skills' => 'nullable|string',
                'qualifications' => 'nullable|string',
                'status' => 'required|in:open,closed,on_hold',
                'is_active' => 'nullable|boolean',
            ]);

            // Handle checkbox is_active (only for admin)
            if (auth()->user()->isAdmin()) {
                $validated['is_active'] = $request->has('is_active') ? 1 : 0;
            }

            // Convert skills dan qualifications ke array
            if ($request->filled('skills')) {
                $validated['skills'] = array_filter(array_map('trim', explode("\n", $request->skills)));
            } else {
                $validated['skills'] = [];
            }

            if ($request->filled('qualifications')) {
                $validated['qualifications'] = array_filter(array_map('trim', explode("\n", $request->qualifications)));
            } else {
                $validated['qualifications'] = [];
            }

            // Update slug jika position berubah
            if ($career->position !== $validated['position']) {
                $validated['slug'] = Career::generateSlug($validated['position']);
            }

            // Reset approval status if content changed (except for admin)
            if (auth()->user()->isUser()) {
                $validated['approval_status'] = Career::APPROVAL_PENDING;
                $validated['approved_by'] = null;
                $validated['approved_at'] = null;
                $validated['is_active'] = false;
            }

            $career->update($validated);

            $message = auth()->user()->isAdmin()
                ? 'Career berhasil diperbarui!'
                : 'Career berhasil diperbarui dan menunggu persetujuan admin.';

            return redirect()->route('backend.careers.index')->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->route('backend.careers.index')
                ->with('error', 'Terjadi kesalahan saat mengupdate career: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        // Check permission
        if (auth()->user()->isUser() && $career->created_by !== auth()->id()) {
            abort(403, 'You can only delete your own career posts.');
        }

        $career->delete();

        return redirect()->route('backend.careers.index')
            ->with('success', 'Career berhasil dihapus!');
    }

    /**
     * Toggle career status (Admin only)
     */
    public function toggleStatus(Career $career)
    {
        // Only admin can toggle status
        if (auth()->user()->isUser()) {
            abort(403, 'Only admin can change career status.');
        }

        $career->update(['is_active' => !$career->is_active]);

        return redirect()->route('backend.careers.index')
            ->with('success', 'Status career berhasil diubah!');
    }

    /**
     * Update career status (Open/Closed/On Hold) - Admin only
     */
    public function updateStatus(Request $request, Career $career)
    {
        // Only admin can update status
        if (auth()->user()->isUser()) {
            abort(403, 'Only admin can change career status.');
        }

        $validated = $request->validate([
            'status' => 'required|in:open,closed,on_hold'
        ]);

        $career->update(['status' => $validated['status']]);

        return redirect()->route('backend.careers.index')
            ->with('success', 'Status career berhasil diperbarui!');
    }
}
