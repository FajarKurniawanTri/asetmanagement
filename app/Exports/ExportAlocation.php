<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\a_location;
use Illuminate\Contracts\View\View;

class ExportAlocation implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $loc = a_location::orderBy('created_at', 'DESC')->get();
        return view('A-LOCATION.table', ['loc'=>$loc]);
    }
}
