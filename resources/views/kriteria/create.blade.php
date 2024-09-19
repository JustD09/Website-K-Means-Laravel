@extends('layouts.app')

@section('title', 'Penambahan Data Kriteria')

@section('contents')
    <h1 class="mb-0">Masukan Data Kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" name="kode" class="form-control" placeholder="kode">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control"
                    placeholder="keterangan">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
