<?php

namespace App\Http\Controllers;

use App\Models\Cctv;
use App\Models\a_dvr;
use App\Models\a_group;
use App\Models\a_location;
use App\Models\a_nvr;
use Illuminate\Http\Request;
use App\Models\a_unit;
use App\Models\a_face;
use App\Charts\FaceChart;
use App\Charts\CctvChart;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FaceChart $faceChart, CctvChart $cctvChart)
    {
        $totalGroup = a_group::count();
        $totalUnit = a_unit::count();
        $totalLocation = a_location::count();
        $totalNVR = a_nvr::count();
        $totalDVR = a_dvr::count();
        $totalFace = a_face::count();
        $totalCctv = Cctv::count();

        $data['faceChart'] = $faceChart->build();
        $data['CctvChart'] = $cctvChart->build();

        return view('dashboard', compact('totalUnit', 'totalLocation', 'totalGroup','totalNVR','totalDVR','totalFace','data','totalCctv'));
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
        //
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
