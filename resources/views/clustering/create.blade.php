@extends('layouts.app')

@section('title', 'Clustering')

@section('contents')
    <h1 class="mb-0"></h1>
    <hr />
    <form action="{{ route('clustering.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="col">
                <label for="distance_c1" class="form-label">Distance C1</label>
                <input type="number" name="distance_c1" class="form-control" placeholder="Distance C1" step="0.000000001" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="distance_c2" class="form-label">Distance C2</label>
                <input type="number" name="distance_c2" class="form-control" placeholder="Distance C2" step="0.000000001" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="col">
                <label for="distance_c3" class="form-label">Distance C3</label>
                <input type="number" name="distance_c3" class="form-control" placeholder="Distance C3" step="0.000000001" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid text-center">
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
