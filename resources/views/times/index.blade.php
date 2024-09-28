@extends('layouts.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="container" style="margin-top: 70px">
        <h1 class="mb-4">Times</h1>
        <a href="{{ route('times.create') }}" class="btn btn-primary mb-3">Tambah Jam</a>
        
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Film</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($times as $time)
                    <tr>
                        <td>{{ $time->film->title }}</td>
                        <td>{{ $time->time }}</td>
                        <td>
                            <a href="{{ route('times.edit', $time) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('times.destroy', $time) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
