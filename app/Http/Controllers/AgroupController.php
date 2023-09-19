<?php

namespace App\Http\Controllers;

use App\Exports\ExportAgroup;
use Illuminate\Http\Request;
use App\Models\a_group;
use Maatwebsite\Excel\Facades\Excel;

class AgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function agroup()
    {
        $grp = a_group::orderBy('created_at', 'DESC')->get();
  
        return view('A-GROUP.agroup', compact('grp'));
    }

    public function export_excel(){
        return Excel::download(new ExportAgroup, "group.xlsx");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('A-GROUP.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        a_group::create($request->all());
 
        return redirect()->route('A-GROUP')->with('success', ' added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $grp = a_group::findOrFail($id);
      
            return view('A-GROUP.show', compact('grp'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $grp = a_group::findOrFail($id);
      
            return view('A-GROUP.edit', compact('grp'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $grp = a_group::findOrFail($id);
      
            $grp->update($request->all());
      
            return redirect()->route('A-GROUP')->with('success', ' updated successfully');
        }
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $grp = a_group::findOrFail($id);
      
            $grp->delete();
      
            return redirect()->route('A-GROUP')->with('success', 'deleted successfully');
        }
    }
}
