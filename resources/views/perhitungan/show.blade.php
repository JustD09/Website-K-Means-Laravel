@extends('layouts.app')

@section('title', 'Data Clustering')

@section('contents')
    <h1 class="mb-0">Data Clustering</h1>
    <hr />
    <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ruas</label>
                <input type="text" name="ruas" class="form-control" placeholder="Ruas" value="{{ $perhitungan->ruas }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">STA Dari</label>
                <input type="number" name="sta_dari" class="form-control" placeholder="STA Dari"
                    value="{{ $perhitungan->sta_dari }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">STA Ke</label>
                <input type="number" name="sta_ke" class="form-control" placeholder="STA Ke"
                    value="{{ $perhitungan->sta_ke }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kondisi</label>
                <input type="number" name="kondisi" class="form-control" placeholder="Kondisi"
                    value="{{ $perhitungan->kondisi }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jenis</label>
                <input class="form-control" name="jenis" placeholder="Jenis"
                    value="{{ $perhitungan->jenis }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ukuran Lubang</label>
                <input type="number" name="ukuran_lubang" class="form-control" placeholder="Ukuran Lubang"
                    value="{{ $perhitungan->ukuran_lubang }}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Cluster</label>
                <input type="text" name="cluster" class="form-control" placeholder="Ukuran Lubang"
                    value="{{ $perhitungan->cluster }}" disabled>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <a href="{{ route('perhitungan.index')}}" class="btn btn-outline-success">Kembali</a>
            </div>
        </div>
@endsection
