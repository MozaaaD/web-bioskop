@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/create" class="btn btn-success mb-4">+ Tambah Film</a>
                <div class="card">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%">Flyer</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 20%">Description</th>
                            <th scope="col" style="width: 20%">Harga</th>
                            <th scope="col" style="width: 20%">Duration</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td style="width: 20%"><img src="{{ 'storage/'.$data->image }}" alt="Image not found." height="150" width="150" class="object-fit-contain"></td>
                            <td style="width: 20%" class="text-wrap">{{ $data->title }}</td>
                            <td style="width: 20%" class="text-wrap">{{ $data->description }}</td>
                            <td style="width: 20%" class="text-wrap">{{ $data->harga }}</td>
                            <td style="width: 20%">{{ $data->duration }}</td>
                            <td style="width: 20%">
                                <a href="/update/{{ $data->id }}" class="btn btn-warning">Edit</a>
                                <a href="/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
        </div>
    </div>
</div>
@endsection