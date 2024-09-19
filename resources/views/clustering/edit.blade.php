@extends('layouts.app')

@section('title', 'Clustering')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('clustering.update', $clustering->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Distance C1</label>
                <input type="number" name="distance_c1" class="form-control" placeholder="Distance C1"
                    value="{{ $clustering->distance_c1 }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Distance C2</label>
                <input type="number" name="distance_c2" class="form-control" placeholder="Distance C2"
                    value="{{ $clustering->distance_c2 }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Distance C3</label>
                <input type="number" name="distance_c3" class="form-control" placeholder="Distance C3"
                    value="{{ $clustering->distance_c3 }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button class="btn btn-outline-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
