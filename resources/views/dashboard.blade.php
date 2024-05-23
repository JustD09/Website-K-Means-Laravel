@extends('layouts.app')

@section('title', 'Penjadwalan Prioritas Pembangunan Infrastruktur Ruas Jalan')
{{-- @section('js')
    <script src="{{ $chart->cdn() }}"></script>
  {{ $chart->script() }}
@endsection --}}

@section('contents')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <div class="row">
        Kemen PUPR
    </div>

    <div class="row mb-1">
        <div id="dataTable">
        </div>
    </div>

    <div class="row mb-0">
        <div id="chartData"></div>
    </div>

    <script type="text/javascript">
        const data = @json($jumlahCategory);
        const total = @json($totalCategory);
        Highcharts.chart('chartData', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Prioritas Pembangunan Infrastruktur Ruas Jalan',
                align: 'center'
            },
            xAxis: {
                categories: ['Prioritas', 'Non-Prioritas'],
                crosshair: true,
                accessibility: {
                    description: 'Data Infrastruktur'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '1000 Meter (M)'
                }
            },
            tooltip: {
                valueSuffix: ' (1000 M)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Data Prioritas',
                data: total,
            }, ]
        });
    </script>


    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jalan</th>
                <th>Panjang Jalan</th>
                <th>Deskripsi</th>
                <th>Titik Kerusakan</th>
                <th>Lebar Kerusakan</th>
                <th>Status</th>
                <th>Prioritas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th> {{-- Numbering --}}
                <th>Jl. A</th> {{-- Nama Jalan --}}
                <th>2 KM</th> {{-- Panjang Jalan --}}
                <th>xyz</th> {{-- Deskrips --}}
                <th>2</th> {{-- Tingakat kerusakan dalam bentuk angka --}}
                <th>3</th> {{-- Lebar Kerusakan dalam bentuk angka --}}
                <th>Dalam Pengerjaan!</th> {{-- Status Pengerjaan --}}
                <th>Prioritas</th> {{-- Status Prioritas --}}
            </tr>
        </tbody>
    </table>
    {{-- <script src="{{ $chart->cdn() }}"></script> --}}
    {{-- <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}

    {{-- {{ $chart->script() }} --}}
@endsection
