<?php

namespace App\Http\Controllers;

use App\Exports\ExportScctv;
use Illuminate\Http\Request;
use App\Models\a_service;
use App\Models\a_unit;
use App\Models\a_location;
use Maatwebsite\Excel\Facades\Excel;

class AserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aservice()
    {
        $product = a_service::with('unit','location')->paginate(1000);
  
        return view('A-SERVICE.aservice', compact('product'));
    }

    public function export_excel(){
        return Excel::download(new ExportScctv, "cctvhistory.xlsx");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $units = a_unit::all();
        $locations = a_location::all();
        return view('A-SERVICE.create', compact('units', 'locations'));
    }    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_service::create($request->all());
 
        return redirect()->route('A-SERVICE')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $product = a_service::findOrFail($id);
      
            return view('A-SERVICE.show', compact('product'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $product = a_service::findOrFail($id);
            $units = a_unit::all();
            $locations = a_location::all();
            return view('A-SERVICE.edit', compact('product','units', 'locations'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $product = a_service::where('id', $id)->findOrFail($id);

            // Duplikasi data lama
            $newproduct = $product->replicate();

            $product->update($request->all());

            // Simpan data lama
            $product->save();

            // Set "Finish Date" pada data baru menjadi tanggal hari ini
            $newproduct->finishdate = now();
            $newproduct->save();

            return redirect()->route('A-SERVICE')->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            // Tangani kesalahan jika produk tidak ditemukan atau kesalahan lainnya
            return redirect()->route('A-SERVICE')->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $product = a_service::findOrFail($id);
      
            $product->delete();
      
            return redirect()->route('A-SERVICE')->with('success', 'deleted successfully');
        }
    }
}
