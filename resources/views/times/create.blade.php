@extends('layouts.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <div class="container" style="margin-top: 70px">
        <h1 class="mb-4">Tambah Jam</h1>
        <form action="{{ route('times.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="film_id">Film:</label>
                <select name="film_id" id="film_id" class="form-control" required>
                    @foreach($films as $film)
                        <option value="{{ $film->id }}">{{ $film->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="time">Tanggal:</label>
                <input type="date" name="tgl" id="tgl" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="time">Jam:</label>
                <input type="time" name="time" id="time" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="seat_number" class="form-label">Jumlah Kusi:</label>
                <input type="number" class="form-control" id="seat_number" name="seat_number" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('times.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
