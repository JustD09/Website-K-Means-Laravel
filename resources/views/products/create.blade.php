@extends('layouts.app')

@section('title', 'Penambahan Data Pembangunan Ruas Jalan')

@section('contents')
    <h1 class="mb-0">Masukan Data Pembangunan Ruas Jalan</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <input type="text" name="nama_jalan" class="form-control" placeholder="Masukan Nama Jalan">
            </div>
            <div class="col">
                <input type="text" name="panjang_jalan" class="form-control"
                    placeholder="Panjang Jalan tersebut dalam Meter (M)">
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="Deskripsi" class="form-control"
                    placeholder="Laporan Tertulis Tentang Ruas Jalan Tersebut">
            </div>
            <div class="col">
                <textarea class="form-control" name="titik_kerusakan" placeholder="Titik Kerusakan pada jalan tersebut"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <input type="text" name="lebar_kerusakan" class="form-control"
                    placeholder="Lebar kerusakan jalan tersebut dalam satuan Centimeter (Cm)">
            </div>
            <div class="col">
                <textarea class="form-control" name="Status" placeholder="Status Pengerjaan pada Jalanan tersebut"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                {{-- <select name="Prioritas" class="form-select @error('Prioritas') is-invalid @enderror">
                    <option value="{{ @old('Prioritas')}}">{{ @old('Prioritas')}}</option>
                    <option value="Prioritas">Prioritas</option>
                    <option value="Non-Prioritas">Non Prioritas</option>
                </select> --}}
                <textarea class="form-control" name="categories" placeholder="Masukan kategori prioritas pada ruas jalan tersebut"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
