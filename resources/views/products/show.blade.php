@extends('layouts.app')

@section('title', 'Data Hasil Clustering')

@section('contents')
    <h1 class="mb-0">Detail Data Hasil Clustering</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No. Ruas</label>
            <input type="text" name="no_ruas" class="form-control" placeholder="No. Ruas" value="{{ $product->no_ruas }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Ruas</label>
            <input type="text" name="nama_ruas " class="form-control" placeholder="Nama Ruas"
                value="{{ $product->nama_ruas }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Cluster</label>
            <input type="text" name="cluster" class="form-control" placeholder="Cluster" value="{{ $product->cluster }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input class="form-control" name="status" placeholder="Status" value="{{ $product->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Prioritas</label>
            <input class="form-control" name="categories" placeholder="Prioritas" value="{{ $product->categories }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto</label>
            <div class="img-container">
                <img name="image" type="img" class="img-fluid custom-img" id="image" readonly
                    src="{{ asset('images/' . $product->image) }}" alt="Kerusakan" width="100">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="d-grid text-center">
            <a href="{{ route('products') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </div>
@endsection
