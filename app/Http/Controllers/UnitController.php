<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function uunit()
    {
        $uunt = a_unit::with('group')->paginate(1000);
        return view('unit.uunit', compact('uunt'));
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
            $uunt = a_unit::findOrFail($id);
      
            return view('unit.show', compact('uunt'));
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
