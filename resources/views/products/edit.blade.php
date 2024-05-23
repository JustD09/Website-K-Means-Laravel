@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Jalan</label>
                <input type="text" name="nama_jalan" class="form-control" placeholder="Title"
                    value="{{ $product->nama_jalan }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Panjang Jalan</label>
                <input type="text" name="panjang_jalan" class="form-control" placeholder="Price"
                    value="{{ $product->panjang_jalan }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="Deskripsi" class="form-control" placeholder="Product Code"
                    value="{{ $product->Deskripsi }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Titik Kerusakan</label>
                <textarea class="form-control" name="titik_kerusakan" placeholder="Descriptoin">{{ $product->titik_kerusakan }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Lebar Kerusakan</label>
                <input type="text" name="lebar_kerusakan" class="form-control" placeholder="Product Code"
                    value="{{ $product->lebar_kerusakan }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <textarea class="form-control" name="Status" placeholder="Descriptoin">{{ $product->Status }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Prioritas</label>
                <input type="text" name="categories" class="form-control" placeholder="Prioritas"
                    value="{{ $product->Prioritas }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
