<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_face;
use App\Models\a_unit;
use App\Models\a_location;

class UFaceController extends Controller
{
    public function uface()
    {
        $fc = a_face::with('unit','location')->paginate(1000);
        return view('FACE.uface', compact('fc'));
    }
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('FACE.create', compact('units', 'locations'));
    }
    
    public function store(Request $request)
    {
        a_face::create($request->all());
 
        return redirect()->route('FACE')->with('success', 'added successfully');
    }

    public function show(string $id)
    {
        {
            $fc = a_face::findOrFail($id);      
      
            return view('FACE.show', compact('fc'));
        }
    }
    public function edit(string $id)
    {
        {
            $fc = a_face::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
    
            return view('FACE.edit', compact('fc', 'units', 'locations'));
        }
    }
    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $fc = a_face::where('id', $id)->firstOrFail();
        
            // Update informasi produk
            $fc->update($request->all());
        
            return redirect()->route('FACE')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
                return redirect()->route('FACE')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }
    public function destroy(string $id)
    {
        {
            $fc = a_face::findOrFail($id);
      
            $fc->delete();
      
            return redirect()->route('FACE')->with('success', 'deleted successfully');
        }
    }
}

