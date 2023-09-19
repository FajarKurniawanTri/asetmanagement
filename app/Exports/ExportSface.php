<?php

namespace App\Exports;

use App\Models\a_fservice;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportSface implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $fserv = a_fservice::orderBy('created_at', 'DESC')->get();
        return view('A-FSERVICE.table', ['fserv'=>$fserv]);
    }
}
