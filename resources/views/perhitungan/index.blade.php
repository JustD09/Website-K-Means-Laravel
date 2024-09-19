@extends('layouts.app')

@section('title', 'Data Clustering')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Clustering</h1>
        <a href="{{ route('perhitungan.create') }}" class="btn btn-outline-success">Tambah Data</a>
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
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perhitungans as $perhitungan)
                <tr>
                    <td class="text-center">{{ $perhitungan->ruas }}</td>
                    <td class="text-center">{{ $perhitungan->sta_dari }}</td>
                    <td class="text-center"> {{ $perhitungan->sta_ke }}</td>
                    <td class="text-center">{{ $perhitungan->kondisi }}</td>
                    <td class="text-center">{{ $perhitungan->jenis }}</td>
                    <td class="text-center">{{ $perhitungan->ukuran_lubang }}</td>
                    <td class="text-center">{{ $perhitungan->distanceC1 }}</td>
                    <td class="text-center">{{ $perhitungan->distanceC2 }}</td>
                    <td class="text-center">{{ $perhitungan->distanceC3 }}</td>
                    <td class="text-center">{{ $perhitungan->cluster }}</td>
                    <td class="text-center">{{ $perhitungan->kategori }}</td>
                    <td class="align-middle text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('perhitungan.show', $perhitungan->id) }}" type="button"
                                class="btn btn-outline-secondary">Detail</a>
                            <a href="{{ route('perhitungan.edit', $perhitungan->id) }}" type="button"
                                class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('perhitungan.destroy', $perhitungan->id) }}" method="POST"
                                type="button" class="btn btn-outline-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
