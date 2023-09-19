<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Cctv;
use Illuminate\Contracts\View\View;

class ExportAcctv implements FromView
{
    /**
    * @return \Illuminate\Support\View
    */
    public function view(): View
    {
        $cc = Cctv::orderBy('created_at', 'DESC')->get();
        return view('A-CCTV.table', ['cc'=>$cc]);
    }
}
