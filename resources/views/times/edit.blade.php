@extends('layouts.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-4">
        <h1 class="mb-4">Edit Time</h1>
        <form action="{{ route('times.update', $time) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="film_id">Film:</label>
                <select name="film_id" id="film_id" class="form-control" required>
                    @foreach($films as $film)
                        <option value="{{ $film->id }}" {{ $film->id == $time->film_id ? 'selected' : '' }}>{{ $film->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" id="time" class="form-control" value="{{ $time->time }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('times.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
