@extends('partials.app')

@section('title', 'Hasil Clustering')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Hasil Clustering</h1>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>No. Ruas</th>
                <th>Nama Ruas</th>
                <th>Cluster</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($atasanProduct->count() > 0)
                @foreach ($atasanProduct as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->no_ruas }}</td>
                        <td class="align-middle">{{ $rs->nama_ruas }}</td>
                        <td class="align-middle">{{ $rs->cluster }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{ $rs->categories }}</td>
                        <td class="align-middle">{{$rs->image}}</td>
                        <td class="align-middle">
                            <a href="{{ route('atasanProduct.show', $rs->id) }}" type="button"
                                class="btn btn-outline-secondary">Detail</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="10">Data Infrastruktur Jalan Tidak Ada !</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
