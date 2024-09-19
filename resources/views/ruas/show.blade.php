@extends('layouts.app')

@section('title', 'Data Ruas Jalan')

@section('contents')
    <h1 class="mb-0">Detail Data Ruas Jalan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No. Ruas</label>
            <input type="text" name="no_ruas" class="form-control" placeholder="No. Ruas"
                value="{{ $ruas->no_ruas }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Provinsi</label>
            <input type="text" name="provinsi " class="form-control" placeholder="Nama Provinsi"
                value="{{ $ruas->provinsi }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Panjang Ruas (KM)</label>
            <input type="text" name="panjang_ruas" class="form-control" placeholder="Panjang Ruas (KM)"
                value="{{ $ruas->panjang_ruas }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lebar Kerasan (M)</label>
            <input class="form-control" name="lebar_kerasan" placeholder="Lebar Kerasan (M)"
                value="{{ $ruas->lebar_kerasan }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tipe Kerasan</label>
            <input type="text" name="tipe_kerasan" class="form-control" placeholder="Lebar Kerusakan"
                value="{{ $ruas->tipe_kerasan }}" disabled>
        </div>
    </div>
@endsection
