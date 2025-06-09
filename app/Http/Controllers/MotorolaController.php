<?php

namespace App\Http\Controllers;

use App\Models\Motorola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MotorolaController extends Controller
{
    // Frontend Methods
    public function index()
    {
        $seoData = [
            'title' => 'Produk Motorola - Handy Talky & RIG | PT Hanara Prima Solusindo',
            'description' => 'Distributor resmi produk Motorola. Jual handy talky, radio RIG VHF/UHF, dan aksesoris Motorola dengan harga terbaik.',
            'keywords' => 'motorola, handy talky, radio rig, vhf, uhf, komunikasi radio, walkie talkie',
            'canonical' => url()->current()
        ];

        $products = Motorola::active()
            ->orderBy('type')
            ->orderBy('name')
            ->get()
            ->groupBy('type');

        return view('content.motorola.motorola', compact('products', 'seoData'));
    }

    public function show($slug)
    {
        $product = Motorola::where('slug', $slug)
            ->where('is_active', true)
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
        $products = Motorola::latest()->paginate(10);
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
                if (strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $specs[trim($key)] = trim($value);
                }
            }
            $validated['specifications'] = $specs;
        }

        Motorola::create($validated);

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Produk Motorola berhasil ditambahkan');
    }

    public function update(Request $request, Motorola $motorola)
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
                if (strpos($line, ':') !== false) {
                    list($key, $value) = explode(':', $line, 2);
                    $specs[trim($key)] = trim($value);
                }
            }
            $validated['specifications'] = $specs;
        }

        $motorola->update($validated);

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Produk Motorola berhasil diperbarui');
    }

    public function destroy(Motorola $motorola)
    {
        if ($motorola->image) {
            Storage::disk('public')->delete($motorola->image);
        }

        $motorola->delete();

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Produk Motorola berhasil dihapus');
    }

    public function toggleStatus(Motorola $motorola)
    {
        $motorola->update([
            'is_active' => !$motorola->is_active
        ]);

        return redirect()->route('backend.motorola.index')
            ->with('success', 'Status produk berhasil diubah');
    }
}
