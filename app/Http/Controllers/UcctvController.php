<?php

namespace App\Http\Controllers;

use App\Exports\ExportAcctv;
use Illuminate\Http\Request;
use App\Models\Cctv;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\a_vr;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UcctvController extends Controller
{
    public function ucctv()
    {
        $cc = Cctv::with('unit','location')->paginate(1000);
        return view('CCTV.ucctv', compact('cc'));
    }

    public function export_excel(){
        return Excel::download(new ExportAcctv, "cctv.xlsx");
    }

    public function create()
    {
        $vr = a_vr::all();
        $units = a_unit::all();
        $locations = a_location::all();
        return view('CCTV.create', compact('units', 'locations','vr'));
    }
    
    public function store(Request $request)
    {
        Cctv::create($request->all());
 
        return redirect()->route('CCTV')->with('success', 'added successfully');
    }

    public function show(string $id)
    {
        {
            $cc = Cctv::findOrFail($id);      
      
            return view('CCTV.show', compact('cc'));
        }
    }
    public function edit(string $id)
    {
        {
            $cc = Cctv::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
    
            return view('CCTV.edit', compact('cc', 'units', 'locations'));
        }
    }
    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $cc = Cctv::where('id', $id)->firstOrFail();
        
            // Update informasi produk
            $cc->update($request->all());
        
            return redirect()->route('CCTV')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
                return redirect()->route('CCTV')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }
    public function destroy(string $id)
    {
        {
            $cc = Cctv::findOrFail($id);
      
            $cc->delete();
      
            return redirect()->route('CCTV')->with('success', 'deleted successfully');
        }
    }
}

