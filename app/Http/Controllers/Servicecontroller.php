<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_service;

class Servicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function uservice()
    {
        $product = a_service::orderBy('created_at', 'DESC')->get();
  
        return view('service.uservice', compact('product'));
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
            $product = a_service::findOrFail($id);
      
            return view('service.show', compact('product'));
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
