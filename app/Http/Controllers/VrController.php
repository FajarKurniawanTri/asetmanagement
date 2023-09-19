<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_vr;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\Cctv;

class VrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function avr()
    {
        $totalCctv = Cctv::count();
        $vr = a_vr::with('unit','location')->paginate(1000);
        return view('A-VR.avr', compact('vr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-VR.create', compact('units', 'locations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_vr::create($request->all());
 
        return redirect()->route('A-VR')->with('success', 'added successfully');
    }
    /**
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $vr = a_vr::findOrFail($id);

            // Ambil data dari tabel 'cctv' berdasarkan kriteria tertentu
            $cctv = $vr->cctv;        
      
            return view('A-VR.show', compact('vr', 'cc'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $vr = a_vr::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
    
            return view('A-VR.edit', compact('vr', 'units', 'locations'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
                // Cari produk berdasarkan id
            $vr = a_vr::where('id', $id)->firstOrFail();
         
                // Update informasi produk
            $vr->update($request->all());
        
            return redirect()->route('A-VR')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-VR')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }
        

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $vr = a_vr::findOrFail($id);
      
            $vr->delete();
      
            return redirect()->route('A-VR')->with('success', 'deleted successfully');
        }
    }
}
