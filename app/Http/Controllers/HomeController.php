<?php

namespace App\Http\Controllers;
use Illuminate\View\View;  
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(): View
    {
        $pageTitle = 'PT Hanara Prima Solusindo - Solusi Digital Terdepan';
        $metaDescription = 'Solusi teknologi informasi terpadu untuk kebutuhan bisnis Anda. Kami menyediakan layanan Zimbra, Web Development, CCTV, dan solusi digital lainnya.';
        
        // Ambil artikel yang aktif dan terurut
        $articles = Article::active()->ordered()->take(4)->get();
        
        return view('content.home', compact('pageTitle', 'metaDescription', 'articles'));
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
