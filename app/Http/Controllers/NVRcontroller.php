<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_nvr;
use App\Models\a_unit;
use App\Models\a_location;
use App\Models\Cctv;

class NVRcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function unvr()
    {
        $unv = a_nvr::with('unit','location')->paginate(1000);
        return view('NVR.unvr', compact('unv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $unv = a_nvr::findOrFail($id);

            // Ambil data dari tabel 'cctv' berdasarkan kriteria tertentu
            $cctvData = Cctv::where('id', $id)->get();        
      
            return view('NVR.show', compact('unv', 'cctvData'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
