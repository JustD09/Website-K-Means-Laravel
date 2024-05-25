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

    <div class="card-deck">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text display-4">{{ $userCount }}</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <h5 class="card-title">Data Infrastruktur</h5>
                                <p class="card-text display-4">{{ $productCount }}</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-road fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <h5 class="card-title">Data Cluster</h5>
                                <p class="card-text display-4">{{ $clusterCount }}</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-road fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 position-relative">
            <div class="right-corner">
                <div id="chartData"></div>
            </div>
        </div>
    </div>

    {{-- <div class="row mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text display-4">{{ $userCount }}</p>
            </div>
        </div>
    </div> --}}

    <script type="text/javascript">
        const data = @json($jumlahCategory);
        const total = @json($totalCategory);
        Highcharts.chart('chartData', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Cluster',
                align: 'center'
            },
            xAxis: {
                categories: ['Prioritas', 'Kurang Prioritas', 'Non-Prioritas'],
                crosshair: true,
                accessibility: {
                    description: 'Grafik Data Cluster'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Range Data Cluster'
                }
            },
            tooltip: {
                valueSuffix: ' (Data Cluster Priority)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Data Cluster',
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
            @foreach ($dataHasil as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->nama_jalan }}</td>
                    <td class="align-middle">{{ $rs->panjang_jalan }}</td>
                    <td class="align-middle">{{ $rs->Deskripsi }}</td>
                    <td class="align-middle">{{ $rs->titik_kerusakan }}</td>
                    <td class="align-middle">{{ $rs->lebar_kerusakan }}</td>
                    <td class="align-middle">{{ $rs->Status }}</td>
                    <td class="align-middle">
                        @if ($rs->categories == 1)
                            Prioritas
                        @endif
                        @if ($rs->categories == 2)
                            Kurang Prioritas
                        @endif
                        @if ($rs->categories == 3)
                            Non Prioritas
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <script src="{{ $chart->cdn() }}"></script> --}}
    {{-- <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}

    {{-- {{ $chart->script() }} --}}
@endsection
