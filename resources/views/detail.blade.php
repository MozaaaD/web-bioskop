@extends('layouts.app')

@section('content')
<div class="container d-flex gap-5">
    <div class="row">
        <div>
            <img src="{{ '/storage/'.$data->image }}" alt="Gambar" width="300" height="450" class="object-fit-cover">
        </div>
    </div>
    <div>
        <h1>{{ $data->title }}</h1>
        <p>{{ $data->description }}</p>
        <p>{{ $data->duration }}</p>
    </div>
</div>
@endsection