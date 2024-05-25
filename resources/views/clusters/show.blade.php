@extends('layouts.app')

@section('title', 'Data Pembangunan Ruas Jalan')

@section('contents')
    <h1 class="mb-0">Detail Data Pembangunan Ruas Jalan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Jalan</label>
            <input type="text" name="nama_jalan" class="form-control" placeholder="Nama Jalan"
                value="{{ $cluster->nama_jalan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Panjang Jalan</label>
            <input type="text" name="panjang_jalan " class="form-control" placeholder="Panjang Jalan"
                value="{{ $cluster->panjang_jalan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="Deskripsi" class="form-control" placeholder="Deskripsi"
                value="{{ $cluster->Deskripsi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Titik Kerusakan</label>
            <textarea class="form-control" name="titik_kerusakan" placeholder="Titik Kerusakan" readonly>{{ $cluster->titik_kerusakan }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lebar Kerusakan</label>
            <input type="text" name="lebar_kerusakan" class="form-control" placeholder="Lebar Kerusakan"
                value="{{ $cluster->lebar_kerusakan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="Status" placeholder="Status" readonly>{{ $cluster->Status }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prioritas</label>
            <textarea class="form-control" name="categories" placeholder="Prioritas" readonly>{{ $cluster->categories }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $cluster->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $cluster->updated_at }}" readonly>
        </div>
    </div>
@endsection
