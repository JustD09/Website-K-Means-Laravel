@extends('layouts.app')

@section('title', 'Penambahan Data Ruas Jalan')

@section('contents')
    <h1 class="mb-0">Masukan Data Ruas Jalan</h1>
    <hr />
    <form action="{{ route('ruas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <input type="text" name="no_ruas" class="form-control" placeholder="Masukan No. Ruas">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="provinsi" class="form-control"
                    placeholder="Nama Provinsi">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="panjang_ruas" class="form-control"
                    placeholder="Panjang Ruas (KM)">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input class="form-control" name="lebar_kerasan" placeholder="Lebar Kerasan (M)">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="tipe_kerasan" class="form-control"
                    placeholder="Lebar kerusakan jalan tersebut dalam satuan Centimeter (Cm)">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
