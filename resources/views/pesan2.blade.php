@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5 text-center">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" class="img-fluid rounded shadow zoom-image" style="max-width: 350px; height: auto; border: 5px solid #ddd;">
    </div>
    <div class="col mt-5">
        @foreach ($times as $time)
        <label class="seat-label col-1 mx-1">
            <a href="/pesan/{{ $data->id }}/{{ $time->id }}">{{ $time->time }}</a>
        </label>
        @endforeach
    </div>
  </div>
</div>

<style>
    .seat-label {
        display: flex;
        font-size: 35px;
        flex-direction: column;
        align-items: center;
        margin: 5px; /* Reduced margin for tighter spacing */
        transition: transform 0.2s;
    }

    .seat-label:hover {
        transform: scale(1.05); /* Slight zoom on hover */
    }

    .seat-number {
        font-size: 12px;
        font-weight: bold;
        margin-top: 5px;
    }

    .seat-container input[type="checkbox"]:disabled + label {
        background-color: #f44336;
        cursor: not-allowed;
        color: #fff;
    }

    .zoom-image {
        transition: transform 0.3s ease; /* Smooth transition */
    }

    .zoom-image:hover {
        transform: scale(1.1); /* Zoom effect */
    }
</style>
@endsection