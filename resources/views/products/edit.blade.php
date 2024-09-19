@extends('layouts.app')

@section('title', 'Edit Data Hasil Clustering')

@section('contents')
    <h1 class="mb-0">Edit Data Hasil Clustering</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No. Ruas</label>
                <input type="text" name="no_ruas" class="form-control" placeholder="Title"
                    value="{{ $product->no_ruas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Ruas</label>
                <input type="text" name="nama_ruas" class="form-control" placeholder="Price"
                    value="{{ $product->nama_ruas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Cluster</label>
                <input type="text" name="cluster" class="form-control" placeholder="Product Code"
                    value="{{ $product->cluster }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input class="form-control" name="status" value="{{ $product->status }}" placeholder="Status">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <select type="text" name="categories" class="form-control" placeholder="Keterangan"
                    value="{{ $product->categories }}">
                    <option>Prioritas</option>
                    <option>Kurang Prioritas</option>
                    <option>Tidak Prioritas</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="file" class="form-control" name="image" placeholder="Masukan Foto infrastruktur jalan">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button class="btn btn-outline-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
