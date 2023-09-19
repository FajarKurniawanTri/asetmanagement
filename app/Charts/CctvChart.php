<?php

namespace App\Charts;

use App\Models\Cctv;
use ArielMejiaDev\LarapexCharts\BarChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CctvChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): BarChart
{
    $cctv = Cctv::get();
    
    $data = [
        'Baik' => $cctv->where('condition', 'Baik')->count(),
        'Buruk' => $cctv->where('condition', 'Buruk')->count(),
    ];

    return $this->chart->barChart()
        ->setTitle('CCTV')
        ->setSubtitle(date('Y'))
        ->setXAxis(array_keys($data))
        ->setWidth(450)
        ->setHeight(300)
        ->setColors(['#008FFB', '#ff455f']) // Warna biru untuk "Baik" dan merah untuk "Buruk"
        ->setDataset([
            [
                'name' => 'Total',
                'data' => array_values($data),
            ],
        ]);
}

}

