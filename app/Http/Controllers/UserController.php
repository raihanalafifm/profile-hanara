<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('backend.base.users', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('backend.users.index')
            ->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
        ]);

        // Update password jika diisi
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);

        return redirect()->route('backend.users.index')
            ->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Prevent deleting yourself
        if ($user->id === auth()->id()) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri!');
        }

        // Prevent deleting last admin
        if (User::count() === 1) {
            return redirect()->route('backend.users.index')
                ->with('error', 'Tidak dapat menghapus user terakhir!');
        }

        $user->delete();

        return redirect()->route('backend.users.index')
            ->with('success', 'User berhasil dihapus!');
    }

    /**
     * Toggle user status (if needed)
     */
    public function toggleStatus(User $user)
    {
        // Optional: Add is_active column to users table if needed
        // $user->update(['is_active' => !$user->is_active]);
        
        return redirect()->route('backend.users.index')
            ->with('success', 'Status user berhasil diubah!');
    }
}