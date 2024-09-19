@extends('layouts.app')

@section('title', 'Edit Data Ruas Jalan')

@section('contents')
    <h1 class="mb-0">Edit Data Ruas Jalan</h1>
    <hr />
    <form action="{{ route('ruas.update', $ruas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No. Ruas</label>
                <input type="text" name="no_ruas" class="form-control" placeholder="No. Ruas"
                    value="{{ $ruas->no_ruas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Provinsi</label>
                <input type="text" name="provinsi" class="form-control" placeholder="Nama Provinsi"
                    value="{{ $ruas->provinsi }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Panjang Ruas (KM)</label>
                <input type="text" name="panjang_ruas" class="form-control" placeholder="ruas Code"
                    value="{{ $ruas->panjang_ruas }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Lebar Kerasan (M)</label>
                <input class="form-control" name="lebar_kerasan" placeholder="Lebar Kerasan (M)"
                    value="{{ $ruas->lebar_kerasan }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tipe Kerasan</label>
                <input type="text" name="tipe_kerasan" class="form-control" placeholder="Tipe Kerasan"
                    value="{{ $ruas->tipe_kerasan }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button class="btn btn-outline-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
