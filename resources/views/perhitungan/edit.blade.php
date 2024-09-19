@extends('layouts.app')

@section('title', 'Edit Data Clustering')

@section('contents')
    <div class="d-flex justify-content-end">
        
    </div>
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
    <form action="{{ route('perhitungan.update', $perhitungan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ruas</label>
                <input type="text" name="ruas" class="form-control" placeholder="Ruas" value="{{ $perhitungan->ruas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">STA Dari</label>
                <input type="number" name="sta_dari" class="form-control" placeholder="STA Dari"
                    value="{{ $perhitungan->sta_dari }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">STA Ke</label>
                <input type="number" name="sta_ke" class="form-control" placeholder="STA Ke"
                    value="{{ $perhitungan->sta_ke }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kondisi</label>
                <input type="number" name="kondisi" class="form-control" placeholder="Kondisi"
                    value="{{ $perhitungan->kondisi }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jenis</label>
                <input class="form-control" name="jenis" placeholder="Jenis" value="{{ $perhitungan->jenis }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ukuran Lubang</label>
                <input type="number" name="ukuran_lubang" class="form-control" placeholder="Ukuran Lubang"
                    value="{{ $perhitungan->ukuran_lubang }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="cluster" class="form-label">Cluster</label>
                <select type="text" name="cluster" class="form-control">
                    <option>C1</option>
                    <option>C2</option>
                    <option>C3</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button class="btn btn-outline-warning">Update</button>
                <a href="{{ route('perhitungan.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection
