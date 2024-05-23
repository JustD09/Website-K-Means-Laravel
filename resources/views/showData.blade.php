@extends('layouts.app')
  
@section('title', 'Laporan Hasil Infrastruktur Ruas Jalan')
{{-- @section('js')
    <script src="{{ $chart->cdn() }}"></script>
  {{ $chart->script() }}
@endsection --}}
  
@section('contents')
<script src="https://code.highcharts.com/highcharts.js"></script>
  <div class="row">
    Data Infrastruktur Ruas Jalan
  </div>

  {{-- <div class="row mb-0">
    <div id="chartTable">
        {!! $chart->chartTable() !!}
    </div>
  </div> --}}

  <div class="row mb-1">
    <div id="dataTable">
        <h1 class="mb-0"></h1>
        <a href="{{ route('products')}}"></a>
    </div>
  </div>
  {{-- <script>
    Highcharts.chart('chartTable', {
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
    series: [
        {
            name: 'Data Prioritas',
            data: [1243, 1567]
        },
    ]
});

  </script> --}}

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
                <th>1</th>
                <th>Jl. A</th>
                <th>2 KM</th>
                <th>xyz</th>
                <th>2</th>
                <th>3</th>
                <th>Dalam Pengerjaan!</th>
                <th>Prioritas</th>
            </tr>
        </tbody>
    </table>
<script src="{{ asset ('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset ('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

@endsection