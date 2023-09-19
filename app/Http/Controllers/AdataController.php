<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adata()
    {
        $product = User::orderBy('created_at', 'DESC')->get();
        return view('A-DATA.adata', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('A-DATA.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin,user',
            'password' => 'required|min:8',
        ]);

        // Hash password sebelum menyimpannya
        $hashedPassword = bcrypt($validatedData['password']);

        try {
            // Simpan pengguna baru ke database
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'role' => $validatedData['role'],
                'password' => $hashedPassword,
            ]);

            return redirect()->route('A-DATA')->with('success', 'Product added successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi masalah saat menyimpan
            return redirect()->route('A-DATA.create')->with('error', 'Failed to add product: ' . $e->getMessage());
        }
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $product = User::findOrFail($id);
      
            return view('A-DATA.show', compact('product'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $product = User::findOrFail($id);
      
            return view('A-DATA.edit', compact('product'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Cari pengguna berdasarkan id
            $user = User::findOrFail($id);

            // Update informasi pengguna
            $user->update($request->all());

            return redirect()->route('A-DATA.adata')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan jika pengguna tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-DATA')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari pengguna berdasarkan id
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('A-DATA')->with('success', 'Deleted successfully');
    }
}

