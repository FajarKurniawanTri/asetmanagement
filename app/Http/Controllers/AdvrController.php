<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_dvr;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\Cctv;

class AdvrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function advr()
    {
        $dv = a_dvr::with('unit','location')->paginate(1000);
        return view('A-DVR.advr', compact('dv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-DVR.create',  compact('units', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_dvr::create($request->all());
 
        return redirect()->route('A-DVR')->with('success', 'added successfully');
    }
    public function storeCctv(Request $request)
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
             $dv = a_dvr::findOrFail($id);

            // Ambil data dari tabel 'cctv' berdasarkan kriteria tertentu
            $cctvData = Cctv::where('id', $id)->get();        
      
            return view('A-DVR.show', compact('dv', 'cctvData'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $dv = a_dvr::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
            return view('A-DVR.edit', compact('dv', 'units', 'locations'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
        {
            try {
                // Cari produk berdasarkan id
                $dv = a_dvr::where('id', $id)->firstOrFail();
        
                // Update informasi produk
                $dv->update($request->all());
        
                return redirect()->route('A-DVR')->with('success', 'Product updated successfully');
            } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
                return redirect()->route('A-DVR')->with('error', 'Failed to update product: ' . $e->getMessage());
            }
        }
        
    public function updateCctv(Request $request, string $id)
    {
        try {
            // Cari data CCTV berdasarkan id
            $cctv = Cctv::findOrFail($id);

            // Update informasi CCTV
            $cctv->update($request->all());

            return redirect()->route('A-R.show', ['id' => $cctv->anvr_id])->with('success', 'CCTV berhasil diperbarui');

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
            $dv = a_dvr::findOrFail($id);
      
            $dv->delete();
      
            return redirect()->route('A-DVR')->with('success', 'deleted successfully');
        }
    }
}

