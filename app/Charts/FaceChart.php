<?php

namespace App\Charts;

use App\Models\a_face;
use ArielMejiaDev\LarapexCharts\DonutChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class FaceChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $face = a_face::get();
        $data = [
            $face->where('condition', 'Baik')->count(),
            $face->where('condition', 'Buruk')->count(),
        ];
        $label = [
            'Baik',
            'Buruk',
        ];
        return $this->chart->donutChart()
            ->setTitle('Face Recognition')
            ->setSubtitle(date('Y'))
            ->setWidth(450)
            ->setHeight(300)
            ->addData($data)
            ->setLabels($label);
    }
}
