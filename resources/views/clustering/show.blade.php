@extends('layouts.app')

@section('title', 'Clustering')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Distance C1</label>
            <input type="text" name="distance_c1" class="form-control" placeholder="Distance C1"
                value="{{ $clustering->distance_c1 }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Distance C2</label>
            <input type="text" name="distance_c2 " class="form-control" placeholder="Distance C1"
                value="{{ $clustering->distance_c2 }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Distance C3</label>
            <input type="text" name="distance_c3" class="form-control" placeholder="Distance C3"
                value="{{ $clustering->distance_c3 }}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Min. Distance</label>
            <input type="text" name="min_distance" class="form-control" placeholder="Min. Distance"
                value="{{ $clustering->min_distance }}" disabled>
        </div>
    </div>
@endsection
