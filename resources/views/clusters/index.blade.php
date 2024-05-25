@extends('layouts.app')

@section('title', 'Penambahan data pembangunan infrastruktur ruas jalan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Pembangunan Infrastruktur Ruas Jalan</h1>
        <a href="{{ route('clusters.create') }}" class="btn btn-primary">Tambah Data</a>
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
                <th>Nama Jalan</th>
                <th>Panjang Jalan</th>
                <th>Deskripsi</th>
                <th>Titik Kerusakan</th>
                <th>Lebar Kerusakan</th>
                <th>Status</th>
                <th>Prioritas</th>
                <th>Update, Delete, and Detail</th>
            </tr>
        </thead>
        <tbody>
            @if ($cluster->count() > 0)
                @foreach ($cluster as $rs)
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
                        {{-- <td class="align-middle">{{ $rs->Detail }}</td> --}}
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clusters.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('clusters.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('clusters.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
