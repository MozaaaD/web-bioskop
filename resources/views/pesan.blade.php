@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" width="300" height="450" class="object-fit-cover">
    </div>
    <div class="col">
      <div>
        <h2 class="fw-bold">{{ $data->title }}</h2>
        <p class="fw-semibold">{{ $data->description }}</p>
        <p>{{ $data->duration }}</p>
      </div>
      <div class="card">
        <form class="p-3">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kursi</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  @endsection