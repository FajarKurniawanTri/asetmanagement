<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a_location;
use App\Models\a_unit;
use App\Exports\ExportAlocation;
use Maatwebsite\Excel\Facades\Excel;

class AlocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alocation()
    {
        $loc = a_location::with('unit')->paginate(1000);
        return view('A-LOCATION.alocation', compact('loc'));
    }

    public function export_excel(){
        return Excel::download(new ExportAlocation, "location.xlsx");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unt = a_unit::all();
        return view('A-LOCATION.create',compact('unt'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_location::create($request->all());
 
        return redirect()->route('A-LOCATION')->with('success', 'added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $loc = a_location::findOrFail($id);
      
            return view('A-LOCATION.show', compact('loc'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $unt = a_unit::all();
            $loc = a_location::with('unit')->findOrFail($id);
            return view('A-LOCATION.edit', compact('unt','loc'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $loc = a_location::findOrFail($id);
      
            $loc->update($request->all());
      
            return redirect()->route('A-LOCATION')->with('success', 'location updated successfully');
        }
      
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $loc = a_location::findOrFail($id);
      
            $loc->delete();
      
            return redirect()->route('A-LOCATION')->with('success', 'deleted successfully');
        }
    }
}
