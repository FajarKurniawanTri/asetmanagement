<?php

namespace App\Exports;

use App\Models\a_face;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportFace implements FromView
{
    /**
    * @return \Illuminate\Support\View
    */
    public function view(): View
    {
        $fc = a_face::orderBy('created_at', 'DESC')->get();
        return view('A-FACE.table', ['fc'=>$fc]);
    }
}
