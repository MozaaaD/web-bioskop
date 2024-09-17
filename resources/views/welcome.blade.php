@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <!-- hero section -->
          <div class="container full-height d-flex align-items-center">
            <div class="w-50 pl-5">
              <h1 class="display-4 text-start fw-bold">Nonton Film Paling Seru Ya Di <span class="text-primary">Cinema XI</span></h1>
              <p class="lead text-start text-secondary">Buruan ajak orang terdekat kamu untuk nonton film di Cinema Xi, dijamin kamu akan balik lagi.</p>
              <a href="#movies" class="btn bg-primary mr-5 py-3 px-5 text-white fs-5 rounded">Explore Movies <img src="svg/arrow.svg" alt="cinema" class="ml-2"></a>
            </div>
            <div class="w-50">
              <img src="cinema.png" alt="ean subekti">
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
                          {{-- <a href="/detail/{{ $data->id }}" class="btn btn-primary">Pesan</a> --}}
                        </div>
                    </div>
                  </div>
                    @endforeach
              </div>
        </div>
    </div>
</div>
@endsection
