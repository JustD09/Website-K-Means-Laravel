@extends('layouts.app')

@section('title', 'Data Kriteria')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Kriteria</h1>
        <a href="{{ route('kriteria.create') }}" class="btn btn-outline-success">Tambah Data</a>
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
                <th>Kode</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($kriteria->count() > 0)
                @foreach ($kriteria as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kode }}</td>
                        <td class="align-middle">{{ $rs->keterangan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kriteria.show', $rs->id) }}" type="button"
                                    class="btn btn-outline-secondary">Detail</a>
                                <a href="{{ route('kriteria.edit', $rs->id) }}" type="button"
                                    class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('kriteria.destroy', $rs->id) }}" method="POST" type="button"
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
