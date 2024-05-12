@extends('layouts.app')
  
@section('title', 'Data Pembangunan Ruas Jalan')
  
@section('contents')
    <h1 class="mb-0">Detail Data Pembangunan Ruas Jalan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Jalan</label>
            <input type="text" name="nama_jalan" class="form-control" placeholder="Nama Jalan" value="{{ $product->nama_jalan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Panjang Jalan</label>
            <input type="text" name="panjang_jalan " class="form-control" placeholder="Panjang Jalan" value="{{ $product->panjang_jalan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="Deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $product->Deskripsi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="titik_kerusakan" placeholder="Titik Kerusakan" readonly>{{ $product->titik_kerusakan }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lebar Kerusakan</label>
            <input type="text" name="lebar_kerusakan" class="form-control" placeholder="Product Code" value="{{ $product->lebar_kerusakan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <textarea class="form-control" name="Status" placeholder="Descriptoin" readonly>{{ $product->Status }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prioritas</label>
            <textarea class="form-control" name="Prioritas" placeholder="Prioritas" readonly>{{ $product->Prioritas }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection