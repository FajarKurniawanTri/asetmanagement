<?php

namespace App\Http\Controllers;

use App\Exports\ExportSface;
use Illuminate\Http\Request;
use App\Models\a_fservice;
use App\Models\a_unit;
use App\Models\a_location;
use Maatwebsite\Excel\Facades\Excel;

class UfserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function ufservice()
    {
        $fserv = a_fservice::with('unit','location')->paginate(1000);
        return view('U-FSERVICE.ufservice', compact('fserv'));
    }
    public function export_excel(){
        return Excel::download(new ExportSface, "facehistory.xlsx");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('U-FSERVICE.create', compact('units', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_fservice::create($request->all());
 
        return redirect()->route('U-FSERVICE')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $fserv = a_fservice::findOrFail($id);
      
            return view('U-FSERVICE.show', compact('fserv'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $fserv = a_fservice::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
      
            return view('U-FSERVICE.edit', compact('fserv', 'units', 'locations'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $fserv = a_fservice::where('id', $id)->firstOrFail();

            // Duplikasi data lama
            $newFserv = $fserv->replicate();

            // Update data lama
            $fserv->update($request->all());

            // Perbarui "Finish Date" pada data lama menjadi tanggal hari ini
            $fserv->update(['finishdate' => now()]);

            // Simpan data lama
            $fserv->save();

            // Set "Finish Date" pada data baru menjadi tanggal hari ini
            $newFserv->finishdate = now();
            $newFserv->save();

            return redirect()->route('U-FSERVICE')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
            return redirect()->route('u-FSERVICE')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $fserv = a_fservice::findOrFail($id);
      
            $fserv->delete();
      
            return redirect()->route('U-FSERVICE')->with('success', 'deleted successfully');
        }
    }
}
