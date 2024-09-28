@extends('layouts.dashboard')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h4>Edit Film</h4>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col text-center">
                        <img src="{{ '/storage/'.$data->image }}" alt="Film Poster" class="img-fluid rounded" style="max-height: 200px; object-fit: cover;">
                    </div>
                </div>
                <form action="/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $data->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $data->description }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" value="{{ $data->duration }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .card {
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .img-fluid {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
