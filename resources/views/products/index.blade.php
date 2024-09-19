@extends('layouts.app')

@section('title', 'Hasil Clustering')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Hasil Clustering</h1>
        <a href="{{ route('products.create') }}" class="btn btn-outline-success">Tambah Data</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover" id="dataTable">
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
            @if ($product->count() > 0)
                @foreach ($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->no_ruas }}</td>
                        <td class="align-middle">{{ $rs->nama_ruas }}</td>
                        <td class="align-middle">{{ $rs->cluster }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{$rs->categories}}</td>
                        <td class="align-middle">{{$rs->image}}</td>
                        {{-- <td class="align-middle">{{ $rs->Detail }}</td> --}}
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button"
                                    class="btn btn-outline-secondary">Detail</a>
                                <a href="{{ route('products.edit', $rs->id) }}" type="button"
                                    class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-outline-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
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
