<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Career;
use App\Models\Motorola;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovalController extends Controller
{

    /**
     * Display the approval dashboard
     */
    public function index()
    {
        $pendingArticles = Article::pending()->with('creator')->latest()->take(5)->get();
        $pendingCareers = Career::pending()->with('creator')->latest()->take(5)->get();
        $pendingMotorolaProducts = Motorola::pending()->with('creator')->latest()->take(5)->get();

        $stats = [
            'articles' => [
                'pending' => Article::pending()->count(),
                'approved' => Article::approved()->count(),
                'rejected' => Article::rejected()->count(),
            ],
            'careers' => [
                'pending' => Career::pending()->count(),
                'approved' => Career::approved()->count(),
                'rejected' => Career::rejected()->count(),
            ],
            'motorola' => [
                'pending' => Motorola::pending()->count(),
                'approved' => Motorola::approved()->count(),
                'rejected' => Motorola::rejected()->count(),
            ],
        ];

        return view('backend.approval.dashboard', compact(
            'pendingArticles',
            'pendingCareers',
            'pendingMotorolaProducts',
            'stats'
        ));
    }

    /**
     * Articles approval page
     */
    public function articles(Request $request)
    {
        $query = Article::with(['creator', 'approver']);

        // Filter by status
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('approval_status', $request->status);
        }

        $articles = $query->latest()->paginate(10);

        return view('backend.approval.article', compact('articles'));
    }

    /**
     * Careers approval page
     */
    public function careers(Request $request)
    {
        $query = Career::with(['creator', 'approver']);

        // Filter by status
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('approval_status', $request->status);
        }

        $careers = $query->latest()->paginate(10);

        return view('backend.approval.career', compact('careers'));
    }

    /**
     * Motorola products approval page
     */
    public function motorolaProducts(Request $request)
    {
        $query = Motorola::with(['creator', 'approver']);

        // Filter by status
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('approval_status', $request->status);
        }

        $products = $query->latest()->paginate(10);

        return view('backend.approval.motorola', compact('products'));
    }

    /**
     * Approve article
     */
    public function approveArticle(Request $request, Article $article)
    {
        $request->validate([
            'approval_notes' => 'nullable|string|max:1000'
        ]);

        $article->update([
            'approval_status' => Article::STATUS_APPROVED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->back()->with('success', 'Article has been approved successfully.');
    }

    /**
     * Reject article
     */
    public function rejectArticle(Request $request, Article $article)
    {
        $request->validate([
            'approval_notes' => 'required|string|max:1000'
        ]);

        $article->update([
            'approval_status' => Article::STATUS_REJECTED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->back()->with('success', 'Article has been rejected.');
    }

    /**
     * Approve career
     */
    public function approveCareer(Request $request, Career $career)
    {
        $request->validate([
            'approval_notes' => 'nullable|string|max:1000'
        ]);

        $career->update([
            'approval_status' => Career::APPROVAL_APPROVED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
            'is_active' => true, // Aktifkan setelah diapprove
        ]);

        return redirect()->back()->with('success', 'Career has been approved successfully.');
    }

    /**
     * Reject career
     */
    public function rejectCareer(Request $request, Career $career)
    {
        $request->validate([
            'approval_notes' => 'required|string|max:1000'
        ]);

        $career->update([
            'approval_status' => Career::APPROVAL_REJECTED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->back()->with('success', 'Career has been rejected.');
    }

    /**
     * Approve motorola product
     */
    public function approveMotorolaProduct(Request $request, Motorola $product)
    {
        $request->validate([
            'approval_notes' => 'nullable|string|max:1000'
        ]);

        $product->update([
            'approval_status' => Motorola::APPROVAL_APPROVED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->back()->with('success', 'Product has been approved successfully.');
    }

    /**
     * Reject motorola product
     */
    public function rejectMotorolaProduct(Request $request, Motorola $product)
    {
        $request->validate([
            'approval_notes' => 'required|string|max:1000'
        ]);

        $product->update([
            'approval_status' => Motorola::APPROVAL_REJECTED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'approval_notes' => $request->approval_notes,
        ]);

        return redirect()->back()->with('success', 'Product has been rejected.');
    }

    /**
     * Get item details for modal
     */
    public function getItemDetails($type, $id)
    {
        switch ($type) {
            case 'article':
                $item = Article::with(['creator', 'approver'])->findOrFail($id);
                break;
            case 'career':
                $item = Career::with(['creator', 'approver'])->findOrFail($id);
                break;
            case 'motorola':
                $item = Motorola::with(['creator', 'approver'])->findOrFail($id);
                break;
            default:
                abort(404);
        }

        return response()->json([
            'item' => $item,
            'creator' => $item->creator,
            'approver' => $item->approver
        ]);
    }
}
