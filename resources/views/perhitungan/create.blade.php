@extends('layouts.app')

@section('title', 'Penghitungan Data Clustering')

@section('contents')
    <h1 class="mb-0">Masukan Data Pembangunan Ruas Jalan</h1>
    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('perhitungan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="ruas" class="form-label">Ruas</label>
                <input type="text" name="ruas" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="sta_dari" class="form-label">STA Dari</label>
                <input type="number" name="sta_dari" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="sta_ke" class="form-label">STA Ke</label>
                <input type="number" name="sta_ke" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="kondisi" class="form-label">Kondisi</label>
                <input type="number" name="kondisi" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="ukuran_lubang" class="form-label">Ukuran Lubang</label>
                <input type="number" name="ukuran_lubang" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="cluster" class="form-label">Cluster</label>
                <select type="text" name="cluster" class="form-control" required>
                    <option>C1</option>
                    <option>C2</option>
                    <option>C3</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
