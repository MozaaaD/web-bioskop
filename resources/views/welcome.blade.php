@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <!-- Hero Section -->
            <div class="container full-height d-flex align-items-center fade-in">
                <div class="w-50 pl-5">
                    <h1 class="display-3 text-start fw-bold text-main text-black">
                        Nonton Film Paling Seru? <span class="text-primary no-wrap"><span class="text-dark">Di</span> Cinema XI <span class="text-black">Dong.</span></span>
                    </h1>
                    <p class="lead text-start text-secondary text-desc">Buruan ajak orang terdekat kamu untuk nonton film di Cinema XI, dijamin kamu akan balik lagi.</p>
                    <a href="#movies" class="btn btn-primary py-3 px-4 fs-5 rounded shadow">Explore Movies <img src="svg/arrow.svg" alt="cinema" class="ml-2"></a>
                </div>
                <div class="w-50 fade-in">
                    <img src="cinema.png" alt="Cinema XI" class="img-fluid">
                </div>
            </div>
            <br>

            <!-- Kartu Film -->
            <div class="text-center" id="movies">
                <h2 class="mt-5 mb-4 fade-in">Sedang Tayang</h2>
                <div class="row justify-content-center">
                    @foreach ($datas as $data)
                    <div class="col-md-3 col-sm-6 mb-4 fade-in">
                        <a href="/pesan/{{ $data->id }}" class="card shadow border-0">
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
    body {
        background-color: #f8f9fa; 
    }

    .text-main {
        color: #333; 
        transition: transform 0.3s, color 0.3s;
    }

    .text-main:hover {
        transform: scale(1.05);
        color: #000; 
    }

    .text-desc {
        color: #666; 
        transition: color 0.3s;
    }

    .text-desc:hover {
        color: #444; 
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
        color: #333; 
    }

    .no-wrap {
        white-space: nowrap;
    }

    /* Animasi Gulir */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s, transform 0.6s;
    }

    .fade-in-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .fade-out {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.6s, transform 0.6s;
    }

    .fade-out-hidden {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fadeElements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-visible');
                } else {
                    entry.target.classList.remove('fade-in-visible');
                }
            });
        });

        fadeElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

@endsection