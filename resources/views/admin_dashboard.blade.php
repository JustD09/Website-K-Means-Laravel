@extends('layouts.app')

@section('title', 'Aplikasi Penjadwalan Prioritas Infrastruktur')
{{-- @section('js')
    <script src="{{ $chart->cdn() }}"></script>
  {{ $chart->script() }}
@endsection --}}

@section('contents')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <div class="row">
        DPUBMTR Prov Sumsel
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
                                <h5 class="card-title">Data Ruas</h5>
                                <p class="card-text display-4">{{ $ruasCount }}</p>
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

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <h5 class="card-title">Data Kriteria</h5>
                                <p class="card-text display-4">{{ $kriteriaCount }}</p>
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
                <div id="chartData" style="width:100%; height:400px;"></div>
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
        const jumlahC1 = @json($jumlahC1);
        const jumlahC2 = @json($jumlahC2);
        const jumlahC3 = @json($jumlahC3);
        Highcharts.chart('chartData', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Data Clustering',
                align: 'center'
            },
            xAxis: {
                categories: ['Tidak Prioritas', 'Kurang Prioritas', 'Prioritas'],
                crosshair: true,
                accessibility: {
                    description: 'Grafik Data Clustering'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Range Data Clustering'
                }
            },
            tooltip: {
                valueSuffix: ' (Kategori Data Clustering)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Data Cluster',
                data: [jumlahC1, jumlahC2, jumlahC3],
            }, ]
        });
    </script>


    <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
        <h5 class="text-center">Data Clustering</h5>
        <thead>
            <tr>
                <th class="text-center">Ruas</th>
                <th class="text-center">STA Dari</th>
                <th class="text-center">STA Ke</th>
                <th class="text-center">Kondisi</th>
                <th class="text-center">Jenis</th>
                <th class="text-center">Ukuran Lubang</th>
                <th class="text-center">Distance C1</th>
                <th class="text-center">Distance C2</th>
                <th class="text-center">Distance C3</th>
                <th class="text-center">Cluster</th>
                <th class="text-center">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataHasil as $rs)
                <tr>
                    <td class="align-middle text-center">{{ $rs->ruas }}</td>
                    <td class="align-middle text-center">{{ $rs->sta_dari }}</td>
                    <td class="align-middle text-center">{{ $rs->sta_ke }}</td>
                    <td class="align-middle text-center">{{ $rs->kondisi }}</td>
                    <td class="align-middle text-center">{{ $rs->jenis }}</td>
                    <td class="align-middle text-center">{{ $rs->ukuran_lubang }}</td>
                    <td class="align-middle text-center">{{ $rs->distanceC1 }}</td>
                    <td class="align-middle text-center">{{ $rs->distanceC2 }}</td>
                    <td class="align-middle text-center">{{ $rs->distanceC3 }}</td>
                    <td class="align-middle text-center">{{ $rs->cluster }}</td>
                    <td class="align-middle text-center">{{ $rs->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <script src="{{ $chart->cdn() }}"></script> --}}
    {{-- <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}

    {{-- {{ $chart->script() }} --}}
@endsection
