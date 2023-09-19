<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use App\Models\a_group;
use Illuminate\Contracts\View\View;

class ExportAgroup implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $grp = a_group::orderBy('created_at', 'DESC')->get();
        return view('A-GROUP.table', ['grp'=>$grp]);
    }
}
