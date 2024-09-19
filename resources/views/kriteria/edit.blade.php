@extends('layouts.app')

@section('title', 'Edit Data Kriteria')

@section('contents')
    <h1 class="mb-0">Edit Data Kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode</label>
                <input type="text" name="kode" class="form-control" placeholder="Kode"
                    value="{{ $kriteria->kode }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"
                    value="{{ $kriteria->keterangan }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button class="btn btn-outline-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
