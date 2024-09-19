@extends('layouts.app')

@section('title', 'Data Ruas Jalan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Ruas Jalan</h1>
        <a href="{{ route('ruas.create') }}" class="btn btn-outline-success">Tambah Data</a>
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
                <th class="align-middle">No</th>
                <th class="align-middle">No. Ruas</th>
                <th class="align-middle">Provinsi</th>
                <th class="align-middle">Panjang Ruas (KM)</th>
                <th class="align-middle">Lebar Kerasan (M)</th>
                <th class="align-middle">Tipe Kerasan</th>
                <th class="align-middle">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($ruas->count() > 0)
                @foreach ($ruas as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->no_ruas }}</td>
                        <td class="align-middle">{{ $rs->provinsi }}</td>
                        <td class="align-middle">{{ $rs->panjang_ruas }}</td>
                        <td class="align-middle">{{ $rs->lebar_kerasan }}</td>
                        <td class="align-middle">{{ $rs->tipe_kerasan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('ruas.show', $rs->id) }}" type="button"
                                    class="btn btn-outline-secondary">Detail</a>
                                <a href="{{ route('ruas.edit', $rs->id) }}" type="button"
                                    class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route('ruas.destroy', $rs->id) }}" method="POST" type="button"
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
