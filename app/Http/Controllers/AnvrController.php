<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_nvr;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\Cctv;

class AnvrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function anvr()
    {
        $nv = a_nvr::with('unit','location')->paginate(1000);
        return view('A-NVR.anvr', compact('nv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-NVR.create', compact('units', 'locations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_nvr::create($request->all());
 
        return redirect()->route('A-NVR')->with('success', 'added successfully');
    }
    /**
 * Store a newly created CCTV resource in storage.
 */
        public function Cctv(Request $request)
        {
            Cctv::create($request->all());
     
            return redirect()->route('A-NVR')->with('success', 'added successfully');
        }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $nv = a_nvr::findOrFail($id);

            // Ambil data dari tabel 'cctv' berdasarkan kriteria tertentu
            $cc = Cctv::all();        
      
            return view('A-NVR.show', compact('nv', 'cc'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $nv = a_nvr::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
    
            return view('A-NVR.edit', compact('nv', 'units', 'locations'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
        {
            try {
                // Cari produk berdasarkan id
                $nv = a_nvr::where('id', $id)->firstOrFail();
        
                // Update informasi produk
                $nv->update($request->all());
        
                return redirect()->route('A-NVR')->with('success', 'Product updated successfully');
            } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
                return redirect()->route('A-NVR')->with('error', 'Failed to update product: ' . $e->getMessage());
            }
        }
        
    public function updateCctv(Request $request, string $id)
    {
        try {
            // Cari data CCTV berdasarkan id
            $cc = Cctv::findOrFail($id);

            // Update informasi CCTV
            $cc->update($request->all());

            return redirect()->route('A-NVR.show', ['id' => $cc->anvr_id])->with('success', 'CCTV berhasil diperbarui');

        } catch (\Exception $e) {
            // Tangani kesalahan jika CCTV tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-NVR.show', ['id' => $id])->with('error', 'Failed to update CCTV: ' . $e->getMessage());
        }
    }

    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $nv = a_nvr::findOrFail($id);
      
            $nv->delete();
      
            return redirect()->route('A-NVR')->with('success', 'deleted successfully');
        }
    }
}

