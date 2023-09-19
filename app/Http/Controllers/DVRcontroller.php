<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_dvr;
use App\Models\Cctv;

class DVRcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function udvr()
    {
        $udv = a_dvr::with('unit','location')->paginate(1000);
        return view('DVR.udvr', compact('udv'));
    }
    

    /**
     * Show the form for creatisng a new resource.
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
            $udv = a_dvr::findOrFail($id);

            // Ambil data dari tabel 'cctv' berdasarkan kriteria tertentu
            $cctvData = Cctv::where('id', $id)->get();        
      
            return view('DVR.show', compact('udv', 'cctvData'));
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
