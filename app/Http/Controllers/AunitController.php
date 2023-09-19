<?php

namespace App\Http\Controllers;

use App\Models\a_group;
use Illuminate\Http\Request;
use App\Models\a_unit;
use App\Exports\ExportAunit;
use Maatwebsite\Excel\Facades\Excel;

class AunitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aunit()
    {
        $unt = a_unit::with('group')->paginate(1000);
        return view('A-UNIT.aunit', compact('unt'));
    }

    public function export_excel(){
        return Excel::download(new ExportAunit, "unit.xlsx");
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grp = a_group::all();
        return view('A-UNIT.create', compact('grp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_unit::create($request->all());
 
        return redirect()->route('A-UNIT')->with('success', 'added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $unt = a_unit::findOrFail($id);
      
            return view('A-UNIT.show', compact('unt'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $grp = a_group::all();
            $unt = a_unit::with('group')->findOrFail($id);
      
            return view('A-UNIT.edit', compact('unt','grp'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $unt = a_unit::findOrFail($id);
      
            $unt->update($request->all());
      
            return redirect()->route('A-UNIT')->with('success', 'unt updated successfully');
        }
      
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $unt = a_unit::findOrFail($id);
      
            $unt->delete();
      
            return redirect()->route('A-UNIT')->with('success', 'deleted successfully');
        }
    }
    
}
