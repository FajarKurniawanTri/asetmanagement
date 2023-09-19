<?php

namespace App\Http\Controllers;

use App\Exports\ExportFace;
use Illuminate\Http\Request;
use App\Models\a_face;
use App\Models\a_unit;
use App\Models\a_location;
use Maatwebsite\Excel\Facades\Excel;

class FaceRecognitionController extends Controller
{
    public function aface()
    {
        $fc = a_face::with('unit','location')->paginate(1000);
        return view('A-FACE.aface', compact('fc'));
    }
    public function export_excel(){
        return Excel::download(new ExportFace, "faceRecognition.xlsx");
    }

    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-FACE.create', compact('units', 'locations'));
    }
    
    public function store(Request $request)
    {
        a_face::create($request->all());
 
        return redirect()->route('A-FACE')->with('success', 'added successfully');
    }

    public function show(string $id)
    {
        {
            $fc = a_face::findOrFail($id);      
      
            return view('A-FACE.show', compact('fc'));
        }
    }
    public function edit(string $id)
    {
        {
            $fc = a_face::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
    
            return view('A-FACE.edit', compact('fc', 'units', 'locations'));
        }
    }
    public function update(Request $request, string $id)
    {
        try {
            // Cari produk berdasarkan id
            $fc = a_face::where('id', $id)->firstOrFail();
        
            // Update informasi produk
            $fc->update($request->all());
        
            return redirect()->route('A-FACE')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
                // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
                return redirect()->route('A-FACE')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }
    public function destroy(string $id)
    {
        {
            $fc = a_face::findOrFail($id);
      
            $fc->delete();
      
            return redirect()->route('A-FACE')->with('success', 'deleted successfully');
        }
    }
}
