<?php

namespace App\Http\Controllers;

use App\Models\Motorola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MotorolaController extends Controller
{


    // Frontend Methods
    public function FrontendIndex()
    {
        $seoData = [
            'title' => 'Produk Motorola - Handy Talky & RIG | PT Hanara Prima Solusindo',
            'description' => 'Distributor resmi produk Motorola. Jual handy talky, radio RIG VHF/UHF, dan aksesoris Motorola dengan harga terbaik.',
            'keywords' => 'motorola, handy talky, radio rig, vhf, uhf, komunikasi radio, walkie talkie',
            'canonical' => url()->current()
        ];

        // Only show approved products in frontend
        $products = Motorola::active()
            ->orderBy('type')
            ->orderBy('name')
            ->get()
            ->groupBy('type');

        return view('content.motorola.motorola', compact('products', 'seoData'));
    }

    public function FrontendShow($slug)
    {
        $product = Motorola::where('slug', $slug)
            ->where('is_active', true)
            ->where('approval_status', Motorola::APPROVAL_APPROVED)
            ->firstOrFail();

        $relatedProducts = Motorola::active()
            ->where('id', '!=', $product->id)
            ->where('category', $product->category)
            ->limit(4)
            ->get();

        $seoData = [
            'title' => $product->name . ' - Motorola | PT Hanara Prima Solusindo',
            'description' => Str::limit($product->description, 160),
            'keywords' => 'motorola ' . $product->name . ', ' . $product->category . ', radio komunikasi',
            'canonical' => url()->current()
        ];

        return view('content.motorola.detail', compact('product', 'relatedProducts', 'seoData'));
    }

    // Backend Methods
    public function adminIndex()
    {
        $query = Motorola::with(['creator']);

        // Admin can see all, user only their own
        if (auth()->user()->isUser()) {
            $query->where('created_by', auth()->id());
        }

        $products = $query->latest()->paginate(10);
        return view('backend.base.motorola', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'model_number' => 'nullable|string|max:100',
            'category' => 'required|in:VHF,UHF,Accessories,Repeater',
            'type' => 'required|in:Radio Mobil,Radio Portable,Broadband',
            'description' => 'nullable|string',
            'specifications' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('motorola', 'public');
        }

        // Convert specifications dari textarea ke array
        if ($request->specifications) {
            $specs = [];
            $lines = explode("\n", $request->specifications);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line && strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $specs[trim($key)] = trim($value);
                }
            }
            $validated['specifications'] = $specs;
        }

        // Set default values
        $validated['created_by'] = auth()->id();

        // Auto approve for admin, pending for user
        if (auth()->user()->isAdmin()) {
            $validated['is_active'] = true;
            $validated['approval_status'] = Motorola::APPROVAL_APPROVED;
            $validated['approved_by'] = auth()->id();
            $validated['approved_at'] = now();
        } else {
            $validated['is_active'] = false;
            $validated['approval_status'] = Motorola::APPROVAL_PENDING;
        }

        Motorola::create($validated);

        $message = auth()->user()->isAdmin()
            ? 'Produk Motorola berhasil ditambahkan dan dipublish!'
            : 'Produk Motorola berhasil ditambahkan dan menunggu persetujuan admin.';

        return redirect()->route('backend.motorola.index')->with('success', $message);
    }

    public function update(Request $request, Motorola $motorola)
    {
        // Check permission
        if (auth()->user()->isUser() && $motorola->created_by !== auth()->id()) {
            abort(403, 'You can only edit your own products.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'model_number' => 'nullable|string|max:100',
            'category' => 'required|in:VHF,UHF,Accessories,Repeater',
            'type' => 'required|in:Radio Mobil,Radio Portable,Broadband',
            'description' => 'nullable|string',
            'specifications' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($motorola->image) {
                Storage::disk('public')->delete($motorola->image);
            }
            $validated['image'] = $request->file('image')->store('motorola', 'public');
        }

        // Convert specifications dari textarea ke array
        if ($request->specifications) {
            $specs = [];
            $lines = explode("\n", $request->specifications);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line && strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $specs[trim($key)] = trim($value);
                }
            }
            $validated['specifications'] = $specs;
        }

        // Reset approval status if content changed (except for admin)
        if (auth()->user()->isUser()) {
            $validated['approval_status'] = Motorola::APPROVAL_PENDING;
            $validated['approved_by'] = null;
            $validated['approved_at'] = null;
            $validated['is_active'] = false;
        }

        $motorola->update($validated);

        $message = auth()->user()->isAdmin()
            ? 'Produk Motorola berhasil diperbarui!'
            : 'Produk Motorola berhasil diperbarui dan menunggu persetujuan admin.';

        return redirect()->route('backend.motorola.index')->with('success', $message);
    }

    public function destroy(Motorola $motorola)
    {
        // Check permission
        if (auth()->user()->isUser() && $motorola->created_by !== auth()->id()) {
            abort(403, 'You can only delete your own products.');
        }

        if ($motorola->image) {
            Storage::disk('public')->delete($motorola->image);
        }

        $motorola->delete();

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Produk Motorola berhasil dihapus');
    }

    public function toggleStatus(Motorola $motorola)
    {
        // Only admin can toggle status
        if (auth()->user()->isUser()) {
            abort(403, 'Only admin can change product status.');
        }

        $motorola->update([
            'is_active' => !$motorola->is_active
        ]);

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Status produk berhasil diubah');
    }

    /**
     * Get product data for edit (AJAX)
     */
    public function edit($id)
    {
        $product = Motorola::findOrFail($id);

        // Check permission
        if (auth()->user()->isUser() && $product->created_by !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Convert specifications array to string format for textarea
        $specsText = '';
        if ($product->specifications && is_array($product->specifications)) {
            foreach ($product->specifications as $key => $value) {
                $specsText .= $key . ': ' . $value . "\n";
            }
            $specsText = rtrim($specsText, "\n");
        }

        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'model_number' => $product->model_number,
            'category' => $product->category,
            'type' => $product->type,
            'description' => $product->description,
            'specifications' => $specsText,
            'price' => $product->price,
            'image' => $product->image,
            'is_active' => $product->is_active,
            'approval_status' => $product->approval_status
        ]);
    }
}
