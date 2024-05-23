<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ChartData
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // $chartData = BarChart::get();
        // $data = [
        //     $chartData->where('Prioritas',1)->count(),
        //     $chartData->where('Non-Prioritas',2)->count(),
        // ];
        // $label = [
        //     'Prioritas',
        //     'Non-Prioritas'
        // ];
        return $this->chart->barChart()
            ->setTitle('Data Infrastruktur Ruas Jalan')
            ->setSubtitle(date ('Y'))
            // ->addData($data)
            // ->addData($data)
            ->setXAxis(['Prioritas', 'Non-Prioritas']);
    }
}
