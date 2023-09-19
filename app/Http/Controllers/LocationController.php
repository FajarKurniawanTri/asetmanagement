<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ulocation()
    {
        $uloc = a_location::with('unit')->paginate(1000);
        return view('location.ulocation', compact('uloc'));
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
            $uloc = a_location::findOrFail($id);
      
            return view('location.show', compact('uloc'));
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