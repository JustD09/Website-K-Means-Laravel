@extends('layouts.app')

@section('title', 'Penambahan Data Hasil Clustering')

@section('contents')
    <h1 class="mb-0">Masukan Data Hasil Clustering</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <div class="col">
                <input type="text" name="no_ruas" class="form-control" placeholder="Masukan No. Ruas">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="nama_ruas" class="form-control" placeholder="Masukan Nama Ruas">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="cluster" class="form-control" placeholder="Cluster">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input class="form-control" name="status" placeholder="Status">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <select class="form-control" name="categories"
                    placeholder="Masukan kategori prioritas pada ruas jalan tersebut">
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
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
