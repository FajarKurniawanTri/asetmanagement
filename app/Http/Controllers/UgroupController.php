<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_group;

class UgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ugroup()
    {
        $ugrp = a_group::orderBy('created_at', 'DESC')->get();
  
        return view('U-group.ugroup', compact('ugrp'));
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
            $ugrp = a_group::findOrFail($id);
      
            return view('U-group.show', compact('ugrp'));
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
