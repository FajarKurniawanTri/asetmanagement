<?php

namespace App\Exports;

use App\Models\a_unit;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportAunit implements FromView
{
    /**
    * @return \Illuminate\Support\View
    */
    public function view(): View
    {
        $unt = a_unit::orderBy('created_at', 'DESC')->get();
        return view('A-UNIT.table', ['unt'=>$unt]);
    }
}
