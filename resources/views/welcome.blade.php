@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <!-- hero section -->
          <div class="container full-height d-flex align-items-center">
            <div class="w-50">
              <h1 class="display-4 text-start fw-medium">Welcome to <br><span class="fw-bold">Bioskop Hebat</span></h1>
              <p class="lead text-start">Discover the latest films and watch trailers for free!</p>
              <a href="#movies" class="btn btn-success mr-5" style="width: 30%">Explore Movies</a>
            </div>
            <div class="w-50">
              <img src="popcorn.png" alt="ean subekti">
            </div>
          </div>
            <br>

            <!-- card -->
          <div class="d-flex justify-content-center container text-center">
                <div class="row">
                  @foreach ($datas as $data)
                  <div class="col justify-content-center" id="movies">
                    <div class="card mt-5" style="width: 13rem;">
                        <img src="{{ 'storage/'.$data->image }}" class="card-img-top" height="250" width="150" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $data->title }}</h5>
                          {{-- <p class="card-text">aoa iya</p> --}}
                          <a href="/pesan/{{ $data->id }}" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                  </div>
                    @endforeach
              </div>
        </div>
    </div>
</div>
@endsection
