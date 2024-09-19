@extends('layouts.app')

@section('title', 'Data Kriteria')

@section('contents')
    <h1 class="mb-0">Detail Data Kriteria</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode</label>
            <input type="text" name="kode" class="form-control" placeholder="Kode"
                value="{{ $kriteria->kode }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" name="keterangan " class="form-control" placeholder="Keterangan"
                value="{{ $kriteria->keterangan }}" disabled>
        </div>
    </div>
@endsection
