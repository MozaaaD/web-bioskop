@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col text-right">
            <a href="/create" class="btn btn-success">+ Tambah Film</a>
            <a href="/times" class="btn btn-success">+ Tambah Jam</a>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Daftar Film</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 15%">Poster</th>
                        <th scope="col" style="width: 20%">Judul</th>
                        <th scope="col" style="width: 25%">Deskripsi</th>
                        <th scope="col" style="width: 10%">Harga</th>
                        <th scope="col" style="width: 10%">Durasi</th>
                        <th scope="col" style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            <img src="{{ '/storage/'.$data->image }}" alt="Image not found." class="img-fluid" style="max-height: 150px; object-fit: cover;">
                        </td>
                        <td class="text-wrap">{{ $data->title }}</td>
                        <td class="text-wrap">{{ $data->description }}</td>
                        <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                        <td>{{ $data->duration }}</td>
                        <td>
                            <a href="/update/{{ $data->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/delete/{{ $data->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
