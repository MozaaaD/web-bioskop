@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <!-- Hero Section -->
            <div class="container full-height d-flex align-items-center">
                <div class="w-50 pl-5">
                    <h1 class="display-4 text-start fw-bold">Nonton Film Paling Seru Ya Di <span class="text-primary">Cinema XI</span></h1>
                    <p class="lead text-start text-secondary">Buruan ajak orang terdekat kamu untuk nonton film di Cinema XI, dijamin kamu akan balik lagi.</p>
                    <a href="#movies" class="btn btn-primary py-3 px-4 fs-5 rounded shadow">Explore Movies <img src="svg/arrow.svg" alt="cinema" class="ml-2"></a>
                </div>
                <div class="w-50">
                    <img src="cinema.png" alt="Cinema XI" class="img-fluid">
                </div>
            </div>
            <br>

            <!-- Movie Cards -->
            <div class="text-center" id="movies">
                <h2 class="mt-5 mb-4">Sedang Tayang</h2>
                <div class="row justify-content-center">
                    @foreach ($datas as $data)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="/pesan/{{ $data->id }}" class="card shadow border-0" style="transition: transform 0.3s, box-shadow 0.3s;">
                            <img src="{{ 'storage/'.$data->image }}" class="card-img-top object-fit-fill" height="300" alt="{{ $data->title }}" style="object-fit: cover; border-radius: 10px 10px 0 0;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $data->title }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

      </div>
    </div>
    <!-- Footer -->
    <div class="mt-5 bg-primary">
        <p class="text-center text-white p-3 mb-0">&copy; 2024 Azom. All Rights Reserved.</p>
    </div>

<style>
    /* Custom Styles */
    body {
        background-color: #f8f9fa; /* Light background for contrast */
    }

    .card {
        transition: transform 0.3s;
        border-radius: 10px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .btn-primary {
        background: linear-gradient(90deg, #ffdd57, #f8b400);
        border: none;
        transition: background 0.3s;
    }
    .btn-primary:hover {
        background: linear-gradient(90deg, #f8b400, #ffdd57);
    }

    h2 {
        font-weight: 600;
        color: #333; /* Darker text for contrast */
    }
</style>

@endsection
