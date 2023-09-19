<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alog()
    {
        $product = User::orderBy('created_at', 'DESC')->get();
        return view('A-LOG.alog', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('A-LOG.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('A-LOG')->with('success', 'added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { {
            $product = User::findOrFail($id);

            return view('A-LOG.show', compact('product'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { {
            $product = User::findOrFail($id);

            return view('A-LOG.edit', compact('product'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $product = User::where('id', $id)->firstOrFail();

            // Update informasi produk
            $product->update($request->all());

            return redirect()->route('A-LOG')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-LOG')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { {
            $product = User::findOrFail($id);

            $product->delete();

            return redirect()->route('A-LOG')->with('success', 'deleted successfully');
        }
    }
}
