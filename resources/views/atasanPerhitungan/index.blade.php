@extends('partials.app')

@section('title', 'Data Clustering')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Clustering</h1>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <h4 class="mb-1 text-center">Centroid Awal</h4>
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Keterangan</th>
                <th>Kondisi Permukaan Kerasan</th>
                <th>Jenis Retak -Retak </th>
                <th>Ukuran Lubang </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>C1</td>
                <td>Tidak Prioritas</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>C2</td>
                <td>Kurang Prioritas</td>
                <td>3</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>C3</td>
                <td>Prioritas</td>
                <td>3</td>
                <td>2</td>
                <td>4</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-hover">
        <h4 class="mb-1 text-center">Centroid Baru</h4>
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Keterangan</th>
                <th>Kondisi Permukaan Kerasan</th>
                <th>Jenis Retak -Retak </th>
                <th>Ukuran Lubang </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>C1</td>
                <td>Tidak Prioritas</td>
                <td>0.275280899</td>
                <td>2.934628817</td>
                <td>3.68304996</td>
            </tr>
            <tr>
                <td>2</td>
                <td>C2</td>
                <td>Kurang Prioritas</td>
                <td>3.488904827</td>
                <td>2.572021132</td>
                <td>3.400657141</td>
            </tr>
            <tr>
                <td>3</td>
                <td>C3</td>
                <td>Prioritas</td>
                <td>3.659524158</td>
                <td>2.648351669</td>
                <td>2.188849525</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Ruas</th>
                <th>STA Dari</th>
                <th>STA Ke</th>
                <th>Kondisi</th>
                <th>Jenis</th>
                <th>Ukuran Lubang</th>
                <th>Distance C1</th>
                <th>Distance C2</th>
                <th>Distance C3</th>
                <th>Cluster</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atasanPerhitungans as $perhitungan)
                <tr>
                    <td>{{ $perhitungan->ruas }}</td>
                    <td>{{ $perhitungan->sta_dari }}</td>
                    <td>{{ $perhitungan->sta_ke }}</td>
                    <td>{{ $perhitungan->kondisi }}</td>
                    <td>{{ $perhitungan->jenis }}</td>
                    <td>{{ $perhitungan->ukuran_lubang }}</td>
                    <td>{{ $perhitungan->distanceC1 }}</td>
                    <td>{{ $perhitungan->distanceC2 }}</td>
                    <td>{{ $perhitungan->distanceC3 }}</td>
                    <td>{{ $perhitungan->cluster }}</td>
                    <td>{{ $perhitungan->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
