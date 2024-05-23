@extends('layouts.app')

@section('title', 'Laporan Hasil Clustering')
{{-- @section('js')
    <script src="{{ $chart->cdn() }}"></script>
  {{ $chart->script() }}
@endsection --}}

@section('contents')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <div class="row">
        Tabel Hasil Clustering
    </div>

    {{-- <div class="row mb-0">
    <div id="chartTable">
        {!! $chart->chartTable() !!}
    </div>
  </div> --}}

    <div class="row mb-1">
        <div id="dataTable">
            <h1 class="mb-0"></h1>
            <a href="{{ route('products') }}"></a>
        </div>
    </div>

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
            <tr>
                <th>2</th>
                <th>Jl. B</th>
                <th>1 KM</th>
                <th>ABC</th>
                <th>1</th>
                <th>2</th>
                <th>Sudah Selesai Pengerjaan!</th>
                <th>Non-Prioritas</th>
            </tr>
        </tbody>
    </table>
    <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

@endsection
