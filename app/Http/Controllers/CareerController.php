<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

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
        $careers = Career::active()->ordered()->get();
        return view('content.about.career', compact('careers'));
    }

    /**
     * Display career detail for frontend
     */
    public function frontShow(Career $career)
    {
        if (!$career->is_active) {
            abort(404);
        }
        
        return view('content.about.job-detail', compact('career'));
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