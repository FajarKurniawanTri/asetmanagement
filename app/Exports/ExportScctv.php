<?php

namespace App\Exports;

use App\Models\a_service;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportScctv implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $product = a_service::orderBy('created_at', 'DESC')->get();
        return view('A-SERVICE.table', ['product'=>$product]);
    }
}
